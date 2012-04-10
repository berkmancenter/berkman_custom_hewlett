<?php 
wp_enqueue_script('jquery', 'jquery');
wp_enqueue_script('jquerycycle', get_bloginfo('stylesheet_directory') . '/jquery.cycle.all.js');
wp_enqueue_script('hewlett.js', get_bloginfo('stylesheet_directory') . '/hewlett.js');

function hewlett_twitter_shortcode( $atts ) {
		return "<script src='http://widgets.twimg.com/j/2/widget.js'></script> 
              <script type='text/javascript' language='javascript'> 
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '#oer12hf',
  interval: 6000,
  title: 'Hewlett OER Grantees Meeting 2012',
  subject: '#oer12hf ',
  width: 188,
  height: 300,
  theme: {
    shell: {
      background: '#5FA1D0',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#1985b5'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    behavior: 'default'
  }
}).render().start();
</script>";
}
add_shortcode( 'hewlett_twitter', 'hewlett_twitter_shortcode' );

//Google Maps Shortcode
function hewlett_googleMaps_shortcode($atts, $content = null) {
   extract(shortcode_atts(array(
      "width" => '640',
      "height" => '480',
      "src" => ''
   ), $atts));
   return '<iframe width="'.esc_attr($width).'" height="'.esc_attr($height).'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.esc_attr($src).'&amp;output=embed"></iframe>';
}
add_shortcode("hewlett_googlemap", "hewlett_googleMaps_shortcode");

function hewlett_iframe_shortcode( $atts ){
        extract( shortcode_atts( array(
                'width' => '715',
                'height' => '1180',
                'src' => ''
                ), $atts ) 
        );
        $output = '<iframe src=" ' . esc_attr($src) . '" allowfullscreen="" width="'. esc_attr($width) . '" frameborder="0" height="' . esc_attr($height) . '" ></iframe>';
        return $output;
}
add_shortcode( 'hewlett_iframe', 'hewlett_iframe_shortcode' );

add_filter('widget_text', 'do_shortcode');

register_sidebar(array(
  'name' => 'MidSidebar',
  'id' => 'mid-sidebar',
  'description' => 'Widgets in this area will be shown on the next to the slider image.',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => "</aside>",
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
));
