<ul>	

<?php
// Display ChatBox entries
try {
  // Open db connection / create db and table if first time here
  $db = new PDO('sqlite:admin_similar-to-password/ChatBox.sqlite');
// *************************************
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->exec('CREATE TABLE IF NOT EXISTS ChatBox (id INTEGER PRIMARY KEY, name TEXT, ava TEXT, message TEXT, datetime TEXT, time TEXT, approved INTEGER);');
  $query = 'SELECT * FROM ChatBox WHERE approved=1 ORDER BY id DESC;';
  $result = $db->query($query);
  foreach ( $result as $row ) {
    $message = $row['message'];
// ************* Neko Atsume ***********
	$message = str_replace("::naback::"," <img src=\"./images/emoji/na/NABack.png\" height=\"26\"> ",$message);
	$message = str_replace("::nabag::"," <img src=\"./images/emoji/na/NABag.png\" height=\"26\"> ",$message);
	$message = str_replace("::nabag2::"," <img src=\"./images/emoji/na/NABag2.png\" height=\"26\"> ",$message);
	$message = str_replace("::naball::"," <img src=\"./images/emoji/na/NABall.gif\" height=\"26\"> ",$message);
	$message = str_replace("::naball2::"," <img src=\"./images/emoji/na/NABall2.gif\" height=\"26\"> ",$message);
	$message = str_replace("::nacar::"," <img src=\"./images/emoji/na/NACar.gif\" height=\"26\"> ",$message);
	$message = str_replace("::nachair::"," <img src=\"./images/emoji/na/NAChair.gif\" height=\"26\"> ",$message);
	$message = str_replace("::naface::"," <img src=\"./images/emoji/na/NAFace.png\" height=\"26\"> ",$message);
	$message = str_replace("::nafish::"," <img src=\"./images/emoji/na/NAFish.gif\" height=\"26\"> ",$message);
	$message = str_replace("::nalove::"," <img src=\"./images/emoji/na/NALove.png\" height=\"26\"> ",$message);
	$message = str_replace("::napillow::"," <img src=\"./images/emoji/na/NAPillow.png\" height=\"26\"> ",$message);
	$message = str_replace("::naplay::"," <img src=\"./images/emoji/na/NAPlay.gif\" height=\"26\"> ",$message);
	$message = str_replace("::naplay2::"," <img src=\"./images/emoji/na/NAPlay2.gif\" height=\"26\"> ",$message);
	$message = str_replace("::napolice::"," <img src=\"./images/emoji/na/NAPolice.png\" height=\"26\"> ",$message);
	$message = str_replace("::napot::"," <img src=\"./images/emoji/na/NAPot.png\" height=\"26\"> ",$message);
	$message = str_replace("::napounce::"," <img src=\"./images/emoji/na/NAPounce.png\" height=\"26\"> ",$message);
	$message = str_replace("::naquestion::"," <img src=\"./images/emoji/na/NAQuestion.png\" height=\"26\"> ",$message);
	$message = str_replace("::narub::"," <img src=\"./images/emoji/na/NARub.gif\" height=\"26\"> ",$message);
	$message = str_replace("::nascratch::"," <img src=\"./images/emoji/na/NAScratch.gif\" height=\"26\"> ",$message);
	$message = str_replace("::nasock::"," <img src=\"./images/emoji/na/NASock.png\" height=\"26\"> ",$message);
	$message = str_replace("::nasparkle::"," <img src=\"./images/emoji/na/NASparkle.png\" height=\"26\"> ",$message);
	$message = str_replace("::natubbs::"," <img src=\"./images/emoji/na/NATubbs.png\" height=\"26\"> ",$message);
	$message = str_replace("::natube::"," <img src=\"./images/emoji/na/NATube.gif\" height=\"26\"> ",$message);
	$message = str_replace("::nayarn::"," <img src=\"./images/emoji/na/NAYarn.gif\" height=\"26\"> ",$message);
// *************************************
// ************* Face Emoji ************
	$message = str_replace(":)"," <img src=\"./images/emoji/fs/slightly.png\" height=\"23\"> ",$message);
	$message = str_replace(":-)"," <img src=\"./images/emoji/fs/smiling.png\" height=\"23\"> ",$message);
	$message = str_replace(":("," <img src=\"./images/emoji/fs/confused.png\" height=\"23\"> ",$message);
	$message = str_replace(":-("," <img src=\"./images/emoji/fs/worried.png\" height=\"23\"> ",$message);
	$message = str_replace(";)"," <img src=\"./images/emoji/fs/winking.png\" height=\"23\"> ",$message);
	$message = str_replace(";-)"," <img src=\"./images/emoji/fs/winking.png\" height=\"23\"> ",$message);
	$message = str_replace(":-P"," <img src=\"./images/emoji/fs/with.png\" height=\"23\"> ",$message);
	$message = str_replace(":P"," <img src=\"./images/emoji/fs/with.png\" height=\"23\"> ",$message);
	$message = str_replace("X-P"," <img src=\"./images/emoji/fs/squinting.png\" height=\"23\"> ",$message);
	$message = str_replace(";P"," <img src=\"./images/emoji/fs/tongue.png\" height=\"23\"> ",$message);
	$message = str_replace(";-P"," <img src=\"./images/emoji/fs/tongue.png\" height=\"23\"> ",$message);
	$message = str_replace(":D"," <img src=\"./images/emoji/fs/beaming.png\" height=\"23\"> ",$message);
	$message = str_replace(":-D"," <img src=\"./images/emoji/fs/beaming.png\" height=\"23\"> ",$message);
	$message = str_replace("X-D"," <img src=\"./images/emoji/fs/grinning.png\" height=\"23\"> ",$message);
	$message = str_replace("X-))"," <img src=\"./images/emoji/fs/joy.png\" height=\"23\"> ",$message);
	$message = str_replace(":'("," <img src=\"./images/emoji/fs/crying.png\" height=\"23\"> ",$message);
	$message = str_replace("::loudly::"," <img src=\"./images/emoji/fs/loudly.png\" height=\"23\"> ",$message);
	$message = str_replace("::anxious::"," <img src=\"./images/emoji/fs/anxious.png\" height=\"23\"> ",$message);
	$message = str_replace("::downcast::"," <img src=\"./images/emoji/fs/downcast.png\" height=\"23\"> ",$message);
	$message = str_replace("::fearful::"," <img src=\"./images/emoji/fs/fearful.png\" height=\"23\"> ",$message);
	$message = str_replace("::persevering::"," <img src=\"./images/emoji/fs/persevering.png\" height=\"23\"> ",$message);
	$message = str_replace("::frowning::"," <img src=\"./images/emoji/fs/frowning.png\" height=\"23\"> ",$message);
	$message = str_replace("8-)"," <img src=\"./images/emoji/fs/sunglasses.png\" height=\"23\"> ",$message);
	$message = str_replace(":|"," <img src=\"./images/emoji/fs/neutral.png\" height=\"23\"> ",$message);
	$message = str_replace("::alien::"," <img src=\"./images/emoji/fs/alien.png\" height=\"23\"> ",$message);
	$message = str_replace("::angry::"," <img src=\"./images/emoji/fs/angry.png\" height=\"23\"> ",$message);
	$message = str_replace("::astonished::"," <img src=\"./images/emoji/fs/astonished.png\" height=\"23\"> ",$message);
	$message = str_replace("::big-eyes::"," <img src=\"./images/emoji/fs/big-eyes.png\" height=\"23\"> ",$message);
	$message = str_replace("::dizzy::"," <img src=\"./images/emoji/fs/dizzy.png\" height=\"23\"> ",$message);
	$message = str_replace("::flushed::"," <img src=\"./images/emoji/fs/flushed.png\" height=\"23\"> ",$message);
	$message = str_replace("::grimacing::"," <img src=\"./images/emoji/fs/grimacing.png\" height=\"23\"> ",$message);
	$message = str_replace("::halo::"," <img src=\"./images/emoji/fs/halo.png\" height=\"23\"> ",$message);
	$message = str_replace("::heart-e::"," <img src=\"./images/emoji/fs/heart-e.png\" height=\"23\"> ",$message);
	$message = str_replace("::horns::"," <img src=\"./images/emoji/fs/horns.png\" height=\"23\"> ",$message);
	$message = str_replace("::hundred::"," <img src=\"./images/emoji/fs/hundred.png\" height=\"23\"> ",$message);
	$message = str_replace("::hushed::"," <img src=\"./images/emoji/fs/hushed.png\" height=\"23\"> ",$message);
	$message = str_replace("::kiss::"," <img src=\"./images/emoji/fs/kiss.png\" height=\"23\"> ",$message);
	$message = str_replace("::kissing::"," <img src=\"./images/emoji/fs/kissing.png\" height=\"23\"> ",$message);
	$message = str_replace("::kiss-m::"," <img src=\"./images/emoji/fs/kiss-m.png\" height=\"23\"> ",$message);
	$message = str_replace("::pensive::"," <img src=\"./images/emoji/fs/pensive.png\" height=\"23\"> ",$message);
	$message = str_replace("::poo::"," <img src=\"./images/emoji/fs/poo.png\" height=\"23\"> ",$message);
	$message = str_replace("::pouting::"," <img src=\"./images/emoji/fs/pouting.png\" height=\"23\"> ",$message);
	$message = str_replace("::relieved::"," <img src=\"./images/emoji/fs/relieved.png\" height=\"23\"> ",$message);
	$message = str_replace("::screaming::"," <img src=\"./images/emoji/fs/screaming.png\" height=\"23\"> ",$message);
	$message = str_replace("::s-horns::"," <img src=\"./images/emoji/fs/s-horns.png\" height=\"23\"> ",$message);
	$message = str_replace("::skull::"," <img src=\"./images/emoji/fs/skull.png\" height=\"23\"> ",$message);
	$message = str_replace("::sleeping::"," <img src=\"./images/emoji/fs/sleeping.png\" height=\"23\"> ",$message);
	$message = str_replace("::smirking::"," <img src=\"./images/emoji/fs/smirking.png\" height=\"23\"> ",$message);
	$message = str_replace("::steam::"," <img src=\"./images/emoji/fs/steam.png\" height=\"23\"> ",$message);
	$message = str_replace("::tired::"," <img src=\"./images/emoji/fs/tired.png\" height=\"23\"> ",$message);
	$message = str_replace("::unamused::"," <img src=\"./images/emoji/fs/unamused.png\" height=\"23\"> ",$message);
	$message = str_replace("::ghost::"," <img src=\"./images/emoji/fs/ghost.png\" height=\"23\"> ",$message);
// *************************************
// ************* Little Fox Emoji ************
	$message = str_replace("::Fdance::"," <img src=\"./images/emoji/fox/dance.gif\" height=\"22\"> ",$message);
	$message = str_replace("::Fbirthday::"," <img src=\"./images/emoji/fox/birthday.gif\" height=\"22\"> ",$message);
	$message = str_replace("::Fjump::"," <img src=\"./images/emoji/fox/jump.gif\" height=\"22\"> ",$message);
	$message = str_replace("::Fwrrr::"," <img src=\"./images/emoji/fox/wrrr.gif\" height=\"22\"> ",$message);
	$message = str_replace("::Fsneeze::"," <img src=\"./images/emoji/fox/sneeze.gif\" height=\"22\"> ",$message);
	$message = str_replace("::Fninja::"," <img src=\"./images/emoji/fox/ninja.gif\" height=\"22\"> ",$message);
	$message = str_replace("::Fyay::"," <img src=\"./images/emoji/fox/yay.gif\" height=\"22\"> ",$message);
	$message = str_replace("::Fmagic::"," <img src=\"./images/emoji/fox/magic.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fscared::"," <img src=\"./images/emoji/fox/scared.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fwhatsup::"," <img src=\"./images/emoji/fox/what-s-up.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fhearts::"," <img src=\"./images/emoji/fox/hearts.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fhohoho::"," <img src=\"./images/emoji/fox/ho-ho-ho.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Flaugh::"," <img src=\"./images/emoji/fox/laugh.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fstretch::"," <img src=\"./images/emoji/fox/stretch.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fcuddle::"," <img src=\"./images/emoji/fox/cuddle.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fplay::"," <img src=\"./images/emoji/fox/play.gif\" height=\"22\"> ",$message);
	$message = str_replace("::Fwut::"," <img src=\"./images/emoji/fox/wut.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fhello::"," <img src=\"./images/emoji/fox/hello.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fhunting::"," <img src=\"./images/emoji/fox/hunting.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fwhoops::"," <img src=\"./images/emoji/fox/whoops.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fangry::"," <img src=\"./images/emoji/fox/angry.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Frun::"," <img src=\"./images/emoji/fox/run.gif\" height=\"22\"> ",$message);
	$message = str_replace("::Feating::"," <img src=\"./images/emoji/fox/eating.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fkiss::"," <img src=\"./images/emoji/fox/kiss.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fmhhhm::"," <img src=\"./images/emoji/fox/mhhhhm.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fmlem::"," <img src=\"./images/emoji/fox/mlem.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fxmas::"," <img src=\"./images/emoji/fox/christmas.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fnah::"," <img src=\"./images/emoji/fox/nah.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fyawn::"," <img src=\"./images/emoji/fox/yawn.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fwalk::"," <img src=\"./images/emoji/fox/walk.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fcry::"," <img src=\"./images/emoji/fox/cry.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fblush::"," <img src=\"./images/emoji/fox/blush.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fcathat::"," <img src=\"./images/emoji/fox/cat-hat.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fhowl::"," <img src=\"./images/emoji/fox/howl.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fcool::"," <img src=\"./images/emoji/fox/cool.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fsad::"," <img src=\"./images/emoji/fox/sad.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fsleep::"," <img src=\"./images/emoji/fox/sleep.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fyes::"," <img src=\"./images/emoji/fox/yes.gif\" height=\"20\"> ",$message);
	$message = str_replace("::Fwow::"," <img src=\"./images/emoji/fox/wow.gif\" height=\"20\"> ",$message);
// *************************************
// ************* good site *************
	$message = str_replace("yoursite.com"," This is a good site, checked! <img src=\"./images/emoji/fs/halo.png\" height=\"23\"> ",$message);
// *************************************
// change this code to your liking, write it in Message
	$message = str_replace("CheatCode-for-f*ckOf"," <center><img src=\"./images/anonflay2.gif\" height=\"150\"></center> ",$message);
// ************* BBCode *************
	$message = str_replace("[B]","<b>",$message); $message = str_replace("[/B]","</b>",$message);
	$message = str_replace("[I]","<i>",$message); $message = str_replace("[/I]","</i>",$message);
	$message = str_replace("[S]","<del>",$message); $message = str_replace("[/S]","</del>",$message);
	$message = str_replace("[U]","<u>",$message); $message = str_replace("[/U]","</u>",$message);
	$message = str_replace("[sm]","<small>",$message); $message = str_replace("[/sm]","</small>",$message);
	$message = str_replace("[ctG]","<span class=\"iNgreen\">",$message); $message = str_replace("[/ctG]","</span>",$message);
	$message = str_replace("[ctR]","<span class=\"iNred\">",$message); $message = str_replace("[/ctR]","</span>",$message);
	$message = str_replace("[ctO]","<span class=\"iNorange\">",$message); $message = str_replace("[/ctO]","</span>",$message);
	$message = str_replace("[ctB]","<span class=\"iNblue\">",$message); $message = str_replace("[/ctB]","</span>",$message);
	$message = str_replace("[ctP]","<span class=\"iNpurple\">",$message); $message = str_replace("[/ctP]","</span>",$message);
	$message = str_replace("[ctY]","<span class=\"iNyellow\">",$message); $message = str_replace("[/ctY]","</span>",$message);
	$message = str_replace("[ctGr]","<span class=\"iNgray\">",$message); $message = str_replace("[/ctGr]","</span>",$message);
	$message = str_replace("[ctPi]","<span class=\"iNpink\">",$message); $message = str_replace("[/ctPi]","</span>",$message);

// **************************************
	$name = $row['name'];
	if($name == "")     { // If there is no name
	$name = "Anonymous"; // Set the name to Anonymous
}
// Come up with a password(up to 18 characters) that is difficult to pick up; you will respond as an administrator by entering this password instead of your nickname		
	$name = str_replace("pass-for-Admin","<span style=\"color:#800000;\">Admin <span class=\"glyphicon glyphicon-check\"></span></span>",$name);
// **************************************
// Uncomment the line and you will have the user Chess King		
//	$name = str_replace("pass-for-ChessKing","<span style=\"color:#550066;\">Chess King <span class=\"glyphicon glyphicon-king\"></span></span>",$name);
// **************************************
// Uncomment the line and you will have the user Chess Queen		
//	$name = str_replace("pass-for-Queen","<span style=\"color:#870044;\">Chess Queen <span class=\"glyphicon glyphicon-queen\"></span></span>",$name);
// **************************************
    $date = strtok($row['datetime'], ' ');
	$time = $row['time'];
	$ava = $row['ava'];
// **************** avatar **************	
	$ava = str_replace("Choose a hero on avatar","images/ava/anonymous.png",$ava);
	$ava = str_replace("Aquaman","images/ava/100--Aquaman.png",$ava);
	$ava = str_replace("Batman","images/ava/100--Batman.png",$ava);
	$ava = str_replace("Black Widow","images/ava/100--Black-Widow.png",$ava);
	$ava = str_replace("Blue Beetle","images/ava/100--Blue-Beetle.png",$ava);
	$ava = str_replace("Boba Fett","images/ava/100--Boba-Fett.png",$ava);
	$ava = str_replace("Captain America","images/ava/100--Captain-America.png",$ava);
	$ava = str_replace("Cyborg","images/ava/100--Cyborg.png",$ava);
	$ava = str_replace("Daredevil","images/ava/100--Daredevil.png",$ava);
	$ava = str_replace("Green Arrow","images/ava/100--Green-Arrow.png",$ava);
	$ava = str_replace("Green Lantern","images/ava/100--Green-Lantern.png",$ava);
	$ava = str_replace("Hawkeye","images/ava/100--Hawkeye.png",$ava);
	$ava = str_replace("Hulk","images/ava/100--Hulk.png",$ava);
	$ava = str_replace("Iron Man","images/ava/100--Iron-Man.png",$ava);
	$ava = str_replace("Martian Manhunter","images/ava/100--Martian-Manhunter.png",$ava);
	$ava = str_replace("Nick Fury","images/ava/100--Nick-Fury.png",$ava);
	$ava = str_replace("Robin","images/ava/100--Robin.png",$ava);
	$ava = str_replace("Spider Man","images/ava/100--Spider-Man.png",$ava);
	$ava = str_replace("Spock","images/ava/100--Spock.png",$ava);
	$ava = str_replace("Superman","images/ava/100--Superman.png",$ava);
	$ava = str_replace("The Flash","images/ava/100--The-Flash.png",$ava);
	$ava = str_replace("Thor","images/ava/100--Thor.png",$ava);
	$ava = str_replace("Wonder Woman","images/ava/100--Wonder-Woman.png",$ava);
// **************************************
echo '<li class="chat-item chat-item--me">';
echo '<img class="cb-border cb-border-grey chat-img" src="',$ava,'" alt="Avatar" />';
echo '<div class="message">';
echo '<span class="message__user-name">',$name,'</span> <span class="message__date">',$date,'</span> ';
echo '<p class="message__text">',$message,' </p><span class="message__time">UTC <i class="glyphicon glyphicon-time"></i> ',$time,'</span>';
echo '</div>';
echo '</li>',"\n";	

  }
}
// Error handling
catch ( PDOException $e ) {
  echo $e->getMessage();
}
// Close the database
$db = null;
?>			 

</ul>
