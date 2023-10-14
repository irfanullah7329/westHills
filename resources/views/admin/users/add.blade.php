@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card"> 
              
            <div class="card-body">
              @include('admin.partials.success-messages')
              @include('admin.partials.validation-error-messages')
            <a href="{{ route('admin.users.list')}}" style="float:right;">Show all users</a>
            <p class="card-title"><strong>Add New User </strong></p>
            <!-- <h4 class="card-title" style="float:right;">View All</h4> -->
            <p class="card-description">
              <!-- Create User -->
            </p>
            <form class="form-sample" action="{{ route('admin.users.store') }}" method="post">
              @csrf
                    <p class="card-description">
                        <input type="hidden" name="CreatedBy" value="{{ Auth::user()->UserId }}" />
                    </p>
                  <!-- row start   -->
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                  <input type="text"  name="FirstName" id="FirstName" value="{{ old('FirstName') }}" class="form-control" required/>
                                </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Last Name</label>
                                  <div class="col-sm-9">
                                    <input type="text"  name="LastName"  id="LastName" value="{{ old('LastName') }}" class="form-control" required />
                                  </div>
                              </div>
                        </div>
                    </div>
                    <!-- row end -->
                    <!-- row start -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email Address</label>
                                <div class="col-sm-9">
                                  <input type="email"  name="email" id="email" value="{{ old('email') }}" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                  <input type="password" class="form-control" name="password"  value="{{ old('passowrd') }}" id="password" required/>
                                </div>
                            </div>
                          </div>
                    </div>
                    <!-- row end -->
                    <!-- row start -->
                    <div class="row">   
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Role</label>
                                <div class="col-sm-9">
                                  <select name="RoleId" class="form-control">
                                    @foreach($roles as $key=> $role)
                                    <option value="{{ $role->RoleId}}">{{ ucfirst($role->RoleName) }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                          </div>
                        <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                  <div class="col-sm-9">
                                      <select name="isActive" class="form-control">
                                      <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                      </select>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <!-- <button class="btn btn-light">Cancel</button> -->
    
            </form>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection