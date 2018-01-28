<form method="get" action="<?php bloginfo('url'); ?>">
					<input name="s" type="text" class="searchtext" id="search_box" value="" onblur="if (this.value == '') {this.value = 'Szukaj...';}" onfocus="if (this.value == 'Szukaj...') {this.value = '';}" />
					<input type="submit" id="searchsubmit" alt="Szukaj" value="Szukaj" />
				</form>