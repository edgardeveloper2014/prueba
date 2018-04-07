<?php

namespace App\Controllers;

defined("APPPATH") OR die("Access denied");

use \Core\View,
    \App\Models\User,
     \App\Models\Admin\User as UserAdmin;    

class Home {

    public function index() {
       
        View::set("title", "Usuario");
        View::render("home");
    }

    public function usuarios() {
        $users = UserAdmin::getAll();
        View::set("users", $users);
        View::set("title", "Custom MVC");
        View::render("users");
    }

}
