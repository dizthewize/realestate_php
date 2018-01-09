<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'about', 'contact']]);
    }

    public function index() {
      $properties = Property::take(6)
                    ->get();
      return view('pages.index')->with('properties', $properties);
    }

    public function about() {
      return view('pages.about');
    }

    public function properties() {
      $properties = Property::orderBy('bed', 'asc')->get();
      return view('pages.properties')->with('properties', $properties);
    }

    public function contact() {
      return view('pages.contact');
    }

}
