<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Control Panel</title>
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


table
{
  width: 500px;
  font-size: 18px;
  
}


</style>
<style type="text/css">
a
{
   color: #0000FF;
   text-decoration: underline;
}
a:visited
{
   color: #800080;
}
a:active
{
   color: #FF0000;
}
a:hover
{
   color: #0000FF;
   text-decoration: underline;
}

td{
  height: 40px;
}

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




<div style="position:absolute;left:100px;top:364px;width:800px;height:900px;z-index:2;background-color:#FFFFFF;border:1px solid #efefef;border-radius:4px;">

 <br /><br />


      
    

  

  <table>
    <tr>
         <td> <a href="main_admin" >Main Table</a> </td>
    </tr>
    <tr>
          <td> <a href="product_admin">Product Table</a> </td>
    </tr>
       <tr>
         <td> <a href="about_admin">About Table</a> </td>
    </tr>
  </table>


  <br />
  <br />
  <h1> Kabul Arya Pharma Accounting Database </h1>
   <br />

   <table>
    <tr>
         <td> <a href="account" >Account</a> </td>
         <td></td>
         <td></td>
         
    </tr>
    <tr>
          <td> <a href="money_received" >Pomade Received Money</a> </td>
          <td></td>
          <td></td>
          <td> <a href="money_received_syrup" >Syrup Received Money</a> </td>
    </tr>
       <tr>
         <td> <a href="expenses" >Pomade Expenses</a> </td>
         <td></td>
         <td></td>
         <td> <a href="expenses_syrup" >Syrup Expenses</a> </td>
    </tr>
      <tr>
         <td> <a href="bill" >Pomade Bill</a> </td>
         <td></td>
         <td></td>
         <td> <a href="bill_syrup" >Syrup Bill</a> </td>
    </tr>
  </table>

<br />
<br />
<br />

<table>
<tr>
    <td> <a href="sayed_moh_shah">Pomade - Sayed Moh Shah </a> </td>
</tr>
<tr>
   <td> Pomade Customers: &nbsp;
    <form action="pomade_customer" method="post">

    {{ csrf_field() }}
       <select name="customers">
         @foreach($custom as $Var)
           <option value="{{$Var->ID}}">{{$Var->Name}}</option>
         @endforeach
       </select>


       <input type="submit" value="See" />

     </form>
    </td>
</tr>
<tr>
   <td> <a href="pomade_all_balance">All Customers Pomade Balance</a> </td>
</tr>
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