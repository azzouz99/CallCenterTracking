<?php
return [
    "/" => "HomeController@index",  // ✅ Explicitly set root route
    "login" => "LoginController@login",
    "login/authenticate" => "LoginController@authenticate",
    "logout" => "LoginController@logout",
    "tasks" => "TaskController@index",
    "menu" => "MenuController@index"
];
