@extends('layouts.admin')
@section('title','マップ選択')
@section('content')
    <h1>マップ選択</h1>
    <ul class="d-flex flex-wrap justify-content-between">
        @if($flag)
            @foreach($maps as $map)
                <li class="w-19"><a href="{{ route('siteView', ['id' => $map->id]) }}"><img src="{{ secure_asset('storage/image/map_image/'.$map->map_image_path) }}"></a></li>
            @endforeach
        @else
            @foreach($maps as $map)
                <li class="w-19"><a href="{{ route('sitePost', ['id' => $map->id]) }}"><img src="{{ secure_asset('storage/image/map_image/'.$map->map_image_path) }}"></a></li>
            @endforeach
        @endif
    </ul>
@endsection