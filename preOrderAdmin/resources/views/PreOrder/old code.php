<div id="gtv" style=" text-align: center;  margin-left:300px;  display:none">
			
	

<?php
$sel = DB::table('ordersTable')
            ->join('loginTable', 'loginTable.userId', '=', 'ordersTable.userId')
            ->join('orderDetails', 'loginTable.userId', '=', 'ordersTable.userId')

            ->select('*')->where('hotelId', Auth::id())
            ->get();
            
        foreach($sel as $sett)
        {
			echo "
		<div id='yt' >";
			$id = $sett ->userId;
			echo $sett ->name;?>
			
			
	
        <p2> <?php echo $sett ->estimatedTime;?> </p2>
			
	
			<b><button id="rrt" aid="{{$id}}" class="btn btn-danger check" >Check</button>
        <button id="up" aid="{{$id}}" class="btn btn-danger up" >Up</button>
      </b>
			
			
			
			<div id="box" class="box{{$id}}">


            PhoneNo:<?php echo $sett ->mobileNumber;?>
            
            
               Items:<?php echo $sett ->totalAmount;?><br></br>

               ResipeId:<?php echo $sett ->recipeId;?>
               
               
               			<b><button id="rrt" aid="{{$id}}" class="btn btn-danger Accept" >Accept</button></b>

                     	<b><button id="rrt" aid="{{$id}}" class="btn btn-danger Reject" >Reject</button></b>

</div>

			<?php echo "</div>";
		}
?>