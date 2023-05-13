<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="calculator_style.css">
</head>
<body>
	<div class="container"> 
		<form>
		<div class="head">
			<div class="head_text">
				<h2>CASIO</h2>
				<p>fx-991ES PLUS</p>
				<p><i>NATURAL-U.P.A.m.</i></p>
			</div>
			<div class="power"></div>
		</div>
		<div class="display">
			<input type="text" name="inp" id="in">
			<input type="text" name="out" id="out">
		</div>
		<div class="additional_button">
			<div class="btnset set-1">
				<button class="circle_btn cb-1"></button>
				<button class="circle_btn cb-2"></button>
				<button class="btm">CAL</button>
				<button class="btm">in</button>
			</div>
			<div class="btnset set-2">
				<p class="arrow a-1"></p>
				<p class="arrow a-2"></p>
				<p class="arrow a-3"></p>
				<p class="arrow a-4"></p>
			</div>
			<div class="btnset set-3">
				<button class="circle_btn cb-1"></button>
				<button class="circle_btn cb-2"></button>
				<button class="btm">x<sup>-1</sup></button>
				<button class="btm">log<sub>x</sub><sup>y</sup></button>
			</div>
			<div class="btnset set-4">
				<button>a/b</button>
				<button>√</button>
				<button>(-)</button>
				<button>.,,,</button>
				<button>RCL</button>
				<button>ENG</button>
			</div>
			<div class="btnset set-5">
				<button>x<sup>2</sup></button>
				<button>x<sup>x</sup></button>
				<button>hyp</button>
				<button>sin</button>
				<button>(</button>
				<button>)</button>
			</div>
			<div class="btnset set-6">
				<button>log</button>
				<button>ln</button>
				<button>cos</button>
				<button>tan</button>
				<button>S-D</button>
				<button>M+</button>
			</div>
		</div>
		<div class="basic_button">
			<input type="button" onclick="inp.value += value" value="7"></input>
			<input type="button" onclick="inp.value += value" value="8"></input>
			<input type="button" onclick="inp.value += value" value="9"></input>
			<input type="button" onclick="inp.value += value" value="DEL" class="colored_btn"></input>
			<input type="button" onclick="inp.value += value" value="AC" class="colored_btn"></input>
			<input type="button" onclick="inp.value += value" value="4"></input>
			<input type="button" onclick="inp.value += value" value="5"></input>
			<input type="button" onclick="inp.value += value" value="6"></input>
			<input type="button" onclick="inp.value += value" value="x"></input>
			<input type="button" onclick="inp.value += value" value="/"></input>
			<input type="button" onclick="inp.value += value" value="1"></input>
			<input type="button" onclick="inp.value += value" value="2"></input>
			<input type="button" onclick="inp.value += value" value="3"></input>
			<input type="button" onclick="inp.value += value" value="+"></input>
			<input type="button" onclick="inp.value += value" value="-"></input>
			<input type="button" onclick="inp.value += value" value="0"></input>
			<input type="button" onclick="inp.value += value" value="."></input>
			<input type="button" onclick="inp.value += value" value="10^x"></input>
			<input type="button" onclick="inp.value += value" value="Ans"></input>
			<input type="button" onclick="out.value = eval(inp.value)" value="="></input>
	</form>
	</div>
	<script type="text/javascript">
		
	</script>
</body>
</html>