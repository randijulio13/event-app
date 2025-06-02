<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WhyUsSection extends Component
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
        $reasons = [
            [
                'title' => '100+ Successful Events',
                'description' => 'Proven results with happy memories.',
            ],
            // [
            //     'title' => 'Unique & Tailored Concepts',
            //     'description' => 'No templates — every event is a fresh story.',
            // ],
            [
                'title' => 'Multidisciplinary Team',
                'description' => 'From design to logistics, we’ve got it all covered.',
            ],
            [
                'title' => 'Friendly, Transparent Process',
                'description' => 'We keep things easy, honest, and human.',
            ],
        ];
        return view('components.home.why-us-section', compact('reasons'));
    }
}
