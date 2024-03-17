<?php

namespace App\View\Components;

use App\Models\Setting;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public $settings;

    public function render(): View
    {
        $this->settings = Setting::first();
        return view('layouts.app', ['settings' => $this->settings]);
    }
}
