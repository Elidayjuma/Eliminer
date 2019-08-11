<?php
	include('simple_html_dom.php');
	include('includes/top.php');
 
		$url =  $_GET["url"];//"http://www.zelyrics.com/lyrics/QueenDarlingftRayVanny-Kijuso";
			// Create DOM from URL
		$html = file_get_html("$url");

		// Find all article blocks
		$lyrics_itself=$html->find('p',0);
		$artist_name=$html->find('h3',0);
		$title=$html->find('h4',0);

	?>	
		
			<!--<div id="value" name="value"> <?php echo $title; //echo($title); ?></div> -->
			
		<?php
			//foreach($html->find('p') as $lyrics_itself) 
       		echo($artist_name);
       		echo $title;
       		echo($lyrics_itself);
       		
			
			
		?>
	<?php
	//scrap(); // call the function

	include('includes/footer.php');
	?>
	<script  type="text/javascript" src="includes/functions.js"></script>


