<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use function Roots\bundle;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content',
        'partials.content-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
            'featured_image' => $this->featuredImage()
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'ropa');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            /* translators: %s is replaced with the search query */
            return sprintf(
                __('Search Results for %s', 'ropa'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'ropa');
        }

        return get_the_title();
    }

    /**
     * @return array
     */
    public function featuredImage(): array
    {
        $images = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()));
        // Featured Image
        if ($images && 0 < count($images)) {
            return $images;
        }

        // First image in post

        // Default image
        return [
            asset('assets/images/code.svg')
        ];
    }
}
