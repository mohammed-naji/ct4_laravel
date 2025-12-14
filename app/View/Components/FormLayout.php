<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormLayout extends Component
{
    /**
     * Create a new component instance.
     */
    // public function __construct(public string $instructor)
    public function __construct()
    {
        // dd($instructor);
        // $this->instructor = str_replace(' ', '-', strtolower($instructor));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('forms.form-layout');
    }
}
