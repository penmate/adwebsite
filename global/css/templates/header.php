<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {margin: 0;}

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}


ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}

.capital {
  background-color: #04AA6D;
  padding: 10px;
  text-align: center;
  font-size: 25px;
  color: white;
}

.container {
  margin: auto;
  margin-top: 10px;
  border-radius: 25px;
  width: 40%;
  padding: 3px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

#navi{
  background: #04AA6D;
  margin: auto;
}
#navii{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

</style>
</head>
<body>



<form method="post">
<ul class="topnav">
  <li class="right"  id="home"><a class="active"  href=""><input class="button" type="submit" name="button1" value="AdWebsite"/></a></li>
  <li id="user" href=""><a><input type="submit" name="button2" class="button" value="Users" /></a></li>
  <li id="ad" href=""><a><input type="submit" class="button" name="button3" value="Ads" /></a></li>

</ul>
</form>
</body>
</html>