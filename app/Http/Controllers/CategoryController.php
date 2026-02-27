<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function foodbeverage()
    {
        return view('category.foodbeverage',['title'=>'Menu Food & Beverage']);
    }

    public function beautyhealth()
    {
        return view('category.beautyhealth',['title'=>'Menu Beauty & Health']);
    }

    public function home()
    {
        return view('category.home',['title'=>'Menu Home']);
    }

    public function babykid()
    {
        return view('category.babykid',['title'=>'Menu Baby & Kids']);
    }

    public function penjualan()
    {
        return view('category.penjualan',['title'=>'Menu Penjualan']);
    }
}
