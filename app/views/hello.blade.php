<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>12,000 Photos</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <style>
     /*
      * Globals
      */

     /* Links */
     a,
     a:focus,
     a:hover {
       color: #fff;
     }

     /* Custom default button */
     .btn-default,
     .btn-default:hover,
     .btn-default:focus {
       color: #333;
       text-shadow: none; /* Prevent inheritence from `body` */
       background-color: #fff;
       border: 1px solid #fff;
     }


     /*
      * Base structure
      */

     html,
     body {
       height: 100%;
       background-color: #333;
       background: url('/images/WP_20131226_005.jpg');       
       background-repeat: no-repeat;
       background-size: cover;
       background-position: center;
       width: 100%;
       height: 100%;

     }
     body {
       color: #fff;
       text-align: center;
       text-shadow: 1px 2px 1px rgba(0,0,0,.7);
       box-shadow: inset 0 0 100px rgba(0,0,0,.5);
     }

     /* Extra markup and styles for table-esque vertical and horizontal centering */
     .site-wrapper {
       display: table;
       width: 100%;
       height: 100%; /* For at least Firefox */
       min-height: 100%;
       background-color: rgba(0, 0, 0, 0.25);
     }
     .site-wrapper-inner {
       display: table-cell;
       vertical-align: top;
     }
     .cover-container {
       margin-right: auto;
       margin-left: auto;
     }

     /* Padding for spacing */
     .inner {
       padding: 30px;
       /*       background-color: rgba(0, 0, 0, 0.2); */
     }


     /*
      * Header
      */
     .masthead-brand {
       margin-top: 10px;
       margin-bottom: 10px;
     }

     .masthead-nav > li {
       display: inline-block;
     }
     .masthead-nav > li + li {
       margin-left: 20px;
     }
     .masthead-nav > li > a {
       padding-right: 0;
       padding-left: 0;
       font-size: 16px;
       font-weight: bold;
       color: #fff; /* IE8 proofing */
       color: rgba(255,255,255,.75);
       border-bottom: 2px solid transparent;
     }
     .masthead-nav > li > a:hover,
     .masthead-nav > li > a:focus {
       background-color: transparent;
       border-bottom-color: rgba(255,255,255,.25);
     }
     .masthead-nav > .active > a,
     .masthead-nav > .active > a:hover,
     .masthead-nav > .active > a:focus {
       color: #fff;
       border-bottom-color: #fff;
     }

     @media (min-width: 768px) {
       .masthead-brand {
	 float: left;
       }
       .masthead-nav {
	 float: right;
       }
     }


     /*
      * Cover
      */

     .cover {
       padding: 0 20px;
     }
     .cover .btn-lg {
       padding: 10px 20px;
       font-weight: bold;
     }


     /*
      * Footer
      */

     .mastfoot {
       color: #999; /* IE8 proofing */
       color: rgba(255,255,255,.5);
     }


     /*
      * Affix and center
      */

     @media (min-width: 768px) {
       /* Pull out the header and footer */
       .masthead {
	 position: fixed;
	 top: 0;
       }
       .mastfoot {
	 position: fixed;
	 bottom: 0;
       }
       /* Start the vertical centering */
       .site-wrapper-inner {
	 vertical-align: middle;
       }
       /* Handle the widths */
       .masthead,
       .mastfoot,
       .cover-container {
	 width: 100%; /* Must be percentage or pixels for horizontal alignment */
       }
     }

     @media (min-width: 992px) {
       .masthead,
       .mastfoot,
       .cover-container {
	 width: 700px;
       }
     }     
    </style>
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand" style="font-family: Lucida Sans Unicode;">	      <img src="/images/rect5619.png" height=40/> Photos</h3>
              <ul class="nav masthead-nav">
		@if(!Auth::check())
                <li class="active"><a href="#">Home</a></li>
                <li class="active"><a href="/login">Sign In</a></li>		
		@else
                <li class="active"><a href="/home">Home</a></li>
                <li class="active"><a href="/logout">Logout</a></li>
		@endif
		<!--                <li><a href="#">Features</a></li>
                <li><a href="#">Contact</a></li> -->
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">12,000 Photos</h1>
            <p class="lead">Photo Organization for Businesses</p>
	    <p>Organization starts before the photos are taken.</p>
	    <p>All photos are automatically uploaded to the cloud, already organized.</p>
	    <p>View, search, further organize, and download the photos at any time.</p><br>
	    <p>Simple payment plans and hosted on technology that is used by major companies worldwide.</p>
            <p class="lead">
	      <a href="/register" class="btn btn-lg btn-default">Register</a> 
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>&copy; 2014 Devlabtech <!-- <br> <small>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</small> --></p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
