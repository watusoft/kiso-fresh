<?php
function loginint(){
msg("Username: <input type=\"text\" id=\"usn\" autocomplete=\"off\" placeholder=\"my username\" /><br />");
msg("Password: <input type=\"password\" id=\"psw\" autocomplete=\"off\" placeholder=\"my password\" /><br />");
msg("<button onclick=\"plog('jude.php','lg','usn','psw','logproc','dt')\">Login</button>");
msg("<button onclick=\"\">Reset Password</button>");
msg("<button onclick=\"\">Signup</button>");
}

function logproc(){
$cn = getCon();$u=$_POST['u'];$p=$_POST['p'];$lg='0';
$q="select idno from login where usn='".$u."' and pswd='".$p."'";
if(mysqli_select_db($cn,which())!=0){$r=mysqli_query($cn,$q);if($r!=NULL){if(mysqli_num_rows($r)>=1){
$rw=mysqli_fetch_row($r);$lg=$rw[0];
}}}
home();msg("|".$lg);
}
?>