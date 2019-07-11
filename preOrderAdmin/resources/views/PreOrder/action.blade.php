<html>
<head>
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
          <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
users = $('#extable').DataTable();
            $('#hell').keyup(function(){
                users.search($(this).val()).draw() ;
            })
});
</script>


</head>

<body>

<p>Click on this paragraph.</p>
       <div class="container">
            
            <Input type="search" class="form-control" placeholder="Search for item......." id="hell"   style="width:30%" border='1'  table align="center" />
            </div>
            <br>

            <table id="extable" class="table table-striped table-bordered" style="width:100%;text-align:center;">
               
<thead>
		
<tr>

           <!--   <th>Item Id</th> -->
            <th>ItemType</th>
             <th>RecipeID</th>

            <th>RecipeName</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Action</th>            
</tr>
</thead>
		
<tbody>


   @foreach ($users as $user)
	<tr>
	
             <!-- <td>{{ $user->itemId }}</td> -->
            <td>{{ $user->itemName }}</td>
            <td>{{ $user->recipeId }}</td>
            <td>{{$user->recipeName }}</td>
             <td>{{ $user->quantityName }}</td>
            <td>{{ $user->price }}</td>    
             <td>

                                            
                                                    @if($user->status == '0')
                                                   <input type="checkbox" class="didof" aid="{{$user->recipeId}}" id="{{$user->recipeId}}">  InActive
                                                  @elseif($user->status == '1')
                                                   <input type="checkbox" class="didof" aid="{{$user->recipeId}}" id="{{$user->recipeId}}" checked>  Active
                                                  @endif   
                                            
             </td>
            
                                    

         <td><input type="button" class="eid"  aid="{{$user->recipeId}}" id="eid"  value="Edit" />
             <input type="button"  onclick="location.href='delete/{{ $user->recipeId }}';" value="Delete" /></td>

 </tr>
@endforeach
</tbody>
</table>


</body>
</html>