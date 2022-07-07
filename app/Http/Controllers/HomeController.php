<?php

namespace App\Http\Controllers;
use App\Models\Navigation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $menus = Navigation::all()->where('nav_category','Main')->where('parent_page_id',0);
        $top_first_news = Navigation::all()->where('nav_category','Home')->where('nav_name','Top Three News')->last();
        $homenews = Navigation::query()
                ->where('nav_category','Home')
                ->where('page_type','Normal')
                ->where('nav_name', 'LIKE', "%news%") 
                ->latest()
                ->get();
        return view("website.index")->with(['menus'=>$menus,'homenews'=>$homenews,'top_first_news'=>$top_first_news]);
    }
}
