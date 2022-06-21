<?php
    
        define("URL", "localhost");
        define("USERNAME", "root");
        define("PASSWORD", "0819");
        define("DB_NAME", "Lunch");
    

    function get_conn(){
         return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
    }