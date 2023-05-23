<div class="sticky z-1 top-4">
	<div x-data="{ filters_open: false }" :class="{'pb-6': filters_open, 'pb-2': !filters_open}" class="md:pb-0 md:pr-8">
		<div @click="filters_open = !filters_open" class="block pb-2 text-right uppercase transition-all duration-300 ease-in-out md:pb-0 md:hidden">
			<a class="transition duration-300 ease-in-out text-base cursor-pointer hover:text-tegold">
				<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
				</svg>
				Фильтры
			</a>
			<a :class="{'block': filters_open, 'hidden': !filters_open}" class="absolute top-1 left-2 text-xs lowercase transition duration-300 ease-in-out hover:text-tegold" href="">
				<svg fill="currentColor" viewBox="0 0 20 20" class="inline-block w-3 h-3">
					<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
				Сбросить
			</a>
		</div>
		<h2 class="hidden uppercase mb-2 md:block">
			<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
			</svg>
			Фильтры
			<a class="absolute top-2 right-8 text-xs lowercase transition duration-300 ease-in-out hover:text-tegold" href="">
				<svg fill="currentColor" viewBox="0 0 20 20" class="inline-block w-3 h-3">
					<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
				</svg>
				Сбросить
			</a>
		</h2>
		<div :class="{'block': filters_open, 'hidden': !filters_open}" class="transition-all duration-300 ease-in-out md:block">
			@isset($categories)
				<div class="block w-100 px-2 py-2 mt-4 md:mt-8 mb-4 md:mb-8 rounded border-2 border-dashed border-gray-300 dark:border-gray-700 dark:text-gray-100 backdrop-blur-sm">
					<span class="absolute -mt-6 px-2 bg-white dark:bg-gray-800">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
						</svg>
						По категории
					</span>
					<nav class="flex flex-wrap pt-1 pl-1 items-center text-sm text-white justify-start">
						@foreach($categories as $category)
							<a class="{{ Request::is('repertuar/category/'.$category['sysName']) ? 'bg-tegold hover:bg-yellow-600' : 'bg-slate-600 hover:bg-slate-700' }} transition duration-300 ease-in-out px-2 py-1 mr-1 mb-1 rounded" href="{{ route('repertuar.category', [ 'category' => $category['sysName'] ]) }}">
								{{ $category['name'] }}
							</a>
						@endforeach
					</nav>
				</div>
			@endisset
			@isset($tags)
				<div class="block w-100 px-2 py-2 mb-4 md:mb-8 rounded border-2 border-dashed border-gray-300 dark:border-gray-700 dark:text-gray-100 backdrop-blur-sm">
					<span class="absolute -mt-6 px-2 bg-white dark:bg-gray-800">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
						</svg>
						По тегу #
					</span>
					<nav class="flex flex-wrap pt-1 pl-1 items-center text-sm text-white justify-start">
						@foreach($tags as $tag)
							<a class="{{ Request::is('repertuar/tag/'.$tag['sysName']) ? 'bg-tegold hover:bg-yellow-600' : 'bg-slate-600 hover:bg-slate-700' }} lowercase transition duration-300 ease-in-out px-2 py-1 mr-1 mb-1 rounded" href="{{ route('repertuar.tag', [ 'tag' => $tag['sysName'] ]) }}">
								{{ $tag['name'] }}
							</a>
						@endforeach
					</nav>
				</div>
			@endisset
		</div>
	</div>
</div>