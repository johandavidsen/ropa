<?php

/**
 * Patterns
 *
 * This file registers all the patterns required for this theme.
 *
 */

function ropa_register_patterns()
{
    if (class_exists('WP_Block_Patterns_Registry')) {

        /**
         * Pattern: ropa/introduction
         */
        register_block_pattern(
            'ropa/introduction',
            array(
                'title'       => __('Introduction header', 'ropa'),
                'content'     => test(),
                'categories'  => array('header'),
            )
        );
    }
}
add_action('init', 'ropa_register_patterns');

function test(): string
{
    return "<!-- wp:group {\"className\":\"container sm:container\"} -->\n<div class=\"wp-block-group container sm:container\"><div class=\"wp-block-group__inner-container\"><!-- wp:columns {\"className\":\"pt-32 pl-2 pr-2 sm:pl-2 sm:pr-2 md:pl-32 md:pr-32 lg:pr-32 lg:pl-32\"} -->\n<div class=\"wp-block-columns pt-32 pl-2 pr-2 sm:pl-2 sm:pr-2 md:pl-32 md:pr-32 lg:pr-32 lg:pl-32\"><!-- wp:column {\"width\":\"20%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:20%\"><!-- wp:image {\"width\":130,\"height\":130,\"sizeSlug\":\"large\",\"className\":\"is-style-rounded\"} -->\n<figure class=\"wp-block-image size-large is-resized is-style-rounded\"><img src=\"https://avatars2.githubusercontent.com/u/3659677?s=460\&amp;v=4\" alt=\"\" width=\"130\" height=\"130\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"80%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:80%\"><!-- wp:paragraph {\"className\":\"text-center text-2xl flex-1\"} -->\n<p class=\"text-center text-2xl flex-1\">Hello, my name is <span class=\"font-pacifico\">Jóhan 2</span> and I'm a software developer based in <span class=\"font-pacifico\">Nuuk</span>, <span class=\"font-pacifico\">Greenland</span>.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:group -->";
}
