<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0">
<channel>

<title>IITB Sports Upcoming Events</title>
<link>https://gymkhana.iitb.ac.in/~sports/</link>
<description>Latest and Most Reliable Sports News at IITB</description>
 <image>
    <url>http://gymkhana.iitb.ac.in/~sports/images/newfavicon.png</url>
    <title>IITB Sports</title>
    <link>https://gymmkhana.iitb.ac.in/~sports/</link>
 </image>

<?php $id=1;

foreach($event as $item) { ?>

<item>
  <title><?php echo htmlspecialchars( $item['title'], ENT_XML1); ?></title>
  <link>https://gymkhana.iitb.ac.in/~sports/</link>
    <guid>https://gymkhana.iitb.ac.in/~sports/index.php?id=<?php echo $id; ?></guid>
    <pubDate><?php echo date(DATE_RFC822, strtotime($item['published']));?></pubDate>
      <author><?php echo $item['usr']; ?></author>

 
  <description><![CDATA[
  					<?php echo $item['descr']; ?>
				]]>
  </description>

</item>

<?php $id++; } ?>

</channel>
</rss>