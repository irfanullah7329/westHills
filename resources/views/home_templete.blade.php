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
                                <li data-transition="random">
                                    <!-- Main Image -->
                                    <img src="{{asset('construct/assets/img/slider/slide-1.jpg')}}" alt=""
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
                                        ENGINEERING<br>& DESIGN SERVICES
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
                                        Construction Company brings more than 100 years of experience, <br>
                                        stability and innovation to every project.
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

                                <!-- Slide 2 -->
                                <li data-transition="random">
                                    <!-- Main Image -->
                                    <img src="{{asset('construct/assets/img/slider/slide-2.jpg')}}" alt=""
                                        data-bgposition="center center" data-no-retina>

                                    <!-- Layers -->
                                    <div class="tp-caption tp-resizeme text-white text-center font-heading"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
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
                                        ENGINEERING<br>& DESIGN SERVICES
                                    </div>

                                    <div class="tp-caption tp-resizeme text-white text-center"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['middle','middle','middle','middle']"
                                        data-voffset="['25','25','25','35']" data-fontsize="['18','18','18','16']"
                                        data-lineheight="['30','30','30','28']" data-width="full" data-height="none"
                                        data-whitespace="normal" data-transform_idle="o:1;"
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                        data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                        data-start="1000" data-splitin="none" data-splitout="none"
                                        data-responsive_offset="on">
                                        Construction Company brings more than 100 years of experience
                                        stability <br>and innovation to every project.
                                    </div>

                                    <div class="tp-caption text-center" data-x="['center','center','center','center']"
                                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                        data-voffset="['120','120','120','140']" data-width="full" data-height="none"
                                        data-whitespace="normal" data-transform_idle="o:1;"
                                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                        data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;"
                                        data-start="1000" data-splitin="none" data-splitout="none"
                                        data-responsive_offset="on">
                                        <a href="#" class="wprt-button big">LEARN MORE</a>
                                    </div>
                                </li>
                                <!-- /End Slide 2 -->
                            </ul>
                        </div>
                    </div>
                    <!-- /Slider -->

                    <!-- Action Box 1
                    <div class="row-action-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-action-box style-1">
                                        <div class="inner">
                                            <div class="heading-wrap left">
                                                <div class="text-wrap">
                                                    <h2 class="heading">
                                                        If you find a high quality constructor for your project?
                                                    </h2>
                                                </div>
                                            </div> -->

                    <!-- <div class="button-wrap right">
                                                <a href="#" class="wprt-button outline white">GET A QUOTE</a>
                                            </div>
                                        </div> -->
                    <!-- </div>/.wprt-action-box -->
                    <!-- </div>/.col-md-12 -->
                    <!-- </div>/.row -->
                    <!-- </div>/.container -->
                    <!-- </div> -->
                    <!-- /Action Box 1 -->

                    <!-- Services 1 -->
                    <div class="row-services-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="75" data-mobi="60" data-smobi="60">
                                    </div>

                                    <div class="wprt-headings clearfix text-center">
                                        <h2 class="heading">OUR SERVICES</h2>
                                        <div class="sep"></div>
                                        <p class="sub-heading">
                                            We provide a comprehensive range of services for industrial plants and
                                            facilities include Space Planners.
                                        </p>
                                    </div><!-- /.wprt-headings -->

                                    <div class="wprt-spacer clearfix" data-desktop="53" data-mobi="30" data-smobi="30">
                                    </div>

                                    <div class="wprt-carousel-box arrow-style-1 arrow-square arrow-center offsetcenter offset-v-100 has-arrows"
                                        data-auto="false" data-loop="false" data-gap="30" data-column="3"
                                        data-column2="2" data-column3="1">
                                        <div class="owl-carousel owl-theme owl-loaded owl-drag">
                                            <div class="wprt-image-box style-1 clearfix ">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <img width="370" height="250"
                                                            src="{{asset('construct/assets/img/services/service-1.jpg')}}"
                                                            alt="Image">
                                                    </div>

                                                    <div class="text-wrap">
                                                        <h3 class="title">
                                                            <a target="_blank" href="#">Design &amp; Build Package</a>
                                                        </h3>
                                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit.
                                                            Vivamus ut accumsan orci. Nulla pulvinar sed turpis sit amet
                                                            ultrices. Praesent mollis
                                                        </div>

                                                        <div class="wprt-btn">
                                                            <a target="_blank" class="simple-link font-heading"
                                                                href="#">READ MORE</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box style-1 -->

                                            <div class="wprt-image-box style-1 clearfix ">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <img width="370" height="250"
                                                            src="{{asset('construct/assets/img/services/service-2.jpg')}}"
                                                            alt="Image">
                                                    </div>

                                                    <div class="text-wrap">
                                                        <h3 class="title">
                                                            <a target="_blank" href="#">Interior Renovation</a>
                                                        </h3>
                                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit.
                                                            Vivamus ut accumsan orci. Nulla pulvinar sed turpis sit amet
                                                            ultrices. Praesent mollis
                                                        </div>

                                                        <div class="wprt-btn">
                                                            <a target="_blank" class="simple-link font-heading"
                                                                href="#">READ MORE</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box style-1 -->

                                            <div class="wprt-image-box style-1 clearfix ">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <img width="370" height="250"
                                                            src="{{asset('construct/assets/img/services/service-3.jpg')}}"
                                                            alt="Image">
                                                    </div>

                                                    <div class="text-wrap">
                                                        <h3 class="title">
                                                            <a target="_blank" href="#">Tiling and Painting</a>
                                                        </h3>

                                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit.
                                                            Vivamus ut accumsan orci. Nulla pulvinar sed turpis sit amet
                                                            ultrices. Praesent mollis
                                                        </div>

                                                        <div class="wprt-btn">
                                                            <a target="_blank" class="simple-link font-heading"
                                                                href="#">READ MORE</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box style-1 -->

                                            <div class="wprt-image-box style-1 clearfix ">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <img width="370" height="250"
                                                            src="{{asset('construct/assets/img/services/service-1.jpg')}}"
                                                            alt="Image">
                                                    </div>

                                                    <div class="text-wrap">
                                                        <h3 class="title">
                                                            <a target="_blank" href="#">Design &amp; Build Package</a>
                                                        </h3>

                                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit.
                                                            Vivamus ut accumsan orci. Nulla pulvinar sed turpis sit amet
                                                            ultrices. Praesent mollis
                                                        </div>

                                                        <div class="wprt-btn">
                                                            <a target="_blank" class="simple-link font-heading"
                                                                href="#">READ MORE</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box style-1 -->

                                            <div class="wprt-image-box style-1 clearfix ">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <img width="370" height="250"
                                                            src="{{asset('construct/assets/img/services/service-2.jpg')}}"
                                                            alt="Image">
                                                    </div>

                                                    <div class="text-wrap">
                                                        <h3 class="title">
                                                            <a target="_blank" href="#">Interior Renovation</a>
                                                        </h3>
                                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit.
                                                            Vivamus ut accumsan orci. Nulla pulvinar sed turpis sit amet
                                                            ultrices. Praesent mollis
                                                        </div>

                                                        <div class="wprt-btn">
                                                            <a target="_blank" class="simple-link font-heading"
                                                                href="#">READ MORE</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box style-1 -->

                                            <div class="wprt-image-box style-1 clearfix ">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <img width="370" height="250"
                                                            src="{{asset('construct/assets/img/services/service-3.jpg')}}"
                                                            alt="Image">
                                                    </div>

                                                    <div class="text-wrap">
                                                        <h3 class="title">
                                                            <a target="_blank" href="#">Tiling and Painting</a>
                                                        </h3>

                                                        <div class="desc">Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit.
                                                            Vivamus ut accumsan orci. Nulla pulvinar sed turpis sit amet
                                                            ultrices. Praesent mollis
                                                        </div>

                                                        <div class="wprt-btn">
                                                            <a target="_blank" class="simple-link font-heading"
                                                                href="#">READ MORE</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.wprt-image-box style-1 -->
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
                                        <h2 class="heading text-white">LATEST PROJECTS</h2>
                                        <div class="sep"></div>
                                        <p class="sub-heading text-grey-white">
                                            Here are a few of many projects we have completed for our customers.
                                            We provide a professional service
                                        </p>
                                    </div>
                                    <!--wprt-headings -->

                                    <div class="wprt-spacer clearfix" data-desktop="46" data-mobi="30" data-smobi="30">
                                    </div>

                                    <div class="wprt-portfolio-grid" data-column="4" data-column2="3" data-column3="2"
                                        data-column4="1" data-gaph="0" data-gapv="0">
                                        <div id="project-filter" class="filter-dark">
                                            <div class="inner">
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
                                            </div>
                                        </div><!-- /.project-filter -->

                                        <div id="projects" class="cbp">
                                            <div class="cbp-item office office painting">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="effect-default">
                                                            <div class="project-image">
                                                                <img src="{{asset('construct/assets/img/projects/project-1.jpg')}}"
                                                                    alt="image">
                                                            </div>

                                                            <div class="text">
                                                                <div>
                                                                    <h2><a href="#" title="">HOUSE OFF CARDS</a></h2>
                                                                    <p>
                                                                        <span><a href="#">Building</a></span>
                                                                        <span class="sep">/</span>
                                                                        <span><a href="#">House</a></span>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <a class="zoom-popup cbp-lightbox"
                                                                href="{{asset('construct/assets/img/projects/project-1-100-808.jpg')}}"
                                                                data-title="House Off Card">
                                                                <i class="fa fa-arrows"></i>
                                                            </a>
                                                        </div><!-- /.effect-default -->
                                                    </div>
                                                </div><!-- /.project-item -->
                                            </div><!-- /.cbp-item -->

                                            <div class="cbp-item construction office">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="effect-default">
                                                            <div class="project-image">
                                                                <img src="{{asset('construct/assets/img/projects/project-2.jpg')}}"
                                                                    alt="image">
                                                            </div>

                                                            <div class="text">
                                                                <div>
                                                                    <h2><a href="#" title="">HOUSE OFF CARDS</a></h2>
                                                                    <p>
                                                                        <span><a href="#">Building</a></span>
                                                                        <span class="sep">/</span>
                                                                        <span><a href="#">House</a></span>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <a class="zoom-popup cbp-lightbox"
                                                                href="{{asset('construct/assets/img/projects/project-2-100-833.jpg')}}"
                                                                data-title="House Off Card">
                                                                <i class="fa fa-arrows"></i>
                                                            </a>
                                                        </div><!-- /.effect-default -->
                                                    </div>
                                                </div><!-- /.project-item -->
                                            </div><!-- /.cbp-item -->

                                            <div class="cbp-item office repairing">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="effect-default">
                                                            <div class="project-image">
                                                                <img src="{{asset('construct/assets/img/projects/project-3.jpg')}}"
                                                                    alt="image">
                                                            </div>

                                                            <div class="text">
                                                                <div>
                                                                    <h2><a href="#" title="">HOUSE OFF CARDS</a></h2>
                                                                    <p>
                                                                        <span><a href="#">Building</a></span>
                                                                        <span class="sep">/</span>
                                                                        <span><a href="#">House</a></span>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <a class="zoom-popup cbp-lightbox"
                                                                href="{{asset('construct/assets/img/projects/project-3-100-833.jpg')}}"
                                                                data-title="House Off Card">
                                                                <i class="fa fa-arrows"></i>
                                                            </a>
                                                        </div><!-- /.effect-default -->
                                                    </div>
                                                </div><!-- /.project-item -->
                                            </div><!-- /.cbp-item -->

                                            <div class="cbp-item construction painting">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="effect-default">
                                                            <div class="project-image">
                                                                <img src="{{asset('construct/assets/img/projects/project-4.jpg')}}
                                                                    alt=" image">
                                                            </div>

                                                            <div class="text">
                                                                <div>
                                                                    <h2><a href="#" title="">HOUSE OFF CARDS</a></h2>
                                                                    <p>
                                                                        <span><a href="#">Building</a></span>
                                                                        <span class="sep">/</span>
                                                                        <span><a href="#">House</a></span>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <a class="zoom-popup cbp-lightbox"
                                                                href="{{asset('construct/assets/img/projects/project-4-100-833.jpg')}}"
                                                                data-title="House Off Card">
                                                                <i class="fa fa-arrows"></i>
                                                            </a>
                                                        </div><!-- /.effect-default -->
                                                    </div>
                                                </div><!-- /.project-item -->
                                            </div><!-- /.cbp-item -->

                                            <div class="cbp-item building repairing">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="effect-default">
                                                            <div class="project-image">
                                                                <img src="{{asset('construct/assets/img/projects/project-5.jpg')}}"
                                                                    alt="image">
                                                            </div>

                                                            <div class="text">
                                                                <div>
                                                                    <h2><a href="#" title="">HOUSE OFF CARDS</a></h2>
                                                                    <p>
                                                                        <span><a href="#">Building</a></span>
                                                                        <span class="sep">/</span>
                                                                        <span><a href="#">House</a></span>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <a class="zoom-popup cbp-lightbox"
                                                                href="{{asset('construct/assets/img/projects/project-5-100-833.jpg')}}"
                                                                data-title="House Off Card">
                                                                <i class="fa fa-arrows"></i>
                                                            </a>
                                                        </div><!-- /.effect-default -->
                                                    </div>
                                                </div><!-- /.project-item -->
                                            </div><!-- /.cbp-item -->

                                            <div class="cbp-item painting repairing">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="effect-default">
                                                            <div class="project-image">
                                                                <img src="{{asset('construct/assets/img/projects/project-6.jpg')}}"
                                                                    alt="image">
                                                            </div>

                                                            <div class="text">
                                                                <div>
                                                                    <h2><a href="#" title="">HOUSE OFF CARDS</a></h2>
                                                                    <p>
                                                                        <span><a href="#">Building</a></span>
                                                                        <span class="sep">/</span>
                                                                        <span><a href="#">House</a></span>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <a class="zoom-popup cbp-lightbox"
                                                                href="{{asset('construct/assets/img/projects/project-6-100-833.jpg')}}"
                                                                data-title="House Off Card">
                                                                <i class="fa fa-arrows"></i>
                                                            </a>
                                                        </div><!-- /.effect-default -->
                                                    </div>
                                                </div><!-- /.project-item -->
                                            </div><!-- /.cbp-item -->

                                            <div class="cbp-item office building">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="effect-default">
                                                            <div class="project-image">
                                                                <img src="{{asset('construct/assets/img/projects/project-7.jpg')}}"
                                                                    alt="image">
                                                            </div>

                                                            <div class="text">
                                                                <div>
                                                                    <h2><a href="#" title="">HOUSE OFF CARDS</a></h2>
                                                                    <p>
                                                                        <span><a href="#">Building</a></span>
                                                                        <span class="sep">/</span>
                                                                        <span><a href="#">House</a></span>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <a class="zoom-popup cbp-lightbox"
                                                                href="{{asset('construct/assets/img/projects/project-7-100-833.jpg')}}"
                                                                data-title="House Off Card">
                                                                <i class="fa fa-arrows"></i>
                                                            </a>
                                                        </div><!-- /.effect-default -->
                                                    </div>
                                                </div><!-- /.project-item -->
                                            </div><!-- /.cbp-item -->

                                            <div class="cbp-item office">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="effect-default">
                                                            <div class="project-image">
                                                                <img src="assets/img/projects/project-8.jpg"
                                                                    alt="image">
                                                            </div>

                                                            <div class="text">
                                                                <div>
                                                                    <h2><a href="#" title="">HOUSE OFF CARDS</a></h2>
                                                                    <p>
                                                                        <span><a href="#">Building</a></span>
                                                                        <span class="sep">/</span>
                                                                        <span><a href="#">House</a></span>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <a class="zoom-popup cbp-lightbox"
                                                                href="{{asset('construct/assets/img/projects/project-8-100-833.jpg')}}"
                                                                data-title="House Off Card">
                                                                <i class="fa fa-arrows"></i>
                                                            </a>
                                                        </div><!-- /.effect-default -->
                                                    </div>
                                                </div><!-- /.project-item -->
                                            </div><!-- /.cbp-item -->
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
                                        <h2 class="heading">WHY CHOOSE US?</h2>
                                        <div class="sep"></div>
                                        <p class="sub-heading">
                                            We provide a professional servicewhich includes consultation, free
                                            estimate, design, supply of materials and installation.
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
                                                    <span>Over 20 Years Experience</span>
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
                                                    <span>Quality Commitment</span>
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
                                                    <span>We Are Always Improving</span>
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
                    <div class="row-news-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer clearfix" data-desktop="74" data-mobi="60" data-smobi="60">
                                    </div>

                                    <div class="wprt-headings clearfix text-center">
                                        <h2 class="heading">COMPANY NEWS</h2>

                                        <div class="sep"></div>
                                        <div class="sub-heading">
                                            Our mission is to provide you the highest quality work that meets your
                                            expectation
                                        </div>
                                    </div>

                                    <div class="wprt-spacer clearfix" data-desktop="55" data-mobi="40" data-smobi="40">
                                    </div>

                                    <div class="wprt-news arrow-style-1 arrow-square arrow-center offsetcenter offset-v-130 has-arrows"
                                        data-auto="false" data-column="3" data-column2="2" data-column3="1"
                                        data-gap="30">
                                        <div class="owl-carousel owl-theme">
                                            <div class="news-item clearfix">
                                                <div class="inner">
                                                    <img src="{{asset('construct/assets/img/blog/news-1.jpg')}}"
                                                        alt="image">
                                                    <div class="text-wrap">
                                                        <h3 class="title">
                                                            <a href="#">What a Difference a Few Months Make</a>
                                                        </h3>

                                                        <div class="meta">
                                                            <span class="post-by-author">by ThemeMove </span>
                                                            <span class="post-date">April 6, 2015</span>
                                                        </div>

                                                        <p class="excerpt-text-text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit. Vivamus ut accumsan orci. Nulla pulvinar sed
                                                            turpis sit amet ultrices. Praesent mollis
                                                        </p>

                                                        <div class="post-btn">
                                                            <a href="#" class="simple-link font-heading">READ MORE</a>
                                                        </div>
                                                    </div><!-- /.text-wrap -->
                                                </div>
                                            </div><!-- /.news-item -->

                                            <div class="news-item clearfix">
                                                <div class="inner">
                                                    <img src="{{asset('construct/assets/img/blog/news-2.jpg')}}"
                                                        alt="image">
                                                    <div class="text-wrap">
                                                        <h3 class="title">
                                                            <a href="#">8 Paint Colors That Will Make You Rethink
                                                                White</a>
                                                        </h3>

                                                        <div class="meta">
                                                            <span class="post-by-author">by ThemeMove </span>
                                                            <span class="post-date">April 6, 2015</span>
                                                        </div>

                                                        <p class="excerpt-text-text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit. Vivamus ut accumsan orci. Nulla pulvinar sed
                                                            turpis sit amet ultrices. Praesent mollis
                                                        </p>

                                                        <div class="post-btn">
                                                            <a href="#" class="simple-link font-heading">READ MORE</a>
                                                        </div>
                                                    </div><!-- /.text-wrap -->
                                                </div>
                                            </div><!-- /.news-item -->

                                            <div class="news-item clearfix">
                                                <div class="inner">
                                                    <img src="{{asset('construct/assets/img/blog/news-3.jpg')}}"
                                                        alt="image">
                                                    <div class="text-wrap">
                                                        <h3 class="title">
                                                            <a href="#">Signs you Need Drain Repair Services</a>
                                                        </h3>

                                                        <div class="meta">
                                                            <span class="post-by-author">by ThemeMove </span>
                                                            <span class="post-date">April 6, 2015</span>
                                                        </div>

                                                        <p class="excerpt-text-text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit. Vivamus ut accumsan orci. Nulla pulvinar sed
                                                            turpis sit amet ultrices. Praesent mollis
                                                        </p>

                                                        <div class="post-btn">
                                                            <a href="#" class="simple-link font-heading">READ MORE</a>
                                                        </div>
                                                    </div><!-- /.text-wrap -->
                                                </div>
                                            </div><!-- /.news-item -->

                                            <div class="news-item clearfix">
                                                <div class="inner">
                                                    <img src="{{asset('construct/assets/img/blog/news-1.jpg')}}"
                                                        alt="image">
                                                    <div class="text-wrap">
                                                        <h3 class="title">
                                                            <a href="#">What a Difference a Few Months Make</a>
                                                        </h3>

                                                        <div class="meta">
                                                            <span class="post-by-author">by ThemeMove </span>
                                                            <span class="post-date">April 6, 2015</span>
                                                        </div>

                                                        <p class="excerpt-text-text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit. Vivamus ut accumsan orci. Nulla pulvinar sed
                                                            turpis sit amet ultrices. Praesent mollis
                                                        </p>

                                                        <div class="post-btn">
                                                            <a href="#" class="simple-link font-heading">READ MORE</a>
                                                        </div>
                                                    </div><!-- /.text-wrap -->
                                                </div>
                                            </div><!-- /.news-item -->

                                            <div class="news-item clearfix">
                                                <div class="inner">
                                                    <img src="assets/img/blog/news-2.jpg" alt="image">
                                                    <div class="text-wrap">
                                                        <h3 class="title">
                                                            <a href="#">8 Paint Colors That Will Make You Rethink
                                                                White</a>
                                                        </h3>

                                                        <div class="meta">
                                                            <span class="post-by-author">by ThemeMove </span>
                                                            <span class="post-date">April 6, 2015</span>
                                                        </div>

                                                        <p class="excerpt-text-text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit. Vivamus ut accumsan orci. Nulla pulvinar sed
                                                            turpis sit amet ultrices. Praesent mollis
                                                        </p>

                                                        <div class="post-btn">
                                                            <a href="#" class="simple-link font-heading">READ MORE</a>
                                                        </div>
                                                    </div><!-- /.text-wrap -->
                                                </div>
                                            </div><!-- /.news-item -->

                                            <div class="news-item clearfix">
                                                <div class="inner">
                                                    <img src="assets/img/blog/news-3.jpg" alt="image">
                                                    <div class="text-wrap">
                                                        <h3 class="title">
                                                            <a href="#">Signs you Need Drain Repair Services</a>
                                                        </h3>

                                                        <div class="meta">
                                                            <span class="post-by-author">by ThemeMove </span>
                                                            <span class="post-date">April 6, 2015</span>
                                                        </div>

                                                        <p class="excerpt-text-text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                                            elit. Vivamus ut accumsan orci. Nulla pulvinar sed
                                                            turpis sit amet ultrices. Praesent mollis
                                                        </p>

                                                        <div class="post-btn">
                                                            <a href="#" class="simple-link font-heading">READ MORE</a>
                                                        </div>
                                                    </div><!-- /.text-wrap -->
                                                </div>
                                            </div><!-- /.news-item -->
                                        </div>
                                    </div>

                                    <div class="wprt-spacer clearfix" data-desktop="80" data-mobi="60" data-smobi="60">
                                    </div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div>
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
                                            <div class="wprt-testimonials clearfix style-3 testimonials-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Nunc pulvin
                                                            cursus massa. Nullam leo ex, interdum vitae imperdiet et,
                                                            viverra
                                                            ultricies magna. Vivamus sed luctus odio. Aenean a blandit
                                                            eros.
                                                            Praesent dignissim dapibus lacus, nec pellentesque nibh.
                                                            Integer at
                                                            convallis erat. Aenean aliquam interdum metus,
                                                            <div class="arrow"></div>
                                                            <div class="arrow2"></div>
                                                        </blockquote>

                                                        <div class="person">
                                                            <div class="avatar">
                                                                <div class="thumb">
                                                                    <img src="assets/img/client-1.png" alt="image">
                                                                </div>
                                                            </div>

                                                            <div class="info">
                                                                <h6 class="name">DAVID MULLER</h6>
                                                                <span>Designer</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.item -->
                                            </div><!-- /.wprt-testimonials -->

                                            <div class="wprt-testimonials clearfix style-3 testimonials-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Nunc pulvin
                                                            cursus massa. Nullam leo ex, interdum vitae imperdiet et,
                                                            viverra
                                                            ultricies magna. Vivamus sed luctus odio. Aenean a blandit
                                                            eros.
                                                            Praesent dignissim dapibus lacus, nec pellentesque nibh.
                                                            Integer at
                                                            convallis erat. Aenean aliquam interdum metus,
                                                            <div class="arrow"></div>
                                                            <div class="arrow2"></div>
                                                        </blockquote>

                                                        <div class="person">
                                                            <div class="avatar">
                                                                <div class="thumb">
                                                                    <img src="assets/img/client-2.png" alt="image">
                                                                </div>
                                                            </div>

                                                            <div class="info">
                                                                <h6 class="name">DAVID MULLER</h6>
                                                                <span>Designer</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.item -->
                                            </div><!-- /.wprt-testimonials -->

                                            <div class="wprt-testimonials clearfix style-3 testimonials-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Nunc pulvin
                                                            cursus massa. Nullam leo ex, interdum vitae imperdiet et,
                                                            viverra
                                                            ultricies magna. Vivamus sed luctus odio. Aenean a blandit
                                                            eros.
                                                            Praesent dignissim dapibus lacus, nec pellentesque nibh.
                                                            Integer at
                                                            convallis erat. Aenean aliquam interdum metus,
                                                            <div class="arrow"></div>
                                                            <div class="arrow2"></div>
                                                        </blockquote>

                                                        <div class="person">
                                                            <div class="avatar">
                                                                <div class="thumb">
                                                                    <img src="assets/img/client-1.png" alt="image">
                                                                </div>
                                                            </div>

                                                            <div class="info">
                                                                <h6 class="name">DAVID MULLER</h6>
                                                                <span>Designer</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.item -->
                                            </div><!-- /.wprt-testimonials -->

                                            <div class="wprt-testimonials clearfix style-3 testimonials-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Nunc pulvin
                                                            cursus massa. Nullam leo ex, interdum vitae imperdiet et,
                                                            viverra
                                                            ultricies magna. Vivamus sed luctus odio. Aenean a blandit
                                                            eros.
                                                            Praesent dignissim dapibus lacus, nec pellentesque nibh.
                                                            Integer at
                                                            convallis erat. Aenean aliquam interdum metus,
                                                            <div class="arrow"></div>
                                                            <div class="arrow2"></div>
                                                        </blockquote>

                                                        <div class="person">
                                                            <div class="avatar">
                                                                <div class="thumb">
                                                                    <img src="assets/img/client-2.png" alt="image">
                                                                </div>
                                                            </div>

                                                            <div class="info">
                                                                <h6 class="name">DAVID MULLER</h6>
                                                                <span>Designer</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.item -->
                                            </div><!-- /.wprt-testimonials -->

                                            <div class="wprt-testimonials clearfix style-3 testimonials-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Nunc pulvin
                                                            cursus massa. Nullam leo ex, interdum vitae imperdiet et,
                                                            viverra
                                                            ultricies magna. Vivamus sed luctus odio. Aenean a blandit
                                                            eros.
                                                            Praesent dignissim dapibus lacus, nec pellentesque nibh.
                                                            Integer at
                                                            convallis erat. Aenean aliquam interdum metus,
                                                            <div class="arrow"></div>
                                                            <div class="arrow2"></div>
                                                        </blockquote>

                                                        <div class="person">
                                                            <div class="avatar">
                                                                <div class="thumb">
                                                                    <img src="assets/img/client-1.png" alt="image">
                                                                </div>
                                                            </div>

                                                            <div class="info">
                                                                <h6 class="name">DAVID MULLER</h6>
                                                                <span>Designer</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.item -->
                                            </div><!-- /.wprt-testimonials -->

                                            <div class="wprt-testimonials clearfix style-3 testimonials-1">
                                                <div class="item">
                                                    <div class="inner">
                                                        <blockquote class="text">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Nunc pulvin
                                                            cursus massa. Nullam leo ex, interdum vitae imperdiet et,
                                                            viverra
                                                            ultricies magna. Vivamus sed luctus odio. Aenean a blandit
                                                            eros.
                                                            Praesent dignissim dapibus lacus, nec pellentesque nibh.
                                                            Integer at
                                                            convallis erat. Aenean aliquam interdum metus,
                                                            <div class="arrow"></div>
                                                            <div class="arrow2"></div>
                                                        </blockquote>

                                                        <div class="person">
                                                            <div class="avatar">
                                                                <div class="thumb">
                                                                    <img src="assets/img/client-2.png" alt="image">
                                                                </div>
                                                            </div>

                                                            <div class="info">
                                                                <h6 class="name">DAVID MULLER</h6>
                                                                <span>Designer</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.item -->
                                            </div><!-- /.wprt-testimonials -->

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