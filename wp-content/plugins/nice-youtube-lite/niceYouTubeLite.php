<?php
/**
 * @package Nice YouTube Lite
 */
/*
Plugin Name: Nice YouTube Lite
Plugin URI: http://trinitronic.com/index.php/Downloads/downloads.html
Description: The YouTube Lite plugin provides you with an easy YouTube video embed solution. Simply add a YouTube Lite shortcode to your post or page and your YouTube video will be published in place of the shortcode. To change the plugin's settings visit the <a href="./options-general.php?page=niceYouTubeLite.php" target="_self" >settings page.</a>
Version: 1.00
Author: TriniTronic
Author URI: http://trinitronic.com
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

if (!class_exists("NiceYouTubeLite")) {

  class NiceYouTubeLite {

    var $adminOptionsName = "NiceYouTubeLiteAdminOptions";

    function NiceYouTubeLite() { //constructor

    }

    // Admin Panel page --------------------------------------

    // Returns an array of admin options
    function getAdminOptions() {

      $niceYouTubeLiteAdminOpts = array(
          'width'               => 640,
          'aspect_ratio'         => '16:9',
        );

      $niceOptions = get_option( $this->adminOptionsName );

      if ( !empty( $niceOptions ) ) {

          foreach ( $niceOptions as $k => $v )

              $niceYouTubeLiteAdminOpts[$k] = $v;

      }

      update_option($this->adminOptionsName, $niceYouTubeLiteAdminOpts);

      return $niceYouTubeLiteAdminOpts;

    }

    function init() {

      $this->getAdminOptions();

    }

    //Prints out the admin page
    function printAdminPage() {

      global $wpdb;

      $niceOptions = $this->getAdminOptions();


      if (isset($_POST['update_niceYouTubeLiteSettings'])) {

        if (isset($_POST['width'])) {

          $niceOptions['width'] = $wpdb->escape($_POST['width']);

        }

        if (isset($_POST['aspect_ratio'])) {

          $niceOptions['aspect_ratio'] = $wpdb->escape($_POST['aspect_ratio']);

        }

        update_option($this->adminOptionsName, $niceOptions);

        ?>

        <div class="updated"><p><strong><?php _e("Settings Updated.", "niceYouTubeLite");?></strong></p></div>

      <?php

        foreach($niceOptions as $k => $v)
        {

          $niceOptions[$k] = esc_html($v);

        }

      } ?>

      <div class=wrap>
        <form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
          <h2>Nice YouTube Lite</h2>
          <h3>Default video width</h3>
          <p>Enter the default YouTube video embed width in pixels. This will be used for all videos that do not have a width set in their respective shortcodes.</p>
          <input type="text" size="50" name="width" id="width" value="<?php _e(apply_filters('format_to_edit',$niceOptions['width']), 'niceYouTubeLite'); ?>" />
          <h3>Default video aspect ratio</h3>
          <p>Enter the YouTube player aspect ratio. This will be used to determine the height of the video player. YouTubes standard aspect ratio is 16:9. Older videos may have an aspect ratio of 4:3.</p>
          <input type="text" size="50" name="aspect_ratio" id="aspect_ratio" value="<?php _e(apply_filters('format_to_edit',$niceOptions['aspect_ratio']), 'niceYouTubeLite'); ?>" />
          <div class="submit">
            <input type="submit" name="update_niceYouTubeLiteSettings" value="<?php _e('Update Settings', 'niceYouTubeLite') ?>" />
          </div>
        </form>
      </div>

    <?php
    }//End function printAdminPage()


    // -------------------------------------- End Admin Panel page


    // Plugin functionality --------------------------------------

    function getNiceYouTubeLite ( $atts = '' ){

      extract( shortcode_atts(

      array(

        'id'	            => '',
        'width'           => '',
        'aspect_ratio'     => '',

      ), $atts ));

      $opts = $this->getAdminOptions();

      $atts['width']    		= $atts['width'] != '' ? $atts['width'] : $opts['width'];
      $atts['aspect_ratio']  = $atts['aspect_ratio'] != '' ? $atts['aspect_ratio'] : $opts['aspect_ratio'];

      foreach($atts as $k => $v)
      {

        $atts[$k] = esc_html($v);

      }

      $insert = $this->niceYouTubeLiteLiteBuildForm( $atts );

      return $insert;

    }

    function niceYouTubeLiteLiteBuildForm( $a )
    {

      static $niceYouTubeCount;
      if(!$niceYouTubeCount)
      {
          $niceYouTubeCount = 0;
      }
      $niceYouTubeCount++;

      $f = '';

      if ( $a['id'] != ''){

        //let's do some aspect ration math.
        $a['width']       = isset($a['width']) && $a['width'] != '' ? $a['width'] : 640;
        $a['aspect_ratio'] = isset($a['aspect_ratio']) && $a['aspect_ratio'] != '' ? $a['aspect_ratio'] : '16:9';
        $aspect           = explode(':', $a['aspect_ratio']);
        $height           = round($a['width']*($aspect[1]/$aspect[0]));

		    $f .= '<div class="niceyoutube-wrap" id="niceyoutube-wrap'.$niceYouTubeCount.'">
        <iframe id="ytplayer'.$niceYouTubeCount.'" type="text/html" width="'.$a['width'].'" height="'.$height.'"
        src="http://www.youtube.com/embed/'.$a['id'].'?origin='.get_bloginfo('url').'" frameborder="0"></iframe>
        </div>';

      }else {

        $f .= '<div style="color: red;" >ERROR: Incomplete, Nice YouTube Lite needs the YouTube video id!</div>';

      }

      return $f;

    }
  }
} //End Class NiceYouTubeLite

if (class_exists("NiceYouTubeLite")) {
    $nice_youTubeLite = new NiceYouTubeLite();
}

//Initialize the admin panel
if ( !function_exists("niceYouTubeLite_ap") ) {

    function niceYouTubeLite_ap() {

        global $nice_youTubeLite;

        if ( !isset($nice_youTubeLite) ) {

          return;

        }

        if ( function_exists('add_options_page') ) {

          add_options_page('Nice YouTube Lite', 'Nice YouTube Lite', 9, basename(__FILE__), array(&$nice_youTubeLite, 'printAdminPage'));

        }
    }
}

//Actions and Filters
if (isset($nice_youTubeLite)) {

    // Init admin panel
    add_action('admin_menu', 'niceYouTubeLite_ap');

    // Retrieve admin options
    add_action('activate_niceYouTubeLite/niceYouTubeLite.php',  array(&$nice_youTubeLite, 'init'));

    // Adds shortcode
    add_shortcode('niceyoutubelite', array(&$nice_youTubeLite, 'getNiceYouTubeLite'), 1);

    //Enable shortcode replacement in text widgets
    add_filter( 'widget_text', 'shortcode_unautop');
    add_filter( 'widget_text', 'do_shortcode', 11);
}

?>