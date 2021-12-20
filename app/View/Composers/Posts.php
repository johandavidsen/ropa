<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Posts extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'index'
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => get_the_title(get_option('page_for_posts', true)),
            'content' => get_post_field('post_content', get_option('page_for_posts')),
            'pagination' => $this->createPagination(),
        ];
    }

    /**
     * @return string
     */
    public function createPagination(): string
    {
        return get_the_posts_pagination();
    }
}
