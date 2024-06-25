@extends('layouts.admin')
@section('title','TOPページ')
@section('content')
    <h1>TOPページ</h1>
    <ul>
        <li><a href="{{route('map')}}"><h2>定点一覧→</h2></a></li>
        <!--↑転移先をmap_select→view_editに編集中-->
        <li><p>他ユーザーが投稿した定点を閲覧</p></li>
    </ul>
    <ul>
        <li><a href="{{route('viewCreate')}}"><h2>定点投稿→</h2></a></li>
        <form action="{{ route('test') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="flag" value="true">
            <input type="submit" class="btn btn-primary" value="test">
        </form>
        <!--↑転移先をmap→createに編集中-->
        <li><p>自分の定点を他ユーザーと共有</p></li>
        <li><p>※ユーザー登録要</p></li>
    </ul>
@endsection

