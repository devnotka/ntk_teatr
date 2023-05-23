<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="w-full bg-gradient-to-r from-slate-200/25 via-tegold/75 to-gray-600/25 backdrop-blur-sm">
			<div class="container w-full max-w-7xl mx-auto text-white px-4 pt-6 pb-8 md:px-4 md:pt-12 md:pb-16 transition-all duration-300 ease-in-out">
				<x-teatr.breadcrumbs :breadcrumbs="$breadcrumbs"></x-teatr.breadcrumbs>
				<h1 class="uppercase text-white tracking-tighter text-2xl md:text-3xl filter drop-shadow transition-all duration-300 ease-in-out">
					Режиссёры Новгородского театра драмы
				</h1>
			</div>
		</div>
		<div class="container w-full max-w-7xl mx-auto px-4 md:my-4 py-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<x-teatr.fedor2_left></x-teatr.fedor2_left>
			<x-teatr.fedor2_right></x-teatr.fedor2_right>
			<div class="col-span-4 md:col-span-2 lg:col-span-3 md:pr-8 md:border-r md:border-gray-300 md:border-dashed">
				<div class="">
					<div class="flex flex-wrap bg-gray-50 rounded justify-start xl:py-6 dark:bg-gray-700 dark:text-gray-300 transition-all duration-300 ease-in-out">
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('producers.pekteev_va') }}">
								<img class="mx-auto rounded" src="/images/producers_crop/0001.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Пектеев Василий Александрович</strong>
								</div>
								<div class="text-sm text-center">
									Заслуженный деятель искусств Республики Марий Эл
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('producers.sarvin_dv') }}">
								<img class="mx-auto rounded" src="/images/producers_crop/0002.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Сарвин Дмитрий Васильевич</strong>
								</div>
								<div class="text-sm text-center">
									Режиссёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('producers.zimin_ej') }}">
								<img class="mx-auto rounded" src="/images/producers_crop/0003.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Зимин Евгений Юрьевич</strong>
								</div>
								<div class="text-sm text-center">
									Режиссёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('producers.grishanin_sn') }}">
								<img class="mx-auto rounded" src="/images/producers_crop/0004.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Гришанин Сергей Николаевич</strong>
								</div>
								<div class="text-sm text-center">
									Режиссёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('producers.mandzhiev_bn') }}">
								<img class="mx-auto rounded" src="/images/producers_crop/0005.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Манджиев Борис Наминович</strong>
								</div>
								<div class="text-sm text-center">
									Заслуженный деятель искусств РФ, режиссёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('producers.gornik_da') }}">
								<img class="mx-auto rounded" src="/images/producers_crop/0006.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Горник Дмитрий Алексеевич</strong>
								</div>
								<div class="text-sm text-center">
									Заслуженный деятель искусств РФ
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('producers.morozov_sa') }}">
								<img class="mx-auto rounded" src="/images/producers_crop/0007.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Морозов Сергей Анатольевич</strong>
								</div>
								<div class="text-sm text-center">
									Режиссёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('producers.nevedomskaya_pl') }}">
								<img class="mx-auto rounded" src="/images/producers_crop/0008.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Неведомская Полина Леонидовна</strong>
								</div>
								<div class="text-sm text-center">
									Режиссёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('producers.mamedov_mg') }}">
								<img class="mx-auto rounded" src="/images/producers_crop/0009.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Мамедов Михаил Григорьевич</strong>
								</div>
								<div class="text-sm text-center">
									Заслуженный деятель искусств РФ, режиссёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('producers.mokienko_mj') }}">
								<img class="mx-auto rounded" src="/images/producers_crop/0010.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Мокиенко Михаил Юрьевич</strong>
								</div>
								<div class="text-sm text-center">
									Режиссёр, драматург, композитор
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('producers.smolko_aa') }}">
								<img class="mx-auto rounded" src="/images/producers_crop/0011.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Смолко Андрей Аркадьевич</strong>
								</div>
								<div class="text-sm text-center">
									Режиссёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('producers.manonina_ln') }}">
								<img class="mx-auto rounded" src="/images/producers_crop/0012.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Манонина Людмила Николаевна</strong>
								</div>
								<div class="text-sm text-center">
									Режиссёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('producers.sakaev_ir') }}">
								<img class="mx-auto rounded" src="/images/producers_crop/0013.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Сакаев Искандэр Рауфович</strong>
								</div>
								<div class="text-sm text-center">
									Режиссёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('producers.serov_ae') }}">
								<img class="mx-auto rounded" src="/images/producers_crop/0014.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Серов Алексей Эдуардович</strong>
								</div>
								<div class="text-sm text-center">
									Театральный режиссёр
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