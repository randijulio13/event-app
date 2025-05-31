<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PlannerSection extends Component
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
        $features = [
            [
                'title' => 'Timeline & Scheduling',
                'description' => 'Stay on top of important milestones and deadlines.',
                'icon' => 'bi-calendar-fill',
            ],
            [
                'title' => 'Task Management',
                'description' => 'See what needs to be done and check off tasks as you go.',
                'icon' => 'bi-clipboard-check-fill',
            ],
            [
                'title' => 'Agenda & Rundown',
                'description' => 'Plan your ceremony and reception step-by-step.',
                'icon' => 'bi-list-check',
            ],
            [
                'title' => 'Budget & Expenses',
                'description' => 'Track your spending, payments, and stay within budget.',
                'icon' => 'bi-cash-stack',
            ],
        ];
        return view('components.planner-section', compact('features'));
    }
}
