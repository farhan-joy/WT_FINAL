<html>
<head></head>
<body>

<form>

<input id="uname" type="text" placeholder="Username"><br>
<span id="op"></span> <br>
<input type="password" placeholder="password"><br>
</form>
<button id="btn_g" onclick="viewGoogle()">Login With Google</button>
<form id="g_form" style="display:none">
<input type="text" placeholder="gmail"><br>
<input type="password" placeholder="gmail password"><br>

</form>
<button onclick="turnOn()">Turn On</button>
<img id="bulb" src="pic_bulboff.png">
<button onclick="turnoff()">Turn Off</button>
<br/>

<span onmouseover="showinfo()" onmouseout="hideinfo()">Aiub</span>
<p id="info" style="display:none">American International University -Bnagladesh,commomly know</p>
<script src="myjs.js"></script>

<script>
var g_flag= false;
function viewOutput(e){
	var op=e.value;
	get("op").innerHTML=OP;
	
	
	
}

function hideinfo(){
	get("info").style.display="none";
	
} 
function showinfo(){
	get("info").style.display="block";
}
function turnon(){
	var build_i=get("bulb");
	build_i.src="pic_bulbon.gif";
}
function turnoff(){
	var build_i=get("bulb");
	build_i.src="pic_bulboff.gif";
}
function get(id){
	return document.getElementById(id);
}
function viewGoogle(){
	var g_f=get("g_form");
	var btn_g=get("btn_g");
	if(g_flag){
		g_f.style.display="none";
		btn_g.innerHTML="Login With Google";
		g_flag=false;
	}else{
		g_f.style.display="block";
		btn_g.innerHTML="Hide Google Login";
		g_flag=true;
}
}
</body>
</html>




