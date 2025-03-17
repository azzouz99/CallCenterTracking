<?php
$routes = [
    "/" => "HomeController@index",
    "/tasks" => "TaskController@index",
    "/tasks/show/{id}" => "TaskController@show",
    "/tasks/create" => "TaskController@store",
    "/tasks/edit/{id}" => "TaskController@update",
    "/tasks/delete/{id}" => "TaskController@delete"
];
