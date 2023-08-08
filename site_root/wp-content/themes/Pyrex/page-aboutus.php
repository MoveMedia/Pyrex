<?php 
    /* Template Name: About Us Landing Page */ 
?>

<?php

$context = Timber::context();

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;

Timber::render( array( 'page-aboutus.twig' ), $context );
