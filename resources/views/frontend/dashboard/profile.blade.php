@extends('frontend.dashboard.layouts.master')

@section('content')
    <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
            <div class="dashboard_content mt-2 mt-md-0">
                <div class="wsus__dashboard_profile">
                    <div class="wsus__dash_pro_area">
                        <h4>basic information</h4>
                        <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-12 mb-4">
                                    <div class="wsus__dash_pro_img" style="width:255px;">
                                        <img
                                            src="{{ asset(empty(Auth::user()->image) ? 'frontend/images/ts-2.jpg' : Auth::user()->image) }}"
                                            alt="img" class="img-fluid w-100">
                                        <input name="image" type="file">
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6">
                                            <div class="wsus__dash_pro_single">
                                                <i class="fas fa-user-tie"></i>
                                                <input name="first_name" type="text" placeholder="First Name"
                                                       value="{{ Auth::user()->first_name }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="wsus__dash_pro_single">
                                                <i class="fas fa-user-tie"></i>
                                                <input name="last_name" type="text" placeholder="Last Name"
                                                       value="{{ Auth::user()->last_name }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="wsus__dash_pro_single">
                                                <i class="far fa-phone-alt"></i>
                                                <input name="phone" type="text" placeholder="Phone"
                                                       value="{{ Auth::user()->phone }}">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <div class="wsus__dash_pro_single">
                                                <i class="fal fa-envelope-open"></i>
                                                <input name="email" type="email" placeholder="Email"
                                                       value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button class="common_btn mb-4 mt-2" type="submit">Update Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="dashboard_content mt-4">
                <div class="wsus__dash_pass_change mt-2">
                    <div class="wsus__dash_pro_area">
                        <h4>password</h4>
                        <form action="{{ route('user.profile.update.password') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row d-flex flex-column">
                                <div class="col-xl-4 col-md-6">
                                    <div class="wsus__dash_pro_single">
                                        <i class="fas fa-unlock-alt"></i>
                                        <input name="current_password" type="password"
                                               placeholder="Current Password">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="wsus__dash_pro_single">
                                        <i class="fas fa-lock-alt"></i>
                                        <input name="password" type="password" placeholder="New Password">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="wsus__dash_pro_single">
                                        <i class="fas fa-lock-alt"></i>
                                        <input name="password_confirmation" type="password"
                                               placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <button class="common_btn" type="submit">Update Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
