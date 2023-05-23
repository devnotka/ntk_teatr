<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="container w-full max-w-7xl mx-auto">
			<div class="px-4 pt-8 text-gray-700 dark:text-white">
				<x-teatr.breadcrumbs :breadcrumbs="$breadcrumbs"></x-teatr.breadcrumbs>
			</div>
		</div>
		<div class="container w-full max-w-7xl mx-auto px-4 md:my-4 py-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<x-teatr.fedor_left></x-teatr.fedor_left>
			<x-teatr.fedor_right></x-teatr.fedor_right>
			<div class="col-span-4 md:col-span-2 lg:col-span-3 md:pr-8 md:border-r md:border-gray-300 md:border-dashed">
				<div class="relative">
					<div class="flex flex-col rounded justify-start sm:max-h-96 sm:bg-gray-50 sm:flex-row dark:text-gray-300 sm:dark:bg-gray-700">
						<img class="w-auto sm:w-1/3 mx-auto rounded-r rounded-l sm:mx-0 sm:rounded-r-none sm:rounded-l" src="{{ $photo }}" alt="{{ $title }}" />
						<div class="w-auto sm:w-2/3 rounded mt-4 sm:overflow-hidden sm:mt-2 sm:px-4">
							<h1 class="text-center sm:text-xl sm:text-left">
								{{ $h1 }}
							</h1>
							@isset($status)
								<p class="text-center sm:text-left">
									{{ $status }}
								</p>
							@endisset
						</div>
					</div>
					@isset($sex, $bdate)
						<div class="flex flex-row w-full pt-6">
							<div class="w-1/3 text-right pr-4">
								<p class="sticky z-1 top-2">
									{{ ($sex === true) ? 'Родился:' : 'Родилась:' }}
								</p>
							</div>
							<div class="w-2/3 text-left pl-4 border-l border-gray-300">
								<p>
									{{ $bdate }}
								</p>
							</div>
						</div>
					@endisset
					@isset($biografy_facts)
						<div class="flex flex-row pt-6">
							<div class="w-1/3 text-right pr-4">
								<p class="sticky z-1 top-2">
									Факты биографии:
								</p>
							</div>
							<div class="w-2/3 text-left pl-4 border-l border-gray-300">
								<ul class="actor">
									@foreach ($biografy_facts as $biografy_fact)
										<li>
											{{ $biografy_fact }}
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					@endisset
					@isset($awards)
						<div class="flex flex-row pt-6">
							<div class="w-1/3 text-right pr-4">
								<p class="sticky z-1 top-2">
									Награды и дипломы:
								</p>
							</div>
							<div class="w-2/3 text-left pl-4 border-l border-gray-300">
								<ul class="actor">
									@foreach ($awards as $award)
										<li>
											{{ $award }}
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					@endisset
					@isset($publications)
						<div class="flex flex-row pt-6">
							<div class="w-1/3 text-right pr-4">
								<p class="sticky z-1 top-2">
									Литературная деятельность и публикации:
								</p>
							</div>
							<div class="w-2/3 text-left pl-4 border-l border-gray-300">
								<ul class="actor">
									@foreach ($publications as $publication)
										<li>
											{{ $publication }}
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					@endisset
					@isset($vse_postanovki)
						<div class="flex flex-row pt-6">
							<div class="w-1/3 text-right pr-4">
								<p class="sticky z-1 top-2">
									Работы художника:
								</p>
							</div>
							<div class="w-2/3 text-left pl-4 border-l border-gray-300">
								<ul class="actor">
									@foreach ($vse_postanovki as $postanovka)
										<li>
											{{ $postanovka }}
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					@endisset
					@isset($theatre_fests)
						<div class="flex flex-row pt-6">
							<div class="w-1/3 text-right pr-4">
								<p class="sticky z-1 top-2">
									Участие в театральных фестивалях:
								</p>
							</div>
							<div class="w-2/3 text-left pl-4 border-l border-gray-300">
								<ul class="actor">
									@foreach ($theatre_fests as $theatre_fest)
										<li>
											{{ $theatre_fest }}
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					@endisset
					@isset($postanovki)
						<div class="flex flex-row pt-6">
							<div class="w-1/3 text-right pr-4">
								<p class="sticky z-1 top-2">
									Сценографии в Новгород<wbr>ском театре драмы:
								</p>
							</div>
							<div class="w-2/3 text-left pl-4 border-l border-gray-300">
								<ul class="actor">
									@foreach ($postanovki as $postanovka)
										<li>
											{{ $postanovka }}
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					@endisset
					@isset($extentions)
						<div class="flex flex-row pt-6">
							<div class="w-1/3 text-right pr-4">
								<p class="sticky z-1 top-2">
									Ещё:
								</p>
							</div>
							<div class="w-2/3 text-left pl-4 border-l border-gray-300">
								<ul class="actor">
									@foreach ($extentions as $extention)
										<li>
											{{ $extention }}
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					@endisset
				</div>
			</div>
			<div class="hidden md:block md:col-span-1">
				<x-teatr.oteatre2></x-teatr.oteatre2>
			</div>
		</div>
	</x-slot>
</x-teatr.layout>