<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Insert New</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">



        <link rel="stylesheet" type="text/css" href="css/style.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>

 <script type="text/javascript">
$().ready(function () {
    $("#insertForm").validate({
        rules: {
             
            username: "required",
            password: "required"
           
        },
        messages: {
            
            username: "* Username",
            password: "* Password"
            
        }
    });
});
</script>

<style type="text/css">
#insertForm label.error {
  padding-left:5px;
  background-color:#ffffff;
  width: auto;
  display: inline;
  }
</style>


               <!-- Styles -->
        <style>
         
         body{
          background-color:#eef;
         }

         #linkBack{
          background-color: #fff;
          width:70px;
          height:30px;
          z-index: 10;
          position: relative;
          margin-left: auto;
          margin-right: auto;
          left:-250px;
          top:20px;

         }

         #div{
          background-color: #fff;
          width:700px;
          height:350px;
          z-index: 1000;
          border-color:gray;
          border:0.5px;
          box-shadow: 0px 0px 2px gray;
          border-radius:5px;
          position: relative;
          top:-30px;

         }

          #success{
          background-color: #fff;
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
       
         }
              
              #button{
                width: 100px;
                height: 33px;
                background-color: #eee;
                text-align:center;
                color:#000;
                z-index: 3000;


              }

              .inputs
              {
                color:black;
                border:1px 1px;
                
                width: 350px;
                height: 30px;

                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                
                margin: 0;


              }

 
                     

        </style>
    </head>
    <body>

    <div id="linkBack">
      <a href="login"> Back </a>

    </div>
           <center>
 <div id="success">

  <br />
    @if(Session::has('success'))
         <b> {{Session::get('success')}} </b>
    @elseif(Session::has('unsuccess'))
        <div id="unsuccess">
          <b> {{Session::get('unsuccess')}} </b>
       </div>  
    @endif
   
   
 </div>

 

<div id="div">

  <br /><br />
<h2 class="heading">Add new User and Password</h2>
              <form action="/insert" id="insertForm" method="post">
                 {{ csrf_field() }}
                 <table>
                  
                  
                   <tr>
                   <td>Username:</td><td><input type="text" name="username" id="username" class="inputs"></td>
                    </tr>
                    <tr>
                 <td>Password:</td><td><input type="password" name="password" id="password" class="inputs"></td>
                   </tr>
                   <tr>
                 <td></td><td><input type="submit" id="button" name="Add" value="Add" > </td>
                    </tr>
                  </table>
              </form>

           </center>
           
         </div>
    </body>
</html>
