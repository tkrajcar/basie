<?php
	include 'include/top.php';
?>
<title>Homepage - Basie</title>

<?php
	include 'include/precontent.php';
?>

	<!--- Content --->
<h3>We are building a new internet broadcasting solution.</h3>
<strong>Basie</strong> is a next-generation application designed for
professional internet DJs, including a media library, automatic playlist generation,
playback of multiple files at once, voice-over support, and more.
<Br/><br/>
Basie is currently in the planning stage of development, and so much of this
site is currently under construction. Until more information is available,
you should probably visit <a href="http://www.sourceforge.net/projects/basie">Basie's SourceForge project page</a> for the latest information.

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
