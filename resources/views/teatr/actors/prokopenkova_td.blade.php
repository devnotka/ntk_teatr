<!DOCTYPE html>
<html x-data="{ darkMode: localStorage.getItem('dark') === 'true'}" x-init="$watch('darkMode', val => localStorage.setItem('dark', val))" x-bind:class="{ 'dark': darkMode }" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="{{ $description }}" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<script src="{{ asset('js/app.js') }}" defer></script>
        <title>{{ $title }}</title>
    </head>
	<body :class="{'overflow-hidden': open}" class="bg-white text-gray-700 dark:bg-gray-800 dark:text-gray-100" x-data="{ open: false }">
		<x-teatr.header></x-teatr.header>
		{{ $content }}
		<x-teatr.footer></x-teatr.footer>
	</body>
</html>