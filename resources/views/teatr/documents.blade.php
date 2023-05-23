<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="container w-full max-w-7xl mx-auto pb-4 md:px-4 md:my-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<h1 class="block md:hidden text-center col-span-4 px-4 py-4 uppercase text-lg">
					Документы Новгородского театра драмы
			</h1>
			<div class="col-span-4 mx-4 md:mx-0 md:col-span-1">
				@isset($links)
					<x-teatr.info_sidebar :links="$links"></x-teatr.info_sidebar>
				@endisset
			</div>
			<div class="col-span-4 transition-all duration-300 ease-in-out md:col-span-2 lg:col-span-3 md:pl-8 md:border-l md:border-gray-300 md:border-dashed backdrop-blur-sm">
				<h1 class="hidden md:block pt-2 uppercase text-xl">
					Документы Новгородского театра драмы
				</h1>
				<div class="p-4 md:p-0">
					<div class="md:py-4">
						<ul class="px-8 list-disc list-outside">
							<li>
								<a class="hover:text-tegold transition-all duration-300 ease-in-out" href="/docs/pravila-prodazhi-i-vozvrata-biletov-2023.pdf" target="_blank">
									Правила продажи и возврата билетов ОАУКИ «НОТКА» 2023 год
								</a>
							</li>
							<li>
								<a class="hover:text-tegold transition-all duration-300 ease-in-out" href="/docs/Polozhenie-o-poryadke-i-usloviyakh-prisutstviya-detey.pdf" target="_blank">
									Положение о порядке и условиях присутствия детей
								</a>
							</li>
							<li>
								<a class="hover:text-tegold transition-all duration-300 ease-in-out" href="/docs/obrazec_bileta_notka.pdf" target="_blank">
									Образец билета ОАУКИ «НОТКА»
								</a>
							</li>
							<li>
								<a class="hover:text-tegold transition-all duration-300 ease-in-out" href="https://notka-novgorod.ru/docs/cat/1" target="_blank">
									Другие документы ОАУКИ «НОТКА»
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</x-slot>
</x-teatr.layout>