@extends('layouts.admin')
@section('title','DBデータ追加')
@section('content')
    <h1>DB用データ入力画面</h1>
    
    <form action="{{ route('site_add') }}" method="post" enctype="multipart/form-data">
    
        @csrf
        
        @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    
        <ul>
            <li><input type="text" class="form-control" name="site_name" rows="50" value="{{old('site_name')}}" placeholder="サイトの名前を入力(カタカナで50文字以内)"></li>
            <li><input type="file" class="site_image" name="site_image" placeholder="サイトの画像を選択"></li>
        </ul>   
        <input type="submit" class="btn btn-primary" value="サイトデータを投稿">
    </form>
    
    <form action="{{ route('map_add') }}" method="post" enctype="multipart/form-data">
    
        @csrf
        
        @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    
        <ul>
            <li><input type="text" class="form-control" name="map_name" rows="50" value="{{old('map_name')}}" placeholder="マップの名前を入力(カタカナで50文字以内)"></li>
            <li><input type="file" class="map_image" name="map_image" placeholder="マップの画像を選択"></li>
        </ul>   
        <input type="submit" class="btn btn-primary" value="マップデータを投稿">
    </form>
@endsection
