@include('salesheader')

<section class="top-heading">
<div class="container-fluid px-5">
    <div class="col-md-12">
  
       <div class="headingmain">
           <h3>Create Sales Form</h3>
       </div>
   </div>
   </div>
</section>

<div class="main-content">
			<div class="container-fluid px-5">
			<div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8">
              <div class="container">
             
                 
                      <div class="card card-body">
                         <form action="{{url('/insert-sales')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Sales Name</label>
                                      <input type="hidden" name="user_id">
                                      <input type="text" name="executive_name" class="form-control" id="input-423">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="input-442">Client Name</label>
                                      <input type="text" name="client_name" class="form-control" id="input-442">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Billing Date</label>
                                      <input type="text" name="billingdate" class="form-control" id="input-423">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="input-442">Reporting Date</label>
                                      <input type="text" name="reportingdate" class="form-control" id="input-442">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Client Website</label>
                                      <input type="text" name="website" class="form-control" id="input-423">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="input-442">Industry</label>
                                      <input type="text" name="industry" class="form-control" id="input-442">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Email</label>
                                      <input type="text" name="email" class="form-control" id="input-423">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="input-442">Phone No.</label>
                                      <input type="text" name="phone" class="form-control" id="input-442">
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Country</label>
                                      <input type="text" name="country" class="form-control" id="input-423">
                                  </div>


                                  <div class="form-group col-md-6">
                                      <label for="input-423">Address</label>
                                      <input type="text" name="address" class="form-control" id="input-423">
                                  </div>
                                  
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Package</label>
                                      <input type="text" name="package" class="form-control">
                                  </div>
                                  
                                  <div class="form-group col-md-6">
                                      <label>Package Price</label>
                                      <input type="text" name="package_price" class="form-control">
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Keywords</label>
                                      <input type="text" name="keywords" class="form-control" id="input-423">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="input-442">Balance</label>
                                      <input type="number" name="balance" class="form-control">
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Remark</label>
                                      <input type="text" name="remark" class="form-control" id="input-423">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="input-442">Assign To</label>
                                      <input type="text" name="assign" class="form-control">
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">PDF</label>
                                      <input type="file" name="pdf" class="form-control" id="input-423">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="input-442">Time Zone</label>
                                      <select name="time_zone" class="form-control">
                                          <option value="">--Select Time Zone--</option>
                                          <option>EST</option>
                                          <option>IST</option>
                                          <option>GMT</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="mb-3 form-check">
                                <input type="checkbox" name="status" class="form-check-input">
                                <label class="form-check-label" for="exampleCheck1">Status</label>
                              </div>
                            <button class="btn btn-primary">Save</button>
                      </div>
                  </div>
                </div>
        
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="container">
              <div class="card card-body">
                  <div class="form-group">
                      <label for="input-442">Google My Business</label>
                        <select name="googlemybusiness" style="width: 100px;">
                         <option></option>
                         <option>Yes</option>
                         <option>No</option>
                         </select>
                          
                        </div>
                  </div>
                  <div class="card card-body">
                  <div class="form-group">
                      <label for="input-442">Social Media</label>
                        <select name="socialmedia" style="width: 100px;">
                         <option></option>
                         <option>Yes</option>
                         <option>No</option>
                         </select>
                        </div>
                  </div>
                  <div class="card card-body">
                      <h5 style="margin-bottom:20px;">Edit Status</h5>
                    <div class="form-group">
                       <div class="form-check space">
                            <input type="checkbox" class="form-check-input" name="active">
                            <label class="form-check-label" for="chkCodeudor">
                                Active
                            </label>
                            </div>

                            <div class="form-check space">
                            <input type="checkbox" class="form-check-input" name="hold" id="hold">
                            <label class="form-check-label" for="tempholdd">
                                Hold
                            </label>
                            </div>

                            <div class="modal fade" id="activemodal" role="dialog">
                             <div class="modal-dialog">
                                 
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <textarea name="holdreason" placeholder="Enter Reason for hold" rows="5" cols="40"></textarea>
                                </div>
                                <div class="modal-footer">
                                <button type="button"  class="btn btn-default" data-dismiss="modal" >Close</button>
                                </div>
                              </div>
                            </div>
                        </div>

                            <div class="form-check space">
                            <input type="checkbox" class="form-check-input" name="temporaryhold" id="temphold">
                            <label class="form-check-label" for="temphold">
                            Temporary Hold
                            </label>
                            </div>

                                <!-- Modal -->
                               

                             <div class="modal fade" id="myModal" role="dialog">
                             <div class="modal-dialog">
                                 
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <textarea name="reason" placeholder="Enter Reason for temporary" rows="5" cols="40"></textarea>
                                </div>
                                <div class="modal-footer">
                                <button type="button"  class="btn btn-default" data-dismiss="modal" >Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                     </div>
                  </div>
              </div>
          </div>
          </div>
          </div>
      </div>
    
      </form>		
					
            <div class="row ">
                <div class="col-lg-12 col-md-12">
                    <div class="card" style="min-height: 485px">
                        <div class="card-header card-header-text">
                            <h4 class="card-title">Sales Stats</h4>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-dark">
                                    <tr><th>ID</th>
                                    <th>Client Name</th>
                                    <th>Website</th>
                                    <th>Billing Date</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            @php $i=1; @endphp
                               @foreach($getsalesorder as $key=>$val)
                                <tbody>
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$val->client_name}}</td>
                                        <td>{{$val->website}}</td>
                                        <td>{{$val->billingdate}}</td>
                                        <td><a href="{{ url('edit-sales/'.$val->id) }}" class="btn btn-success">Edit</a></td>
                                        <td><a href="{{ url('delete-sales/'.$val->id) }}" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                </tbody>
                                @php $i=$i+1; @endphp
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@include('salesfooter')