<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=0 " />

<!-- SRC For JQUERY -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>


<!-- Get screen width-->
<script>

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

var wid = window.outerWidth; 
var hei = window.outerHeight; 

function getH() {
	var w = new Number(hei);
    return w;
	
}
function getW() {
    var w = new Number(wid);
    return w;
}

if(getW() > getH()){
	
	window.location.href = "codesorry.html";
	
}
</script>

<title>Morning Drive</title>

<style>
@font-face
{
/*	
font-family: Segoe UI;
src: url(segoeui.ttf);
*/
}

body {

	text-shadow:#00F;
	color:#fff;
	font: normal 100% Helvetica, Arial, sans-serif;
	font-size: 0.95em;        /* 24px / 16px = 1.5em */
	background-color:#259c33;
			
		
		
	
}
.tempinput {
	-webkit-appearance: none;		
	position:absolute;
	size:auto;	
  	box-shadow: inset 2px 2px 2px 0px #666666;
	
}
.names {
		
	position:absolute;
	color:#FFF;
	size:auto;
	border:none;
	background-color:transparent;

}
.textInput {
	-webkit-appearance: none;		
	position:absolute;
	size:auto;	
  	box-shadow: inset 2px 2px 2px 0px #666666;
	display:none;
	font-size: 1.10em;
	
}
.noteArea {
	position: absolute;	
	-webkit-appearance: none;		
	position:absolute;
	size:auto;	
  	box-shadow: inset 2px 2px 2px 0px #666666;
	opacity:0;
	display:none;			
}
}

</style>

</head>

<body>



<script>
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","weatherlist.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML;
//manu=xmlDoc.getElementsByTagName("Field_1");
var listem = xmlDoc.getElementsByTagName("Field_0");
var prov =  xmlDoc.getElementsByTagName("Field_2");
var lla = xmlDoc.getElementsByTagName("Field_3");
var llo = xmlDoc.getElementsByTagName("Field_4");

var la =getUrlVars()["latt"].replace("'","");
var lo =getUrlVars()["long"].replace("'","");

la = la.substring(0, la.length - 6);
lo = lo.substring(0, lo.length - 6);
lo =lo.replace("-","");

var wstr;

for (i=2;i<listem.length;i++)
  {
	  if (lla[i].childNodes[0]!=null)
	  {
	  if (lla[i].childNodes[0].nodeValue.substring(0, lla[i].childNodes[0].nodeValue.length - 1) <= la+0.9 &&lla[i].childNodes[0].nodeValue.substring(0, lla[i].childNodes[0].nodeValue.length - 1)>= la-0.9 &&	llo[i].childNodes[0].nodeValue.substring(0, llo[i].childNodes[0].nodeValue.length - 1) <= lo+0.9 &&	llo[i].childNodes[0].nodeValue.substring(0, llo[i].childNodes[0].nodeValue.length - 1)>= lo-0.9 )
	  {
	 				wstr = prov[i].childNodes[0].nodeValue+"/"+listem[i].childNodes[0].nodeValue;
	  }
	  }
  }
  
if (wstr==null)
{
	la = la.substring(0, la.length - 1);
lo = lo.substring(0, lo.length - 1);
	for (i=2;i<listem.length;i++)
  {
	  if (lla[i].childNodes[0]!=null)
	  {
	  if (lla[i].childNodes[0].nodeValue.substring(0, lla[i].childNodes[0].nodeValue.length - 2) == la &&
	  		llo[i].childNodes[0].nodeValue.substring(0, llo[i].childNodes[0].nodeValue.length - 2) == lo)
	  {
	 				wstr = prov[i].childNodes[0].nodeValue+"/"+listem[i].childNodes[0].nodeValue;
	  }
	  }
  }
}

if (wstr==null)
{
	la = la.substring(0, la.length - 2);
lo = lo.substring(0, lo.length - 2);
	for (i=2;i<listem.length;i++)
  {
	  if (lla[i].childNodes[0]!=null)
	  {
	  if (lla[i].childNodes[0].nodeValue.substring(0, lla[i].childNodes[0].nodeValue.length - 4) == la &&
	  		llo[i].childNodes[0].nodeValue.substring(0, llo[i].childNodes[0].nodeValue.length - 4) == lo)
	  {
	 				wstr = prov[i].childNodes[0].nodeValue+"/"+listem[i].childNodes[0].nodeValue;
	  }
	  }
  }
}

if (wstr==null)
{
	wstr = "ON/s0000458";
}

var background = new Image();
background.src = "codebg.jpg";
background.style.width = getW()+"px";
background.style.height = getH()+'px';	
background.style.position = 'absolute';
background.style.left = 0;
background.style.top = 0;
document.body.appendChild( background );

var titlelogo = new Image();
titlelogo.src = "applogo.png";
titlelogo.style.width = getW()*0.9+"px";
titlelogo.style.height = getH()/8+'px';	
titlelogo.style.position = 'absolute';
titlelogo.style.left = getW()/2 - (getW()*0.9)/2 +"px";
titlelogo.style.top = getW()*0.04 + "px";

titlelogo.setAttribute("id", "titlelogo");
document.body.appendChild( titlelogo );





var codebox0 = new Image();
codebox0.src = "codebox0.png";
codebox0.style.width = getW()*0.48+"px";
codebox0.style.height = getW()*0.48+'px';	
codebox0.style.position = 'absolute';
codebox0.style.left = getW()*0.01 + "px";
codebox0.style.top = getW()*0.3 + "px";
document.body.appendChild( codebox0 );

var codebox1 = new Image();
codebox1.src = "codebox1.png";
codebox1.style.width = getW()*0.48+"px";
codebox1.style.height = getW()*0.48+'px';	
codebox1.style.position = 'absolute';
codebox1.style.left = getW()*0.51 + "px";
codebox1.style.top = getW()*0.3 + "px";
document.body.appendChild( codebox1 );

var codebox2 = new Image();
codebox2.src = "codebox2.png";
codebox2.style.width = getW()*0.48+"px";
codebox2.style.height = getW()*0.48+'px';	
codebox2.style.position = 'absolute';
codebox2.style.left = getW()*0.01 + "px";
codebox2.style.top = getW()*0.8+ "px";
document.body.appendChild( codebox2 );

var codebox3 = new Image();
codebox3.src = "codebox3.png";
codebox3.style.width = getW()*0.48+"px";
codebox3.style.height = getW()*0.48+'px';	
codebox3.style.position = 'absolute';
codebox3.style.left = getW()*0.51 + "px";
codebox3.style.top = getW()*0.8 + "px";
document.body.appendChild( codebox3 );


var codelogo = new Image();
codelogo.src = "codelogo.png";
codelogo.style.width = getW()*0.3+"px";
codelogo.style.height = getH()*0.07+'px';	
codelogo.style.position = 'absolute';
codelogo.style.left = getW()*0.02+"px";
codelogo.style.top = getH()- (getH()*0.08) + "px";
document.body.appendChild( codelogo );

var canadalogo = new Image();
canadalogo.src = "canadaloo.png";
canadalogo.style.width = getW()*0.3+"px";
canadalogo.style.height = getH()*0.08+'px';	
canadalogo.style.position = 'absolute';
canadalogo.style.left = getW()-getW()*0.3+"px";
canadalogo.style.top = getH()- (getH()*0.09) + "px";
document.body.appendChild( canadalogo );



var weathericon = new Image();
weathericon.src = "cloud.png";
weathericon.style.width = getW()/4.8+"px";
weathericon.style.height = getW()/4.8+"px";	
weathericon.style.position = 'absolute';
weathericon.style.left = getW()*0.55 + "px";
weathericon.style.top = getW()*0.43 + "px";
document.body.appendChild( weathericon );

var weathertext = document.createElement("textarea");
weathertext.setAttribute("id", "firstnametext");
weathertext.readOnly = true;	
weathertext.className = "names";
weathertext.style.left = getW()/1.6 +'px';
weathertext.style.top = getW()*0.43+getW()/4.8+ "px";
weathertext.style.fontSize = 2.5 + 'em';	
weathertext.style.opacity = 1;	
weathertext.style.width = getW()/4+"px";
weathertext.value = "";								
document.body.appendChild(weathertext);

var temptext = new Image();
temptext.src = "tempc.png";
temptext.style.width = getW()/11+"px";
temptext.style.height = getW()/11+"px";	
temptext.style.position = 'absolute';
temptext.style.left =  getW()/1.4 + getW()/7 +'px';
temptext.style.top = getW()*0.43+getW()/5.8+ "px";
document.body.appendChild( temptext );

var citytext = document.createElement("textarea");
citytext.setAttribute("id", "firstnametext");
citytext.readOnly = true;	
citytext.className = "names";
citytext.style.left = getW()/1.8 +'px';
citytext.style.top = getW()*0.36 + "px";
citytext.style.fontSize = 0.9 + 'em';	
citytext.style.opacity = 1;	
citytext.style.width = getW()/2+"px";
citytext.value = "";								
document.body.appendChild(citytext);



var xmlhttp;
xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  	{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
  			{
				
				var n = xmlhttp.responseText.split(",");
			
				citytext.value = n[2];
				weathertext.value = Math.round(n[0]);
				if(n[1] == 3 || n[1] == 10 || n[1] == 27){
					weathericon.src = "cloud.png";
					
				}
				if(n[1] == 32 || n[1] == 33){
					weathericon.src = "night.png";
					
				}
				if(n[1] == 30 || n[1] == 31){
					weathericon.src = "nightcloud.png";
				}
				if(n[1] == 2){
					
					weathericon.src = "suncloud.png";
				}
				if(n[1] == 0 || n[1] == 1){
					
					weathericon.src = "sunny.png";
				}
				
				if(n[1] == 7 || n[1] == 6 || n[1] == 8 || n[1] == 11){
					
					weathericon.src = "rain.png";
				}
				
				if(n[1] == 16|| n[1] == 17 || n[1] == 18 ){
					
					weathericon.src = "snow.png";
				}
				
				

 	 		}
	}
	
xmlhttp.open("GET","codeweather.php?id="+wstr,true);
xmlhttp.send();


var pixelRatio = window.devicePixelRatio || 1;

var isiPad = navigator.userAgent.match(/iPad/i) != null;

if(isiPad){

codelogo.style.top = getH()- (getH()*0.03) + "px";
canadalogo.style.top = getH()- (getH()*0.04) + "px";


}


if(window.screen.width* pixelRatio == 640 && window.screen.height* pixelRatio == 1136){
	
	canadalogo.style.top = window.innerHeight - getH()*0.08+'px';
	codelogo.style.top = window.innerHeight -  getH()*0.07+'px';	
	weathertext.style.left = getW()/1.6 +'px';
	weathertext.style.top = getW()*0.43+getW()/5.81+ "px";
	weathericon.style.left = getW()*0.56 + "px";
	weathericon.style.top = getW()*0.44 + "px";
	
	
}



var bigcost = false;

var cost = getUrlVars()["cost"].replace("'","");
cost = cost.replace("%27","");
cost = cost.replace("%20","");
cost = parseFloat(cost.substring(0, cost.length - 1)).toFixed(2);
if(cost > 99){
	bigcost = true;
}
cost = "$"+cost;
//cost=decodeURI(cost);

var gas = getUrlVars()["gas"].replace("'","");
gas = gas.replace("%27","");
gas = gas.replace("%20","");
gas = parseFloat(gas.substring(0, gas.length - 1)).toFixed(2)+" L";
//gas = decodeURI(gas);



var time =getUrlVars()["time"].replace("'","");
time = time.replace("%27","");
time = time.replace("%20","");
time = time.replace("%20","");
time = time.replace("%20","");
//time = time.replace("%2","");
time = time.substring(0, time.length - 1);
//time =decodeURI(time);




var costoftrip = document.createElement("textarea");
costoftrip.setAttribute("id", "firstnametext");
costoftrip.readOnly = true;	
costoftrip.className = "names";
costoftrip.style.top = getW()*0.50+ "px";
costoftrip.style.fontSize = 2.5 + 'em';	
costoftrip.style.opacity = 1;	
costoftrip.style.width = getW()/2+"px";
costoftrip.value = cost;	
if(bigcost){
	costoftrip.style.left = getW()*0.02 +'px';	
}
else{
	costoftrip.style.left = getW()/12 +'px';	
	
}
			
	
document.body.appendChild(costoftrip);

var timeoftrip = document.createElement("textarea");
timeoftrip.setAttribute("id", "firstnametext");
timeoftrip.readOnly = true;	
timeoftrip.className = "names";
timeoftrip.style.left = getW()/13 +'px';
timeoftrip.style.top = getW()*1+ "px";
timeoftrip.style.fontSize = 2 + 'em';	
timeoftrip.style.opacity = 1;	
timeoftrip.style.width = getW()/2.5+"px";
timeoftrip.value = time;

var gasoftrip = document.createElement("textarea");
gasoftrip.setAttribute("id", "firstnametext");
gasoftrip.readOnly = true;	
gasoftrip.className = "names";
gasoftrip.style.left = getW()*0.60 + "px";
gasoftrip.style.top = getW()*1+ "px";
gasoftrip.style.fontSize = 2 + 'em';	
gasoftrip.style.opacity = 1;	
gasoftrip.style.width = getW()/2+"px";
gasoftrip.value = gas;								
document.body.appendChild(gasoftrip);

								
document.body.appendChild(timeoftrip);

</script>

<script>
$(document).ready(function(){
	
		
	
	$('#titlelogo').click(function () {
		
							var url = "http://www.qrworkplace.com/codemain.html";
							window.location.href = url;
		
	});
});
</script>
</body>
</html>
