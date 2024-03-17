@extends('layouts.admin');
@section('title','DB用データ保存画面');
@section('content')
    <h1>DB用データ入力画面</h1>
    <form action="{{ route('post_create') }}" method="post"></form>