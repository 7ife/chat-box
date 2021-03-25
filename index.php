<?php header('Content-type=text/html; charset=utf_8'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Anonymous ChatBox</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="Keywords" content="ChatBox, php, script, free, chat, SQLite, Anonymous">
<meta name="Description" content="ChatBox this chat is in pure php without MySQL(only SQLite database) and without javascripts">
<link rel="stylesheet" href="bootstrap.min.css">  
<link href="data:image/x-icon;base64,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" rel="icon" type="image/x-icon" />
<style>
<?php include $_SERVER['DOCUMENT_ROOT']."/chat-box/include/style.php";?>
</style>
</head>
<body>
<div class="container">
          <div class="row">
            <div class="col-lg-12"><!-- Change ChatBox name to your site name -->
              <h1 class="shadow"><a href="/">ChatBox</a> <small>Welcome to our chat!</small></h1>
            </div>
          </div>
    <div class="row">
<div class="col-xs-12">
<!-- ##### ChatBox-primary ###### -->
<div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title text-center">Anonymous ChatBox</h3></div>
    <div class="panel-body">
        <div class="form-group">
<div style="overflow:auto!important;-webkit-overflow-scrolling:touch!important;">		
<iframe class="panel panel-primary" style="width:100%;height:200px;display:block;overflow:scroll;-webkit-overflow-scrolling:touch;" name="chat" src="chat.php">
    Your browser does not support iframes!
</iframe>
</div>
<?php

// Sign the ChatBox

$missing = false;
// Form has been submitted
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  // a crude trick to inhibit header injection
  if ( !isset($_SERVER['HTTP_USER_AGENT']) ) die();

  // Get form input
  $name    = htmlspecialchars($_POST['name']);
  $ava   = htmlspecialchars($_POST['ava']);
  $message = htmlspecialchars($_POST['message']);
  $captcha = +$_POST['captcha'];
  $cvalue  = +$_POST['cvalue'];

  // Validate form input
  $noMessage = ( $message == '') ? true : false;
  $noCaptcha = ( $captcha == '' ) ? true : false;
  if ( $captcha != $cvalue ) $noCaptcha = true;
  $missing = $noMessage || $noCaptcha;
}

if ( $_SERVER['REQUEST_METHOD'] == 'POST' && !$missing ) :
  // No missing fields, update database
  try {
    // Open db connection
    $db = new PDO('sqlite:admin_similar-to-password/ChatBox.sqlite');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $datetime  = date('Y-m-d h:i:s');
    $time = date('h:i:s');
    $approved  = 1;		// set to 0 if prior approval required

    // Update database
    $query = 'INSERT INTO ChatBox (name, ava, message, datetime, time, approved) VALUES (:name, :ava, :message, :datetime, :time, :approved);';
    $stmt = $db->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':ava', $ava);
    $stmt->bindParam(':message', $message);
    $stmt->bindParam(':datetime', $datetime);
    $stmt->bindParam(':time', $time);
    $stmt->bindParam(':approved', $approved);
    $stmt->execute();

    // Tell me a message has been posted (remove if not required)

    echo '
	<p class="text-success text-center"><small><strong>Success!</strong> If approval is enabled, your message will be after it.</small></p>
	<meta http-equiv="refresh" content="3">
	';	
  }
  // Error handling
  catch ( PDOException $e ) {
    echo $e->getMessage();
  }

  // Close the database
  $db = null;

else :
  // Missing fields OR form not submitted
  if ( $missing ) {
    echo '<p class="text-danger text-center"><small>You have not completed the form. Please fill in all fields and press
      Post when complete.</small></p>',"\n";
  } else {
    echo '<p class="text-muted text-center"><small>Your name and avatar optional, the default will be Anonymous</small></p>',"\n";
  }
  $a = rand(1,7);
  $b = rand(2,8);
  $cvalue = $a + $b;

  $noCaptcha = isset($noCaptcha) ? $noCaptcha : false;
  $noMessage = isset($noMessage) ? $noMessage : false;
?>
<?php
endif;
?>
<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars('/chat-box/') ?>";>
<input type="hidden" id="cvalue" name="cvalue" value="<?php echo $cvalue; ?>">
<div class="row">
    <div class="col-md-8"><!-- ##### Left block ###### -->
<div class="form-group">
<div class="col-lg-12">
    <div class="input-group">
      <input class="form-control" type="name" name="name" maxlength="18" placeholder="Name (optional)">
      <div class="input-group-btn">
	  <select class="btn btn-default dropdown-toggle" name="ava" for="ava">
          <option selected>Choose a hero on avatar</option>
          <option value="Aquaman">Aquaman</option>
          <option value="Batman">Batman</option>
          <option value="Black Widow">Black Widow</option>
          <option value="Blue Beetle">Blue Beetle</option>
          <option value="Boba Fett">Boba Fett</option>
          <option value="Captain America">Captain America</option>
          <option value="Cyborg">Cyborg</option>
          <option value="Daredevil">Daredevil</option>
          <option value="Green Arrow">Green Arrow</option>
          <option value="Green Lantern">Green Lantern</option>
          <option value="Hawkeye">Hawkeye</option>
          <option value="Hulk">Hulk</option>
          <option value="Iron Man">Iron Man</option>
          <option value="Martian Manhunter">Martian Manhunter</option>
          <option value="Nick Fury">Nick Fury</option>
          <option value="Robin">Robin</option>
          <option value="Spider Man">Spider Man</option>
          <option value="Spock">Spock</option>
          <option value="Superman">Superman</option>
          <option value="The Flash">The Flash</option>
          <option value="Thor">Thor</option>
          <option value="Wonder Woman">Wonder Woman</option>		  
      </select>	  
      </div><!-- /btn-group -->
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div>
<div class="form-group">
<div class="col-lg-12">
<textarea <?php if ( $noMessage ) echo 'style="background-color:#800000;"'; ?> class="form-control" rows="4" id="textArea" type="text" name="message" placeholder="Message" required ng-trim="true"></textarea>
</div>				
</div>
    </div>
    <div class="col-md-4"><!-- ##### Right block ###### -->
<div class="form-group">
<div class="col-lg-12 text-center">
<a target="chat" href="chat.php" class="btn btn-default tt-info hover-tt-top" data-hover="Refresh chat"><span class="glyphicon glyphicon-comment"></span></a>
<a target="chat" href="emoji.php" class="btn btn-default tt-info hover-tt-top" data-hover="Emoji"><span class="glyphicon glyphicon-picture"></span></a>
<a target="chat" href="-chat10sec-.php" class="btn btn-default tt-info hover-tt-top" data-hover="Auto refresh 10 second"><span class="glyphicon glyphicon-refresh"></span></a>
<a target="chat" href="rules.php" class="btn btn-default tt-info hover-tt-top" data-hover="Rules"><span class="glyphicon glyphicon-alert"></span></a>
<a target="chat" href="info.php" class="btn btn-default tt-info hover-tt-top" data-hover="Info"><span class="glyphicon glyphicon-info-sign"></span></a>
</div>				
</div>
<div class="form-group">
<div class="col-lg-12">
<input <?php if ( $noCaptcha ) echo 'style="background-color:#800000;"'; ?> class="form-control" name="captcha" id="captcha" type="text" placeholder="<?php echo 'What is ',$a,'+',$b,'?'; ?>" required></p>
</div>
</div>
<div class="form-group">
<div class="col-lg-12">
<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Post <span class="glyphicon glyphicon-send"></span></button>
</div>				
</div>
    </div>
</div>
</form>	
        </div>  
    </div>
</div>
<!-- ###### end ChatBox-primary ####### -->
</div>
	</div>
    <div class="row">
        <div class="col-xs-12"></div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <ul class="list-unstyled">
              <li class="pull-right text-muted"><abbr title="Version 2.3">v2.3</abbr></li>
              <li><a target="_blank" href="https://github.com/7ife/chat-box" class="text-muted tt-default hover-tt-right" data-hover="Get ChatBox" style="color:#fffff;text-decoration:none;"><img alt="GitHub" height="22" width="22" src="github.svg"></a></li>
            </ul>		
		</div>
    </div>
	<div class="row lines"></div>
</div>	
</body>
</html>
