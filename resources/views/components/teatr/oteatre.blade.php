<div class="sticky z-1 top-4">
	<div class="pl-8">
		<h2 class="uppercase">
			О театре
		</h2>
		<!--
		<nav class="mt-4">
			<a class="{{ Request::routeIs('about') ? 'text-white bg-indigo-600' : 'bg-gray-100 dark:bg-gray-800' }} block w-100 px-4 py-3 mt-2 transition-all duration-300 ease-in-out rounded border hover:text-white hover:bg-indigo-700 dark:hover:text-white dark:hover:bg-indigo-700 dark:border-gray-900 dark:hover:border-gray-700" href="{{ route('about') }}">
				История театра
			</a>
			<a class="{{ Request::routeIs('history') ? 'text-white bg-indigo-600' : 'bg-gray-100 dark:bg-gray-800' }} block w-100 px-4 py-3 mt-2 transition-all duration-300 ease-in-out rounded border hover:text-white hover:bg-indigo-700 dark:hover:text-white dark:hover:bg-indigo-700 dark:border-gray-900 dark:hover:border-gray-700" href="{{ route('history') }}">
				History of theatre
			</a>
			<a class="{{ Request::routeIs(['actors', 'actors.*']) ? 'text-white bg-indigo-600' : 'bg-gray-100 dark:bg-gray-800' }} block w-100 px-4 py-3 mt-2 transition-all duration-300 ease-in-out rounded border hover:text-white hover:bg-indigo-700 dark:hover:text-white dark:hover:bg-indigo-700 dark:border-gray-900 dark:hover:border-gray-700" href="{{ route('actors') }}">
				Актеры театра
			</a>
			<a class="{{ Request::routeIs(['administration']) ? 'text-white bg-indigo-600' : 'bg-gray-100 dark:bg-gray-800' }} block w-100 px-4 py-3 mt-2 transition-all duration-300 ease-in-out rounded border hover:text-white hover:bg-indigo-700 dark:hover:text-white dark:hover:bg-indigo-700 dark:border-gray-900 dark:hover:border-gray-700" href="{{ route('administration') }}">
				Администрация
			</a>
			<a class="{{ Request::routeIs(['producers']) ? 'text-white bg-indigo-600' : 'bg-gray-100 dark:bg-gray-800' }} block w-100 px-4 py-3 mt-2 transition-all duration-300 ease-in-out rounded border hover:text-white hover:bg-indigo-700 dark:hover:text-white dark:hover:bg-indigo-700 dark:border-gray-900 dark:hover:border-gray-700" href="{{ route('producers') }}">
				Режиссеры
			</a>
			<a class="{{ Request::routeIs(['craftsmans']) ? 'text-white bg-indigo-600' : 'bg-gray-100 dark:bg-gray-800' }} block w-100 px-4 py-3 mt-2 transition-all duration-300 ease-in-out rounded border hover:text-white hover:bg-indigo-700 dark:hover:text-white dark:hover:bg-indigo-700 dark:border-gray-900 dark:hover:border-gray-700" href="{{ route('craftsmans') }}">
				Художники спектаклей
			</a>
			<a class="{{ Request::routeIs(['artistic']) ? 'text-white bg-indigo-600' : 'bg-gray-100 dark:bg-gray-800' }} block w-100 px-4 py-3 mt-2 transition-all duration-300 ease-in-out rounded border hover:text-white hover:bg-indigo-700 dark:hover:text-white dark:hover:bg-indigo-700 dark:border-gray-900 dark:hover:border-gray-700" href="{{ route('artistic') }}">
				Художественно-постановочная часть
			</a>
			<a class="{{ Request::routeIs('accessible') ? 'text-white bg-indigo-600' : 'bg-gray-100 dark:bg-gray-800' }} block w-100 px-4 py-3 mt-2 transition-all duration-300 ease-in-out rounded border hover:text-white hover:bg-indigo-700 dark:hover:text-white dark:hover:bg-indigo-700 dark:border-gray-900 dark:hover:border-gray-700" href="{{ route('accessible') }}">
				Доступная среда
			</a>
		</nav>
		-->
		<nav class="mt-4 text-lg">
			<a class="{{ Request::routeIs('about') ? 'text-indigo-600 border-indigo-600' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="{{ route('about') }}">
				История театра
			</a>
			<a class="{{ Request::routeIs('history') ? 'text-indigo-600 border-indigo-600' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="{{ route('history') }}">
				History of theatre
			</a>
			<a class="{{ Request::routeIs(['actors', 'actors.*']) ? 'text-indigo-600 border-indigo-600' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="{{ route('actors') }}">
				Актеры театра
			</a>
			<a class="{{ Request::routeIs(['administration']) ? 'text-indigo-600 border-indigo-600' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="{{ route('administration') }}">
				Администрация
			</a>
			<a class="{{ Request::routeIs(['producers']) ? 'text-indigo-600 border-indigo-600' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="{{ route('producers') }}">
				Режиссеры
			</a>
			<a class="{{ Request::routeIs(['craftsmans']) ? 'text-indigo-600 border-indigo-600' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="{{ route('craftsmans') }}">
				Художники спектаклей
			</a>
			<a class="{{ Request::routeIs(['artistic']) ? 'text-indigo-600 border-indigo-600' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="{{ route('artistic') }}">
				Художественно-постановочная часть
			</a>
			<a class="{{ Request::routeIs('accessible') ? 'text-indigo-600 border-indigo-600' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="{{ route('accessible') }}">
				Доступная среда
			</a>
		</nav>
	</div>
</div>