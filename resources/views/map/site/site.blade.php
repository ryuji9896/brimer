@extends('layouts.admin')
@section('title','サイト選択')
@section('content')
    <h1>サイト選択</h1>
     <ul>
        @foreach($sites as $site)
            <li><a href="{{ route('viewCreate')}}"><img src="{{ secure_asset('storage/image/site_image/'.$site->site_image_path) }}"></a></li>
        @endforeach
    </ul>
@endsection

