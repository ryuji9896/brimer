@extends('layouts.admin')
@section('title','DBマップデータ一覧')
@section('content')
    <p><a href="{{ route('DBmapCreate')}}">マップデータ入力ページ</a></p>
    <p><a href="{{ route('DBsiteCreate')}}">サイトデータ入力ページ</a></p>
    <h1>DB用マップデータ一覧画面</h1>
    <tbody>
        @foreach($maps as $map)
            <ul>
                <li>・ID{{ $map->id }}</li>
                <li>-MAP NAME-{{ $map->map_name }}</li>
            </ul>
            <ul>
                <li><a href="{{ route('DBmapEdit', ['id' => $map->id]) }}">編集</a></li>
                <li><a href="{{ route('DBmapDelete', ['id' => $map->id]) }}">削除</a></li>
            </ul>    
        @endforeach
    </tbody>
    
    <h2>DB用サイトデータ一覧画面</h2>
    <tbody>
        @foreach($sites as $site)
            <ul>
                <li>・ID{{ $site->id }}</li>
                <li>-MAP NAME-{{ $site->map_name }}</li>
                <li>-SITE NAME-{{ $site->site_name }}</li>
            </ul>
            <ul>
                <li><a href="{{ route('DBsiteEdit', ['id' => $site->id]) }}">編集</a></li>
                <li><a href="{{ route('DBsiteDelete', ['id' => $site->id]) }}">削除</a></li>
            </ul>
        @endforeach
    </tbody>
@endsection