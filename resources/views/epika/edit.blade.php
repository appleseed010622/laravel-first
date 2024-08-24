@extends('layout.main_style')
@section('title', 'ditail')


@section('logo')
<img src="{{asset('/assess/img/logo.png')}}" alt=""  class="logo low">
@endsection



@section('main')
        <div class="detail_page">
        
            
            <form method="POST" action="{{ route('update', ['id' => $post->id]) }}">
            @csrf
            @method('POST')
            <div class="container">
                <div class="half_list">
                    <div class="one_input right_match">
                        <label>契約日</label>                        
                        <input type="date" name="contract_date" id="contract_date" value='{{$post->contract_date}}' > 
                    </div>
                    <div class="two_input right_match">
                            <label>お名前</label>                            
                            <div class="inputs">
                                <input type="text" class="first_inp" name="name_front" id="name_front" value='{{$post->name_front}}'>
                                <input type="text" name="name_back" id="name_back" value='{{$post->name_back}}' >
                            </div>
                    </div>
                    <div class="one_input right_match">
                        <label>生年月日</label>                        
                        <input type="date" name="birth" id="birth" value='{{$post->birth}}' > 
                    </div>
                    <div class="one_input right_match">
                        <label>住所</label>                       
                        <input type="text" name="address" id=“address” value='{{$post->address}}' > 
                    </div>
                    <div class="one_input right_match">
                        <label>携帯番号1</label>                        
                        <input type="text" name="mobile1" id="mobile1" value='{{$post->mobile1}}' > 
                    </div>
                    <div class="one_input right_match">
                        <label>工事完了日</label>                        
                        <input type="date" name="construction" id="construction" value='{{$post->construction}}' > 
                    </div>                   
                    <div class="one_input right_match">
                        <label>支払い方法</label>                      
                        <input type="text" name="method" id="method" value='{{$post->method}}' > 
                    </div>
                    <div class="one_input right_match">
                        <label>保証</label>                      
                        <input type="text" name="select" id="select" value='{{$post->select}}' > 
                    </div>
                    <div class="one_input right_match_dif">                    
                        <label for="">保証内容</label>                    
                        <textarea name="warranty" id="warranty" rows="4" cols="35" >{{$post->warranty}}</textarea>
                    </div>
                </div>
                <div class="half_list">
                    <div class="one_input right_match">
                        <label>請負金額</label>                       
                        <input type="text" name="contract" id="contract" value='{{$post->contract}}' > 
                    </div>                    
                    <div class="two_input right_match">
                        <label>フリガナ</label>                       
                        <div class="inputs">
                            <input type="text" class="first_inp" name="furigana_front" id="furigana_front" value='{{$post->furigana_front}}' >
                            <input type="text" name="furigana_back" id="furigana_back" value='{{$post->furigana_back}}' >
                        </div>
                    </div>
                    <div class="one_input right_match">
                        <label>郵便番号</label>                        
                        <input type="text" name="post_code" id="post_code" value='{{$post->post_code}}' > 
                    </div>
                    <div class="one_input right_match">
                        <label>TEL</label>                        
                        <input type="text" name="tel" id="tel" value='{{$post->tel}}' > 
                    </div>
                    <div class="one_input right_match">
                        <label>携帯番号2</label>                        
                        <input type="text" name="mobile2" id="mobile2" value='{{$post->mobile2}}' > 
                    </div>
                    <div class="one_input right_match">
                        <label>入金完了日</label>                        
                        <input type="date" name="payment" id="payment" value='{{$post->payment}}' > 
                    </div>
                    <div class="one_input right_match">
                        <label>請負金額</label>                        
                        <input type="text" name="contract" id="contract" value='{{$post->contract}}' > 
                    </div>
                    <div class="one_input right_match_dif">
                        <label for="">メモ</label>                            
                        <textarea name="memo" id="memo" rows="4" cols="35" {{$post->memo}}>{{$post->memo}}</textarea>
                    </div>
                    <div>        
                        <button type="submit"><img src="{{asset('/assess/img/Ok.png')}}" alt=""></button>
                        <a href="/epika/list"><img src="{{asset('/assess/img/cancel.png')}}" alt="" class="link"></a>
                    </div>
                    </div>
                    
            </div> 
            </form> 
        </div>
@endsection
