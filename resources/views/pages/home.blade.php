@extends('layout')

@section('header')
	<header class="is-fixed">
		<a id="cd-logo" href="/"><img src="img/logo.png" alt="image"></a>
		<nav id="cd-top-nav">
		    <!-- <ul> 
		        <li><a href="index.html">Home</a></li>
		        <li><a href="#0">Register</a></li>
		        <li><a href="#0">Login</a></li>
		    </ul> -->
		</nav>
		<!-- Menu trigger (menu button) -->
		<a id="cd-menu-trigger" href="#0"><span class="cd-menu-icon"></span></a>
	</header>
@stop

@section('content')
	
   @include('home-sections.intro')

   @include('home-sections.topbar')

   @include('home-sections.whoweare')
   
   @include('home-sections.blog')
   
   @include('home-sections.blog2')

   @include('home-sections.whatdoing')

   @include('home-sections.video')
   
   @include('home-sections.quote')

   @include('home-sections.faq')

   @include('home-sections.contacts')

@stop