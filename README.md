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
	<form class="form">
	<div class="calculator">
			<div class="row row-1">
				<h4>Calculator</h4>
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
					<input type="button" name="" class="btn btn-g" value="SV">
					<input type="button" name="" class="btn btn-b" value="=" onclick="out.value =eval(inp.value)">
				</div>
			</div>
			
		</div>
	</form> 
</body>
</html>




<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
"# Simple-Calculator" 
