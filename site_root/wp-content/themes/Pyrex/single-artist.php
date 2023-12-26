<?php 
    /* Template Name: Music Landing Page */ 
?>

<?php

$context = Timber::context();
$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
$context['music'] = get_music_by_artist($timber_post->ID);
$context['videos'] = get_videos_by_artist($timber_post->ID);
Timber::render( array( 'single-artist.twig' ), $context );


