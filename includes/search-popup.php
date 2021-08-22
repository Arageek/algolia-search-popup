<?php

namespace Jamalnow_ASP;

if ( ! defined( 'ABSPATH' ) ) {
	wp_die( 'Not Allowed!' );
}

class Search_Popup {
	public static function content() {
		?>
			<div class="asp-popup-area-wrapper" hidden>   
				<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
					<div class="asp-search-inputs">
						<input type="search" name="s" class="asp-popup-search-input">
						<button type="submit" class="asp-popup-submit-button">Go</button>
					</div>
				</form>
				<div class="asp-search-overlay asp-search-closer"></div>
			</div>
		<?php
	}
}
