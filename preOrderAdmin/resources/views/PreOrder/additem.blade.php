         
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
  <a href="/myProject/box">ACCOUNT</a>
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
</html> 



<!DOCTYPE html>
<html>
<head>
	
  
   </head>
  <body>

<style>
.container{
   

  background-image: url("../istockphoto-2.png");


}
</style>



  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>

  <div class="container">
  <h2 id="ty" >ADD ITEMS</h2>
  <br></br>
  
  <form method="POST" action="/storeitems"  autocomplete="off" >
 
  RecipeName:<input type="text"  placeholder=""  id="qw" required="" name="recipe">&emsp;&emsp;&emsp;
  Category:<select name="category" required="" class="select-style" id="qw" >
<!--<option selected=selected>quantityName</option>-->
<option></option>
<option>veg</option>
<option>non-veg</option>



 </select>&emsp;<br></br>

		
 
  
  
  Sub&emsp;&emsp;&emsp;&emsp;:<select name="sub" required="" class="select-style" id="qw" >Student Name</option>
<!--<option selected=selected>quantityName</option>-->
<option></option>
<option>starters</option>
<option>biryani</option>
<option>curries</option>
<option>desserts</option>



 </select>&emsp;&emsp;&emsp;&emsp;
  
  
 
  Quantity:<select name="quantity" required="" class="select-style" id="qw" >Student Name</option>
<!--<option selected=selected>quantityName</option>-->
<option></option>
<option>singel</option>
<option>plate</option>
<option>family</option>
<option>jumbo</option>



 </select>&emsp;
 
 <br></br>
 
  
  Amount&emsp;&emsp;
  :<input type="text"  placeholder=""  id="qw" required="" name="amount">&emsp;&emsp;&emsp;&emsp;&emsp;
  
  Status:<select name="status" required="" class="select-style" id="qw" >Student Name</option>
<!--<option selected=selected>quantityName</option>-->
<option></option>
<option>on</option>
<option>off</option>




 </select>&emsp;
 
  <br></br>
  <br></br>
  {{csrf_field()}}
  <button  type="submit" id="rest"  value="ADD" name="ADD" class="btn btn-danger" >ADD</button>
  
  
  
  </form>
       
   </div>

  </body>
   </html>

  <style>
  
	  	  
  .container

   {
	 
  background-color: white;
  width: 750px;
  height:500px;
  border: 1.5px solid silver;
  padding: 50px;
  margin : 90px 500px;
 
    }
#rest {
  padding: 15px 79px;
  font-size: 20px;
  margin:0px 240px;
  text-align:center;
  text-align: center;
  border: 1px solid red;
  border-radius: 15px;
}
 #ty{
    text-align: center;
  }


 </style>

<style>

#qw{

  font-size:20px;
  width:200px;
}

.select-style {
    border: 1px solid silver;
    width: 170px;
    overflow: hidden;
    background: white;
}

.select-style select {
    padding: 3px 8px;
    width: 170px;
    border: none;
    box-shadow: none;
    background: white;
    background-image: none;
    -webkit-appearance: none;
}

.select-style select:focus {
    outline: none;
}

</style>











