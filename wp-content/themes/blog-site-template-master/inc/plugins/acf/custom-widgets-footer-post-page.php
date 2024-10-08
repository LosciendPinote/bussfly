<?php

/**
 * A custom ACF widget.
 */

class ACF_custom_page_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'losciend_acf_custom_widget', // Base ID
            __('ACF Custom Page', 'text_domain'), // Name
            array('description' => __('A custome ACF widget for footer', 'text_domain'), 'classname' => 'acfdwd-custom-widget') // Args
        );
    }


    public function widget($args, $instance)
    {

        // outputs the content of the widget
?>
        <div class="footer__nav footer__nav-1">
            <div class="footer__title footer__nav-title">
                <h5 class="footer__title-text"><?php echo get_field('footer_menu_title', 'widget_' . $args['widget_id']) ?></h5>
            </div>
            <div class="footer__nav--content-wrap">
                <ul class="footer__nav--content">
                    <?php
                    $pages = get_field('footer_page', 'widget_' . $args['widget_id']);

                    if ($pages) :
                    ?>

                        <?php foreach ($pages as $pages_url) :

                            $page_title = get_the_title($pages_url->ID);
                            $page_link = get_the_permalink($pages_url->ID);
                        ?>

                            <li><a class="footer__nav--content-text" href="<?php echo esc_url($page_link) ?>">
                                    <?php echo esc_html($page_title) ?></a></li>
                        <?php endforeach ?>
                    <?php endif ?>

                </ul>
            </div>
        </div>

<?php

        // END ACF CODE

    }

    public function form($instance)
    {
        // outputs the options form in the admin
    }

    public function update($new_instance, $old_instance)
    {
        // processes widget options to be saved
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}
function losciend_register_acf_custom_widget()
{
    register_widget('ACF_custom_page_widget');
}
// register ACF_Custom_Widget widget
add_action('widgets_init', 'losciend_register_acf_custom_widget');
