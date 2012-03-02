<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
	<div id="comments">
	<?php 
		if ($comments) { 
	?>
			<h2 class="comments-title"><?php comments_number('Join in the discussion', 'Discussion has just started! Join in...', '% views shared on this article. Join in...' );?></h2> 

			<ol class="comment-list">
				<?php wp_list_comments( array('avatar_size' => '55', 'type'=>'comment','before' => '<div class="navigation">' . __( '', '' ), 'after' => '</div>' ) ); ?>
			</ol>
			
			
	<?php  
			paginate_comments_links( array('prev_text' => '&laquo; previous comments ', 'next_text' => ' next comments &raquo;') );
			if(count(get_comments('type=pingback&post_id='.$post->ID)) + count(get_comments('type=trackback&post_id='.$post->ID)) > 0){
	?>			<br /><br />
				<h2 class="comments-title pings">Pings to this post</h2>
				<ol class="ping-list">
					<?php wp_list_comments( array( 'type' => 'pings') ); ?>
				</ol>
				
				<?php paginate_comments_links( array('prev_text' => '&laquo; previous pings ', 'next_text' => ' next pings &raquo;') ); ?>
				<br class="noCss" />
	<?php
			}
		}else{ // this is displayed if there are no comments so far 
 
			if ('open' == $post->comment_status) { 
				//<!-- If comments are open, but there are no comments. -->
			}else{ // comments are closed 
		?>
				<!-- If comments are closed. -->
				<?php 
					if(is_page()){
					}else{ 
				?>
					<p class="nocomments">Comments are closed.</p>
				<?php 
					} 
				?>
		<?php 
			} 
		} 

		if ('open' == $post->comment_status) { 
	?>
		<?php 
			if( get_option('comment_registration') && !$user_ID ) { 
		?>
				<p>You must be <a href="<?php echo site_url(); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
		<?php 
			}else{ 
				
					$format = 'You may use these tags : <a href="" title=""> <abbr title=""> <acronym title=""> <b> <blockquote cite=""> <cite> <code> <del datetime=""> <em> <i> <q cite=""> <strike> <strong>';
					$format =  htmlspecialchars($format);
					$args = array(
						'comment_field' => '<p class="comment-form-comment">Comment<br /><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
						'comment_notes_after' =>'<p class="comment-field">'.$format.'</p>'
					);
					comment_form($args);
				
			} // If registration required and not logged in 
		} // if you delete this the sky will fall on your head 
	?>
	</div>