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
            <p class="card-title"><strong>Edit User </strong></p>
            <p class="card-description">
              <!-- Create User -->
            </p>
            <form class="forms-sample" action="{{ route('admin.users.update', $user->UserId) }}" method="post">
            
              @csrf
              @method('put')
                    <p class="card-description">
                    <input type="hidden" name="UpdatedBy" value="{{ Auth::user()->UserId }}" />
                    </p>
                  <!-- row start   -->
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                  <input type="text"  name="FirstName" id="FirstName" class="form-control" value="{{ old('FirstName', $user->FirstName) }}" required/>
                                </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Last Name</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control" name="LastName"  id="LastName" value=" {{ old('LastName', $user->LastName) }}" required />
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
                                  <input type="email"  name="email" id="email" class="form-control"   value="{{ old('email', $user->email) }}" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                  <input type="password" class="form-control" name="password"  id="password"/>
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
                                {{-- var_dump($roles) --}}
                                  <select name="RoleId" class="form-control">
                                    
                                    @foreach($roles as $key => $role)
                                      <option value="{{ $role->RoleId }}" {{ ($role->RoleId === $user->RoleId) ? "selected" : '' }}>{{ ucfirst($role->RoleName) }}</option>
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
                                      @if($user->isActive === 1  || $user->isActive === NULL)
                                        <option value="1" selected>Active</option>
                                        <option value="0">Inactive</option>
                                      @elseif($user->isActive === 0)
                                        <option value="0" selected>Inactive</option>
                                        <option value="1">Active</option>
                                      @endif
                                      
                                    </select>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <!-- <button class="btn btn-light">Cancel</button> -->
    
            </form>
                
            
            </div>
          </div>
      </div>
    </div>
    <!-- Assign Churches To the User -->
    
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
          <div class="card">
          <div class="card-body">
           
            <p class="card-description">
            @if(session('UserChurchmessage'))
              <div class="alert alert-info alert-dismissible" role="alert">

                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      {{ session('UserChurchmessage') }}
              </div>
            @endif
            @if(session('UserChurchAssignmessage'))
              <div class="alert alert-warning alert-dismissible" role="alert">

                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      {{ session('UserChurchAssignmessage') }}
              </div>
            @endif
            </p>
            <form class="forms-sample" action="{{ route('admin.users.asign.churches') }}" method="post">
            
              @csrf
             
                    <p class="card-description">
                    <input type="hidden" name="UpdatedBy" value="{{ Auth::user()->UserId }}" />
                    <input type="hidden" name="UserId" value="{{ $user->UserId }}" />
                    </p>
                  <!-- row start   -->
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                        <p class="card-title"><strong>User: {{ $user->FirstName }} Assgined Churches </strong></p>
                          <div class="form-group row">
                            <select id="selected-churches-multipple" name="userSelectedChurches[]" multiple="multiple">
                             
                              @foreach($allChurches as $churchId => $churchName)
                                  @php
                                    $selected = "";
                                  @endphp
                                  @foreach($userAssignedChurches as $assignChurchId=>$assignUerId)
                                          @if($assignChurchId == $churchId)
                                              @php $selected = "selected"; @endphp
                                          @endif
                                  @endforeach
                                <option value="{{ $churchId }}" {{ $selected }}>{{ $churchName }}</option>
                              @endforeach
                            </select>
                            <select name="oldAssignedChurches[]" multiple="multiple" style="display:none">
                                @foreach($userAssignedChurches as $assignChurchId=>$assignUerId)
                                  <option value="{{ $assignChurchId }}" selected>{{ $allChurches[$assignChurchId] }}</option>
                                @endforeach
                            </select>
                                
                          </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                    <!-- row end -->
                
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <!-- <button class="btn btn-light">Cancel</button> -->
    
            </form>
           
            
            </div>
          </div>
      </div>
    </div>
</div>
@endsection