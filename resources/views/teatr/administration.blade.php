<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="w-full bg-gradient-to-r from-slate-200/25 via-tegold/75 to-gray-600/25 backdrop-blur-sm">
			<div class="container w-full max-w-7xl mx-auto text-white px-4 pt-6 pb-8 md:px-4 md:pt-12 md:pb-16 transition-all duration-300 ease-in-out">
				<x-teatr.breadcrumbs :breadcrumbs="$breadcrumbs"></x-teatr.breadcrumbs>
				<h1 class="uppercase text-white tracking-tighter text-2xl md:text-3xl filter drop-shadow transition-all duration-300 ease-in-out">
					Администрация Новгородского театра драмы
				</h1>
			</div>
		</div>
		<div class="container w-full max-w-7xl mx-auto px-4 md:my-4 py-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<x-teatr.fedor2_left></x-teatr.fedor2_left>
			<x-teatr.fedor2_right></x-teatr.fedor2_right>
			<div class="col-span-4 md:col-span-2 lg:col-span-3 md:pr-8 md:border-r md:border-gray-300 md:border-dashed">
				<div class="">
					<div class="flex flex-col justify-start">
						<div class="flex flex-row mb-2 rounded shadow-md border bg-white dark:bg-gray-800 dark:border-gray-900">
							<div class="w-1/2 sm:w-2/5 md:w-4/12 xl:w-3/12">
								<img class="rounded-l filter grayscale" src="/images/administration/0001.jpg" alt="Директор Новгородского театра драмы" />
							</div>
							<div class="w-1/2 sm:w-3/5 md:w-8/12 xl:w-9/12 flex-grow content-center px-4 py-3">
								<div class="transition-all duration-300 ease-in-out font-medium tracking-tight leading-5 pb-1 md:text-base">
									<span class="uppercase">Боженова</span> Елена Александровна
								</div>
								<div class="transition-all duration-300 ease-in-out text-sm tracking-tight leading-4 md:text-base xl:text-md">
									<span class="lowercase">Директор театра</span>
									<a class="block hover:text-indigo-600 text-base tracking-tight font-medium pt-3" href="tel:+78162788310">
										Тел: 8(8162)788-310
									</a>
								</div>
							</div>
						</div>
						<div class="flex flex-row my-2 rounded shadow-md border bg-white dark:bg-gray-800 dark:border-gray-900">
							<div class="w-1/2 sm:w-2/5 md:w-4/12 xl:w-3/12">
								<img class="rounded-l" src="/images/administration/0002.jpg" alt="Заведующий художественно-постановочной частью Новгородского театра драмы" />
							</div>
							<div class="w-1/2 sm:w-3/5 md:w-8/12 xl:w-9/12 flex-grow content-center px-4 py-3">
								<div class="transition-all duration-300 ease-in-out font-medium tracking-tight leading-5 pb-1 md:text-base">
									<span class="uppercase">Никитин</span> Евгений Иванович
								</div>
								<div class="transition-all duration-300 ease-in-out text-sm tracking-tight leading-4 md:text-base xl:text-md">
									<span class="lowercase">Заведующий художественно-постановочной частью театра</span>
									<a class="block hover:text-indigo-600 text-base tracking-tight font-medium pt-3" href="tel:+78162788309">
										Тел: 8(8162)788-309
									</a>
								</div>
							</div>
						</div>
						<!--
						<div class="flex flex-row my-2 rounded shadow-md border bg-white dark:bg-gray-800 dark:border-gray-900">
							<div class="w-1/2 sm:w-2/5 md:w-4/12 xl:w-3/12">
								<img class="rounded-l" src="/images/administration/0003.jpg" alt="Главный режиссер Новгородского театра драмы" />
							</div>
							<div class="w-1/2 sm:w-3/5 md:w-8/12 xl:w-9/12 flex-grow content-center px-4 py-3">
								<div class="transition-all duration-300 ease-in-out font-medium tracking-tight leading-5 pb-1 md:text-base">
									<span class="uppercase">Неведомская</span> Полина Леонидовна
								</div>
								<div class="transition-all duration-300 ease-in-out text-sm tracking-tight leading-4 md:text-base xl:text-md">
									<span class="lowercase">Главный режиссер театра</span>
								</div>
							</div>
						</div>
						-->
						<div class="flex flex-row my-2 rounded shadow-md border bg-white dark:bg-gray-800 dark:border-gray-900">
							<div class="w-1/2 sm:w-2/5 md:w-4/12 xl:w-3/12">
								<img class="rounded-l" src="/images/administration/0004.jpg" alt="Главный художник Новгородского театра драмы" />
							</div>
							<div class="w-1/2 sm:w-3/5 md:w-8/12 xl:w-9/12 flex-grow content-center px-4 py-3">
								<div class="transition-all duration-300 ease-in-out font-medium tracking-tight leading-5 pb-1 md:text-base">
									<span class="uppercase">Чазова</span> Екатерина Игоревна
								</div>
								<div class="transition-all duration-300 ease-in-out text-sm tracking-tight leading-4 md:text-base xl:text-md">
									<span class="lowercase">Главный художник театра</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hidden md:block md:col-span-1">
				<x-teatr.oteatre2></x-teatr.oteatre2>
			</div>
		</div>
	</x-slot>
</x-teatr.layout>