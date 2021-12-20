<?php

namespace App\View\Blocks;

use Roots\Acorn\View\Component;

/**
 * Class PostWidget
 * @package App\View\Blocks
 */
class PostWidget extends Component
{
    /**
     * PostWidget constructor.
     */
    public function bootstrap()
    {

        if (function_exists('register_block_type')) {
            register_block_type('ropa\posts_widget', array(
                'render_callback' => [ $this, 'render' ],
                'attributes' => array(
                    'images' => array(
                        'type' => 'array'
                    )
                )
            ));
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
