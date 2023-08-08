<?php 
    /* Template Name: Music Landing Page */ 
?>

<?php

$context = Timber::context();
$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
Timber::render( array( 'page-music-landing.twig' ), $context );
