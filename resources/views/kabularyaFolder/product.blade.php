<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Our Products</title>
<meta name="generator" content="WYSIWYG Web Builder 9 - http://www.wysiwygwebbuilder.com">



<link rel="stylesheet" type="text/css" href="cssBootstrap/bootstrap.css" >

<script type="text/javascript" src="js/stscode.js"></script>

<style type="text/css">
div#container
{
    background-color:#FFFFFF;
   width: 1000px;
   height: auto;
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


.pic
{
    border:1px solid #2668B3;
  border-collapse:collapse;
  border-radius:5px;
  width: 250px;
}


 .product
{
	border:1px solid #2668B3;
	border-collapse:collapse;
	padding:2px 2px;
  font-size: 20px;
	
}


</style>
<style type="text/css">
a
{
   color: #0000FF;
   text-decoration: none;
}
a:visited
{
   color: #0000FF;
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
</style>
<style type="text/css">
#SlideShow1 .image
{
   border-width: 0;
   left: 0;
   top: 0;
}
#Marquee1
{
   background-color: #00008B;
   border: 1px #00008B solid;
   text-align: center;
}
</style>
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.ui.effect.min.js"></script>
<script type="text/javascript" src="jquery.ui.effect-blind.min.js"></script>
<script type="text/javascript" src="jquery.ui.effect-bounce.min.js"></script>
<script type="text/javascript" src="jquery.ui.effect-clip.min.js"></script>
<script type="text/javascript" src="jquery.ui.effect-drop.min.js"></script>
<script type="text/javascript" src="jquery.ui.effect-fade.min.js"></script>
<script type="text/javascript" src="jquery.ui.effect-fold.min.js"></script>
<script type="text/javascript" src="jquery.ui.effect-scale.min.js"></script>
<script type="text/javascript" src="jquery.ui.effect-slide.min.js"></script>
<script type="text/javascript" src="wb.slideshow.min.js"></script>

<script type="text/javascript" src="stmenu.js"></script></head>
<body>
<div id="container">

<div style="width:1000px;height:3000px;background-color:#b6e0f8;">


<div style="position:absolute;left:0px;top:0px;z-index:999;">
 <img src="images/banner.png" />
</div>


<div style="position:absolute;left:394px;top:200px;z-index:999;">
<script type="text/javascript">
<!--
stm_bm(["menu7def",900,"","blank.gif",4,"","",0,0,250,0,1000,1,0,0,"","602",67109119,0,1,2,"default","hand","",1,30],this);
stm_bp("p0",[0,4,0,0,0,0,9,0,100,"",-2,"",-2,50,0,0,"#999999","transparent","",0,0,0,"#000000"]);
stm_ai("p0i0",[0,"Home","","",-1,-1,0,"./","_self","","","","",9,7,0,"","",0,0,0,1,1,"#2d2e26",1,"#2d2e26",1,"5674_04.gif","5674_14.gif",3,3,0,0,"#FFFFF7","#000000","#FFFFFF","#000000","10pt Verdana","10pt Verdana",0,0,"5674_03.gif","5674_13.gif","5674_04-.gif","5674_16-.gif",7,9,36],120,36);
stm_aix("p0i1","p0i0",[0,"Products","","",-1,-1,0,"product","_self","","","","",0,0,0,"","",0,0,0,1,1,"#2d2e26",1,"#2d2e26",1,"5674_04.gif","5674_14.gif",3,3,0,0,"#FFFFF7","#FFFFFF","#FFFFFF","#000000","10pt Verdana","10pt Verdana",0,0,"5674_04-----.gif","5674_13-2.gif"],120,36);
stm_aix("p0i2","p0i1",[0,"Coverage","","",-1,-1,0,"coverage"],120,36);
stm_aix("p0i3","p0i1",[0,"About Us","","",-1,-1,0,"about","_self","","","","",0,0,0,"","",0,0,0,1,1,"#2d2e26",1,"#2d2e26",1,"5674_04.gif","5674_14.gif",3,3,0,0,"#FFFFF7","#000000"],120,36);
stm_aix("p0i4","p0i3",[0,"Contact Us","","",-1,-1,0,"contact"],120,36);
stm_ep();
stm_em();
//-->
</script>

</div>




<div style="position:absolute;left:300px;top:364px;width:400px;height:70px;z-index:2;">





 
 
 <table style="background-color:#FFFFFF;">
   
   
     
     @foreach($infoTest as $key)
   <tr class="product"> 
         
        <td class="pic">
           <a href="item&{{$key->id}}"> {{$key->Item }} </a> 
        </td>
       
   </tr>
    <tr class="product"> 
         
        <td class="pic">
            
          <a href="item&{{$key->id}}"> <img src="{{$key->Picture}}" style="width:350px;height:390px;" /> </a>
        </td>
       

   </tr>
    <tr>
         <td> &nbsp;&nbsp;</td>
    </tr>


  @endforeach 
 
 </table>
 
 
 

<br /> 

{{$infoTest->render()}}


</div>






<div id="wb_Shape1" style="position:absolute;left:0px;top:3000px;width:1000px;height:70px;z-index:2;background-color:#2668B3;">


<div style="position:absolute;left:250px;top:25px;color:#FFFFFF;font-size:14px;">
     All Right Reserved for Kabul Arya Pharmaceutical Company Copyright @ 2016
</div>

</div>






  </div>
</div>
</body>
</html>