/*jude yu can mantle here your js functions to handle your navigation*/

var hid='0',err='error';

function  shwdt(url,choice,dt){
ID(dt).innerHTML="Processing please wait...";//just know you can alter response here and appearance
//this has been done to show the effect
var Request = false;
if(window.XMLHttpRequest)Request = new XMLHttpRequest();
else if(window.ActiveXObject)Request = new ActiveXObject("Microsoft.XMLHTTP");
if(Request){
Request.onreadystatechange = function(){
if(this.readyState == 4 && this.status == 200){
ID(dt).innerHTML=this.responseText;
}
};
Request.open("POST",url,true);
Request.setRequestHeader("content-type","application/x-www-form-urlencoded");
Request.send("choice="+choice);
}
}

function ID(d){return document.getElementById(d);}

function setLogin(lg){
hid='0';ID(lg).innerHTML=hid=='0'?'Login':'Logout';
}

function setLogx(lg){
ID(lg).innerHTML=hid=='0'?'Login':'Logout';
}

function  shwdtx(url,choice,dt){
ID(dt).innerHTML="Processing please wait...";//just know you can alter response here and appearance
if(hid=='0'){ID(dt).innerHTML="Error! Please first login to access this feature.";return;}
//this has been done to show the effect
var Request = false;
if(window.XMLHttpRequest)Request = new XMLHttpRequest();
else if(window.ActiveXObject)Request = new ActiveXObject("Microsoft.XMLHTTP");
if(Request){
Request.onreadystatechange = function(){
if(this.readyState == 4 && this.status == 200){
ID(dt).innerHTML=this.responseText;
}
};
Request.open("POST",url,true);
Request.setRequestHeader("content-type","application/x-www-form-urlencoded");
Request.send("choice="+choice+"&id="+hid);
}
}

function lgint(url,choice,dt,lg){

if(hid!='0'){
hid='0';ID(dt).innerHTML="Processing, please wait...";
var Request = false;
if(window.XMLHttpRequest)Request = new XMLHttpRequest();
else if(window.ActiveXObject)Request = new ActiveXObject("Microsoft.XMLHTTP");
if(Request){
Request.onreadystatechange = function(){
if(this.readyState == 4 && this.status == 200){
ID(dt).innerHTML=this.responseText;ID(lg).innerHTML="Login";
}
};
Request.open("POST",url,true);
Request.setRequestHeader("content-type","application/x-www-form-urlencoded");
Request.send("choice=home");
}
return;
}

//this has been done to show the effect
var Request = false;
if(window.XMLHttpRequest)Request = new XMLHttpRequest();
else if(window.ActiveXObject)Request = new ActiveXObject("Microsoft.XMLHTTP");
if(Request){
Request.onreadystatechange = function(){
if(this.readyState == 4 && this.status == 200){
ID(dt).innerHTML=this.responseText;
}
};
Request.open("POST",url,true);
Request.setRequestHeader("content-type","application/x-www-form-urlencoded");
Request.send("choice="+choice+"&id="+hid);
}
}

function plog(url,lg,u,p,choice,dt){
//you may need to do more processing routines for look and feel
var Request = false;
if(window.XMLHttpRequest)Request = new XMLHttpRequest();
else if(window.ActiveXObject)Request = new ActiveXObject("Microsoft.XMLHTTP");
if(Request){
Request.onreadystatechange = function(){
if(this.readyState == 4 && this.status == 200){
var cn=this.responseText;var ar=new Array;ar = splitArray(cn,"|");
ID(dt).innerHTML=ar[0];hid=ar[1];setLogx(lg);
}
};
Request.open("POST",url,true);
Request.setRequestHeader("content-type","application/x-www-form-urlencoded");
Request.send("choice="+choice+"&u="+VL(u)+"&p="+VL(p));
}
}

function splitArray(ival,del){
var arr = new Array,ai=0;
arr[ai]="";
for(var xi=0;xi<ival.length;xi++){
 if(ival[xi]==del){ai++;arr[ai]="";}
 else arr[ai]+=ival[xi];
}
return arr;
}

function VL(i){return ID(i).value;}

function addcart(url,choice,pid,pnam,pamt){
ID(err).innerHTML="Adding "+pnam+" to cart, please wait...";
var Request = false;
if(window.XMLHttpRequest)Request = new XMLHttpRequest();
else if(window.ActiveXObject)Request = new ActiveXObject("Microsoft.XMLHTTP");
if(Request){
Request.onreadystatechange = function(){
if(this.readyState == 4 && this.status == 200){
ID(err).innerHTML=this.responseText;
}
};
Request.open("POST",url,true);
Request.setRequestHeader("content-type","application/x-www-form-urlencoded");
Request.send("choice="+choice+"&id="+hid+"&n="+VL(pid)+"&nm="+pnam+"&a="+pamt);
}
}

function addcartx(url,choice,pid,pnam,pamt,dt){
var Request = false;
if(window.XMLHttpRequest)Request = new XMLHttpRequest();
else if(window.ActiveXObject)Request = new ActiveXObject("Microsoft.XMLHTTP");
if(Request){
Request.onreadystatechange = function(){
if(this.readyState == 4 && this.status == 200){
ID(dt).innerHTML=this.responseText;
}
};
Request.open("POST",url,true);
Request.setRequestHeader("content-type","application/x-www-form-urlencoded");
Request.send("choice="+choice+"&id="+hid+"&n="+VL(pid)+"&nm="+pnam+"&a="+pamt);
}
}