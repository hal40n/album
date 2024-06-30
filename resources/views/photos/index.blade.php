@extends('layouts.app')

@section('title', 'Photo Album')

@section('content')
<h2 class="text-2xl mb-4">My Photos</h2>
<div class="grid grid-cols-3 gap-4">
    <!-- 写真をここに追加 -->
    <div class="bg-white rounded shadow-md">
        <img src="https://via.placeholder.com/150" alt="Photo" class="w-full h-auto">
    </div>
    <!-- 他の写真も同様に追加 -->
</div>
@endsection
