<html>
<head>
<title>Employees</title>

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
          width:600px;
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
                border:1px solid gray;
                border-collapse:collapse;
              }
                tr,td{
                   border:1px solid gray;
                   border-collapse:collapse;
                   height: 35px;

                }

         tr:hover{
                   border:1px solid gray;
                   border-collapse:collapse;
                   height: 35px;
                   background-color: #E6E6FA;
                   
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

</head>
<body>
  


   <center>
            <div id="div">
              <br />
<a href="logout">Logout</a>

   @if(Session::has('success'))
         <b id="insertStatus"> {{Session::get('success')}} </b>
   @endif

    @if(Session::has('unsuccess'))
         <b id="NotinsertStatus"> {{Session::get('unsuccess')}} </b>
   @endif
<br >
  <br />
   <table>
      <thead>
         <th>ID</th>
         <th>Firstname</th>
         
         <th>Sex</th>
         <th>Phone</th>
         <th>Update</th>
         <th>Delete</th>
      </thaed>
      <tbody>
      	 @foreach($infoTest as $key => $v)
          <tr>
               <td>{{$v->id}}</td>
               <td>{{$v->firstname." ".$v->lastname}}</td>
               <td>
                   @if($v->sex==1)
                     Male
                   @else
                     Female
                   @endif
               </td>
               <td>{{$v->phone }}</td>

               <td > <a class="button" href="editPage&{{$v->id}}">Edit</a> </td>
               <td> <a class="button-delete" href="delete&{{$v->id}}">Delete</a>  </td>
          </tr>
          @endforeach
      </tbody>
   </table>

<br />
<a class="button" href="newPage">New</a>
<br />
<br />
 </div>
</center>
</body>
</html>