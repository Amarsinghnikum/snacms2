@include('header')

<div class="container">
<div class="row ">
        <div class="col-lg-12 col-md-12">
            <div class="card" style="min-height: 485px">
                <div class="card-header card-header-text">
                    <h4 class="card-title">My Orders</h4>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover">
                        <thead class="text-primary">
                            <tr><th>ID</th>
                            <th>Client Name</th>
                            <th>Website</th>
                            <th>Billing Date</th>
                            <th>Add</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr></thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach($getorders as $key=>$val)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$val->client_name}}</td>
                                <td>{{$val->website}}</td>
                                <td>{{$val->billingdate}}</td>
                                <td>
                                <form action="{{url('/add_to_current')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="order_id" value="{{ $val->id }}">
                                    <input type="hidden" name="client_name" value="{{ $val->client_name }}">
                                    <input type="hidden" name="website" value="{{ $val->website }}">
                                    <input type="hidden" name="billingdate" value="{{ $val->billingdate }}">
                                    <button class="btn btn-primary">Add to Current</button>
                                </form>
                                </td>
                                <td><a href="{{ url('edit-order/'.$val->id) }}" class="btn btn-success">Edit</a></td>
                                <td><a href="{{ url('delete-order/'.$val->id) }}" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @php $i=$i+1; @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
					
</div>
@include('footer')