<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="container w-full max-w-7xl mx-auto pb-4 md:px-4 md:my-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<x-teatr.fedor_left></x-teatr.fedor_left>
			<x-teatr.fedor_right></x-teatr.fedor_right>
			<h1 class="block md:hidden text-center col-span-4 px-4 py-4 uppercase text-lg">
					Новгородский театр драмы - Контактная информация
			</h1>
			<div class="col-span-4 mx-4 md:mx-0 md:col-span-1">
				@isset($links)
					<x-teatr.info_sidebar :links="$links"></x-teatr.info_sidebar>
				@endisset
			</div>
			<div class="col-span-4 transition-all duration-300 ease-in-out md:col-span-2 lg:col-span-3 md:pl-8 md:border-l md:border-gray-300 md:border-dashed backdrop-blur-sm">
				<h1 class="hidden md:block pt-2 pb-4 uppercase text-xl">
					Контактная информация
				</h1>
				<div class="p-4 md:p-0">
					<div>
						Областное автономное учреждение культуры и искусства «Новгородское областное театрально-концертное агентство»
					</div>
					<div class="uppercase">
						Новгородский академический театр драмы имени Ф.М. Достоевского
					</div>
					<div class="mt-2">
						Уважаемые зрители!<br/>
						С января 2023 года здание театра закрыто на реконструкцию. Все спектакли текущего репертуара проходят на площадке Новгородского областной филармонии им. А.С. Аренского (Кремль, 8).
					</div>
					<!--
					<img class="my-4 rounded" src="/images/contacts/teatr.jpg" />
					-->
					<img class="my-4 rounded" src="https://philnov.ru/wp-content/uploads/2017/05/fil3D.jpg" />
					<!--
					<div>
						Адрес: 173001, Россия, Новгородская область, г. Великий Новгород, ул. Великая, д. 14
					</div>
					<div class="">
						<p>
							Приёмная: <a href="tel:+78162788301" class="hover:text-indigo-600 transition-color duration-300 ease-in-out">+7(8162)788-301</a>, факс: <a href="tel:+78162788302" class="hover:text-indigo-600 transition-color duration-300 ease-in-out">+7(8162)788-302</a>, эл. почта: <a class="hover:text-indigo-600 transition-color duration-300 ease-in-out" href="mailto:vn.teatr@mail.ru" target="_blank">vn.teatr@mail.ru</a>
						</p>
						<p>
							Директор театра: Боженова Елена Александровна
						</p>
						<p>
							Аренда зала и фойе: <a href="tel:+78162788303" class="hover:text-indigo-600 transition-color duration-300 ease-in-out">+7(8162)788-303</a>
						</p>
						<p>
							Отдел рекламы: <a href="tel:+78162788312" class="hover:text-indigo-600 transition-color duration-300 ease-in-out">+7(8162)788-312</a>
						</p>
						<p>
							Касса театра: <a href="tel:+78162788305" class="hover:text-indigo-600 transition-color duration-300 ease-in-out">+7(8162)788-305</a>
						</p>
					</div>
					<div class="-mx-4 md:mx-0 my-4 md:rounded overflow-hidden">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3d411c8173c3f28a71ba110be2f761c81adf495148ce35eaa321cd71abd99abc&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=false"></script>
					</div>
					-->
					<div class="mt-2">
						Приобрести билеты онлайн вы по-прежнему можете на официальном сайте театра, а также в кассе филармонии и ТЦ «Мармелад» (1 этаж)
					</div>
					<div class="mt-2">
						Адрес для писем: 173001, Россия, Новгородская область, г. Великий Новгород, Кремль, д. 8
					</div>
					<div class="mt-2">
						Приёмная (эл. Почта): vn.teatr@mail.ru
					</div>
					<div class="mt-2">
						Директор театра: Боженова Елена Александровна
					</div>
					<div class="mt-2">
						Аренда зала и фойе: <a href="tel:+79212010554">+79212010554</a>
					</div>
					<div class="mt-2">
						Касса: +7(8162)77-27-77 (с 10:00 до 19:00), <a href="tel:+79211958529">+79211958529</a> (администраторы)
					</div>
					<div class="-mx-4 md:mx-0 my-4 md:rounded overflow-hidden">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af1d84cb4af65fcf642c0a1c59e12c5b9f4dc23eff03360d90572d67d95256281&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=false"></script>
					</div>
				</div>
			</div>
		</div>
	</x-slot>
</x-teatr.layout>