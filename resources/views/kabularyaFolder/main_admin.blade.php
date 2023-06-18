<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Control Panel - main</title>
<meta name="generator" content="WYSIWYG Web Builder 9 - http://www.wysiwygwebbuilder.com">

<script type="text/javascript" src="js/stscode.js"></script>

<style type="text/css">
div#container
{
    background-color:#FFFFFF;
   width: 1000px;
   position: relative;
   margin-top: 0px;
   margin-left: auto;
   margin-right: auto;
   text-align: left;
   
  
}
body
{
   text-align: center;
   margin: 0;
   background-color:#FFFFFF;
   
   color: #000000;
}




</style>
<style type="text/css">


              #button{
                width: 100px;
                height: 33px;
                background-color: #eee;
                text-align:center;
                color:#000;


              }

              .inputs
              {
                color:black;
                border:1px 1px;
                
                width: 300px;
                height: 30px;

                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                
                margin: 0;


              }

              table{
                width:500px;
                border:1px solid gray;
                border-collapse:collapse;
              }
                tr,td{
                   border:1px solid gray;
                   border-collapse:collapse;
                   height: 35px;

                }

        
       
              #header
              {
                background-color: Navy;
                color:white;
                height: 30px;
                 border:1px solid gray;
              }

             #content{
              background-color: #FFFAF0;
             }


           

             #content:hover
             {
              background-color: #F0F0F0 ;
             }

      #insertStatus
      {
        color:green;
        font-family: times-new-roman;
        font-size: 20px;
        padding: 10px;
      }

       #NotinsertStatus
      {
        color:#f00;
        font-family: times-new-roman;
        font-size: 20px;
        padding: 10px;
      }

         .button
         {
          border:1px solid gray;
          width:90px;
          height: 30px;
          font-size: 14px;
          font-family: sans-serif;
          padding: 7px;
          border-radius: 5px;
          background-color: DarkGray;
          padding-right: 17px;
          padding-left: 10px;
          color:#fff;

         }
          .button-delete
         {
          border:1px solid gray;
          width:70px;
          height: 30px;
          font-size: 14px;
          font-family: sans-serif;
          padding: 7px;
          border-radius: 5px;
          background-color: LightCoral ;
          color: #fff;

         }

         thead,th
         {
          background-color: CadetBlue;
          color: #fff;
         }


a:link {text-decoration:none;}
a:visited {text-decoration:none;}
a:hover {text-decoration:underline;}
a:active {text-decoration:underline;}

</style>



<script type="text/javascript" src="stmenu.js"></script></head>
<body>
<div id="container">
<div style="width:1000px;height:1400px;background-color:#b6e0f8;">


<div style="position:absolute;left:0px;top:0px;z-index:999;">
 <img src="images/banner.png" />
</div>


<div style="position:absolute;left:394px;top:200px;z-index:999;">


</div>




<div style="position:absolute;left:10px;top:364px;width:970px;height:900px;z-index:2;background-color:#FFFFFF;border:1px solid #efefef;border-radius:4px;">

 <a href="managePage">Back</a>
 
 <br /><br />
<a href="insert_main">New Information</a>

 
    <br />
   <br />
<table>
      <thead>
         <th>ID</th>
         <th>Description</th>
         <th>Picture</th>
         <th>News</th>
         <th>Event 1</th>
         <th>Event 2</th>
         <th>Event 3</th>
         <th>Update</th>
         <th>Delete</th>
      </thaed>
      <tbody>
         @foreach($tableVar as $tbl)
          <tr>
               <td>{{$tbl->id}}</td>
               <td>{{$tbl->description}}</td>
               <td><img src="{{$tbl->picture}}" style="width:100px;height:100px;"></td>
               <td>{{$tbl->news}}</td>
               <td>{{$tbl->event1}}</td>
               <td>{{$tbl->event2}}</td>
               <td>{{$tbl->event3}}</td>
               

               <td > <a class="button" href="edit_main&{{$tbl->id}}">Edit</a> </td>
               <td> <a class="button-delete" href="delete_main&{{$tbl->id}}">Delete</a>  </td>
          </tr>
          @endforeach
      </tbody>
   </table>
  

 </div>
 
 









<div id="wb_Shape1" style="position:absolute;left:0px;top:1364px;width:1000px;height:70px;z-index:2;background-color:#2668B3;">


<div style="position:absolute;left:250px;top:25px;color:#FFFFFF;font-size:14px;">
     All Right Reserved for Kabul Arya Pharmaceutical Company Copyright @ 2016
</div>

</div>





</div>

</div>
</body>
</html>