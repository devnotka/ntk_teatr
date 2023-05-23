<!DOCTYPE html>
<html x-data="{ darkMode: (localStorage.getItem('dark') === null) ? 'true' : (localStorage.getItem('dark') === 'true') }" x-init="$watch('darkMode', val => localStorage.setItem('dark', val))" x-bind:class="{ 'dark': darkMode }" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="{{ $description }}" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link href="{{ mix('css/app.css') }}" rel="stylesheet">
		<script src="{{ mix('js/app.js') }}" defer></script>
        <title>{{ $title }}</title>
    </head>
	<body :class="{'overflow-hidden': open}" class="bg-white text-gray-700 dark:bg-gray-800 dark:text-gray-100" x-data="{ open: false }">
		@isset($fon)
			@if($fon == 'potolok')
				<div class="bg-fixed bg-center bg-cover te-potolok dark:te-potolok-dark">
			@elseif($fon == 'zdanie')
				<div class="bg-fixed bg-top bg-cover te-zdanie dark:te-zdanie-dark">
			@endif
		@endisset
					<x-teatr.header></x-teatr.header>
						{{ $content }}
					<x-teatr.footer></x-teatr.footer>
				</div>
		<!-- Pro.culture.ru counter -->
			<script async src="https://culturaltracking.ru/static/js/spxl.js?pixelId=5924" data-pixel-id="5924"></script>
		<!-- /Pro.culture.ru counter -->
		<!-- Yandex.Metrika counter -->
			<script type="text/javascript" >(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");ym(52343599, "init", {clickmap:true,trackLinks:true,accurateTrackBounce:true,webvisor:false});</script>
		<!-- /Yandex.Metrika counter -->
	</body>
</html>