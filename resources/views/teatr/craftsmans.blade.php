<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="w-full bg-gradient-to-r from-slate-200/25 via-tegold/75 to-gray-600/25 backdrop-blur-sm">
			<div class="container w-full max-w-7xl mx-auto text-white px-4 pt-6 pb-8 md:px-4 md:pt-12 md:pb-16 transition-all duration-300 ease-in-out">
				<x-teatr.breadcrumbs :breadcrumbs="$breadcrumbs"></x-teatr.breadcrumbs>
				<h1 class="uppercase text-white tracking-tighter text-2xl md:text-3xl filter drop-shadow transition-all duration-300 ease-in-out">
					Художники спектаклей Новгородского театра драмы
				</h1>
			</div>
		</div>
		<div class="container w-full max-w-7xl mx-auto px-4 md:my-4 py-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<x-teatr.fedor2_left></x-teatr.fedor2_left>
			<x-teatr.fedor2_right></x-teatr.fedor2_right>
			<div class="col-span-4 md:col-span-2 lg:col-span-3 md:pr-8 md:border-r md:border-gray-300 md:border-dashed">
				<div class="">
					<div class="flex flex-wrap bg-gray-50 rounded justify-start dark:bg-gray-700 dark:text-gray-300 transition-all duration-300 ease-in-out">
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('craftsmans.bryanceva_ma') }}">
								<img class="mx-auto rounded" src="/images/craftsmans/0001.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Брянцева Мария Алексеевна</strong>
								</div>
								<div class="text-sm text-center">
									Художник
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('craftsmans.chazova_ei') }}">
								<img class="mx-auto rounded" src="/images/craftsmans/0002.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Чазова Екатерина Игоревна</strong>
								</div>
								<div class="text-sm text-center">
									Художник
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('craftsmans.taracenko_dy') }}">
								<img class="mx-auto rounded" src="/images/craftsmans/0003.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Тарасенко Дина Юрьевна</strong>
								</div>
								<div class="text-sm text-center">
									Художник
								</div>
							</a>
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