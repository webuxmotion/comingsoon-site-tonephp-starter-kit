<!DOCTYPE html>
<html lang="en">
<head>
	<title>Coming Soon 6</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/comingsoon/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/comingsoon/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/comingsoon/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/comingsoon/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/comingsoon/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/comingsoon/vendor/countdowntime/flipclock.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/comingsoon/css/util.css">
	<link rel="stylesheet" type="text/css" href="/comingsoon/css/main.css">
<!--===============================================================================================-->
	<link href="/dist/styles.css" rel="stylesheet">

</head>
<body>
	
	
	<div class="bg-img1 size1 overlay1 p-t-24" style="background-image: url('/comingsoon/images/bg01.jpg');">
		<div class="flex-w flex-sb-m p-l-80 p-r-74 p-b-175 respon5">
			<div class="wrappic1 m-r-30 m-t-10 m-b-10">
				<a href="#"><img src="/comingsoon/images/icons/logo.png" alt="LOGO"></a>
			</div>

			<div class="flex-w m-t-10 m-b-10">
				<a href="#" class="size3 flex-c-m how-social trans-04 m-r-6">
					<i class="fa fa-facebook"></i>
				</a>

				<a href="#" class="size3 flex-c-m how-social trans-04 m-r-6">
					<i class="fa fa-twitter"></i>
				</a>

				<a href="#" class="size3 flex-c-m how-social trans-04 m-r-6">
					<i class="fa fa-youtube-play"></i>
				</a>
			</div>
		</div>

		<div class="flex-w flex-sa p-r-200 respon1">
			<div class="p-t-34 p-b-60 respon3">
				<p class="l1-txt1 p-b-10 respon2">
					Our website is
				</p>

				<h3 class="l1-txt2 p-b-45 respon2 respon4">
					Coming Soon
				</h3>

				<div class="cd100"></div>

			</div>

			<div class="bg0 wsize1 bor1 p-l-45 p-r-45 p-t-50 p-b-18 p-lr-15-sm">
				<h3 class="l1-txt3 txt-center p-b-43">
					Newsletter
				</h3>

				<?=$this->component('comingsoon-form')?>

				<p class="s1-txt3 txt-center p-l-15 p-r-15 p-t-25">
					And don???t worry, we hate spam too! You can unsubcribe at anytime.
				</p>
			</div>
		</div>
	</div>

<!--===============================================================================================-->	
	<script src="/comingsoon/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/comingsoon/vendor/bootstrap/js/popper.js"></script>
	<script src="/comingsoon/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/comingsoon/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/comingsoon/vendor/countdowntime/flipclock.min.js"></script>
	<script src="/comingsoon/vendor/countdowntime/moment.min.js"></script>
	<script src="/comingsoon/vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="/comingsoon/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="/comingsoon/vendor/countdowntime/countdowntime.js"></script>
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 35,
			endtimeHours: 18,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});

		
	</script>
<!--===============================================================================================-->
	<script src="/comingsoon/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="/comingsoon/js/main.js"></script>
	<script src="/dist/app.js"></script>

</body>
</html>