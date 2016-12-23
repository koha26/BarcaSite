<html>
<head>
    <title>FC Barcelona FanSite</title>
    <link rel="stylesheet" href="css/style.css"/>
    <style type="text/css">
        @font-face{
            font-family: BarcaTtf;
            src: url(fonts/7fonts.ru_barselona.ttf);
        }
        @font-face{
            font-family: TahomaReg;
            src: url(fonts/tahoma_regular.ttf);
        }
    </style>
</head>
<body>
<?php require_once('connect.php') ?> 
<?php 
session_start(); 
?>
<div id="header">
    <div class="menu">
    <ul class="menu_list">
        <li class="menu_el"><a href="index.php"><img src="img/logo.png" width="37px" height="37px"/></a></li>
        <li class="menu_el"><a href="index.php">Home</a></li>
        <!--<li class="menu_el"><a href="">Transfers</a></li>
        <li class="menu_el"><a href="">Tournaments</a></li>
        <li class="menu_el"><a href="">Interviews</a></li>-->
        <li><a href="news.php?category=<?php echo "latest_news"; ?>">Categories</a></li>
        <li class="menu_el"><a href="news.php?category=<?php echo "latest_news"; ?>">Latest News</a></li>
        <li class="menu_el"><a href="contacts.php">Contacts</a></li>
        <li class="menu_el dropdown_top">
            <?php if(! isset($_SESSION["user_id"])) { ?>
            <a class="sign_in_but">Sign In<img src="img/logo_man.png" width="37px" height="37px" id="log_img"/></a>
            <?php } else { ?>
                <a>Account<img src="img/logo_man.png" width="37px" height="37px" id="log_img"/></a>
                <ul class="dropdown_inside">
                    <li><a href="profile.php">Profile</a></li>
                    <?php if ($_SESSION['status']==1){?>
                    <li><a href="admin_panel.php">Admin Panel</a></li>
                    <?php }?>
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            <?php } ?>
        <!--<a>U Prof<img src="img/logo_man.png" width="37px" height="37px" id="log_img"/></a>
            <ul class="dropdown_inside">
                <li><a href="">Profile</a></li>
                <li><a href="">Log out</a></li>
            </ul>-->
        </li>
    </ul>
    </div>
</div>