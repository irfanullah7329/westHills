@extends('layouts.default')

@section('content')
  <!-- Main Content -->
  <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="page-content">
                        <!-- Services 1 -->
                        <div class="row-services-1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                    </div>
                                    @if(!empty($services) && $services->count())
                                    @foreach($services as $key=>$service)
                                    <div class="col-md-4">
                                        <div class="wprt-image-box style-1 clearfix ">
                                            <div class="item">
                                                <div class="inner">
                                                    <div class="thumb">
                                                        <img width="370" height="250" src="{{asset('construct/assets/img/services/service-1.jpg')}}" alt="Image">
                                                    </div>
                                                    
                                                    <div class="text-wrap">
                                                        <h3 class="title"><a target="_blank" href="#">{{ $service->title}} </a></h3>  

                                                        <div class="desc">{{$service->description}}</div> 

                                                        <div class="wprt-btn"><a target="_blank" class="simple-link font-heading" href="#">READ MORE</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.wprt-image-box style-1 -->

                                       

                                      

                                        <div class="wprt-spacer clearfix" data-desktop="0" data-mobi="40" data-smobi="40"></div>
                                    </div>
                                   @endforeach
                                   @endif
                                   
                                </div>
                            </div><!-- /.container -->
                        </div>
                        <!-- /Services 1 -->

                    <br><br><br>
                    
                    </div><!-- /.page-content -->
                </div><!-- /#inner-content -->
            </div><!-- /#site-content -->
        </div><!-- /#content-wrap -->
    </div>
    <!-- /Main Content -->
@endsection