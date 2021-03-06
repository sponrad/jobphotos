<!doctype html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12,000 Photos</title>
    {{ HTML::style('/css/bootstrap.min.css') }}
    {{ HTML::style('/css/main.css') }}
    @yield('underheader')
  </head>

  <body>

    <div id="wrap">
      <div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/images/rect5619.png" height=30 /> Photos</a>
          </div>
          <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav">
	      <!--              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li> -->
	      @if(Session::has('message'))
		<li class="pagealert">{{ Session::get('message') }}</li>
	      @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
              @if(!Auth::check())
		<li>{{ HTML::link('/register', 'Register') }}</li>   
		<li>{{ HTML::link('/login', 'Sign In') }}</li>
	      @else
		<li><a href="/home">Home</a></li>
		<li><a href="">Settings</a></li>
		<li><a href="/logout">Logout</a></li>
		<!--
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->firstname.' '.Auth::user()->lastname }} <b class="caret"></b></a>
		  <ul class="dropdown-menu">
                    <li><a href="/home"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Account</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="/settings"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
		    <li><a href="/logout"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
		  </ul>
		</li>
		-->
	      @endif
            </ul>
          </div><!--/.nav-collapse -->
	</div>
      </div>

      <!-- CONTENT -->    

      <div class="container">
	@yield('content')
      </div>
    </div>


    <!-- FOOTER -->
    <footer>
      <div class="container">
	<p>
	  &copy;<?php echo date("Y"); ?> Devlabtech
	  <!-- &middot; 
	  <a href="/privacy">Privacy</a> &middot; 
	  <a href="/terms">Terms</a> &middot; 
	  <a href="/features">Features</a> &middot; 
	  <a href="/about">About</a>
	  -->
	</p>
      </div>
    </footer>


    <script src="/js/jquery1.10.2.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    @yield('underbody')
  </body>

</html>
