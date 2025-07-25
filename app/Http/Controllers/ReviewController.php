<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller {

    public function index() {
        $reviews = Review::whereActive(true)->orderBy('date', 'desc')->limit(50)->get();
        return view('reviews.index', [
            'reviews' => $reviews,
            'title' => null
        ]);
    }
    
    public function show_by_type($type) {
        $reviews = Review::whereActive(true)->whereType($type)->orderBy('date', 'desc')->limit(50)->get();
        
        return view('reviews.index', [
            'reviews' => $reviews,
            'title' => "Сustomers testimonials, ".Review::$types[$type],
            'type' => $type
        ]);
    }

}
