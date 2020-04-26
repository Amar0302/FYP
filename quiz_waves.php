<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- ---------------------------- Fonts Css --------------------------------->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
	<!-- ---------------------------- Bootstrap 4 Css --------------------------->
	<style type="text/css">

		.main_quiz_1 *, .main_quiz_1 ::after, .main_quiz_1 ::before {
			box-sizing: border-box;
		}
		.main_quiz_1 {
			margin: 0;
			font-family: 'Open Sans', sans-serif;
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: #212529;
			text-align: left;
			background-color: #fff;
		}
		.main_quiz_1 hr {
			box-sizing: content-box;
			height: 0;
			overflow: visible;
		}
		.main_quiz_1 h4, .main_quiz_1 h5 {
			margin-top: 0;
			margin-bottom: 0.5rem;
		}
		.main_quiz_1 p {
			margin-top: 0;
			margin-bottom: 1rem;
		}
		.main_quiz_1 ol {
			margin-top: 0;
			margin-bottom: 1rem;
		}
		.main_quiz_1 small {
			font-size: 80%;
		}
		.main_quiz_1 a {
			color: #007bff;
			text-decoration: none;
			background-color: transparent;
		}
		.main_quiz_1 a:hover {
			color: #0056b3;
			text-decoration: underline;
		}
		.main_quiz_1 label {
			display: inline-block;
			margin-bottom: 0.5rem;
		}
		.main_quiz_1 button {
			border-radius: 0;
		}
		.main_quiz_1 button:focus {
			outline: 1px dotted;
			outline: 5px auto -webkit-focus-ring-color;
		}
		.main_quiz_1 button, .main_quiz_1 input {
			margin: 0;
			font-family: inherit;
			font-size: inherit;
			line-height: inherit;
		}
		.main_quiz_1 button, .main_quiz_1 input {
			overflow: visible;
		}
		.main_quiz_1 button {
			text-transform: none;
		}
		.main_quiz_1 button {
			-webkit-appearance: button;
		}
		.main_quiz_1 [type=button]:not(:disabled), .main_quiz_1 [type=reset]:not(:disabled), .main_quiz_1 [type=submit]:not(:disabled), .main_quiz_1 button:not(:disabled) {
			cursor: pointer;
		}
		.main_quiz_1 button::-moz-focus-inner {
			padding: 0;
			border-style: none;
		}
		.main_quiz_1 input[type=radio] {
			box-sizing: border-box;
			padding: 0;
		}
		.main_quiz_1 ::-webkit-file-upload-button {
			font: inherit;
			-webkit-appearance: button;
		}
		.main_quiz_1 h4, .main_quiz_1 h5 {
			margin-bottom: 0.5rem;
			font-weight: 500;
			line-height: 1.2;
		}
		.main_quiz_1 h4 {
			font-size: 1.5rem;
		}
		.main_quiz_1 h5 {
			font-size: 1.25rem;
		}
		.main_quiz_1 hr {
			margin-top: 1rem;
			margin-bottom: 1rem;
			border: 0;
			border-top: 1px solid rgba(0, 0, 0, .1);
		}
		.main_quiz_1 small {
			font-size: 80%;
			font-weight: 400;
		}
		.main_quiz_1 .container {
			width: 100%;
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			margin-left: auto;
		}
		@media (min-width: 576px) {
			.main_quiz_1 .container {
				max-width: 540px;
			}
		}
		@media (min-width: 768px) {
			.main_quiz_1 .container {
				max-width: 720px;
			}
		}
		@media (min-width: 992px) {
			.main_quiz_1 .container {
				max-width: 960px;
			}
		}
		@media (min-width: 1200px) {
			.main_quiz_1 .container {
				max-width: 1140px;
			}
		}
		.main_quiz_1 .row {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			margin-right: -15px;
			margin-left: -15px;
		}
		.main_quiz_1 .col-lg-12 {
			position: relative;
			width: 100%;
			padding-right: 15px;
			padding-left: 15px;
		}
		@media (min-width: 992px) {
			.main_quiz_1 .col-lg-12 {
				-ms-flex: 0 0 100%;
				flex: 0 0 100%;
				max-width: 100%;
			}
		}
		.main_quiz_1 .btn {
			display: inline-block;
			font-weight: 400;
			color: #212529;
			text-align: center;
			vertical-align: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			background-color: transparent;
			border: 1px solid transparent;
			padding: 0.375rem 0.75rem;
			font-size: 1rem;
			line-height: 1.5;
			border-radius: 0.25rem;
			transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		}
		@media (prefers-reduced-motion: reduce) {
			.main_quiz_1 .btn {
				transition: none;
			}
		}
		.main_quiz_1 .btn:hover {
			color: #212529;
			text-decoration: none;
		}
		.main_quiz_1 .btn:focus {
			outline: 0;
			box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
		}
		.main_quiz_1 .btn:disabled {
			opacity: 0.65;
		}
		.main_quiz_1 .btn-success {
			color: #fff;
			background-color: #28a745;
			border-color: #28a745;
		}
		.main_quiz_1 .btn-success:hover {
			color: #fff;
			background-color: #218838;
			border-color: #1e7e34;
		}
		.main_quiz_1 .btn-success:focus {
			box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, .5);
		}
		.main_quiz_1 .btn-danger {
			color: #fff;
			background-color: #dc3545;
			border-color: #dc3545;
		}
		.main_quiz_1 .btn-danger:hover {
			color: #fff;
			background-color: #c82333;
			border-color: #bd2130;
		}
		.main_quiz_1 .btn-danger:focus {
			box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, .5);
		}
		.main_quiz_1 .alert {
			position: relative;
			padding: 0.75rem 1.25rem;
			margin-bottom: 1rem;
			border: 1px solid transparent;
			border-radius: 0.25rem;
		}
		.main_quiz_1 .alert-success {
			color: #e67e22;
			background-color: #ffffee;
			border-color: #fdfdce;
		}
		.main_quiz_1 .alert-info {
			color: #0c5460;
			background-color: #d1ecf1;
			border-color: #bee5eb;
		}
		.main_quiz_1 .border {
			border: 1px solid #dee2e6 !important;
		}
		.main_quiz_1 .rounded {
			border-radius: 0.25rem !important;
		}
		.main_quiz_1 .justify-content-center {
			-ms-flex-pack: center !important;
			justify-content: center !important;
		}
		.main_quiz_1 .shadow {
			box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .15) !important;
		}
		.main_quiz_1 .mt-2 {
			margin-top: 0.5rem !important;
		}
		.main_quiz_1 .mr-2 {
			margin-right: 0.5rem !important;
		}
		.main_quiz_1 .mb-2 {
			margin-bottom: 0.5rem !important;
		}
		.main_quiz_1 .mt-5 {
			margin-top: 3rem !important;
		}
		.main_quiz_1 .p-2 {
			padding: 0.5rem !important;
		}
		.main_quiz_1 .p-4 {
			padding: 1.5rem !important;
		}
		.main_quiz_1 .text-center {
			text-align: center !important;
		}

		.main_quiz_1 .question-title {
			font-weight: bold;
			margin-bottom: 10px;
		}
		.main_quiz_1 li input {
			display: none;
		}
		.main_quiz_1 li label {
			cursor: pointer;
			padding: 5px 10px;
			position: relative;
			display: block;
		}
		.main_quiz_1 li input[type="radio"] + label {
			padding: 5px 10px;
			background: #f6f8f8;
			padding-left: 25px;
			color: #a2a2a2;
			border-radius: 2px;
		}
		.main_quiz_1 li input[type="radio"] + label:after {
			content: "\f111";
			font-family: "Font Awesome 5 Free";
			font-weight: 400;
			height: 4px;
			width: 0%;
			color: #a2a2a2;
			position: absolute;
			transition: 0.6s ease all !important;
			top: 0;
			left: 0;
			padding-left: 5px;
			padding-top: 5px;
		}
		.main_quiz_1 li input[type="radio"] + label:hover {
			background: #ffffee;
			color: #e67e22;
		}
		.main_quiz_1 li input[type="radio"] + label:hover:after {
			content: "\f111";
			font-family: "Font Awesome 5 Free";
			font-weight: 800;
			color: #e67e22;
		}
		.main_quiz_1 li input[type="radio"].correct + label {
			padding: 5px 10px;
			background: #d4edda;
			padding-left: 25px;
			color: #155724;
			border-radius: 2px;
		}
		.main_quiz_1 li input[type="radio"].correct + label:after {
			content: "\f00c";
			font-family: "Font Awesome 5 Free";
			font-weight: 900;
			height: 4px;
			width: 0%;
			color: #155724;
			position: absolute;
			transition: 0.6s ease all !important;
			top: 0;
			left: 0;
			padding-left: 5px;
			padding-top: 5px;
		}
		.main_quiz_1 li input[type="radio"].correct + label:hover {
			padding: 5px 10px;
			background: #d4edda;
			padding-left: 25px;
			color: #155724;
			border-radius: 2px;
		}
		.main_quiz_1 li input[type="radio"].correct + label:hover:after {
			content: "\f00c";
			font-family: "Font Awesome 5 Free";
			font-weight: 900;
			height: 4px;
			width: 0%;
			color: #155724;
			position: absolute;
			transition: 0.6s ease all !important;
			top: 0;
			left: 0;
			padding-left: 5px;
			padding-top: 5px;
		}
		.main_quiz_1 li input[type="radio"].wrong + label {
			padding: 5px 10px;
			background: #f8d7da;
			padding-left: 25px;
			color: #721c24;
			border-radius: 2px;
		}
		.main_quiz_1 li input[type="radio"].wrong + label:after {
			content: "\f00d";
			font-family: "Font Awesome 5 Free";
			font-weight: 900;
			height: 4px;
			width: 0%;
			color: #721c24;
			position: absolute;
			transition: 0.6s ease all !important;
			top: 0;
			left: 0;
			padding-left: 5px;
			padding-top: 5px;
		}
		.main_quiz_1 li input[type="radio"].wrong + label:hover {
			padding: 5px 10px;
			background: #f8d7da;
			padding-left: 25px;
			color: #721c24;
			border-radius: 2px;
		}
		.main_quiz_1 li input[type="radio"].wrong + label:hover:after {
			content: "\f00d";
			font-family: "Font Awesome 5 Free";
			font-weight: 900;
			height: 4px;
			width: 0%;
			color: #721c24;
			position: absolute;
			transition: 0.6s ease all !important;
			top: 0;
			left: 0;
			padding-left: 5px;
			padding-top: 5px;
		}
		.main_quiz_1 ol li {
			list-style: none;
		}
		.main_quiz_1 .result-text {
			display: none;
		}
		.main_quiz_1 .result-div {
			display: none;
		}
		.main_quiz_1 ol {
			padding-left: 0px;
		}

		.questions-div {
			display: none;
		}

		.questions-div.active {
			display: block;
		}
button.btn.btn-primary {
    background: #1e5893;
    color: #fff;
}
button.btn.btn-primary:hover {
    background: #164270;
    color: #fff;
}
	</style>
</head>
<body>
	
	<section class="main_quiz_1">
		<div class="container mt-5">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="headings">
						<h4 class="alert alert-success text-center">Vibrations and Waves Quiz
							<br>
							<small><small>(Answer the Questions)</small></small>
						</h4>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="all-content shadow p-4 rounded">
							<div class="heading-text-time">
								<span style="float: right;" id="timer"><i class='far fa-clock'></i> 0:00 mins</span>
								<h5>Choose the correct option.</h5>
							</div>
							<hr>
							<div class="questions-div mt-2 mb-2" style="display: block;">
								<div class="question-title">
									<span class="mr-2">1.</span>Question 01.
								</div>
								<ol data-c="3">
									<li>
										<input type="radio" id="radio_01" name="quiz_01" class="quiz-option" data-c="0" value="a"><label for="radio_01">Option 01 </label>
									</li>
									<li>
										<input type="radio" id="radio_02" name="quiz_01" class="quiz-option" data-c="0" value="b"><label for="radio_02">Option 02 </label>
									</li>
									<li>
										<input type="radio" id="radio_03" name="quiz_01" class="quiz-option" data-c="0" value="c"><label for="radio_03">Option 03</label>
									</li>
									<li>
										<input type="radio" id="radio_04" name="quiz_01" class="quiz-option" data-c="1" value="d"><label for="radio_04">Option 04</label>
									</li>
								</ol>
							</div>

							<div class="questions-div mt-2 mb-2">
								<div class="question-title">
									<span class="mr-2">2.</span>Question 02.
								</div>
								<ol data-c="2">
									<li>
										<input type="radio" id="radio_05" name="quiz_01" class="quiz-option" data-c="0" value="a"><label for="radio_05">Option 01 </label>
									</li>
									<li>
										<input type="radio" id="radio_06" name="quiz_01" class="quiz-option" data-c="0" value="b"><label for="radio_06">Option 02 </label>
									</li>
									<li>
										<input type="radio" id="radio_07" name="quiz_01" class="quiz-option" data-c="1" value="c"><label for="radio_07">Option 03</label>
									</li>
									<li>
										<input type="radio" id="radio_08" name="quiz_01" class="quiz-option" data-c="0" value="d"><label for="radio_08">Option 04</label>
									</li>
								</ol>
							</div>

							<div class="questions-div mt-2 mb-2">
								<div class="question-title">
									<span class="mr-2">3.</span>Question 03.
								</div>
								<ol data-c="3">
									<li>
										<input type="radio" id="radio_09" name="quiz_01" class="quiz-option" data-c="0" value="a"><label for="radio_09">Option 01 </label>
									</li>
									<li>
										<input type="radio" id="radio_10" name="quiz_01" class="quiz-option" data-c="0" value="b"><label for="radio_10">Option 02 </label>
									</li>
									<li>
										<input type="radio" id="radio_11" name="quiz_01" class="quiz-option" data-c="0" value="c"><label for="radio_11">Option 03</label>
									</li>
									<li>
										<input type="radio" id="radio_12" name="quiz_01" class="quiz-option" data-c="1" value="d"><label for="radio_12">Option 04</label>
									</li>
								</ol>
							</div>

							<div class="questions-div mt-2 mb-2">
								<div class="question-title">
									<span class="mr-2">4.</span>Question 04.
								</div>
								<ol data-c="2">
									<li>
										<input type="radio" id="radio_13" name="quiz_01" class="quiz-option" data-c="0" value="a"><label for="radio_13">Option 01 </label>
									</li>
									<li>
										<input type="radio" id="radio_14" name="quiz_01" class="quiz-option" data-c="0" value="b"><label for="radio_14">Option 02 </label>
									</li>
									<li>
										<input type="radio" id="radio_15" name="quiz_01" class="quiz-option" data-c="1" value="c"><label for="radio_15">Option 03</label>
									</li>
									<li>
										<input type="radio" id="radio_16" name="quiz_01" class="quiz-option" data-c="0" value="d"><label for="radio_16">Option 04</label>
									</li>
								</ol>
							</div>

							<div class="questions-div mt-2 mb-2">
								<div class="question-title">
									<span class="mr-2">5.</span>Question 05.
								</div>
								<ol data-c="0">
									<li>
										<input type="radio" id="radio_17" name="quiz_01" class="quiz-option" data-c="1" value="a"><label for="radio_17">Option 01 </label>
									</li>
									<li>
										<input type="radio" id="radio_19" name="quiz_01" class="quiz-option" data-c="0" value="b"><label for="radio_19">Option 02 </label>
									</li>
									<li>
										<input type="radio" id="radio_20" name="quiz_01" class="quiz-option" data-c="0" value="c"><label for="radio_20">Option 03</label>
									</li>
									<li>
										<input type="radio" id="radio_21" name="quiz_01" class="quiz-option" data-c="0" value="d"><label for="radio_21">Option 04</label>
									</li>
								</ol>
							</div>

							<div class="questions-div mt-2 mb-2">
								<div class="question-title">
									<span class="mr-2">6.</span>Question 06.
								</div>
								<ol data-c="1">
									<li>
										<input type="radio" id="radio_22" name="quiz_01" class="quiz-option" data-c="0" value="a"><label for="radio_22">Option 01 </label>
									</li>
									<li>
										<input type="radio" id="radio_23" name="quiz_01" class="quiz-option" data-c="1" value="b"><label for="radio_23">Option 02 </label>
									</li>
									<li>
										<input type="radio" id="radio_24" name="quiz_01" class="quiz-option" data-c="0" value="c"><label for="radio_24">Option 03</label>
									</li>
									<li>
										<input type="radio" id="radio_25" name="quiz_01" class="quiz-option" data-c="0" value="d"><label for="radio_25">Option 04</label>
									</li>
								</ol>
							</div>

							<div class="questions-div mt-2 mb-2">
								<div class="question-title">
									<span class="mr-2">7.</span>Question 07.
								</div>
								<ol data-c="0">
									<li>
										<input type="radio" id="radio_26" name="quiz_01" class="quiz-option" data-c="1" value="a"><label for="radio_26">Option 01 </label>
									</li>
									<li>
										<input type="radio" id="radio_27" name="quiz_01" class="quiz-option" data-c="0" value="b"><label for="radio_27">Option 02 </label>
									</li>
									<li>
										<input type="radio" id="radio_28" name="quiz_01" class="quiz-option" data-c="0" value="c"><label for="radio_28">Option 03</label>
									</li>
									<li>
										<input type="radio" id="radio_29" name="quiz_01" class="quiz-option" data-c="0" value="d"><label for="radio_29">Option 04</label>
									</li>
								</ol>
							</div>

							<div class="questions-div mt-2 mb-2">
								<div class="question-title">
									<span class="mr-2">8.</span>Question 08.
								</div>
								<ol data-c="2">
									<li>
										<input type="radio" id="radio_30" name="quiz_01" class="quiz-option" data-c="0" value="a"><label for="radio_30">Option 01 </label>
									</li>
									<li>
										<input type="radio" id="radio_31" name="quiz_01" class="quiz-option" data-c="0" value="b"><label for="radio_31">Option 02 </label>
									</li>
									<li>
										<input type="radio" id="radio_32" name="quiz_01" class="quiz-option" data-c="1" value="c"><label for="radio_32">Option 03</label>
									</li>
									<li>
										<input type="radio" id="radio_33" name="quiz_01" class="quiz-option" data-c="0" value="d"><label for="radio_33">Option 04</label>
									</li>
								</ol>
							</div>

							<div class="questions-div mt-2 mb-2">
								<div class="question-title">
									<span class="mr-2">9.</span>Question 09.
								</div>
								<ol data-c="0">
									<li>
										<input type="radio" id="radio_34" name="quiz_01" class="quiz-option" data-c="1" value="a"><label for="radio_34">Option 01 </label>
									</li>
									<li>
										<input type="radio" id="radio_35" name="quiz_01" class="quiz-option" data-c="0" value="b"><label for="radio_35">Option 02 </label>
									</li>
									<li>
										<input type="radio" id="radio_36" name="quiz_01" class="quiz-option" data-c="0" value="c"><label for="radio_36">Option 03</label>
									</li>
									<li>
										<input type="radio" id="radio_37" name="quiz_01" class="quiz-option" data-c="0" value="d"><label for="radio_37">Option 04</label>
									</li>
								</ol>
							</div>

							<div class="questions-div mt-2 mb-2 final">
								<div class="question-title">
									<span class="mr-2">10.</span>Question 10.
								</div>
								<ol data-c="2">
									<li>
										<input type="radio" id="radio_38" name="quiz_01" class="quiz-option" data-c="0" value="a"><label for="radio_38">Option 01 </label>
									</li>
									<li>
										<input type="radio" id="radio_39" name="quiz_01" class="quiz-option" data-c="0" value="b"><label for="radio_39">Option 02 </label>
									</li>
									<li>
										<input type="radio" id="radio_40" name="quiz_01" class="quiz-option" data-c="1" value="c"><label for="radio_40">Option 03</label>
									</li>
									<li>
										<input type="radio" id="radio_03" name="quiz_01" class="quiz-option" data-c="0" value="d"><label for="radio_03">Option 04</label>
									</li>
								</ol>
							</div>

							<div class="questions-div mt-2 mb-2 final">
								<div class="question-title text-center">
									<h5 class="alert alert-info text-center">Your Result :  <span class="result">0</span>/10</h5>
									<br>
									<button class="btn btn-primary" onClick="window.location.reload();"><i class="fas fa-sync-alt"></i> Try Again</button>
								</div>

							</div>

							<hr>
							<!-- <div class="result-button text-center mb-2">
								<a href="index.php" class="btn btn-danger">Clear</a>
								<button id="show-answer-button" class="btn btn-success">Show Answer</button>
							</div> -->
							<!-- <div> -->
								<!-- </div> -->
								<h5 class="alert alert-info text-center" id="show-result" style="display: none;">Your Result :  <span class="result">0</span>/10</h5> <br>
								
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>

		<form id="MyForm" style="display: none;">
			<input type="text" name="subject" value="Vibrations and Waves">
			<input type="text" name="userscore" id="userscore">
			<input type="text" name="timetaken" id="timetaken">
			<input type="submit" id="submit_form">
		</form>

		<!-- ---------------------------- JQUERY JS --------------------------------->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<script type="text/javascript">
			var start_quiz = 0;
			var timer = 0;
			var timer_interval = null;
			var time_counter = null;
			$(".quiz-option").click(function() {
				if (start_quiz == 0) {
					start_quiz =1;
					timer_interval = setInterval(function() {
						timer = timer+100;
						time_counter = millisToMinutesAndSeconds(timer);
						$("#timetaken").val(time_counter);
						$("#timer").html("<i class='far fa-clock'></i> "+time_counter);
						timer
					},100)
				}
				var element = $(this);
				var correct_answer = $(this).parent().parent().attr("data-c");
				var selected_answer = $(this).parent().index();

				$(this).parent().parent().children("li").each(function() {
					$(this).children("input").prop("disabled",true);
					if ($(this).index() == correct_answer) {
						$(this).children("input").removeClass("wrong")
						$(this).children("input").addClass("correct")	
					} else {
						$(this).children("input").removeClass("correct")
						$(this).children("input").removeClass("wrong")
					}
				});
				if (correct_answer == selected_answer) {
					element.addClass("correct");
				} else {
					element.addClass("wrong");
				}

				var all_answers = $(".quiz-option.correct").length;
				var wrong_answers = $(".quiz-option.wrong").length;
				var total_correct = all_answers - wrong_answers;
				$(".result").html(total_correct);
				$("#userscore").val(total_correct);

				setTimeout(function() {
					current_element = element.parent().parent().parent();
					if (!current_element.hasClass("final")) {
						current_element.hide();
						current_element.next().fadeIn();
					} else {
						current_element.hide();
						current_element.next().fadeIn();
						clearInterval(timer_interval);
						$("#submit_form").click();
					}
				},800);
			});

			$("#show-result-button").click(function() {
				$("#show-result").show();
				$("#show-result-button").hide();
			});

			$("#show-answer-button").click(function() {
				$(".quiz-option").each(function() {
					var is_correct = $(this).attr("data-c");
					if (is_correct == "1") {
						$(this).prop("checked","checked");
						$(this).addClass("correct");
					}
				});

				$(".questions-div").show();
				$(".questions-div.final").hide();
			});

			function millisToMinutesAndSeconds(millis) {
				var minutes = Math.floor(millis / 60000);
				var seconds = ((millis % 60000) / 1000).toFixed(0);
				return minutes + ":" + (seconds < 10 ? '0' : '') + seconds+" mins";
			}

			$("#MyForm").submit(function(event){
				event.preventDefault();
				$.ajax({
					method: 'POST',
					url: 'save_result.php',
					dataType: "html",
					data : $('#MyForm').serialize(),
					success: function(data){
						// console.log(data);
					},
					error: function(xhr, desc, err){
						console.log(err);
					}
				});
			});

		</script>
	</body>
	</html>