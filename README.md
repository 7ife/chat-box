### General Information:
This project is like a hobby for me. All knowledge from the Internet, do not judge strictly. 
### ChatBox
>here is the list advantages:
- Does not use Java scripts
- Uses the SQLite database
- You can use message approval
- BBCode, Emojis and avatars
- Beautiful adaptive design
---
### Installation Instructions:
**ChatBox** can work on almost any hosting with php 5.5+. It will immediately start working when you upload it to your hosting.
#### You need to make changes, for chat management:
For correct operation, scripts it must be located in the **chat-box** directory. <br>
For the folder **admin_similar-to-password** leave **chmod 777**, for all others recommend **chmod 755** <br><br>
Change the name of the folder **admin_similar-to-password** to you own, so that no one guesses, this will be your admin panel, for additional protection, you can use HTTP Basic Authentication, also change the name in the files: `index.php`, `/include/Display-ChatBox.php` <br><br>
in **index.php**: line 62
```php

if ( $_SERVER['REQUEST_METHOD'] == 'POST' && !$missing ) :
  // No missing fields, update database
  try {
    // Open db connection
    $db = new PDO('sqlite:admin_similar-to-password/ChatBox.sqlite');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $datetime  = date('Y-m-d h:i:s');

```
in **Display-ChatBox.php**: line 6
```php

<ul>	
<?php
// Display ChatBox entries
try {
  // Open db connection / create db and table if first time here
  $db = new PDO('sqlite:admin_similar-to-password/ChatBox.sqlite');
// *************************************
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

```
Do not close the file **Display-ChatBox.php**, edit the line 182 with the password for Admin:
```php

// Come up with a password(up to 18 characters) that is difficult to pick up; you will respond as an administrator by entering this password instead of your nickname		
	$name = str_replace("pass-for-Admin","<span style=\"color:#800000;\">Admin <span class=\"glyphicon glyphicon-check\"></span></span>",$name);
// **************************************
// Uncomment the line and you will have the user Chess King		
//	$name = str_replace("pass-for-ChessKing","<span style=\"color:#550066;\">Chess King <span class=\"glyphicon glyphicon-king\"></span></span>",$name);
// **************************************
// Uncomment the line and you will have the user Chess Queen		
//	$name = str_replace("pass-for-Queen","<span style=\"color:#870044;\">Chess Queen <span class=\"glyphicon glyphicon-queen\"></span></span>",$name);

```
ibid in file **Display-ChatBox.php** line 160 Change the code to your own, for an interesting gif image:
```php

// ************* good site *************
	$message = str_replace("yoursite.com"," This is a good site, checked! <img src=\"./images/emoji/fs/halo.png\" height=\"23\"> ",$message);
// *************************************
// change this code to your liking, write it in Message
	$message = str_replace("CheatCode-for-f*ckOf"," <center><img src=\"./images/anonflay2.gif\" height=\"150\"></center> ",$message);
// ************* BBCode *************
	$message = str_replace("[B]","<b>",$message); $message = str_replace("[/B]","</b>",$message);
	$message = str_replace("[I]","<i>",$message); $message = str_replace("[/I]","</i>",$message);

```
**Starting with v2.4 Function Pagination has been added**  <br>
ibid in file **Display-ChatBox.php** line 17 Change the code to your own, number of chat messages per page:
```php

	} else {
		$pg = 1;
        }

	$limit = 5; // number of chat messages per page
	$starting_limit = ($pg-1) * $limit;
	$previous_page = $pg - 1;
	$next_page = $pg + 1;
	$adjacents = "2"; 

```
That's it, your **ChatBox** is ready, upload to your hosting.

---
### How it should all look
>**Default version, watch: [Demo](https://7ife.github.io/cbdemo-0/ "Default version")** <br>
in the chat, there are several backgrounds: <br>
- `matrix-1.txt`
- `matrix-2.txt`
- `matrix-3.txt`
- `skull.txt` <br>
>to change them, you need to move `matrix-1.txt` from folder **bg** `/chat-box/include/bg/` to folder **include** `/chat-box/include/`, and remove `matrix-3.txt` <br>
Or if you want no background, then just delete the file `matrix-3.txt` from the folder **include** `/chat-box/include/`
- [matrix-1](https://7ife.github.io/cbdemo-1/) 
- [matrix-2](https://7ife.github.io/cbdemo-2/) 
- [matrix-3](https://7ife.github.io/cbdemo-0/ "Default version") 
- [skull](https://7ife.github.io/cbdemo-3/) 
- [no background](https://7ife.github.io/cbdemo-4/)
>**Admin panel, watch: [Demo prior approval not required ](https://7ife.github.io/cbdemo-0/admin_similar-to-password/ "Default version") and  [Demo prior approval required ](https://7ife.github.io/cbdemo-4/admin_similar-to-password/)** <br>
change this setting can in file `index.php` line 67 : <br>
```php

    // Open db connection
    $db = new PDO('sqlite:admin_similar-to-password/ChatBox.sqlite');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $datetime  = date('Y-m-d h:i:s');
    $time = date('h:i:s');
    $approved  = 1;		// set to 0 if prior approval required

```
---
<div align="right">

[![Visits Badge](https://badges.pufler.dev/visits/7ife/chat-box)](https://github.com/7ife/chat-box)
[![](https://img.shields.io/badge/-Donate-%23181717?style=flat-square&logo=bitcoin)](https://commerce.coinbase.com/checkout/61780323-c37c-41a2-8d13-571f125e813a)
</div>

[Top](#top "Back to top")
