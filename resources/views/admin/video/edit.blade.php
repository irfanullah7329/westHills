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
            <p class="card-title"><strong>Edit Video </strong></p>
            <p class="card-description">
              <!-- Create User -->
            </p>
            <form class="forms-sample" action="{{ route('admin.video.update', $video->id) }}" method="post">
            
              @csrf
              @method('put')
                    <p class="card-description">
                    
                    </p>
                  <!-- row start   -->
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                  <input type="text"  name="title" id="title" class="form-control" value="{{ old('title', $video->title) }}" required/>
                                </div>
                          </div>
                        </div>
                           
                        <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                  <div class="col-sm-9">
                                    <select name="isActive" class="form-control">
                                      @if($video->status == 1  || $video->status == NULL)
                                        <option value="1" selected>Active</option>
                                        <option value="0">Inactive</option>
                                      @elseif($video->status == 0)
                                        <option value="0" selected>Inactive</option>
                                        <option value="1">Active</option>
                                      @endif
                                      
                                    </select>
                            </div>
                            </div>
                        </div>
                    
                    </div>
                  
                    <!-- row start -->
                    <div class="row">   
                    <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Video Link</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control" name="video_link"  id="video_link" value=" {{ old('video_link', $video->video_link) }}" required />
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
    
 
</div>
@endsection