<?php
return [
    ["method" => "GET", "uri" => "/", "action" => "index", "view" => "index"],
    ["method" => "GET", "uri" => "/login", "action" => "index", "view" => "login"],
    ["method" => "GET", "uri" => "/registration", "action" => "index", "view" => "registration"],
    ["method" => "GET", "uri" => "/accounts", "action" => "accounts", "view" => "accounts"],
    ["method" => "GET", "uri" => "/price", "action" => "index", "view" => "price"],
    ["method" => "GET", "uri" => "/contact", "action" => "index", "view" => "contact"],
    ["method" => "GET", "uri" => "/delete", "action" => "delete_abonement"],
    ["method" => "GET", "uri" => "/delete-abonement-admin", "action" => "delete_abonement_admin"],
    ["method" => "GET", "uri" => "/admin", "action" => "admin", "view" => "admin"],
    ["method" => "GET", "uri" => "/logout", "action" => "logout"],
    
    ["method" => "POST", "uri" => "/login", "action" => "login"],
    ["method" => "POST", "uri" => "/registration", "action" => "registration"],
    ["method" => "POST", "uri" => "/create-abonement", "action" => "create_abonement"],
];