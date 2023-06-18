<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Pomade Customers - Account</title>
<meta name="generator" content="WYSIWYG Web Builder 9 - http://www.wysiwygwebbuilder.com">


<link rel="stylesheet" type="text/css" href="cssBootstrap/bootstrap.css" >

<script type="text/javascript" src="js/stscode.js"></script>

<style type="text/css">
div#container
{
    background-color:#FFFFFF;
   width: 1500px;
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
                width:600px;
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


.credit
{
  background-color:green;
  color:white;
  border:1px solid black;
}

.debit
{
  background-color:blue;
  color:white;
  border:1px solid black;
}


</style>



<script type="text/javascript" src="stmenu.js"></script></head>
<body>
<div id="container">
<div style="width:1500px;height:1400px;background-color:#b6e0f8;">


<div style="position:absolute;left:0px;top:0px;z-index:999;">
 <img src="images/banner.png" />
</div>


<div style="position:absolute;left:394px;top:200px;z-index:999;">


</div>




<div style="position:absolute;left:10px;top:364px;width:1480px;height:1900px;z-index:2;background-color:#FFFFFF;border:1px solid #efefef;border-radius:4px;">

 <a href="managePage">Back</a>
 
 <br /><br />

 
<br />

<h3>
<center>
  


  </center>
</h3>



<br />
<br />




<br />
<br />
<h3> All Customers Pomade Balance: </h3>
<table style="width:900px;">
      <thead>

         
         <th class="credit">Customer Name</th>
         <th class="credit"> Description</th>
         <th>Date of calculation</th>
         <th>Balance</th>
         
      </thaed>
       <tbody>
             @if(count($previous)>0)
            <tr>
                  <td>{{$previous->customer}}</td>
                 
                  <td>{{$previous->Description_bill}}</td>
                  <td>{{$previous->save_date}}</td>
                  <td>{{$previous->balance}}</td>
         
            </tr>
           @endif
      </tbody>

       <tbody>
             @if(count($previous1)>0)
            <tr>
                  <td>{{$previous1->customer}}</td>
                 
                  <td>{{$previous1->Description_bill}}</td>
                  <td>{{$previous1->save_date}}</td>
                  <td>{{$previous1->balance}}</td>
         
            </tr>
           @endif
      </tbody>

         <tbody>
             @if(count($previous2)>0)
            <tr>
                  <td>{{$previous2->customer}}</td>
                 
                  <td>{{$previous2->Description_bill}}</td>
                  <td>{{$previous2->save_date}}</td>
                  <td>{{$previous2->balance}}</td>
         
            </tr>
           @endif
      </tbody>
 
      <tbody>
        <tr style="background-color:#F08080;">
           <td colspan="3" style="font-size:22px;font-family:Arial;font-weight:bold;"><center>طلب مجموعی شرکت کابل آریا ازبابت پوماد بالای مردم</center></td>
           
           <td style="font-size:18px;font-family:Arial;font-weight:bold;">{{$previous->balance + $previous1->balance + $previous2->balance}} &nbsp;AFN</td>
       </tr>
      </tbody>

   </table>


&nbsp;&nbsp;


<br />
<br />




 </div>
 <br />
 <br />















</div>

</div>
</body>
</html>