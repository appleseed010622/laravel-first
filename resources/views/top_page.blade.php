@extends('layout.main_style')
@section('title', 'index')


@section('main')

        <div class="top_page">
            <div class="container_top_page">
            <div class="left back">
                <img src="{{asset('/assess/img/Left.png')}}" alt="">
                <div class="btn">
                    <input class="sign_up zoom" onclick="location.href='/sign_up'" type="button" value="新規登録"/>
                    <input class="list_btn zoom" onclick="location.href='/list'" type="button" value="一 覧"/>
                </div>
            </div>
            <div class="right back">
                <img src="{{asset('/assess/img/Right.png')}}" alt="">
                <div class="btn">
                    <input class="sign_up zoom" onclick="location.href='/epika/sign_up'" type="button" value="新規登録"/>
                    <input class="list_btn zoom" onclick="location.href='/epika/list'" type="button" value="一 覧"/>
                </div>
            </div>
            </div>
        </div>
@endsection