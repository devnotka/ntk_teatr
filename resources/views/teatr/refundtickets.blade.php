<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="container w-full max-w-7xl mx-auto pb-4 md:px-4 md:my-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<h1 class="block md:hidden text-center col-span-4 px-4 py-4 uppercase text-lg">
					Как вернуть билеты на мероприятия в Новгородском театре драмы
			</h1>
			<div class="col-span-4 mx-4 md:mx-0 md:col-span-1">
				@isset($links)
					<x-teatr.info_sidebar :links="$links"></x-teatr.info_sidebar>
				@endisset
			</div>
			<div class="col-span-4 transition-all duration-300 ease-in-out md:col-span-2 lg:col-span-3 md:pl-8 md:border-l md:border-gray-300 md:border-dashed backdrop-blur-sm">
				<h1 class="hidden md:block pt-2 uppercase text-xl">
					Как вернуть билеты на мероприятия в Новгородском театре драмы?
				</h1>
				<div class="p-4 md:p-0">
					<p class="text-xl pb-4">
						Правила возврата билетов в театр.
					</p>
					<p>
						С 1 сентября 2019 года вступил в силу закон, регулирующий порядок возврата театральных билетов.
					</p>
					<ul class="px-8 list-disc list-outside">
						<li>
							При возврате за 10 и более дней до мероприятия возвращается 100% стоимости билета.
						</li>
						<li>
							При возврате за 5-10 дней до мероприятия возвращается 50% стоимости билета.
						</li>
						<li>
							При возврате за 3-5 дней до начала мероприятия возвращается 30% стоимости билета.
						</li>
						<li>
							При возврате менее чем за 3 дня до начала мероприятия стоимость билета не возвращается.
						</li>
						<li>
							В случае отмены мероприятия возвращается 100% стоимости билета.
						</li>
						<li>
							В случае болезни или потери близкого родственника зрителю возвращается 100% стоимости билета при предъявлении подтверждающих документов.
						</li>
						<li>
							Также по согласованию с администрацией театра по приобретенному билету Вы можете посетить театр в другую дату.
						</li>
						<li>
							Полные правила продажи и возврата билетов размещены на сайте театра в разделе «О театре» - «Документы».
						</li>
						<li>
							Если вы приобретали билет в кассе, то билеты сдаются (в установленные сроки) только в кассу, где билет был куплен (см. режим работы билетных касс).
						</li>
						<li>
							Если Вы покупали билет через билетную систему, то руководствуйтесь инструкцией по возврату билетной системы.
						</li>
					</ul>
					<div class="pt-4 pb-2 text-xl uppercase">
						Внимание!
					</div>
					<p>
						Для того, чтобы вернуть билеты на перенесенные или отмененные концерты, приобретенные on-line, необходимо заполнить заявку.
					</p>
					<p>
						Электронные билеты возвращаются только билетными операторами.
					</p>
					<p>
						Заявка на возврат билетов оператора Radario по этой ссылке:<br/>
						<a class="underline transition duration-300 ease-in-out hover:text-indigo-600" href="https://radario.ru/customer/refundTicketsForm" target="_blank" rel="nofollow">
							https://radario.ru/customer/refundTicketsForm
						</a>
					</p>
					<p>
						Заявка на возврат у Яндекс:<br/>
						<a class="underline transition duration-300 ease-in-out hover:text-indigo-600" href="https://yandex.ru/support/tickets/manage/return-money.html" target="_blank" rel="nofollow">
							https://yandex.ru/support/tickets/manage/return-money.html
						</a>
					</p>
				</div>
			</div>
		</div>
	</x-slot>
</x-teatr.layout>
