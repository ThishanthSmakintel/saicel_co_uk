<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainingCoursesController extends Controller
{
    public function fetchTrainingData()
    {
        $trainingData = [
            [
                'title' => 'Introduction to Programming',
                'description' => 'A beginner course covering basic programming concepts.',
                'category' => 'Programming',
                'image' => 'https://via.placeholder.com/400x200',
            ],
            [
                'title' => 'Web Development Bootcamp',
                'description' => 'An intensive course covering full-stack web development.',
                'category' => 'Web Development',
                'image' => 'https://via.placeholder.com/400x200',
            ],
            [
                'title' => 'Data Science Fundamentals',
                'description' => 'Explore the principles and techniques of data science.',
                'category' => 'Data Science',
                'image' => 'https://via.placeholder.com/400x200',
            ],
            [
                'title' => 'Mobile App Development Workshop',
                'description' => 'Learn how to build mobile applications for iOS and Android platforms.',
                'category' => 'Mobile Development',
                'image' => 'https://via.placeholder.com/400x200',
            ],
            [
                'title' => 'Graphic Design Essentials',
                'description' => 'Master the fundamentals of graphic design and visual communication.',
                'category' => 'Graphic Design',
                'image' => 'https://via.placeholder.com/400x200',
            ],
            [
                'title' => 'Project Management Certification',
                'description' => 'Gain essential project management skills and prepare for certification.',
                'category' => 'Project Management',
                'image' => 'https://via.placeholder.com/400x200',
            ],

        ];

        return view('training.training', ['courses' => $trainingData]);
    }
}
