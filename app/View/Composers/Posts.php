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
