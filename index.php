<!doctype html>
<head>
<title>Elementt</title>
  <link rel="icon" type="image/x-icon" href="icon.png">
<style>
body {
 background-image: url('https://img4.goodfon.com/wallpaper/nbig/f/29/pamiatnik-reka-travel-european-prichal-butiful-evropa-gorod.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

* {
margin: 0px;
padding: 0px;
font-family:Arial, Verdana, Sans-serif;
font-size:12px;

}
.headerMenu {
background-color: #006ee6;
height: 50px;
border-bottom: 0px;
padding-left:auto;
padding-right:auto;
width:100%;
}
.logo {
width: 125px;
}

.logo img {
margin-left:150px;
margin-top:-3px;
}

.searchbox {
background-img: url(../img/menu_bg.png);
position: absolute;
top:13px;
margin-left:270px;
}
#search input[type="text"]
background: url(.../img/search-white.png) no-repeat 10px 6px #267bb6;
outline:none;
border:0 none;
font: bold 12px Arial,Helvetica,Sans-serif;
width:350px;
padding:6px 15px 6px 35px;
text-shadow:0 2px 2px rgba(0, 0, 0, 0.3);
-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
moz-box-shadow: 0 1px 0 rgba(255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 3px rgba(0, 0, 0, 0.2) inset;
-webkit-transition: all 0.7 ease 0s;
-moz-transition: all 0.7 ease 0s;
-o-transition: all 0.7 ease 0s;
transition: all 0.7 ease 0s;

#search input[type="text"]:focus {
background: url(../img/search-dark.png) no repeat 10pxx 6px #fcfcfc;
color#6a6f75:
width: 350px;
-webkit-box-shadow; 0 1px 0 rgba(255, 255, 255, 0.1), 0 1 0 rgba(0, 0, 0, 0.9) inset;
moz-box-shadow:0 1px rgba(255, 255, 255, 0.1), 0 1px 0 rgba(0, 0, 0, 0.9 inset);
box-shadow: 0 1px rgba(255, 255, 255, 0.1), 0 1px 0 rgba(0, 0, 0, 0.9 inset);
text-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
}

a {
color:white;
text-decoration:none;
letter-spacing:1px;
padding:5px;
}

@media screen and (max-width: 1280px) {
#menu {
color:white;
background-image: url(../img/menu_bg.png);
position:absolute;
top:0px;
right:0px;
height:37px;
padding-top:19px;
margin-right:9%;

}
}
@media screen and (min-width: 1280px) {
#menu {
color:white;
background-image: url(../img/menu_bg.png);
position:absolute;
top:-18px;
right:9px;
height:37px;
padding-top:20px;
margin-right:-100%;
}
}
#menu a:hover {

background-image: url(../img/menu_bg.hover_mouse_over.png);

}

#glockiii {
border:2px solid white;
background-color:white;
height:30px;

}

#glockiii:hover {
border:2px solid #006ee6;


}

#glockii {
border:2px solid white;
background-color:white;
height:30px;

}

#glockii:hover {
border:2px solid #006ee6;


}

#glockii3 {
border:2px solid white;
background-color:white;
height:30px;

}

#glockii3:hover {
border:2px solid #006ee6;


}

#glockii4 {
border:2px solid white;
background-color:white;
height:30px;

}

#glockii4:hover {
border:2px solid #006ee6;


}

#glockii5 {
border:2px solid white;
background-color:white;
height:30px;

}

#glockii5:hover {
border:2px solid #006ee6;


}

#glockii6 {
border:2px solid white;
background-color:white;
height:30px;

}

#glockii6:hover {
border:2px solid #006ee6;


}

#glockii7 {
border:2px solid white;
background-color:white;
height:30px;

}

#glockii7:hover {
border:2px solid #006ee6;


}

#notpushingp {
border-radius:10%;
background-color:#006ee6;
border:none;
width:60px;
height:25px;
color:white;
}

td {
margin-top:100px;
}

</style>
</head>
<body>
<div class="headerMenu">

<div id="wrapper">

<div class="logo">
<br>
<img src="logo.png"
</div>
<div class="searchbox">
<form action="search.php" method="GET" id="search">
<input type="text" name="q" size="60" placeholder="Search for friends..." />
<div id="menu">

<ul>
<a href="#" />Home</a>
<a href="#" />About</a>
<a href="#" />Sign in</a>
<a href="#" />Sign up</a>

</div>
</div>
</div>
<?php inclue (./inc/header.inc.php); ?>
<div style="width: 800px; margin: 0px auto 0px auto;">
<table>
<tr>
<td width="45%" valign="top">

</td>
<td width valign="top">
<br>
<br>
<h2>Sign Up Below!</h2> &nbsp
<h2> Join Element Today!</h2>
<br>

<form action="#" method="POST">
<input type="text" id="glockiii" name="fname" size="75" placeholder=" First Name" /><br /><br />
<input type="text" id="glockii" name="lname" size="75" placeholder=" Last Name" /><br /><br />
<input type="text" id="glockii3" name="username" size="75" placeholder=" UserName" /><br /><br />
<input type="text" id="glockii4" name="emailname" size="75" placeholder=" Email" /><br /><br />
<input type="text" id="glockii5" name="email2name" size="75" placeholder=" Second Email" /><br /><br />
<input type="text" id="glockii6" name="passwordname" size="75" placeholder=" Password" /><br /><br />
<input type="text" id="glockii7" name="password2name" size="75" placeholder=" Second Password" /><br /><br />
<input type="submit" id="notpushingp" name="submit" value="Sign Up!"> 
</form>
</td>
</tr>
</table>
<?php inclue ( "./inc/footer.inc.php"); ?>

</body>
</html>