@extends('layouts.default')

@section('content')
<div id="myBody" class="myBody">
    <div class="jumbotron text-center relative-container">
        <img src="{{ asset('siteimages/images/westhills-driving-school-mainpage.jpg')}}" class="main-image relative-container">
        <div class="absolute-container">
            <h1>Westhills Driving School</h1>
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h4>"..Muhammad is a great instructor.."<br><span>Diana</span></h4>
                    </div>
                    <div class="item">
                        <h4>"..Top Driving School in Calgary.."<br><span>Appy Khan</span></h4>
                    </div>
                    <div class="item">
                        <h4>"..Very good and friendly instructor.."<br><span>Hemali</span></h4>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <p>Be a Confident Driver</p>
            <a type="button" class="btn btn-danger" size="50" href="tel:(587)968-9045">Call us @ (587)968-9045</a>
        </div>
    </div>
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <img class="" alt="Westhills Driving School" src="{{ asset('siteimages/images/westhills-driving-logo.png0001')}}" />
            </div>
            @if(!empty($abouts) && $abouts->count())
              
            <div class="col-sm-8">
                <h2>{{$abouts->title}}</h2>
                <h4>{{ $abouts->description }}</h4>
            </div>
            
            @endif
        </div>
    </div>

    <!-- Container (Courses Section) -->
    <div id="courses" class="container-fluid text-center theme-background">
        <h2 class="theme-background-font-color">COURSES</h2>
        <h4 class="theme-background-font-color">What we offer</h4>
        <div class="row slideanim">
            <div id="auto" class="col-lg-3 col-sm-6">
                <a href="#autoprice">
                    <span class="glyphicon glyphicon-road theme-background logo-small"></span>
                    <h4 class="theme-background-font-color">AUTOMATIC DRIVING LESSONS</h4>
                    <a type="button" class="btn btn-sm theme-foreground" href="#autoprice">Click for details</a>
                </a>
            </div>
            <div id="manual" class="col-lg-3 col-sm-6">
                <a href="#manualprice">
                    <span class="glyphicon glyphicon-cog theme-background logo-small"></span>
                    <h4 class="theme-background-font-color">MANUAL DRIVING LESSONS</h4>
                    <a type="button" class="btn btn-sm theme-foreground" href="#manualprice">Click for details</a>
                </a>
            </div>
            <div id="safety" class="col-lg-3 col-sm-6">
                <a href="#safetyprice">
                    <span class="glyphicon glyphicon-repeat theme-background logo-small"></span>
                    <h4 class="theme-background-font-color">SAFETY / BRUSHUP LESSONS</h4>
                    <a type="button" class="btn btn-sm theme-foreground" href="#safetyprice">Click for details</a>
                </a>
            </div>
            <div id="rental" class="col-lg-3 col-sm-6">
                <a href="#rentalprice">
                    <span class="glyphicon glyphicon-time theme-background logo-small"></span>
                    <h4 class="theme-background-font-color">CAR RENTAL</h4>
                    <a type="button" class="btn btn-sm theme-foreground" href="#rentalprice">Click for details</a>
                </a>
            </div>
        </div>
    </div>
    <!-- Container (Courses Section) -->
    <div id="pricing" class="container-fluid">
        <div id="autoprice" class="text-center slideanim">
            <h1>COURSE PRICES</h1>
            <h2>Automatic Learner Courses</h2>
            <h3>Master your driving skills</h3>
        </div>
        <div class="row slideanim">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading theme-background">
                        <h1>ADVANCED</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>15</strong> classroom hours</p>
                        <p><strong>6</strong> in-car driving hours</p>
                        <p><strong>Insurance</strong> reduction certificate</p>
                        <p>for <strong>non-GDL </strong> Class-5 DL holders</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$390 + GST</h3>
                        <h4>per course</h4>
                        <a type="button" class="btn btn-lg theme-background" size="50" href="tel:(587)968-9045">Call
                            Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading theme-background">
                        <h1>BASIC</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>15</strong> classroom hours</p>
                        <p><strong>10</strong> in-car driving hours</p>
                        <p><strong>Insurance</strong> reduction certificate</p>
                        <p>for those with <strong>Learner</strong> License</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$595 + GST</h3>
                        <h4>per course</h4>
                        <a type="button" class="btn btn-lg theme-background" size="50" href="tel:(587)968-9045">Call
                            Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading theme-background">
                        <h1>PREMIUM</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>15</strong> classroom hours</p>
                        <p><strong>15</strong> in-car driving hours</p>
                        <p><strong>Insurance</strong> reduction certificate</p>
                        <p>for those with <strong>Learner</strong> License</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$875 + GST</h3>
                        <h4>per course</h4>
                        <a type="button" class="btn btn-lg theme-background" size="50" href="tel:(587)968-9045">Call
                            Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading theme-background">
                        <h1>ULTIMATE</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>15</strong> classroom hours</p>
                        <p><strong>20</strong> in-car driving hours</p>
                        <p><strong>Insurance</strong> reduction certificate</p>
                        <p>for those with <strong>Learner</strong> License</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$1150 + GST</h3>
                        <h4>per course</h4>
                        <a type="button" class="btn btn-lg theme-background" size="50" href="tel:(587)968-9045">Call
                            Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="manualprice" class="text-center slideanim">
            <h2>MANUAL LEARNER COURSE PRICES</h2>
            <h3>Learn to drive vehicles with Manual Transmission</h3>
        </div>
        <div class="row slideanim">
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading theme-background">
                        <h1>ADVANCED</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>15</strong> classroom hours</p>
                        <p><strong>6</strong> in-car driving hours</p>
                        <p><strong>Insurance</strong> reduction certificate</p>
                        <p>for <strong>non-GDL</strong> Class-5 DL holders</p>
                        <p>(lessons on <strong>Manual</strong> Transmission)</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$475 + GST</h3>
                        <h4>per course</h4>
                        <a type="button" class="btn btn-lg theme-background" size="50" href="tel:(587)968-9045">Call
                            Us</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading theme-background">
                        <h1>FULL</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>15</strong> classroom hours</p>
                        <p><strong>10</strong> in-car driving hours</p>
                        <p><strong>Insurance</strong> reduction certificate</p>
                        <p>for those with <strong>Learner</strong> License</p>
                        <p>(lessons on <strong>Manual</strong> Transmission)</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$725 + GST</h3>
                        <h4>per course</h4>
                        <a type="button" class="btn btn-lg theme-background" size="50" href="tel:(587)968-9045">Call
                            Us</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading theme-background">
                        <h1>SINGLE</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>X</strong> </p>
                        <p><strong>2</strong> in-car driving hours</p>
                        <p><strong>X</strong> </p>
                        <p><strong>X</strong> </p>
                        <p>(lessons on <strong>Manual</strong> Transmission)</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$135 + GST</h3>
                        <h4>per lesson</h4>
                        <a type="button" class="btn btn-lg theme-background" size="50" href="tel:(587)968-9045">Call
                            Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="safetyprice" class="col-lg-7 col-md-12 text-center slideanim">
            <h2>SAFE DRIVING / BRUSHUP LESSONS PRICES</h2>
            <h3>Become a confident and safe driver</h3>
            <div class="row slideanim">
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading theme-background">
                            <h1>DEFENSIVE</h1>
                        </div>
                        <div class="panel-body">
                            <p><strong>6</strong> hours online course </p>
                            <p>for reduction of 3 demerit points</p>
                        </div>
                        <div class="panel-footer">
                            <h3>$150 + GST</h3>
                            <h4>per course</h4>
                            <a type="button" class="btn btn-lg theme-background" size="50" href="tel:(587)968-9045">Call
                                Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading theme-background">
                            <h1>WINTER</h1>
                        </div>
                        <div class="panel-body">
                            <p><strong>2</strong> in-car driving hours</p>
                            <p>for safe and confident handling in winter</p>
                        </div>
                        <div class="panel-footer">
                            <h3>$110 + GST</h3>
                            <h4>per lesson</h4>
                            <a type="button" class="btn btn-lg theme-background" size="50" href="tel:(587)968-9045">Call
                                Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading theme-background">
                            <h1>BRUSHUP</h1>
                        </div>
                        <div class="panel-body">
                            <p><strong>2</strong> in-car driving hours</p>
                            <p>Prepare for Advanced Road Test</p>
                        </div>
                        <div class="panel-footer">
                            <h3>$110 + GST</h3>
                            <h4>per lesson</h4>
                            <a type="button" class="btn btn-lg theme-background" size="50" href="tel:(587)968-9045">Call
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="rentalprice" class="col-lg-5 col-md-12 text-center slideanim">
            <h2>CAR RENTAL PRICES</h2>
            <h3>Car Rental service for road tests</h3>
            <div class="row slideanim">
                <div class="col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading theme-background">
                            <h1>BASIC</h1>
                        </div>
                        <div class="panel-body">
                            <p>Car Rental for Basic Road Test</p>
                        </div>
                        <div class="panel-footer">
                            <h3>$70</h3>
                            <h4>(Tax included)</h4>
                            <h4>per hour</h4>
                            <a type="button" class="btn btn-lg theme-background" size="50" href="tel:(587)968-9045">Call
                                Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading theme-background">
                            <h1>ADVANCED</h1>
                        </div>
                        <div class="panel-body">
                            <p>Car Rental for Advanced Road Test</p>
                        </div>
                        <div class="panel-footer">
                            <h3>$90</h3>
                            <h4>(Tax included)</h4>
                            <h4>per hour</h4>
                            <a type="button" class="btn btn-lg theme-background" size="50" href="tel:(587)968-9045">Call
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container (Contact Section) -->
    <div id="contactus" class="container-fluid bg-grey">
        <h2 class="text-center">CONTACT</h2>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> 1870 Holman Crescent NW Edmonton, Alberta, CA,
                    T6R3L9</p>
                <p><span class="glyphicon glyphicon-phone"></span> 587-968-9045</p>
                <p><span class="glyphicon glyphicon-phone-alt"></span> 587-703-3974 (Text Only)</p>
                <p><span class="glyphicon glyphicon-print"></span> +1(587)296-1004</p>
                <p><span class="glyphicon glyphicon-envelope"></span> westhillsdriving@gmail.com</p>
            </div>
            <div class="col-sm-7 slideanim">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment"
                    rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <a type="button" class="btn btn-default pull-right"
                            href="mailto:westhillsdriving@gmail.com">Send</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection