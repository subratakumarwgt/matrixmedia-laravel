<?php

namespace App\View\Components;

use App\Models\Project as ModelsProject;
use Illuminate\View\Component;

class Project extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $project;
    public function __construct($project)
    {
        $this->project = $project;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project');
    }
}
