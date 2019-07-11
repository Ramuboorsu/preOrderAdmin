<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;
class detailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $users = DB::table('menuList')
                   ->join('menuTypes', 'menuTypes.itemId', '=', 'menuList.itemId')
                   ->join('quantityTypes', 'menuList.quantityId', '=', 'quantityTypes.quantityId')

                   ->select('*')->where('hotelId', Auth::id())->get();
            
    return view('PreOrder.home',['users'=>$users]);



      
    }


          public function many(Request $request)
    {
       $recipeName = $request->input('recipe');
       $category = $request->input('category');    
       
       $sub = $request->input('sub');
       $quantity = $request->input('quantity');    
       
       $amount = $request->input('amount');
       $status = $request->input('status');

       if($status == 'on')
       {
        $st = 1;
       }   
       else{
      $st = 0;
       
        } 
       
       $sel99 = DB::table('menuTypes')->select('itemId')->where('itemName','=', $sub)->where('hotelId', Auth::id())->get();
       foreach ($sel99 as $del) {
       $selitem = $del->itemId;
       }
        $qnty = DB::table('quantityTypes')->select('quantityId')->where('quantityName','=', $quantity)->get();
       foreach ($qnty as $dqnty) {
       $qqty = $dqnty->quantityId;
       }
       
        $users = DB::table('menuList')
                   
                   ->insert(['itemId' =>$selitem,'recipeName' =>$recipeName,'type'=>$category, 'quantityId' =>$qqty ,'price' => $amount, 'status' => $st ]);
        return redirect('box')->with('message','message|Data successfully updated');
     }


     public function index123()
    {
        if(isset($_POST['datatb']))
        {
         $users = DB::table('menuList')
                   ->join('menuTypes', 'menuTypes.itemId', '=', 'menuList.itemId')
                   ->join('quantityTypes', 'menuList.quantityId', '=', 'quantityTypes.quantityId')

                   ->select('*')->where('hotelId', Auth::id())->get();
                   return view('PreOrder.action',['users'=>$users]);
        }
            
    


if(isset($_POST['accept']))
{
    $id = $_POST['aid'];

    $up = DB::table('ordersTable')->select('orderId')->where('userId','=',$id)->get();
    foreach ($up as $ap) {

        $oid = $ap->orderId;
        
        $upt = DB::table('orderDetails')->where('orderId','=',$oid)->update(['status'=>1]);
    }

}

if(isset($_POST['endorder']))
{
    $id = $_POST['aid'];

    $up = DB::table('ordersTable')->select('orderId')->where('userId','=',$id)->get();
    foreach ($up as $ap) {

        $oid = $ap->orderId;
        
        $upt = DB::table('orderDetails')->where('orderId','=',$oid)->update(['status'=>2]);
    }

}

    if(isset($_POST['countof']))
    { 
        $sel = DB::table('ordersTable')->groupBy('loginTable.userId')
              ->join('orderDetails', 'orderDetails.orderId', '=', 'ordersTable.orderId')
            ->join('loginTable','loginTable.userId','=','ordersTable.userId')

            ->select('*')->where('hotelId', Auth::id())->where('orderDetails.status','=',0)
            ->count();

            echo $sel;

    }

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $_POST['name'];
$email = $_POST['email'];
$area = $_POST['areaname'];
$loc =$_POST['location'];

$pass= $_POST['password'];
$cpass= $_POST['password_confirmation'];
$lt=$_POST['latitude'];
$lg=$_POST['longitude'];

if($pass == $cpass)
{
$password =  Hash::make($pass);
$f_name = $_FILES['upfile']['name'];
$f_tmp = $_FILES['upfile']['tmp_name'];
$store = "c:/opt/lampp/htdocs/".$name."/";
echo $f_tmp;
if(!is_dir("$store")){
mkdir($store,0777,true);
chmod($store,0777);
umask(0);

if($name != "sadfdsfds")
{
$ins=DB::table('hotelList')->insert(['restaurantName'=>$name,'areaName'=>$area,'city'=>$loc,'lat'=>$lt,'lng'=>$lg,'imagePath'=> $store]);

$ins=DB::table('hotelLogin')->insert(['name'=>$name,'email'=>$email,'password'=>$password]);


return redirect('/');

}
else
{
echo "not image";


}
}
else
{

if($name != "sadfdsfds")
{
$ins=DB::table('hotelList')->insert(['restaurantName'=>$name,'areaName'=>$area,'city'=>$loc,'lat'=>$lt,'lng'=>$lg,'imagePath'=> $store]);

$ins=DB::table('hotelLogin')->insert(['name'=>$name,'email'=>$email,'password'=>$password]);

echo '<script>alert(" image uploaded");window.location=("/");</script>';


}
else
{
echo '<script>alert("no image uploaded");window.location=("/");</script>';


}
}
}
else
{
echo '<script>alert("password and confirmpassword");</script>';
}

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        if(isset($_POST['update1']))

        {
            $recipeId = $_POST['recipeId'];
  $itemName = $_POST['itemName'];
        $recipeName = $_POST['recipeName'];
        $sel =  $_POST['sel'];
           $price = $_POST['price'];

           $sel = DB::table('quantitytypes')->select('*')->where('quantityName',$sel)->get();
           foreach ($sel as $id) {
               $id = $id->quantityId;
           }
    

$up = DB::table('menuList')->where('recipeId','=',$recipeId)->update(['recipeName'=>$recipeName,'quantityId'=>$id,'price'=> $price,]);


        }

if(isset($_POST['update2']))

        {
             $aid = $_POST['aid'];
              $status = $_POST['status'];
              echo $status;

$up = DB::table('menuList')->where('recipeId','=',$aid)->update(['status'=> $status]);

    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
