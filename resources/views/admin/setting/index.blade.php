@extends('layouts.admin')

@section('title', 'Site Setting')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        @if(session('message'))
            <div class="alert alert-success mb-3">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ url('admin/settings') }}" method="POST">
            @csrf

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">
                        Website
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Website Name</label>
                            <input type="text" name="website_name" value="{{ $setting->website_name ?? '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Website URL</label>
                            <input type="text" name="website_url" value="{{ $setting->website_url ?? '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Page Title</label>
                            <input type="text" name="page_title" value="{{ $setting->page_title ?? '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Page Description</label>
                            <textarea name="page_description" class="form-control" rows="3">{{ $setting->page_description ?? '' }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Meta Keywords</label>
                            <textarea name="meta_keyword" class="form-control" rows="3">{{ $setting->meta_keyword ?? '' }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="3">{{ $setting->meta_description ?? '' }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">
                        Website - Information
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Address</label>
                            <textarea name="address" class="form-control" rows="3">{{ $setting->address ?? '' }}</textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Phone 1*</label>
                            <input type="phone" name="phone1" value="{{ $setting->phone1 ?? '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Phone no. 2</label>
                            <input type="phone" name="phone2" value="{{ $setting->phone2 ?? '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">email Id 1*</label>
                            <input type="email" name="email1" value="{{ $setting->email1 ?? '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email Id 2</label>
                            <input type="email" name="email2" value="{{ $setting->email2 ?? '' }}" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h3 class="text-white mb-0">
                        Website - Social Media
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Facebook (Optional)</label>
                            <input type="text" name="facebook" value="{{ $setting->facebook ?? '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Twitter (Optional)</label>
                            <input type="text" name="twitter" value="{{ $setting->twitter ?? '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Instagram (Optional)</label>
                            <input type="text" name="instagram" value="{{ $setting->instagram ?? '' }}" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">YouTube (Optional)</label>
                            <input type="text" name="youtube" value="{{ $setting->youtube ?? '' }}" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary text-white">Save Setting</button>
            </div>

        </form>
    </div>
</div>

@endsection
