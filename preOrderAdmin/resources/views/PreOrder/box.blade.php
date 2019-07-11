
         
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: white;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  
    

}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}  
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <b><p>Powered by cardiac Labs</p1></b> <br></br>
  <a href="/ram">HOME</a>
  <a href="box">ACCOUNT</a>
  <a href="#">ABOUT US</a>
  <a href="#">CONTACT US</a>
 <a href="" <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li></a>
  
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginright = "250px";
  document.body.style.backgroundColor = "white(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginright= "0";
  document.body.style.backgroundColor = "white";
}
</script>
   
</body>


<head>
	
  
   </head>
  <body>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>

  <div class="container">
  <h2 id="ty" >ADD ITEMS</h2>
  <br></br>
 
  
  <b><button type="button" id="rest"  class="btn btn-danger" onclick="window.location.href='/additem'">ADD</button></b>
       
   </div>

  </body>
   </html>

  <style>
	  
  .container

   {
	 
  background-color: white;
  width: 300px;
  height:350px;
  border: 1.5px solid silver;
  padding: 50px;
  margin : 90px 650px;
 
    }
  
  
form-item.field.email, .form-item.field.text {
   display: inline-block;
   min-width: 48.8%;
 }
 
 .form-item.field.email {
   margin-right: 1.4%;
 }



#rest {
  padding: 15px 79px;
  font-size: 20px;
  align:center;
  text-align: center;
  border: 1px solid red;
  border-radius: 15px;
  
 
}

 #ty{
    text-align: center;
    padding-top: 1em;
    
      }


 </style>



      
		   












