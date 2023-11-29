<?php

define("HOST", 'localhost');
define("USERNAME", 'root');
define("PASSWORD", '');
define("DATABASE", 'uzkino');

$db = @mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE)  or die(mysqli_connect_error());



const ASSETS = "/views/assets/";
const ADMIN_ASSETS = "/admin" . ASSETS;
const HEADER_MENU_POSITION = 1;
const FOOTER_MENU_POSITION = 2;
const DEFAULT_SEEN_COUNT = 5;

const MENU_POSITION = [
    1 => 'HEADER_MENU_POSITION',
    2 => 'FOOTER_MENU_POSITION'
];
