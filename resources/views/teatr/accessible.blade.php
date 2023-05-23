<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="w-full bg-gradient-to-r from-slate-200/25 via-tegold/75 to-gray-600/25 backdrop-blur-sm">
			<div class="container w-full max-w-7xl mx-auto text-white px-4 pt-6 pb-8 md:px-4 md:pt-12 md:pb-16 transition-all duration-300 ease-in-out">
				<x-teatr.breadcrumbs :breadcrumbs="$breadcrumbs"></x-teatr.breadcrumbs>
				<h1 class="uppercase text-white tracking-tighter text-2xl md:text-3xl filter drop-shadow transition-all duration-300 ease-in-out">
					Доступная среда в Новгородском театре драмы
				</h1>
			</div>
		</div>
		<div class="container w-full max-w-7xl mx-auto px-4 md:my-4 py-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<x-teatr.fedor2_left></x-teatr.fedor2_left>
			<x-teatr.fedor2_right></x-teatr.fedor2_right>
			<div class="col-span-4 md:col-span-2 lg:col-span-3 md:pr-8 md:border-r md:border-gray-300 md:border-dashed backdrop-blur-sm">
				<div class="">
					<div class="flex justify-center mb-4">
						<img class="object-contain object-center rounded border border-white dark:border-gray-900" src="/images/accessible/0001.jpg" alt=""/>
					</div>
					<p>
						С целью комфортного размещения лиц с ограниченными функциями передвижения в Новгородском академическом театре драмы имени <span class="whitespace-nowrap">Ф. М. Достоевского</span> имеется <strong>мобильный гусеничный подъемник</strong> для перемещения по лестничным маршам, который предоставит дежурный администратор.
					</p>
					<p>
						Для людей, имеющих ограничение опорно-двигательного аппарата и гостей в креслах-каталках, предусмотрены специальные условия посещения театра:
					</p>
					<p>
						<ul class="list-decimal">
							<li class="ml-4">
								Во время любого репертуарного спектакля театр может принять некоторое количество гостей в креслах-каталках, с предоставлением специально отведённого места.
							</li>
							<li class="ml-4">
								Для организации посещения театра необходимо связаться с администратором по телефону <strong><a href="tel:+78162772574" target="_blank">77-25-74</a></strong>, чтобы получить необходимые разъяснения. В случае если имеются другие ограничения здоровья, администратор по телефону ответит на имеющиеся вопросы.
							</li>
							<li class="ml-4">
								С заранее приобретенными билетами необходимо обратиться к дежурному администратору с просьбой проводить к месту просмотра.
							</li>
						</ul>
					</p>
					<div class="flex justify-center mt-4">
						<img class="object-contain object-center rounded border border-white dark:border-gray-900" src="/images/accessible/0002.jpg" alt=""/>
					</div>
					<div class="flex justify-center mt-4">
						<img class="object-contain object-center rounded border border-white dark:border-gray-900" src="/images/accessible/0003.jpg" alt=""/>
					</div>
					<div class="flex justify-center mt-4">
						<img class="object-contain object-center rounded border border-white dark:border-gray-900" src="/images/accessible/0004.jpg" alt=""/>
					</div>
					<div class="flex justify-center mt-4">
						<img class="object-contain object-center rounded border border-white dark:border-gray-900" src="/images/accessible/0005.jpg" alt=""/>
					</div>
					<div class="flex justify-center mt-4">
						<img class="object-contain object-center rounded border border-white dark:border-gray-900" src="/images/accessible/0006.jpg" alt=""/>
					</div>
				</div>
			</div>
			<div class="hidden md:block md:col-span-1">
				<x-teatr.oteatre2></x-teatr.oteatre2>
			</div>
		</div>
	</x-slot>
</x-teatr.layout>