<html>
<head>
<title>Add New Employee</title>

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
            
                border-collapse:collapse;
                margin:5px;
           
              }
                tr,td{
              
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
    <a href="/infoPage" class="button">Back</a>

    <form action="save" method="post" id="insertForm">
     {{ csrf_field() }}
        <br >

        <table>
          
            <tr>
               <td>Firstname</td>
                <td><input type="text" name="firstname" id="firstname" /> </td>

            </tr>
            <tr>
                <td>Lastname</td>
                <td><input type="text" name="lastname" id="lastname" /> </td>
             <tr>
                <td>Sex</td>
                <td> 
                  <select name="sex" id="sex">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                  </select> 
                </td>
              </tr>
              <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" id="phone"/> </td>
            </tr>
            <tr>
              
               <td colspan=4><input type="submit" value="Add" class="button" /> </td>
              
            </tr>
        </table>

  

        
 
       </form>

       <br />
       <br />
</div>
</center>
</body>
</html>