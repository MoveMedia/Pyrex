<?php

// query functions


function get_all_videos (){
    return Timber::get_posts([
        'post_type' => 'video'
    ]);
}

function get_all_artists (){
    return Timber::get_posts([
        'post_type' => 'artist'
    ]);
}


function get_all_music (){
    return Timber::get_posts([
        'post_type' => 'music'
    ]);
}


function get_site_options (){
    return Timber::get_posts([
        'post_type' => 'site-option'
    ])[0];
}
