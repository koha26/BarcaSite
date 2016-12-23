<?php require('header.php');?>
<div id="news" class="decor_page">
<?php require('connect.php');?>
<?php $category = $_GET['category']; ?>
<?php require('categories.php');?>

	<div class="news_div">
	<?php
		mysqli_query($con,"SET NAMES 'utf8'"); 
		mysqli_query($con,"SET CHARACTER SET 'utf8'"); 
		mysqli_query($con,"SET SESSION collation_connection = 'utf8_general_ci'");

		if ($category == "latest_news"){
			$lastnews = mysqli_query($con,"SELECT id_news, title, description, text, date, img_url FROM news ORDER BY id_news DESC LIMIT 10");
		} else {
			$lastnews = mysqli_query($con,"SELECT id_news, title, description, text, date, img_url FROM news WHERE category = '$category' ORDER BY id_news DESC LIMIT 10");
		}
		
		$count = mysqli_num_rows($lastnews);

			for($i=0; $i<$count; $i=$i+1){
				mysqli_data_seek($lastnews, $i);
				$rown = mysqli_fetch_array($lastnews, MYSQLI_ASSOC);?>

			<div class="cat_news">
				<h2><a href="news_page.php?id_news=<?php echo $rown['id_news'];?>&category=<?php echo $category;?>"><?php echo $rown['title'];?></a></h2>
				<p><?php echo $rown['description'];?></p>
				<p class="news_date"><?php echo $rown['date'];?></p>
			</div>
	<?php } ?>
		<!--
		<div class="cat_news">
			<h2><a href="news_page.php">SPORT: Месси принял решение остаться в клубе</a></h2>
			<p>
			Ранее возникали сложности по ходу переговоров о новом контракте аргентинца, который хотел значительного увеличения зарплаты, а также имел предложение из Китая. Однако сам Месси намерен остаться все же в "Барселоне".

			Договор будет продлен в самом начале 2017 года после небольшой паузы в играх чемпионата Испании.
			https://pp.vk.me/c626520/v626520956/3c83f/QhJZbIArW_4.jpg
			</p>
			<p class="news_date">21.12.2016</p>
		</div>-->
	</div>
	<div class="float_clear">
</div>
</div>
<?php require('popup_login.php');?>
<?php require('popup_registration.php');?>
<?php require('footer.php');?>