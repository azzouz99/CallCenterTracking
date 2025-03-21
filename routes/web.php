<?php
return [
    "/home" => "HomeController@index",  // ✅ Explicitly set root route
    "login" => "LoginController@login",
    "login/authenticate" => "LoginController@authenticate",
    "logout" => "LoginController@logout",
    "tasks" => "TaskController@index",
    "admin" => "AdminController@index",
    'agents'=>'AdminController@agents'
];
