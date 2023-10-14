@extends('layouts.default')

@section('content')
<!-- Main Content -->


<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <!-- Slider -->
                    <div class="rev_slider_wrapper fullwidthbanner-container">
                        <div id="rev-slider1" class="rev_slider fullwidthabanner">
                            <ul>
                                <!-- Slide 1 -->
                                @if(!empty($sliders) && $sliders->count())
                                @foreach($sliders as $key=>$slider)
                                <li data-transition="random">
                                    <!-- Main Image -->

                                    <img src="{{asset('images//slider_image/'.$slider->imageUrl)}}" alt=""
                                        data-bgposition="center center" data-no-retina>

                                    <!-- Layers -->
                                    <div class="tp-caption tp-resizeme text-white font-heading"
                                        data-x="['left','left','left','center']" data-hoffset="['30','30','30','0']"
                                        data-y="['middle','middle','middle','middle']"
                                        data-voffset="['-100','-100','-100','-100']"
                                        data-fontsize="['48','48','48','40']" data-lineheight="['58','58','58','50']"
                                        data-width="full" data-height="none" data-whitespace="normal"
                                        data-transform_idle="o:1;"
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                        data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                        data-start="700" data-splitin="none" data-splitout="none"
                                        data-responsive_offset="on">

                                       
                                    </div>

                                    <div class="tp-caption tp-resizeme text-white"
                                        data-x="['left','left','left','center']" data-hoffset="['30','30','30','0']"
                                        data-y="['middle','middle','middle','middle']"
                                        data-voffset="['15','25','25','35']" data-fontsize="['18','18','18','16']"
                                        data-lineheight="['30','30','30','28']" data-width="full" data-height="none"
                                        data-whitespace="normal" data-transform_idle="o:1;"
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                        data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                        data-start="1000" data-splitin="none" data-splitout="none"
                                        data-responsive_offset="on">
                                        {{ $slider->description}}

                                    </div>

                                    <div class="tp-caption" data-x="['left','left','left','center']"
                                        data-hoffset="['30','30','30','0']"
                                        data-y="['middle','middle','middle','middle']"
                                        data-voffset="['120','120','120','140']" data-width="full" data-height="none"
                                        data-whitespace="normal" data-transform_idle="o:1;"
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                        data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                        data-start="1000" data-splitin="none" data-splitout="none"
                                        data-responsive_offset="on">
                                        <a href="page-portfolio-grid-fullwidth.html" class="wprt-button big">OUR
                                            SERVICES</a>
                                    </div>
                                </li>
                                <!-- /End Slide 1 -->

                                @endforeach
                                @endif


                            </ul>
                        </div>
                    </div>
                    <!-- /Slider -->



                    <!-- Services 1 -->
                    <div class="row-services-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="75" data-mobi="60" data-smobi="60">
                                    </div>

                                    <div class="wprt-headings clearfix text-center">
                                        <h2 class="heading">خدماتنا</h2>
                                        <div class="sep"></div>
                                        <p class="sub-heading">
                                            نحن نقدم مجموعة شاملة من الخدمات للمنشآت الصناعية والمرافق بما في ذلك مخططي
                                            الفضاء
                                        </p>
                                    </div><!-- /.wprt-headings -->

                                    <div class="wprt-spacer clearfix" data-desktop="53" data-mobi="30" data-smobi="30">
                                    </div>

                                    <div class="wprt-carousel-box arrow-style-1 arrow-square arrow-center offsetcenter offset-v-100 has-arrows"
                                        data-auto="false" data-loop="false" data-gap="30" data-column="3"
                                        data-column2="2" data-column3="1">
                                        <div class="owl-carousel owl-theme owl-loaded owl-drag">
                                        @if(!empty($services) && $services->count())
                                          @foreach($services as $key=>$service)
                                            <div class="wprt-image-box style-1 clearfix ">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <img width="370" height="250"
                                                            src="{{asset('images/service_image/'.$service->image)}}"
                                                            alt="Image">
                                                    </div>

                                                    <div class="text-wrap">
                                                        <h3 class="title">
                                                            <a target="_blank" href="#"> </a>
                                                        </h3>
                                                        <div class="desc">{{$service->description}}
                                                        </div>

                                                        <div class="wprt-btn">
                                                            <a target="_blank" class="simple-link font-heading"
                                                                href="#">READ MORE</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box style-1 -->
                                         @endforeach
                                         @endif
                                            <!-- /.wprt-image-box style-1 -->
                                        </div>
                                    </div><!-- /wprt-carousel-box -->

                                    <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60">
                                    </div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- /Services 1 -->

                    <!-- Portfolio 1-->
                    <div class="row-portfolio-1">
                        <div class="container-fluid">
                            <div class="row no-gutters">
                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="74" data-mobi="60" data-smobi="60">
                                    </div>

                                    <div class="wprt-headings clearfix text-center">
                                        <h2 class="heading text-white">أحدث المشاريع</h2>
                                        <div class="sep"></div>
                                        <p class="sub-heading text-grey-white">
                                        فيما يلي بعض المشاريع العديدة التي أنجزناها لعملائنا. نحن نقدم خدمة احترافية
                                        </p>
                                    </div>
                                    <!--wprt-headings -->

                                    <div class="wprt-spacer clearfix" data-desktop="46" data-mobi="30" data-smobi="30">
                                    </div>

                                    <div class="wprt-portfolio-grid" data-column="4" data-column2="3" data-column3="2"
                                        data-column4="1" data-gaph="0" data-gapv="0">
                                        <div id="project-filter" class="filter-dark">
                                            <!-- <div class="inner">
                                                <div data-filter="*" class="cbp-filter-item"><span>SHOW ALL</span></div>
                                                <div data-filter=".repairing" class="cbp-filter-item">
                                                    <span>REPAIRING</span>
                                                </div>
                                                <div data-filter=".construction" class="cbp-filter-item">
                                                    <span>CONSTRUCTION</span>
                                                </div>
                                                <div data-filter=".office" class="cbp-filter-item"><span>OFFICE</span>
                                                </div>
                                                <div data-filter=".building" class="cbp-filter-item">
                                                    <span>BUILDING</span>
                                                </div>
                                                <div data-filter=".painting" class="cbp-filter-item"><span>TILING</span>
                                                </div>
                                            </div> -->
                                        </div><!-- /.project-filter -->

                                        <div id="projects" class="cbp">
                                            @if(!empty($portfolios) && $portfolios->count())
                                            @foreach($portfolios as $key=>$portfolio)
                                            <div class="cbp-item office">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="effect-default">
                                                            <div class="project-image">
                                                                <img src="{{asset('images/portfolio_images/'.$portfolio->image)}}"
                                                                    alt="image">
                                                            </div>

                                                            <div class="text">
                                                                <div>
                                                                    <h2><a href="#" title="">{{$portfolio->title}}</a>
                                                                    </h2>
                                                                    <p>
                                                                        <span><a href="#"></a></span>
                                                                        <span class="sep"></span>
                                                                        <span><a href="#"></a></span>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <a class="zoom-popup cbp-lightbox"
                                                                href="{{asset('images/portfolio_images/'.$portfolio->image)}}"
                                                                data-title="House Off Card">
                                                                <i class="fa fa-arrows"></i>
                                                            </a>
                                                        </div><!-- /.effect-default -->
                                                    </div>
                                                </div><!-- /.project-item -->
                                            </div><!-- /.cbp-item -->
                                            @endforeach
                                            @endif
                                            <!-- /.cbp-item -->
                                        </div><!-- /#projects -->
                                    </div><!-- /.wprt-portfolio-grid -->
                                </div><!-- /.cold-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                    <!-- /Portfolio 1-->

                    <!-- About 1-->
                    <div class="row-about-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="61" data-mobi="50" data-smobi="50">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="wprt-spacer clearfix" data-desktop="55" data-mobi="0" data-smobi="0">
                                    </div>

                                    <div class="wprt-headings clearfix">
                                        <h2 class="heading">لماذا أخترتنا</h2>
                                        <div class="sep"></div>
                                        <p class="sub-heading">

                                            <!-- افضل مقاول هدم مباني عمارة استراحات قصر ابراج محط بنزين كوبري وترحيل المخلفات مجانا مقابل سكراب شغل كل سعودي -->
                                            <br>
                                            افضل مقاول لهدم المباني والاستراحات وأبراج القصر أ
                                            محطة بنزين وجسر ونقل المخلفات مجانا مقابل أ
                                            وظيفة خردة لكل سعودي
                                        </p>
                                    </div>

                                    <div class="wprt-spacer clearfix" data-desktop="47" data-mobi="30" data-smobi="30">
                                    </div>

                                    <div class="number-item">
                                        <div
                                            class="wprt-icon-box  clearfix icon-left w85 align-left style-1 rounded-3 grey-outline has-width">
                                            <div class="icon-wrap">
                                                <span>01</span>
                                            </div>

                                            <h3 class="heading">
                                                <a target="_blank" href="#">
                                                    <span>أكثر من 20 عاما من الخبرة</span>
                                                </a>
                                            </h3>

                                            <p class="desc">
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                                    laoreet magna rutrum, gravida dolor at, rhoncus orci.</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!--/.number-item -->

                                    <div class="wprt-spacer clearfix" data-desktop="34" data-mobi="25" data-smobi="25">
                                    </div>

                                    <div class="number-item">
                                        <div
                                            class="wprt-icon-box clearfix icon-left w85 align-left style-1 rounded-3 grey-outline has-width">
                                            <div class="icon-wrap">
                                                <span>02</span>
                                            </div>

                                            <h3 class="heading">
                                                <a target="_blank" href="#">
                                                    <span>الالتزام بالجودة</span>
                                                </a>
                                            </h3>

                                            <p class="desc">
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                                    laoreet magna rutrum, gravida dolor at, rhoncus orci.</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!--/.number-item -->

                                    <div class="wprt-spacer clearfix" data-desktop="34" data-mobi="25" data-smobi="25">
                                    </div>

                                    <div class="number-item">
                                        <div
                                            class="wprt-icon-box clearfix icon-left w85 align-left style-1 rounded-3 grey-outline has-width">
                                            <div class="icon-wrap">
                                                <span>03</span>
                                            </div>

                                            <h3 class="heading">
                                                <a target="_blank" href="#">
                                                    <span>نحن نتحسن دائمًا</span>
                                                </a>
                                            </h3>

                                            <p class="desc">
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                                    laoreet magna rutrum, gravida dolor at, rhoncus orci.</span>
                                            </p>
                                        </div>
                                    </div>
                                    <!--/.number-item -->

                                    <div class="wprt-spacer clearfix" data-desktop="34" data-mobi="40" data-smobi="40">
                                    </div>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <img src="{{asset('construct/assets/img/workers.png')}}" alt="Image">
                                </div>

                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="75" data-mobi="60" data-smobi="60">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /About 1 -->

                    <!-- Video 1 -->
                    <div class="row-video-1 parallax">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="120" data-mobi="80" data-smobi="80">
                                    </div>

                                    <div class="wprt-headings style-2 text-center" data-font="54" data-mfont="40">
                                        <h3 class="heading">WORKING WITH US</h3>

                                        <p class="sub-heading">We can Ensure a Job is Done on Time.</p>
                                    </div>

                                    <div class="wprt-spacer clearfix" data-desktop="44" data-mobi="30" data-smobi="30">
                                    </div>

                                    <div class="wprt-animation-block animated" data-animate="fadeInUp"
                                        data-duration="1s" data-delay="0.2s" data-position="90%">
                                        <div class="wprt-align-box text-center">
                                            <div class="wprt-icon style-2 clearfix w70 icon-effect pulse infinite">
                                                <a class="icon-wrap popup-video"
                                                    href="https://www.youtube.com/watch?v=4mt8SifFqZQ">
                                                    <span class="icon">
                                                        <i class="fa fa-play"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Video 1 -->

                                    <div class="wprt-spacer clearfix" data-desktop="120" data-mobi="80" data-smobi="80">
                                    </div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- /Video 1 -->

                    <!-- News 1 -->

                    <!-- /News 1 -->

                    <!-- Testimonials 1 -->
                    <div class="row-testimonials-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="74" data-mobi="60" data-smobi="60">
                                    </div>

                                    <div class="wprt-headings text-center" data-font="54" data-mfont="40">
                                        <h3 class="heading">TESTIMONIALS</h3>

                                        <div class="sep"></div>

                                        <p class="sub-heading">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nunc pulvinar cursus massa. Nullam leo ex, interdum
                                        </p>
                                    </div>

                                    <div class="wprt-spacer clearfix" data-desktop="57" data-mobi="40" data-smobi="40">
                                    </div>

                                    <div class="wprt-carousel-box bullet-style-2 bullet-circle offset0 offset-v0 has-bullets"
                                        data-auto="false" data-loop="false" data-gap="30" data-column="2"
                                        data-column2="1" data-column3="1">
                                        <div class="owl-carousel owl-theme">
                                            @if(!empty($testimonials) && $testimonials->count())
                                            @foreach($testimonials as $key=> $testimonial )
                                            <div class="wprt-testimonials clearfix style-3 testimonials-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            {{$testimonial->comment}}
                                                            <div class="arrow"></div>
                                                            <div class="arrow2"></div>
                                                        </blockquote>

                                                        <div class="person">
                                                            <div class="avatar">
                                                                <div class="thumb">
                                                                    <img src="{{asset('images/testimonial_image/'.$testimonial->image)}}"
                                                                        alt="image">
                                                                </div>
                                                            </div>

                                                            <div class="info">
                                                                <h6 class="name">{{$testimonial->name}}</h6>
                                                                <span>{{$testimonial->title}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.item -->
                                            </div><!-- /.wprt-testimonials -->
                                            @endforeach
                                            @endif


                                        </div>
                                    </div><!-- /.wprt-carousel-box -->

                                    <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60">
                                    </div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
                    <!-- /Testimonials 1 -->
                </div><!-- /.page-content -->
            </div><!-- /#inner-content -->
        </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
</div>
<!-- /Main Content -->
<!-- /Main Content -->
@endsection