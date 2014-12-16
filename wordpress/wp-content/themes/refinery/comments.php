			<div id="comments">
	<?php 
	if ( post_password_required() )
	{ 
	?>
				<p class="nopassword">This post is password protected. Enter the password to view any comments</p>
			</div>
	<?php
		return;
	}
	?>

	<?php
	if ( have_comments() )
	{
	?>
			<h3 id="comments-title">
			<?php
			printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'twentyten' ),
			number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
			?>
			</h3>

		<?php 
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) )
		{
		?>
			<div class="navigation">
				<div class="nav-previous">
					<?php previous_comments_link( '<span>&larr;</span> Older Comments'); ?>
                </div>
				<div class="nav-next">
					<?php next_comments_link( 'Newer Comments <span>&rarr;</span>'); ?>
                </div>
			</div>
		<?php 
		}
		?>

			<ul class="commentlist">
				<?php
					wp_list_comments();
				?>
			</ul>

		<?php 
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) )
		{
		?>
			<div class="navigation">
				<div class="nav-previous">
					<?php previous_comments_link('<span class="meta-nav">&larr;</span> Older Comments' ); ?>
                </div>
				<div class="nav-next">
					<?php next_comments_link('Newer Comments <span class="meta-nav">&rarr;</span>' ); ?>
                </div>
			</div>
		<?php
		}
		?>

	<?php 
	} else
	{
		if ( ! comments_open() )
		{
	?>
	<p class="nocomments"><?php _e( 'Comments are closed.', 'twentyten' ); ?></p>
	<?php
		}
	}
	
	comment_form();
	?>
