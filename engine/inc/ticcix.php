<?PHP
/*
=====================================================
 Ticcix
-----------------------------------------------------
 https://github.com/Ticcix
-----------------------------------------------------
 Copyright (c) 2022 Ticcix
=====================================================
 This code is protected by copyright
=====================================================
 File: ticcix.php
-----------------------------------------------------
 Use: Ticcix Updates
=====================================================
*/


if( !defined( 'DATALIFEENGINE' ) OR !defined( 'LOGGED_IN' ) ) {
  header( "HTTP/1.1 403 Forbidden" );
  header ( 'Location: ../../' );
  die( "Hacking attempt!" );
}

if( $member_id['user_group'] != 1 ) {
  msg( "error", $lang['index_denied'], $lang['index_denied'] );
}
echoheader( "<i class=\"fa fa-github position-left\"></i><span class=\"text-semibold\">Ticcix Updates</span>", 'Ticcix Updates' );

echo <<<HTML
<!--NOTIFY--><iframe id="iframe" src="https://ticcix.github.io/news.html" width="100%"style="height: 400px; border: none; border-radius: 5px;margin-bottom: 20px;  margin-top: 0;"></iframe>
<!--NEWS--><iframe id="iframe" src="https://ticcix.github.io/" width="100%"style="height: 100vh; border: none; border-radius: 5px;margin-bottom: 20px;  top: -10px;"></iframe>


HTML;
echofooter();

?>