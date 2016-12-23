<?php require('header.php');?>
<?php require('slider.php');?>
<div id="main">
    <div id="content">
        <div class="bar" style="background-color: rgb(0,82,159);"><a href="news.php?category=<?php echo "latest_news"; ?>">Latest news</a></div>
        <div class="news">
        <ul>
            <?php require('connect.php');?>
            <?php
            mysqli_query($con,"SET NAMES 'utf8'"); 
            mysqli_query($con,"SET CHARACTER SET 'utf8'"); 
            mysqli_query($con,"SET SESSION collation_connection = 'utf8_general_ci'");

            $lastnews = mysqli_query($con,"SELECT id_news, title, category, description, text, date, img_url FROM news ORDER BY id_news DESC LIMIT 4");
        
            $count = mysqli_num_rows($lastnews);

            for($i=0; $i<4; $i=$i+1){
                mysqli_data_seek($lastnews, $i);
                $rown = mysqli_fetch_array($lastnews, MYSQLI_ASSOC);?>

            <li><div class="news_img" style="background-image: url(<?php echo $rown['img_url'];?>);">
                <div class="news_text"><a href="news_page.php?id_news=<?php echo $rown['id_news'];?>&category=<?php echo $rown['category'];?>"><?php echo $rown['title'];?></a></div>
            </div>
            </li>
    <?php } ?>
            <!--<li><div class="news_img" style="background-image: url(img/news/news1.jpg);">
                <div class="news_text">Luis Suarez produces magnificent first touch for goal against Espanyol.</div>
            </div></li>
            <li><div class="news_img" style="background-image: url(img/news/news2.jpg);">
                <div class="news_text">Leo Messi dribbles past everyone, sets up two goals.</div>
            </div></li>
            <li><div class="news_img" style="background-image: url(img/news/news3.jpg);">
                <div class="news_text">Barcelona captain Andres Iniesta fit for El Clasico against Real Madrid.</div>
            </div></li>
            <li><div class="news_img" style="background-image: url(img/news/news4.jpg);">
                <div class="news_text">Luis Enrique and Quique Sanchez Flores quiet on Catalan derby row talk.</div>
            </div></li>-->
        </ul>
        </div>
        <div class="bar" style="background-color: rgb(162,33,75);">Nearest matches</div>
        <div class="matches">
        <ul>
            <li><div class="mat_img" style="background-image: url(img/match/mat1.jpg);"></div></li>
            <li><div class="mat_img" style="background-image: url(img/match/mat2.jpg);"></div></li>
            <li><div class="mat_img" style="background-image: url(img/match/mat3.jpg);"></div></li>
        </ul>
        </div>
    </div>
</div>
<div class="float_clear">
</div>
<?php require('popup_login.php');?>
<?php require('popup_registration.php');?>
<?php require('footer.php');?>