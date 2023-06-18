<html>
<head>
<title>Add New Information</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <link rel="stylesheet" type="text/css" href="css/style.css" />


             <!-- Styles -->
        <style>
         
              body{
          background-color:#eef;
         }
             
         #div{
          background-color: #fff;
          width:700px;
          height:auto;
          z-index: -1;
          border-color:gray;
          border:0.5px;
          box-shadow: 0px 0px 2px gray;
          border-radius:5px;
         }
              
              #button{
                width: 200px;
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
                width:700px;
            
                border-collapse:collapse;
                margin:5px;
           
              }
                tr,td{
              
                   border-collapse:collapse;
                   height: 35px;
                  


                }

   
              td{
                 width: 150px;
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

         .button
         {
          border:1px solid gray;
          width:190px;
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
         #firstname,#lastname,#sex,#phone
         {
          height: 30px;
          width: 250px;
          border-radius:2px;

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

<style type="text/css">
#insertForm label.error {
  
  background-color:#ffffff;
  width: auto;
  display: inline;
  }
</style>



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>

 <script type="text/javascript">
$().ready(function () {
    $("#insertForm").validate({
        rules: {
             
            firstname: "required",
            lastname: "required",
            phone:"required"
           
        },
        messages: {
            
            firstname: "* Firstname",
            lastname: "* Lastname",
            phone:"* Phone"
            
        }
    });
});
</script>
</head>
<body>
  <center>
   <div id="div">
<br />
    <a href="/money_received_syrup" class="button">Back</a>

<br />
<br />

<h2>Syrup Customer Paying Money </h2>

<br />
<br />

    <form action="save_money_received_syrup" method="post" id="insertForm" enctype="multipart/form-data">
     {{ csrf_field() }}
        <br >

        <table>
              <tr>
               <td>Customer Name</td>
                <td>
        
                <select name="customer">
                    @foreach($varTbl as $tbl)
                     <option value="{{$tbl->ID}}"> {{$tbl->Name}} </option>
                     
                      @endforeach
                   </select>

                </td>

            </tr> 

             <tr>
               <td>Received By</td>
                <td>
                       <select name="receivedBy">
                  
                     <option value="Said Moh Shah"> Sayed Moh Shah Nasiri</option>
                     <option value="Khowaja Sabir"> Khowaja Sabir</option>
                     <option value="Company"> Company</option>
                     
                   </select>
                 </td>

            </tr>

             <tr>
               <td>Amount</td>
                <td><input type="text" name="Amount" id="Amount" /> </td>

            </tr>

            <tr>
               <td>Description</td>
                <td><textarea type="text" name="Description" id="Description"></textarea> </td>

            </tr>
           
            <tr>
                <td>Date</td>
                <td><input type="text" name="Date" id="Date" /> </td>
             </tr>
          
            <tr>
              
               <td colspan=4><input type="submit" value="Received Money" class="button"  /> </td>
              
            </tr>
        </table>

  

        
 
       </form>

       <br />
       <br />
</div>
</center>
</body>
</html>