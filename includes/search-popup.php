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
						<label for="asp-search-input-text">
							<svg viewBox="0 0 20 20" fill="currentColor" class="flex-none h-24 py-1"><path d="M19.71,18.29,16,14.61A9,9,0,1,0,14.61,16l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,19.71,18.29ZM2,9a7,7,0,1,1,12,4.93h0s0,0,0,0A7,7,0,0,1,2,9Z"></path></svg>
						</label>
						<div class="asp-popup-search-input-wrapper">
							<input type="search" id="asp-search-input-text" name="s" class="asp-popup-search-input" placeholder="إبحث عن عملية او إجراء">
						</div>
						
						<button type="button" class="asp-close-search-popup asp-search-closer">إلغاء</button>
					</div>
				</form>
				<div class="asp-search-overlay asp-search-closer"></div>
			</div>
		<?php
	}
}
