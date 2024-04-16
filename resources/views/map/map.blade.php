@extends('layouts.admin')
@section('title','マップ選択')
@section('content')
    <h1>マップ選択</h1>
    <ul>
        @foreach($maps as $map)
            <li><a href="{{ route('site')}}"><img src="{{ secure_asset('storage/image/map_image/'.$map->map_image_path) }}"></a></li>
        @endforeach
    </ul>
@endsection