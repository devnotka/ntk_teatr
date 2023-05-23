<!DOCTYPE html>
<html x-data="{ darkMode: localStorage.getItem('dark') === 'true'}" x-init="$watch('darkMode', val => localStorage.setItem('dark', val))" x-bind:class="{ 'dark': darkMode }" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<script src="{{ asset('js/app.js') }}" defer></script>
        <title>Театр драмы</title>
    </head>
    <body :class="{'overflow-hidden': open}" class="dark:bg-gray-800" x-data="{ open: false }">
		<div class="w-full text-gray-700 dark:text-gray-100">
			<div :class="{'w-screen': open, 'w-0': !open}"  class="fixed z-29 h-screen w-0 bg-gray-800 opacity-90 overflow-hidden md:hidden"></div>
			<div :class="{'w-72': open, 'w-0': !open}" class="absolute z-30 transition-all duration-300 ease-in-out bg-white shadow h-screen w-0 overflow-x-hidden md:hidden dark:bg-gray-900">
				<div class="absolute z-30 top-6 left-4 font-bold text-xl tracking-tighter md:hidden">
					Навигация
				</div>
				<div class="absolute z-30 top-6 right-4 md:hidden">
					<button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
						<svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
							<path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" style="display: none"></path>
						</svg>
					</button>
				</div>
				<div class="mx-4 mt-20 mb-4 shadow-inside">
					<nav>
						<a class="block w-100 px-4 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="">
							Афиша
						</a>
						<a class="block w-100 px-4 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="">
							Репертуар
						</a>
						<div class="block w-100 px-2 py-2 my-6 rounded border-2 border-dashed border-gray-700 dark:text-gray-100">
							<span class="absolute -mt-6 px-2 bg-white dark:bg-gray-900">
								Фестивали
							</span>
							<a class="block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="">
								Международный театральный фестиваль <span class="whitespace-nowrap">им. Ф. М. Достоевского</span>
							</a>
							<a class="block w-100 px-2 py-2 mt-2 rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="">
								Международный театральный фестиваль «Театральное вече»
							</a>
						</div>
						<div class="block w-100 px-2 py-2 my-6 rounded border-2 border-dashed border-gray-700 dark:text-gray-100">
							<span class="absolute -mt-6 px-2 bg-white dark:bg-gray-900">
								Информация
							</span>
							<a class="block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="">
								О театре
							</a>
							<a class="block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="">
								Для зрителей
							</a>
							<a class="block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="">
								Как купить билеты?
							</a>
							<a class="block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="">
								Оценка качества услуг
							</a>
						</div>
						<a class="block w-100 px-4 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-indigo-600 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:bg-gray-900" href="">
							Контакты
						</a>
					</nav>
				</div>
			</div>
			<div class="container w-full max-w-7xl mx-auto dark:bg-gray-800">
				<div class="flex flex-col max-w-screen-xl p-5 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
					<div class="flex flex-row items-center justify-between overflow-hidden max-h-10 lg:justify-start">
						<a id="logo" href="/" class="text-lg font-bold tracking-tighter leading-4 text-right transition duration-300 ease-in-out transform translate-y-6 pr-4 lg:pr-8" x-init="setInterval(() => { this.document.getElementById('logo').classList.toggle('-translate-y-6') }, 3000)">
							Новгородский<br/>театр драмы<br/><br/><span class="whitespace-nowrap">имени Ф. М.</span><br/>Достоевского
						</a>
						<div>
						<button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
							<svg x-show="!open" fill="currentColor" class="w-8 h-8" viewBox="0 0 20 20">
								<path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
							</svg>
						</button>
						<button class="rounded-full bg-indigo-100 ml-2 focus:outline-none focus:shadow-outline md:hidden dark:bg-indigo-600" @click="darkMode = !darkMode">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="-2 -2 28 28" stroke="currentColor">
								<path x-show="!darkMode" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
								<path x-show="darkMode" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
							</svg>
						</button>
						</div>
					</div>
					<nav class="hidden items-center pb-4 border-gray-700 border-l-2 transition-transform duration-300 transform sm:flex-col sm:flex-grow md:visible md:pb-0 md:flex md:justify-end md:flex-row lg:pl-2 dark:border-gray-400">
						<a class="px-2 py-2 mt-2 transition duration-300 ease-in-out md:mt-0 hover:text-indigo-600 focus:outline-none focus:shadow-outline" href="#">
							Афиша
						</a>
						<a class="px-2 py-2 mt-2 transition duration-300 ease-in-out md:mt-0 transition duration-300 ease-in-outhover:text-indigo-600 focus:outline-none focus:shadow-outline" href="#">
							Репертуар
						</a>
						<div @click.away="open = false" class="relative" x-data="{ open: false }">
							<button @click="open = !open" class="flex flex-row items-center w-full px-2 py-2 mt-2 text-left transition duration-300 ease-in-out md:w-auto md:inline md:mt-0 hover:text-indigo-600 focus:outline-none focus:shadow-outline">
								<span>Фестивали</span>
								<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 transition-transform duration-300 transform md:mt-0 rotate-0">
										<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
								</svg>
							</button>
							<div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-30 w-full mt-5 origin-top-right shadow-lg md:w-max" style="display: none;">
								<div class="bg-white shadow rounded-b dark:bg-gray-800">
									<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-indigo-600 hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="#">
										Международный театральный фестиваль <span class="whitespace-nowrap">им. Ф. М. Достоевского</span>
									</a>
									<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-indigo-600 hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="#">
										Международный театральный фестиваль «Театральное вече»
									</a>
								</div>
							</div>
						</div>
						<div @click.away="open = false" class="relative" x-data="{ open: false }">
							<button @click="open = !open" class="flex flex-row items-center w-full px-2 py-2 mt-2 text-left transition duration-300 ease-in-out md:w-auto md:inline md:mt-0 hover:text-indigo-600 focus:outline-none focus:shadow-outline">
								<span>Информация</span>
								<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 transition-transform duration-300 transform md:mt-0 rotate-0">
										<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
								</svg>
							</button>
							<div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-30 w-full mt-5 origin-top-right shadow-lg md:w-72" style="display: none;">
								<div class="bg-white shadow rounded-b dark:bg-gray-800">
									<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-indigo-600 hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="#">
										О театре
									</a>
									<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-indigo-600 hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="#">
										Для зрителей
									</a>
									<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-indigo-600 hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="#">
										Как купить билеты?
									</a>
									<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-indigo-600 hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="#">
										Оценка качества услуг
									</a>
								</div>
							</div>
						</div>
						<a class="px-2 py-2 mt-2 md:mt-0 transition duration-300 ease-in-out hover:text-indigo-600 focus:outline-none focus:shadow-outline" href="#">
							Контакты
						</a>
					</nav>
					<div class="px-2">
						<button class="hidden rounded-full bg-indigo-100 focus:outline-none focus:shadow-outline md:block dark:bg-indigo-600" @click="darkMode = !darkMode">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="-2 -2 28 28" stroke="currentColor">
								<path x-show="!darkMode" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
								<path x-show="darkMode" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
							</svg>
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="w-full bg-indigo-600 border-t border-b border-indigo-700 shadow">
			<div class="container w-full max-w-7xl mx-auto">
				<nav class="flex flex-wrap pt-1 pl-1 justify-center items-center text-sm text-white md:justify-start">
					<a class="transition duration-300 ease-in-out bg-indigo-600 px-4 py-1 mr-1 mb-1 rounded-full bg-indigo-700 hover:bg-indigo-800" href="#">
						Пушкинская карта
					</a>
					<a class="transition duration-300 ease-in-out bg-indigo-600 px-4 py-1 mr-1 mb-1 rounded-full bg-indigo-700 hover:bg-indigo-800" href="#">
						День Победы
					</a>
					<a class="transition duration-300 ease-in-out bg-indigo-600 px-4 py-1 mr-1 mb-1 rounded-full bg-indigo-700 hover:bg-indigo-800" href="#">
						Сидим дома
					</a>
				</nav>
			</div>
		</div>
		
		<div class="w-full h-screen"></div>
		
		<div class="w-full border-t shadow bg-gray-100 dark:bg-gray-700 dark:border-gray-900">
			<div class="container w-full max-w-10xl mx-auto">
				<footer>
					<div class="flex flex-wrap gap-10 p-10 text-gray-700 dark:text-white">
						<div class="flex-grow flex-nowrap">
							<span class="block py-2 font-bold uppercase">Навигация</span>
							<div>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Афиша мероприятий
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Репертуар театра
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Гастроли в театре
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Театральные фестивали
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Аренда залов
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Контактная информация
								</a>
							</div>
						</div>
						<div class="flex-grow flex-nowrap">
							<span class="block py-2 font-bold uppercase">О театре</span>
							<div>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									История театра
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									History of theatre
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Актеры театра
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Администрация
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Режиссеры
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Художники спектаклей
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Художественно-постановочная<br/>часть
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Доступная среда
								</a>
							</div>
						</div>
						<div class="flex-grow flex-nowrap">
							<span class="block py-2 font-bold uppercase">Информация</span>
							<div>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									О новой короновирусной инфекции
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Для зрителей
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Памятка при посещении с детьми
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Правила посещения театра
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Как купить билеты?
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Билеты по Пушкинской карте
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Возврат билетов
								</a>
								<a class="block transition duration-300 ease-in-out hover:text-indigo-600 dark:hover:text-indigo-500" href="">
									Оценка качества услуг
								</a>
							</div>
						</div>					
						<div class="flex-grow flex-nowrap">
							<span class="block py-2 font-bold uppercase">Подпишитесь на рассылку</span> 
							<div>
								<div class="mb-2">
									<span class="text-sm text-gray-500">Введите свой адрес электронной почты:</span>
								</div> 
								<div class="relative">
									<input class="w-full transition duration-300 ease-in-out pr-32 rounded border border-indigo-700" type="text" placeholder="username@site.com"> 
									<button class="absolute transition duration-300 ease-in-out w-32 h-full top-0 right-0 bg-indigo-600 text-white rounded-r border border-indigo-700 hover:bg-indigo-700">Подписаться</button>
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
		<div class="w-full bg-indigo-600 border-t border-b border-indigo-700 shadow">
			<div class="container px-10 py-4 w-full max-w-10xl mx-auto">
				<div class="flex flex-wrap justify-between text-white">
					<div class="flex-shrink py-2">
						Новгородский академический театр драмы <span class="whitespace-nowrap">им. Ф. М. Достоевского,</span> {{ date('Y') }}
					</div>
					<div class="flex-shrink">
						<nav class="flex flex-wrap pt-1 pr-1">
							<a class="flex flex-nowrap transition duration-300 ease-in-out bg-indigo-600 px-4 py-1 mr-1 mb-1 rounded-full bg-indigo-700 hover:bg-indigo-800" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" fill="currentColor">
									<path style="fill-rule:nonzero;fill-opacity:1;" d="M 12 2 C 6.488281 2 2 6.488281 2 12 C 2 17.511719 6.488281 22 12 22 C 17.511719 22 22 17.511719 22 12 C 22 6.488281 17.511719 2 12 2 Z M 12 4 C 16.429688 4 20 7.570312 20 12 C 20 16.429688 16.429688 20 12 20 C 7.570312 20 4 16.429688 4 12 C 4 7.570312 7.570312 4 12 4 Z M 6.445312 8.5 C 6.0625 8.5 6 8.6875 6 8.886719 C 6 9.246094 6.300781 11.195312 7.9375 13.4375 C 9.125 15.0625 10.6875 16 12.074219 16 C 12.914062 16 13 15.785156 13 15.453125 L 13 13.964844 C 13 13.566406 13.09375 13.5 13.359375 13.5 C 13.550781 13.5 13.9375 13.625 14.6875 14.5 C 15.550781 15.507812 15.710938 16 16.207031 16 L 17.515625 16 C 17.820312 16 17.996094 15.871094 18.003906 15.625 C 18.003906 15.5625 17.992188 15.488281 17.972656 15.410156 C 17.875 15.125 17.433594 14.421875 16.878906 13.75 C 16.570312 13.378906 16.265625 13.007812 16.128906 12.808594 C 16.03125 12.679688 15.996094 12.589844 16 12.5 C 16.003906 12.40625 16.050781 12.316406 16.125 12.195312 C 16.113281 12.195312 17.804688 9.820312 17.96875 9.019531 C 17.992188 8.945312 18.003906 8.875 18 8.8125 C 17.992188 8.632812 17.867188 8.5 17.574219 8.5 L 16.265625 8.5 C 15.9375 8.5 15.78125 8.699219 15.691406 8.898438 C 15.691406 8.898438 14.878906 10.578125 13.9375 11.6875 C 13.632812 12.007812 13.476562 12 13.3125 12 C 13.222656 12 13 11.894531 13 11.597656 L 13 9.007812 C 13 8.660156 12.914062 8.5 12.632812 8.5 L 10.308594 8.5 C 10.105469 8.5 10 8.660156 10 8.820312 C 10 9.152344 10.449219 9.234375 10.5 10.167969 L 10.5 11.980469 C 10.5 12.421875 10.425781 12.5 10.257812 12.5 C 9.816406 12.5 8.9375 11 8.351562 9.03125 C 8.222656 8.644531 8.097656 8.5 7.765625 8.5 Z M 6.445312 8.5"/>
								</svg>
								<span class="pl-1">
									Вконтакте
								</span>
							</a>
							<a class="flex flex-nowrap transition duration-300 ease-in-out bg-indigo-600 px-4 py-1 mr-1 mb-1 rounded-full bg-indigo-700 hover:bg-indigo-800" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" fill="currentColor">
									<path style="fill-rule:nonzero;fill-opacity:1;" d="M 8 3 C 5.243 3 3 5.243 3 8 L 3 16 C 3 18.757 5.243 21 8 21 L 16 21 C 18.757 21 21 18.757 21 16 L 21 8 C 21 5.243 18.757 3 16 3 L 8 3 z M 8 5 L 16 5 C 17.654 5 19 6.346 19 8 L 19 16 C 19 17.654 17.654 19 16 19 L 8 19 C 6.346 19 5 17.654 5 16 L 5 8 C 5 6.346 6.346 5 8 5 z M 17 6 A 1 1 0 0 0 16 7 A 1 1 0 0 0 17 8 A 1 1 0 0 0 18 7 A 1 1 0 0 0 17 6 z M 12 7 C 9.243 7 7 9.243 7 12 C 7 14.757 9.243 17 12 17 C 14.757 17 17 14.757 17 12 C 17 9.243 14.757 7 12 7 z M 12 9 C 13.654 9 15 10.346 15 12 C 15 13.654 13.654 15 12 15 C 10.346 15 9 13.654 9 12 C 9 10.346 10.346 9 12 9 z"/>
								</svg>
								<span class="pl-1">
									Instagram
								</span>
							</a>
							<a class="flex flex-nowrap transition duration-300 ease-in-out bg-indigo-600 px-4 py-1 mr-1 mb-1 rounded-full bg-indigo-700 hover:bg-indigo-800" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" fill="currentColor">
									<path style="fill-rule:nonzero;fill-opacity:1;" d="M 12 4 C 12 4 5.7455469 3.9999687 4.1855469 4.4179688 C 3.3245469 4.6479688 2.6479687 5.3255469 2.4179688 6.1855469 C 1.9999687 7.7455469 2 12 2 12 C 2 12 1.9999687 16.254453 2.4179688 17.814453 C 2.6479687 18.675453 3.3255469 19.352031 4.1855469 19.582031 C 5.7455469 20.000031 12 20 12 20 C 12 20 18.254453 20.000031 19.814453 19.582031 C 20.674453 19.352031 21.352031 18.674453 21.582031 17.814453 C 22.000031 16.254453 22 12 22 12 C 22 12 22.000031 7.7455469 21.582031 6.1855469 C 21.352031 5.3255469 20.674453 4.6479688 19.814453 4.4179688 C 18.254453 3.9999687 12 4 12 4 z M 12 6 C 14.882 6 18.490875 6.1336094 19.296875 6.3496094 C 19.465875 6.3946094 19.604391 6.533125 19.650391 6.703125 C 19.891391 7.601125 20 10.342 20 12 C 20 13.658 19.891391 16.397875 19.650391 17.296875 C 19.605391 17.465875 19.466875 17.604391 19.296875 17.650391 C 18.491875 17.866391 14.882 18 12 18 C 9.119 18 5.510125 17.866391 4.703125 17.650391 C 4.534125 17.605391 4.3956094 17.466875 4.3496094 17.296875 C 4.1086094 16.398875 4 13.658 4 12 C 4 10.342 4.1086094 7.6011719 4.3496094 6.7011719 C 4.3946094 6.5331719 4.533125 6.3946094 4.703125 6.3496094 C 5.508125 6.1336094 9.118 6 12 6 z M 10 8.5351562 L 10 15.464844 L 16 12 L 10 8.5351562 z"/>
								</svg>
								<span class="pl-1">
									Youtube
								</span>
							</a>
						</nav>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
