
<!DOCTYPE html>
<html>
<style>
@font-face {
    font-family: dkcrayon;
    src: url(./font/dkcoolcrayon.ttf);
}
div.container {
    width: 100%;
    border: 1px solid gray;
    
}

.topright {
   position: absolute;
    bottom: 8px;
    right: 16px;
    font-size: 18px;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: rgb(59,56,56);
    position:relative;
    font-family: dkcrayon;
    text-align:center;
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    border: 2px solid #f44336;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border-radius: 4px;
    cursor: pointer;

}

input[type=submit]:hover {
    background-color: #f44336;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    font-family: dkcrayon;
}
nav {
    margin: 1;
  
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:rgb(175,171,171);
    height:5%;
    width:100%;
    overflow: hidden;

}
   
nav ul a {
    display: -webkit-flex;
    display: flex;
    color: white;
    text-align: justify;
    padding: 10px 70px ;
    text-decoration: none;
    font-family: dkcrayon;

}
li{
    
    float:left;
    font-size:15px;
}

li a:hover{
   background-color:rgb(220,40,41);
}
</style>
<header>

      <img src="{{ asset('/images/petwname.png')}}" style="width:80%; height:50%;"> 
      
    
  

</header>

<nav>
  <ul>
    <li><a href="index.html">HOME</a></li>
    <li><a href="sampit.html">SAMPIT</a></li>
    <li><a href="photo.html">PHOTO CONTEST</a></li>
    <li><a href="bene.html">BENEFICIARY</a></li>
    <li><a href="about.html">ABOUT US</a></li>
    <li><a href="login.html">LOGIN</a></li>
    <li><a href="registration.html">BE A VOLUNTEER </a></li>
  </ul>
</nav>
<body>


<div>
  <form action="register2.php" method="POST">
    
    <label for="username">Username</label>
    <input type="text" id="username" name="username" maxlength="15" required>    

    <label for="email">Email</label>
    <input type="text" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>    

    <label for="password">Password</label>
    <input type="password" id="password_1" name="password_1" minlength="8" pattern="^(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{8,}$" title="Type a minimum of 8 characters, at lease one upper letter, one lowercase letter, one number and one special character" required>   
    

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Maria" required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Antonio" required>

    <label for="cnumber">Contact Number</label>
    <input type="text" id="cnumber" name="cnumber" placeholder="09XXXXXXXX" required>    


    <label for="location">Location</label>
    <input type="text" id="location" name="location" placeholder="Cebu City,Cebu" required>

   <label for="location">User Type</label>
    <input type="text" id="usertype" name="usertype" placeholder="admin/user" required>

 
    <input type="submit" value="Submit">

  </form>



</div>
</body>

</html>
