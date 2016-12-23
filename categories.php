<?php $category = $_GET['category']; ?>
<div class="categories">
		<h1>Categories</h1>
		<ul>
		<?php 
			if ($category == "latest_news"){?>
				<li class="cat_here"><a href="news.php?category=<?php echo "latest_news"; ?>">Latest news</a></li>
			
		<?php } else { ?>
				<li><a href="news.php?category=<?php echo "latest_news"; ?>">Latest news</a></li>
		<?php }?>
		<?php 
			if ($category == "tournaments"){?>
				<li class="cat_here"><a href="news.php?category=<?php echo "tournaments"; ?>">Tournaments</a></li>
			
		<?php } else { ?>
				<li><a href="news.php?category=<?php echo "tournaments"; ?>">Tournaments</a></li>
		<?php }?>
		<?php 
			if ($category == "transfers"){?>
				<li class="cat_here"><a href="news.php?category=<?php echo "transfers"; ?>">Transfers</a></li>
			
		<?php } else { ?>
				<li><a href="news.php?category=<?php echo "transfers"; ?>">Transfers</a></li>
		<?php }?>
		<?php 
			if ($category == "interviews"){?>
				<li class="cat_here"><a href="news.php?category=<?php echo "interviews"; ?>">Interviews</a></li>
			
		<?php } else { ?>
				<li><a href="news.php?category=<?php echo "interviews"; ?>">Interviews</a></li>
		<?php }?>
			<!--<li class="cat_here"><a href="news.php?category=<?php echo "latest_news"; ?>">Latest news</a></li>
			<li><a href="news.php?category=<?php echo "tournaments"; ?>">Tournaments</a></li>
			<li><a href="news.php?category=<?php echo "transfers"; ?>">Transfers</a></li>
			<li><a href="news.php?category=<?php echo "interviews"; ?>">Interviews</a></li>-->
		</ul>
</div>