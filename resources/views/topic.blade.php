<!DOCTYPE html>
<html lang="en">
<style>
.thumbnail {
    padding:0px;
}
.panel {
	position:relative;
}
.panel>.panel-heading:after,.panel>.panel-heading:before{
	position:absolute;
	top:11px;left:-16px;
	right:100%;
	width:0;
	height:0;
	display:block;
	content:" ";
	border-color:transparent;
	border-style:solid solid outset;
	pointer-events:none;
}
.panel>.panel-heading:after{
	border-width:7px;
	border-right-color:#f7f7f7;
	margin-top:1px;
	margin-left:2px;
}
.panel>.panel-heading:before{
	border-right-color:#ddd;
	border-width:8px;
}
</style>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
</head>
<body>
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

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h3>{{$topic->title}}</h3>
      <h6>{{$topic->description}}<h6>
    </div><!-- /col-sm-12 -->
  </div><!-- /row -->
  @foreach ($comments as $comment)
  <div class="row">
    <div class="col-sm-1">
      <div class="thumbnail">
        <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
      </div><!-- /thumbnail -->
    </div><!-- /col-sm-1 -->

    <div class="col-sm-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>{{$comment->name}}</strong> <span class="text-muted">commented on {{$comment->created_at}}</span>
        </div>
        <div class="panel-body">
          {{$comment->message}}
        </div><!-- /panel-body -->
      </div><!-- /panel panel-default -->
    </div><!-- /col-sm-5 -->
  </div>
  @endforeach
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <form method="POST" action="{{url('forum/topic')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="title" value="{{ $topic->title }}">
    <input type="hidden" name="topic_id" value="{{ $topic->id }}">
    <div class="form-group">
      <label for="message">Comment:</label>
      <textarea class="form-control" rows="5" id="message" name="message" required></textarea>
    </div>
    <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Comment</button>
  </form>
</div>

</body>
<footer>
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
</footer>
</html>