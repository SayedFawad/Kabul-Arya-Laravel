<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sayed Moh Shah - Account</title>
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
  
    
  
    

<table>
 <tr>
     <td><img src="images/shah.jpg" style="width:100px;height:150px;" /> </td>
    
     <td><center>
      Sayed Mohammad Shah Nasiri Account 
&nbsp;&nbsp;<font style="color:white;background-color:gray;">
  Pomode Balance = {{ $result }} &nbsp;AFN
</font>

</center>
      </td>
 </tr>
</table>


  </center>
</h3>


<br />
<br />


<h3>Recent Transactions:</h3>
<br />
<a href="all_pomade_sayed_moh_shah">See All Completed Transactions</a>
<table>
  <tr>
    <td>

<h4 class="credit">Credit</h4>
   
<table>
      <thead>
         <th class="credit">ID</th>
         <th class="credit">Paid By</th>
         <th class="credit">Received To</th>
         <th class="credit">Amount</th>
         <th class="credit">Description</th>
         <th class="credit">Date</th>
         <th class="credit">Completed</th>
         
      </thaed>
      <tbody>
         @foreach($PreCr as $tbl)
          
          <tr>

               <td>{{$tbl->ID}}</td>
               <td>{{$tbl->Name}}</td>
               <td>{{$tbl->ReceivedBy}}</td>
               <td>{{$tbl->Amount}}</td>
               <td>{{$tbl->Description}}</td>
               <td>{{$tbl->Date}}</td>
               <td>
               
                   
                    <select name="finished">
                         <option value="{{$tbl->Finished_Sayed_Moh_Shah}}">{{$tbl->Finished_Sayed_Moh_Shah}}</option>
                        
                    </select>
                   

               </td>
             
               

              
          </tr>
          @endforeach
            
       
         


      </tbody>
   </table>
  
</td>
<td>


<h4 class="debit">Debit</h4>

  
<table>
      <thead>
         <th class="debit">AccountID</th>
         <th class="debit">Amount</th>
         <th class="debit">Description</th>
         <th class="debit">Date</th>
         <th class="debit">Completed</th>
       
         
      </thaed>
      <tbody>
         @foreach($PreDe as $tbl)
          <tr>
               <td>{{$tbl->AccountID}}</td>
               <td>{{$tbl->Amount}}</td>
               <td>{{$tbl->Description}}</td>
               <td>{{$tbl->Date}}</td>
                    <td>
               
                   
                    <select name="finished">
                         <option value="{{$tbl->Finished}}">{{$tbl->Finished}}</option>
                        
                    </select>
                 
               </td>
             
              
          </tr>
          @endforeach
      </tbody>
   </table>


</td>
</tr>
</table>


<br />
<br />
<h3> Saved and Previous Transaction: </h3>
<table style="width:900px;">
      <thead>

         
         <th class="credit">Paid By</th>
         <th class="credit">Credit</th>
         <th class="credit">Credit Despcription</th>
         <th class="credit">Credit Date</th>
         <th class="debit">Debit</th>
         <th class="debit">Debit Description</th>
         <th class="debit">Debit Date</th>
         <th>Saved Date</th>
         <th>Balance</th>
         
      </thaed>
      <tbody>
         @foreach($saved_pomad as $tb)
          
          <tr>

               
               <td>{{$tb->paid_by}}</td>
               <td>{{$tb->credit}}</td>
               <td>{{$tb->cr_description}}</td>
               <td>{{$tb->cr_date}}</td>
               <td>{{$tb->debit}}</td>
               <td>{{$tb->de_description}}</td>
               <td>{{$tb->de_date}}</td>
               <td>{{$tb->date}}</td>
               <td>{{$tb->balance}}</td>
        
             
               

              
          </tr>
          @endforeach
            
       
         


      </tbody>
   </table>


&nbsp;&nbsp;


<br />
<br />


    <br />
<h3>Ongoing Transaction:</h3>
<form action="save_said_moh_pomade" method="post">

  {{ csrf_field() }}
     <input type="text" name="date" id="date" />
     <input type="submit" value="Save Account" />
</form>




<table>
  <tr>
    <td>

<h4 class="credit">Credit</h4>
   
<table>
      <thead>
         <th class="credit">ID</th>
         <th class="credit">Paid By</th>
         <th class="credit">Received To</th>
         <th class="credit">Amount</th>
         <th class="credit">Description</th>
         <th class="credit">Date</th>
         <th class="credit">Completed</th>
         <th class="credit">Update</th>
         <th class="credit">Delete</th>
         
      </thaed>
      <tbody>
         @foreach($tableVar as $tbl)
          
          <tr>

               <td>{{$tbl->ID}}</td>
               <td>{{$tbl->Name}}</td>
               <td>{{$tbl->ReceivedBy}}</td>
               <td>{{$tbl->Amount}}</td>
               <td>{{$tbl->Description}}</td>
               <td>{{$tbl->Date}}</td>
               <td>
               
                   <form action="completed_moh&{{$tbl->ID}}" method="post">
                    {{ csrf_field() }}
                    <select name="finished">
                         <option value="{{$tbl->Finished_Sayed_Moh_Shah}}">{{$tbl->Finished_Sayed_Moh_Shah}}</option>
                         <option value="Yes">Yes</option>
                    </select>
                    <input type="submit" value="Set" />
                   </form>

               </td>
             
               

               <td > <a class="button" href="edit_money_received&{{$tbl->ID}}">Edit</a> </td>
               <td> <a class="button-delete" href="delete_money_received&{{$tbl->ID}}">Delete</a>  </td>
          </tr>
          @endforeach
            
       
         


      </tbody>
   </table>
  
</td>
<td>


<h4 class="debit">Debit</h4>

  
<table>
      <thead>
         <th class="debit">AccountID</th>
         <th class="debit">Amount</th>
         <th class="debit">Description</th>
         <th class="debit">Date</th>
         <th class="debit">Completed</th>
         <th class="debit">Update</th>
         <th class="debit">Delete</th>
         
      </thaed>
      <tbody>
         @foreach($Var as $tbl)
          <tr>
               <td>{{$tbl->AccountID}}</td>
               <td>{{$tbl->Amount}}</td>
               <td>{{$tbl->Description}}</td>
               <td>{{$tbl->Date}}</td>
                    <td>
               
                   <form action="completed_moh_expenses&{{$tbl->ID}}" method="post">
                    {{ csrf_field() }}
                    <select name="finished">
                         <option value="{{$tbl->Finished}}">{{$tbl->Finished}}</option>
                         <option value="Yes">Yes</option>
                    </select>
                    <input type="submit" value="Set" />
                   </form>

               </td>
             
               
               

               <td > <a class="button" href="edit_expenses&{{$tbl->ID}}">Edit</a> </td>
               <td> <a class="button-delete" href="delete_expenses&{{$tbl->ID}}">Delete</a>  </td>
          </tr>
          @endforeach
      </tbody>
   </table>


</td>
</tr>
</table>



 </div>
 <br />
 <br />















</div>

</div>
</body>
</html>