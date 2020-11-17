<?php
require("main.php");

function ondemand(){
msg("<!-- Featured Products -->
<div class=\"container\">
<h1 class=\"text-center\">Our Products</h1>
<div class=\"Divider\"></div>
<div class=\"row\">
<!-- Product 1 -->
<div class=\"col-sm-6 col-md-3\">
<div class=\"thumbnail featured-product\">
<a>
<img src=\"images/matooke.png\" alt=\"\">
</a><div class=\"caption\"><h3>Matooke</h3>
<p>Enjoy the freshest and cleanest veggies, fruits and all your 
favorite groceries from Kiso Fresh.</p><p class=\"price\">UGX 3500</p><!-- Input Group -->
<div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"mi\">
<span class=\"input-group-btn\"><button onclick=\"addcart('jude.php','addcart','mi','matooke','3500')\" class=\"btn btn-primary\" type=\"button\">
<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> Add to Cart
</button></span></div></div></div></div>

<!-- Product 2 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\">
<a><img src=\"images/passionfruits.jpg\" class=\"pdtImg\" alt=\"\"></a>
<div class=\"caption\"><h3>Passion Fruits</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your 
favorite groceries from Kiso Fresh.</p><p class=\"price\"><s>UGX 5000</s> UGX 4000</p><!-- Input Group -->
<div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"pi\"><span class=\"input-group-btn\">
<button onclick=\"addcart('jude.php','addcart','pi','passion fruits','5000')\" class=\"btn btn-primary\" type=\"button\"><span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> 
Add to Cart</button></span></div></div></div></div>

<!-- Product 3 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a>
<img src=\"images/carrots.jpg\" class=\"pdtImg\" alt=\"\"></a><div class=\"caption\"><h3>Carrots</h3>
<p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.</p>
<p class=\"price\">UGX 2000</p><!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"ci\">
<span class=\"input-group-btn\"><button onclick=\"addcart('jude.php','addcart','ci','carrots','2000')\" class=\"btn btn-primary\" type=\"button\">
<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> Add to Cart</button></span></div>
</div></div></div>

<!-- Product 4 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/irish.jpg\" class=\"pdtImg\" alt=\"\">
</a><div class=\"caption\"><h3>Irish Potatoes</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.</p>
<p class=\"price\">UGX 1500</p><!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"ir\">
<span class=\"input-group-btn\"><button onclick=\"addcart('jude.php','addcart','ir','irish potatoes','1500')\" class=\"btn btn-primary\" type=\"button\">
<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> Add to Cart</button></span></div></div></div></div>
    
<!-- Product 5 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a>
<img src=\"images/cucumber.jpg\" class=\"pdtImg\" alt=\"\"></a><div class=\"caption\"><h3>Cucumber</h3><p>
Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.</p><p class=\"price\">UGX 3500</p>
<!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"cui\"><span class=\"input-group-btn\">
<button onclick=\"addcart('jude.php','addcart','cui','cucumber','3500')\" class=\"btn btn-primary\" type=\"button\"><span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> 
Add to Cart</button></span></div></div></div></div>
    
<!-- Product 6 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/chilli.jpg\" class=\"pdtImg\" alt=\"\">
</a><div class=\"caption\"><h3>Chilli</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.</p>
<p class=\"price\">UGX 3500</p><!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"chi\">
<span class=\"input-group-btn\"><button onclick=\"addcart('jude.php','addcart','chi','chilli','3500')\" class=\"btn btn-primary\" type=\"button\">
<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>Add to Cart</button></span></div></div></div></div>

<!-- Product 7 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/greenpepper.jpg\" class=\"pdtImg\" alt=\"\">
</a><div class=\"caption\"><h3>Green pepper</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.</p>
<p class=\"price\">UGX 3500</p><!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"gi\">
<span class=\"input-group-btn\"><button onclick=\"addcart('jude.php','addcart','gi','green pepper','3500')\" class=\"btn btn-primary\" type=\"button\"><span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> 
Add to Cart</button></span></div></div></div></div>

<!-- Product 8 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/doodo.jpg\" class=\"pdtImg\" alt=\"\">
</a><div class=\"caption\"><h3>Doodo</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.</p><p class=\"price\">UGX 3500</p>
<!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"di\"><span class=\"input-group-btn\">
<button onclick=\"addcart('jude.php','addcart','di','doodo','3500')\" class=\"btn btn-primary\" type=\"button\">
<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>Add to Cart</button></span></div></div></div></div>

<!-- Product 9 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/cabbage.jpg\" class=\"pdtImg\" alt=\"\">
</a><div class=\"caption\"><h3>Cabbage</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.</p><p class=\"price\">UGX 3500</p>
<!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"cai\"><span class=\"input-group-btn\">
<button onclick=\"addcart('jude.php','addcart','cai','cabbage','3500')\" class=\"btn btn-primary\" type=\"button\"><span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> 
Add to Cart</button></span></div></div></div></div>

<!-- Product 10 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/eggplants.jpg\" class=\"pdtImg\" alt=\"\"></a><div class=\"caption\">
<h3>Eggplants</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.</p><p class=\"price\">UGX 3500</p>
<!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"egi\"><span class=\"input-group-btn\">
<button onclick=\"addcart('jude.php','addcart','egi','eggplants','3500')\" class=\"btn btn-primary\" type=\"button\"><span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> 
Add to Cart</button></span></div></div></div></div>

<!-- Product 11 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/ndiizi.jpg\" class=\"pdtImg\" alt=\"\"></a><div class=\"caption\">
<h3>Ndiizi</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.</p><p class=\"price\">UGX 3500</p><!-- Input Group --><div class=\"input-group\">
<input type=\"number\" class=\"form-control\" value=\"1\" id=\"ndi\"><span class=\"input-group-btn\"><button onclick=\"addcart('jude.php','addcart','ndi','ndiizi','3500')\" class=\"btn btn-primary\" type=\"button\">
<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>Add to Cart</button></span></div></div></div></div>

<!-- Product 12 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/onions.jpg\" class=\"pdtImg\" alt=\"\"></a><div class=\"caption\"><h3>Onions</h3><p>
Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.</p><p class=\"price\">UGX 3500</p><!-- Input Group -->
<div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"oi\"><span class=\"input-group-btn\"><button onclick=\"addcart('jude.php','addcart','oi','onions','3500')\" class=\"btn btn-primary\" type=\"button\">
<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>Add to Cart</button></span></div></div></div></div>

<!-- Product 13 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/oranges.jpg\" class=\"pdtImg\" alt=\"\"></a><div class=\"caption\"><h3>Oranges</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.
</p><p class=\"price\">UGX 3500</p><!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"ori\"><span class=\"input-group-btn\"><button onclick=\"addcart('jude.php','addcart','ori','oranges','3500')\" class=\"btn btn-primary\" type=\"button\">
<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> Add to Cart</button></span></div></div></div></div>

<!-- Product 14 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/beans.jpg\" class=\"pdtImg\" alt=\"\"></a><div class=\"caption\"><h3>Beans</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.
</p><p class=\"price\">UGX 3500</p><!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"bi\"><span class=\"input-group-btn\"><button onclick=\"addcart('jude.php','addcart','bi','beans','3500')\" class=\"btn btn-primary\" type=\"button\">
<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> Add to Cart</button></span></div></div></div></div>

<!-- Product 15 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/beetroot.jpg\" class=\"pdtImg\" alt=\"\"></a><div class=\"caption\"><h3>Beetroot</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.
</p><p class=\"price\">UGX 3500</p><!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"bei\"><span class=\"input-group-btn\"><button onclick=\"addcart('jude.php','addcart','bei','beetroot','3500')\" class=\"btn btn-primary\" type=\"button\">
<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span> Add to Cart</button></span></div></div></div></div>

<!-- Product 16 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/pineapple.jpg\" class=\"pdtImg\" alt=\"\"></a><div class=\"caption\"><h3>Pineapples</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.
</p><p class=\"price\">UGX 3500</p><!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"pii\"><span class=\"input-group-btn\"><button onclick=\"addcart('jude.php','addcart','pii','pineapples','3500')\" class=\"btn btn-primary\" type=\"button\">
<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>Add to Cart</button></span></div></div></div></div>

<!-- Product 17 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/pumpkin.jpg\" class=\"pdtImg\" alt=\"\"></a><div class=\"caption\"><h3>Pumpkin</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.
</p><p class=\"price\">UGX 3500</p><!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"pui\"><span class=\"input-group-btn\"><button onclick=\"addcart('jude.php','addcart','pui','pumpkins','3500')\" class=\"btn btn-primary\" type=\"button\">
<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>Add to Cart</button></span></div></div></div></div>

<!-- Product 18 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/tangerines.jpg\" class=\"pdtImg\" alt=\"\"></a><div class=\"caption\"><h3>Tangerines</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.
</p><p class=\"price\">UGX 3500</p><!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"tai\"><span class=\"input-group-btn\"><button onclick=\"addcart('jude.php','addcart','tai','tangerines','3500')\" class=\"btn btn-primary\" type=\"button\">
<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>Add to Cart</button></span></div></div></div></div>

<!-- Product 19 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/sweet pepper.jpg\" class=\"pdtImg\" alt=\"\"></a><div class=\"caption\"><h3>Sweet pepper</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.
</p><p class=\"price\">UGX 3500</p><!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"swi\"><span class=\"input-group-btn\"><button onclick=\"addcart('jude.php','addcart','swi','sweet pepper','3500')\" class=\"btn btn-primary\" type=\"button\">
<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>Add to Cart</button></span></div></div></div></div>

<!-- Product 20 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\"><a><img src=\"images/tomatoes.jpg\" class=\"pdtImg\" alt=\"\"></a><div class=\"caption\"><h3>Tomatoes</h3><p>Enjoy the freshest and cleanest veggies, fruits and all your favorite groceries from Kiso Fresh.</p>
<p class=\"price\">UGX 3500</p><!-- Input Group --><div class=\"input-group\"><input type=\"number\" class=\"form-control\" value=\"1\" id=\"toi\"><span class=\"input-group-btn\"><button onclick=\"addcart('jude.php','addcart','toi','tomatoes','3500')\" class=\"btn btn-primary\" type=\"button\">
<span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>Add to Cart</button></span></div></div></div></div></div></div><!-- /.container -->
<div id=\"error\" class=\"err\"></div>
");
}

function choice(){call_user_func($_POST['choice']);}

function addcart(){
$cid=$_POST['id'];$n=$_POST['n'];$nm=strtoupper($_POST['nm']);$amt=$_POST['a'];
$cn=getCon();
$q="select idno,items from cart where customerid='".$cid."' and status='0'";
$id='0';$items='0_0_0';
if(mysqli_select_db($cn,which())!=0){$r=mysqli_query($cn,$q);if($r!=NULL){if(mysqli_num_rows($r)>=1){
$rw=mysqli_fetch_row($r);$id=$rw[0];$items=$rw[1];
}}}
if($id=='0'){
$items=$nm."_".$n."_".$amt;
$q="insert into cart(items,customerid,status) values('".$items."','".$cid."',0)";
if(mysqli_select_db($cn,which())!=0)mysqli_query($cn,$q);
}
else{
$xp = explode("_",$items);$found=-1;
for($i=0;$i<count($xp);$i+=3){
 if($xp[$i]==$nm)$found=$i;
}
if($found==-1){
$items.="_".$nm."_".$n."_".$amt;
$q="update cart set items='".$items."' where idno='".$id."'";
if(mysqli_select_db($cn,which())!=0)mysqli_query($cn,$q);
}
else{
$xp[$found+1]=$n;$xp[$found+2]=$amt;$items=$xp[0];
for($i=1;$i<count($xp);$i++)$items.="_".$xp[$i];
$q="update cart set items='".$items."' where idno='".$id."'";
if(mysqli_select_db($cn,which())!=0)mysqli_query($cn,$q);
}
}
msg("Success! Item has been added!");
}

function addcartx(){
$cid=$_POST['id'];$n=$_POST['n'];$nm=strtoupper($_POST['nm']);$amt=$_POST['a'];
$cn=getCon();
$q="select idno,items from cart where customerid='".$cid."' and status='0'";
$id='0';$items='0_0_0';
if(mysqli_select_db($cn,which())!=0){$r=mysqli_query($cn,$q);if($r!=NULL){if(mysqli_num_rows($r)>=1){
$rw=mysqli_fetch_row($r);$id=$rw[0];$items=$rw[1];
}}}
if($id=='0'){
$items=$nm."_".$n."_".$amt;
$q="insert into cart(items,customerid,status) values('".$items."','".$cid."',0)";
if(mysqli_select_db($cn,which())!=0)mysqli_query($cn,$q);
}
else{
$xp = explode("_",$items);$found=-1;
for($i=0;$i<count($xp);$i+=3){
 if($xp[$i]==$nm)$found=$i;
}
if($found==-1){
$items.="_".$nm."_".$n."_".$amt;
$q="update cart set items='".$items."' where idno='".$id."'";
if(mysqli_select_db($cn,which())!=0)mysqli_query($cn,$q);
}
else{
$xp[$found+1]=$n;$xp[$found+2]=$amt;$items=$xp[0];
for($i=1;$i<count($xp);$i++)$items.="_".$xp[$i];
$q="update cart set items='".$items."' where idno='".$id."'";
if(mysqli_select_db($cn,which())!=0)mysqli_query($cn,$q);
}
}
mycart();
}

function mycart(){
$id=$_POST['id'];$cn=getCon();
$q="select items from cart where customerid='".$id."' and status=0";$item='0';
if(mysqli_select_db($cn,which())!=0){$r=mysqli_query($cn,$q);if($r!=NULL){if(mysqli_num_rows($r)>=1){
$rw=mysqli_fetch_row($r);$item=$rw[0];
}}}
if($item=='0')msg("Oops! You have no pending items in your cart!");
else{
msg("<table border=\"1\"><tr><th>Sno</th><th>Item</th><th>Quantity</th><th>Unit Price</th><th>Total Price</th><th></th></tr>");
$xp = explode("_",$item);
$s=1;$toto=0;for($i=0;$i<count($xp);$i+=3){
 if($xp[$i+1]!='0'){
 $sb=1*$xp[$i+1]*$xp[$i+2];
 msg("<tr><td>".$s."</td><td>".$xp[$i]."</td><td><input type=\"number\" id=\"i".$s."\" value=\"".$xp[$i+1]."\" /></td>");
 msg("<td align=\"right\">".addCommas($xp[$i+2])."</td><td align=\"right\">".addCommas($sb)."</td><td><button onclick=\"addcartx('jude.php','addcartx','i".$s."','".$xp[$i]."','".$xp[$i+2]."','dt')\">Update</button></td></tr>");
 $toto=$toto+$sb;$s++;
}
}
msg("</table>");
msg("<b>TOTAL PRICE: UGX ".addCommas($toto)."</b>");
}
}

function mycartx(){
$id=$_POST['id'];$cn=getCon();
$toto=0;
$q="select items,idno from cart where customerid='".$id."' and status=0";$item='0';$kid='0';
if(mysqli_select_db($cn,which())!=0){$r=mysqli_query($cn,$q);if($r!=NULL){if(mysqli_num_rows($r)>=1){
$rw=mysqli_fetch_row($r);$item=$rw[0];$kid=$rw[1];
}}}
if($item=='0')msg("Oops! You have no pending items in your cart!");
else{
$ret="<table border=\"1\"><tr><th>Sno</th><th>Item</th><th>Quantity</th><th>Unit Price</th><th>Total Price</th></tr>";
$xp = explode("_",$item);
$s=1;for($i=0;$i<count($xp);$i+=3){
 if($xp[$i+1]!='0'){
 $sb=1*$xp[$i+1]*$xp[$i+2];
 $ret.="<tr><td>".$s."</td><td>".$xp[$i]."</td><td align=\"right\">".$xp[$i+1]."</td>";
 $ret.="<td align=\"right\">".addCommas($xp[$i+2])."</td><td align=\"right\">".addCommas($sb)."</td></tr>";
 $toto=$toto+$sb;$s++;
}
}
$ret.="</table>";
$ret.="<b>TOTAL PRICE: UGX ".addCommas($toto)."</b>";
}
$out=$kid."_".$toto."_".$ret;
return $out;
}

function order(){
 orderx(explode("_",mycartx()));
}

function orderx($x){
$id=getCustid($_POST['id']);$cn=getCon();
msg($x[2]);
if($x[0]=='0'||$x[1]=='0')msg("Error! Invalid Order cannot be placed!");
else{
 $q="select name,tel,devaddr,mail from customer where idno='".$id."'";
if(mysqli_select_db($cn,which())!=0){$r=mysqli_query($cn,$q);if($r!=NULL){if(mysqli_num_rows($r)>=1){
$rw=mysqli_fetch_row($r);
msg("<br /><b>Order Details:</b><br />");
msg("<b>Name: </b>".$rw[0]."<br /><b>Email: </b>".$rw[3]."<br /><b>Billing Pnone: </b><input type=\"text\" id=\"tl\" value=\"".$rw[1]."\" /><br />");
msg("<b>Delivery Address: </b><input type=\"text\" id=\"dl\" value=\"".$rw[2]."\" /><br /><b>Total Bill: </b>".addCommas($x[1])."<br />");
msg("<button onclick=\"addorder('jude.php','tl','dl','addorder','".$x[1]."','".$x[0]."','dt')\">Confirm Order</button>");
}}}
} 
}

function getCustid($x){
$cn=getCon();$q="select login.exid from login where login.idno='".$x."' and login.tou=0";
$ret='0';
if(mysqli_select_db($cn,which())!=0){$r=mysqli_query($cn,$q);if($r!=NULL){if(mysqli_num_rows($r)>=1){
$rw=mysqli_fetch_row($r);$ret=$rw[0];
}}}
return $ret;
}
?>