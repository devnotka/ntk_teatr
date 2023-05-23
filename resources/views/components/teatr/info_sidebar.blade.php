<div class="sticky z-1 top-8">
	<div class="pb-2 md:pb-0 md:pr-8">
		<div class="block transition-all duration-300 ease-in-out md:block">
			@isset($links)
				<div class="hidden md:block w-100 px-2 py-2 mt-2 md:mt-4 mb-4 md:mb-8 rounded border-2 border-dashed border-gray-300 dark:border-gray-700 dark:text-gray-100 backdrop-blur-sm">
					<span class="absolute -mt-6 px-2 bg-white dark:bg-gray-800">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
						</svg>
						Информация
					</span>
					<nav class="flex flex-wrap pt-1 pl-1 items-center text-sm text-white justify-start">
						@foreach($links as $link)
							<a class="{{ Request::is($link['route_name']) ? 'bg-tegold hover:bg-yellow-600' : 'bg-slate-600 hover:bg-slate-700' }} transition duration-300 ease-in-out px-2 py-1 mr-1 mb-1 rounded" href="{{ route($link['route_name']) }}">
								{{ $link['name'] }}
							</a>
						@endforeach
					</nav>
				</div>
			@endisset
		</div>
	</div>
</div>