@extends('layout.main_style')
@section('title', 'ditail')

@section('logo')
<img src="{{asset('/assess/img/logo_first.png')}}" alt=""  class="logo">
@endsection

@section('main')
        <div class="detail_page">                                                       
            <div class="slideshow-container">
                @foreach (json_decode($user->photos) as $photo)
                <!-- <div class="mySlides fade"> -->
                    <img src="{{ asset($photo) }}" style="width:24%">  
                <!-- </div>                   -->
                @endforeach                
                <!-- <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a> -->

             </div>
             <!-- <script>
                let slideIndex = 1;
                showSlides(slideIndex);
                function plusSlides(n) {
                    showSlides(slideIndex += n);
                        }
                function currentSlide(n) {
                    showSlides(slideIndex = n);
                        }
                function showSlides(n) {
                        let i;
                        let slides = document.getElementsByClassName("mySlides");
                        if (n > slides.length) {slideIndex = 1}    
                        if (n < 1) {slideIndex = slides.length}
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";  
                        }
                        slides[slideIndex-1].style.display = "block";  
                    }        
            </script> -->
            <form action="{{ route('edit', ['id' => $user->id]) }}" method="GET">
            <div class="container">
                <div class="half_list">
                    <div class="one_input right_match">
                        <label>契約日</label>                        
                        <input type="date" name="contract_date" id="contract_date" value='{{$user->contract_date}}' readonly > 
                    </div>
                    <div class="two_input right_match">
                            <label>お名前</label>                            
                            <div class="inputs">
                                <input type="text" class="first_inp" name="name_front" id="name_front" value='{{$user->name_front}}'readonly>
                                <input type="text" name="name_back" id="name_back" value='{{$user->name_back}}' readonly>
                            </div>
                    </div>
                    <div class="one_input right_match">
                        <label>生年月日</label>                        
                        <input type="date" name="birth" id="birth" value='{{$user->birth}}' readonly> 
                    </div>
                    <div class="one_input right_match">
                        <label>住所</label>                       
                        <input type="text" name="address" id=“address” value='{{$user->address}}' readonly> 
                    </div>
                    <div class="one_input right_match">
                        <label>携帯番号1</label>                        
                        <input type="text" name="mobile1" id="mobile1" value='{{$user->mobile1}}' readonly> 
                    </div>
                    <div class="one_input right_match">
                        <label>工事完了日</label>                        
                        <input type="date" name="construction" id="construction" value='{{$user->construction}}' readonly> 
                    </div>                   
                    <div class="one_input right_match">
                        <label>支払い方法</label>                      
                        <input type="text" name="method" id="method" value='{{$user->method}}' readonly> 
                    </div>
                    <div class="one_input right_match">
                        <label>保証</label>                      
                        <input type="text" name="select" id="select" value='{{$user->select}}' readonly> 
                    </div>
                    <div class="one_input right_match_dif">                    
                        <label for="">保証内容</label>                    
                        <textarea name="warranty" id="warranty" rows="4" cols="35"  readonly>{{$user->warranty}}</textarea>
                    </div>                                                                                                  
                </div>
                <div class="half_list">
                    <div class="one_input right_match">
                        <label>請負金額</label>                       
                        <input type="text" name="contract" id="contract" value='{{$user->contract}}' readonly> 
                    </div>                    
                    <div class="two_input right_match">
                        <label>フリガナ</label>                       
                        <div class="inputs">
                            <input type="text" class="first_inp" name="furigana_front" id="furigana_front" value='{{$user->furigana_front}}' readonly>
                            <input type="text" name="furigana_back" id="furigana_back" value='{{$user->furigana_back}}' readonly>
                        </div>
                    </div>
                    <div class="one_input right_match">
                        <label>郵便番号</label>                        
                        <input type="text" name="post_code" id="post_code" value='{{$user->post_code}}' readonly> 
                    </div>
                    <div class="one_input right_match">
                        <label>TEL</label>                        
                        <input type="text" name="tel" id="tel" value='{{$user->tel}}' readonly> 
                    </div>
                    <div class="one_input right_match">
                        <label>携帯番号2</label>                        
                        <input type="text" name="mobile2" id="mobile2" value='{{$user->mobile2}}' readonly> 
                    </div>
                    <div class="one_input right_match">
                        <label>入金完了日</label>                        
                        <input type="date" name="payment" id="payment" value='{{$user->payment}}' readonly> 
                    </div>
                    <div class="one_input right_match">
                        <label>請負金額</label>                        
                        <input type="text" name="contract" id="contract" value='{{$user->contract}}' readonly> 
                    </div>
                    
                    <div class="one_input right_match_dif">
                        <label for="">メモ</label>                            
                        <textarea name="memo" id="memo" rows="4" cols="35"  readonly>{{$user->memo}}</textarea>
                    </div>
                    <div>        
                        <a href="/list" ><img src="{{asset('/assess/img/Ok.png')}}" alt="" class="link"></a>
                        <button type="submit"><img src="{{asset('/assess/img/Edit.png')}}" alt=""></button>
                    </div>
                    </div>
                    
            </div> 
            </form> 
        </div>
@endsection
