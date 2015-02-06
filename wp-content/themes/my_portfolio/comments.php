<?php  
//Whatever we put in here will show up when comments_templater runs

//stop the file from running if this post id password protected 
if( post_password_required()){
	return;
	echo 'Enter the password to see the comments';
}

//separate comment count from trackbacks and pingbacks 

$comments_by_type = &separate_comments($comments);
$comment_count = count($comments_by_type['comment']);
$pings_count = count($comments_by_type['pings']);

?>

<section id="comments" class="cfix">

	<h3> <?php  echo ($comment_count == 1) ?  $comment_count . ' Comment' :  $comment_count . ' Comments' ?>  | 

	<?php if(comments_open()){ ?>
	<a href="#respond"> Leave a Comment</a></h3>
	<?php } ?>

	<div class="commentlist">
		<?php wp_list_comments(array(
			'type' 			=> 'comment', //list only real comments
			'avatar_size' 	=> 50, //px square
			'style'			=> 'div',
		)); ?>
	</div>	

	<?php if(get_option('page_comments') AND get_comments_page_count() > 1 ){ ?>
	<div class="pagination">
		<?php previous_comments_link(); ?>
		<?php next_comments_link(); ?>
	</div>
	<?php } ?>

	<?php comment_form(); ?>

</section>

<section id="trackbacks">
	<h3 id="comments-title"> <?php echo $pings_count; ?> Sites that Link here:</h3>
	
	<ol>
	<?php wp_list_comments(array(
			'type' 			=> 'pings', //list only real comments
			'avatar_size' 	=> 50, //px square
		)); ?>
	</ol>

</section>