<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OurServices extends Component
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
        $services = [
            [
                'title' => 'Weddings',
                'description' => 'We handle everything — from the proposal to the big day — so you can focus on love.',
                'icon' => 'ring',
            ],
            [
                'title' => 'Private Events',
                'description' => 'Birthdays, bridal showers, baby showers, anniversaries — we bring them all to life.',
                'icon' => 'party-horn',
            ],
            [
                'title' => 'Corporate Events',
                'description' => 'Seminars, conferences, product launches, company parties — with full professionalism.',
                'icon' => 'briefcase',
            ],
            [
                'title' => 'Concept & Planning Support',
                'description' => 'Already have an idea? Let us help you refine and execute it perfectly.',
                'icon' => 'lightbulb',
            ],
        ];
        return view('components.our-services', compact('services'));
    }
}
