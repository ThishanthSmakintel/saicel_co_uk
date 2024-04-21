<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAllProducts()
    {
        // Array data with additional fields and dummy image URLs
        $products = [
            [
                'name' => 'Product 1',
                'price' => 100,
                'rating' => 4.5,
                'category' => 'Category 1',
                'image' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Product 2',
                'price' => 200,
                'rating' => 3.8,
                'category' => 'Category 2',
                'image' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Product 3',
                'price' => 300,
                'rating' => 4.0,
                'category' => 'Category 1',
                'image' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Product 4',
                'price' => 150,
                'rating' => 4.2,
                'category' => 'Category 3',
                'image' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Product 5',
                'price' => 250,
                'rating' => 4.8,
                'category' => 'Category 2',
                'image' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Product 6',
                'price' => 180,
                'rating' => 3.9,
                'category' => 'Category 1',
                'image' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Product 7',
                'price' => 220,
                'rating' => 4.6,
                'category' => 'Category 3',
                'image' => 'https://picsum.photos/200/300'
            ],
            [
                'name' => 'Product 8',
                'price' => 280,
                'rating' => 4.3,
                'category' => 'Category 2',
                'image' => 'https://picsum.photos/200/300'
            ],
        ];

        return view('products.products', ['products' => $products]);
    }
}
