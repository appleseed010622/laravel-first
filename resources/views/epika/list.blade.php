@extends('layout.main_style')
@section('title', 'list')

@section('css')
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection

@section('js')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection


@section('logo')
<img src="{{asset('/assess/img/logo.png')}}" alt=""  class="logo low">
@endsection


@section('main')
    <div class="list_total">

        <form action="../epikas/search" method="get">
            <div class="find">
                <div class="list_container find_list">
                    <div>
                        <label for="">名前</label>
                        <input type="text" class="name_find" value="{{ old('name_find') }}" placeholder="name" name="name_find" id="name_find">
                    </div>
                    <div>
                        <label for="">生年月日</label>
                        <input type="date" class="birth_find" value="{{ old('birth_find') }}" name="birth_find" id="birth_find" >
                    </div>
                    <div>
                        <label for="">工事完了日</label>
                        <input type="date" class="construction_find" value="{{ old('construction_find') }}" name="construction_find">
                    </div>
                    <input type="submit" value="🔍 検索" class="search_btn">
                </div>
            </div>
        </form>
        <div class="list_container">
            <div class=" page_show">                
                {{ $epikas->total() }} 件中 {{ $epikas->firstItem() }} ~ {{ $epikas->lastItem() }}件を表示
            </div>
        </div>
        <table class="table list_container">
            <thead>
                <tr class="tr_top">
                    <th>番号</th>
                    <th>名 前</th>
                    <th>生年月日</th>
                    <th>工事完了日</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($epikas as $key => $post)
                    <tr>
                        <td><a href="{{ route('epikas.show', $post->id) }}">{{ $key + 1}}</a></td>
                        <td>{{ $post->full_name}}</td>
                        <td>{{ $post->birth }}</td>
                        <td>{{ $post->construction }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination d-flex justify-content-center ">
            @if ($epikas->currentPage() > 1)
                <a href="{{ $epikas->appends(request()->except('page'))->previousPageUrl() }}">&laquo; 前</a>
            @endif

            @for ($i = 1; $i <= $epikas->lastPage(); $i++)
                <a class="{{ ($epikas->currentPage() == $i) ? ' active' : '' }}" href="{{ $epikas->appends(request()->except('page'))->url($i) }}">{{ $i }}</a>
            @endfor

            @if ($epikas->currentPage() < $epikas->lastPage())
                <a href="{{ $epikas->appends(request()->except('page'))->nextPageUrl() }}">次 &raquo;</a>
            @endif
        </div>
        
    </div>
@endsection