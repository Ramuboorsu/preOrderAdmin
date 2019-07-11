<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{!! csrf_token() !!}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('/Mycss') }}/theme.css"> 
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script  type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script  type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> 

<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>



  <script src="{{ asset('/FroentEnd')}}/main.js"></script>

 <script>
     

$(document).ready(function() {
           //$('#example').DataTable();
            var users = $('#example').DataTable();

            $('#customSearchBox').keyup(function(){
                users.search($(this).val()).draw() ;
            })
        } );






</script>

<style>
	
	#yt{
		  margin-left:300px;
          margin-bottom:30px;
	}
#box, #yt {
  padding: 5px;
   width:80%;
  text-align: center;
    
  border: solid 1px silver;
  padding: 5px;
  
  background-color: white;
  border: solid 1px #c3c3c3;
}

#box

 {
padding: 60px;

display: none;

  border: none;

}


			
			
			
 #del
  
  {
		    
			font-size:1.7em;
			font-weight:bold;
			padding-right: 5em;
                    

 }
      
       #var
  
  {         
	        float: right;
			text-align:right;
			font-size:1.7em;
			font-weight:bold;
			padding-right: 18em;
          
 }
         
        
       			hr {
width: 83%;
height: 0px;
background-color: blue;
margin-right: auto;
margin-left: auto;
margin-top: 25px;
margin-bottom: 5px;
border-width: 1px;
border-color: silver;
    

}
 
        

 </style> 
    
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

		#cv
		{
			 
		background-color: white;
			 	 
	text-align: left;
    <!--padding-top: 10em;
    padding-left: 10em;-->
  border: none;
  color: red;
  padding: 12px 30px;
   padding-left: 30px;
  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  font-weight:bold;

  margin: 4px 209px;
  cursor: pointer;
  float: left;
  
		}
		
		
		
		#cvp
		{
			 
		background-color: white;
			 	 
	text-align: left;
    <!--padding-top: 10em;
    padding-left: 10em;-->
  border: none;
  color: red;
  padding: 12px 30px;
  font-weight:bold;

  text-decoration: none;
  display: inline-block;
  font-size: 22px;
  margin: 4px 302px;
  cursor: pointer;
   
		}
	
</style>



	     <!--bootstrap toggle style -->
    
		<script type="text/javascript">
			
			
			function showHideDiv1(gtv) {
				var srcElement = document.getElementById(gtv);
				document.getElementById("abc").style.display="block";
				if (srcElement != null) {
					if (srcElement.style.display == "block") {
						srcElement.style.display = 'none';
					}
					else {
						srcElement.style.display = 'block';
					}
					return false;
				}
			}
			
			
			
			
			
			
			
		</script>
</head>
<body>

<div id="mySidenav" class="sidenav">
 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <b><p>Powered by cardiac Labs</p1></b> <br></br>
 <a href="#">HOME</a>
 <a href="/box">ACCOUNT</a>
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

@extends('layouts.app')

 @section('content')
      <div class="container">
      <div class="row">
      <div class="col-md-8 col-md-offset-2">
       <div class="panel panel-default">
               <!-- <div class="panel-heading">Hai.........</div>-->

       <div class="panel-body">
        @if (session('status'))
           <div class="alert alert-success">
          {{ session('status') }}
           </div>
            @endif

                   <!-- Welcome to home page!-->
                </div>
            </div>
        </div>
    </div>
</div>

 <center>
		  <div class="form-group" id="varid">
			  
		<input type="button" id="cv" value="MENU" />
	
		
		<!--<input type="button" onClick="archive('abc')" id="cvp" style= "align:center" class="fa fa-bell" value="NOTIFICATIONS" /></button>-->
		
		<!--<button id="cvp"   onClick="archive('abc')" value="NOTIFICATIONS" class="fa fa-bell" >&nbspNOTIFICATIONS</button>-->
      <button  id="cvp" value="NOTIFICATIONS"   >NOTIFICATIONS&nbsp<i class="fa fa-bell"><sup><b id="countof"></b></sup></i></button>


		 
		<div id="divMsg" style="; text-align: center; display:none">
			<br></br>
			
			
		
		<body>
  <!--<form class="search-container">
    <input type="text" id="search-bar" placeholder="Search for item........">
    <a href="##"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
  </form>

   <div class="content">-->

<br></br>


       <div class="container">
            
            <Input type="search" class="form-control" placeholder="Search for item......." id="customSearchBox"   style="width:30%" border='1'  table align="center" />
            </div>
            
            <style>
            
            #customSearchBox
            {
	     padding: 5px 30px;
	     background:  url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;

          font-size: 20px;
           align:center;
          text-align: center;
  
        border: 2px solid silver;
        border-radius: 15px;
          background-color:#white ;
        }
  
  
			
			
		</style>
            
            
            
        <br></br><br></br>
   </div>
   <div>
   </div>
   <br>
   <div id="fun"></div>
   <div id="getpopup"></div>

  

    <script>
      $(function() {
        $(".toggle-two").change(function(){
			 
			
            if($(this).prop("checked") == true){
				
                var user = $(this).val();
             
              
              $.ajax({
				  
				  
               url:('/myProject/action'),
               
               type: "post", //request type,
              data: {
                update:1,status:1,user:user,'_token':$('meta[name="csrf-token"]').attr('content')
             
              },
               success:function(result){

                console.log(result);
              }
            });
            }
            else
            {
              var user = $(this).val();
             
                $.ajax({
                 url:('/myProject/action'), 
                 type: "post", //request type,
                data: {
                  update:1,status:0,user:user,'_token':$('meta[name="csrf-token"]').attr('content')
                },
                 success:function(result){

                  console.log(result);

                }
              });
              }
          });
    });
</script>
</body>
</html> 

</body>
</html>


            
            
            
            
 
            
            
          <!--  <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                          <!--<li><a href="{{ route('login') }}">Login</a></li><br></br>
                            <li><a href="{{ route('register') }}">Click here to Register</a></li>-->
                        @else
                            <!--<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span><br></br>
                                  <!--{{ Auth::user()->email }} <span class="caret"></span>-->

                               <!-- </a>
                                   <br></br>
                                  
                                <!--<ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>-->

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    
                              
                        @endguest
                    
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>



            
            <script type="text/javascript">
			function archive(abc) 
			{
				//alert("hello");
				var srcElement = document.getElementById(abc);
				document.getElementById("divMsg").style.display="none";
				if (srcElement != null) {
					if (srcElement.style.display == "block") {
						srcElement.style.display = 'block';
					}
					else {
						srcElement.style.display = 'block';
					}
					return false;
				}
			}
		</script>
		
		
	    </head>

	  <center>
		  <div class="form-group" id="vari">

		
	</center>

</body>

</html>



  

<!--<div id='yt' >
<p1>Saif</p1>
<p2>30min</p2>
<b><button type="button"   class="btn btn-danger" id="rrt" onclick= "archive('gh')" >Check</button></b>
</div>-->






<script type="text/javascript">
			
function archive('gh') 
{
  document.getElementById("demo").innerHTML ="dfsfdsf";
}
</script>

</body>
</html>

		</script>
		
</body>


  <!--<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>-->
  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
  
  


  

<style>

#rrt
{
  padding: 5px 30px;
  font-size: 15px;
  align:center;
  text-align: center;
  
  border: 1px solid red;
  border-radius: 15px;
  background-color:#B80000 ;
  
  }
  
#yt{
  
  width: 1100px;
  border: 1.5px solid silver;

  word-spacing:90px;

  padding: 20px;
  margin : 30px;
  
}

.dataTables_filter {
display: none; 
}


			
			
</style>			
			
			
</div>
            
            
            
            
            
 
@endsection








<style>

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
</style>


<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

</div>

<style>

table {
    max-width:1200px;
    table-layout:fixed;
    margin:auto;
    
}
</style>
    
<style>
    
    
    th, td { white-space: nowrap; }
    div.dataTables_wrapper {
        width: 1200px;
        margin: 0 auto;
    }
    
    
  </style>




            
           
     




		
      	
		</div>
		
	</center>

</body>

</html>
     



<ul class="nav navbar-nav navbar-right">
                     

                        
                        
                                           
 <!--<script>     
					 
$(document).ready(function(){
	
	$(".Reject").on("click",function(){
		
		//alert("hello");
		var id = $(this).attr("sid");
		//alert(id);
		event.preventDefault(); 
					 
					   
              swal({
  title: "An input!",
  text: "Write something interesting:",
  type: "input",
  showCancelButton: true,
  closeOnConfirm: false,
  animation: "slide-from-top",
  inputPlaceholder: "Write something"
},
function(inputValue){
  if (inputValue === false) return false;

  if (inputValue === "") {
    swal.showInputError("You need to write something!");
    return false
  }

  swal("Nice!", "You wrote: " + inputValue, "success");
});          
         
          
	  }};
          
                 </script>-->
                 
                 
                 
                 
                                                            
 <script>
$(document).ready(function(){
	
	$(".Accept").on("click",function(){
		
		//alert("hello");
		var id = $(this).attr("sid");
		//alert(id);
		event.preventDefault();
				 
					   
              swal({
  title: "Description!",
  text: "Write some text!!!",
  type: "input",
  showCancelButton: true,
  closeOnConfirm: false,
  animation: "slide-from-top",
  inputPlaceholder: "Write something"
},
		
	function(isConfirm){
  if (isConfirm) {
                  $.ajax({
           type: "POST",
           url: "manageidea.php",
           data: {
                           approvedelete : 1,id:id
                           }, // serializes the form's elements.
           success: function(data)
           {
              swal({
                                        title: 'Deleted',
                                        text: 'Your file has been deleted',
                                        timer: 2000,
                                        showConfirmButton: false,
                                        type: 'success'
                                },function() {
                                        location.reload();
                                }
                                );
           }
         });
   }
   else
   {
	   swal({
                                        title: 'Cancelled',
                                        text: 'Your delete action has been cancelled',
                                        timer: 2000,
                                        showConfirmButton: false,
                                        type: 'error'
                                },function() {
                                        location.reload();
                                }
                                );
    //swal({"Cancelled", "Your file is safe :)", "error"});
  }
});
		
		
		});
		

	
		
		
	
	});


</script>
       
 
      
      <script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>






