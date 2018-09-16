<?php
	get_header();
	foreach(get_posts() as $post){ ?>
		
<article>
	<h2> <?php echo $post->post_title;		?></h2>
	<pre><?php echo $post->post_content;	?></pre>
</article>
<hr>
	<?php }
	//var_dump(get_posts());
	
	get_footer();
