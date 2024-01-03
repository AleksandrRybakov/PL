<?php
include('include/global.php');
$title = "Home Health Care | CDPAP | Private Care | ProLife Home Care";
$description = "ProLife Home Care is a NY State Department of Health Licensed Home Care Services Agency (LHCSA) and a NY State Medicaid Lead Fiscal Intermediary administering the Consumer Directed Personal Assistance Program (CDPAP)";
?>
<!doctype html>
<html lang="en">

<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<meta name="title" content="Home Health Care | CDPAP | Private Care | ProLife Home Care">
	<?php include('include/head.php'); ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	<style>
		.row-custom {
			margin: 0;
			width: 100%
		}

		.timeline_feed_imagesDiv {
			position: relative;
			display: inline-block;
			font-size: 0;
		}

		.Image_text_Div {
			position: absolute;
			top: 14rem;
			box-sizing: border-box;
			max-height: calc(100% - 14rem);
			padding: 3rem;
			font-size: 1rem;
			overflow: hidden;
		}

		.box4-link {
			margin: bottom 2.5rem;
		}

		.box4-link span {
			float: right;
		}

		h1 {
			display: none;
		}

		:root {
			--eh--block--module--background-color: gray;
			--eh--block--module--border-color: gray;
			--eh--block--module--text--color: #fff;
			--eh--block--border--color: gray;
			--eh--block--border--radius: 4px;
			--eh--block--spacing--gap: 2rem;
			--eh--block--spacing--gap-small: 1rem;
			--eh--block--spacing--component: 1.5rem;
			--swiper-theme-color: #007aff;
			--star-size: 60px;
		}




		.swiper {
			list-style: none;
			margin-left: auto;
			margin-right: auto;
			overflow: hidden;
			padding: 0;
			position: relative;
			z-index: 1
		}

		.swiper-vertical>.swiper-wrapper {
			flex-direction: column
		}

		.swiper-wrapper {
			box-sizing: content-box;
			display: flex;
			height: 100%;
			position: relative;
			transition-property: transform;
			width: 100%;
			z-index: 1
		}

		.swiper-android .swiper-slide,
		.swiper-wrapper {
			transform: translateZ(0)
		}

		.swiper-pointer-events {
			touch-action: pan-y
		}

		.swiper-pointer-events.swiper-vertical {
			touch-action: pan-x
		}

		.swiper-slide {
			flex-shrink: 0;
			height: 100%;
			position: relative;
			transition-property: transform;
			width: 100%
		}

		.swiper-slide-invisible-blank {
			visibility: hidden
		}

		.swiper-autoheight,
		.swiper-autoheight .swiper-slide {
			height: auto
		}

		.swiper-autoheight .swiper-wrapper {
			align-items: flex-start;
			transition-property: transform, height
		}

		.swiper-backface-hidden .swiper-slide {
			-webkit-backface-visibility: hidden;
			backface-visibility: hidden;
			transform: translateZ(0)
		}

		.swiper-3d,
		.swiper-3d.swiper-css-mode .swiper-wrapper {
			perspective: 1200px
		}

		.swiper-3d .swiper-cube-shadow,
		.swiper-3d .swiper-slide,
		.swiper-3d .swiper-slide-shadow,
		.swiper-3d .swiper-slide-shadow-bottom,
		.swiper-3d .swiper-slide-shadow-left,
		.swiper-3d .swiper-slide-shadow-right,
		.swiper-3d .swiper-slide-shadow-top,
		.swiper-3d .swiper-wrapper {
			transform-style: preserve-3d
		}

		.swiper-3d .swiper-slide-shadow,
		.swiper-3d .swiper-slide-shadow-bottom,
		.swiper-3d .swiper-slide-shadow-left,
		.swiper-3d .swiper-slide-shadow-right,
		.swiper-3d .swiper-slide-shadow-top {
			height: 100%;
			left: 0;
			pointer-events: none;
			position: absolute;
			top: 0;
			width: 100%;
			z-index: 10
		}

		.swiper-3d .swiper-slide-shadow {
			background: rgba(0, 0, 0, .15)
		}

		.swiper-3d .swiper-slide-shadow-left {
			background-image: linear-gradient(270deg, rgba(0, 0, 0, .5), transparent)
		}

		.swiper-3d .swiper-slide-shadow-right {
			background-image: linear-gradient(90deg, rgba(0, 0, 0, .5), transparent)
		}

		.swiper-3d .swiper-slide-shadow-top {
			background-image: linear-gradient(0deg, rgba(0, 0, 0, .5), transparent)
		}

		.swiper-3d .swiper-slide-shadow-bottom {
			background-image: linear-gradient(180deg, rgba(0, 0, 0, .5), transparent)
		}

		.swiper-css-mode>.swiper-wrapper {
			-ms-overflow-style: none;
			overflow: auto;
			scrollbar-width: none
		}

		.swiper-css-mode>.swiper-wrapper::-webkit-scrollbar {
			display: none
		}

		.swiper-css-mode>.swiper-wrapper>.swiper-slide {
			scroll-snap-align: start start
		}

		.swiper-horizontal.swiper-css-mode>.swiper-wrapper {
			scroll-snap-type: x mandatory
		}

		.swiper-vertical.swiper-css-mode>.swiper-wrapper {
			scroll-snap-type: y mandatory
		}

		.swiper-centered>.swiper-wrapper:before {
			content: "";
			flex-shrink: 0;
			order: 9999
		}

		.swiper-centered.swiper-horizontal>.swiper-wrapper>.swiper-slide:first-child {
			-webkit-margin-start: var(--swiper-centered-offset-before);
			margin-inline-start: var(--swiper-centered-offset-before)
		}

		.swiper-centered.swiper-horizontal>.swiper-wrapper: before {
			height: 100%;
			width: var(--swiper-centered-offset-after)
		}

		.swiper-centered.swiper-vertical>.swiper-wrapper>.swiper-slide:first-child {
			-webkit-margin-before: var(--swiper-centered-offset-before);
			margin-block-start: var(--swiper-centered-offset-before)
		}

		.swiper-centered.swiper-vertical>.swiper-wrapper: before {
			height: var(--swiper-centered-offset-after);
			width: 100%
		}

		.swiper-centered>.swiper-wrapper>.swiper-slide {
			scroll-snap-align: center center
		}

		.swiper .swiper-notification {
			left: 0;
			opacity: 0;
			pointer-events: none;
			position: absolute;
			top: 0;
			z-index: -1000
		}

		:root {
			--swiper-navigation-size: 44px
		}

		.swiper-button-next,
		.swiper-button-prev {
			align-items: center;
			color: var(--swiper-navigation-color, var(--swiper-theme-color));
			cursor: pointer;
			display: flex;
			height: var(--swiper-navigation-size);
			justify-content: center;
			margin-top: calc(0px - var(--swiper-navigation-size)/2);
			position: absolute;
			top: 50%;
			width: calc(var(--swiper-navigation-size)/44*27);
			z-index: 10
		}

		.swiper-button-next.swiper-button-disabled,
		.swiper-button-prev.swiper-button-disabled {
			cursor: auto;
			opacity: .35;
			pointer-events: none
		}

		.swiper-button-next.swiper-button-hidden,
		.swiper-button-prev.swiper-button-hidden {
			cursor: auto;
			opacity: 0;
			pointer-events: none
		}

		.swiper-navigation-disabled .swiper-button-next,
		.swiper-navigation-disabled .swiper-button-prev {
			display: none !important
		}

		.swiper-button-next:after,
		.swiper-button-prev:after {
			font-family: swiper-icons;
			font-size: var(--swiper-navigation-size);
			font-variant: normal;
			letter-spacing: 0;
			line-height: 1;
			text-transform: none !important
		}

		.swiper-button-prev,
		.swiper-rtl .swiper-button-next {
			left: 10px;
			right: auto
		}

		.swiper-button-prev:after,
		.swiper-rtl .swiper-button-next:after {
			content: "prev"
		}

		.swiper-button-next,
		.swiper-rtl .swiper-button-prev {
			left: auto;
			right: 10px
		}

		.swiper-button-next:after,
		.swiper-rtl .swiper-button-prev:after {
			content: "next"
		}

		.swiper-button-lock {
			display: none
		}

		.swiper-pagination {
			position: absolute;
			text-align: center;
			transform: translateZ(0);
			transition: opacity .3s;
			z-index: 10
		}

		.swiper-pagination.swiper-pagination-hidden {
			opacity: 0
		}

		.swiper-pagination-disabled>.swiper-pagination,
		.swiper-pagination.swiper-pagination-disabled {
			display: none !important
		}

		.swiper-horizontal>.swiper-pagination-bullets,
		.swiper-pagination-bullets.swiper-pagination-horizontal,
		.swiper-pagination-custom,
		.swiper-pagination-fraction {
			bottom: 10px;
			left: 0;
			width: 100%
		}

		.swiper-pagination-bullets-dynamic {
			font-size: 0;
			overflow: hidden
		}

		.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
			position: relative;
			transform: scale(.33)
		}

		.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active,
		.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
			transform: scale(1)
		}

		.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev {
			transform: scale(.66)
		}

		.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-prev-prev {
			transform: scale(.33)
		}

		.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next {
			transform: scale(.66)
		}

		.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-next-next {
			transform: scale(.33)
		}

		.swiper-pagination-bullet {
			background: var(--swiper-pagination-bullet-inactive-color, #000);
			border-radius: 50%;
			display: inline-block;
			height: var(--swiper-pagination-bullet-height, var(--swiper-pagination-bullet-size, 8px));
			opacity: var(--swiper-pagination-bullet-inactive-opacity, .2);
			width: var(--swiper-pagination-bullet-width, var(--swiper-pagination-bullet-size, 8px))
		}

		button.swiper-pagination-bullet {
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			border: none;
			box-shadow: none;
			margin: 0;
			padding: 0
		}

		.swiper-pagination-clickable .swiper-pagination-bullet {
			cursor: pointer
		}

		.swiper-pagination-bullet:only-child {
			display: none !important
		}

		.swiper-pagination-bullet-active {
			background: var(--swiper-pagination-color, var(--swiper-theme-color));
			opacity: var(--swiper-pagination-bullet-opacity, 1)
		}

		.swiper-pagination-vertical.swiper-pagination-bullets,
		.swiper-vertical>.swiper-pagination-bullets {
			right: 10px;
			top: 50%;
			transform: translate3d(0, -50%, 0)
		}

		.swiper-pagination-vertical.swiper-pagination-bullets .swiper-pagination-bullet,
		.swiper-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
			display: block;
			margin: var(--swiper-pagination-bullet-vertical-gap, 6px) 0
		}

		.swiper-pagination-vertical.swiper-pagination-bullets.swiper-pagination-bullets-dynamic,
		.swiper-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
			top: 50%;
			transform: translateY(-50%);
			width: 8px
		}

		.swiper-pagination-vertical.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet,
		.swiper-vertical>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
			display: inline-block;
			transition: transform .2s, top .2s
		}

		.swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet,
		.swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
			margin: 0 var(--swiper-pagination-bullet-horizontal-gap, 4px)
		}

		.swiper-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic,
		.swiper-pagination-horizontal.swiper-pagination-bullets.swiper-pagination-bullets-dynamic {
			left: 50%;
			transform: translateX(-50%);
			white-space: nowrap
		}

		.swiper-horizontal>.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet,
		.swiper-pagination-horizontal.swiper-pagination-bullets.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
			transition: transform .2s, left .2s
		}

		.swiper-horizontal.swiper-rtl>.swiper-pagination-bullets-dynamic .swiper-pagination-bullet {
			transition: transform .2s, right .2s
		}

		.swiper-pagination-progressbar {
			background: rgba(0, 0, 0, .25);
			position: absolute
		}

		.swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
			background: var(--swiper-pagination-color, var(--swiper-theme-color));
			height: 100%;
			left: 0;
			position: absolute;
			top: 0;
			transform: scale(0);
			transform-origin: left top;
			width: 100%
		}

		.swiper-rtl .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
			transform-origin: right top
		}

		.swiper-horizontal>.swiper-pagination-progressbar,
		.swiper-pagination-progressbar.swiper-pagination-horizontal,
		.swiper-pagination-progressbar.swiper-pagination-vertical.swiper-pagination-progressbar-opposite,
		.swiper-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite {
			height: 4px;
			left: 0;
			top: 0;
			width: 100%
		}

		.swiper-horizontal>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite,
		.swiper-pagination-progressbar.swiper-pagination-horizontal.swiper-pagination-progressbar-opposite,
		.swiper-pagination-progressbar.swiper-pagination-vertical,
		.swiper-vertical>.swiper-pagination-progressbar {
			height: 100%;
			left: 0;
			top: 0;
			width: 4px
		}

		.swiper-pagination-lock {
			display: none
		}

		.eh-block-slider {
			--eh--block--slider--width: 100%;
			--eh--block--slider--gutter: 0px;
			--swiper-pagination-bullet-gap: var(--eh--block--slider--bullet--gap, 0.5rem);
			--swiper-pagination-bullet-horizontal-gap: 5px;
			--swiper-pagination-bullet-active-color: #fff;
			--swiper-pagination-bullet-inactive-color: #333;
			--swiper-pagination-bullet-inactive-opacity: var(--eh--block--slider--bullet--inactive-opacity, 0.7);
			--swiper-pagination-bullet-size: 8px;
			container-name: slider;
			container-type: inline-size;
			list-style: none;
			padding: 0
		}

		.eh-block-slider>li {
			padding: 0
		}

		@media(min-width: 600px) {
			.eh-block-slider {
				--eh--block--slider--width: 370px
			}
		}

		.swiper {
			margin-left: 0;
			margin-right: 0;
			max-width: calc(var(--eh--block--slider--width) + var(--eh--block--slider--gutter)*2);
			overflow: visible;
			padding: 0 var(--eh--block--slider--gutter);
			position: relative
		}

		.swiper-slide,
		.swiper-wrapper {
			align-items: stretch;
			display: flex;
			margin: 0;
			padding: 0
		}

		.swiper-slide {
			-webkit-backface-visibility: hidden;
			backface-visibility: hidden;
			height: auto;
			opacity: 0;
			transition-property: transform, opacity
		}

		.swiper-slide-active {
			opacity: 1
		}

		.swiper-navigation {
			align-items: center;
			bottom: 0;
			display: flex;
			height: 24px;
			justify-content: space-between;
			left: 0;
			position: absolute;
			right: 0;
			top: auto;
			z-index: 2
		}

		.swiper-button-next,
		.swiper-button-prev {
			background: transparent;
			border: 0;
			color: #fff;
			cursor: pointer;
			height: 24px;
			left: auto;
			margin: 0;
			padding: 0;
			position: relative;
			right: auto;
			top: auto;
			transform: none;
			width: 24px;
			z-index: 3
		}

		.swiper-button-next:after,
		.swiper-button-prev:after {
			display: none
		}

		.swiper-button-next:hover,
		.swiper-button-prev:hover {
			opacity: 1
		}

		.swiper-pagination-bullets.swiper-pagination-horizontal {
			align-items: center;
			bottom: auto;
			display: flex;
			gap: var(--eh--block--slider--bullet--gap);
			justify-content: center;
			left: auto;
			margin: 1.25rem;
			position: relative;
			width: auto
		}

		.swiper-pagination-bullet {
			transition: all .3s ease
		}

		.swiper-pagination-bullet-active {
			--swiper-pagination-bullet-size: 12px;
			background-color: var(--swiper-pagination-bullet-active-color)
		}

		.eh-block-slider .swiper {
			margin: 0 auto
		}

		@media(min-width: 1024px) {
			.eh-block-slider .swiper {
				margin: 0
			}
		}

		@container slider (min-width: 510px) {
			.eh-block-slider .swiper {
				--eh--block--slider--width: 370px;
				--eh--block--slider--gutter: 96px;
			}

			.eh-block-slider .swiper .swiper-slide-next,
			.eh-block-slider .swiper .swiper-slide-prev {
				opacity: .5
			}

			.eh-block-slider .swiper .swiper-navigation {
				bottom: auto;
				top: 50%;
				transform: translateY(-50%)
			}
		}

		.eh-block-testimonial {
			--eh--block--testimonial--color: currentColor;
			--eh--block--testimonial--padding: 1rem;
			--eh--block--testimonial--cite--padding: 0.5rem 1rem;
			--eh--block--testimonial--border: 1px solid gray;
			--eh--block--testimonial--border-radius: 20px;
			--eh--block--testimonial--background-color: #fff;
			--eh--block--testimonial--cite--background-color: #fff;
			align-items: flex-start;
			align-items: stretch;
			background-color: var(--eh--block--testimonial--background-color);
			border: var(--eh--block--testimonial--border);
			border-radius: var(--eh--block--testimonial--border-radius);
			color: var(--eh--block--testimonial--color);
			display: flex;
			flex-direction: column;
			margin: 0;
			overflow: hidden;
			position: relative
		}

		.eh-block-testimonial__quote {
			padding: var(--eh--block--testimonial--padding)
		}

		.eh-block-testimonial__quote:before {
			content: "“"
		}

		.eh-block-testimonial__quote:after {
			content: "”"
		}

		.eh-block-testimonial__cite {
			background-color: var(--eh--block--testimonial--cite--background-color);
			padding: var(--eh--block--testimonial--cite--padding)
		}
	</style>
</head>

<body>

	<!-----------------------NavBar------------------------->
	<?php include('include/header.php'); ?>

	<main role="main">
		<section class="jumbotron jumbotron-img">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 mb-lg-0 mb-4">
<img style="width:100%;padding-top:3.75rem;" src="assets/img/logo_new.png" alt="ProLife Home Care Logo">

						<h1>Home Health Care</h1>
					</div>

					<div class="col-lg-6 pt-sm-5 pt-xs-5 pt-md-5" style="text-align: -webkit-center;">
						<h5 class="jumbotron-heading bg-shadow-lg bolder mb-4">Have Questions?</h5>
						<a href="contact.php" class="btn btn-about-contact w-75 " id="about-page-email-button"><span>Contact Us!</span></a>
						<a href="tel:718-232-2777" class="btn btn-about-contact  w-75 " id="about-page-call-button"><span>Call Us!</span></a>
					</div>
				</div>

				<div class="row pt-5">
					<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 about-box bg-shadow-lg">
						<a href="CDPAP.php">
							<div class="card about-card">
								<div class="card-header">
									CDPAP
								</div>
								<div class="card-body">
									<p>
										Through ProLife's CDPAP service, hire relatives or friends as personal aides and get them PAID!
										<span><i class="fa fa-arrow-right"></i></span>
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 about-box">
						<a href="service-inhome.php">
							<div class="card about-card">
								<div class="card-header">
									In-Home Care
								</div>
								<div class="card-body">
									<p>
										Explore ProLife's In-Home Health Care services to choose a program that meets your needs.
										<span><i class="fa fa-arrow-right"></i></span>
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 about-box">
						<a href="service-privatehome.php">
							<div class="card about-card">
								<div class="card-header">
									Private Care
								</div>
								<div class="card-body">
									<p>
										ProLife's private pay care offers specialized services to individuals whose needs are not covered by insurance.
										<span><i class="fa fa-arrow-right"></i></span>
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 about-box">
						<div class="card about-card">
							<div class="card-header">
								Become A
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-lg-12 col-md-6 mb-1 box4-link">
										<a href="contact.php">CDPAP Consumer <span><i class="fa fa-arrow-right"></i></span></a><br>
									</div>

									<div class="col-lg-12 col-md-6 mb-1 box4-link">
										<a href="employment.php">CDPAP Assistant <span><i class="fa fa-arrow-right"></i></span></a><br>
									</div>

									<div class="col-lg-12 col-md-6 mb-1 box4-link">
										<a href="contact.php">Home Care Patient <span><i class="fa fa-arrow-right"></i></span></a><br>
									</div>

									<div class="col-lg-12 col-md-6 box4-link">
										<a href="employment.php">Home Care Aide <span><i class="fa fa-arrow-right"></i></span></a><br>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>


		<!-------------------------Banner-------------------->
		<!-- <div class="page-banner">
	<div class="slide-container">
		<img src="assets/img/Page About Us 2.jpg" alt="About Us">

		<div class="slide-content">
			<h3>New York’s Premier Boutique Agency<br>
			For CDPAP & Home Care Services<br>
			</h3>
			<h4>
			BECOME A ... 
			</h4>
			<div class="d-flex flex-lg-column flex-md-column flex-sm-row  flex-xs-row bd-highlight mb-0">
				<div class="p-1">
					<a href="contact.php" class="btn btn-sm btn-slide text-white">
						Home Care Patient <span class="float-right"><i class="fa fa-arrow-right"></i></span>
					</a>
				</div>
				<div class="p-1">
					<a href="contact.php" class="btn btn-sm btn-slide text-white">
						CDPAP Consumer <span class="float-right"><i class="fa fa-arrow-right"></i></span>
					</a>
				</div>
			</div>
			<div class="d-flex flex-lg-column flex-md-column flex-sm-row  flex-xs-row bd-highlight mb-3">
				<div class="p-1">
					<a href="contact.php" class="btn btn-sm btn-slide text-white">
						CDPAP Aide <span class="float-right"><i class="fa fa-arrow-right"></i></span>
					</a>
				</div>
				<div class="p-1">
					<a href="contact.php" class="btn btn-sm btn-slide text-white">
						Home Care Aide <span class="float-right"><i class="fa fa-arrow-right"></i></span>
					</a>
				</div>
			</div>
			
			<h4>
			HAVE QUESTIONS? CALL US  
			</h4>

			<div class="d-flex flex-column">
				<div class="p-1">
					<a href="contact.php" class="btn btn-sm btn-slide text-white">
						Talk To An Advisor <span class="float-right"><i class="fa fa-arrow-right"></i></span>
					</a>
				</div>
			</div>

		</div>
	</div>
</div> -->

		<!-- <div class="centered">
	<h1 class="font-weight-bolder">Compassion<br>Innovation &<br>Trust</h1>
	<p class="text-dark">ProLife provides quality home health services to residents across the New York City Metropolitan Area. Contact us today to learn how we can leverage our expertly-trained staff, proven approaches, and cutting-edge technology to help your loved one live better.</p>
	<div class="row">
		<div class="col-lg-12 col-sm-12 d-flex d-inline-block p-1">
			<a href="contact.php" class="btn btn-success btn-sm btn-slide text-white">Contact Us</a>
			<a href="contact.php" class="btn btn-outilne-success btn-slide btn-sm text-white">Become Caregiver</a>
		</div>
	</div>
</div> -->

		<!------------------------First Section----------------------->
		<section class=" container">

			<div class="row">
				<div class="col-lg-12 mt-4">
					<p class="page-heading pb-3"><strong>About ProLife Home Care</strong></p>
				</div>
				<div class="col-12">
					<p class="font-para">ProLife Home Care is a woman owned company operating as a New York State Department of Health Licensed Home Care Services Agency (LHCSA) and a New York State Medicaid Lead Fiscal Intermediary administering the Consumer Directed Personal Assistance Program (CDPAP). </p>
					<p class="mt-4 font-para">Doctors & family members throughout the boroughs turn to ProLife’s LHCSA to deliver trusted, professional caregivers & nurses for in-home care administration. Our precise management of care & proven track record of excellence will ensure we deliver outstanding compassionate care to the patients we serve.<br>
						<a href="contact.php" class="botn"> Contact Us</a> to create a personalized care plan
						for you or your loved one.
					</p>
					<p class="my-4 font-para">Patients or Consumers who want more control of their care turn to the ProLife CDPAP program for unparalleled knowledge, service and support for the program.<br><a href="contact.php" class="botn"> Get in touch</a> with a CDPAP specialist to learn more about the program’s benefits, consumer requirements and caregiver eligibility.</p>
				</div>
			</div>
		</section>


		<!------------------------------Second Second------------------------------>
		<section class="container">
			<div class="row sec">
				<div class="col-md-4 pl-md-0 pl-4">
					<div class="row" style="height: 100px;">
						<div class="col-md-4 col-4">
							<img src="assets/img/1.jpg" alt="Medicaid Services" class="img-fluid">
						</div>
						<div class="col-md-6 col-6 ">
							<h3 class="srv-heads mt-3">Medicaid</h3>
						</div>
					</div>
					<p class="abt-col col-10"> For patients on Medicaid we offer the option of conventional home care or CDPAP service which allows relatives or friends to become a caregiver for a salary <span id="dots">...</span><span id="more"> without the need for certifications or licenses. We offer assistance with applying for Medicaid or resolving eligibility issues.</span></p>
					<h5 onclick="myFunction()" id="myBtn" class="botn pt-3 pl-3">Read more</h5>
				</div>
				<div class="col-md-4 mt-md-0 mt-5 pl-md-0 pl-4">
					<div class="row" style="height: 100px;">
						<div class="col-md-4 col-4 ">
							<img src="assets/img/2.jpg" alt="Medicaid Exemptions" class="img-fluid">
						</div>
						<div class="col-md-6 col-6">
							<h3 class="srv-heads mt-2">Medicaid Exemptions</h3>
						</div>
					</div>
					<p class="abt-col col-10">For patients whose income or assets may be too high to be Medicaid eligible, we furnish specialist consultations & provide assistance with obtaining Medicaid <span id="dotss">...</span><span id="moree">through exemptions such as Pooled Income Trusts & Spousal Budgeting. For our patients, we also help to resolve any existing Medicaid codes or issues.</span></p>
					<h5 onclick="myFunctionn()" id="myBtnn" class="botn pt-3 pl-3">Read More</h5>
				</div>
				<div class="col-md-4 mt-md-0 mt-5 pl-md-0 pl-4">
					<div class="row" style="height: 100px;">
						<div class="col-md-4 col-4 ">
							<img src="assets/img/3.png" alt="Talk To An Advisor" class="img-fluid">
						</div>
						<div class="col-md-6 col-6">
							<h3 class="srv-heads mt-2">Talk To An Advisor</h3>
						</div>
					</div>
					<p class="abt-col col-10">Reach out to a ProLife Home Care team member to perform a custom evaluation of your health and living circumstances to determine a plan of care specific to your needs.<br><a href="tel:718-232-2777"><button type="button" class="btn-sm btnn btn-outline-success mt-4 p-md-2 p-1">Talk Now</button></a></p>

				</div>
			</div>
		</section>
		<section class="container-fluid review-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="google-review-content">
							<h2 style="font-family: 'Golos Text', sans-serif; font-size: 32px; font-weight: 600; color: #fff;">
								New Yorkers rely on ProLife<br />
								for top-tier home care services.
							</h2>
							<p style="font-family: 'Golos Text', sans-serif; font-size: 20px;margin-bottom:0;margin-top: 2rem;">
								Your opinion matters!
							</p>
							<p style="font-family: 'Golos Text', sans-serif; font-size: 20px;">
								We thrive on reviews to grow the <br />
								ProLife Home Care Community
							</p>
							<p style="font-family: 'Golos Text', sans-serif; font-size: 20px;">
								<a href="https://g.page/r/CS98pnMX4VlbEBM/review" target="_blank" style="color: #fff; text-decoration: underline;">Leave a Review</a>
							</p>
							<?php
							// Replace YOUR_API_KEY with your own API key
							$api_key = 'AIzaSyDpezGAmpx7rEj_YnaaoRTHWXIib0hBYI0';

							// Replace YOUR_PLACE_ID with the ID of your business on Google Places
							$place_id = 'ChIJVeSMUANFwokRL3ymcxfhWVs';

							// Set up the URL for the API request
							$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$place_id&fields=name,rating,reviews,user_ratings_total&key=$api_key";

							// Send the API request and get the response
							$response = file_get_contents($url);

							// Parse the JSON response into a PHP array
							$data = json_decode($response, true);

							// Get the name, rating, and reviews for the business
							$name = $data['result']['name'];
							$rating = $data['result']['rating'];
							$reviews = $data['result']['reviews'];
							$count_reviews = $data['result']['user_ratings_total'];
							?>
							<div style="height:20px" aria-hidden="true" class="spacer"></div>
							<div class="google-star-rating">

								<div class="Stars" style="--rating: <?php echo $rating; ?>;" aria-label="Rating of this product is 2.3 out of 5.">
								</div>

								<p style="font-size: 20px; font-weight: 600; color: #fff; margin-bottom: 10px;">
									<?php echo $rating; ?> <span style="font-weight: 500;">Stars</span> | <a href="https://www.google.com/maps/place/PROLIFE+HOME+CARE,+INC./@40.5997142,-73.9965698,17z/data=!3m1!5s0x89c245083fe68fbf:0x1a760c5ae5b25ab!4m8!3m7!1s0x89c24503508ce455:0x5b59e11773a67c2f!8m2!3d40.5997142!4d-73.9965698!9m1!1b1!16s%2Fg%2F11c7031vcn" target="_blank" style="color: #fff;"><?php echo $count_reviews; ?> <span style="font-weight: 500;">Reviews</span></a>
								</p>

							</div>
						</div>
					</div>
					<div class=" col-md-6">
						<div class="google-content-right">
							<div class="eh-block-slider">
								<div class="swiper swiper--coverflow">
									<ul class="wp-block-eh-block-slider swiper-wrapper">
										<?php foreach ($reviews as $review) : ?>
											<li class="swiper-slide">
												<blockquote class="wp-block-eh-block-testimonial eh-block-testimonial">
													<p class="eh-block-testimonial__quote"><?php echo $review['text']; ?></p>
													<cite class="eh-block-testimonial__cite">
														<img src='<?php echo $review['profile_photo_url']; ?>' style="height: 42px; width: 42px; border-radius: 42px; margin-right: 5px;" />
														<?php echo $review['author_name']; ?>
													</cite>
												</blockquote>
											</li>
										<?php endforeach; ?>
									</ul>
									<div class="swiper-navigation"><button type="button" class="swiper-button-prev"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" aria-hidden="true">
												<path d="M12,0 C18.627417,0 24,5.372583 24,12 C24,18.627417 18.627417,24 12,24 C5.372583,24 0,18.627417 0,12 C0,5.372583 5.372583,0 12,0 Z M19.175,4.823 C16.6269737,2.18274021 12.8523436,1.12323432 9.3025537,2.05189007 C5.75276381,2.98054582 2.98054582,5.75276381 2.05189007,9.3025537 C1.12323432,12.8523436 2.18274021,16.6269737 4.823,19.175 C7.72524167,22.0803711 12.0922162,22.9506572 15.8865117,21.3798263 C19.5904668,19.8463961 22.0361488,16.2816989 22.1498941,12.292618 L22.1540397,12 L22.1493677,11.6637854 C22.0706699,9.09115206 21.0087811,6.64117543 19.175,4.823 Z M14.0080514,5.44644466 C14.4000272,5.54680926 14.7065517,5.85216608 14.8084116,6.24375588 C14.9102716,6.63534569 14.7913892,7.05135895 14.498,7.33 L9.888,12.009 L14.613,16.688 C14.822479,16.8946967 14.9403998,17.1767127 14.9403998,17.471 C14.9403998,17.7652873 14.822479,18.0473033 14.613,18.254 C14.1770996,18.6865612 13.4739004,18.6865612 13.038,18.254 L7.538,12.733 C7.11827984,12.3127839 7.10286903,11.6369098 7.503,11.198 L12.923,5.761 C13.2005192,5.46654947 13.6160757,5.34608005 14.0080514,5.44644466 Z" fill="currentColor"></path>
											</svg></button><button type="button" class="swiper-button-next"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" aria-hidden="true">
												<path d="M12,0 C18.627417,0 24,5.372583 24,12 C24,18.627417 18.627417,24 12,24 C5.372583,24 0,18.627417 0,12 C0,5.372583 5.372583,0 12,0 Z M19.177,4.825 C16.2747583,1.91962893 11.9077838,1.04934285 8.11348829,2.62017373 C4.31919282,4.1910046 1.84529821,7.89339712 1.84596044,12 C1.83845106,14.6946122 2.9114893,17.2797735 4.825,19.177 C7.3730263,21.8172598 11.1476564,22.8767657 14.6974463,21.9481099 C18.2472362,21.0194542 21.0194542,18.2472362 21.9481099,14.6974463 C22.8767657,11.1476564 21.8172598,7.3730263 19.177,4.825 Z M10.962,5.746 L16.462,11.267 C16.8817202,11.6872161 16.897131,12.3630902 16.497,12.802 L11.077,18.239 C10.7994808,18.5334505 10.3839243,18.6539199 9.99194857,18.5535553 C9.59997284,18.4531907 9.29344831,18.1478339 9.19158835,17.7562441 C9.08972839,17.3646543 9.20861085,16.948641 9.502,16.67 L14.112,11.991 L9.387,7.312 C9.17752098,7.10530329 9.05960016,6.82328726 9.05960016,6.529 C9.05960016,6.23471274 9.17752098,5.95269671 9.387,5.746 C9.82290037,5.31343877 10.5260996,5.31343877 10.962,5.746 Z" fill="currentColor"></path>
											</svg></button></div>
									<div class="swiper-pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!--------------------Footer------------------->
	<?php include('include/footer.php'); ?>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="assets/js/abt.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
	<script>
		const swiper = new Swiper('.swiper', {
			effect: 'coverflow',
			loop: 1,
			loopAdditionalSlides: 1,
			slidesPerView: 1,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev"
			},
			pagination: {
				el: ".swiper-pagination",
				type: "bullets",
				clickable: 1
			},
			coverflowEffect: {
				rotate: 0,
				stretch: 70,
				depth: 200,
				modifier: 3,
				slideShadows: 0
			},
		});
	</script>

</body>

</html>