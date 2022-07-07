<?php

namespace App\Http\Controllers;
use App\Models\Navigation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $menus = Navigation::all()->where('nav_category','Main')->where('parent_page_id',0);
        //return $menus;
        //home news is 'top three news' and 'top news' filter as nav_name and nav_category
        return view("website.index")->with(['menus'=>$menus]);
    }
}
