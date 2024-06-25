@extends('layouts.admin')
@section('title','マップ選択')
@section('content')
    <h1>マップ選択</h1>
    <ul class="d-flex flex-wrap justify-content-between">
        @foreach($maps as $map)
            <li class="w-19"><a href="{{ route('site', ['id' => $map->id , 'flag' => $flag]) }}"><img src="{{ secure_asset('storage/image/map_image/'.$map->map_image_path) }}"></a></li>
        @endforeach
    </ul>
@endsection