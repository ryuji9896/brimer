@extends('layouts.admin')
@section('title','サイト選択')
@section('content')
    <h1>サイト選択</h1>
     <ul>
        @foreach($site_form as $sitedata)
            <li><a href="{{ route('viewCreate' , ['site_id' => $sitedata->id]) }}"><img src="{{ secure_asset('storage/image/site_image/'.$sitedata->site_image_path) }}"></a></li>
        @endforeach
    </ul>
@endsection

