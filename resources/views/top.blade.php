@extends('layouts.admin')
@section('title','TOPページ')
@section('content')
    <h1>TOPページ</h1>
    <ul>
        <li><a href="{{route('edit')}}"><h2>定点一覧→</h2></a></li>
        <!--↑転移先をmap→editに編集中-->
        <li><p>他ユーザーが投稿した定点を閲覧</p></li>
    </ul>
    <ul>
        <li><a href="{{route('create')}}"><h2>定点投稿→</h2></a></li>
        <!--↑転移先をmap→createに編集中-->
        <li><p>自分の定点を他ユーザーと共有</p></li>
        <li><p>※ユーザー登録要</p></li>
    </ul>
@endsection

