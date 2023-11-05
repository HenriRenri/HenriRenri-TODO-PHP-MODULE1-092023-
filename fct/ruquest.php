<?php

    // Requette pour le methode post
    function post($name,$default=null){
        if(isset($_POST[$name])){
            return htmlentities($_POST[$name]);
        }else{
            return $default;
        }
    }

    // Reuquette pour le metode get
    function get($name,$default=null){
        if(isset($_GET[$name])){
            return htmlentities($_GET[$name]);
        }else{
            return $default;
        }
    }