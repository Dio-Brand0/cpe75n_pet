<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Project Estorya Ta!</title>
  
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<style>
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

/* Month header */
.month {
    padding: 70px 25px;
    width: 100%;
    background: #1abc9c;
    text-align: center;
}

/* Month list */
.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

/* Previous button inside month header */
.month .prev {
    float: left;
    padding-top: 10px;
}

/* Next button */
.month .next {
    float: right;
    padding-top: 10px;
}

/* Weekdays (Mon-Sun) */
.weekdays {
    margin: 0;
    padding: 12px 0;
    background-color:#ddd;
}

.weekdays li {
    display: inline-block;
    width: 13%;
    color: #666;
    text-align: center;
}

/* Days (1-31) */
.days {
    padding: 5px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13%;
    text-align: center;
    margin-bottom: 5px;
    font-size:11px;
    color:#777;
}

/* Highlight the "current" day */
.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}
</style>
</head>
<body style="background-color: #D8D8D8; ">

<header>
  <img src="{{ asset('images/petwname.png')}}" style="width:100%; height:40%;"> 
</header>
  
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li><a href="{{ url('home')}}">HOME</a> </li>
          <li><a href="{{ url('books') }}">BOOKS</a></li>
          @if (session('name'))
            <li><a href="{{ url('forum')}}">PROJECT MANAGER</a></li>
          @endif
          <li><a href="{{ url('about')}}">ABOUT US</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          @if (!session('name'))
          <li><a href="{{ url('registration')}}"><span class="glyphicon glyphicon-user"></span> Be a Volunteer </a></li>
          <li><a href="{{ url('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          @else
          <li><a><span>Hello, {{session('name')}}</span></a></li>
          <li><a href="{{ url('user/logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
          @endif
        </ul>
      </div>
    </nav>
  
  <div class="row">
    
  </div>

<div class="row" style="background-color: #3B3B3B;">
  <font color="white" style="margin-top: 10%">
    <div align="center"> University of San Carlos-Pathways</div>
    <div align="center"> Nasipit, Talamban, Cebu City ,6000, Philippines</div>
    <div align="center"> uscpathwaysorganization@gmail.com</div>
  </font>
</div>

</div>
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>