<?php get_header(); ?>

<!-- start content container -->
<div class="main-content row">

    <div class="col-md-<?php bestore_main_content_width_columns(); ?>">
		<?php
		// if this was a search we display a page header with the results count. If there were no results we display the search form.
		if ( is_search() ) :
			$total_results = $wp_query->found_posts;

			echo "<h1 class='search-head text-center'>" . sprintf( __( '%1$s Search Results for "%2$s"', 'bestore' ), $total_results, get_search_query() ) . "</h1>";
			
		endif;

		if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );


			endwhile;

			the_posts_pagination();

		else :

			get_template_part( 'content', 'none' );

		endif;
		?>

	</div>

	<?php get_sidebar( 'right' ); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>
