@extends('layouts.admin')
@section('title','DBサイトデータの編集')
@section('content')
    <h1>DB用サイトデータ編集画面</h1>
    <form action="{{ route('siteUpdate') }}" method="post" enctype="multipart/form-data">
    
        @csrf
        
        @if (count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
        <ul>
            <ul>
                <li><p>MAP NAME</p></li>
                <li><select name="map_name" value="{{ old('map_name') }}">
                    <option value="{{ $site_form->map_name }}"disabled selected>{{ $map_form->map_name }}(登録している内容)</option>
                    @foreach($maps as $map)
                        <option value="{{ $map->map_name }}">{{ $map->map_name }}</option>
                    @endforeach</select>
                </li>
            </ul>
            <ul>
                <li><p>SITE NAME</p></li>
                <li><select name="site_name">
                    <option value="{{ $site_form->site_name }}"disabled selected>{{ $site_form->site_name }}(登録している内容)</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option></select>
                </li>
            </ul>
             <ul>
                <li><p>IMPACT ID</p></li>
                <li><select name="impact_id">
                    <option value="{{ $site_form->impact_id }}" disabled selected>{{ $site_form->impact_id }}(登録している内容)</option>
                    <option value="1" @if( old('impact_id') === '1' ) selected @endif>1</option>
                    <option value="2" @if( old('impact_id') === '2' ) selected @endif>2</option>
                    <option value="3" @if( old('impact_id') === '3' ) selected @endif>3</option>
                    <option value="4" @if( old('impact_id') === '4' ) selected @endif>4</option>
                    <option value="5" @if( old('impact_id') === '5' ) selected @endif>5</option>
                    <option value="6" @if( old('impact_id') === '6' ) selected @endif>6</option>
                    <option value="7" @if( old('impact_id') === '7' ) selected @endif>7</option>
                    <option value="8" @if( old('impact_id') === '8' ) selected @endif>8</option>
                    <option value="9" @if( old('impact_id') === '9' ) selected @endif>9</option>
                    <option value="10" @if( old('impact_id') === '10' ) selected @endif>10</option>
                    <option value="11" @if( old('impact_id') === '11' ) selected @endif>11</option>
                    <option value="12" @if( old('impact_id') === '12' ) selected @endif>12</option>
                    <option value="13" @if( old('impact_id') === '13' ) selected @endif>13</option>
                    <option value="14" @if( old('impact_id') === '14' ) selected @endif>14</option>
                    <option value="15" @if( old('impact_id') === '15' ) selected @endif>15</option></select>
                </li>
            </ul>
            <ul>
            <li>サイト画像<input type="file" class="site_image" name="site_image" placeholder="サイトの画像を選択"></li>
            <li><img src="{{ secure_asset('storage/image/site_image/' . $site_form->site_image_path) }}"></li>
            <li><input type="hidden" name="id" value="{{ $site_form->id }}"></li>
        </ul>   
        <input type="submit" class="btn btn-primary" value="サイトデータ更新">
    </form>
    @endsection