<?php
/*
 * Plugin Name: Responsive Styled Google Maps Simplified
 * Description: A plugin which adds a responsive map (colored or black&white) using a simple shortcode.
 * Version: 1.10
 * Author: hevada
 * Author URI: https://codecanyon.net/user/hevada
 */

function resmap_simp_plugin_row_meta($links, $file) {
	if ($file == plugin_basename(__FILE__)) {
		$documentation_link = '<a target="_blank" href="https://codecanyon.net/item/responsive-styled-google-maps-wordpress-plugin/3909576?ref=hevada" title="'
			. __('Buy the extended version', 'res_map')
			. '">'
				. __('Buy the extended version', 'res_map')
				. '</a>';
				
				$wp_cleaner_pro_link = '<a target="_blank" href="https://codecanyon.net/item/wp-cleaner-pro/21459036?ref=hevada" title="'
					. __('WordPress Cleaner', 'res_map')
					. '">'
						. __('WordPress Cleaner', 'res_map')
						. '</a>';
						
						$links[] = $documentation_link;
						$links[] = $wp_cleaner_pro_link;
	}
	return $links;
}
add_filter('plugin_row_meta', 'resmap_simp_plugin_row_meta', 10, 2);

function resmap_simp_css() {
	wp_register_style('resmap_simp_css', plugins_url('includes/css/resmap.min.css', __FILE__), false, '1.0');
	wp_enqueue_style('resmap_simp_css');
}
add_action('wp_enqueue_scripts', 'resmap_simp_css');

function resmap_simp_scripts() {
	wp_enqueue_script('jquery');
	wp_register_script('resmapsimp', plugins_url('includes/js/resmap.min.js', __FILE__), array('jquery'), '1.4', true);
}
add_action('wp_enqueue_scripts', 'resmap_simp_scripts');

function resmap_simp_getIcon($value) {
	return plugins_url('/includes/icons/red.png', __FILE__);
}

function resmap_simp_getStyleString($style) {
	$styleString;
	
	switch ($style) {
		case '1':
			$styleString = '[{"stylers":[{"featureType":"all"}]}]';
			break;
		case '2':
			$styleString = '[{"stylers":[{"featureType":"all"},{"saturation":-100},{"gamma":0.50},{"lightness":30}]}]';
			break;
		default: $styleString = '[{"stylers":[{"featureType":"all"}]}]';
		break;
	}
	return $styleString;
}

function resmap_simp_cleanHtml($attr) {
	$attr = str_replace(array("\n", '"', "'", "{br}", "&lt;", "&gt;", "\r\n"), array(" ", "\"", "\'", "<br>", "<", ">", " "), $attr);
	
	return $attr;
}

function resmap_simp_shortcode($atts) {
	
	$atts = shortcode_atts(array(
		'height'          => '500px',
		'style'           => '1',
		'zoom'            => 14,
		'address'         => '',
		'key'             => ''
	), $atts);
	
	
	
	// Google Maps API link, http or https
	$api_url = is_ssl() ? 'https://maps-api-ssl.google.com' : 'http://maps.googleapis.com';
	
	// Add to Google Maps API the Google Maps API key parameter if is set in the shortcode
	$api_key = '';
	if (trim($atts['key']) != '') {
		$api_key = '&key=' . trim($atts['key']);
	}
	
	// And enqueue the Google Maps Api and the neccessary scripts.
	wp_enqueue_script('googlemapsapi', $api_url . '/maps/api/js?v=3.exp' . $api_key, array('jquery'), null, true);
	wp_enqueue_script('resmapsimp');
	
	// Map identifier
	$mapid = rand();
	
	// Dimensions
	$dimensions = '';
	if(isset($atts['height']))
		$dimensions .= 'height:' . $atts['height'] . ';';
		$dimensions .= 'width: 100%;';
		
		// Style
		$atts['style'] = resmap_simp_getStyleString($atts['style']);
		
		if ($atts['address'] != '') {
			
			$address = resmap_simp_cleanHtml($atts['address']);
			
			// Extract the lagitude and longitude
			$marker_latitude = null;
			$marker_longitude = null;
			if (trim($address)  != "") {
				sscanf($address, '%f, %f', $marker_latitude, $marker_longitude);
			}
			
			$markers = "";
			if ($marker_latitude == '' || $marker_longitude == '') {
				$markers = "[{
                    address: '". $address . "',
                    key: '".  $mapid  . "',
                    html: '" . $address . "',
                    popup: true,
                    flat: true,
                    icon: {
                        image: '" . plugins_url('/includes/icons/red.png', __FILE__) . "'
                    }}]";
			} else {
				$markers = "[{
                    latitude:" . $marker_latitude .",
                    longitude:" . $marker_longitude .",
                    key: '".  $mapid  . "',
                    html: '" . $address . "',
                    popup: true,
                    flat: true,
                    icon: {
                        image: '" . plugins_url('/includes/icons/red.png', __FILE__) . "'
                    }}]";
			}
		}
		ob_start();
		?>
    <script type="text/javascript">
    jQuery(document).ready(function() {
    var mapdiv = jQuery("#responsive_map_<?php echo $mapid; ?>");
    mapdiv.gMapResp({
        maptype: google.maps.MapTypeId.ROADMAP,
        zoom: <?php echo $atts['zoom']; ?>,
        markers: <?php echo $markers; ?>,
        panControl: false,
        zoomControl: true,
        draggable: true,
        scrollwheel: true,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        overviewMapControl: false,
        styles: <?php echo $atts['style']; ?>
     });
    resmap_fixDisplayInTabs(mapdiv, 'true');
  });
  window.onresize = function() {
        jQuery('.responsive-map').each(function(i, obj) {
            data = jQuery(this).data('gmap');
            if (data) {
                var gmap = data.gmap;
                google.maps.event.trigger(gmap, 'resize');
                jQuery(this).gMapResp('fixAfterResize');
            }
        });
  };
  </script>
  <div id="responsive_map_<?php echo $mapid; ?>" class="responsive-map" style="<?php echo $dimensions; ?>"></div>
  <?php return ob_get_clean();
}
add_shortcode('resmap', 'resmap_simp_shortcode');

/**
 * If text widgets do not support shortcodes already, add the neccessary filter to support shortcodes.
 */
if (has_filter('widget_text', 'do_shortcode') === false) {
    add_filter('widget_text', 'do_shortcode');
}