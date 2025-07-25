<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;

class SitemapController extends Controller
{
    public function index(){
        $menus = Menu::where('active', 1)->orderBy('position', 'asc')->get();

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach($menus as $menu){
            $xml .= '<url>';
            $xml .= '<loc>'.url($menu->href).'</loc>';
            $xml .= '</url>';
        }
        $xml .= '</urlset>';

        return response($xml)->header('Content-Type', 'application/xml');
    }
}

