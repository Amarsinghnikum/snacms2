@include('header')
<section>
<form action="{{url('/saveclient')}}" method="post">
        @csrf
    <div class="container">
  <div class="form-row">
    <div class="form-group col-md-6">
    @php 
        $user_id = "";
        @endphp
        @if(Session::get('usersession'))
        @php
        $sessiondata = Session::get('usersession');
        $userid = $sessiondata->id;
        $url="/index";
        @endphp
        @endif
        
      <label for="inputEmail4">Client Name</label>
      <input type="hidden" name="user_id">
      <input type="text" name="client_name" class="form-control" id="inputEmail4" placeholder="Enter Client Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Website</label>
      <input type="text" name="website" class="form-control" placeholder="Enter Client Website">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Expected Payment</label>
      <input type="date" name="billingdate" class="form-control" placeholder="Enter Billing date">
    </div>
  </div>
  <!-- <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div> -->
  <!-- <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div> -->
  <!-- <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div> -->
  <button type="submit" name="submit"class="btn btn-primary">Save</button>
  
</form>
</section>
@include('footer')