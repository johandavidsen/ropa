<?php

namespace App\View\Blocks;

use Closure;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Roots\Acorn\View\Component;

/**
 * Class LatestPosts
 * @package App\Views\Blocks
 */
class LatestPosts extends Component
{
    public function __construct()
    {
        if (function_exists('register_block_type')) {
            register_block_type('ropa/latest-posts', [
                'render_callback' => '$this->render'
            ]);
        }
    }

    public function render()
    {
        return $this->view('blocks.latest-posts');
    }
}
