@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Slider</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-8 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Create Slider</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.slider.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Banner</label>
                                        <input type="file" class="form-control" name="banner" id="banner">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Type</label>
                                        <input type="text" class="form-control" name="type" id="type"
                                               value="{{old('type')}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" id="title"
                                               value="{{old('title')}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Starting Price</label>
                                        <input type="text" class="form-control" name="starting_price"
                                               id="starting_price" value="{{old('starting_price')}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Button URL</label>
                                        <input type="text" class="form-control" name="btn_url" id="btn_url"
                                               value="{{old('btn_url')}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Serial</label>
                                        <input type="text" class="form-control" name="serial" id="serial"
                                               value="{{old('serial')}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputStatus">Status</label>
                                        <select id="inputStatus" class="form-control" name="status">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
