<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Current;
use App\Models\Pending;

use Illuminate\Support\Facades\File;
use Image;
use Session;
use DB;
use Auth;
use Hash;
use Response;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('order', compact('orders'));
    }

    public function index2(Request $request)
    {
        $user_id = Session::get('usersession')->id;
        $data[] ='';
        $data['getorders'] = DB::table('orders')->where('user_id',$user_id)->get();
        return view('myorder', $data);
    }

    public function add()
    {
        $category = User::all();
        return view('admin.product.add', compact('category'));
    }

    public function insert(Request $request)
    {
        $user_id = Session::get('usersession')->id;
        $orders = new Order();
        
        if($request->hasFile('pdf'))
        {
            $file = $request->file('pdf');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('pdf/',$filename);
            $orders->pdf = $filename;
        }

        $orders->user_id = $user_id;
        $orders->executive_name = $request->input('executive_name');
        $orders->client_name = $request->input('client_name');
        $orders->billingdate = $request->input('billingdate');
        $orders->reportingdate = $request->input('reportingdate');
        $orders->website = $request->input('website');
        $orders->industry = $request->input('industry');
        $orders->email = $request->input('email');
        $orders->phone = $request->input('phone');
        $orders->country = $request->input('country');
        $orders->time_zone = $request->input('time_zone');
        $orders->package = $request->input('package');
        $orders->package_price = $request->input('package_price');
        $orders->keywords = $request->input('keywords');
        $orders->balance = $request->input('balance');
        $orders->remark = $request->input('remark');
        $orders->assign = $request->input('assign');
        $orders->googlemybusiness = $request->input('googlemybusiness');
        $orders->socialmedia = $request->input('socialmedia');
        $orders->status = $request->input('status') == TRUE ? '1':'0';
        $orders->active = $request->input('active') == TRUE ? '1':'0';
        $orders->hold = $request->input('hold') == TRUE ? '1':'0';
        $orders->temporaryhold = $request->input('temporaryhold') == TRUE ? '1':'0';
        $orders->reason = $request->input('reason');
        $orders->holdreason = $request->input('holdreason');
        $orders->save();
        return redirect('myorder')->with('status',"Product Added Successfully");
    }

    public function edit($id)
    {
        $orders = Order::find($id);
        return view('edit-orders', compact('orders'));
    }

    public function update(Request $request, $id)
    {
        $orders = Order::find($id);
        if($request->hasFile('pdf'))
        {
            $path = 'pdf/'.$orders->pdf;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('pdf');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('pdf/',$filename);
            $orders->pdf = $filename;
        }
        
        $orders->executive_name = $request->input('executive_name');
        $orders->client_name = $request->input('client_name');
        $orders->billingdate = $request->input('billingdate');
        $orders->reportingdate = $request->input('reportingdate');
        $orders->website = $request->input('website');
        $orders->industry = $request->input('industry');
        $orders->email = $request->input('email');
        $orders->phone = $request->input('phone');
        $orders->country = $request->input('country');
        $orders->time_zone = $request->input('time_zone');
        $orders->package = $request->input('package');
        $orders->package_price = $request->input('package_price');
        $orders->keywords = $request->input('keywords');
        $orders->balance = $request->input('balance');
        $orders->remark = $request->input('remark');
        $orders->assign = $request->input('assign');
        $orders->googlemybusiness = $request->input('googlemybusiness');
        $orders->socialmedia = $request->input('socialmedia');
        $orders->status = $request->input('status') == TRUE ? '1':'0';
        $orders->active = $request->input('active') == TRUE ? '1':'0';
        $orders->hold = $request->input('hold') == TRUE ? '1':'0';
        $orders->temporaryhold = $request->input('temporaryhold') == TRUE ? '1':'0';
        $orders->reason = $request->input('reason');
        $orders->holdreason = $request->input('holdreason');
        $orders->update();
        return redirect('myorder')->with('status',"Order Updated Successfully");
    }

    public function destroy($id)
    {
        $orders = Order::find($id);
        if($orders->pdf)
        {
            $path = 'pdf/'.$orders->pdf;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $orders->delete();
        return redirect('myorder')->with('status',"Order Deleted Successfully");
    }

    public function orderNow(Request $request)
    {
        $user_id = Session::get('usersession')->id;

        $data['getcurrent'] = DB::table('current_payment')->get();
        $data['getpending'] = DB::table('pending_payment')->get();

        $total= $products = DB::table('orders')
        ->join('pending_payment','pending_payment.order_id','=','orders.id')
        ->where('orders.user_id',$user_id)
        ->get();

        return view('index',$data,['total'=>$total]);
    }

    public function orderPlace(Request $req)
    {
        $user_id = Session::get('usersession')->id;

        $data['getcurrent'] = DB::table('orders')->where('user_id',$user_id)->get();
        $getorder = DB::table('orders')->where('user_id',$user_id)->first();
        $order_id = $getorder->id;
        $getcurrents = DB::table('current_payment')->where('user_id',$user_id)->first();
        $current_id = $getcurrents->id;
        $data['getpending'] = DB::table('pending_payment')->where('user_id',$user_id)->get();

        $allCart= Current::where('id',$current_id)->get();
        
        foreach($allCart as $cart)
        {
            $order = new Pending;
            $order->order_id=$order_id;
            $order->user_id=$cart['user_id'];
            $order->current_id=$current_id;
            $order->client_name=$cart['client_name'];
            $order->website=$cart['website'];
            $order->billingdate=$cart['billingdate'];
            $order->save();
            Current::where('id',$current_id)->delete();
            return redirect('index');
        }
        $req->input();
        return view('index',$data);
    }

    public function deletepending($id)
    {
        $orders = Pending::find($id);
        $orders->delete();
        return redirect('index')->with('status',"Order Deleted Successfully");
    }

    function detail($id)
    {
        $data = Order::find($id);
        return view('index',['orders'=>$data]);
    }

    public function addToCart(Request $req)
    {
        if($req->session()->has('usersession'))
        {
            $cart = new Current;
            $cart->user_id=$req->session()->get('usersession')->id;
            $cart->order_id=$req->order_id;
            $cart->client_name=$req->client_name;
            $cart->website=$req->website;
            $cart->billingdate=$req->billingdate;
            $cart->save();
            return redirect('/index');
        }
        else{
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId=Session::get('usersession')->id;
        return Current::where('user_id',$userId)->count();
    }
}
