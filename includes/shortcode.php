<?php

namespace Jamalnow_ASP;

if ( ! defined( 'ABSPATH' ) ) {
	wp_die( 'Not Allowed!' );
}

class shortcode {
	public static function shortcode() {
		ob_start();
		?> 
		<div class="asp-search-button asp-trigger-button">
			<button type="button" class="ddd">buttozn</button>
		</div>
		<?php
		return ob_get_clean();
	}
}
