<div class="sticky z-1 top-4">
	<div class="pb-6 md:pb-0 md:pl-8">
		<div class="block transition-all duration-300 ease-in-out md:block">
			<div class="block w-100 p-2 mb-4 md:mb-8 rounded border-2 border-dashed border-gray-300 dark:border-gray-700 dark:text-gray-100 backdrop-blur-sm">
				<span class="absolute -mt-6 px-2 text-lg bg-white dark:bg-gray-800">
					О театре
				</span>
				<nav class="mt-4">
					<a 
						class="{{ Request::routeIs('about') ? 'bg-tegold border-tegold hover:bg-yellow-600' : 'border-slate-600 hover:bg-tegold hover:border-yellow-600' }} block transition-all duration-300 ease-in-out px-2 py-2 mt-2 rounded border" 
						href="{{ route('about') }}"
					>
						История театра
					</a>
					<a 
						class="{{ Request::routeIs('history') ? 'bg-tegold border-tegold hover:bg-yellow-600' : 'border-slate-600 hover:bg-tegold hover:border-yellow-600' }} block transition-all duration-300 ease-in-out px-2 py-2 mt-2 rounded border" 
						href="{{ route('history') }}"
					>
						History of theatre
					</a>
					<a class="{{ Request::routeIs('zemlya-novgorodskaya') ? 'bg-tegold border-tegold hover:bg-yellow-600' : 'border-slate-600 hover:bg-tegold hover:border-yellow-600' }} block transition-all duration-300 ease-in-out px-2 py-2 mt-2 rounded border" href="{{ route('zemlya-novgorodskaya') }}">
						Деятели театра Новгородской земли
					</a>
					<a class="{{ Request::routeIs('smi') ? 'bg-tegold border-tegold hover:bg-yellow-600' : 'border-slate-600 hover:bg-tegold hover:border-yellow-600' }} block transition-all duration-300 ease-in-out px-2 py-2 mt-2 rounded border" href="{{ route('smi') }}">
						Пресса о театре
					</a>
					<a class="{{ Request::routeIs(['actors', 'actors.*']) ? 'bg-tegold border-tegold hover:bg-yellow-600' : 'border-slate-600 hover:bg-tegold hover:border-yellow-600' }} block transition-all duration-300 ease-in-out px-2 py-2 mt-2 rounded border" 
						href="{{ route('actors') }}">
						Актеры театра
					</a>
					<a class="{{ Request::routeIs('administration') ? 'bg-tegold border-tegold hover:bg-yellow-600' : 'border-slate-600 hover:bg-tegold hover:border-yellow-600' }} block transition-all duration-300 ease-in-out px-2 py-2 mt-2 rounded border" 
						href="{{ route('administration') }}">
						Администрация
					</a>
					<a class="{{ Request::routeIs(['producers', 'producers.*']) ? 'bg-tegold border-tegold hover:bg-yellow-600' : 'border-slate-600 hover:bg-tegold hover:border-yellow-600' }} block transition-all duration-300 ease-in-out px-2 py-2 mt-2 rounded border" 
						href="{{ route('producers') }}">
						Режиссеры
					</a>
					<a class="{{ Request::routeIs(['craftsmans', 'craftsmans.*']) ? 'bg-tegold border-tegold hover:bg-yellow-600' : 'border-slate-600 hover:bg-tegold hover:border-yellow-600' }} block transition-all duration-300 ease-in-out px-2 py-2 mt-2 rounded border" 
						href="{{ route('craftsmans') }}">
						Художники спектаклей
					</a>
					<a class="{{ Request::routeIs('artistic') ? 'bg-tegold border-tegold hover:bg-yellow-600' : 'border-slate-600 hover:bg-tegold hover:border-yellow-600' }} block transition-all duration-300 ease-in-out px-2 py-2 mt-2 rounded border" 
						href="{{ route('artistic') }}">
						Художественно-постановочная часть
					</a>
					<a class="{{ Request::routeIs('accessible') ? 'bg-tegold border-tegold hover:bg-yellow-600' : 'border-slate-600 hover:bg-tegold hover:border-yellow-600' }} block transition-all duration-300 ease-in-out px-2 py-2 mt-2 rounded border" 
						href="{{ route('accessible') }}">
						Доступная среда
					</a>
				</nav>
			</div>
		</div>
	</div>
</div>