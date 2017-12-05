<?php
/*
Plugin Name: Require News Item Excerpt
Plugin URI: http://example.com
Description: Adds a pop up box requiring excerpt to be filled in for news items.
Version: 1.0
Author: David Yip <david.yip@mobile-5.com>
Author URI: http://example.com
License: A "Slug" license name e.g. GPL2
*/
add_action('admin_footer', 'require_news_item_excerpt');
function require_news_item_excerpt(){
	$screen = get_current_screen();
	if($screen->post_type == "news"){
		?>
		<script type="text/javascript">
      jQuery(function($){
        $('#publish, #save-post').click(function(e){
          if(!$('#excerpt').val()){
            alert("Please fill in the excerpt.");
            e.stopImmediatePropagation();
            return false;
          }

          return true;
        });
      });
		</script>
		<?php
	}
	return true;
}
