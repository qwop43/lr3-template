@extends('layouts.app')
@section('content')
    <h1>{{ $title }}</h1>
    <div class="row g-3">
        @foreach($posts as $post)
        <div class="col-md-4">
            <x-post-card :title="$post['title']" :excerpt="$post['excerpt']" :author="$post['author']" :date="$post['date']"/>
        </div>
        @endforeach
    </div>
@endsection
