<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = [
            [
                'icon' => 'fas fa-hotel',
                'color' => 'red',
                'title' => 'Hotel',
                'description' => 'Find the best hotels and accommodations for your stay.'
            ],
            [
                'icon' => 'fas fa-utensils',
                'color' => 'orange',
                'title' => 'Restaurant',
                'description' => 'Discover local cuisine and dining experiences.'
            ],
            [
                'icon' => 'fas fa-map-marked-alt',
                'color' => 'green',
                'title' => 'Places',
                'description' => 'Explore amazing tourist destinations and attractions.'
            ],
            [
                'icon' => 'fas fa-car',
                'color' => 'blue',
                'title' => 'Transportation',
                'description' => 'Book reliable transportation services.'
            ],
            [
                'icon' => 'fas fa-calendar-alt',
                'color' => 'purple',
                'title' => 'Events',
                'description' => 'Find upcoming events and activities.'
            ],
            [
                'icon' => 'fas fa-shopping-bag',
                'color' => 'yellow',
                'title' => 'Shopping',
                'description' => 'Shop for souvenirs and local products.'
            ],
        ];

        $popularPlaces = [
            [
                'image' => 'images/place1.jpg',
                'title' => 'Historical Site',
                'description' => 'Explore ancient temples and historical landmarks.'
            ],
            [
                'image' => 'images/place2.jpg',
                'title' => 'Cultural Center',
                'description' => 'Experience local arts and cultural performances.'
            ],
            [
                'image' => 'images/place3.jpg',
                'title' => 'Nature Park',
                'description' => 'Discover beautiful landscapes and natural wonders.'
            ],
        ];

        return view('components.Home', compact('categories', 'popularPlaces'));
    }
}