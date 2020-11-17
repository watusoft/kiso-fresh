<?php
function startup(){
msg("<!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license. 
Although you can use them, for a more unique website, replace these images with your own. -->");

msg("<html lang=\"en\">
<head><meta charset=\"utf-8\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">");

msg("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">");

msg("<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->");


msg("<title>KISO FRESH|Grocery</title>

<!-- Bootstrap Core CSS --><link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">");

msg("<!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->");

msg("<link href=\"css/custom.css\" rel=\"stylesheet\"><link rel=\"icon\" href=\"./images/logo3.png\" />");


msg("<script src=\"js/jude.js\" type=\"text/javascript\" language=\"javascript\"></script>");
msg("<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->");

msg("<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>");

msg("<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
");
msg("<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script><![endif]-->

</head>");


msg("
<body onload=\"setLogin('lg')\"><!-- Navigation --><nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">");

msg("<div class=\"container\"><!-- Logo and responsive toggle --><div class=\"navbar-header\">");

msg("<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar\">
");
msg("<span class=\"sr-only\">Toggle navigation</span>");

msg("<span class=\"icon-bar\"></span>
<span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>");

msg("</button>");

msg("<a  href=\"#\"><image src=\"./images/logo3.png\" class=\"logo\"/></a></div><!-- Navbar links -->");

msg("<div class=\"collapse navbar-collapse\" id=\"navbar\"><ul class=\"nav navbar-nav navbar-right\">");

/*******************************************************************************************************/
msg("<li class=\"active\" onclick=\"shwdt('jude.php','home','dt')\"><a>Home</a></li>");

msg("<li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Products & Services<span class=\"caret\"></span></a>");
msg("<ul class=\"dropdown-menu\" aria-labelledby=\"about-us\"><li onclick=\"shwdt('jude.php','ondemand','dt')\"><a>On-Demand</a></li>");

msg("<li onclick=\"shwdt('jude.php','wishlist','dt')\"><a>WishList</a></li>");
msg("<li onclick=\"shwdt('jude.php','subscription','dt')\"><a>Subscription</a></li>");
msg("<li><a href=\"https://www.triplejayimportexport.com\">Export</a></li>");
msg("</ul></li><li onclick=\"shwdt('jude.php','charity','dt')\"><a>Charity</a></li>");

msg("<li onclick=\"lgint('jude.php','loginint','dt','lg')\"><a id=\"lg\">My Account</a></li>");

msg("<li onclick=\"shwdtx('jude.php','mycart','dt')\"><a><span class=\"glyphicon glyphicon-shopping-cart\"></span> My Cart</a></li></ul></div>");
/*******************************************************************************************************/
msg("<!-- /.navbar-collapse --></div><!-- /.container --></nav><!-- Feature --><div class=\"jumbotron feature\">");

msg("<div class=\"container\"><h1><span class=\"glyphicon glyphicon-equalizer\"></span> Readily Order</h1>");

msg("<p>Make your instant order for the freshest of veggies and fruits. We are here to serve you.</p>");

msg("<p><a class=\"btn btn-primary\" onclick=\"shwdtx('jude.php','order','dt')\">Order Now</a></p>
</div></div><!-- Heading -->");


/*will put dynamic division here*/
msg("<div id=\"dt\">");

home();
/*dynamic div must be closed here*/
msg("</div>");

msg("<!-- Footer --><footer><h1 class=\"text-center\">Find Us</h1><!-- Map --><iframe 
title=\"GoogleMap\" src=\"https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d1347.8728017737733!2d32.55884153592666!3d0.24819903610204408!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d0.24816459999999999!2d32.5592257!5e0!3m2!1sen!2sug!4v1599601040304!5m2!1sen!2sug\" width=\"100%\" height=\"450\" frameBorder=\"0\" allowFullScreen=\"\" 
aria-hidden=\"false\" tabIndex=\"0\"></iframe>");

msg("<div class=\"container\"><div class=\"row\"><div class=\"col-sm-12 footer-info-item text-center\"><h2>Contact Us</h2><p class=\"lead\"><span class=\"glyphicon glyphicon-phone-alt\"></span> +256 706 178525<br>");

msg("enquiry@triplejayimportexport.com</p></div></div></div><!-- Footer Links --><div class=\"footer-info\">");
msg("<div class=\"container\"><div class=\"row\"><div class=\"col-sm-4 footer-info-item\">");

msg("<h3>Information</h3><ul class=\"list-unstyled\"><li><a href=\"#\">About Us</a></li>");

msg("<li><a href=\"#\">Customer Service</a></li><li><a href=\"#\">Privacy Policy</a></li>");

msg("<li><a href=\"#\">Sitemap</a></li><li><a href=\"#\">Orders &amp; Returns</a></li>");

msg("</ul></div><div class=\"col-sm-4 footer-info-item\"><h3>My Account</h3><ul class=\"list-unstyled\">");

msg("<li><a href=\"#\">Sign In</a></li><li><a href=\"#\">View Cart</a></li><li><a href=\"#\">My Wishlist</a></li>");

msg("<li><a href=\"#\">Track My Order</a></li><li><a href=\"#\">Help</a></li></ul></div><div class=\"col-sm-4 footer-info-item\">");

msg("<h3><span class=\"glyphicon glyphicon-list-alt\"></span> Newsletter</h3><p>Sign up for exclusive offers.</p><div class=\"input-group\">");

msg("<input type=\"email\" class=\"form-control\" placeholder=\"Enter your email address\"><span class=\"input-group-btn\"><button class=\"btn btn-primary\" type=\"button\">");

msg("Subscribe!</button></span></div></div></div><!-- /.row --></div><!-- /.container --></div><!-- Copyright etc --><div class=\"small-print\">");

msg("<div class=\"container\"><p><a href=\"#\">Terms &amp; Conditions</a> | <a href=\"#\">Privacy Policy</a> | <a href=\"#\">Contact</a></p>");

msg("<p>Copyright &copy; Example.com 2015 </p></div></div></footer><!-- jQuery --><script src=\"js/jquery-1.11.3.min.js\"></script>");

msg("<!-- Bootstrap Core JavaScript --><script src=\"js/bootstrap.min.js\"></script><!-- IE10 viewport bug workaround -->
<script src=\"js/ie10-viewport-bug-workaround.js\"></script>

");
msg("<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src=\"/__/firebase/7.24.0/firebase-app.js\"></script>");
msg("

<!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
<script src=\"/__/firebase/7.24.0/firebase-analytics.js\"></script>
");

msg("<!-- Initialize Firebase -->
<script src=\"/__/firebase/init.js\"></script>

</body>

</html>");

}

function msg($e){echo $e;}

function home(){

msg("<div class=\"container\"><div class=\"row\"><div class=\"col-xs-12\"><h1 class=\"text-center\">Superior Quality</h1>");

msg("<div class=\"Divider\"></div><p class=\"lead text-justify\"><!-- Proactively envisioned multimedia based expertise and cross-media growth strategies.");
msg(" Seamlessly visualize quality 
intellectual capital without superior collaboration and idea-sharing.");
msg(" Holistically pontificate installed base portals after maintainable products without collateral. -->");

msg(" Your Friendly Neighborhood Grocery Store Bringing You Organic Garden Fresh Fruit &amp; Veg To Your Doorstep. ");
msg("Now in Bugolobi, Najjera, Namugongo, Ebb Rd, Luzira &amp; Munyonyo. Our clientele (a.k.a you) is wonderfully unique.");

msg(" And we do everything we can to help you stay on that healthy diet, offering our unique produce – and 
we're committed to providing all sizes at the same price – so you can be confident we’ve got the perfect thing for you.</p></div>");

msg("</div></div><!-- Promos -->");

msg("<div class=\"container-fluid\"><div class=\"row promo\"><a href=\"#\">");
msg("<div class=\"col-md-4 promo-item item-1\"><h3>Fresh</h3></div></a>");

msg("<a href=\"#\"><div class=\"col-md-4 promo-item item-2\"><h3>Timely</h3></div></a>");

msg("<a href=\"#\"><div class=\"col-md-4 promo-item item-3\"><h3>Dilligent Service</h3></div></a></div></div>");
msg("<!-- /.container-fluid --><!-- Featured Products --><div class=\"container\"><h1 class=\"text-center\">Featured Products</h1><div class=\"Divider\"></div>");

msg("<div class=\"row\"><!-- Product 1 --><div class=\"col-sm-6 col-md-3\">");
msg("<div class=\"thumbnail featured-product\"><a href=\"#\"><img src=\"images/matooke.png\" alt=\"\">");


/*products to be given onclick property star here*/
msg("</a>
<div class=\"caption\">");

msg("<h3>Matooke</h3><p><div class=\"input-group\">");

msg("</div></div></div></div>");

msg("<!-- Product 2 --><div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\">");

msg("<a><img src=\"images/passionfruits.jpg\" class=\"pdtImg\" alt=\"\"></a><div class=\"caption\">");

msg("<h3>Passion Fruits</h3><p><div class=\"input-group\">");

msg("");


msg("");

msg("</div></div></div></div><!-- Product 3 --><div class=\"col-sm-6 col-md-3\">");

msg("<div class=\"thumbnail featured-product\"><a><img src=\"images/carrots.jpg\" class=\"pdtImg\" alt=\"\">");

msg("</a><div class=\"caption\"><h3>Carrots</h3><p>");

msg("<div class=\"input-group\">");

msg("");

msg("</div></div></div></div><!-- Product 4 -->");

msg("<div class=\"col-sm-6 col-md-3\"><div class=\"thumbnail featured-product\">");

msg("<a><img src=\"images/irish.jpg\" class=\"pdtImg\" alt=\"\"></a>");

msg("<div class=\"caption\"><h3>Irish Potatoes</h3><p>");

msg("<div class=\"input-group\">");

msg("");
msg("</div></div></div></div></div></div><!-- /.container -->");

msg("<div class=\"container text-center\">
<h1>Unparalleled Service</h1><div class=\"Divider\"></div>");
msg("<p class=\"lead\">We at Kiso Fresh, we efficiently serve you and make sure we bring the sense of satisfaction to our
 clients.");
msg(" A happy client endorses our genuine service. Make your order now and you will not regret it. Here to serve as a one stop grocery shop.");
msg("</p><img class=\"img-responsive clientImg img-circle center-block\" src=\"images/kiso3.jpg\" alt=\"\">");
msg("<img class=\"img-responsive clientImg img-circle center-block\" src=\"images/kiso1-2.jpg\" alt=\"\">");

msg("<img class=\"img-responsive clientImg img-circle center-block\" src=\"images/kiso2.jpg\" alt=\"\"></div><!--/.container-->");


}

function getCon(){return mysqli_connect("localhost",rfile("b.hss"),rfile("c.hss"),which());}

function rfile($a){$out="";$f=fopen($a,"r");$ret=fgets($f);fclose($f);for($i=0;$i<strlen($ret)-2;$i++)$out.=$ret[$i];return $out;}

function which(){$ret=rfile("a.hss");return $ret;}

function rfiles($f,$lim){
$fp=fopen($f,"r");
$ret=fread($fp,$lim);
fclose($fp);
return $ret;
}

function date_subt($_a,$_b){
$a=explode("-",$_a);$b=explode("-",$_b);
$y1 = $a[0]*365;$m1=$a[1]*28;$d1=28-$a[2];$yy=$y1+$m1-$d1;
$y2 = $b[0]*365;$m2=$b[1]*28;$d2=28-$b[2];$bb=$y2+$m2-$d2;
return $yy-$bb;
}

function addCommas($cmi){
$cm="".$cmi."";$out =" ";
$len = strlen($cm);if($len<=3)return $cm;
$mod = $len%3;if($mod==0)$mod=3;
for($i=0;$i<$mod;$i++)$out[$i]=$cm[$i];$out[$i]=',';
for($i=$mod,$com=0,$c=$mod+1;$i<$len;$i++){if($com==2&&$i==($len-1)){$out[$c++]=$cm[$i];$com=0;}
else if($com==2&&$i!=($len-1)){$out[$c++]=$cm[$i];$out[$c++]=',';$com=0;}else {$out[$c++]=$cm[$i];$com++;}}
return $out;
}

function removeCommas($cm){$ret="";$len = strlen($cm);for($i=0,$s=0;$i<$len;$i++){if($cm[$i]!=',')$ret.=$cm[$i];}return $ret;}

?>