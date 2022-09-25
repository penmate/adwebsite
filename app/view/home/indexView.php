<?php
function getUsers(){
    $db = new mysqli('localhost', 'root', '', 'advdb') or die('Unable to connect to the Host!');
    $controller = new Controller();
    $controller->console_log("Successfully connected to the host!");

    $sql = 'SELECT * FROM user';
    $result = mysqli_query($db, $sql);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($db);
    // print_r($users);
    return $users;
}

function getAds(){
    $db = new mysqli('localhost', 'root', '', 'advdb') or die('Unable to connect to the Host!');
    $controller = new Controller();
    $controller->console_log("Successfully connected to the host!");

    $sql = 'SELECT advertisement.text, user.name FROM advertisement, user WHERE advertisement.userid = user.id';
    $result = mysqli_query($db, $sql);
    $ads = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($db);
    // print_r($users);
    return $ads;
    }

if(isset($_POST['Users'])) {
    $switch = 3;
}
$usr = getUsers();
$ads = getAds();
// print_r($ads);
?>
<!DOCTYPE HTML>

<html>
    <?php include('css/templates/header.php'); ?>

    <!-- Hello <?=$data['name']?>  -->
    <?php if(isset($_POST['button1'])) { ?> <div class="capital"><h3>Make your own [Ad] Now!</h3></div> <div class="container"><form method="post">
<ul class="navii">
  <li id="navi" href=""><a><input type="submit" name="button2" class="button" value="Users" /></a></li>
  <li id="navi" href=""><a><input type="submit" class="button" name="button3" value="Ads" /></a></li>
</ul>
</form></div>  <?php }?>

    <?php if(isset($_POST['button2'])) { ?> <div class="capital"><h3>Users</h3></div>  <?php foreach($usr as $usr){ ?>
    <div class="container"><h4><?php echo htmlspecialchars($usr['name']) ?></h4></div>
    <?php }}?>

    <?php if(isset($_POST['button3'])) { ?> <div class="capital"><h3>Advertisements</h3></div>  <?php foreach($ads as $ad){ ?>
    <div class="container"><h4><?php echo htmlspecialchars($ad['text'])?>  ~~Posted: <?php echo htmlspecialchars($ad['name'])?></h4></div>
    <?php }} ?>
</html>
