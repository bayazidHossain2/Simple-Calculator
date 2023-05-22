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
		<form action="{{url('/add_history')}}" method="POST">
		@csrf

		<div class="head">
			<div class="head_text">
				<h2>CASIO</h2>
				<p>fx-991ES PLUS</p>
				<p><i>NATURAL-U.P.A.m.</i></p>
			</div>
			<div class="power"></div>
		</div>
		<div class="display">
			<div class="display-top">
				<p id="math_mode">Math</p>
			</div>
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
				<p class="arrow a-u" onclick="arrowup()"></p>
				<p class="arrow a-l" onclick="arrowleft()"></p>
				<p class="arrow a-r" onclick="arrowright()"></p>
				<p class="arrow a-d" onclick="arrowdown()"></p>
			</div>
			<div class="btnset set-3">
				<input type="button" class="circle_btn cb-1"></input>
				<input type="button" onclick="makeOn()" class="circle_btn cb-2"></input>
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
			<input type="button" onclick="add(7)" value="7"></input>
			<input type="button" onclick="add(8)" value="8"></input>
			<input type="button" onclick="add(value)" value="9"></input>
			<input type="button" onclick="del()" value="DEL" class="colored_btn"></input>
			<input type="button" onclick="ac()" value="AC" class="colored_btn"></input>
			<input type="button" onclick="add(value)" value="4"></input>
			<input type="button" onclick="add(value)" value="5"></input>
			<input type="button" onclick="add(value)" value="6"></input>
			<input type="button" onclick="add('*')" value="x"></input>
			<input type="button" onclick="add(value)" value="/"></input>
			<input type="button" onclick="add(value)" value="1"></input>
			<input type="button" onclick="add(value)" value="2"></input>
			<input type="button" onclick="add(value)" value="3"></input>
			<input type="button" onclick="add(value)" value="+"></input>
			<input type="button" onclick="add(value)" value="-"></input>
			<input type="button" onclick="add(value)" value="0"></input>
			<input type="button" onclick="add(value)" value="."></input>
			<input type="button" onclick="add(value)" value="10^x"></input>
			<input type="button" onclick="add(out.value)" value="Ans"></input>
			<input type="button" onclick="calculate()" value="="></input>
		</div>
	</form>
	</div>
	<div>
		<a href="{{url('/simple_calculator')}}"><h1>Goto Simple Calculator</h1></a>
	</div>
	<script type="text/javascript">
		console.log('work form bottom');
		// var exp = ['12+34','32*2','101-1'];

		var exp = [];
		@foreach($all_history as $history)
			var eq = '{{$history->expression}}';
			console.log('Load from database : '+eq);
			exp.push(eq);
		@endforeach
		var exp_pointer=exp.length;
		console.log(exp_pointer);
		var __pointat=0;
		var __inpsize=0;
		var skip=0;
		function arrowup(){
			console.log('arrow up called');
			if(exp_pointer!=0){
				document.getElementById("in").value = '';
				exp_pointer--;
				__pointat=0;
				__inpsize=0;
				add(exp[exp_pointer]);
			}
		}
		function arrowdown(){
			console.log('arrow up called');
			if(exp_pointer+1!=exp.length){
				document.getElementById("in").value = '';
				exp_pointer++;
				__pointat=0;
				__inpsize=0;
				add(exp[exp_pointer]);
			}
		}
		function arrowleft(){
			console.log('arrow left called');
			let val = document.getElementById("in").value;
			if(__pointat==0){
				return;
			}
			__pointat--;
			if(__pointat+1==__inpsize){
				console.log(val.slice(0,__pointat));
				console.log(val.slice(__pointat,__inpsize));

				document.getElementById("in").value=val.slice(0,__pointat)+' '+val.slice(__pointat,__inpsize);
				skip=1;
				console.log('arrow finish'+document.getElementById("in").value);
			}else{
				console.log(val.slice(0,__pointat));
				console.log(val.slice(__pointat,__pointat+1));
				console.log(val.slice(__pointat+2));

				document.getElementById("in").value=val.slice(0,__pointat)+' '+val.slice(__pointat,__pointat+1)+val.slice(__pointat+2);
				skip=1;
				console.log('arrow finish'+document.getElementById("in").value);
			}

		}
		function arrowright(){
			console.log('arrow right called');
			let val = document.getElementById("in").value;
			if(__pointat==__inpsize){
				return;
			}
			__pointat++;
			if(__pointat==__inpsize){
				console.log('end point found');
				console.log(val.slice(0,__pointat-1));
				console.log(val.slice(__pointat));

				document.getElementById("in").value = val.slice(0,__pointat-1)+val.slice(__pointat)+' ';
				skip=1;
				console.log('arrow finish'+document.getElementById("in").value);
			}else{
				console.log('end point found');
				console.log(val.slice(0,__pointat-1));
				console.log(val.slice(__pointat,__pointat+1));
				console.log(val.slice(__pointat+1));

				document.getElementById("in").value = val.slice(0,__pointat-1)+val.slice(__pointat,__pointat+1)+' '+val.slice(__pointat+1);
				skip=1;
				console.log('arrow finish'+document.getElementById("in").value);
			}
		}


		function sleep(milliseconds) {  
		    return new Promise(resolve => setTimeout(resolve, milliseconds));  
		} 
		
		async function inputTouggle(){
			let touggleTime=500;
			while(true){
				// console.log('in loop');
				if(__pointat==__inpsize){
					await sleep(touggleTime);
					let val = document.getElementById("in").value;
					// console.log(val[0]);
					if(skip==1){
						skip=0;
						continue;
					}
					document.getElementById("in").value = val.toString().slice(0,-1)+' ';
					await sleep(touggleTime);
					val = document.getElementById("in").value;
					if(skip==1){
						skip=0;
						continue;
					}
					document.getElementById("in").value = val.toString().slice(0,-1)+'|';
				}else{
					let val = document.getElementById("in").value;
					// console.log('val : '+val.slice(0,__pointat-1));
					// console.log(val.slice(__pointat-1));
					await sleep(touggleTime);
					if(skip==1){
						skip=0;
						continue;
					}
					document.getElementById("in").value=val.slice(0,__pointat)+'|'+val.slice(__pointat+1);
					await sleep(touggleTime);
					if(skip==1){
						skip=0;
						continue;
					}
					document.getElementById("in").value=val.slice(0,__pointat)+' '+val.slice(__pointat+1);
				}
				

			}
		}
		inputTouggle();
		function del(){
			if(__pointat==0){
				console.log('point at zero.');
			}else{
				let val = document.getElementById("in").value;
				console.log(val.slice(0,__pointat-1));
				console.log(val.slice(__pointat+1));
				document.getElementById("in").value = val.slice(0,__pointat-1)+' '+val.slice(__pointat+1);
				skip=1;
				__pointat--;
				__inpsize--;
				console.log('new val : '+val);
			}
			// inp.value = inp.value.toString().slice(0,-1)
		}
		function ac(){
			__pointat=0;
			__inpsize=0;
			document.getElementById("in").value='';
			skip=1;
		}
		function add(v){
			let val = document.getElementById("in").value;
			console.log(val.slice(0,__pointat));
			console.log(val.slice(__pointat+1));
			console.log('length : '+v.toString().length);
			document.getElementById("in").value = val.slice(0,__pointat)+v+' '+val.slice(__pointat+1);
			skip=1;
			__pointat+=v.toString().length;
			__inpsize+=v.toString().length;
			console.log('new val : '+val);
		}
		function calculate(){
			let val = document.getElementById("in").value;
			console.log(val.slice(0,__pointat));
			console.log(val.slice(__pointat+1));
			try{
				let res = eval(val.slice(0,__pointat)+val.slice(__pointat+1));
				document.getElementById("out").value = res;
			}catch(ex){
				document.getElementById("out").value = ex.toString();
			}
			
		}
	</script>
</body>
</html>