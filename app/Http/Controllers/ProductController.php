<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function showByCategory($category)
    {
        $categories = [
            'food-beverage' => 'Makanan & Minuman',
            'beauty-health' => 'Kecantikan & Kesehatan',
            'home-care' => 'Perawatan Rumah',
            'baby-kid' => 'Bayi & Anak'
        ];

        $categoryName = $categories[$category] ?? 'Kategori Tidak Ditemukan';

        return view('products', [
            'category' => $category,
            'categoryName' => $categoryName
        ]);
    }
}
