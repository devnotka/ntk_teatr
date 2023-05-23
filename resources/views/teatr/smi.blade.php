<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="w-full bg-gradient-to-r from-slate-200/25 via-tegold/75 to-gray-600/25 backdrop-blur-sm">
			<div class="container w-full max-w-7xl mx-auto text-white px-4 pt-6 pb-8 md:px-4 md:pt-12 md:pb-16 transition-all duration-300 ease-in-out">
				<x-teatr.breadcrumbs :breadcrumbs="$breadcrumbs"></x-teatr.breadcrumbs>
				<h1 class="uppercase text-white tracking-tighter text-2xl md:text-3xl filter drop-shadow transition-all duration-300 ease-in-out">
					СМИ о Новгородском областном академическом театре драмы <span class="whitespace-nowrap">имени Ф. М. Достоевского</span>
				</h1>
			</div>
		</div>
		<div class="container w-full max-w-7xl mx-auto px-4 md:my-4 py-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<x-teatr.fedor2_left></x-teatr.fedor2_left>
			<x-teatr.fedor2_right></x-teatr.fedor2_right>
			<div class="col-span-4 md:col-span-2 lg:col-span-3 md:pr-8 md:border-r md:border-gray-300 md:border-dashed backdrop-blur-sm">
				<div class="">
					@foreach($items as $item)
						<h2 class="uppercase text-xl md:text-2xl p-2 pb-2 md:p-4 md:pb-2">
							{{ $item['title'] }}
						</h2>
						<div class="p-2 pb-4 md:p-4 md:pt-2">
							{!! $item['body'] !!}
						</div>
						<div class="italic text-right p-2 hover:text-tegold transition-all duration-300 ease-in-out">
							<a href="{{ $item['smi']['link'] }}" target="_blank" rel="nofollow" noindex>
								{{ $item['smi']['linkname'] }}
								<br/>
								{{ $item['smi']['date'] }}
							</a>
						</div>
					@endforeach
				</div>
			</div>
			<div class="hidden md:block md:col-span-1">
				<x-teatr.oteatre2></x-teatr.oteatre2>
			</div>
		</div>
	</x-slot>
</x-teatr.layout>