<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<x-teatr.breadcrumbs></x-teatr.breadcrumbs>
		<div class="container w-full max-w-7xl mx-auto my-4 grid grid-cols-3 dark:bg-gray-800">
			<div class="col-span-3 md:col-span-2">
				<div class="px-4 py-4 bg-white sm:mx-4 sm:rounded sm:shadow md:mr-2 dark:bg-gray-700">
					<div class="flex flex-col rounded justify-start sm:max-h-60 sm:bg-gray-50 sm:flex-row dark:text-gray-300 sm:dark:bg-gray-800">
						<img class="w-max mx-auto rounded-r rounded-l sm:mx-0 sm:rounded-r-none sm:rounded-l" src="/images/actors_crop/0003.jpg" alt="{{ $title }}" />
						<div class="w-full rounded mt-4 sm:overflow-hidden sm:mt-2 sm:ml-6 sm:w-auto">
							<h1 class="text-center sm:text-xl sm:text-left">
								Бакуненко Ирина Олеговна
							</h1>
							<p class="text-center sm:text-left">
								Актриса
							</p>
							<p class="text-center sm:text-left">
								Была принята в труппу Новгородского академического театра драмы имени Ф.М. Достоевского 16 сентября 2020 года.
							</p>
						</div>
					</div>
					<div class="flex flex-row pt-6">
						<div class="w-32 text-right pr-2 sm:w-56">
							<p class="sticky z-1 top-2">
								Родилась:
							</p>
						</div>
						<div class="w-2/3 text-left pl-2 border-l border-gray-300">
							<p>
								06 апреля 1999 года
							</p>
						</div>
					</div>
					<div class="flex flex-row pt-6">
						<div class="w-32 text-right pr-2 sm:w-56">
							<p class="sticky z-1 top-2">
								Образование:
							</p>
						</div>
						<div class="w-2/3 text-left pl-2 border-l border-gray-300">
							<p>
								Санкт-Петербургский Гуманитарный Университет профсоюзов Мастерская З. А. России Е. Г. Александрова
							</p>
						</div>
					</div>
					<div class="flex flex-row pt-6">
						<div class="w-32 text-right pr-2 sm:w-56">
							<p class="sticky z-1 top-2">
								Профессия:
							</p>
						</div>
						<div class="w-2/3 text-left pl-2 border-l border-gray-300">
							<p>
								артист драматического театра и кино
							</p>
						</div>
					</div>
					<div class="flex flex-row pt-6">
						<div class="w-32 text-right pr-2 sm:w-56">
							<p class="sticky z-1 top-2">
								Роли Бакуненко И.О. в театре:
							</p>
						</div>
						<div class="w-2/3 text-left pl-2 border-l border-gray-300">
							<ul class="actor">
								<li>
									Китти - автор Л.Н. Толстой, инсценировка KLIMа, спектакль "Анна Каренина", 2021
								</li>
								<li>
									Малютка (бесёнок) - автор Ф.М. Достоевский, инсценировка Алексея Копылова, спектакль "Братья Карамазовы", 2020
								</li>
								<li>
									Принцесса Роуз - автор Чарльз Уэй, спектакль "Спящая красавица", 2020
								</li>
								<li>
									Катя - автор Ярослава Пулинович, спектакль "Жанна", 2020
								</li>
								<li>
									Котенок – автор С.Я. Маршак, спектакль «Кошкин дом», готовится ввод 2020
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden md:block md:col-span-1">
				<x-teatr.oteatre></x-teatr.oteatre>
			</div>
		</div>
	</x-slot>
</x-teatr.layout>