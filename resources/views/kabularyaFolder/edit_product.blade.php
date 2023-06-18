<html>
<head>
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
</head>
<body>

  <center>
   <div id="div">
<br />

   



        <a href="product_admin" class="button">Back</a>

 <form action="update_product&{{$varTbl->id}}" method="post">
       {{ csrf_field() }}
        <br >

        <table>
          
            <tr>
               <td>Item</td>
                <td><input type="text" name="Item" id="Item" value="{{$varTbl->Item}}"> </td>

            </tr>
            <tr>
                <td>Picture</td>
                <td> <img src="{{$varTbl->Picture}}" name="Picture" id="Picture" style="width:100px;height:100px;" >
                    <input type="text" name="Picture" id="Picture" value="{{$varTbl->Picture}}" />
                </td>
            <tr>
                <td>pic 1</td>
                <td>  
                    <img src="{{$varTbl->pic1}}" name="pic1" id="pic1" style="width:100px;height:100px;" >
                    <input type="text" name="pic1" id="pic1" value="{{$varTbl->pic1}}" />
                </td>
              </tr>
             <tr>
                <td>Description</td>
                <td><textarea cols="25" rows="50" name="Description" id="Description"> {{$varTbl->Description}}</textarea> </td>
              </tr>
           
             

            <tr>
              
               <td colspan=4><input type="submit" value="Update" class="button" /> </td>
              
            </tr>
        </table>
 
       </form>

</div>
</center>

</body>
</html>