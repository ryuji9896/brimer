@extends('layouts.admin')
@section('title','DBマップデータ一覧')
@section('content')
    <h1>DB用マップデータ一覧画面</h1>
    <tbody>
        @foreach($maps as $map)
            <ul>
                <li>・ID{{ $map->id }}</li>
                <li>-MAP NAME-{{ $map->map_name }}</li>
            </ul>
        @endforeach
    </tbody>