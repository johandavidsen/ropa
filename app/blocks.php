<?php

use App\View\Blocks\PostWidget;

/**
 * Blocks
 *
 * This file registers all the blocks required for this theme.
 *
 */

if (! function_exists('ropa_register_blocks')) {

    function ropa_register_blocks()
    {
        new PostWidget();
    }
    add_action('init', 'ropa_register_blocks');
}
