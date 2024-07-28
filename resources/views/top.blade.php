@extends('layouts.admin')
@section('title','TOPページ')
@section('content')
    <h1>TOPページ</h1>
    <ul>
        <li><a href="{{ route('mapView') }}">閲覧</a></li>
        <li><p>他ユーザーが投稿した定点を閲覧</p></li>
    </ul>
    <ul>
        <li><a href="{{ route('mapPost') }}">投稿</a></li>
        <li><p>自分の定点を他ユーザーと共有</p></li>
        <li><p>※ユーザー登録要</p></li>
    </ul>
@endsection

