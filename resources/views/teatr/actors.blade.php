<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="w-full bg-gradient-to-r from-slate-200/25 via-tegold/75 to-gray-600/25 backdrop-blur-sm">
			<div class="container w-full max-w-7xl mx-auto text-white px-4 pt-6 pb-8 md:px-4 md:pt-12 md:pb-16 transition-all duration-300 ease-in-out">
				<x-teatr.breadcrumbs :breadcrumbs="$breadcrumbs"></x-teatr.breadcrumbs>
				<h1 class="uppercase text-white tracking-tighter text-2xl md:text-3xl filter drop-shadow transition-all duration-300 ease-in-out">
					Актёры Новгородского театра драмы
				</h1>
			</div>
		</div>
		<div class="container w-full max-w-7xl mx-auto px-4 md:my-4 py-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<x-teatr.fedor2_left></x-teatr.fedor2_left>
			<x-teatr.fedor2_right></x-teatr.fedor2_right>
			<div class="col-span-4 md:col-span-2 lg:col-span-3 md:pr-8 md:border-r md:border-gray-300 md:border-dashed">
				<div class="">
					<div class="flex flex-wrap bg-gray-50 rounded justify-start xl:py-8 dark:bg-gray-700 dark:text-gray-300 transition-all duration-300 ease-in-out">
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.bahanov_ea') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0030.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Баханов Евгений Андреевич</strong>
								</div>
								<div class="text-sm text-center">
									Актёр
								</div>
							</a>
						</div>
						<!--
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.bogomolova_np') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0002.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Богомолова Наталья Петровна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						-->
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.breykin_da') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0004.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Брейкин Дмитрий Александрович</strong>
								</div>
								<div class="text-sm text-center">
									Актёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.venevitinova_avg') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0035.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Веневитинова Анна-Виктория Георгиевна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.verkau_vi') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0005.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Веркау Вера Ивановна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.vinokurova_sv') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0006.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Винокурова Светлана Викторовна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.gorelkina_va') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0036.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Горелкина Валерия Александровна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.grishanina_iv') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0007.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Гришанина Ирина Викторовна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.egorova_nv') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0008.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Егорова Наталья Валентиновна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						<!--
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.efimov_sv') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0009.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Ефимов Сергей Викторович</strong>
								</div>
								<div class="text-sm text-center">
									Актёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.kutsenko_ak') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0010.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Куценко Артём Константинович</strong>
								</div>
								<div class="text-sm text-center">
									Актёр
								</div>
							</a>
						</div>
						-->
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.zherebor_kk') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0011.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Жеребор Кристина Константиновна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.zinkova_aa') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0038.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Зинкова Александра Анатольевна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.karataeva_ta') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0012.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Каратаева Татьяна Аркадьевна</strong>
								</div>
								<div class="text-sm text-center">
									Народная артистка РФ
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.kovalev_yv') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0013.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Ковалев Юрий Викторович</strong>
								</div>
								<div class="text-sm text-center">
									Актёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.kondrashina_aa') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0014.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Кондрашина Анна Александровна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.kormiltsev_vb') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0015.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Кормильцев Вячеслав Борисович</strong>
								</div>
								<div class="text-sm text-center">
									Актёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.kotykov_dp') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0039.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Котыков Денис Павлович</strong>
								</div>
								<div class="text-sm text-center">
									Актёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.lukyanenko_ei') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0016.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Лукьяненко Елена Ивановна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.lushechkina_ld') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0017.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Лушечкина Любовь Дмитриевна</strong>
								</div>
								<div class="text-sm text-center">
									Народная артистка РФ
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.muzika_bv') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0018.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Музыка Богдан Валерьевич</strong>
								</div>
								<div class="text-sm text-center">
									Актёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.nazarkina_ea') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0033.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Назаркина Елизавета Александровна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.pepelyaev_ge') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0034.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Пепеляев Георгий Эдуардович</strong>
								</div>
								<div class="text-sm text-center">
									Актер
								</div>
							</a>
						</div>
						<!--
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.prokopenkova_td') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0019.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Прокопенкова Татьяна Дмитриевна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						-->
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.kovalskiy_py') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0020.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Ковальский Пётр Владимирович</strong>
								</div>
								<div class="text-sm text-center">
									Актёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.rudakov_pi') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0021.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Рудаков Павел Иванович</strong>
								</div>
								<div class="text-sm text-center">
									Актёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.sabaeva_se') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0022.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Сабаева Светлана Евгеньевна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.sakovich_me') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0032.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Сакович Маргарита Эдуардовна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.sergeeva_la') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0023.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Сергеева Лилия Анатольевна</strong>
								</div>
								<div class="text-sm text-center">
									Народная артистка РФ
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.simvolokov_ag') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0024.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Символоков Артём Геннадьевич</strong>
								</div>
								<div class="text-sm text-center">
									Актёр
								</div>
							</a>
						</div>
						<!--
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.solopenko_aa') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0025.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Солопенко Анастасия Александровна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						-->
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.suchkov_iv') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0026.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Сучков Иван Васильевич</strong>
								</div>
								<div class="text-sm text-center">
									Заслуженный артист РФ
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.ustinov_aa') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0027.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Устинов Анатолий Александрович</strong>
								</div>
								<div class="text-sm text-center">
									Заслуженный артист РФ
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.frolova_yv') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0037.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Фролова Юлия Вячеславовна</strong>
								</div>
								<div class="text-sm text-center">
									Актриса
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.cybulskiy_yv') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0028.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Цыбульский Ян Владимирович</strong>
								</div>
								<div class="text-sm text-center">
									Актёр
								</div>
							</a>
						</div>
						<div class="p-2 w-1/2 rounded sm:w-1/3">
							<a href="{{ route('actors.shvidenko_ma') }}">
								<img class="mx-auto rounded" src="/images/actors_crop/0029.jpg" />
								<div class="text-sm text-center mt-2">
									<strong>Швыденко Матвей Алексеевич</strong>
								</div>
								<div class="text-sm text-center">
									Актёр
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