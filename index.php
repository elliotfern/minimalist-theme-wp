<?php get_header(); ?>

<div id="article">
<?php if ( have_posts() ) : ?> <?php while ( have_posts() ) : the_post(); ?>

<h2>
<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<div id="date">
<?php the_time('j F Y') ?> <?php edit_post_link( __( 'Edit'), '<span class="edit-link">', '</span>' ); ?>
</div>

<?php
$content = get_the_content();
$trimmed_content = wp_trim_words( $content, 100, '<a href="'. get_permalink() .'"> ... Read More</a>' );
echo $trimmed_content;
?>

<div id="categoria"><?php the_category(' ') ?></div>
<div id="tags"><?php the_tags( ' ',' ' ); ?></div>

		<?php endwhile; ?>

		<?php else : ?>
		<?php endif; ?>
<?php wp_pagenavi(); ?>
</div>
<?php get_footer(); ?>

