@extends('layouts.app')

@section('content')
    <h1>DB用データ入力画面</h1>
    <form action="{{ route('DBmap_create') }}" method="post">
        <ul>
            <li><input type="text" class="form-control" name="map_name" rows="50" value="{{old('map_name')}}" placeholder="マップの名前を入力(カタカナで50文字以内)"></li>
            <li><input type="file" class="form-controle-file" name="map_img" placeholder="マップの画像を選択"></li>
        </ul>
    </form>
    <form action="{{ route('DBsite_create')}}"></form>
        <ul>
            <li><input type="text" name="time" list="time(s)" placeholder="着弾時間を入力">
                <datalist id="time(s)">
                    <option></option>
                </datalist>
            <li><input type="text" class="form-control" name="site_name" rows="50" value="{{old('site_name')}}" placeholder="サイトの名前を入力(カタカナで50文字以内)"></li>
            <li><input type="file" class="form-controle-file" name="site_img" placeholder="サイトの画像を選択"></li>
        </ul>
    </form>
@endsection
