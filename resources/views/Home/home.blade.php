<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Calculator</title>
</head>
<body>
    body
    <div class="border">
        <h3 class="header_name">Calculator</h3>
        <input type="text" name="text_input" class="input_field" value="{{$string_value}}">
        @if(session()->has('result'))
            
            <h2>{{session()->get('result')}}</h2>
        @endif

        <div class="buttons">
            <div class="row">
                <a href="" class="button_colored">9</a>
                <a href="" class="button_colored">8</a>
                <a href="" class="button_colored">7</a>
                <a href="{{url('/evaluate',$string_value)}}" class="button_colored">=</a>
            </div>

            <div class="row">
                <a href="" class="button_colored">4</a>
                <a href="" class="button_colored">5</a>
                <a href="" class="button_colored">6</a>
                <a href="" class="button_colored">+</a>
            </div>

            <div class="row">
                <a href="" class="button_colored">1</a>
                <a href="" class="button_colored">2</a>
                <a href="" class="button_colored">3</a>
                <a href="" class="button_colored">x</a>
            </div>

            <div class="row">
                <a href="" class="button_colored">0</a>
                <a href="" class="button_colored_small">.</a>
                <a href="" class="button_colored">+</a>
                <a href="" class="button_colored_small">-</a>
            </div>
            
        </div>

        

    </div>
    
</body>
</html>