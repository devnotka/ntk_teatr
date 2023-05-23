<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="w-full bg-gradient-to-r from-slate-200/25 via-tegold/75 to-gray-600/25 backdrop-blur-sm">
			<div class="container w-full max-w-7xl mx-auto text-white px-4 pt-6 pb-8 md:px-4 md:pt-12 md:pb-16 transition-all duration-300 ease-in-out">
				<x-teatr.breadcrumbs :breadcrumbs="$breadcrumbs"></x-teatr.breadcrumbs>
				<h1 class="uppercase text-white tracking-tighter text-2xl md:text-3xl filter drop-shadow transition-all duration-300 ease-in-out">
					Художественно-постановочная часть Новгородского театра драмы
				</h1>
			</div>
		</div>
		<div class="container w-full max-w-7xl mx-auto px-4 md:my-4 py-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<x-teatr.fedor2_left></x-teatr.fedor2_left>
			<x-teatr.fedor2_right></x-teatr.fedor2_right>
			<div class="col-span-4 md:col-span-2 lg:col-span-3 md:pr-8 md:border-r md:border-gray-300 md:border-dashed">
				<div class="w-full p-4 bg-white dark:bg-gray-800">
					<div class="w-full mb-8">
						<h2 class="mb-2 uppercase text-lg">
							Художественная часть
						</h2>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Помощник главного режиссера по труппе
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Герасимова<wbr>&nbsp;Светлана<wbr>&nbsp;Николаевна
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Помощник режиссера
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Запольская<wbr>&nbsp;Наталья<wbr>&nbsp;Александровна
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Помощник режиссера
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Федотова<wbr>&nbsp;Светлана<wbr>&nbsp;Михайловна
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
					<div class="w-full mb-8">
						<h2 class="mb-2 uppercase text-lg">
							Гримерно-постижерный цех
						</h2>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Заведующая гримерным цехом
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Мысливец<wbr>&nbsp;Марина<wbr>&nbsp;Васильевна
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
					<div class="w-full mb-8">
						<h2 class="mb-2 uppercase text-lg">
							Электро-осветительный цех
						</h2>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Художник по свету
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Баталин<wbr>&nbsp;Александр<wbr>&nbsp;Александрович
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
					<div class="w-full mb-8">
						<h2 class="mb-2 uppercase text-lg">
							Радиоцех
						</h2>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Заведующий радиоцехом, звукооператор
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Михеев<wbr>&nbsp;Александр<wbr>&nbsp;Вадимович
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Звукорежиссер
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Вишняков<wbr>&nbsp;Евгений<wbr>&nbsp;Александрович
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
					<div class="w-full mb-8">
						<h2 class="mb-2 uppercase text-lg">
							Реквизиторский цех
						</h2>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Заведующая реквизиторским цехом
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Леонова<wbr>&nbsp;Светлана<wbr>&nbsp;Васильевна
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
					<div class="w-full mb-8">
						<h2 class="mb-2 uppercase text-lg">
							Костюмерный цех
						</h2>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Заведующая костюмерным цехом
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Мешкова<wbr>&nbsp;Лидия<wbr>&nbsp;Сергеевна<br/>
										(Заслуженный<wbr>&nbsp;работник<wbr>&nbsp;культуры<wbr>&nbsp;РФ)
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Костюмер
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Павлова<wbr>&nbsp;Мария<wbr>&nbsp;Евгеньевна
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Костюмер
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Щеглова<wbr>&nbsp;Татьяна<wbr>&nbsp;Анатольевна
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
					<div class="w-full mb-8">
						<h2 class="mb-2 uppercase text-lg">
							Монтировочный цех
						</h2>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Заведующий монтировочным цехом
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Сотин<wbr>&nbsp;Александр<wbr>&nbsp;Николаевич
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Машинист сцены
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Иванов<wbr>&nbsp;Вадим<wbr>&nbsp;Сергеевич
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Машинист сцены
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Славнов<wbr>&nbsp;Николай<wbr>&nbsp;Владимирович
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
					<div class="w-full mb-8">
						<h2 class="mb-2 uppercase text-lg">
							Художественно-бутафорский цех
						</h2>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Заведующая художественно-бутафорским цехом
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Мельник<wbr>&nbsp;Наталья<wbr>&nbsp;Николаевна
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Бутафор
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Токарев<wbr>&nbsp;Юрий<wbr>&nbsp;Леонидович
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Заведующий поделочным цехом
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Павлов<wbr>&nbsp;Александр<wbr>&nbsp;Владимирович
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
					</div>
					<div class="w-full mb-8">
						<h2 class="mb-2 uppercase text-lg">
							Пошивочный цех
						</h2>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Закройщик
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Тизян<wbr>&nbsp;Алла<wbr>&nbsp;Иосифовна
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Портная
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Дробязко<wbr>&nbsp;Ангелина<wbr>&nbsp;Арсентьевна 
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Портная
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Коновалова<wbr>&nbsp;Галина<wbr>&nbsp;Владимировна
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
						</div>
						<div class="grid grid-cols-2 mb-2 pb-px border-b border-dotted border-gray-300 dark:border-gray-600">
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1">
									<span class="pr-1 bg-white dark:bg-gray-800">
										Портная
									</span>
								</div>
							</div>
							<div class="col-span-1 flex flex-col justify-end -mb-1">
								<div class="-mb-1 text-right">
									<span class="pl-1 bg-white dark:bg-gray-800">
										Соловьева<wbr>&nbsp;Елена<wbr>&nbsp;Викторовна
									</span>
								</div>
							</div>
							<div class="clear-both"></div>
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