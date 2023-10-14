@extends('admin.layout.default')
@section('content')
<div class="content-wrapper">
    <!--Start Tabs -->
       <div class="row">
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                    @include('admin.partials.success-messages')

                    @include('admin.partials.validation-error-messages')

                    <a href="{{ route('admin.churches.list')}}" style="float:right;">Show all churches</a>
                    <p class="card-title"><strong>Edit Church </strong> </p>
                    <h1 class="display-2">
                      @if(isset($church->ImageUrl))
                        <img src="{{ $church->getImagePath($church->ImageUrl) }}"  class="img-lg rounded-circle mb-3">
                      @endif
                        {{ $church->ChurchName}} 
                    </h1>
                    <div class="row">
                    <div class="col-md-12 mx-auto">
                      <ul class="nav nav-pills nav-pills-custom" id="pills-tab-custom" role="tablist">
                        <li class="nav-item" style="margin-right: 0.2rem;">
                          <a class="nav-link active" style="padding: 7px 20px;"  id="pills-church-detail-tab-custom" data-toggle="pill" href="#pills-church-detail" role="tab" aria-controls="pills-church-detail" aria-selected="true">
                            Church detail
                          </a>
                        </li>
                        <li class="nav-item" style="margin-right: 0.2rem;">
                          <a class="nav-link" style="padding: 7px 20px;" id="pills-church-camera-tab-custom" data-toggle="pill" href="#pills-church-camera" role="tab" aria-controls="pills-church-camera" aria-selected="false">
                            Add camera
                          </a>
                        </li>
                        <li class="nav-item" style="margin-right: 0.2rem;">
                          <a class="nav-link" style="padding: 7px 20px;" id="pills-church-picture-tab-custom" data-toggle="pill" href="#pills-church-picture" role="tab" aria-controls="pills-church-picture" aria-selected="false">
                            Add picture
                          </a>
                        </li>
                        <li class="nav-item" style="margin-right: 0.2rem;">
                          <a class="nav-link" style="padding: 7px 20px;" id="pills-church-slideshow-tab-custom" data-toggle="pill" href="#pills-church-slideshow" role="tab" aria-controls="pills-church-slideshow" aria-selected="false">
                            Add slideshow
                          </a>
                        </li>
                        <li class="nav-item" style="margin-right: 0.2rem;">
                          <a class="nav-link" style="padding: 7px 20px;" id="pills-church-video-tab-custom" data-toggle="pill" href="#pills-church-video" role="tab" aria-controls="pills-church-video" aria-selected="false">
                            Add video
                          </a>
                        </li>
                        <li class="nav-item" style="margin-right: 0.2rem;">
                          <a class="nav-link" id="pills-church-setup-tab-custom" data-toggle="pill" href="#pills-church-setup" role="tab" aria-controls="pills-church-setup" aria-selected="false">
                            Add Setup
                          </a>
                        </li>
                        <li class="nav-item" style="margin-right: 0.2rem;">
                          <a class="nav-link" style="padding: 7px 20px;" id="pills-church-notice-tab-custom" data-toggle="pill" href="#pills-church-notice" role="tab" aria-controls="pills-church-notice" aria-selected="false">
                            Add Notice
                          </a>
                        </li>
                        <li class="nav-item" style="margin-right: 0.2rem;">
                          <a class="nav-link" style="padding: 7px 20px;" id="pills-church-announcement-tab-custom" data-toggle="pill" href="#pills-church-announcement" role="tab" aria-controls="pills-church-announcement" aria-selected="false">
                            Add Announcement
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content tab-content-custom-pill" id="pills-tabContent-custom">
                       
                        <div class="tab-pane fade show active" id="pills-church-detail" role="tabpanel" aria-labelledby="pills-church-detail-tab-custom">
                            @include('admin.churches.components.church-detail')
                        </div>

                        <div class="tab-pane fade" id="pills-church-camera" role="tabpanel" aria-labelledby="pills-church-camera-tab-custom">
                          @include('admin.churches.components.church-camera')
                        </div>

                        <div class="tab-pane fade" id="pills-church-picture" role="tabpanel" aria-labelledby="pills-church-picture-tab-custom">
                          @include('admin.churches.components.church-picture')
                        </div>

                        <div class="tab-pane fade" id="pills-church-slideshow" role="tabpanel" aria-labelledby="pills-church-slideshow-tab-custom">
                          @include('admin.churches.components.church-slideshow')
                        </div>

                        <div class="tab-pane fade" id="pills-church-video" role="tabpanel" aria-labelledby="pills-church-video-tab-custom">
                          @include('admin.churches.components.church-video')
                        </div>
                        <div class="tab-pane fade" id="pills-church-setup" role="tabpanel" aria-labelledby="pills-church-setup-tab-custom">
                          @include('admin.churches.components.church-setup')
                        </div>
                        <div class="tab-pane fade" id="pills-church-notice" role="tabpanel" aria-labelledby="pills-church-notice-tab-custom">
                          @include('admin.churches.components.church-notice')
                        </div>
                        <div class="tab-pane fade" id="pills-church-announcement" role="tabpanel" aria-labelledby="pills-church-announcement-tab-custom">
                          @include('admin.churches.components.church-announcement')
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
        </div>
    <!--ENd Tabs -->
        
    
</div>
@endsection