<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Common\CommonProfile;

class UserProfileController extends CommonProfile
{
    public function index()
    {
        return view("frontend.dashboard.profile");
    }
}
