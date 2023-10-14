<!doctype html>
<html lang="en">
@include('partials.head')




<body id="myPage" class="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    
       <nav class="navbar navbar-default navbar-fixed-top theme-background">
			<div class="container">
				<div class="navbar-header">
	      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        			<span class="icon-bar"></span>
	        			<span class="icon-bar"></span>
	        			<span class="icon-bar"></span>                        
	      			</button>
	      			<img class="navbar-brand" alt="Westhills Driving School" src="{{ asset('siteimages/images/westhills-driving-logo.png0001')}}" />
	    		</div>
	    		<div class="collapse navbar-collapse" id="myNavbar">
	      			<ul class="nav navbar-nav navbar-right">
	        			<li><a href="#about">ABOUT</a></li>
	        			<li><a href="#courses">COURSES</a></li>
	        			<li><a href="#pricing">PRICING</a></li>
	        			<li><a href="#contactus">CONTACT</a></li>
	      			</ul>
	    		</div>
	  		</div>
       </nav>

            @yield('content')

            <footer class="container-fluid text-center">
		  <a href="#myPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		  </a>
		  <p><a href="www.westhillsdriving.com" title="Westhills Driving School">&copy; 2018 www.westhillsdriving.com</a></p>
		</footer>
		<nav class="navbar theme-background">
		</nav>

</body>

</html>