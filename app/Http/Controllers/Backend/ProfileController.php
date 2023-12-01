<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Common\CommonProfile;
use Illuminate\Contracts\View\View;

class ProfileController extends CommonProfile
{
    public function index(): View
    {
        return view('admin.profile.index');
    }
}
