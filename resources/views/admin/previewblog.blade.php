@extends('admin.layout')
@section('title', $blog->name)
@section('breadcrumb', $blog->name)
@push('styles')
<style>
    .categories-box {
        width: 50%;
        max-height: 150px;
        overflow-y: auto;
        border: 1px solid #d5d5d5;
        padding: 15px;
    }
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content')
<section>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h2 class="mb-3">{{ $blog->name }}</h2> 

                        <div class="text-muted small mb-4">
                            @foreach($categories as $category)
                                <span>{{ $category->name }}</span>{{ !$loop->last ? ',' : '' }}
                            @endforeach
                        </div>

                        <div class="image-row mb-4">
                            <img id="imagePreview" src="{{ asset($blog->blogimage) }}" alt="Image Preview" class="img-fluid">
                        </div>

                        <p class="lead">{!! $blog->description !!}</p>

                        <div class="text-muted small mt-4">
                            <strong>Published on:</strong> {{ $blog->created_at->format('F d, Y') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@push('scripts')
@endpush
