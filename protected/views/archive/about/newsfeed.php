<?xml version="1.0" encoding="US-ASCII"?>
   <feed  xmlns="http://www.w3.org/2005/Atom"
          xml:lang="en-US"
          xml:base="https://gymkhana.iitb.ac.in/~sports/index.php?r=about/newsfeed">

      <title type="text">IITB Sports Latest News</title>
      <updated><?php echo date(DATE_RFC3339, strtotime($news[0]['date']));?></updated>
      <link href="https://gymkhana.iitb.ac.in/~sports/" />
      <logo>http://gymkhana.iitb.ac.in/~sports/images/newfavicon.png</logo>

      <link rel="alternate" type="text/html" href="https://gymkhana.iitb.ac.in/~sports/" />
      <id>https://gymkhana.iitb.ac.in/~sports/index.php?r=about/newsfeed</id>
      <link rel="self" type="application/atom+xml" href="https://gymkhana.iitb.ac.in/~sports/index.php?r=about/newsfeed" />

  <?php
    foreach($news as $item) { ?>

     <entry>

     <author>
       <name><?php echo $item['usr']; ?></name>
     </author>

       <title><?php echo $item['title'];?></title>
       <link href="https://gymkhana.iitb.ac.in/~sports/index.php?r=about/shownews&amp;id=<?php echo $item['id']; ?>"/>
       <id>https://gymkhana.iitb.ac.in/~sports/index.php?r=about/shownews&amp;id=<?php echo $item['id']; ?></id>
       <updated><?php echo date(DATE_RFC3339, strtotime($item['date']));?></updated>
       <published><?php echo date(DATE_RFC3339, strtotime($item['date']));?></published>
       <category scheme="https://gymkhana.iitb.ac.in/~sports" term="<?php echo $item['sport']; ?>" />
       <summary type="html"><![CDATA[
            <?php echo $item['msg']; ?>
        ]]></summary>

       <content type="html"><![CDATA[
            <?php if($item['img']!="") { ?>
            <img src="https://gymkhana.iitb.ac.in/~sports/<?php echo $item['img'] ?>" alt="" /> <br><?php }
            echo $item['msg']; ?>
        ]]>
        </content>
     </entry>

     <?php } ?>

   </feed>
