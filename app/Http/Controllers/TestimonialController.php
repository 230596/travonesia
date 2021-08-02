<?php

namespace App\Http\Controllers;
use App\TravelPackage;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.testimonial');
    }
}
