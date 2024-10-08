<?php

class ACF_custom_widget_links extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'acg_footer_links', // Custom Widget ID
            esc_html__('ACF Footer Links', 'domain_text'), // Custom Widget Name
            array('discription' => esc_html__('Add this to Footer Navigation', 'domain_text')) // Custom Widget Description
        );
    }

    public function widget($args, $instance)
    {
?>
        <div class="footer__nav footer__nav-3">
            <div class="footer__title footer__nav-title">
                <h5 class="footer__title-text"><?php echo get_field('links_title', 'widget_' . $args['widget_id']) ?></h5>
            </div>
            <div class="footer__nav--content-wrap">
                <ul class="footer__nav--content">
                    <?php if (have_rows('custom_footer_links', 'widget_' . $args['widget_id'])) : ?>
                        <?php while (have_rows('custom_footer_links', 'widget_' . $args['widget_id'])) : the_row() ?>
                            <li><a class="footer__nav--content-text" href="<?php echo esc_url(get_sub_field("sub_link")['url']) ?>" target="<?php echo esc_url(get_sub_field("sub_link")['target']) ?>"><?php echo esc_html(get_sub_field("sub_link")['title']) ?></a></li>
                        <?php endwhile ?>
                    <?php endif ?>
                </ul>
            </div>
        </div>

<?php
    }
    public function form($instance)
    {
    }
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}

function register_ACF_custom_widget_links()
{
    register_widget('ACF_custom_widget_links');
}

add_action('widgets_init', 'register_ACF_custom_widget_links');
