<?php

namespace App\View\Components\Home;

use App\Models\Team;
use Illuminate\View\Component;

class TeamSection extends Component
{
    public function render()
    {
        $teams = Team::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('components.home.team-section', compact('teams'));
    }
} 