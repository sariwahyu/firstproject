<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $title = "Welcome to my Laravel 8 course";
        $description = "Create by Sari";

        $data = [
            'productONe' => 'Iphone',
            'productTwo' => 'Samsung'
        ];

        // Compact Method
        // return view('products.index', 
        // compact('title','description'));

        //With method
        //return view('products.index')->with('title', $title);
        //return view('products.index')->with('data', $data);
    
        //Directly in the view
        return view('products.index', [
            'data' => $data
        ]);
    }

    public function about()
    {
        return 'About Us Page';
    }

    public function show($name)
    {
        $data = [
            'iphone' => 'Iphone',
            'samsung' => 'Samsung'
        ];

        return view('products.index', [
            'products' => $data[$name] ?? 'Products ' . $name . ' does not exist'
        ]); 
    }
} 
