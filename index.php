<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>THETA - 16</title>

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<script src="js/jquery.min.js"></script>
<script src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/responsiveslides.min.js"></script>
<script>
   
    $(function () {

      $("#slider1").responsiveSlides({
        maxwidth: 1124,
        speed: 800
      });

    });
  </script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/inner-banner.js"></script>

<link rel="stylesheet" href="assets/countdown/jquery.countdown.css" />


<script type="text/javascript" src="js/script.js"></script>



<script type="text/javascript" language="javascript">
			$(function() {
				
				$('#foo0, #foo2').carouFredSel();
			});
		</script>



<script src="assets/countdown/jquery.countdown.js"></script>

<!--<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>-->




<script type="text/javascript">
 



	$(document).ready(function() {
			var feed = $("#feedback"),
				img = feed.children("img"),
				formElems = feed.children("form, h3");
			
			feed.css("display","block").data("showing", false);
			formElems.hide();
			
			img.click(function() {
				if(feed.data("showing") == true) {
					feed.data("showing", false)
						.animate({
							marginLeft: "-315px",
							height: "20px",
								
							padding: "6px"
						});
					formElems.fadeOut("normal");
					/*$(this).attr("src", "feedback-logo.jpg").css("top", "0px");*/
				} 
				else {
					feed.data("showing", true)
						.animate({
							marginLeft: "445",
							height: "210px",
							padding: "10px"
						});
					formElems.fadeIn("normal");
					/*$(this).attr("src", "feedback-logo.jpg").css("top", "50px");*/
				}
			})
		}); //end document read
			
  function loadframe(str)
	{
		document.getElementById("vign").src=str;

	}
</script>

<style type="text/css">
 /*a {
	color: #B13334;
	font-family:Century Gothic; font-size:14px;
	font-weight:bold;
	/*display: block;
      /*  font-size: 14px;
        font-family: 'PT Sans', arial, serif;
        text-decoration: none;
        text-transform: uppercase;*/
        
/*}
 a:hover {
        color: #fff;
}
/*a.ex1:hover{font-color: #fff; font-weight: bold;}*/


#feedback {
  display: none;
  position: fixed;
  top: 210px;
  left: -20px;
  background-color:none;
  height: 100px;
  width: 355px;
  margin: 0 0 0 -300px;
  z-index:100;
}
#feedback img {
  position: absolute;
  top: 0; 
  right: 0;
   height:50;
  width:50;
 
}

#feedback1 {
  display: none;
  position: fixed;
  top: 250px;
  left: -20px;
  background-color:none;
  height: 100px;
  width: 355px;
  margin: 0 0 0 -300px;
  z-index:100;
}
#feedback1 img {
  position: absolute;
  top: 0; 
  right: 0;
   height:50;
  width:50;
 
}

#feedback2 {
  display: none;
  position: fixed;
  top: 290px;
  left: -20px;
  background-color:none;
  height: 100px;
  width: 355px;
  margin: 0 0 0 -300px;
  z-index:100;
}
#feedback2 img {
  position: absolute;
  top: 0; 
  right: 0;
   height:50;
  width:50;
 
}

#feedback3 {
  display: none;
  position: fixed;
  top: 330px;
  left: -20px;
  background-color:none;
  height: 100px;
  width: 355px;
  margin: 0 0 0 -300px;
  z-index:100;
}
#feedback3 img {
  position: absolute;
  top: 0; 
  right: 0;
   height:50;
  width:50;
 
}

#feedback4 {
  display: none;
  position: fixed;
  top: 370px;
  left: -20px;
  background-color:none;
  height: 100px;
  width: 355px;
  margin: 0 0 0 -300px;
  z-index:100;
}
#feedback4 img {
  position: absolute;
  top: 0; 
  right: 0;
   height:50;
  width:50;
 
}

#feedback5 {
  display: none;
  position: fixed;
  top: 410px;
  left: -20px;
  background-color:none;
  height: 100px;
  width: 355px;
  margin: 0 0 0 -300px;
  z-index:100;
}
#feedback5 img {
  position: absolute;
  top: 0; 
  right: 0;
   height:50;
  width:50;
 
}



#feedback15 {
  display: none;
  position: fixed;
  top: 450px;
  left: -20px;
  background-color:none;
  height: 100px;
  width: 355px;
  margin: 0 0 0 -300px;
  z-index:100;
}
#feedback15 img {
  position: absolute;
  top: 0; 
  right: 0;
   height:50;
  width:50;
 
}





#feedback6 {
  display: none;
  position: fixed;
  top: 315px;
  right: -20px;
  background-color:none;
  height: 100px;
  width: 355px;
  margin: 0 0 0 -300px;
  z-index:100;
}
#feedback6 img {
  position: absolute;
  top: 0; 
  right: 0;
   height:50;
  width:50;
 
}

#feedback7 {
  display: none;
  position: fixed;
  top: 355px;
  right: -20px;
  background-color:none;
  height: 100px;
  width: 355px;
  margin: 0 0 0 -300px;
  z-index:100;
}
#feedback7 img {
  position: absolute;
  top: 0; 
  right: 0;
   height:50;
  width:50;
 
}

#feedback8 {
  display: none;
  position: fixed;
  top: 395px;
  right: -20px;
  background-color:none;
  height: 100px;
  width: 355px;
  margin: 0 0 0 -300px;
  z-index:100;
}
#feedback8 img {
  position: absolute;
  top: 0; 
  right: 0;
   height:50;
  width:50;
 
}

#feedback9 {
  display: none;
  position: fixed;
  top: 435px;
  right: -20px;
  background-color:none;
  height: 100px;
  width: 355px;
  margin: 0 0 0 -300px;
  z-index:100;
}
#feedback9 img {
  position: absolute;
  top: 0; 
  right: 0;
   height:50;
  width:50;
 
}


#feedback10 {
  display: none;
  position: fixed;
  top: 475px;
  right: -20px;
  background-color:none;
  height: 100px;
  width: 355px;
  margin: 0 0 0 -300px;
  z-index:100;
}
#feedback10 img {
  position: absolute;
  top: 0; 
  right: 0;
   height:50;
  width:50;
 
}


#feedback11 {
  display: none;
  position: fixed;
  top: 515px;
  right: -20px;
  background-color:none;
  height: 100px;
  width: 355px;
  margin: 0 0 0 -300px;
  z-index:100;
}
#feedback11 img {
  position: absolute;
  top: 0; 
  right: 0;
   height:50;
  width:50;
 
}



form input, textarea {
  display: block;
}
#followTab {
  list-style: none;
  position: fixed;
  z-index: 12;
  right: 0;
  top: 130px;
  width: 24px;
  padding: 6px 5px;
  border: 3px solid #fff;
  border-right: none;
  -moz-border-radius: 10px 0 0 10px;
  -webkit-border-radius: 10px 0 0 10px;
  border-radius: 10px 0 0 10px;
  -moz-box-shadow: 0 0 7px rgba(0, 0, 0, .6);
  -webkit-box-shadow: 0 0 7px rgba(0, 0, 0, .6);
  box-shadow: 0 0 7px rgba(0, 0, 0, .6);
  background-color:#59595b;
}
#followTab li {
  margin: 9px 0 0 0;
  line-height: 0;
}
#followTab li:first-child {
  margin-top: 0;
}
#followTab a {
  display: block;
  width: 24px;
  background-image: url("images/follow-tab-buttons.png");
}
#followTab a span {
  display: none;
}
#followTab a.orkut {
  height: 24px;
  background-position: 0 -32px;
}
#followTab a.orkut:hover {
  background-position: 0 -56px;
}
#followTab a.twitter {
  height: 15px;
  background-position: 0 -80px;
}
#followTab a.twitter:hover {
  background-position: 0 -95px;
}
#followTab a.facebook {
  height: 24px;
  background-position: 0 -110px;
}
#followTab a.facebook:hover {
  background-position: 0 -134px;
}

</style>
        
		<script type="text/javascript" src="validation.js"></script>
<script type="text/javascript" src="ajax1.js"></script>

<script type="text/javascript">

/*
function a()
{
	//alert("dddd");
	if(document.registration.gender.value=="Male")
	{

		document.registration.Basketball.disabled=false;
		document.registration.Volleyball.disabled=false;
		document.registration.Kabbadi.disabled=false;
		document.registration.Chess.disabled=false;
		document.registration.TableTennis(Singles).disabled=false;
		document.registration.TableTennis(Doubles).disabled=false;
		document.registration.100Mts.disabled=false;
		document.registration.800Mts.disabled=false;
		document.registration.3KMts.disabled=false;
		document.registration.LongJump.disabled=false;
		document.registration.ShotPut.disabled=false;
		document.registration.4x100Relay.disabled=false;
		document.registration.KhoKhob.disabled=false;
		document.registration.5MenFootball.disabled=false;
	}


}

*/

function b()
{
	//alert("dddd");
	if(document.registration.gender.value=="Male")
	{

		document.registration.Basketball.disabled=false;
		document.registration.Volleyball.disabled=false;
		document.registration.Kabbadi.disabled=false;
		document.registration.Chess.disabled=false;
		document.getElementById("11").disabled=false;
		document.getElementById("12").disabled=false;
		document.getElementById("15").disabled=false;
		document.getElementById("17").disabled=false;
		document.getElementById("19").disabled=false;
		document.getElementById("21").disabled=false;
		document.getElementById("22").disabled=false;
		document.getElementById("91").disabled=false;



		document.getElementById("2").disabled=true;
		document.getElementById("4").disabled=true;
		document.getElementById("8").disabled=true;
		document.getElementById("10").disabled=true;
		document.getElementById("94").disabled=true;
		document.getElementById("14").disabled=true;
		document.getElementById("16").disabled=true;
		document.getElementById("18").disabled=true;
		document.getElementById("20").disabled=true;
		document.getElementById("13").disabled=true;


	}
	else if(document.registration.gender.value=="Female")
		{
		document.getElementById("2").disabled=false;
		document.getElementById("4").disabled=false;
		document.getElementById("8").disabled=false;
		document.getElementById("10").disabled=false;
		document.getElementById("94").disabled=false;
		document.getElementById("14").disabled=false;
		document.getElementById("16").disabled=false;
		document.getElementById("18").disabled=false;
		document.getElementById("20").disabled=false;
		document.getElementById("13").disabled=false;



		document.registration.Basketball.disabled=true;
		document.registration.Volleyball.disabled=true;
		document.registration.Kabbadi.disabled=true;
		document.registration.Chess.disabled=true;
		document.getElementById("11").disabled=true;
		document.getElementById("12").disabled=true;
		document.getElementById("15").disabled=true;
		document.getElementById("17").disabled=true;
		document.getElementById("19").disabled=true;
		document.getElementById("21").disabled=true;
		document.getElementById("22").disabled=true;
		document.getElementById("91").disabled=true;
		//document.registration.100Mts.disabled=false;
		/*
		document.registration.100Mts.disabled=false;
		document.registration.800Mts.disabled=false;
		document.registration.3KMts.disabled=false;
		document.registration.LongJump.disabled=false;
		document.registration.ShotPut.disabled=false;
		document.registration.4x100Relay.disabled=false;
		document.registration.KhoKhob.disabled=false;
		document.registration.5MenFootball.disabled=false;
		*/
		}

	else
	{
		document.getElementById("2").disabled=true;
		document.getElementById("4").disabled=true;
		document.getElementById("8").disabled=true;
		document.getElementById("10").disabled=true;
		document.getElementById("94").disabled=true;
		document.getElementById("14").disabled=true;
		document.getElementById("16").disabled=true;
		document.getElementById("18").disabled=true;
		document.getElementById("20").disabled=true;
		document.getElementById("13").disabled=true;
		document.registration.Basketball.disabled=true;
		document.registration.Volleyball.disabled=true;
		document.registration.Kabbadi.disabled=true;
		document.registration.Chess.disabled=true;
		document.getElementById("11").disabled=true;
		document.getElementById("12").disabled=true;
		document.getElementById("15").disabled=true;
		document.getElementById("17").disabled=true;
		document.getElementById("19").disabled=true;
		document.getElementById("21").disabled=true;
		document.getElementById("22").disabled=true;
		document.getElementById("91").disabled=true;
	}

}







var xmlhttp;
function GetXmlHttpObject()
{
	if (window.XMLHttpRequest)
	{
		return new XMLHttpRequest();
	}
	if (window.ActiveXObject)
	{
		return new ActiveXObject("Microsoft.XMLHTTP");
	}
	return null;
}


function stateChanged()
{
		
	if (xmlhttp.readyState==4)
	{
    document.getElementById("branch").innerHTML=xmlhttp.responseText;
	//document.getElementById("branchcode").innerHTML=xmlhttp.responseText;
	}
}






function dd()
{
	if(document.registration.branch.value=="select")
	{
		alert("select branch");
	//	return false;
	}
	else
	{
		
	var str=document.registration.branch.value;
	xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null)
	{
		alert ("Your browser does not support AJAX!");
		return;
	}

	var url="branchAJAX.php";
	url=url+"?cc="+str;
	

	xmlhttp.onreadystatechange=stateChanged;
	xmlhttp.open("GET",url,true);
	xmlhttp.send(null);
	}

}


function dd22()
{
	//alert("dd")	
	
	if(document.registration.branch.value=="automobile")
	{
		//alert("dddd");
		
		document.registration.CodeXChange.disabled=true;
		document.registration.XGaming.disabled=true;
		document.registration.OnlineTreasureHunt.disabled=true;
		document.registration.CircuitTreasure.disabled=false;
		document.registration.ElectroPhilla.disabled=true;
		document.registration.DigiWizaro.disabled=true;
		document.registration.ValianTronics.disabled=true;
		document.registration.BattleDroids.disabled=true;
		document.registration.OTDorogo.disabled=true;
		document.registration.RoboSoccer.disabled=true;
		document.registration.InSituModeling.disabled=true;
		document.registration.cad.disabled=true;
		document.registration.Kshiprata.disabled=false;
		document.registration.CrashDay.disabled=false;
	}

	else if(document.registration.branch.value=="CSE"||document.registration.branch.value=="IT"||document.registration.branch.value=="mca")
	{
		//alert("dddd");
		
		document.registration.CodeXChange.disabled=false;
		document.registration.XGaming.disabled=false;
		document.registration.OnlineTreasureHunt.disabled=false;
		document.registration.CircuitTreasure.disabled=true;
		document.registration.ElectroPhilla.disabled=true;
		document.registration.DigiWizaro.disabled=true;
		document.registration.ValianTronics.disabled=true;
		document.registration.BattleDroids.disabled=true;
		document.registration.OTDorogo.disabled=true;
		document.registration.RoboSoccer.disabled=true;
		document.registration.InSituModeling.disabled=true;
		document.registration.cad.disabled=true;
		document.registration.Kshiprata.disabled=true;
		document.registration.CrashDay.disabled=true;
	}

	else if(document.registration.branch.value=="civ")
	{
		//alert("dddd");
		
		document.registration.CodeXChange.disabled=true;
		document.registration.XGaming.disabled=true;
		document.registration.OnlineTreasureHunt.disabled=true;
		document.registration.CircuitTreasure.disabled=false;
		document.registration.ElectroPhilla.disabled=true;
		document.registration.DigiWizaro.disabled=true;
		document.registration.ValianTronics.disabled=true;
		document.registration.BattleDroids.disabled=true;
		document.registration.OTDorogo.disabled=true;
		document.registration.RoboSoccer.disabled=true;
		document.registration.InSituModeling.disabled=false;
		document.registration.cad.disabled=false;
		document.registration.Kshiprata.disabled=true;
		document.registration.CrashDay.disabled=true;
	}
	
	else if(document.registration.branch.value=="MECH" || document.registration.branch.value=="mechtro")
	{
		//alert("dddd");
		
		document.registration.CodeXChange.disabled=true;
		document.registration.XGaming.disabled=true;
		document.registration.OnlineTreasureHunt.disabled=true;
		document.registration.CircuitTreasure.disabled=false;
		document.registration.ElectroPhilla.disabled=true;
		document.registration.DigiWizaro.disabled=true;
		document.registration.ValianTronics.disabled=true;
		document.registration.BattleDroids.disabled=false;
		document.registration.OTDorogo.disabled=false;
		document.registration.RoboSoccer.disabled=false;
		document.registration.InSituModeling.disabled=true;
		document.registration.cad.disabled=true;
		document.registration.Kshiprata.disabled=true;
		document.registration.CrashDay.disabled=true;
	}

		else if(document.registration.branch.value=="ECE")
	{
		//alert("dddd");
		
		document.registration.CodeXChange.disabled=true;
		document.registration.XGaming.disabled=true;
		document.registration.OnlineTreasureHunt.disabled=true;
		document.registration.CircuitTreasure.disabled=false;
		document.registration.ElectroPhilla.disabled=true;
		document.registration.DigiWizaro.disabled=false;
		document.registration.ValianTronics.disabled=false;
		document.registration.BattleDroids.disabled=true;
		document.registration.OTDorogo.disabled=true;
		document.registration.RoboSoccer.disabled=true;
		document.registration.InSituModeling.disabled=true;
		document.registration.cad.disabled=true;
		document.registration.Kshiprata.disabled=true;
		document.registration.CrashDay.disabled=true;
	}

		else if(document.registration.branch.value=="EEE")
	{
		//alert("dddd");
		
		document.registration.CodeXChange.disabled=true;
		document.registration.XGaming.disabled=true;
		document.registration.OnlineTreasureHunt.disabled=true;
		document.registration.CircuitTreasure.disabled=false;
		document.registration.ElectroPhilla.disabled=false;
		document.registration.DigiWizaro.disabled=true;
		document.registration.ValianTronics.disabled=true;
		document.registration.BattleDroids.disabled=true;
		document.registration.OTDorogo.disabled=true;
		document.registration.RoboSoccer.disabled=true;
		document.registration.InSituModeling.disabled=true;
		document.registration.cad.disabled=true;
		document.registration.Kshiprata.disabled=true;
		document.registration.CrashDay.disabled=true;
	}

else
	{
		//alert("dddd");
		
		document.registration.CodeXChange.disabled=true;
		document.registration.XGaming.disabled=true;
		document.registration.OnlineTreasureHunt.disabled=true;
		document.registration.CircuitTreasure.disabled=true;
		document.registration.ElectroPhilla.disabled=true;
		document.registration.DigiWizaro.disabled=true;
		document.registration.ValianTronics.disabled=true;
		document.registration.BattleDroids.disabled=true;
		document.registration.OTDorogo.disabled=true;
		document.registration.RoboSoccer.disabled=true;
		document.registration.InSituModeling.disabled=true;
		document.registration.cad.disabled=true;
		document.registration.Kshiprata.disabled=true;
		document.registration.CrashDay.disabled=true;
	}



}

</script>

	
		
</head>

<body>
<div class="header">
    <div class="header-in">
    	<div class="logo"><a href="#"><img src="images/logo.png" width="252" height="78" border="0" /></a></div>


        <div class="social">
		  

		
		
                 <div class="overlay" id="overlay" style="display:none;"></div>
        		<div class="logbox" id="logtopbox" style="display:none">
            
<h2></h2> 

           <p></p>
           
        </div>
		
            	<div class="fl-left mar-right"><a href="https://twitter.com/srctheta16"><img src="images/twitter.png" border="0" /></a></div>
              <div class="fl-left mar-right"><a href="https://www.facebook.com/srctheta16"><img src="images/facebook.png" border="0" /></a></div>
           <!--<div  class="fl-left mar-right"><a href="#"><img src="images/youtube.png" border="0" /></a></div>
              <div  class="fl-left"><a href="#"><img src="images/google-plus.png" border="0" /></a></div>-->

			  <div  class="fl-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>


          </div>
        <div class="menu">
        	<ul><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            	
               
                

		 <li><a  id="activator" style="border:none; cursor:pointer">Contact Us</a></li>
                <div class="overlay" id="overlay" style="display:none;"></div>
        		<div class="box" id="box" style="display:none">
            <a class="boxclose" id="boxclose"></a>
            <h1>Contact Us </h1>
           <p></p>
           <ul>
          <li class="quries">For queries regarding participation, mail us at <p>theta2k16@gmail.com</p></li>

		  <li class="address"><strong>Convenor</strong><br/>
				Dr. T. RadhaKrishnan<br/>
				Mob: +91-9894211193 </li>

				 <li class="address"><strong>Co-Convenors</strong><br/>
				Dr. A.Srinivasan<br/>
				Mob: +91-9842478191 <br>
				
				Dr. S.Meganathan<br/>
				Mob: +91-9443384450 </li>
               <li class="address"><strong>Coordinators</strong><br/>
				Jayesh KR - +91-8608139029  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pradhyumnan M - +91-9629702244<br>
				</li>
				
				
				<li class="address"><strong>Co-Coordinators</strong><br/>
				B.Ajay Kumar - +91-9994070053  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; P.Shivram Biju - +91-9944003929<br>
				S.Gautham Viswanath - +91-9940731118  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; S.Nandha Kumar - +91-9092718410<br>
				</li>
				
				
				
				

				
				<li class="map">SASTRA University - SRC<br/>
				                Kumbakonam - 612 001<br/>
								Tamil Nadu</li>
				
				<!--<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				

				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>-->
           </ul>
		  
        </div></li>
        	<li><a href="gaming.php">Gaming</a></li>

		    <li><a href="#" id="event5">Workshops</a></li>

			<li><a href="robotics.php" >Robotics</a></li>

			 <li><a href="emulsion.php" id="event3">Emulsion</a></li>

			 <li><a href="#" id="event2">Technical</a></li>


          <li><a id="register" style=" cursor:pointer">Registration</a></li>

		   <div class="overlay" id="overlay" style="display:none;"></div>
        		<div class="logbox" id="regbox" style="display:none">
            <a class="boxclose" id="regboxclose"></a>
            <h1> <div align="center"> Visit Main - PR  </div></h1>
           <p><center><img src="images/registration_closed.png"></center></p>
				 
               <!-- <div class="overlay" id="overlay" style="display:none;"></div>
        		<div class="box" id="regbox" style="display:none">
          
           <a class="boxclose" id="regboxclose"></a>
            <h1>Registration Form </h1>
         









<form action="registrationb.php"  method="post" name="registration" onSubmit="return all123()">

<font color="red"><b><div class="stm" id="stmts" ></div></b></font>



<table border="0" style="margin-left:0px"cellpadding="0" cellspacing="0" align="center" width="100%">


<tr><td width="140" height="35"><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>First Name:</font></td>
    <td width="175"><input type="text" size="20" name="fname" id="fname1" onBlur="fval(this.value)"/></td>
    <td width="166"><div id="fname2"></div></td><td width="166"><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>Reg No :</font></td>
	<td width="257"><input type="text" name="cid"   value="Your College Reg. no" onFocus="colgidchk()" onBlur="clgchk(this.value)"></td><td width="126"><div id="cid2"></div></td>
</tr>
<tr><td height="35"><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>Last&nbsp;Name:</font></td> 
    <td><input type="text" size="20" name="lname" id="lname1" onBlur="lval(this.value)"/></td>
	<td><div id="lname2"></div></td><td><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>Branch&nbsp;ID:</font></td>
	<td><select name="branch" style="width: 147px" onchange="br(this.value)">
	<option value="">Select one</option>
	<option value="IT">IT</option>
	<option value="CSE">CSE</option>
	<option value="ECE">ECE</option>
	<option value="EEE">EEE</option>
	<option value='CHEM'>Chem</option>
	<option value="MECH">MECH</option>
    <option value="bio">BIO-TECH</option>
    <option value="civ">CIVIL</option>
    <option value="mechtro">MECHATRONICS</option>
    <option value="eie">EIE</option>
    <option value="ecm">ECM</option>
	<option value="pharmacy">PHARMACY</option>
	<!--<option value="mba">MBA</option>
	<option value="bbm">BBM/BBA</option>-->
	<!--<option value="mca">MCA</option>
	<option value="automobile">Automobile Engineering</option>
	<option value="es">Embedded Systems</option>
	<option value="vlsi">VLSI</option>
	<option value="mme">MME</option>


	</select></td>
	<td><div id="bid2"></div></td>
</tr>
<tr><td height="35"><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>Gender</font></td>
    <td><select name="gender" style="width: 147px" onBlur="showhide(this.value)">
		<option value="" selected="selected">Select one</option>
		<option value='Male'>Male</option>
	    <option value="Female">Female</option>
		</select></td>
	<td><div id="gen"></div></td>
	<td><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>State:</font></td><td><select  style="width: 147px" name="state" onChange="setcity(this.value)">
		<option value="sl" selected="selected">Select one</option>
		<option value="Andhra Pradesh">Andhra Pradesh</option>
	    <option value="Arunachal pradesh">Arunachal pradesh</option>
		<option value="Assam">Assam</option>
		<option value="Bihar">Bihar</option>
		<option value="Delhi">Delhi</option>
		<option value="Gujarat">Gujarat</option>
		<option value="Haryana">Haryana</option>
		<option value="Himachal Pradesh">Himachal Pradesh</option>
		<option value="Jammu And Kashmir">Jammu And Kashmir</option>
		<option value="Jharkhand">Jharkhand</option>
		<option value="Kerala">Kerala</option>		
	    <option value="karnataka">karnataka</option>
		<option value="Madhya Pradesh">Madhya Pradesh</option>
		<option value="Maharashtra">Maharashtra</option>
		<option value="Manipur">Manipur</option>
		<option value="Meghalaya">Meghalaya</option>
		<option value="Mizoram">Mizoram</option>
		<option value="Nagaland">Nagaland</option>
		<option value="Orissa">Orissa</option>
		<option value="Pondicherry">Pondicherry</option>
		<option value="Punjab">Punjab</option>
		<option value="Rajasthan">Rajasthan</option>
		<option value="Sikkim">Sikkim</option>
		<option value="Tamilnadu">Tamilnadu</option>
		<option value="Telangana">Telangana</option>
		<option value="Tripura">Tripura</option>
		<option value="Uttaranchal">Uttaranchal</option>
		<option value="West Bengal">West Bengal</option>
		</select></td>
	<td><div id="state1"> </div> </td>
</tr>
<tr><td height="51"><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>Phone&nbsp;No:&nbsp;&nbsp;+91</font></td>
    <td><input type="text" name="phno" onBlur="phcheck(this.value)" value="" maxlength=10></td><td><div id="ph"></div></td>
	<td><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>District</font></td>
	<td><select style="width: 147px" name="city" onChange="setcol(this.value)"><option value="city" >Select one</option></select></td><td><div id="city1"></div></td>
</tr>
<tr><td valign="top"><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>Email&nbsp;Id</font></TD>
   	<td valign="top"><INPUT TYPE="text" id="emailid" NAME="email" onBlur="return validate_reg()" value=""></td>
	<td valign="top"><div id="em"></div></td>
    <td valign="top" ><font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>College</font> </td>
    <td valign="top" height="80"><select name="college">
	<option value="college" >Select one</option></select><br><br><input type="checkbox" id="newnae" name="newcollege" value="new col" onClick="newcol()"><font size="2"><b>Check if college not present</font>
	<div id="newcol" style="visibility:hidden"><input type="text" name="ncol" onBlur = "return myfunction()"></div></td>
	<td valign="top"><div id="nc"></div></td>
</tr>

</table>


<table width="100%"><tr><td height="42" align="right"><INPUT TYPE="submit" name="submit" value="submit"></td><td height="42" align="left"><input type="reset" value="Reset"></td></tr></table>
</form></td></tr></table>


<br>
<h2>&nbsp; </h2>-->
















        </div></li>     
                

				
          <li><a href="index.php" class="selected">Home</a></li> 
				
				
              <!-- <li><a  href="#" id="event4">Man I Fest</a></li>-->
               
		     
            </ul>
			<!-- <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><font size="" color="#ffffff">Participants should bring their college ID & Bonafied Certificate</font></marquee>-->
        </div>
    </div>
</div>
<div class="banner">
	<div class="banner-in">
  <div class="bannerbigimg" id="bannerbigimg" style="margin-top: -15px;">

<ul class="rslides" id="slider1">
      <li><img src="images/home_banner_0.png" alt=""></li>
      <li><img src="images/home_banner_0.png" alt=""></li>
      <li><img src="images/home_banner_0.png" alt=""></li>
    </ul>

</div>
  <div id="flagshipbanner">
    <div style=" padding:30px 30px; margin:0 auto">
       <div  class="flagimg pix"><a href="ashwamedha.html" class="thumb"><img src="images/Flagship/ASHWAMEDHA.jpg"  /></a></div>
	  <div  class="flagimg pix"><a href="kalpavriksha.html" class="thumb"><img src="images/Flagship/kalpa.jpg"  /></a></div>
	  <div  class="flagimg pix"><a href="chanakya.html" class="thumb"><img src="images/Flagship/chanakya.jpg"  /></a></div>
      <div  class="flagimg pix"><a href="chainreaction.html" class="thumb"><img src="images/Flagship/CHAIN-REACTION.jpg"  /></a></div>
      <div  class="flagimg pix"><a href="financeleague.html" class="thumb"><img src="images/Flagship/fin-league.jpg"  /></a></div>
      <div  class="flagimg pix"><a href="gordianknot.html" class="thumb"><img src="images/Flagship/GORDIAN-KNOT.jpg"  /></a></div>
	  <div  class="flagimg pix"><a href="jigyaasa.html" class="thumb"><img src="images/Flagship/jigyaasa.jpg" /></a></div>
      <div  class="flagimg pix"><a href="#" class="thumb"><img src="images/Flagship/KLUELESS.jpg" alt="Coming Soon" /></a></div>
    </div>
  </div>
  <div class="eventbanner">
    <div style=" padding:30px 60px; margin:0 auto">
     <!--<div  class="eventimg pic"><a href="shrutilaya.php" class="thumb"><img src="images/Events/classicalsing.jpg" /></a><div class="etitle"><font size="1" color="">Swara&nbsp;Mahostav(Sruthui Laya)&nbsp;&nbsp;</font></div></div>-->
	  <div  class="eventimg pic"><a href="music.php" class="thumb"><img src="images/Events/musiczone.jpg"  /></a><div class="etitle">Music Zone</div></div>

      <div  class="eventimg pic"><a href="dance.php" class="thumb"><img src="images/Events/dance.jpg" /></a><div class="etitle"><font size="1" color="">Dance Zone</font> &nbsp;&nbsp;</div></div>

	  <!-- <div  class="eventimg pic"><a href="roots.php" class="thumb"><img src="images/Events/dance1.jpg" /></a><div class="etitle">Janapada (Folk Dance)-Solo/Group&nbsp;&nbsp;</div></div>-->

	   
      <div  class="eventimg pic"><a href="admaking.php" class="thumb"><img src="images/Events/admaking.jpg" /></a><div class="etitle">Pracharak (Ad-Making)</div></div>
      
     
      <div  class="eventimg pic"><a href="spotlight.php" class="thumb"><img src="images/Events/spotlight.jpg" /></a><div class="etitle">Curtain Call(Skits)</div></div>
     
  <div  class="eventimg pic"><a href="bolthiband.php" class="thumb"><img src="images/Events/mime.jpg"  /></a><div class="etitle">Pushpak(Mime)</div></div>

  <div  class="eventimg pic"><a href="mrnmrs.php" class="thumb"><img src="images/Events/mrmrs.jpg"  /></a><div class="etitle">Mister & Miss Mohotsav</div></div>

  <div  class="eventimg pic"><a href="shortfilm.php" class="thumb"><img src="images/Events/shortfilm.jpg"  /></a><div class="etitle">Laghu Chitra(Short&nbsp;Film&nbsp;Making)</div></div>

 
   <div  class="eventimg pic"><a href="fashionshow.php" class="thumb"><img src="images/Events/fashionshow.jpg"  /></a><div class="etitle">Sogasu&nbsp;Chuda&nbsp;Tharama(fashion&nbsp;show)</div></div>

   <p align="center" ><b>
   &nbsp;&nbsp;<br><br><br>
    <u>Coordinators</u><br><br>
   R.Hemanth Kumar - (8977703858)<br>
   G.Ragavendhra - (9701031037)<br>
   T.Vamsidhar - (7382864123)<br>
    </b>



</p>
      <div class="clearfix"></div>
    </div>
  </div>

<div class="eventbanner1">
    <div style=" padding:30px 60px; margin:0 auto">
     <div  class="eventimg pic"><a href="debating.php" class="thumb"><img src="images/Events/debate.jpg" /></a><div class="etitle">Debating</div></div>
      <!--<div  class="eventimg pic"><a href="wordsmithsarena.php" class="thumb"><img src="images/Events/creative writing.jpg" /></a><div class="etitle">Word&nbsp;Smith's&nbsp;Arena </div></div>-->

	   <div  class="eventimg pic"><a href="Jam.php" class="thumb"><img src="images/Events/speak.jpg" /></a><div class="etitle">Jam</div></div>

	   <div  class="eventimg pic"><a href="groupdiscussion.php" class="thumb"><img src="images/Events/gd.jpg" /></a><div class="etitle">Group Discussion</div></div>

	   <div  class="eventimg pic"><a href="technicalloveletter.php" class="thumb"><img src="images/Events/techloveletter.jpg" /></a><div class="etitle">Technical Love Letter</div></div>

	   <div  class="eventimg pic"><a href="spirit.php" class="thumb"><img src="images/Events/spirit.jpg" /></a><div class="etitle">Spiritual Sojourn</div></div>
	    <div  class="eventimg pic"><a href="entertainmentquiz.php" class="thumb"><img src="images/Events/generalquiz.jpg" /></a><div class="etitle">Entertainment Quiz</div></div>
		 <div  class="eventimg pic"><a href="historyquiz.php" class="thumb"><img src="images/Events/historyquiz.jpg" /></a><div class="etitle">History Quiz</div></div>

	    
      <div  class="eventimg pic"><a href="mockparliament.php" class="thumb"><img src="images/Events/parliament.jpg" /></a><div class="etitle">Mock Parliament</div></div>
	   <div  class="eventimg pic"><a href="spellbee.php" class="thumb"><img src="images/Events/spellbee.jpg" /></a><div class="etitle">SPELL BEE</div></div>
      
     
      

  
      <div class="clearfix"></div>
    </div>
  </div>

   <div class="eventbanner2">
    <div style=" padding:30px 60px; margin:0 auto">
     <div  class="eventimg pic"><a href="informatica.php" class="thumb"><img src="images/Events/informatica.png" /></a><div class="etitle">INFORMATICA</div></div>
    	   <div  class="eventimg pic"><a href="electronica.php" class="thumb"><img src="images/Events/electronica.png" /></a><div class="etitle">ELECTRONICA</div></div>

     <div  class="eventimg pic"><a href="emulsion.php" class="thumb"><img src="images/Events/emulsion.png" /></a><div class="etitle">EMULSION</div></div>
     <div  class="eventimg pic"><a href="mathematica.php" class="thumb"><img src="images/Events/mathematica.png" /></a><div class="etitle">MATHEMATICA</div></div>
     <div  class="eventimg pic"><a href="optica.php" class="thumb"><img src="images/Events/optica.png" /></a><div class="etitle">OPTICA</div></div>
     <div  class="eventimg pic"><a href="robotics.php" class="thumb"><img src="images/Events/robotics.png" /></a><div class="etitle">ROBOTICS</div></div>
     <div  class="eventimg pic"><a href="biogenesis.php" class="thumb"><img src="images/Events/biogenesis.png" /></a><div class="etitle">BIO-GENESIS</div></div>
      <div  class="eventimg pic"><a href="equilibria.php" class="thumb"><img src="images/Events/equlibria.png" /></a><div class="etitle">EQUILIBRIA</div></div>

	   <div  class="eventimg pic"><a href="strategia.php" class="thumb"><img src="images/Events/strategia.png" /></a><div class="etitle">STRATEGIA</div></div>

	    
		<div  class="eventimg pic"><a href="pabajja.php" class="thumb"><img src="images/Events/pabajja.png" /></a><div class="etitle">PABAJJA</div></div>
      <!--<div  class="eventimg pic"><a href="xgaming.php" class="thumb"><img src="images/Events/xbox.jpg" /></a><div class="etitle">X-Box Gaming - CSE Dept</div></div>
      
     
      <div  class="eventimg pic"><a href="robosoccer.php" class="thumb"><img src="images/Events/robo.jpg" /></a><div class="etitle">Robo Soccer-Mech Dept</div></div>
     
  <div  class="eventimg pic"><a href="workshop.php" class="thumb"><img src="images/Events/workshop.jpg"  /></a><div class="etitle">Workshops-CSE/Mech/ECE Depts</div></div>

  <div  class="eventimg pic"><a href="robo.php" class="thumb"><img src="images/Events/robot.jpg"  /></a><div class="etitle">Robo Rodentia-Mech Dept</div></div>

  <div  class="eventimg pic"><a href="autocad.php" class="thumb"><img src="images/Events/autocad.jpg"  /></a><div class="etitle">Auto CAD-Mech Dept</div></div>
   <div  class="eventimg pic"><a href="electr.php" class="thumb"><img src="images/Events/electr.jpg"  /></a><div class="etitle">ELECTR-O-HUNT</div></div>-->
      <div class="clearfix"></div>
    </div>
  </div>

  <div class="eventbanner3">
    <div style=" padding:30px 60px; margin:0 auto">
     <div  class="eventimg pic"><a href="rangoli.php" class="thumb"><img src="images/Events/rangoli.jpg" /></a><div class="etitle">Muthyala Muggu</div></div>
      <div  class="eventimg pic"><a href="powerofsilence.php" class="thumb"><img src="images/Events/dumb-charades.jpg" /></a><div class="etitle"><font size="1" color="">Khamoshiyan (Dumb Charades)&nbsp;&nbsp;</font></div></div>

	   <div  class="eventimg pic"><a href="rangdebasanthi.php" class="thumb"><img src="images/Events/painting.jpg" /></a><div class="etitle">Rang De Basanthi (Painting)</div></div>

	    
      <div  class="eventimg pic"><a href="artexhibition.php" class="thumb"><img src="images/Events/art.jpg" /></a><div class="etitle">He'Art' Exhibition</div></div>
      <div  class="eventimg pic"><a href="memoriesmade.php" class="thumb"><img src="images/Events/photography.jpg" /></a><div class="etitle">Memories Made (Photography)</div></div>
     
      

  
      <div class="clearfix"></div>
    </div>
  </div>

 <div class="eventbanner4">
    <div style=" padding:30px 60px; margin:0 auto">
     <div  class="eventimg pic"><a href="paperpresentation.php" class="thumb"><img src="images/Events/ppt.jpg" /></a><div class="etitle"><font size="2" color="">Maniquest &nbsp;&nbsp;</font></div></div>
      

	   <div  class="eventimg pic"><a href="bquiz.php" class="thumb"><img src="images/Events/bquiz.jpg" /></a><div class="etitle">Knowledge - o Brain&nbsp;&nbsp;</div></div>

	   
      <div  class="eventimg pic"><a href="stockgamer.php" class="thumb"><img src="images/Events/stock.jpg" /></a><div class="etitle">Warren's Wallet</div></div>
       <div  class="eventimg pic"><a href="mavericks.php" class="thumb"><img src="images/Events/forex-market-makers.jpg" /></a><div class="etitle"><font size="2" color="">Mavericks of Market</font> &nbsp;&nbsp;</div></div>
     
      <div  class="eventimg pic"><a href="youngtrunks.php" class="thumb"><img src="images/Events/young.jpg" /></a><div class="etitle">Vignan's Young Turks</div></div>
     
  <div  class="eventimg pic"><a href="mgmt.php" class="thumb"><img src="images/Events/manager.jpg"  /></a><div class="etitle">Management Maestro</div></div>
  <!--<p align="justify"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;After getting exposure to several theories and concepts about management, business, and markets in the classroom, it is time to put these into practice. Let your knowledge of management be tested by MAN i FEST 2K14. It is not only about just being a manager; it is also about showing the right personality. This B-School meet will help to spot the management skills in you. So, Are You Ready? Have fun, frolic, dance, masti and lots of learning, all at one place - MAN i FEST 2K14.</b>



</p>
<center><p>This time MAN i FEST is being conducted as a part of the Mega Youth Festival Mahotsav'14.<p>
<b>Come !&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		Join !!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		Share the spirit of Management!!!</b><br><br>
<b>ALL THE STUDENTS OF BBM and MBA ARE ELIGIBLE TO PARTICIPATE
</b><br>
For any queries send an e-mail to: mahotsav14_mba@vignanuniversity.org
</center>-->

        <div class="clearfix"></div>
    </div>
  </div>


 <div class="eventbanner5"><br><font size="4" color="#000000" style="padding-left:80px;padding-top:20px;"><b>Workshop Events:</b></font>
    <div style=" padding:10px 60px; margin:0 auto">
	
   <div  class="eventimg pic"><a href="workshops/IOT.pdf" class="thumb"><img src="images/Events/IOT.jpg" /></a><div class="etitle"><font size="" color="">INTERNET OF THINGS</font></div></div>
      <div  class="eventimg pic"><a href="workshops/web.pdf" class="thumb"><img src="images/Events/web.jpg" /></a><div class="etitle"><font size="" color="">WEB DEVELOPMENT</font> &nbsp;&nbsp;</div></div>




	     <!--<div  class="eventimg pic"><a href="presentations.php" class="thumb"><img src="images/Events/powerpoint1.jpeg" /></a><div class="etitle">Best Communicator in Pharmacy&nbsp;&nbsp;</div></div>-->


	   
      
 
      
    </div><font size="4" color="#000000" style="padding-left:80px;"><b></b></font><ul style="padding-left:95px;"><li><font size="" color="#00000"><a href="phvollyball.php" style="text-decoration:none;"><font size="" color="#333333"><b></b></font></a></font></li><li><font size="" color="#000000"><a href="phthrowball.php" style="text-decoration:none;"><font size="" color="#333333"><b></b></font></a></font></li></ul>
<!--<font size="4" color="#000000" style="padding-left:80px;"><b>Seminar:</b></font><ul style="padding-left:95px;"><li><font size="" color="#00000">"<a href="seminar.php"  style="text-decoration:none;"><font size="" color="#3333333">A clinical approach to treatment of diabetes mellitus</font></a>"</li></ul>

	<font size="4" color="#000000" style="padding-left:80px;"><b><a href="medicalcamp.php"  style="text-decoration:none;"><font size="" color="#333333">Medical Camp</font></a></b></font>-->
  <div class="clearfix"></div></div>
 


  </div>
</div>
<div class="clr"></div>


<div class="countdown" style="margin-top: -15px;">
    <div class="countdown-in">
   <!-- <div class="live-wire">
	
        	<div class="text">Register Now</a></div>
            <div class="details"><a href="#">Log In&nbsp;&nbsp;</a></div>
      </div>-->
      <div class="eventdiv" >
      	<div class="event-counter">
		<div id="countdown"></div>
	</div>
    <div class="eheading"><strong>THETA-16</strong> COUNTDOWN</div>
      </div>
      <div class="clearfix"></div>
    </div>
    
</div>
<div class="container">
	<div class="container-in">
    	<div class="leftdiv">
        	
			<h1 class="bottom-brdr">SASTRA University -SRC's THETA-16</h1>

<p>Between all those classes and lectures you will need some time for recreation too. At SASTRA, while our primary focus will be your education, we will offer you a diverse range of activities for mental and physical recuperation.</p><br><br>

<h1 class="bottom-brdr">Do you Know</h1>

<ul><li>THETA is a TECHNO FEST conducted FOR the students, BY the students, TO the students.</li>

<li>This is sixth year of THETA history..</li></ul><br><br>

<h1 class="bottom-brdr">THETA-16 -A National Level Techno Management Fest </h1>



<p>SASTRA University, committed to excellence with a holistic approach has consistently maintained the highest standard in "education of arts,science and technology" which can only be ensured by quality teaching of finest calibre.</p>

<p>We at SASTRA believe in Tagorian concept of "The Home and The World", keeping in mind, the vital importance of empowering women, by giving them the rightful place in the motto 'urbi et orbi' -the city and the world. As the world is fast becoming a global village with amazing technological advances transcending and dissolving national barriers, our education goals are geared towards nation building as well as active involvement in the globalisation process.</p>

<p>SASTRA University provides a gateway for many budding engineers and researchers to enter and experience the techno world. Throughout the 25 years of its establishment. </p>

<p>it has succeeded in exposing the young minds to the world of technology and instilling in them plenty of confidence and fortitude to face the competitive world. SASTRA University serves with its quality education the quest for knowledge of many people throughout the country.</p>

<p><table><tr><td><b>Scan QR-code:</b> </td><td width="100px"></td><td><img src="qr_code.jpg" width="170px;" height="170px;"> </td></tr></table></p>
        </div>
        <div class="rightdiv">
		<div class="partner">

		<div class="heading">THETA-16 Notice Board</div></div>
            
            
           

            <div class="highlights bottom-brdr">
            <p>&nbsp;&nbsp;&nbsp;Entry FREE!!! <span class="view-details"><a href="#"><!--View Details >>-->&nbsp;&nbsp;&nbsp;</a></span></p>
            </div>

			<div class="highlights bottom-brdr">
            <p>&nbsp;&nbsp;&nbsp;You can attend any nmber of events all the events are FREE.<span class="view-details"><a href="#">&nbsp;&nbsp;&nbsp;</a></span></p>
            </div>

            <div class="highlights bottom-brdr">
            <p>&nbsp;&nbsp;&nbsp;Participant need to submit their ID card and get their respected THETA-16 ID cards to participate in events. &nbsp;&nbsp;<span class="view-details"><a href="#">&nbsp;&nbsp;&nbsp;</a></span></p>
            </div>
            
            <div class="highlights bottom-brdr">
            <p>&nbsp;&nbsp;&nbsp;Food will be arranged. Accomodation will be arranged at first cum first serve.  (Contact hospitality departent for help.) <span class="view-details"><a href="#">&nbsp;&nbsp;&nbsp;</a></span></p>
            </div>
           
           
            <div class="highlights bottom-brdr">
            <p>&nbsp;&nbsp;&nbsp;Extra amount will be charged for Workshops. <span class="view-details"><a href="#">&nbsp;&nbsp;&nbsp;</a></span></p>
            </div>
			<!-- <div class="highlights bottom-brdr">
            <p>&nbsp;&nbsp;&nbsp;Last date for registration is extended to 5 <sup>th</sup>January 2014!! <span class="view-details"><a href="#">View Details >>&nbsp;&nbsp;&nbsp;</a></span></p>
            </div>-->
        	<div class="partner">
		<div class="heading">THETA - 16 Gallery</div>
			<div class="list_carousel">
           
				<ul id="foo0">
					<li><img src="images/1.jpg" /></li>
					<li><img src="images/2.jpg" /></li>
					<li class="rborder-none"><img src="images/3.jpg" /></li>
					<li><img src="images/4.jpg" /></li>
                                        <li><img src="images/5.jpg" /></li>
                                        <li class="rborder-none"><img src="images/6.jpg" /></li>
				</ul>
                <ul id="foo2">
                                        <li><img src="images/7.jpg" /></li>
					<li><img src="images/8.jpg" /></a></li>
					<li class="rborder-none"><img src="images/9.jpg" /></li>
					<li><img src="images/10.jpg" /></li>
                                        <li><img src="images/11.jpg" /></li>
                                        <li class="rborder-none"><img src="images/12.jpg" /></a></li>
				</ul>

			</div>
			
<div class="clearfix"></div>

		</div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="footer">
	<div class="footer-in">

        	
          <div class="copy-right">
          &copy;All Rights Reserved to  <a href="https://www.facebook.com/kr.jayesh94" target="_blank">Jayesh Katta</a>, Developed by TEAM THETA.</div>

    </div>
</div>

<!-- scroller -->




<div  style="display: block; margin-left: -300px;  width: 490px; height: 29px; padding: 0px;" id="feedback1">
		
	<a  id="support" style="border:none; cursor:pointer"><img height="29" width="251" style="top: 0px; float:left;" src="images/support.png">  </a></li>
                <div class="overlay" id="overlay" style="display:none;"></div>
        		<div class="box" id="supbox" style="display:none">
            <a class="boxclose" id="supboxclose"></a>
            <h1>Registration support</h1><br>

			<font size="" color="#333333"><center><table width="80%" cellspacing="0" cellpadding="0" >
<tr height="25"><td height="30" color="#333333" > <center><b>THETA-16 co-coordinators</b></center></td>
</tr>
</table></center><br>

			<table width="80%" align="center" cellspacing="0" cellpadding="0" BORDER="1" BORDERCOLOR="#333333" bgcolor="#E5E5E5">

<!--<tr bgcolor="#cccccc" height="25">
<td width="10%" height="30"  style="BORDER-LEFT: #820000 1px solid; BORDER-RIGHT: #f8f0f0 1px solid; color:#333333;font-family:verdana;text-align:center;font-size:11px">
<b>S.No</b></td>
<td width="30%" style="color:#333333;font-family:verdana;text-align:center;font-size:11px; BORDER-RIGHT: #f8f0f0 1px solid">
<b>Name&nbsp;of&nbsp;Committee</b></td>
<td width="10%" style="color:#333333;font-family:verdana;text-align:center;font-size:11px;  1px solid">
<b>Ph.No</b></td>
</tr>-->

<tr height="25" >

<td colspan="3" style=" font-family:verdana;text-align:CENTER;font-size:11px"><marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 6, 0);">
B.AJAY KUMAR (+91-9994070053), S.GAUTHAM VISWANATH (+91-9940731118), P.SHIVRAM BIJU (+91-9944003929), S.NANDHA KUMAR(+91-9092718410)
</marquee><br></td>

</tr>


<!--<tr height="25" >
<td height="50" style=" font-family:verdana;text-align:CENTER;font-size:11px">2.</td>	
<td style=" font-family:verdana;text-align:CENTER;font-size:11px">Mr. B. Sivaiah </td>
<td style=" font-family:verdana;font-size:11px; padding-left:11px"> 8142274581</td>
</tr>-->


</table><br>

<center><table width="80%" cellspacing="0" cellpadding="0" >
<tr height="25"><td height="30"  style="color:#333333;" align="center"> <center><b>THETA -16 PR coordinators</b></center></td>
</tr>
</table></center>


<table width="80%" align="center" cellspacing="0" cellpadding="0" BORDER="1" BORDERCOLOR="#333333" bgcolor="#E5E5E5">

<tr bgcolor="#cccccc" height="25">
<td width="10%" height="30"  style="BORDER-LEFT: #820000 1px solid; BORDER-RIGHT: #f8f0f0 1px solid; color:#333333;font-family:verdana;text-align:center;font-size:11px">
<b>S.No</b></td>
<td width="30%" style="color:#333333;font-family:verdana;text-align:center;font-size:11px; BORDER-RIGHT: #f8f0f0 1px solid">
<b>Name&nbsp;of&nbsp;Committee</b></td>
<td width="10%" style="color:#333333;font-family:verdana;text-align:center;font-size:11px;  1px solid">
<b>Ph.No</b></td>
</tr>



<tr height="25" >
<td height="50" style=" font-family:verdana;text-align:CENTER;font-size:11px">1.</td>
<td style=" font-family:verdana;text-align:CENTER;font-size:11px">M Girish Reddy<br></td>
<td style=" font-family:verdana;font-size:11px; padding-left:11px">7200405467</td>
</tr>

<tr height="25" >
<td height="50" style=" font-family:verdana;text-align:CENTER;font-size:11px">2.</td>
<td style=" font-family:verdana;text-align:CENTER;font-size:11px">AVSS Prasanna Kumar<br></td>
<td style=" font-family:verdana;font-size:11px; padding-left:11px">9659435627</td>
</tr>


<tr height="25" >
<td height="50" style=" font-family:verdana;text-align:CENTER;font-size:11px">3.</td>
<td style=" font-family:verdana;text-align:CENTER;font-size:11px"> S.Roobavathi<br></td>
<td style=" font-family:verdana;font-size:11px; padding-left:11px">-</td>
</tr>


<tr height="25" >
<td height="50" style=" font-family:verdana;text-align:CENTER;font-size:11px">4.</td>
<td style=" font-family:verdana;text-align:CENTER;font-size:11px"> A.Saranya <br></td>
<td style=" font-family:verdana;font-size:11px; padding-left:11px">-</td>
</tr>


<tr height="25" >
<td height="50" style=" font-family:verdana;text-align:CENTER;font-size:11px">5.</td>
<td style=" font-family:verdana;text-align:CENTER;font-size:11px">AROKIYA SHILFA<br></td>
<td style=" font-family:verdana;font-size:11px; padding-left:11px">-</td>
</tr>




</table></font>
        </div>
</div>


<div  style="display: block; margin-left: -300px;  width: 470px; height: 29px; padding: 0px;" id="feedback2">
		
	<a  id="steps" style="border:none; cursor:pointer"><img height="29" width="251" style="top: 0px; float:left;" src="images/steps.png">  </a></li>
                <div class="overlay" id="overlay" style="display:none;"></div>
        		<div class="stepbox" id="stepbox" style="display:none">
            <a class="boxclose" id="stepboxclose"></a>
            <h1>Registration Steps</h1>

			<ul><li> <b>1. Visit Main - PR.</b></li><li>

<b>2. Give your college ID card and get your THETA-16 ID cards.</b></li><li>

<b>3. Find the schedule pasted in the premisis ENTRANCE</b></li><li>



<b>4. You can participate in any number of events and win make sure you download the THETA-16 android app to get instant updates.</b></li><li>

   

<b>5. Get help from the PR committee and organizers on the day of fest if you have any doubts.</b></li><li>


<b>6. For further details contact the corresponding event coordinators.</b> </li><li></ul>
        </div>
</div>

<div  style="display: block; margin-left: -300px;  width: 450px; height: 29px; padding: 0px;" id="feedback3">
		
	<a  href="Schedule.pdf" target="blank"><img height="29" width="251" style="top: 0px; float:left;" src="images/sample1.png">  </a></li>
             
</div>

<div  style="display: block; margin-left: -300px;  width: 430px; height: 29px; padding: 0px;" id="feedback4">
		
	<a  id="general" style="border:none; cursor:pointer"><img height="29" width="251" style="top: 0px; float:left;" src="images/general.png">  </a></li>
                <div class="overlay" id="overlay" style="display:none;"></div>
        		<div class="box" id="genbox" style="display:none">
           <a class="boxclose" id="genboxclose"></a>
            <h1>General Rules</h1>

			<font size="" color="#333333"><ul><li>1. Entry fee is FREE!!  </li><li>
2. Going to collect fine if any one found without THETA-16 ID cards.</li><li>
3. Implement to take "breathe analyser" test during THETA-16 on demand. If any one found, legal action will be taken against them and penalised.</li><li>
4. Ragging is prohibited on the campus and if any one found involving in eve-teasing should face dire consequences.</li><li>
5. Unnecessary involvement in indisiplinary activities will be considered seriously and serious action will be taken against them.
</li><li>
6. The entries are limited to bonafide UG and PG students of Engineering  and Pharmacy Colleges (including MCA,MBA etc.).</li><li>
7. All Participants are required to produce their college identity cards.</li><li>
8. Participants shall report at the venue ten minutes before the commencement of events. Prelims will be conducted if necessary.</li><li>
9. The organizers reserve the right to alter, without prior notice, any of the rules, if so required in the conduction of the events.</li><!--<li>
15. The participants are expected to exhibit exemplary behavior. Any sort of obscene , unacceptable behavior or using foul language on/off the stage is strictly prohibited and lead to immediate disqualification of the college.</li>--><li>
10. The verdict of the judges shall be final and binding on all the participants.</li><li>
11. The participants shall strictly adhere to the schedules. Those who fail to report at the scheduled time will be disqualified from participation in the event.</li></ul><p style="margin-left:70px;">
<!--<b>*</b>&nbsp;&nbsp;Per event participation fees =100Rs<br>
<b>**</b>&nbsp;&nbsp;Makeup charges per head=1000Rs--></p>
 </font>

           
        </div>
</div>



<div  style="display: block; margin-left: -150px;  width: 410px; height: 29px; padding: 0px;" id="feedback15">
		
	<a  href="https://play.google.com/store/apps/details?id=pingme.main.theta.theta_16" target="blank"><img height="113" width="251" style="top: 0px; float:left;" src="images/mobapp.png">  </a></li>
                <div class="overlay" id="overlay" style="display:none;"></div>
        		<div class="logbox" id="logbox" style="display:none">
            <a class="boxclose" id="logboxclose"></a>
            <h1>Log In </h1><br>

			<form name="Login" class="wufoo topLabel page" method="post" action="login-exec.php" onSubmit="return chklogfrm(Login.vmid.value,Login.password.value)">
 

       <table border="0" cellpadding="0" cellspacing="0" width="90%">
	  <tr><td height="27" >
		<font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>VMID</b></font></td>
	  <td height="27"   >
			<input id="Field1" name="vmid" type="text" class="field text small" maxlength="255" size="18" tabindex="1" onkeyup="validateRange(1, 'character');"  value="Ex:VM14XXXXX" onfocus="if (this.value == 'Ex:VM13XXXXX')  {this.value = '';this.style.color='#333333'}" onblur="if (this.value == '')   {this.value = 'Ex:VM13XXXXX';this.style.color='#CCCCCC'}"  style="color:#CCCCCC;font-weight:bold;"/></td></tr>
	   <tr><td height="27"  >
		<font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>Password</b></font></td>
	   <td height="35" align="center" >
		<input id="Field2" name="password" type="password" class="field text small" value="" maxlength="255" size="20" tabindex="2" onkeyup="validateRange(2, 'character');" />
        </td></tr><tr><td></td><td width="100%" height="36" align="left">
       <input name="saveForm" type="submit" value="Login"/></td>
        </tr><tr><td><br></td></tr>
		
		<tr><td colspan="2" align="center"><div id="logerr">
			</div></td></tr></table>
		<script type="text/javascript">
		function chklogfrm(vmd,pass)
		{
			
			if(vmd==""||pass=="")
			{
				//alert("sdf");
				document.getElementById("logerr").innerHTML="<font color='#820000' style='text-align:justify;font-size:11px;font-family:Verdana, Arial, Helvetica, sans-serif'>VMID/Password Empty</font>";
				return false;
			}
			if(vmd.length!=9)
			{
				document.getElementById("logerr").innerHTML="<font color='#820000' style='text-align:justify;font-size:11px;font-family:Verdana, Arial, Helvetica, sans-serif'>Invalid VMID/PASSWORD</font>";
				return false;
			}
		}
	</script>
</form>
<h2></h2> 

           <p></p>
          
        </div>
</div>



















<div  style="display: block; margin-left: -300px;  width: 410px; height: 29px; padding: 0px;" id="feedback5">
		
<a  href="https://www.youtube.com/watch?v=gzAlOPcR-Uw&feature=youtu.be" target="blank"><img height="29" width="251" style="top: 0px; float:left;" src="images/login.png">  </a></li>                <div class="overlay" id="overlay" style="display:none;"></div>
        		<div class="logbox" id="logbox" style="display:none">
            <a class="boxclose" id="logboxclose"></a>
            <h1>Log In </h1><br>

			<form name="Login" class="wufoo topLabel page" method="post" action="login-exec.php" onSubmit="return chklogfrm(Login.vmid.value,Login.password.value)">
 

       <table border="0" cellpadding="0" cellspacing="0" width="90%">
	  <tr><td height="27" >
		<font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>VMID</b></font></td>
	  <td height="27"   >
			<input id="Field1" name="vmid" type="text" class="field text small" maxlength="255" size="18" tabindex="1" onkeyup="validateRange(1, 'character');"  value="Ex:VM14XXXXX" onfocus="if (this.value == 'Ex:VM13XXXXX')  {this.value = '';this.style.color='#333333'}" onblur="if (this.value == '')   {this.value = 'Ex:VM13XXXXX';this.style.color='#CCCCCC'}"  style="color:#CCCCCC;font-weight:bold;"/></td></tr>
	   <tr><td height="27"  >
		<font size="2" style="font-family:Verdana, Arial, Helvetica, sans-serif"><b>Password</b></font></td>
	   <td height="35" align="center" >
		<input id="Field2" name="password" type="password" class="field text small" value="" maxlength="255" size="20" tabindex="2" onkeyup="validateRange(2, 'character');" />
        </td></tr><tr><td></td><td width="100%" height="36" align="left">
       <input name="saveForm" type="submit" value="Login"/></td>
        </tr><tr><td><br></td></tr>
		
		<tr><td colspan="2" align="center"><div id="logerr">
			</div></td></tr></table>
		<script type="text/javascript">
		function chklogfrm(vmd,pass)
		{
			
			if(vmd==""||pass=="")
			{
				//alert("sdf");
				document.getElementById("logerr").innerHTML="<font color='#820000' style='text-align:justify;font-size:11px;font-family:Verdana, Arial, Helvetica, sans-serif'>VMID/Password Empty</font>";
				return false;
			}
			if(vmd.length!=9)
			{
				document.getElementById("logerr").innerHTML="<font color='#820000' style='text-align:justify;font-size:11px;font-family:Verdana, Arial, Helvetica, sans-serif'>Invalid VMID/PASSWORD</font>";
				return false;
			}
		}
	</script>
</form>
<h2></h2> 

           <p></p>
          
        </div>
</div>








<div  style="display: block; margin-right: -120px;  width: 410px; height: 29px; padding: 0px;" id="feedback6">
		
		<a  href="http://dp.theta16.org/" target="blank"><img height="29" width="251" style="top: 0px; float:left;" src="images/tabs.png">  </a></li>
                <div class="overlay" id="overlay" style="display:none;"></div>
        		
</div>

<div  style="display: block; margin-right: -100px;  width: 410px; height: 29px; padding: 0px;" id="feedback7">
		
	<a  href="http://www.sastra.edu/" target="blank"><img height="29" width="251" style="top: 0px; float:left;" src="images/tabs1.png">  </a></li>
                <div class="overlay" id="overlay" style="display:none;"></div>
        		
</div>


<div  style="display: block;  margin-right: -80px;  width: 410px; height: 29px; padding: 0px;" id="feedback8">
		
	<a  href="https://www.facebook.com/srctheta16/photos_stream" target="blank"><img height="29" width="251" style="top: 0px; float:left;" src="images/gallery.png">  </a>

<div  style="display: block;  margin-right: -60px;  width: 410px; height: 29px; padding: 0px;" id="feedback9">
		
	<a  href="http://goo.gl/forms/YX2QFaMgdg" target="blank"><img height="29" width="251" style="top: 0px; float:left;" src="images/feedback.png">  </a></li>
               <div class="overlay" id="overlay" style="display:none;"></div>
        		

<div  style="display: block; margin-right: -40px;  width: 410px; height: 29px; padding: 0px;" id="feedback10">
		
	<a  href="reach.php"><img height="29" width="251" style="top: 0px; float:left;" src="images/reach.png">  </a></li>
               
</div>

<div  style="display: block; margin-right: -20px;  width: 410px; height: 29px; padding: 0px;" id="feedback11">
		
	<a  id="transport" style="border:none; cursor:pointer"><img height="29" width="251" style="top: 0px; float:left;" src="images/tna.png">  </a></li>
                <div class="overlay" id="overlay" style="display:none;"></div>
        		<div class="box1" id="tranbox" style="display:none">
            <a class="boxclose" id="tranboxclose"></a>
            <h1>Transport and Accomodation</h1>

			 <font size="" color="#333333"><ul><li>1. Accommodation will be provided to the students coming from other colleges if you contact the hospitality coordinators before three days of the event and register you names with them. 
<br>
			 </li><li>

2.Hospitality Coordinators will be complete responsible for other college student behaviour in and
  around the premises of SASTRA University.

<br>
</li><li>3. It is not suggestable to bring valuables with the students .
<br>
</li><li>4. Transportation is provided for other college students if necessary and registered with hospitality coordinators.
<br>


<center><table width="80%" cellspacing="0" cellpadding="0" BORDER="1" BORDERCOLOR="#333333">
<tr bgcolor="#cccccc" height="25"><td height="29"  style="BORDER-LEFT: #820000 1px solid; BORDER-RIGHT: #f8f0f0 1px solid; color:#333333;font-family:verdana;text-align:center;font-size:11px"><b>Event</b></td>
<td width="30%" style="color:#333333;font-family:verdana;text-align:center;font-size:11px; BORDER-RIGHT: #f8f0f0 1px solid"><b>Faculty Co-ordinator</b></td>
<td style="color:#333333;font-family:verdana;text-align:center;font-size:11px;  1px solid"><b>Student Co-ordinator</b></td></tr>

<tr height="25" >
<td height="50" rowspan="2" style=" font-family:verdana;text-align:CENTER;font-size:11px">Accommodation</td>
<td style="font-family:verdana;text-align:center;font-size:11px"><b>For Boys</b><br>Prof N.Sundar <!--<br>Sk. Abdul Kareem - 
(9966672463)--></td>
<td style="font-family:verdana;text-align:center;font-size:11px">Ganesh S - 
+91-8608803992<!--<br>A. Ranganadh Misra - 
(8179953114)--></td>
</tr>
<tr height="25" >

<td style="font-family:verdana;text-align:center;font-size:11px"><b>For Girls</b><br>-<!--A. Renuka Lakshmi
<br>(9948522575)--></td>
<td style="font-family:verdana;text-align:center;font-size:11px">Kanuparthy Sasanka
+91- <!--<br>G. Anusha - 
(7416376182)--></td>
</tr>

<tr height="25" >
<td height="50" rowspan="" style=" font-family:verdana;text-align:CENTER;font-size:11px">Transportation</td>
 <td style="font-family:verdana;text-align:center;font-size:11px"><!--<b>Guntur NTR Bus stand</b>--><br>Prof N.Sundar - 
(-)<!--<b> Tenali  Railway Station</b>--><!--</br>Mr. T.S.S.N.Pavan Kumar   - 
(9866583720)-->

</td>
<td style="font-family:verdana;text-align:center;font-size:11px"><!--<b>Guntur</b>: -->  P.Shivram Biju - +91-9944003929<br><!--<b>Tenali</b>:-->S.Nandha Kumar - +91-9092718410</td>
 </tr>

  
</table></center></font>
          <!-- <p><br><a href="Expected Mahotsav Bus Timings at GUNTUR.pdf" style="text-decoration:none" target="blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expected Mahotsav Bus Timings at GUNTUR  { Bus stand / Railway Station}</a><br>
		   <a href="Expected Mahotsav Bus Timings at Tenali.pdf" style="text-decoration:none" target="blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Expected Mahotsav Bus Timings at Tenali { Bus stand / Railway Station}</a>
		   </p>-->
           
        </div>
</div>






  	
<script type="text/javascript" language="javascript" src="js/carouFredSel.js"></script>

</body>

</html>

