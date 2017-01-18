<?php
//add Datas.php in your project
// REMEMBER TO CHANGE THE DEFAULT PASSWORD
require("Datas.php");

// create a new Database
Datas::new_DB("PASSWORD", "my_db");

// set all content of file (not recommended)
//Datas::set_ALL("PASSWORD", "my_db", "{}")

?>