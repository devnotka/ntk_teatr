<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="container w-full max-w-7xl mx-auto pb-4 md:px-4 md:my-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<h1 class="block md:hidden text-center col-span-4 px-4 py-4 uppercase text-lg">
					Как купить билеты в Новгородский театр драмы
			</h1>
			<div class="col-span-4 mx-4 md:mx-0 md:col-span-1">
				@isset($links)
					<x-teatr.info_sidebar :links="$links"></x-teatr.info_sidebar>
				@endisset
			</div>
			<div class="col-span-4 transition-all duration-300 ease-in-out md:col-span-2 lg:col-span-3 md:pl-8 md:border-l md:border-gray-300 md:border-dashed backdrop-blur-sm">
				<h1 class="hidden md:block pt-2 uppercase text-xl">
					Как купить билеты в Новгородский театр драмы?
				</h1>
				<div class="p-4 md:p-0">
					<div class="py-4">
						<p>
							Билеты на мероприятия Новгородского академического театра драмы можно купить оффлайн или онлайн, а также забронировать по телефонам.
						</p>
					</div>
					<!--
					<div class="pb-4">
						<p class="text-xl pb-4">
							Билеты в кассе в Новгородском театре драмы.
						</p>
						<p>
							Адрес: г. Великий Новгород, ул. Великая, д. 14
						</p>
						<p>
							Телефон:
							<a class="underline transition duration-300 ease-in-out hover:text-indigo-600" href="tel:+78162788305">
								8(8162)788-305
							</a>
						</p>
						<p>
							Режим работы кассы в театре:
						</p>
						<p>
							с 10:00 до 19:00 ежедневно. 
						</p>
						<p>
							Возврат билетов на мероприятия театра драмы.
						</p>
					</div>
					-->
					<div class="pb-4">
						<p class="text-xl pb-4">
							Билеты в кассе в Новгородской областной филармонии.
						</p>
						<p>
							Адрес: г. Великий Новгород, Кремль, д. 8
						</p>
						<p>
							Телефон:
							<a class="underline transition duration-300 ease-in-out hover:text-indigo-600" href="tel:+78162772777">
								8(8162)77-27-77
							</a>
						</p>
						<p>
							Режим работы кассы в филармонии:
						</p>
						<p>
							с 14:00 до 19:00.
						</p>
						<p>
							Возврат билетов на мероприятия театра драмы.
						</p>
					</div>
					<div class="pb-4">
						<p class="text-xl pb-4">
							Билеты в кассе в ТРЦ «Мармелад», 1 этаж (рядом с «Мегафоном»).
						</p>
						<p>
							Адрес: г. Великий Новгород, ул. Ломоносова, 29
						</p>
						<p>
							Режим работы кассы в ТРЦ «Мармелад»:
						</p>
						<p>
							с 10:30 до 19:00 (14:30-15:00 перерыв), без выходных.
						</p>
						<p>
							Возврат билетов, приобретенных в ТЦ «Мармелад».
						</p>
					</div>
					<div class="pb-4">
						<p class="text-xl pb-4">
							Билеты онлайн.
						</p>
						<p>
							На этом сайте 
							<a class="underline transition duration-300 ease-in-out hover:text-indigo-600" href="{{ route('afisha') }}">
								в разделе «Афиша»
							</a>
						</p>
						<!--
						<p>
							Вопросы по онлайн-продаже билетов можно задать по телефону 
							<a class="underline transition duration-300 ease-in-out hover:text-indigo-600" href="tel:+78162788305">
								8(8162)788-305
							</a>.
						</p>
						-->
						<p>
							Вопросы по онлайн-продаже билетов можно задать по телефону 
							<a class="underline transition duration-300 ease-in-out hover:text-indigo-600" href="tel:+78162772777">
								8(8162)77-27-77
							</a>.
						</p>
					</div>
					<!--
					<div class="pb-4">
						<p class="text-xl pb-4">
							Билеты через сообщество Вконтакте.
						</p>
						<p>
							Перейдите по ссылке <a class="underline transition duration-300 ease-in-out hover:text-indigo-600" href="https://vk.com/dostoevsky_theatre" target="_blank" rel="nofollow">https://vk.com/dostoevsky_theatre</a> и напишите в сообщения сообщества.
						</p>
					</div>
					-->
					<div class="pb-4">
						<p class="text-xl pb-4">
							Коллективные заявки:
						</p>
						<!--
						<p>
							Через администратора <a class="underline transition duration-300 ease-in-out hover:text-indigo-600" href="tel:+78162788310">8(8162)788-310</a> или <a class="underline transition duration-300 ease-in-out hover:text-indigo-600" href="tel:+78162788312">8(8162)788-312</a>.
						</p>
						-->
						<p>
							Через администратора <a class="underline transition duration-300 ease-in-out hover:text-indigo-600" href="tel:+79211958529">+79211958529</a>.
						</p>
						<p>
							<a class="underline transition duration-300 ease-in-out hover:text-indigo-600" href="/docs/obrazec_bileta_notka.pdf">
								Образец билета ОАУКИ «НОТКА»
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</x-slot>
</x-teatr.layout>
