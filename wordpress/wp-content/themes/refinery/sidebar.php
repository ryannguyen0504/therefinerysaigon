						<div id="blog_sidebar">
                        	<h2>Search</h2>
                            <form method="get" id="searchform_menu" action="<?php bloginfo('url'); ?>">
                                <input 	type="text" 
                                        id="search_input" 
                                        name="s" />
                                <input id="search_submit" type="submit" name="submit" value="GO" />
                            </form>
                            <h2>Categories</h2>
                            <ul id="categories">
                            <?php
                                foreach((get_categories()) as $category)
                                {
                            ?>
								<li>
                                	<a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->cat_name; ?> (<?php echo $category->count; ?>)</a>
                                </li>
							<?php
                                }
                            ?>
                            </ul>
                            
                            <h2>Recent Posts</h2>
                			<ul id="recent_posts">
							<?php
                                $recent_posts = dha_get_recent_posts();
                                foreach($recent_posts as $post)
                                {
                            ?>
								<li>
                                	<a href="<?php echo get_permalink($post["ID"]); ?>"><?php echo $post["post_title"]; ?></a>
                                </li>
							<?php
                                }
                            ?>
							</ul>
                            <h2>Recent Comments</h2>
                			<ul id="recent_comments">
                            <?php
								$recent_comments = get_comments(array('number'=>5, 'status'=>'approve'));
								foreach($recent_comments as $comment)
								{
							?>
                            	<li>
                                	<a href="<?php echo get_permalink($comment->comment_post_ID); ?>">
										<?php echo $comment->comment_author; ?> on <?php echo get_post($comment->comment_post_ID)->post_title; ?>
                                    </a>
                                </li>
							<?php
								}
							?>
                            </ul>
                            <h2>Archives</h2>
                            <ul id="archives">
                           	<?php
								wp_get_archives('type=monthly&limit=12&show_post_count=1');
							?>
                            </ul>
                        </div>