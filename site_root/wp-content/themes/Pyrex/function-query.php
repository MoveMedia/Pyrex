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

function get_music_by_artist($artist_id){
    return Timber::get_posts([
        'post_type' => 'song',
        'numberposts'   => -1,
        'meta_query' => [
            [
                'key'       => 'artists',
                'value'     => '"'. $artist_id . '"',
                'compare'   => 'LIKE',
            ],
        ]
    ]);
}

function get_videos_by_artist($artist_id){
    return Timber::get_posts([
        'post_type' => 'video',
        'numberposts'   => -1,
        'meta_query' => [
            [
                'key'       => 'artists',
                'value'     => '"'. $artist_id . '"',
                'compare'   => 'LIKE',
            ],
        ]
    ]);
}


function get_all_music (){
    return Timber::get_posts([
        'post_type' => 'song'
    ]);
}


function get_site_options (){
    return Timber::get_posts([
        'post_type' => 'site-option'
    ])[0];
}
