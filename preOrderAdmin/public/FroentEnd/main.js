$(document).ready(function(){


  window.setInterval(function(){
  count();
}, 500);

function count(){
      $.ajax({
         url : "/tab",
      type: "POST",
         data : {countof:1,'_token': $('meta[name="csrf-token"]').attr('content')},
         success : function(data){

            $("#countof").html(data);
         }
      })
   }



function datatb(){
      $.ajax({
         url : "/tab",
      type: "POST",
         data : {datatb:1,'_token': $('meta[name="csrf-token"]').attr('content')},
         success : function(data){

            $("#getpopup").html(data);
         }
      })
   }


      


$("body").delegate("#cv","click",function()
 {
   
       $.ajax({
         url : "/tab",
      type: "POST",
         data : {datatb:1,'_token': $('meta[name="csrf-token"]').attr('content')},
         success : function(data){
            $("#getpopup").html(data);
         }
      })
      });


$("body").delegate(".eid","click",function()
  {
    var aid = $(this).attr('aid');
  $.ajax({
         url      : "/details",
         method   :  "POST",
         data  :  {edititem:1,aid:aid,'_token':$('meta[name="csrf-token"]').attr('content')},
         success  :  function(data){
         
            $("#fun").html(data);
            if($("body").width() < 480){
               $("body").scrollTop(683);
            }
         }
      })


  });

$("body").delegate("#update","click",function(event){ 
      var recipeId = $('#recipeId').val();
       var itemName = $('#itemName').val();
        var recipeName = $('#recipeName').val();
         var sel = $('#sel').val();
          var price = $('#price').val();
         $.ajax({
         url      :  "/update",
         method   :  "POST",
         data  :  {update1:1,recipeId:recipeId,itemName:itemName,recipeName:recipeName,sel:sel,price:price,'_token':$('meta[name="csrf-token"]').attr('content')},
         success  :  function(data){
         
         alert("updated successfully");
            $("#fun").html(data);
             datatb();
            if($("body").width() < 480){
               $("body").scrollTop(683);
            }
         }
      })
   
   })


$("body").delegate(".didof","click",function(event){ 
  

        var aid = $(this).attr('id');
   
        var rc = $('#'+aid).prop('checked');


        if(rc ==true)
        {
var status = 1;
        }
        else
        {
          var status =0;
        }
            $.ajax({
         url      :  "/update",
         method   :  "POST",
         data  :  {update2:1,aid:aid,status:status,'_token':$('meta[name="csrf-token"]').attr('content')},
         success  :  function(data){
          datatb();
         alert("updated successfully");
            $("#getpopup").html(data);
            if($("body").width() < 480){
               $("body").scrollTop(683);
            }
         }
      })
  
   })


$("body").delegate(".accept","click",function()
 {
   
   var aid = $(this).attr('aid');
  
       $.ajax({
         url : "/tab",
      type: "POST",
         data : {accept:1,aid:aid,'_token': $('meta[name="csrf-token"]').attr('content')},
         success : function(data){
            cllto();
            $("#getpopup").html(data);

         }
      })
      });



$("body").delegate(".endorder","click",function()
 {
   
   var aid = $(this).attr('aid');
  
       $.ajax({
         url : "/tab",
      type: "POST",
         data : {endorder:1,aid:aid,'_token': $('meta[name="csrf-token"]').attr('content')},
         success : function(data){
          callendorder();
            $("#getpopup").html(data);

         }
      })
      });

$("body").delegate("#cvp","click",function()
 {

       $.ajax({
         url : "/getDt",
      type: "POST",
         data : {getnot:1,'_token': $('meta[name="csrf-token"]').attr('content')},
         success : function(data){
         $("#fun").html(data);
         }
      })
      });


$("body").delegate(".newitem","click",function()
 {

       $.ajax({
         url : "/getDt",
      type: "POST",
         data : {getitem:1,'_token': $('meta[name="csrf-token"]').attr('content')},
         success : function(data){

         $("#getpopup").html(data);
         }
      })
      });



$("body").delegate(".acceptitem","click",function()
 {

       $.ajax({
         url : "/getDt",
      type: "POST",
         data : {getacceptitems:1,'_token': $('meta[name="csrf-token"]').attr('content')},
         success : function(data){

         $("#getpopup").html(data);
         }
      })
      });


function cllto(){
         $.ajax({
         url : "/getDt",
      type: "POST",
         data : {getitem:1,'_token': $('meta[name="csrf-token"]').attr('content')},
         success : function(data){
         $("#getpopup").html(data);
         }
      })
   }


function callendorder(){
         $.ajax({
         url : "/getDt",
      type: "POST",
         data : {getacceptitems:1,'_token': $('meta[name="csrf-token"]').attr('content')},
         success : function(data){
         $("#getpopup").html(data);
         }
      })
   }

function newtb(){
         $.ajax({
         url : "/getDt",
      type: "POST",
         data : {getnot:1,'_token': $('meta[name="csrf-token"]').attr('content')},
         success : function(data){
         $("#getpopup").html(data);
         }
      })
   }


});
     
   