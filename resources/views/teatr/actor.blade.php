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
				<div class="">
					<div class="flex flex-col rounded justify-start sm:max-h-60 sm:bg-gray-50 sm:flex-row dark:text-gray-300 sm:dark:bg-gray-700">
						<img class="w-max mx-auto rounded-r rounded-l sm:mx-0 sm:rounded-r-none sm:rounded-l" src="{{ $photo }}" alt="{{ $title }}" />
						<div class="w-full rounded mt-4 sm:overflow-hidden sm:mt-2 sm:px-4 sm:w-auto">
							<h1 class="text-center sm:text-xl sm:text-left">
								{{ $h1 }}
							</h1>
							@isset($status)
								<p class="text-center sm:text-left">
									{{ $status }}
								</p>
							@endisset
							@isset($since)
								<p class="text-center sm:text-left">
									{{ $since }}
								</p>
							@endisset
						</div>
					</div>
					@isset($sex, $bdate)
						<div class="flex flex-row pt-6">
							<div class="w-28 text-right pr-4 sm:w-56">
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
					@isset($education)
						<div class="flex flex-row pt-6">
							<div class="w-28 text-right pr-4 sm:w-56">
								<p class="sticky z-1 top-2">
									Образо<wbr>вание:
								</p>
							</div>
							<div class="w-2/3 text-left pl-4 border-l border-gray-300">
								<p>
									{{ $education }}
								</p>
							</div>
						</div>
					@endisset
					@isset($profession)
						<div class="flex flex-row pt-6">
							<div class="w-28 text-right pr-4 sm:w-56">
								<p class="sticky z-1 top-2">
									Профессия:
								</p>
							</div>
							<div class="w-2/3 text-left pl-4 border-l border-gray-300">
								<p>
									{{ $profession }}
								</p>
							</div>
						</div>
					@endisset
					@isset($sex, $works)
						<div class="flex flex-row pt-6">
							<div class="w-28 text-right pr-4 sm:w-56">
								<p class="sticky z-1 top-2">
									{{ ($sex === true) ? 'Работал:' : 'Работала:' }}
								</p>
							</div>
							<div class="w-2/3 text-left pl-4 border-l border-gray-300">
								<ul class="actor">
									@foreach ($works as $work)
										<li>
											{{ $work }}
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					@endisset
					@isset($awards)
						<div class="flex flex-row pt-6">
							<div class="w-28 text-right pr-4 sm:w-56">
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
					@isset($roles)
						<div class="flex flex-row pt-6">
							<div class="w-28 text-right pr-4 sm:w-56">
								<p class="sticky z-1 top-2">
									Роли в Новгород<wbr>ском театре драмы:
								</p>
							</div>
							<div class="w-2/3 text-left pl-4 border-l border-gray-300">
								<ul class="actor">
									@foreach ($roles as $role)
										<li>
											{{ $role }}
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					@endisset
					@isset($films)
						<div class="flex flex-row pt-6">
							<div class="w-28 text-right pr-4 sm:w-56">
								<p class="sticky z-1 top-2">
									Фильмо<wbr>графия:
								</p>
							</div>
							<div class="w-2/3 text-left pl-4 border-l border-gray-300">
								<ul class="actor">
									@foreach ($films as $film)
										<li>
											{{ $film }}
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					@endisset
					@isset($dubbings)
						<div class="flex flex-row pt-6">
							<div class="w-28 text-right pr-4 sm:w-56">
								<p class="sticky z-1 top-2">
									Дубляж:
								</p>
							</div>
							<div class="w-2/3 text-left pl-4 border-l border-gray-300">
								<ul class="actor">
									@foreach ($dubbings as $dubbing)
										<li>
											{{ $dubbing }}
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					@endisset
					@isset($teleradios)
						<div class="flex flex-row pt-6">
							<div class="w-28 text-right pr-4 sm:w-56">
								<p class="sticky z-1 top-2">
									Работа на телевидении и радио:
								</p>
							</div>
							<div class="w-2/3 text-left pl-4 border-l border-gray-300">
								<ul class="actor">
									@foreach ($teleradios as $teleradio)
										<li>
											{{ $teleradio }}
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					@endisset
					@isset($extentions)
						<div class="flex flex-row pt-6">
							<div class="w-28 text-right pr-4 sm:w-56">
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