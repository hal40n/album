@extends('layouts.app')

@section('title', 'Photo Album')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
    @foreach ($photos as $photo)
    <div class="hover-up bg-white rounded shadow-md overflow-hidden">
        <img src="{{ $photo->file_path }}" alt="{{ $photo->caption }}" class="w-full h-48 object-cover">
    </div>
    @endforeach
    {{ $photos->links() }}
</div>
@endsection