<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">

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
          <li><a href="{{ url('user/logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
          @endif
        </ul>
      </div>
    </nav>

<body>
<div>

<a href="{{url('forum/activity')}}">
 <button class="btn btn-sm btn-success">New Topic</button>
</a>

 
<table class="table table-bordered" id="productTable">
        <thead>
            <th style="width:50%"><center>Title</center></th>
            <th style="width:50%"><center>Description</center></th>
        </thead>
        <tbody>
          @foreach ($topics as $topic)
          <tr>
            <td><center>{{$topic->title}}</center></td>
            <td><center>{{$topic->description}}</center></td>
          </tr>
          @endforeach
        </tbody>
        

    </table>

</div>

<div class="row" style="background-color: #3B3B3B;">
  <font color="white" style="margin-top: 5%">
    <div align="center"> University of San Carlos-Pathways</div>
    <div align="center"> Nasipit, Talamban, Cebu City ,6000, Philippines</div>
    <div align="center"> uscpathwaysorganization@gmail.com</div>
  </font>
</div>

</div>
<script src="assets/jquery-3.1.1/jquery.min.js"></script>
    <script src="assets/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>
</html>