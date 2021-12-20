<?php

namespace App\View\Composers;

use Carbon\Carbon;
use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {

        return [
            'siteIcon'      => $this->siteIcon(),
            'siteName'      => $this->siteName(),
            'siteTagline'   => $this->siteTagline(),
            'siteUrl'       => $this->siteUrl(),
            'showTitle'     => $this->showTitle(),
            'showLogo'      => $this->showLogo(),
            'year'          => Carbon::now()->year
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    /**
     * @return string
     */
    public function siteIcon(): string
    {
        return get_site_icon_url();
    }

    /**
     *
     */
    public function siteTagline(): string
    {
        return get_bloginfo('description');
    }

    /**
     * @return string|void
     */
    public function siteUrl(): string
    {
        return home_url('/');
    }

    /**
     * @return bool
     */
    public function showTitle(): bool
    {
        return ( true === get_theme_mod('display_title_and_tagline', true) );
    }

    /**
     * @return bool
     */
    public function showLogo(): bool
    {
        return has_custom_logo() && $this->showTitle();
    }
}
