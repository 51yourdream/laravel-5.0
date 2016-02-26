@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @@parent

    <p>This is appended to the master sidebar.</p>
@stop


为什么会跑到最前面

测试添加分支


{{time()}}
@section('content')
    <p>This is my body content.</p>
    <link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('') }}" rel="stylesheet" type="text/css">
@stop