<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
       
        return view("front_home");
    }
    public function about(){
        $data["title"] = "About Us";
        $data["dest"] = "About";
        return view("front_about", $data);
    }
    public function service(){
        $data["title"] = "service";
        $data["dest"] = "service";
        return view("front_service", $data);
    }
    public function feature(){
        $data["title"] = "feature";
        $data["dest"] = "feature";
        return view("front_feature", $data);
    }
    public function team(){
        $data["title"] = "Doctor";
        $data["dest"] = "Doctor";
        return view("front_team",   $data);
    }
    public function appointment(){
            $data["title"] = "appointment";
            $data["dest"] = "appointment";
        return view("front_appointment", $data);
    }
    public function testimonial(){
        $data["title"] = "Testimonial";
        $data["dest"] = "testimonial";
        return view("front_testimonial", $data);
    }
    public function page404(){
        $data["title"] = "404 Not_Found";
        $data["dest"] = "404";
        return view("front_page404", $data);
    }
    public function contact(){
        $data["title"] = "contact";
        $data["dest"] = "contact";
        return view("front_contact", $data);
    }
}
