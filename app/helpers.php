<?php

/**
 * Return sizes readable to humans
 */
function human_filesizes($bytes, $decimals = 2)
{
    $size = ['B','kB','MB', 'GB', 'TB', 'PB'];
    $factor =  floor((strlen($bytes) -1) / 3);

    return sprintf("%.{$decimals}f",
        $bytes/ pow(1024, $factor) ) .
    $size[$factor];
}

/**
 * is the mime type an image
 */
function is_image($mimetype)
{
    return starts_with($mimetype, 'image/');
}

/**
 * Returned "checked" if true
 */
function checked($value)
{
    return $value ? 'checked' : '';
}

/**
 * return webpath to image
 */
function page_image($value = null)
{
    if(empty($value)){
        $value = config('blog.page_image');
    }
    if (! starts_with($value,'http') && $value[0] !== '/'){
        $value = config('blog.uploads.webpath').'/'.$value;
    }
    return $value;
}