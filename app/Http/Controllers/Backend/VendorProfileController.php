<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Common\CommonProfile;

class VendorProfileController extends CommonProfile
{

    public function index()
    {
        return view('vendor.dashboard.profile');
    }

}
