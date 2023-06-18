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
                width:800px;
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


                 #success{
          background-color:#FFFACD;
          width:700px;
          height:60px;
          z-index: -1;
          border-color:gray;
          border:0.5px;
          box-shadow: 0px 0px 2px gray;
          text-align: center;
          vertical-align: center;
           font-size: 20px;
          color:green;
          border-radius:5px;
          position: relative;
          top:-30px;

         }

            #unsuccess{
       
          z-index: 1000;
          border-color:gray;
          text-align: center;
          vertical-align: center;
           font-size: 18px;
          color:red;
          background-color: #FFFACD;
         }


a:link {text-decoration:none;}
a:visited {text-decoration:none;}
a:hover {text-decoration:underline;}
a:active {text-decoration:underline;}

</style>



<script type="text/javascript" src="stmenu.js"></script></head>
<body>
<div id="container">
<div style="width:1000px;height:10000px;background-color:#b6e0f8;">


<div style="position:absolute;left:0px;top:0px;z-index:999;">
 <img src="images/banner.png" />
</div>


<div style="position:absolute;left:394px;top:200px;z-index:999;">


</div>




<div style="position:absolute;left:10px;top:364px;width:970px;height:auto;z-index:2;background-color:#FFFFFF;border:1px solid #efefef;border-radius:4px;">

 <a href="managePage">Back</a>
 
 <br /><br />
<a href="insert_bill">New Bill</a>
<br />

 <br />
<br />
  <br />
    @if(Session::has('success'))
    <div id="success">
         <b> {{Session::get('success')}} </b>
     </div>    
    @elseif(Session::has('exist'))
        <div id="unsuccess">
          <b> {{Session::get('exist')}} </b>
       </div>  
    @endif
   
   
 
 
    <br />
   <br />

<form action="filter_bill" method="post">
{{ csrf_field() }}
   <select name="select_cs">
         @foreach($account as $ac)
          <option value="{{$ac->ID}}">{{$ac->Name}}</option>
          @endforeach
   </select>

<input type="submit" value="Filter" />

</form>

   <br />

<table>
      <thead>
       
         <th>Account</th>
         <th>Bill No</th>
         <th>Date</th>
         <th>Price</th>
         <th>Description</th>
         <th>Update</th>
         <th>Delete</th>
         
      </thaed>
      <tbody>
         @foreach($tableVar as $tbl)
          <tr>
             
               <td>{{$tbl->Name}}</td>
               <td>{{$tbl->Bill_No}}</td>
               <td>{{$tbl->Date}}</td>
               <td>{{$tbl->Price}}</td>
               <td>{{$tbl->Description}}</td>
               
             
               
               

               <td > <a class="button" href="edit_bill&{{$tbl->ID}}">Edit</a> </td>
               <td> <a class="button-delete" href="delete_bill&{{$tbl->ID}}">Delete</a>  </td>
          </tr>
          @endforeach
      </tbody>
   </table>
  

 </div>
 
 










</div>

</div>
</body>
</html>