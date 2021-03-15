<?php

add_action( 'admin_menu', 'fsa_Add_My_Admin_Link' );
 
function fsa_Add_My_Admin_Link()
{
 add_menu_page(
 'Custom Form', //Title
 'Custom Form name', 
 'manage_options',
 'For_SmartApp/includes/fsa_page.php' 
 );
}