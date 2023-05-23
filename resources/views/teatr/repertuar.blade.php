<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="container w-full max-w-7xl mx-auto pb-4 md:px-4 md:my-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<x-teatr.fedor_left></x-teatr.fedor_left>
			<x-teatr.fedor_right></x-teatr.fedor_right>
			<h1 class="block md:hidden text-center col-span-4 px-4 py-4 uppercase text-lg">
					Репертуар Новгородского театра драмы
			</h1>
			<div class="col-span-4 mx-4 md:mx-0 md:col-span-1">
				@isset($categories, $tags)
					<x-teatr.repertuar_filters :categories="$categories" :tags="$tags"></x-teatr.repertuar_filters>
				@endisset
			</div>
			<div class="col-span-4 transition-all duration-300 ease-in-out md:col-span-2 lg:col-span-3 md:pl-8 md:border-l md:border-gray-300 md:border-dashed">
				<h1 class="hidden md:block pb-8 uppercase text-xl">
					Репертуар Новгородского театра драмы
				</h1>
				@isset($events)
					<div class="flex flex-wrap backdrop-blur-sm rounded justify-start dark:text-gray-300 transition-all duration-300 ease-in-out">
						@foreach($events as $event)					
							<div class="w-full sm:w-1/2 md:w-full lg:w-1/2 sm:p-2">
								<div class="relative w-full overflow-hidden">
									@isset($event->ageRestriction)
										<div class="absolute right-4 top-2 w-12 text-xl text-white font-bold uppercase">
											<div class="w-full text-right">
												{{ $event->ageRestriction }}+
											</div>
										</div>
									@endisset
									@isset($event->id)
										<a href="{{ route('repertuar.id', [ 'id' => $event->id ]) }}">
											<div class="absolute bottom-0 w-full h-20 bg-gradient-to-b from-transparent to-black opacity-50 sm:rounded-b"></div>
										</a>
									@endisset
									@isset($event->category->sysName)
										<a href="{{ route('repertuar.category', [ 'category' => $event->category->sysName ]) }}">
											<div class="absolute left-4 bottom-6 text-sm text-center text-white uppercase filter drop-shadow-lg">
												{{ $event->category->name }}
											</div>
										</a>
									@endisset
									@isset($event->id)
										<a href="{{ route('repertuar.id', [ 'id' => $event->id ]) }}">
											<img class="sm:rounded" src="{{ $event->getExplodeImagename($event->image->name, 720, 500) }}" />
										</a>
									@endisset
								</div>
								<div class="px-2 pt-2 pb-6 sm:pb-2 w-full">
									@isset($event->id)
										<a href="{{ route('repertuar.id', [ 'id' => $event->id ]) }}">
											<div class="uppercase font-bold dark:text-white">
												{!! $event->name !!}
											</div>
										</a>
									@endisset
									@isset($event->shortDescription)
										<div class="text-base">
											{{ $event->shortDescription }}
										</div>
									@endisset
									@isset($event->tags)
										<div class="py-2 text-sm lowercase italic">
											@foreach($event->tags as $tag)
												<a class="transition duration-300 ease-in-out hover:text-tegold" href="{{ route('repertuar.tag', [ 'tag' => $tag->sysName ]) }}">
													#{{ $tag->name }}
												</a>
											@endforeach
										</div>
									@endisset
								</div>
							</div>
						@endforeach
					</div>
				@endisset
				@empty($events)
					<div class="my-40 text-center">
						<div class="py-8">
							По заданным критериям событий не найдено.
						</div>
						<a class="p-4 rounded text-white bg-tegold" href="{{ route('repertuar') }}">
							Перейти в «Репертуар»
						</a>
					</div>
				@endempty
			</div>
		</div>
	</x-slot>
</x-teatr.layout>