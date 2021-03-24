<?php

namespace App\View\Blocks;

/**
 * Class PostWidget
 * @package App\View\Blocks
 */
class PostWidget
{
    /**
     * PostWidget constructor.
     */
    public function __construct()
    {
        if (function_exists('register_block_type')) {
            register_block_type('ropa/posts-widget', [
                'render_callback' => [ $this, 'render' ]
            ]);
        }
    }

    /**
     * @return mixed
     */
    public function render()
    {
        return $this->view('blocks.posts-widget');
    }
}
