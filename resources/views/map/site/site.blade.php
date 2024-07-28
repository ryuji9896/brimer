@extends('layouts.admin')
@section('title','サイト選択')
@section('content')
    <h1>サイト選択</h1>
     <ul>
        @if($flag)
            @foreach($site_data as $sitedata)
                <li><a href="{{ route('view' , ['site_id' => $sitedata->id] ) }}"><img src="{{ secure_asset('storage/image/site_image/'.$sitedata->site_image_path) }}"></a></li>
            @endforeach
        @else
            @foreach($site_data as $sitedata)
                <li><a href="{{ route('create' , ['site_id' => $sitedata->id] ) }}"><img src="{{ secure_asset('storage/image/site_image/'.$sitedata->site_image_path) }}"></a></li>
            @endforeach
        @endif
    </ul>
@endsection

