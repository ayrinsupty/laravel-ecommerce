@extends('layouts.app')

@section('title', 'All Categories')

@section('content')

<div class="py-3 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4">Explore Our Categories</h4>
                 <div class="underline mb-4"></div>
            </div>
            @forelse ($categories as $category)
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="category-card shadow-sm rounded">
                        <a href="{{ url('/collections/'. $category->slug) }}" class="text-decoration-none">
                            <div class="category-card-img position-relative">
                                <img src="{{ $category->image ? asset($category->image) : asset('images/default-category.png') }}" class="w-100 rounded-top" alt="{{ $category->name }}">
                            </div>
                            <div class="category-card-body text-center p-3">
                                <h5 class="text-white">{{ $category->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-md-12">
                    <h5 class="text-center">No Categories Available!</h5>
                </div>
            @endforelse
        </div>
    </div>
</div>

@endsection
