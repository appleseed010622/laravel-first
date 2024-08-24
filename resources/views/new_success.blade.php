<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assess/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assess/css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container_new_success">
        <div class="new_sign">
            <div class="success_msg">
                <img src="{{asset('/assess/img/success_mark.png')}}" alt="" class="success_mark">
                <p class="success_title"><b>Success</b></p>
                <p class="description_msg">正確に登録されました。</p>
                <button type="button" onclick="location.href='/'">O K</button>
            </div>           
        </div>
    </div>
</body>
</html>