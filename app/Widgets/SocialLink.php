<?php

namespace App\Widgets;

use WP_Widget;

/**
 * Class Social_Link
 * @package App\Widgets
 */
class SocialLink extends WP_Widget
{
    private $providers = array(
        'facebook',
        'instagram',
        'twitter',
        'github',
        'dribbble'
    );

    /**
     * SocialLink constructor.
     */
    public function __construct()
    {
        // actual widget processes
        parent::__construct(
            'ropa',  // Base ID
            'SocialLink', // Name
            array(
                'description' => __('Widget to display social links, that supports: Facebook, Instagram, Twitter and Github', 'ropa')
            )
        );

        add_action('widgets_init', function () {
            register_widget('App\Widgets\SocialLink');
        });
    }

    /**
     * Front-end display of widget.
     *
     * @param array $args Widget arguments.
     * @param array $instance Saved values from database.
     *
     * @throws \Throwable
     * @see WP_Widget::widget()
     *
     */
    public function widget($args, $instance)
    {
        $field = 'url';
        $providerField = 'provider';

        if (isset($instance[ $field ])) {
            $url = $instance[ $field ];
        } else {
            $url = __('Social URL', 'ropa');
        }

        if (isset($instance[ $providerField ])) {
            $provider = $instance[ $providerField ];
        } else {
            $provider = __('Social provider', 'ropa');
        }

        echo view('widgets/social-link', [
            'editor' => false,
            'url' => $url,
                        'provider' => $provider
        ])->render();
    }

    /**
     * Back-end widget form.
     *
     * @param array $instance Previously saved values from database.
     *
     * @throws \Throwable
     * @see WP_Widget::form()
     *
     */
    public function form($instance)
    {
        $field = 'url';
        $providerField = 'provider';

        if (isset($instance[ $field ])) {
            $url = $instance[ $field ];
        } else {
            $url = __('Social URL', 'ropa');
        }

        if (isset($instance[ $providerField ])) {
            $provider = $instance[ $providerField ];
        } else {
            $provider = __('Social provider', 'ropa');
        }

        echo view('widgets/social-link', [
            'editor' => true,
            'urlFieldName' => $this->get_field_name($field),
            'urlFieldId' => $this->get_field_id($field),
            'url' => $url,
            'providerFieldName' => $this->get_field_name($providerField),
            'providerFieldId' => $this->get_field_id($providerField),
            'providers' => $this->providers,
            'provider' => $provider
        ])->render();
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        // processes widget options to be saved
        $instance = array();
        $instance['url'] = $new_instance['url'];
        $instance['provider'] = $new_instance['provider'];

       // return $instance;
    }
}
