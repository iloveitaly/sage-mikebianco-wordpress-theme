<?php

/**
 * Theme filters.
 */

namespace App;

add_filter('the_content', function ($content) {
    // Add 'not-prose' class to <pre> tags that already have a class attribute
    $content = preg_replace('/<pre([^>]*?)class="([^"]*?)"/', '<pre$1class="$2 not-prose"', $content);

    // Add 'not-prose' class to <pre> tags that don't have a class attribute
    $content = preg_replace('/<pre((?!class=)[^>])*?>/', '<pre class="not-prose"$1>', $content);

    return $content;
});

function truncateBySentence($content, $limit) {
    if (strlen($content) <= $limit) return $content;

    $sentences = preg_split('/(?<=[.!?])\s+/', $content);
    $result = "";

    foreach ($sentences as $sentence) {
        if (strlen($result . $sentence) > $limit) {
            break;
        }
        $result .= $sentence . " ";
    }

    return rtrim($result) . "..";
}

// cut off the excerpt at the end of a sentence, not randomly
add_filter('get_the_excerpt', function($excerpt, $post) {
    // remove all <pre> blocks completely, we don't want code in our excerpts (this may be specific to my blog content)
    $content = preg_replace('/<pre.*?>.*?<\/pre>/si', '', $post->post_content);

    // remove all HTML so we can work with plain old text when generating excerpts
    $content = strip_tags($content);

    $target_length = 750;
    $content = truncateBySentence($content, $target_length);

    // remove all newlines to avoid line breaks in the excerpt
    $content = preg_replace('/\s+/', ' ', $content);

    return $content;
}, 1, 2);
