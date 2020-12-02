//
// Funzione da mettere nel functions.php
//

function mrc_get_breadcrumb() {
	echo '<a href=""'.home_url().'"" rel=""nofollow"">Home</a>';
	if (is_category() || is_single()){
		echo "  »  ";
		the_category (' • ');
			if (is_single()) {
				echo "  »  ";
				the_title();
			}
} elseif (is_page()) {
		echo "  »  ";
		echo the_title();
	} elseif (is_search()) {
		echo "  »  ";
		echo "Search Results for...";
		echo '"<em>';
		echo the_search_query();
		echo '</em>"';
	}
}


//
// Richiamo della funzione da mettere nell'header.php o dove si desidera mostrare il breadcrumb
//

<div class="mrc-breadcrumb"><div class="wrap"><?php mrc_get_breadcrumb(); ?></div></div>


//
// Style a piacere per personalizzare il breadcrumb
//

.mrc-breadcrumb {
	padding: 8px 15px;
	margin-bottom: 20px;
	list-style: none;
	background-color: #f5f5f5;
	border-radius: 4px;
}
.mrc-breadcrumb a {
	color: #428bca;
	text-decoration: none;
}
