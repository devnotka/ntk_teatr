<div class="w-full border-t shadow bg-gray-100 dark:bg-gray-700 dark:border-gray-900">
	<div class="container w-full max-w-7xl mx-auto">
		<footer>
			<div class="flex flex-wrap gap-10 p-10 text-gray-700 dark:text-white">
				<div class="flex-grow flex-nowrap">
					<span class="block py-2 font-bold uppercase">Навигация</span>
					<div>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('afisha') }}">
							Афиша мероприятий
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('repertuar') }}">
							Репертуар театра
						</a>
						<!--
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="">
							Гастроли в театре
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="">
							Аренда залов
						</a>
						-->
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('fests') }}">
							Театральные фестивали
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('contacts') }}">
							Контактная информация
						</a>
					</div>
				</div>
				<div class="flex-grow flex-nowrap">
					<span class="block py-2 font-bold uppercase">О театре</span>
					<div>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('about') }}">
							История театра
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('history') }}">
							History of theatre
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('actors') }}">
							Актеры театра
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('administration') }}">
							Администрация
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('producers') }}">
							Режиссеры
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('craftsmans') }}">
							Художники спектаклей
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('artistic') }}">
							Художественно-постановочная<br/>часть
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('accessible') }}">
							Доступная среда
						</a>
					</div>
				</div>
				<div class="flex-grow flex-nowrap">
					<span class="block py-2 font-bold uppercase">Информация</span>
					<div>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('information') }}">
							Информация для зрителей
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('howbuytickets') }}">
							Как купить билеты?
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('afisha.variant', [ 'variant' => 'pushcard' ]) }}">
							Билеты по Пушкинской карте
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('refundtickets') }}">
							Возврат билетов
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('pravilateatra') }}">
							Правила посещения театра
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('visitwithkids') }}">
							Памятка при посещении с детьми
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="{{ route('documents') }}">
							Документы
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="/docs/koronavirus.docx">
							О новой короновирусной инфекции
						</a>
						<a class="block transition duration-300 ease-in-out hover:text-tegold" href="https://forms.gle/rRYjocbRoDpeAL929" target="_blank">
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
							<input class="w-full transition duration-300 ease-in-out pr-32 rounded border border-yellow-600" type="text" placeholder="username@site.com"> 
							<button class="absolute transition duration-300 ease-in-out w-32 h-full top-0 right-0 bg-tegold text-white rounded-r border border-yellow-600 hover:bg-yellow-600">Подписаться</button>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</div>
<div class="w-full bg-tegold border-t border-b border-yellow-600 shadow">
	<div class="container px-10 py-4 w-full max-w-7xl mx-auto">
		<div class="flex flex-wrap justify-between text-white">
			<div class="flex-shrink py-2">
				&copy; Новгородский академический театр драмы <span class="whitespace-nowrap">им. Ф. М. Достоевского,</span> {{ date('Y') }}
			</div>
			<div class="flex-shrink">
				<nav class="flex flex-wrap pt-1 pr-1">
					<a class="flex flex-nowrap transition duration-300 ease-in-out px-4 py-1 mr-1 mb-1 rounded-full bg-yellow-600 hover:bg-slate-600" href="https://vk.com/dostoevsky_theatre" target="_blank" rel="nofollow">
						<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" fill="currentColor">
							<path style="fill-rule:nonzero;fill-opacity:1;" d="M 12 2 C 6.488281 2 2 6.488281 2 12 C 2 17.511719 6.488281 22 12 22 C 17.511719 22 22 17.511719 22 12 C 22 6.488281 17.511719 2 12 2 Z M 12 4 C 16.429688 4 20 7.570312 20 12 C 20 16.429688 16.429688 20 12 20 C 7.570312 20 4 16.429688 4 12 C 4 7.570312 7.570312 4 12 4 Z M 6.445312 8.5 C 6.0625 8.5 6 8.6875 6 8.886719 C 6 9.246094 6.300781 11.195312 7.9375 13.4375 C 9.125 15.0625 10.6875 16 12.074219 16 C 12.914062 16 13 15.785156 13 15.453125 L 13 13.964844 C 13 13.566406 13.09375 13.5 13.359375 13.5 C 13.550781 13.5 13.9375 13.625 14.6875 14.5 C 15.550781 15.507812 15.710938 16 16.207031 16 L 17.515625 16 C 17.820312 16 17.996094 15.871094 18.003906 15.625 C 18.003906 15.5625 17.992188 15.488281 17.972656 15.410156 C 17.875 15.125 17.433594 14.421875 16.878906 13.75 C 16.570312 13.378906 16.265625 13.007812 16.128906 12.808594 C 16.03125 12.679688 15.996094 12.589844 16 12.5 C 16.003906 12.40625 16.050781 12.316406 16.125 12.195312 C 16.113281 12.195312 17.804688 9.820312 17.96875 9.019531 C 17.992188 8.945312 18.003906 8.875 18 8.8125 C 17.992188 8.632812 17.867188 8.5 17.574219 8.5 L 16.265625 8.5 C 15.9375 8.5 15.78125 8.699219 15.691406 8.898438 C 15.691406 8.898438 14.878906 10.578125 13.9375 11.6875 C 13.632812 12.007812 13.476562 12 13.3125 12 C 13.222656 12 13 11.894531 13 11.597656 L 13 9.007812 C 13 8.660156 12.914062 8.5 12.632812 8.5 L 10.308594 8.5 C 10.105469 8.5 10 8.660156 10 8.820312 C 10 9.152344 10.449219 9.234375 10.5 10.167969 L 10.5 11.980469 C 10.5 12.421875 10.425781 12.5 10.257812 12.5 C 9.816406 12.5 8.9375 11 8.351562 9.03125 C 8.222656 8.644531 8.097656 8.5 7.765625 8.5 Z M 6.445312 8.5"/>
						</svg>
						<span class="pl-1">
							Вконтакте
						</span>
					</a>
					<a class="flex flex-nowrap transition duration-300 ease-in-out px-4 py-1 mr-1 mb-1 rounded-full bg-yellow-600 hover:bg-slate-600" href="https://t.me/notkaculture" target="_blank" rel="nofollow">
						<span class="pl-1">
							Telegram
						</span>
					</a>
				</nav>
			</div>
		</div>
	</div>
</div>