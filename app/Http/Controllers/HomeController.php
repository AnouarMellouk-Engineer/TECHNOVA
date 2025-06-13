<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Code;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featurs = [
            [
                'title' => 'Fast & Free Shipping',
                'desc' => 'Enjoy fast and free shipping across the country. Get your laptop in 24–72 hours!',
                'img' => asset('truck-fast-solid.svg')
            ],
            [
                'title' => 'Extended Return Policy',
                'desc' => 'Not satisfied? Return your laptop within 15 or 30 days — no questions asked.',
                'img' => asset('rotate-left-solid.svg')
            ],
            [
                'title' => 'Student & Business Discounts',
                'desc' => 'Special pricing for students, teachers, and startups.',
                'img' => asset('percent-solid.svg')
            ]
        ];

        $allCategories = Categorie::all();
        return view('pages.home', ['featurs' => $featurs, 'icons' => $allCategories]);
    }
}
