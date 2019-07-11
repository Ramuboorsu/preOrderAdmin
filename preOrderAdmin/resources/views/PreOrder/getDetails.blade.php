<htlm>
<head>
	<script> 
$(document).ready(function(){
  $(".check").click(function(){
	  var t = $(this).attr('aid');   
	 
   $(".box"+t).slideDown("slow");
   document.getElementById("rrt"+t).style.display="none";
   document.getElementById("up"+t).style.display="block";
    document.getElementById("acct"+t).style.display="block";
   document.getElementById("rej"+t).style.display="block";
  });
   $(".up").click(function(){
    var t = $(this).attr('aid'); 
    
   $(".box"+t).slideUp("slow");
    document.getElementById("rrt"+t).style.display="block";
   document.getElementById("up"+t).style.display="none";
  });
});
</script>
</head>
</htlm>

<?php
if(isset($_POST['getnot']))
{
?>
<div id="abc" style="; text-align: center;margin:0px 50px">
			<br></br>

     <b><a href="#"" id="del" class="newitem">New</span></a></b>

     <b><a  href='#' id="var" class="acceptitem">Accepted</span></a></b>
    <hr></hr>
        <br><br>
      	
		</div>';
<?php
}



if(isset($_POST['getitem']))
{
?>

<div id="gtv" style=" text-align: center; margin-left:100px;">
<?php
$sel = DB::table('ordersTable')->groupBy('loginTable.userId')
              ->join('orderDetails', 'orderDetails.orderId', '=', 'ordersTable.orderId')
            ->join('loginTable','loginTable.userId','=','ordersTable.userId')

            ->select('*')->where('hotelId', Auth::id())->where('orderDetails.status','=',0)
            ->get();

            $cnt = DB::table('ordersTable')->groupBy('loginTable.userId')
              ->join('orderDetails', 'orderDetails.orderId', '=', 'ordersTable.orderId')
            ->join('loginTable','loginTable.userId','=','ordersTable.userId')

            ->select('*')->where('hotelId', Auth::id())->where('orderDetails.status','=',0)
            ->count();

if($cnt != 0)
{
            
        foreach($sel as $sett)
        {
    $uid =$sett->userId;

    echo $uid;


    $selus = DB::table('ordersTable')
           
            ->join('orderDetails', 'orderDetails.orderId', '=', 'ordersTable.orderId')
            ->join('loginTable','loginTable.userId','=','ordersTable.userId')
               ->join('menuList','menuList.recipeId','=','ordersTable.recipeId')
            ->select('*')->where('ordersTable.userId','=',$uid)->where('hotelId', Auth::id())->get();
      echo "
    <div id='yt' >";

       $id = $sett ->userId;
       echo $sett ->name;
       ?>

        <p2> <?php echo $sett ->estimatedTime;?> </p2>
       <b><button id="rrt{{$id}}" aid="{{$id}}" class="btn btn-danger check" style=";float:right;">Check</button>
       <button id="up{{$id}}" aid="{{$id}}" class="btn btn-danger up" style="display:none;float:right;">Up</button></b>
        
              <div id="box" class="box{{$id}}">
               <b style="float:left;"> PhoneNo:<?php echo $sett ->mobileNumber;?></b>
               <br>
          <table id="example" style="margin:0px 80px;">
                  <tr>

<th>
               RecipeID
            </th>
           
            <th>
               cost
           </th>
           
</tr>
       <?php
    foreach ($selus as $seld) {
  
$rid= $seld ->recipeId;
  $selres = DB::table('menuList')->select('recipeName')->where('recipeId','=',$rid)->get();
foreach ($selres as $resname) {
  $res = $resname->recipeName;
}
      ?>
     
<tr>
  <td><?php echo $res; ?></td>
  <td><?php echo $seld->totalAmount;?></td>
  
  </tr>
    <?php  

    }
    ?>
  </table>
  <br>
   <b><button  id="rej{{$id}}" aid="{{$id}}" class="btn btn-danger reject" style="display:none;float:right;margin:0px 50px 0px;">Reject</button></b>
      <b><button  id="acct{{$id}}" aid="{{$id}}" class="btn btn-danger accept" style="visibility: :none;float:right; ">Accept</button></b>
      <div>
<?php  $seldb=DB::table('ordersTable')->where('hotelId', Auth::id())->where('userId','=',$uid)->select(DB::raw("SUM(totalAmount) as count"))->groupBy('userId')->get();

  foreach($seldb as $ddd)
  {
    $tt = $ddd->count;
    echo "<b>Totalcost==".$tt."</b>";
  }  

  ?>
    
    </div>
                     
  </div>
                    <?php
      echo "</div>";

    }
  }
  else
  {
    echo "no items";
  }
}
    ?>

<?php
    if(isset($_POST['getacceptitems']))
{
?>

<div id="gtv" style=" text-align: center; margin-left:100px;">
<?php
$sel = DB::table('ordersTable')->groupBy('loginTable.userId')
              ->join('orderDetails', 'orderDetails.orderId', '=', 'ordersTable.orderId')
            ->join('loginTable','loginTable.userId','=','ordersTable.userId')

            ->select('*')->where('hotelId', Auth::id())->where('orderDetails.status','=',1)
            ->get();
            
        foreach($sel as $sett)
        {
    $uid =$sett->userId;



    $selus = DB::table('ordersTable')
           
            ->join('orderDetails', 'orderDetails.orderId', '=', 'ordersTable.orderId')
            ->join('loginTable','loginTable.userId','=','ordersTable.userId')
               ->join('menuList','menuList.recipeId','=','ordersTable.recipeId')
            ->select('*')->where('ordersTable.userId','=',$uid)->where('hotelId', Auth::id())->get();
      echo "
    <div id='yt' >";

       $id = $sett ->userId;
       echo "<p><b> customerId:".$id."</b></p>";
       echo $sett ->name;

       ?>

        <p2> <?php echo $sett ->estimatedTime;?> </p2>
       <b><button id="rrt{{$id}}" aid="{{$id}}" class="btn btn-danger check" style=";float:right;">Check</button>
       <button id="up{{$id}}" aid="{{$id}}" class="btn btn-danger up" style="display:none;float:right;">Up</button></b>
        
              <div id="box" class="box{{$id}}">
               <b style="float:left;"> PhoneNo:<?php echo $sett ->mobileNumber;?></b>
               <br>
                <table id="example" style="margin:0px 80px;">
                	<tr>

<th>
               RecipeID
            </th>
           
            <th>
               cost
           </th>
           
</tr>
       <?php
    foreach ($selus as $seld) {
  
$rid= $seld ->recipeId;
  $selres = DB::table('menuList')->select('recipeName')->where('recipeId','=',$rid)->get();
foreach ($selres as $resname) {
  $res = $resname->recipeName;
}
      ?>
     
<tr>
	<td><?php echo $res; ?></td>
	<td><?php echo $seld->totalAmount;?></td>
	
	</tr>
    <?php  

    }
    ?>
  </table>
  <br>
   
      <b><button  id="acct{{$id}}" aid="{{$id}}" class="btn btn-success endorder" style="visibility: :none;float:right; ">End Order</button></b>
      <div>
<?php  $seldb=DB::table('ordersTable')->where('hotelId', Auth::id())->where('userId','=',$uid)->select(DB::raw("SUM(totalAmount) as count"))->groupBy('userId')->get();

	foreach($seldb as $ddd)
	{
		$tt = $ddd->count;
		echo "<b>Totalcost==".$tt."</b>";
	}  

	?>
		
    </div>

                     
  </div>


                    <?php
      echo "</div>";

    }
    ?>
    


<?php
}
    ?>