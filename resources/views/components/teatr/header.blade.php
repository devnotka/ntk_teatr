<div class="w-full bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-100">
	<div :class="{'w-screen': open, 'w-0': !open}"  class="fixed z-30 h-screen w-0 bg-gray-800 opacity-90 overflow-hidden md:hidden"></div>
	<div :class="{'w-72': open, 'w-0': !open}" class="absolute z-30 transition-all duration-300 ease-in-out bg-white shadow h-screen w-0 overflow-x-hidden md:hidden dark:bg-gray-900">
		<div class="sticky z-30 top-0 shadow bg-white dark:bg-gray-900">
			<div class="py-6 pl-4 font-bold text-xl tracking-tighter md:hidden">
				Навигация
			</div>
			<div class="absolute z-30 top-6 right-4 md:hidden">
				<button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
					<svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
						<path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" style="display: none"></path>
					</svg>
				</button>
			</div>
		</div>
		<div class="mx-4 mt-4 mb-4 shadow-inside">
			<nav>
				<div class="block w-100 px-2 py-2 my-6 rounded border-2 border-dashed border-gray-700 dark:text-gray-100">
					<span class="absolute -mt-6 px-2 bg-white dark:bg-gray-900">
						Афиша
					</span>
					<a class="{{ Request::routeIs('afisha') ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('afisha') }}">
						Вся афиша
					</a>
					<a class="{{ Request::routeIs('teatr') ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('afisha.variant', [ 'variant' => 'teatr' ]) }}">
						Постановки театра
					</a>
					<a class="{{ Request::routeIs('gastroli') ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('afisha.variant', [ 'variant' => 'gastroli' ]) }}">
						Гастроли в театре
					</a>
				</div>
				<a class="{{ Request::routeIs('repertuar') ? 'text-tegold border-tegold' : 'border-gray-700' }} block w-100 px-4 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 hover:border-tegold hover:text-tegold" href="{{ route('repertuar') }}">
					Репертуар
				</a>
				<div class="block w-100 px-2 py-2 my-6 rounded border-2 border-dashed border-gray-700 dark:text-gray-100">
					<span class="absolute -mt-6 px-2 bg-white dark:bg-gray-900">
						Фестивали
					</span>
					<a class="{{ Request::routeIs('fmdfest') ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('fmdfest') }}">
						Международный театральный фестиваль <span class="whitespace-nowrap">Ф. М. Достоевского</span>
					</a>
					<a class="{{ Request::routeIs('vechefest') ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('vechefest') }}">
						Международный театральный фестиваль «Театральное вече»
					</a>
				</div>
				<div class="block w-100 px-2 py-2 my-6 rounded border-2 border-dashed border-gray-700 dark:text-gray-100">
					<span class="absolute -mt-6 px-2 bg-white dark:bg-gray-900">
						О театре
					</span>
					<a class="{{ Request::routeIs('about') ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('about') }}">
						История театра
					</a>
					<a class="{{ Request::routeIs('history') ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('history') }}">
						History of theatre
					</a>
					<a class="{{ Request::routeIs('zemlya-novgorodskaya') ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('zemlya-novgorodskaya') }}">
						Деятели театра Новгородской земли
					</a>
					<a class="{{ Request::routeIs('smi') ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('smi') }}">
						Пресса о театре
					</a>
					<a class="{{ Request::routeIs(['actors', 'actors.*']) ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('actors') }}">
						Актеры театра
					</a>
					<a class="{{ Request::routeIs(['administration']) ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('administration') }}">
						Администрация
					</a>
					<a class="{{ Request::routeIs(['producers', 'producers.*']) ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('producers') }}">
						Режиссеры
					</a>
					<a class="{{ Request::routeIs(['craftsmans', 'craftsmans.*']) ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('craftsmans') }}">
						Художники спектаклей
					</a>
					<a class="{{ Request::routeIs(['artistic']) ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('artistic') }}">
						Художественно-постановочная часть
					</a>
					<a class="{{ Request::routeIs('accessible') ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('accessible') }}">
						Доступная среда
					</a>
				</div>
				<div class="block w-100 px-2 py-2 my-6 rounded border-2 border-dashed border-gray-700 dark:text-gray-100">
					<span class="absolute -mt-6 px-2 bg-white dark:bg-gray-900">
						Ещё
					</span>
					<a class="{{ Request::routeIs('information') ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('information') }}">
						Информация для зрителей
					</a>
					<a class="{{ Request::routeIs('howbuytickets') ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('howbuytickets') }}">
						Как купить билеты?
					</a>
					<a class="{{ Request::routeIs('refundtickets') ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('refundtickets') }}">
						Возврат билетов
					</a>
					<a class="{{ Request::is('afisha/pushcard') ? 'text-tegold border-tegold' : '' }} block w-100 px-2 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('afisha.variant', [ 'variant' => 'pushcard' ]) }}">
						Билеты по Пушкинской карте
					</a>
				</div>
				<a class="{{ Request::routeIs('contacts') ? 'text-tegold border-tegold' : '' }} block w-100 px-4 py-2 mt-2 transition-all duration-300 ease-in-out rounded border-2 border-gray-700 hover:border-tegold hover:text-tegold" href="{{ route('contacts') }}">
					Контакты
				</a>
			</nav>
		</div>
	</div>
	<div class="container w-full max-w-10xl mx-auto dark:bg-gray-800">
		<x-teatr.fedor_header_left_cits></x-teatr.fedor_header_left_cits>
		<x-teatr.fedor_header_right_cits></x-teatr.fedor_header_right_cits>
		<div class="flex flex-col max-w-screen-xl px-4 py-3 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
			<div class="flex flex-row items-center justify-between overflow-hidden max-h-14 lg:justify-start">
				<a id="logo" href="/" class="text-lg font-bold tracking-tighter leading-4 text-right transition duration-300 ease-in-out transform translate-y-6 pr-4 lg:pr-6" x-init="setInterval(() => { this.document.getElementById('logo').classList.toggle('-translate-y-8') }, 3000)">
					Новгородский<br/>академический<br/>театр драмы<br/><br/>
					<span class="whitespace-nowrap">имени Ф. М.</span><br/>Достоевского
				</a>
				<div>
				<button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
					<svg x-show="!open" fill="currentColor" class="w-8 h-8" viewBox="0 0 20 20">
						<path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
					</svg>
				</button>
				<button class="rounded-full bg-amber-200 ml-2 focus:outline-none focus:shadow-outline md:hidden dark:bg-tegold" @click="darkMode = !darkMode">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="-2 -2 28 28" stroke="currentColor">
						<path x-show="!darkMode" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
						<path x-show="darkMode" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
					</svg>
				</button>
				</div>
			</div>
			<nav class="hidden z-30 items-center pb-4 border-gray-700 border-l-2 transition-transform duration-300 transform sm:flex-col sm:flex-grow md:visible md:pb-0 md:flex md:justify-end md:flex-row lg:pl-2 dark:border-gray-400">
				<div @click.away="open = false" class="relative" x-data="{ open: false }">
					<button @click="open = !open" class="flex flex-row items-center w-full px-2 py-2 mt-2 text-left transition duration-300 ease-in-out md:w-auto md:inline md:mt-0 hover:text-tegold focus:outline-none focus:shadow-outline">
						<span>Афиша</span>
						<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 transition-transform duration-300 transform md:mt-0 rotate-0">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
						</svg>
					</button>
					<div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-30 w-full mt-5 origin-top-right shadow-lg md:w-max" style="display: none;">
						<div class="bg-white shadow rounded-b dark:bg-gray-800">
							<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-tegold hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="{{ route('afisha') }}">
								Вся афиша
							</a>
							<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-tegold hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="{{ route('afisha.variant', [ 'variant' => 'teatr' ]) }}">
								Постановки театра
							</a>
							<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-tegold hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="{{ route('afisha.variant', [ 'variant' => 'gastroli' ]) }}">
								Гастроли в театре
							</a>
						</div>
					</div>
				</div>
				<a class="px-2 py-2 mt-2 transition duration-300 ease-in-out md:mt-0 hover:text-tegold focus:outline-none focus:shadow-outline" href="{{ route('repertuar') }}">
					Репертуар
				</a>
				<div @click.away="open = false" class="relative" x-data="{ open: false }">
					<button @click="open = !open" class="flex flex-row items-center w-full px-2 py-2 mt-2 text-left transition duration-300 ease-in-out md:w-auto md:inline md:mt-0 hover:text-tegold focus:outline-none focus:shadow-outline">
						<span>Фестивали</span>
						<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 transition-transform duration-300 transform md:mt-0 rotate-0">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
						</svg>
					</button>
					<div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-30 w-full mt-5 origin-top-right shadow-lg md:w-max" style="display: none;">
						<div class="bg-white shadow rounded-b dark:bg-gray-800">
							<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-tegold hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="{{ route('fmdfest') }}">
								Международный театральный фестиваль <span class="whitespace-nowrap">Ф. М. Достоевского</span>
							</a>
							<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-tegold hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="{{ route('vechefest') }}">
								Международный театральный фестиваль «Театральное вече»
							</a>
						</div>
					</div>
				</div>
				<div @click.away="open = false" class="relative" x-data="{ open: false }">
					<button @click="open = !open" class="flex flex-row items-center w-full px-2 py-2 mt-2 text-left transition duration-300 ease-in-out md:w-auto md:inline md:mt-0 hover:text-tegold focus:outline-none focus:shadow-outline">
						<span>Ещё</span>
						<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 transition-transform duration-300 transform md:mt-0 rotate-0">
								<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
						</svg>
					</button>
					<div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-30 w-full mt-5 origin-top-right shadow-lg md:w-72" style="display: none;">
						<div class="bg-white shadow rounded-b dark:bg-gray-800">
							<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-tegold hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="{{ route('about') }}">
								О театре
							</a>
							<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-tegold hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="{{ route('zemlya-novgorodskaya') }}">
								Деятели театра Новгородской земли
							</a>
							<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-tegold hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="{{ route('smi') }}">
								Пресса о театре
							</a>
							<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-tegold hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="{{ route('information') }}">
								Информация для зрителей
							</a>
							<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-tegold hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="{{ route('howbuytickets') }}">
								Как купить билеты?
							</a>
							<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-tegold hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="{{ route('refundtickets') }}">
								Возврат билетов
							</a>
							<a class="block px-4 py-2 mt-2 leading-5 md:mt-0 transition duration-300 ease-in-out rounded hover:text-tegold hover:bg-gray-100 focus:outline-none focus:shadow-outline dark:hover:bg-gray-900" href="{{ route('afisha.variant', [ 'variant' => 'pushcard' ]) }}">
								Билеты по Пушкинской карте
							</a>
						</div>
					</div>
				</div>
				<a class="px-2 py-2 mt-2 md:mt-0 transition duration-300 ease-in-out hover:text-tegold focus:outline-none focus:shadow-outline" href="{{ route('contacts') }}">
					Контакты
				</a>
			</nav>
			<div class="px-2">
				<button class="hidden rounded-full bg-amber-200 focus:outline-none focus:shadow-outline md:block dark:bg-tegold" @click="darkMode = !darkMode">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="-2 -2 28 28" stroke="currentColor">
						<path x-show="!darkMode" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
						<path x-show="darkMode" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
					</svg>
				</button>
			</div>
		</div>
	</div>
</div>
<div class="w-full bg-tegold border-t border-b border-yellow-600 shadow">
	<div class="container w-full max-w-7xl mx-auto md:px-2">
		<nav class="flex flex-wrap pt-1 pl-1 justify-center items-center text-sm text-white md:justify-start">
			<a class="{{ Request::is('afisha/pushcard') ? 'bg-slate-600' : 'bg-yellow-600 hover:bg-slate-600' }} transition duration-300 ease-in-out px-4 py-1 mr-1 mb-1 rounded-full" href="{{ route('afisha.variant', [ 'variant' => 'pushcard' ]) }}">
				Пушкинская карта
			</a>
			<a class="{{ Request::is('afisha/premiers') ? 'bg-slate-600' : 'bg-yellow-600 hover:bg-slate-600' }} transition duration-300 ease-in-out px-4 py-1 mr-1 mb-1 rounded-full" href="{{ route('afisha.variant', [ 'variant' => 'premiers' ]) }}">
				Премьеры
			</a>
			<a class="{{ Request::is('afisha/gastroli') ? 'bg-slate-600' : 'bg-yellow-600 hover:bg-slate-600' }} transition duration-300 ease-in-out px-4 py-1 mr-1 mb-1 rounded-full" href="{{ route('afisha.variant', [ 'variant' => 'gastroli' ]) }}">
				Гастроли в театре
			</a>
			<!--
			<a class="{{ Request::is('zemlya-novgorodskaya') ? 'bg-slate-600' : 'bg-yellow-600 hover:bg-slate-600' }} transition duration-300 ease-in-out px-4 py-1 mr-1 mb-1 rounded-full" href="{{ route('zemlya-novgorodskaya') }}">
				Деятели театра Новгородской земли
			</a>
			-->
		</nav>
	</div>
</div>