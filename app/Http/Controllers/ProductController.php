<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function showProducts()
    {

        $products = [
            [
                'name' => 'High-Quality Sealant',
                'price' => 150,
                'rating' => $this->generateRandomRating(),
                'category' => 'Sealants',
                'image' => asset('images/product-images/img-product-img (1).jpg'),
                'description' => 'Perfect for various applications. Provides long-lasting protection.',
            ],
            [
                'name' => 'Premium Cleaning Solution',
                'price' => 100,
                'rating' => $this->generateRandomRating(),
                'category' => 'Cleaning Solutions',
                'image' => asset('images/product-images/img-product-img (2).jpg'),
                'description' => 'Effectively removes tough stains and dirt. Leaves surfaces clean and shiny.',
            ],
            [
                'name' => 'Multi-Surface Polish',
                'price' => 120,
                'rating' => $this->generateRandomRating(),
                'category' => 'Polishes',
                'image' => asset('images/product-images/img-product-img (3).jpg'),
                'description' => 'Achieve a glossy finish on any surface. Provides lasting protection.',
            ],
            [
                'name' => 'Heavy-Duty Degreaser',
                'price' => 80,
                'rating' => $this->generateRandomRating(),
                'category' => 'Degreasers',
                'image' => asset('images/product-images/img-product-img (4).jpg'),
                'description' => 'Tackle grease and grime. Specially formulated to dissolve tough residues.',
            ],
            [
                'name' => 'Professional Detailing Kit',
                'price' => 250,
                'rating' => $this->generateRandomRating(),
                'category' => 'Detailing Kits',
                'image' => asset('images/product-images/img-product-img (5).jpg'),
                'description' => 'Comprehensive kit for professional-quality detailing. Includes interior and exterior cleaning products.',
            ],
            [
                'name' => 'Quick-Drying Tire Shine',
                'price' => 30,
                'rating' => $this->generateRandomRating(),
                'category' => 'Tire Care',
                'image' => asset('images/product-images/img-product-img (6).jpg'),
                'description' => 'Gives tires a glossy, like-new finish. Provides long-lasting protection.',
            ],
            [
                'name' => 'Leather Upholstery Cleaner',
                'price' => 40,
                'rating' => $this->generateRandomRating(),
                'category' => 'Interior Care',
                'image' => asset('images/product-images/img-product-img (7).jpg'),
                'description' => 'Keeps leather upholstery looking like new. Removes dirt and stains.',
            ],
            [
                'name' => 'Glass Cleaner Spray',
                'price' => 15,
                'rating' => $this->generateRandomRating(),
                'category' => 'Glass Cleaners',
                'image' => asset('images/product-images/img-product-img (8).jpg'),
                'description' => 'Achieve streak-free, crystal-clear windows and mirrors. Cuts through dirt and grime.',
            ],
        ];


        return view('products.products', ['products' => $products]);
    }

    //generate a random rating between 0 and 5
    private function generateRandomRating()
    {
        return number_format(mt_rand(0, 5), 1);
    }
}
