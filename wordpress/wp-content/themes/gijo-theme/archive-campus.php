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

	<div class="acf-map">
		<?php
		while (have_posts()) {
			the_post();
			$mapLocation = get_field('location');
			?>
			<div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng']; ?>"></div>
		<?php }
		echo paginate_links()
		;?>
	</div>

</div>

<?php get_footer();
?>
