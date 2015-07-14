<?php
/*
Template Name: Hero
*/
get_header(); ?>

<header id="homepage-hero" role="banner">
	<div class="crt">
		<div class="row">
			<div class="small-12 medium-7 columns">

			<h1 class="subheader"><script>
    $(function(){
        $(".element").typed({
            strings: ["Ellen Mey</br>Teaches</br>Creative</br>Technology"],
            typeSpeed: 0
        });
    });
</script>


<span class="element"></span></h1>

		</div><!-- close small 12 medium 7 colums-->

		<div class="floatingyeti show-for-medium-up">

		</div><!--close floating yet I show for medium up-->
	</div><!-- close row-->
</div><!-- close crt-->
</header>

	<div class="row">
		<div class="small-8 large-6 columns" role="main">

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php do_action( 'foundationpress_page_before_comments' ); ?>
				<?php comments_template(); ?>
				<?php do_action( 'foundationpress_page_after_comments' ); ?>
			</article>
		</div>
			<div class="large-6 columns"><!--Pulls featured image for the page-->
				<?php
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail( 'full' );}?>

			</div><!-- close image-->
		<?php endwhile;?>

		<?php do_action( 'foundationpress_after_content' ); ?>

	</div><!-- end about row -->
	<div class="row"><!-- home page posts -->
	<ul>
		<?php $args = array( 'posts_per_page' => 5, 'offset'=> 0, 'category' => 4 );
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
		<?php endforeach;
		wp_reset_postdata();?>

	</ul>
	<?php global $post; ?>
	<?php
	$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
	?>
	<div style="background: url(<?php echo $src[0]; ?> ) !important;">text </div
	</div><!-- close home page posts -->


</div>
<?php get_footer(); ?>
