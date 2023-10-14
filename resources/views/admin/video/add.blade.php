@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card"> 
              
            <div class="card-body">
              @include('admin.partials.success-messages')
              @include('admin.partials.validation-error-messages')
            <a href="{{ route('admin.video.list')}}" style="float:right;">Show all Video</a>
            <p class="card-title"><strong>Video</strong></p>
            <!-- <h4 class="card-title" style="float:right;">View All</h4> -->
            <p class="card-description">
              <!-- Create User -->
            </p>
            <form class="form-sample" action="{{ route('admin.video.store') }}" method="post">
              @csrf
                    <p class="card-description">
                        <input type="hidden" name="CreatedBy" value="{{ Auth::user()->UserId }}" />
                    </p>
                  <!-- row start   -->
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                  <input type="text"  name="title" id="title" value="{{ old('title') }}" class="form-control" required/>
                                </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                  <div class="col-sm-9">
                                      <select name="status" class="form-control">
                                      <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                      </select>
                            </div>
                            </div>
                        </div>
                       
                    </div>
                    <!-- row end -->
                    <!-- row start -->
                  
                    <!-- row end -->
                    <!-- row start -->
                    <div class="row">   
                         <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Video Link</label>
                                    <div class="col-sm-9">
                                      <input type="text"  name="video_link"  id="video_link" value="{{ old('video') }}" class="form-control" required />
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