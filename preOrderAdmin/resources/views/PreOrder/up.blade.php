 
<html>
   
   <head>
      <title>Student Management | Edit</title>
      <style>
.modal {
  display: block; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: -50px;
  width: 120%; /* Full width */
  height: 150%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 1% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 300%; /* Could be more or less, depending on screen size */
}
</style>
   </head>
   
   <body>
    
 <?php

if(isset($_POST['edititem']))
{
  $rid = $_POST['aid'];
 $users = DB::table('menuList')
            ->join('menuTypes', 'menuTypes.itemId', '=', 'menuList.itemId')
           ->join('quantityTypes', 'menuList.quantityId', '=', 'quantityTypes.quantityId')

             ->select('*')->where('hotelId', Auth::id())->where('menuList.recipeId',$rid)->get();

 foreach($users as $use)
 {
  
  echo "id:".$use->recipeId; 
 
 ?>
 <div id="id02" class="modal">
      <form  method = "post" class="modal-content animate" style="text-align:center;width:30%;background-color:;font-size:15px;>
         ?>">
      
        <br>
        <?php  echo "Id:".$use->recipeId ; ?>
        <br>
        <input type = 'hidden' name = 'recipeId' id='recipeId'
                     value = '<?php echo $use->recipeId ; ?>'/>
          <div> Items    
               
                 &nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;<input type = 'text' name = 'itemName' id='itemName'
                     value = '<?php echo $use->itemName ; ?>'/>
               </div>
               <br>
              <div>RecipeName:
             
                  <input type = 'text' name = 'recipeName' id='recipeName'
                     value = '<?php echo $use->recipeName ; ?>'/>
            
              </div>
              
               <br>
            
               <div>Quantity:
              
           
                                
<?php

 $users = DB::select('select * from quantityTypes'); ?>
   
 <?php
echo "<select name='student' id='sel'>Student Name</option>"; 
echo "<option selected=selected>". $use->quantityName."</option>"?>

<?php
foreach($users as $sett)
{?>S
  
<?php ?>;


<?php 
echo "<option id=". $sett ->quantityName.">". $sett ->quantityName."</option>"?>;
<!-- //<?php //echo "<option name=". $sett ->quantityName.">". $sett ->quantityName."</option>"?>;-->


    <?php
      }
    ?>
                
 </select>

</div>
 <br>

         <div>Amount&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;
            <input type = 'text' name = 'price' id='price'
                     value = '<?php echo $use->price; ?>'/>
                  
        </div>
          
           <br></br>

           <div>
            {{csrf_field()}}
                  <input type = 'button' id="update" value = "Update" />

              </div>
              <br>
      <br>
      
      </form>

  </div>
<?php
}
}
?>
 

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');

var modal2 = document.getElementById('id02');
var modal3 = document.getElementById('id03');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>
  </body>
</html>







<style>

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





    

