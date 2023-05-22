<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
        
	<link rel="stylesheet" type="text/css" href="cal_style.css">

</head>
<body>
	<h2> Simple Calculator</h2>
	<!-- <div class="container">
		<input type="button" class="button btn0" value="0">
		<input type="button" class="button btn1" value="1">
		<input type="button" class="button btn2" value="2">
		<input type="button" class="button btn3" value="3">
		<input type="button" class="button btn4" value="4">
		<input type="button" class="button btn5" value="5">
		<input type="button" class="button btn6" value="6">
		<input type="button" class="button btn7" value="7">
	</div> -->
	
	<form class="form" action="{{url('/add_history')}}" method="POST">
		@csrf


	<div class="calculator">
			<div class="row row-1">
				<h4>Calculator</h4>
				<select onchange="inp.value+=drop.value" class="dropdown" name="drop">
					<option selected="" value="">History</option>
					@foreach($all_history as $history)
						<option value="{{$history->expression}}">{{$history->expression}}</option>
					@endforeach
				</select>
			</div>
			 
			<div class="row row-2">
				<input type="text" name="inp" class="inp in">
				<input type="text" name="out" class="inp out">
			</div>

			<div class="row row-3">
				<div class="irow irow-1">
					<input type="button" name="" class="btn btn-0" value="7" onclick="inp.value +='7'">
					<input type="button" name="" class="btn btn-1" value="8" onclick="inp.value +='8'">
					<input type="button" name="" class="btn btn-2" value="9" onclick="inp.value +='9'">
					<input type="button" name="" class="btn btn-r" value="DEL" onclick="inp.value = inp.value.toString().slice(0,-1)">
					<input type="button" name="" class="btn btn-r" value="AC" onclick="inp.value =''">
				</div>

				<div class="irow irow-2">
					<input type="button" name="" class="btn btn-0" value="4" onclick="inp.value +='4'">
					<input type="button" name="" class="btn btn-1" value="5" onclick="inp.value +='5'">
					<input type="button" name="" class="btn btn-2" value="6" onclick="inp.value +='6'">
					<input type="button" name="" class="btn btn-3" value="x" onclick="inp.value +='*'">
					<input type="button" name="" class="btn btn-4" value="/" onclick="inp.value +='/'">
				</div>

				<div class="irow irow-3">
					<input type="button" name="" class="btn btn-0" value="1" onclick="inp.value +='1'">
					<input type="button" name="" class="btn btn-1" value="2" onclick="inp.value +='2'">
					<input type="button" name="" class="btn btn-2" value="3" onclick="inp.value +='3'">
					<input type="button" name="" class="btn btn-3" value="+" onclick="inp.value +='+'">
					<input type="button" name="" class="btn btn-4" value="-" onclick="inp.value +='-'">
				</div>

				<div class="irow irow-4">
					<input type="button" name="" class="btn btn-0" value="0" onclick="inp.value +='0'">
					<input type="button" name="" class="btn btn-1" value="." onclick="inp.value +='.'">
					<input type="button" name="" class="btn btn-p" value="Ans" onclick="inp.value +=out.value">
					<input type="submit" name="" class="btn btn-g" value="SV">
					<input type="button" name="" class="btn btn-b" value="=" onclick="out.value =eval(inp.value)">
				</div>
			</div>
			
		</div>
		<!-- <script type="text/javascript">
			document.getElementsByTagName("select")[0].addEventListener("change",(e)=>{
				console.log(e.target.value);
			});
		</script> -->
	</form> 
	<div>
		<a href="{{url('/')}}"><h1>Goto Advanch Calculator</h1></a>
	</div>
</body>
</html>