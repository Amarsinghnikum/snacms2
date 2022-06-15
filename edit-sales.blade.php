@include('sales.header')
<section>
<div class="main-content">
			
			<div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8">
              <div class="container">
              
                  <div class="collapse show" id="collapseExample">
                      <div class="card card-body">
                        <form action="{{url('/update-sales/'.$orders->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Executive Name(SEO)</label>
                                      <input type="hidden" name="user_id">
                                      <input type="text" name="executive_name" value="{{ $orders->executive_name }}" class="form-control" id="input-423">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="input-442">Client Name</label>
                                      <input type="text" name="client_name" value="{{ $orders->client_name }}" class="form-control" id="input-442">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Billing Date</label>
                                      <input type="text" name="billingdate" value="{{ $orders->billingdate }}" class="form-control" id="input-423">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="input-442">Reporting Date</label>
                                      <input type="text" name="reportingdate" value="{{ $orders->reportingdate }}" class="form-control" id="input-442">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Client Website</label>
                                      <input type="text" name="website" value="{{ $orders->website }}" class="form-control" id="input-423">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="input-442">Industry</label>
                                      <input type="text" name="industry" value="{{ $orders->industry }}" class="form-control" id="input-442">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Email</label>
                                      <input type="text" name="email" value="{{ $orders->email }}" class="form-control" id="input-423">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="input-442">Phone No.</label>
                                      <input type="text" name="phone" value="{{ $orders->phone }}" class="form-control" id="input-442">
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Country</label>
                                      <input type="text" name="country" value="{{ $orders->country }}" class="form-control" id="input-423">
                                  </div>

                                  <div class="form-group col-md-6">
                                      <label for="input-442">Time Zone</label>
                                      <select name="time_zone" class="form-control">
                                      <option>{{$orders->time_zone}}</option>
                                          <option>EST</option>
                                          <option>IST</option>
                                          <option>GMT</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Package</label>
                                      <input type="text" name="package" value="{{ $orders->package }}" class="form-control">
                                  </div>
                                  
                                  <div class="form-group col-md-6">
                                      <label>Package Price</label>
                                      <input type="text" name="package_price" value="{{ $orders->package_price }}" class="form-control">
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Keywords</label>
                                      <input type="text" name="keywords" value="{{ $orders->keywords }}" class="form-control" id="input-423">
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label for="input-442">Balance</label>
                                      <input type="number" name="balance" value="{{ $orders->balance }}" class="form-control">
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">Remark</label>
                                      <input type="text" name="remark" value="{{ $orders->remark }}" class="form-control" id="input-423">
                                  </div>
                              </div>
                              <div class="form-row">
                                  <div class="form-group col-md-6">
                                      <label for="input-423">PDF</label>
                                      <input type="file" name="pdf" class="form-control" id="input-423">
                                      <a href="{{url('/pdf/'.$orders->pdf)}}">{{ $orders->pdf }}</a>
                                    </div>
                              </div>
                              <div class="mb-3 form-check">
                                <input type="checkbox" name="status" value="status" {{ $orders->status=="1"?"Checked":"" }} class="form-check-input">
                                <label class="form-check-label" for="exampleCheck1">Status</label>
                              </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-body">
                  <div class="form-group">
                      <label for="input-442">Google My Business</label>

                         <select name="googlemybusiness" style="width: 100px;">
                         <option>{{ $orders->googlemybusiness }}</option>
                         <option>Yes</option>
                         <option>No</option>
                         </select>
                          
                        </div>
                  </div>
                  <div class="card card-body">
                  <div class="form-group">
                      <label for="input-442">Social Media</label>

                         <select name="socialmedia" style="width: 100px;">
                         <option>{{ $orders->socialmedia }}</option>
                         <option>Yes</option>
                         <option>No</option>
                         </select>
                        </div>
                  </div>

                  <div class="card card-body">
                      <h5 style="margin-bottom:20px;">Edit Status</h5>
                    <div class="form-group">
                       <div class="form-check space">
                            <input type="checkbox" class="form-check-input" name="active" value="active" {{ $orders->active=="1"?"Checked":"" }}>
                            <label class="form-check-label" for="chkCodeudor">
                                Active
                            </label>
                            </div>

                            <div class="form-check space">
                            <input type="checkbox" class="form-check-input" name="hold" value="hold" {{ $orders->hold=="1"?"Checked":"" }}>
                            <label class="form-check-label" for="chkCodeudor">
                                Hold
                            </label>
                            </div>

                            <div class="form-check space">
                            <label class="form-check-label">
                            Reason for Hold
                            </label>
                            </div>
                            <div class="form-check space">
                            <textarea name="holdreason" cols="30" rows="4">{{$orders->holdreason}}</textarea>
                            </div>
                            <div class="form-check space">
                            <input type="checkbox" class="form-check-input" name="temporaryhold" id="temphold" value="temporaryhold" {{ $orders->temporaryhold=="1"?"Checked":"" }}>
                            <label class="form-check-label" for="temphold">
                            Temporary Hold
                            </label>
                            </div>

                            <div class="form-check space">
                            <label class="form-check-label">
                            Reason for Temporary Hold
                            </label>
                            </div>
                            <div class="form-check space">
                            <textarea name="reason" cols="30" rows="4">{{$orders->reason}}</textarea>
                            </div>
                     </div>
                  </div>
              </div>
          </div>
      </div>
</div>
</section>

@include('sales.footer')