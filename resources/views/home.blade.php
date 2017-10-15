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
            <li><a href="{{ url('test')}}">PROJECT MANAGER</a></li>
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
  
  <div class="row">

    <div class="col-md-6" style="height: 30%; margin-left: 5%; margin-top: 3%; margin-bottom: 5%">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      
          
     <!-- Indicators -->
        <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>      
        </ol>
      

<!-- Wrapper for slides -->

        <div class="carousel-inner">
            <div class="item active">
                     <img src="images/pet6.png">
             </div>

          <div class="item">
            <img src="images/pet7.png">
          </div>

          <div class="item">
            <img src="images/pet8.png">
          </div>
        </div>

        <!-- Left and right controls -->
        
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="col-md-4" style="margin-left: 5%; margin-top: 3%;">
      <div class="month"> 
        <ul>
          <li class="prev">&#10094;</li>
          <li class="next">&#10095;</li>
          <li> October<br>
            <span style="font-size:10px">2017</span>
          </li>
        </ul>
      </div>

      <ul class="weekdays">
        <li>Sun</li>
        <li>Mon</li>
        <li>Tue</li>
        <li>Wed</li>
        <li>Thu</li>
        <li>Fri</li>
        <li>Sat</li>
      </ul>

      <ul class="days"> 
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li>6</li>
        <li>7</li>
        <li>8</li>
        <li>9</li>
        <li><span class="active">10</span></li>
        <li>11</li>
        <li>12</li>
        <li>13</li>
        <li>14</li>
        <li>15</li>
        <li>16</li>
        <li>17</li>
        <li>18</li>
        <li>19</li>
        <li>20</li>
        <li>21</li>
        <li>22</li>
        <li>23</li>
        <li>24</li>
        <li>25</li>
        <li>26</li>
        <li>27</li>
        <li>28</li>
        <li>29</li>
        <li>30</li>
        <li>31</li>
      </ul>
    </div>
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