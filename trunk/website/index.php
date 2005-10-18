<?php
	include 'include/top.php';
?>
<title>Homepage - Basie</title>

<?php
	include 'include/precontent.php';
?>

	<!--- Content --->
<h3>We are building a new internet broadcasting solution.</h3>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec turpis orci, lobortis at, egestas eu, varius fermentum, risus. Mauris eleifend diam eu dui. Aliquam vel nunc quis turpis placerat lobortis. Curabitur commodo arcu. Vivamus scelerisque, justo quis bibendum mattis, augue tortor egestas magna, sit amet pellentesque ante leo et ante. Ut vitae orci. Ut ut ante. Vestibulum faucibus fermentum tellus. Integer nibh diam, rutrum vel, consequat a, vehicula ac, dolor. Suspendisse potenti. Curabitur ultricies neque ac odio. Curabitur sollicitudin tincidunt urna. Etiam sem. Phasellus vitae tellus. Nam nisi. Mauris molestie. Sed aliquam ante vel turpis. Nulla quis nibh ac elit auctor fringilla. Fusce eu sapien faucibus urna sagittis interdum.

<?php
	include 'include/prenews.php';		
require_once('magpierss/rss_fetch.inc');
$rss = fetch_rss("http://sourceforge.net/export/rss2_projnews.php?group_id=149999");
	echo "<ul>";
	foreach ($rss->items as $item) {
		$href = $item['link'];
		$title = $item['title'];
		$published = $item['pubdate'];
		echo "<li>";
		echo date("m/d/y H:i", strtotime($published));
		echo " GMT:<br /> <a href=$href>$title</a></li>";
	}
	echo "</ul>";
	?>

<?php
	include 'include/bottom.php';		
?>