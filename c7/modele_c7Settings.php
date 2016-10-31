<?php

// A rebaptiser: Settings.php dans c7/

// C:\xampp\htdocs\w\wwwconcr\public_html\forum_asseco_fr
require 'tools/fctnsC7.php';

include ( $_SERVER['SERVER_NAME'] != 'smf' ) ? 'Settings.php' : 'settings/Settings_local.php';
//include('settings/Settings_reel.php');

if ( ! isset( $scripturl ) ) {
  $scripturl = "/";
}

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Forum du Support francophone
concrete5">Forum concrete5.fr</a> |
<a href="http://www.simplemachines.org/about/smf/license.php" title="License" target="_blank" class="new_win">' . $forum_version . ' &copy; 2015</a> | <a href="http://concrete5.fr" title="Support francophone concrete5" target="_blank" class="new_win">concrete5.fr &copy; 2015</a> | <a
href="http://concrete5.org" title="Site Officiel concrete5 (Anglophone)" target="_blank">concrete5.org</a> | ' . $sg;
