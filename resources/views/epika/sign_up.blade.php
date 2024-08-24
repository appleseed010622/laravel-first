@extends('layout.main_style')
@section('title', 'sign_up')
@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection



@section('logo')
<img src="{{asset('/assess/img/logo.png')}}" alt=""  class="logo low">
@endsection


@section('main')
<div class="sign_up_page">
    <img src="{{asset('/assess/img/world-2.png')}}" alt="" class="back_alpha">
    <div class="container">
        <div class="title">
            <h1>新 規 登 録</h1>
        </div>
        <form method="POST" action="{{ route('epikas.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="main">
                <div class="one_input right_match">
                    <div class="label_must">
                        <label for="">契約日</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must">
                    </div>
                    <div class="input_error_group">
                        <input type="date" name="contract_date" value="{{ old('contract_date') }}" id="contract_date" class="form-control @error('contract_date') is-invalid @enderror" placeholder="">
                        @error('contract_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>                     
                </div> 
                               
                <div class="two_input right_match">
                    <div class="label_must">
                        <label for="">お名前</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must">
                    </div>
                    <div class="input_error_group">
                        <div class="inputs">
                            <input type="text" name="name_front" id="name_front" value="{{ old('name_front') }}" class="first_inp form-control @error('name_front') is-invalid @enderror" placeholder="山本" >
                            <input type="text" name="name_back" id="name_back" value="{{ old('name_back') }}" class="form-control @error('name_back') is-invalid @enderror" placeholder="太郎" >
                        </div>
                        @error('contract_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>                
                <div class="two_input right_match">
                    <div class="label_must">
                        <label for="">フリガナ</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must">
                    </div>
                    <div class="input_error_group">
                        <div class="inputs">
                            <input type="text"  name="furigana_front" id="furigana_front" value="{{ old('furigana_front') }}" class="first_inp form-control @error('furigana_front') is-invalid @enderror" placeholder="やまもと" >
                            <input type="text" name="furigana_back" id="furigana_back" value="{{ old('furigana_back') }}" class="form-control @error('furigana_back') is-invalid @enderror" placeholder="たろ" >
                        </div>
                        @error('contract_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="one_input right_match">
                    <div class="label_must">
                        <label for="">生年月日</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must">
                    </div>
                    <div class="input_error_group">
                        <input type="date" name="birth" id="birth" value="{{ old('birth') }}" class="form-control @error('birth') is-invalid @enderror"> 
                        @error('contract_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="one_input right_match">
                    <div class="label_must">
                        <label for="">郵便番号</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must">
                    </div>
                    <div class="input_error_group">
                        <input type="text" name="post_code" id="post_code" value="{{ old('post_code') }}" class="form-control @error('post_code') is-invalid @enderror"> 
                        @error('contract_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="one_input right_match">
                    <div class="label_must">
                        <label for="">住所</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must">
                    </div>
                    <div class="input_error_group">
                    <input type="text" name="address" id=“address” value="{{ old('address') }}" class="form-control @error('address') is-invalid @enderror"> 
                        @error('contract_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="one_input right_match">
                    <div class="label_must">
                        <label for="">TEL</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must">
                    </div>
                    <div class="input_error_group">
                        <input type="tel" name="tel" id="tel" value="{{ old('tel') }}" placeholder="123-45-678" class="form-control @error('tel') is-invalid @enderror" > 
                        @error('contract_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="one_input right_match">
                    <div class="label_must">
                        <label for="">携帯番号1</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must">
                    </div>
                    <div class="input_error_group">
                        <input type="tel" name="mobile1" id="mobile1" value="{{ old('mobile1') }}" placeholder="123-45-678" class="form-control @error('mobile1') is-invalid @enderror" > 
                        @error('contract_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="one_input right_match">
                    <div class="label_must">
                        <label for="">携帯番号2</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must" style="opacity:0">
                    </div>
                    <div class="input_error_group">
                        <input type="tel" name="mobile2" id="mobile2" value="{{ old('mobile2') }}" placeholder="123-45-678" class="form-control @error('mobile2') is-invalid @enderror"> 
                       
                    </div>
                </div>
                <div class="one_input right_match">
                    <div class="label_must">
                        <label for="">工事完了日</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must">
                    </div>
                    <div class="input_error_group">
                        <input type="date" name="construction" id="construction" value="{{ old('construction') }}" class="form-control @error('construction') is-invalid @enderror"> 
                        @error('contract_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="one_input right_match">
                    <div class="label_must">
                        <label for="">入金完了日</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must">
                    </div>
                    <div class="input_error_group">
                        <input type="date" name="payment" id="payment" value="{{ old('payment') }}" class="form-control @error('payment') is-invalid @enderror"> 
                        @error('contract_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="one_input right_match">
                    <div class="label_must">
                        <label for="">支払い方法</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must">
                    </div>
                    <div class="input_error_group">
                        <select name="method" id="method" value="{{ old('method') }}" class="form-control-1 @error('method') is-invalid @enderror">
                            <option value="">選ぶ</option>                        
                            <option value="現金">現金</option>
                            <option value="クレジット">クレジット</option>                                                
                        </select> 
                        @error('contract_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="one_input right_match">
                    <div class="label_must">
                        <label for="">請負金額</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must">
                    </div>
                    <div class="input_error_group">
                        <input type="text" name="contract" id="contract" value="{{ old('contract') }}" class="form-control @error('contract') is-invalid @enderror"> 
                        @error('contract_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="two_input right_match">
                    <div class="label_must">
                        <label for="">保証</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must">
                    </div>
                    <div class="input_error_group">
                        <select name="select" id="select" value="{{ old('select') }}" class="form-control-1 @error('select') is-invalid @enderror">
                            <option value="">選ぶ</option>                        
                            <option value="あり">あり</option>
                            <option value="なし">なし</option>                                                
                        </select>
                        @error('contract_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>
                </div>
                <div class="one_input right_match_dif">
                    <div class="label_must">
                        <label for="">保証内容</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must" style="opacity:0">
                    </div>
                    <div class="input_error_group">
                        <textarea name="warranty" id="warranty" rows="4" cols="43" value="{{ old('warranty') }}" class="form-control-1 @error('warranty') is-invalid @enderror"></textarea>
                        
                    </div>
                </div>
                <div class="one_input right_match_dif">
                    <div class="label_must ">
                        <label for="">メモ</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must" style="opacity:0">
                    </div>
                    <div class="input_error_group">
                        <textarea name="memo" id="memo" rows="4" cols="43" value="{{ old('memo') }}" class="form-control-1 @error('memo') is-invalid @enderror"></textarea>
                       
                    </div>
                </div>
                <div class="one_input right_match">
                    <div class="label_must">
                        <label for="">画像</label>
                        <img src="{{asset('/assess/img/must.png')}}" alt="" class="must">
                    </div>
                    <div class="input_error_group">
                        <input type="file" name="photos[]" id="photos" multiple class="form-control @error('photos') is-invalid @enderror"> 
                        @error('contract_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="btn_sub">
                <button type="submit" class="submit_btn">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection