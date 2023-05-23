<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="container w-full max-w-7xl mx-auto pb-4 md:px-4 md:my-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<h1 class="block md:hidden text-center col-span-4 px-4 py-4 uppercase text-lg">
					Памятка для зрителей с детьми в Новгородском театре драмы
			</h1>
			<div class="col-span-4 mx-4 md:mx-0 md:col-span-1">
				@isset($links)
					<x-teatr.info_sidebar :links="$links"></x-teatr.info_sidebar>
				@endisset
			</div>
			<div class="col-span-4 transition-all duration-300 ease-in-out md:col-span-2 lg:col-span-3 md:pl-8 md:border-l md:border-gray-300 md:border-dashed backdrop-blur-sm">
				<h1 class="hidden md:block pt-2 uppercase text-xl">
					Памятка для зрителей с детьми в Новгородском театре драмы
				</h1>
				<div class="p-4 md:p-0">
					<p class="text-xl pb-4">
						Памятка для зрителей с детьми.
					</p>
					<p>
						Уважаемые родители, посещая театр с детьми вы соглашаетесь с <a class="underline transition duration-300 ease-in-out hover:text-indigo-600" href="/docs/Polozhenie-o-poryadke-i-usloviyakh-prisutstviya-detey.pdf">«Положением о порядке и условиях присутствия детей на мероприятиях театра»</a>.
					</p>
					<ul class="px-8 pb-4 list-disc list-outside">
						<li>
							Вход для детей до 3х лет без отдельного посадочного места - бесплатно.
						</li>
						<li>
							Прежде чем идти на спектакль с ребёнком узнайте, о чём он, подходит ли он по возрасту. Приводя на спектакль ребёнка младше установленного для спектакля возраста, вы берёте ответственность на себя.
						</li>
						<li>
							Рекомендуем выбрать для похода в театр удобную, нарядную одежду, чтобы ребенок мог почувствовать всю торжественность момента.
						</li>
						<li>
							Приходите на спектакль за 30 минут до начала. Это позволит вам без спешки раздеть ребенка и при необходимости отвести его в туалет.
						</li>
						<li>
							Не забудьте рассказать ребенку, что в фойе и зрительном зале нельзя: быстро бегать, прыгать, громко кричать, толкаться и трогать руками экспонаты.
						</li>
						<li>
							Если ребенок начал капризничать или плакать во время спектакля и успокоить его не удается, лучше покинуть зрительный зал, не дожидаясь окончания спектакля.
						</li>
						<li>
							Ответственность за несовершеннолетних детей несет сопровождающий.
						</li>
					</ul>
				</div>
			</div>
		</div>
	</x-slot>
</x-teatr.layout>