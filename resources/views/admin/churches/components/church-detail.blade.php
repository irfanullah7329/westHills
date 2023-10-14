    <!-- This church Id is for to load picture tab,slideshow,and video -->
    <form name="main-church-detail-form-name" id="{{ $church->ChurchId }}" class="form-sample main-church-detail-form" action="{{ route('admin.churches.update', $church->ChurchId)}}" method="post"
    enctype="multipart/form-data">

    @csrf
    @method('PUT')
    <div class="row">
    <div class="col-md-4">
            <div class="form-group row">
                <input type="hidden" name="UpdatedBy" value="{{ Auth::user()->UserId }}" />
                <label class="col-sm-3 col-form-label">Image</label>
                <div class="col-sm-9">
                    <input type="file" name="ImageUrl" id="ImageUrl" class="form-control">
                    @if(isset($church->ImageUrl))
                    <div class="file-upload-wrapper">
                        <input type="hidden" name="OldImageUrl" id="OldImageUrl" value="{{ $church->ImageUrl }}" class="form-control">
                    </div>  
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" name="ChurchName" id="ChurchName" value="{{ old('ChurchName', $church->ChurchName) }}"class="form-control" required>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Type</label>
                <div class="col-sm-9">
                    <select class="form-control" name="ClientTypeId" required>
                            @foreach($clientTypes as $key => $clientType)
                                <option value="{{ $clientType->ClientTypeId }}" {{ ($clientType->ClientTypeId === $church->ClientTypeId) ? "selected" : '' }}>{{ ucfirst($clientType->ClientTypeTitle) }}</option>
                            @endforeach
                    </select>
                </div>
            </div>
        </div>
        
    </div>
    <hr>
    <h4>Location Details</h4><br>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-9">
                    <input type="text" name="Address" id="Address" value="{{ old('Address', $church->Address) }}" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Town</label>
                <div class="col-sm-9">
                    <input type="text" name="Town" id="Town" value="{{ old('Town', $church->Town) }}" class="form-control" required>

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
                    <input type="text" name="EmailAddress" value="{{ old('EmailAddress', $church->EmailAddress )}}" id="EmailAddress" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-9">
                    <input type="text" name="Phone" id="Phone" value="{{ old('Phone', $church->Phone) }}" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Website</label>
                <div class="col-sm-9">
                    <input type="text" name="Website" id="Website" value="{{ old('Website', $church->Website) }}" class="form-control" required>
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
        
        Update
    </button>
</form>