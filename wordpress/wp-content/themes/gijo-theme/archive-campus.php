<!--This file handle how Campus page will be displayed-->
<?php
get_header();
pageBanner(array(
	'title' => 'Our Campuses',
	'subtitle' => 'We have several conveniently located campuses.',
	'photo' => ''
))
?>

<div class="container container--narrow page-section">
    <ul class="link-list min-list">
		<?php
		while(have_posts()) {
			the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php the_field('location');  ?>
		<?php } ?>
    </ul>
</div>

<?php get_footer();
?>
