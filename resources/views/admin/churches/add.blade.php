@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    @include('admin.partials.success-messages')
                    @include('admin.partials.validation-error-messages')
                <a  href="{{ route('admin.churches.list') }}" style="float:right;">Show all churches</a>
                    <h4 class="card-title"></h4>
                    <form class="form-sample" action="{{ route('admin.churches.store')}}" method="post" enctype="multipart/form-data">
                        <h5>Add New Church</h5>
                        <br>
                            <p class="card-description">
                                <input type="hidden" name="CreatedBy" value="{{ Auth::user()->UserId }}" />       
                            </p> 
                        @csrf
                        <div class="row">
                        <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="ImageUrl" id="ImageUrl" class="form-control">
                                        <!-- <div class="file-upload-wrapper">
                                            <div id="fileuploader">Upload</div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ChurchName" id="ChurchName" value="{{ old('ChurchName')}}"class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Type</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="ClientTypeId" required>
                                        @foreach($clientTypes as $clientType)    
                                            <option value="{{ $clientType->ClientTypeId}}">{{ $clientType->ClientTypeTitle }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <hr>
                        <h4>Location Details</h4><br>

                        <!-- <p class="card-description">
                                        
                                        </p> -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="Address" id="Address" value="{{ old('Address') }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Town</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="Town" id="Town" value="{{ old('Town') }}" class="form-control" required>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Country</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="CountyId" id="CountyId" required>
                                            <option value="1">America</option>
                                            <option value="2">Italy</option>
                                            <option value="3">Russia</option>
                                            <option value="4">Britain</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4>Contact Details</h4>
                        <br>
                        <div class="row">
                        <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="EmailAddress" id="EmailAddress" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="Phone" id="Phone" value="{{ old('Phone') }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Website</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="Website" id="Website" value="{{ old('Website') }}" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Page Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="Password" id="Password" value="{{ old('Password') }}" class="form-control" > 
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-icon-text">
                            
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection