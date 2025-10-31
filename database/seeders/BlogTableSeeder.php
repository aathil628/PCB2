<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Clear existing blog posts to avoid duplicates
        \App\Models\Blog::truncate();

        $sampleBlogs = [
            [
                'title' => 'Getting Started with Robotics',
                'slug' => 'getting-started-with-robotics',
                'content' => '<p>Robotics is an exciting field that combines engineering, computer science, and other disciplines to design, build, and program robots. In this post, we\'ll explore the basics of getting started with robotics, including the essential components, programming languages, and resources for beginners.</p><p>Whether you\'re a student, hobbyist, or professional, robotics offers endless opportunities for learning and innovation.</p>',
                'excerpt' => 'Learn the basics of robotics and how to get started in this exciting field.',
                'status' => 'published',
                'views' => 0,
                'meta_title' => 'Getting Started with Robotics - A Beginner\'s Guide',
                'meta_description' => 'Learn how to get started with robotics, including essential components, programming languages, and resources for beginners.',
                'meta_keywords' => 'robotics, beginner, programming, engineering, robots',
                'image' => 'blog/robotics-starter.jpg'
            ],
            [
                'title' => 'The Future of AI in Education',
                'slug' => 'future-of-ai-in-education',
                'content' => '<p>Artificial Intelligence is transforming the education sector in numerous ways. From personalized learning experiences to automated grading systems, AI is making education more accessible and effective.</p><p>In this article, we\'ll explore the current applications of AI in education and what the future might hold for this exciting intersection of technology and learning.</p>',
                'excerpt' => 'Discover how AI is revolutionizing education and what the future holds for this technology in learning environments.',
                'status' => 'published',
                'views' => 0,
                'meta_title' => 'The Future of AI in Education - Trends and Predictions',
                'meta_description' => 'Explore how artificial intelligence is transforming education and what future developments we can expect in this field.',
                'meta_keywords' => 'AI, education, machine learning, edtech, future of learning',
                'image' => 'blog/ai-education.jpg'
            ],
            [
                'title' => 'Building Your First IoT Project',
                'slug' => 'building-first-iot-project',
                'content' => '<p>The Internet of Things (IoT) is connecting devices and systems in ways that were once the stuff of science fiction. In this guide, we\'ll walk you through building your first IoT project from scratch.</p><p>We\'ll cover the hardware you\'ll need, how to set up your development environment, and how to create a simple but functional IoT application.</p>',
                'excerpt' => 'A step-by-step guide to creating your first Internet of Things project, from hardware setup to software implementation.',
                'status' => 'published',
                'views' => 0,
                'meta_title' => 'Building Your First IoT Project - A Step-by-Step Guide',
                'meta_description' => 'Learn how to build your first Internet of Things project with this comprehensive beginner\'s guide.',
                'meta_keywords' => 'IoT, internet of things, DIY, electronics, programming',
                'image' => 'blog/iot-project.jpg'
            ]
        ];

        foreach ($sampleBlogs as $blog) {
            Blog::create($blog);
        }
    }
}
