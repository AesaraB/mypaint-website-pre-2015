<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/icon_small.png" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
	
	<script type="text/javascript"><!--//--><![CDATA[//><!--

sfHover = function() {
	var sfEls = document.getElementById("nav").getElementsByTagName("LI");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);


//--><!]]></script>

	  	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/orbit-1.2.3.css">
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.orbit-1.2.3.min.js"></script>	
			<!--[if IE]>
			     <style type="text/css">
			         .timer { display: none !important; }
			         div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
			    </style>
			<![endif]-->
		
		<!-- Run the plugin -->
		<script type="text/javascript">
			$(window).load(function() {
				$('#featured').orbit();
			});
		</script>


</head>
<body>
<div id="header">
			
	<div id="header_right">
		<div id="header_left">
			<div id="header_logo">
				<div id="nav">
					<ul>
						<li><a href="<?php echo get_settings('home'); ?>">About</a></li>
						<li><a href="?page_id=9">Screenshots</a></li>
						<li><a href="?page_id=6">Download</a></li>
						<li><a href="?page_id=14">Resources</a></li>
						<li><a href="?page_id=18">Development</a></li> 	
					</ul>
				</div>
			</div>
		</div>
	</div>

</div>
	<div id="container">
		<div id="left_splatter"></div>
		<div id="content">
			<div class="col">

				<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<div class="post" id="post-<?php the_ID(); ?>">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<?php
						if (is_page() || is_front_page()) {
						?>
						<div style="display:none;">
						<?php
						}
						?>
						<div class="postInfo">
							<div class="date">
								<?php the_time('F jS, Y') ?> 
							</div> 
							<p>&nbsp;by&nbsp; </p> 
							<div class="author">
								<?php the_author() ?>
							</div>
						</div>
						<?php
						if (is_page() || is_front_page()) {
						?>
						</div>
						<?php
						}
						?>
						<div class="entry">
							<?php the_content('Read the rest of this entry &raquo;'); ?>
						</div>
						<?php
						if (is_page() || is_front_page()) {
							if ( is_user_logged_in()) {
						?>
							<div class="postmetadata">
								<p> <?php edit_post_link('Edit this page'); ?>  </p>
							</div>
						<?php
							}
						}
						else {
						?>
						<div class="postmetadata">
							<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
						</div>
						<?php
						}
						?>
					</div>

				<?php endwhile; ?>

				<div class="navigation">
					<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
					<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
				</div>

				<?php else : ?>

				<h2 class="center">Not Found</h2>
				<p class="center">Sorry, but you are looking for something that isn't here.</p>
				<?php get_search_form(); ?>

				<?php endif; ?>

			</div>
			<div class="col2">
				<div id="rightnav">
					<ul>
						<li><div class="dev_blog"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/Dev_Blog.png" /></div>
							<ul>
<div style="padding:5px 0 0 0;">
<?php
    $recentPosts = new WP_Query();
    $recentPosts->query('showposts=10');
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
     <div style="padding:0 0 10px 0;">
      <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
      <div style="padding:0 0 0 7px; clear:both; font-size:0.85em;"><?php the_time('F j, Y'); ?> by <?php the_author(); ?></div>
     </div>
<?php endwhile; ?>
</div>


							</ul>
						</li>
					</ul>
				</div>
			</div>
		
		
			<div id="footerContainer">
				<div id="footer">
                                        <p>
                                        <!--
					<a href="mailto:martinxyz@gmx.ch">Martin Renold</a> is the primary developer and creator of MyPaint<br />
                                        -->
<br />					Website design by <a href="mailto:sjm@seanjmacisaac.com">Sean J. MacIsaac</a>, powered by <a href="http://wordpress.org/">Wordpress CMS</a> with <a href="http://jquery.com/">Jquery</a> and <a href="http://www.zurb.com/playground/orbit-jquery-image-slider">Orbit</a>
                                        </p>
				</div>
				<div class="icon"></div>
			</div>
		</div>
		<div id="right_splatter"></div>
	</div>
</body>
</html>