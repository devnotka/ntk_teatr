<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="container w-full max-w-7xl mx-auto pb-4 md:px-4 md:my-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<x-teatr.fedor_left></x-teatr.fedor_left>
			<x-teatr.fedor_right></x-teatr.fedor_right>
			<h1 class="block md:hidden text-center col-span-4 px-4 py-4 uppercase text-lg">
					Международный театральный фестиваль «Театральное вече»
			</h1>
			<div class="col-span-4 md:col-span-1 mx-4 md:mx-0">
				<x-teatr.fest_filters :years="$years"></x-teatr.fest_filters>
			</div>
			<div class="col-span-4 md:col-span-2 lg:col-span-3 transition-all duration-300 ease-in-out md:pl-8 md:border-l md:border-gray-300 md:border-dashed">
				<h1 class="hidden md:block uppercase text-xl">
					Международный театральный фестиваль «Театральное вече»
				</h1>
				<div class="px-4 md:px-0 pb-4">
					<p>
						Фестиваль «Театральное вече» -  ежегодная творческая акция, проводимая в г. Великий Новгород, призванная в формате форума объединять деятелей театра всего мира, знакомить жителей Новгородской области с творческими достижениями выдающихся мастеров сцены, служить пропаганде и распространению ценностей художественного творчества, обеспечивать условия для обмена творческим опытом и передачи художественного мастерства творческой молодежи региона, содействовать укреплению межрегиональных и международных культурных связей, способствовать развитию театрального искусства.
					</p>
					<p>
						Фестиваль не является творческим соревнованием, его программа формируется таким образом, чтобы наиболее полно представить публике и театральному сообществу актуальное состояние современного театра в рамках заранее определенной темы. Фестиваль также призван создать условия для профессионального обсуждения наиболее значимых аспектов театрального искусства и театрального дела.
					</p>
					<p>
						В рамках фестиваля могут проводиться мастер-классы, творческие встречи, научно-практические конференции, семинары, круглые столы и другие мероприятия. Участниками фестиваля являются отечественные и зарубежные театральные коллективы, режиссеры, актеры, драматурги, художники, педагоги, театроведы, критики, продюсеры.
					</p>
				</div>
				<!--
				<div class="px-4 md:px-0 pb-4 flex flex-row justify-between">
					<div class="w-1/2 flex justify-start">
						<a class="block px-4 py-2 font-bold text-sm text-center text-white bg-indigo-600 rounded overflow-hidden shadow hover:shadow-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out" href="https://fmdfest.ru" target="_blank">
							Сайт фестиваля
						</a>
					</div>
					<div class="w-1/2 flex justify-start">
						<a class="block px-4 py-2 font-bold text-sm text-center text-white bg-indigo-600 rounded overflow-hidden shadow hover:shadow-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out" href="https://vk.com/dostoevskyfestival" target="_blank">
							Сообщество в VK
						</a>
					</div>
				</div>
				-->
				<!--
				<div id="2018" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2018 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								
							</ul>
						</div>
					</div>
				</div>
				<div id="2017" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2017 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								
							</ul>
						</div>
					</div>
				</div>
				<div id="2016" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2016 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								
							</ul>
						</div>
					</div>
				</div>
				<div id="2015" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2015 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								
							</ul>
						</div>
					</div>
				</div>
				-->
				<div id="2014" x-data="{ open: true }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2014 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«СЛОВО О ПОЛКУ ИГОРЕВЕ», Ярославский государственный театр юного зрителя (Ярославль);
								</li>
								<li>
									«ГЛУПОВЪ. НАШЕСТВИЕ», Санкт-Петербургский государственный театр «Суббота» (Санкт-Петербург);
								</li>
								<li>
									«ТУШИНО», Московский государственный историко-этнографический театр (Москва);
								</li>
								<li>
									«ХОЛЬМГАРД? НОВГОРОД?», Новгородский академический театр драмы им. Ф.М. Достоевского (Великий Новгород).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2013" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2013 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«КРОВАВЫЙ ТРОН», Национальный драматический театр им. Б. Басангова (Республика Калмыкия, г. Элиста);
								</li>
								<li>
									«ЙОВ», Львовский духовный театр «Воскресение» (Украина, г. Львов);
								</li>
								<li>
									«БОРИС ГОДУНОВ», Костромской государственный драматический театр им. А.Н. Островского (Кострома);
								</li>
								<li>
									«ПАВЕЛ I», Псковский академический театр драмы им. А.С. Пушкина (Псков).
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</x-slot>
</x-teatr.layout>