<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Project Estorya Ta!</title>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<style>

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
  <div class="col-md-8">
  <form method="POST" action="/user/login">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group" style="width: 50%; margin-left: 50%; margin-top: 5%">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group" style="width: 50%; margin-left: 50%;">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-default" style="margin-left: 50%">Submit</button>
    <h2 style="margin-left: 50%; margin-bottom: 10%">{{session('message')}}</h2>
  </form>
  </div>
  </div>

<div class="row" style="background-color: #3B3B3B;">
  <font color="white">
    <div align="center" style="margin-top: 5%"> University of San Carlos-Pathways</div>
    <div align="center"> Nasipit, Talamban, Cebu City ,6000, Philippines</div>
    <div align="center"> uscpathwaysorganization@gmail.com</div>
  </font>
</div>

</div>
<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>