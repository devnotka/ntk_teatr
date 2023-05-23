<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="container w-full max-w-7xl mx-auto py-4 md:px-4 md:py-6 xl:py-8 transition-all duration-300 ease-in-out">
			<h1 class="md:pb-2 xl:pb-4 text-center md:text-left text-lg md:text-xl xl:text-2xl uppercase">
				Фестивали в Новгородском театре драмы
			</h1>
			<div class="flex flex-wrap justify-between">
				<div class="w-full py-4 md:w-1/2">
					<div class="md:pr-2 lg:pr-3 xl:pr-4">
						<div class="flex flex-col justify-start md:rounded bg-gray-100 dark:bg-gray-700">
							<div class="relative md:rounded-t bg-white">
								<a class="absolute left-2 bottom-2 lg:left-4 lg:bottom-4 px-4 py-2 font-bold text-sm text-center text-white bg-indigo-600 rounded overflow-hidden shadow hover:shadow-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out" href="https://fmdfest.ru" target="_blank">
									Сайт фестиваля
								</a>
								<a href="{{ route('fmdfest') }}">
									<img class="md:rounded-t" src="/images/fests/fmdfest.png" alt="Международный театральный фестиваль Ф.М. Достоевского" />
								</a>
							</div>
							<a href="{{ route('fmdfest') }}">
								<h2 class="px-2 lg:px-4 pt-4 pb-2 text-lg uppercase">
									Международный театральный фестиваль Ф.М. Достоевского
								</h2>
							</a>
							<div class="px-2 lg:px-4 pb-4">
								Театральный фестиваль им. Ф.М. Достоевского – один из старейших в своем роде. Начинался он в 1992 году в Новгородской области как камерная творческая акция. Сейчас за годы его проведения на территории Новгородской области в городах Великий Новгород и Старая Русса побывали представители десятков городов России, стран Европы и Азии, тысячи участников.
							</div>
						</div>
					</div>
				</div>
				<div class="w-full py-4 md:w-1/2">
					<div class="md:pl-2 lg:pl-3 xl:pl-4">
						<div class="flex flex-col justify-start md:rounded bg-gray-100 dark:bg-gray-700">
							<div class="relative md:rounded-t bg-white">
								<a href="{{ route('vechefest') }}">
									<img class="md:rounded-t" src="/images/fests/veche.jpg" alt="Международный театральный фестиваль «Театральное вече»" />
								</a>
							</div>
							<a href="{{ route('vechefest') }}">
								<h2 class="px-2 lg:px-4 pt-4 pb-2 py-2 text-lg uppercase">
									Международный театральный фестиваль «Театральное вече»
								</h2>
							</a>
							<div class="px-2 lg:px-4 pb-4">
								Фестиваль «Театральное вече» - творческая акция, проводимая в Великом Новгороде. Фестиваль призван создать условия для профессионального обсуждения наиболее значимых аспектов театрального искусства. Участниками фестиваля являются отечественные и зарубежные театральные коллективы, режиссеры, актеры, драматурги, художники, педагоги, критики и продюсеры.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</x-slot>
</x-teatr.layout>