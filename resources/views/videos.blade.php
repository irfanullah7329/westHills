 @extends('layouts.default')

 @section('content')

 <!-- Main Content -->
 <div id="main-content" class="site-main clearfix">
     <div id="content-wrap">
         <div id="site-content" class="site-content clearfix">
             <div id="inner-content" class="inner-content-wrap">
                 <div class="page-content">
                     <!-- Portfolio 2 -->
                     <div class="row-portfolio-2">
                         <div class="container">
                             <div class="row">
                                 <div class="col-md-12">
                                     <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60">
                                     </div>

                                     <div class="wprt-portfolio-grid" data-column="3" data-column2="3" data-column3="2"
                                         data-column4="1" data-gaph="30" data-gapv="30">
                                      
                                         <div id="projects" class="cbp">
                                         @if(!empty($videos) && $videos->count())
                                         @foreach($videos as $key=>$video)
                                             <div class="cbp-item">
                                                 <div class="project-item">
                                                     <div class="inner">
                                                         <div class="effect-default">
                                                             <iframe width="420" height="315"
                                                                 src="{{$video->video_link.'?autoplay=0&mute=0'}}">
                                                             </iframe>
                                                         </div><!-- /.effect-default -->
                                                     </div>
                                                 </div><!-- /.project-item -->
                                             </div>
                                             @endforeach
                                           @endif<!-- /.cbp-item -->
                                         </div><!-- /#projects -->
                                     </div><!-- /.wprt-portfolio-grid -->

                                     <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60">
                                     </div>
                                 </div><!-- /.cold-md-12 -->
                             </div><!-- /.row -->
                         </div><!-- /.container-fluid -->
                     </div>
                     <!-- Portfolio 2 -->
                 </div><!-- /.page-content -->
             </div><!-- /#inner-content -->
         </div><!-- /#site-content -->
     </div><!-- /#content-wrap -->
 </div>
<script>
$('#myStopClickButton').click(function(){
  $('.myVideoClass').each(function(){
    $(this).stopVideo();
  });
});
</script>

 <!-- /Main Content -->
 @endsection