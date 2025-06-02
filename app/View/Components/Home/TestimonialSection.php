<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TestimonialSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $testimonials = [
            [
                'author' => 'John Doe',
                'content' => 'This service was amazing and truly exceeded my expectations!',
                'position' => 'CEO, Example Corp',
            ],
            [
                'author' => 'Jane Smith',
                'content' => 'A wonderful experience from start to finish. Highly recommended!',
                'position' => 'Marketing Director, Sample Inc',
            ],
            [
                'author' => 'Alice Johnson',
                'content' => 'Professional, efficient, and friendly. Could not ask for more.',
                'position' => 'Freelancer',
            ],
            [
                'author' => 'Alice Johnson',
                'content' => 'Professional, efficient, and friendly. Could not ask for more.',
                'position' => 'Freelancer',
            ],
            [
                'author' => 'Alice Johnson',
                'content' => 'Professional, efficient, and friendly. Could not ask for more.',
                'position' => 'Freelancer',
            ],
            [
                'author' => 'Alice Johnson',
                'content' => 'Professional, efficient, and friendly. Could not ask for more.',
                'position' => 'Freelancer',
            ],
        ];

        return view('components.home.testimonial-section', compact('testimonials'));
    }
}
