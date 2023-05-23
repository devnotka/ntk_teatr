<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="relative container w-full max-w-7xl mx-auto pb-4 md:px-4 md:my-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<x-teatr.fedor_left></x-teatr.fedor_left>
			<x-teatr.fedor_right></x-teatr.fedor_right>
			<h1 class="block md:hidden text-center col-span-4 px-4 py-4 uppercase text-lg">
					Афиша Новгородского театра драмы
			</h1>
			<div class="col-span-4 mx-4 md:mx-0 md:col-span-1">
				@isset($categories, $tags, $variants)
					<x-teatr.afisha_filters :categories="$categories" :tags="$tags" :prices="$prices" :variants="$variants"></x-teatr.afisha_filters>
				@endisset
			</div>
			<div class="col-span-4 transition-all duration-300 ease-in-out md:col-span-2 lg:col-span-3 md:pl-8 md:border-l md:border-gray-300 md:border-dashed">
				<h1 class="hidden md:block pb-8 uppercase text-xl">
					Афиша Новгородского театра драмы
				</h1>
				@isset($actual_seances)
					<div class="flex flex-wrap justify-start backdrop-blur-sm rounded dark:text-gray-300 transition-all duration-300 ease-in-out">
						@foreach($actual_seances as $seance)
							@if($seance['event']->id != '1246147')
							<div class="w-full sm:w-1/2 md:w-full lg:w-1/2 sm:p-2">
								<div class="relative w-full overflow-hidden">
									@isset($seance['event']->id)
										@if(array_key_exists($seance['start'], $replaces))
											<div class="">
												<a href="{{ route('repertuar.id', [ 'id' => $seance['event']->id ]) }}">
													<img class="brightness-50 contrast-50 sm:rounded" src="{{ $seance['event']->getExplodeImagename($seance['event']->image->name, 720, 500) }}" />
												</a>
												<a href="{{ route('repertuar.id', [ 'id' => $seance['event']->id ]) }}">
													<div class="absolute bottom-0 w-full h-20 bg-gradient-to-b from-transparent to-black opacity-50 sm:rounded-b"></div>
												</a>
												<a href="{{ route('repertuar.id', [ 'id' => $replaces[$seance['start']]['to'] ]) }}">
													<img class="absolute bottom-2 right-2 rounded" src="{{ $seance['event']->getExplodeImagename($seance['event']->getEventById($replaces[$seance['start']]['to'])->image->name, 270, 185) }}" />
												</a>
											</div>
										@else
											<a href="{{ route('repertuar.id', [ 'id' => $seance['event']->id ]) }}">
												<img class="sm:rounded" src="{{ $seance['event']->getExplodeImagename($seance['event']->image->name, 720, 500) }}" />
											</a>
											<a href="{{ route('repertuar.id', [ 'id' => $seance['event']->id ]) }}">
												<div class="absolute bottom-0 w-full h-20 bg-gradient-to-b from-transparent to-black opacity-50 sm:rounded-b"></div>
											</a>		
										@endif
									@endisset
									<div class="absolute top-0 left-4 text-sm text-center text-white uppercase transition-all duration-300 ease-in-out shadow hover:shadow-lg">
										@foreach(explode(' ', $seance['start']) as $key => $fragment)
											@if($key === 0)
												<div class="px-4 pb-1 bg-gray-700 opacity-80">
													<span class="text-2xl font-bold">{{ $fragment }}</span><br/>
											@elseif($key != 0 && $key != 3)
													{{ $fragment }}<br/>
											@else
												</div>
												<div class="p-1 text-xs text-gray-100 bg-pink-700 rounded-b">
													{{ $fragment }}
												</div>
											@endif
										@endforeach
									</div>
									@if(array_key_exists($seance['start'], $replaces))
										@isset($seance['event']->getEventById($replaces[$seance['start']]['to'])->statusPushka)
											@if($seance['event']->getEventById($replaces[$seance['start']]['to'])->statusPushka === 'accepted')
												<div class="absolute top-0 right-4 text-sm text-center text-black uppercase transition-all duration-300 ease-in-out bg-white rounded-b shadow hover:shadow-lg">
													<x-teatr.pushkin_icon></x-teatr.pushkin_icon>
												</div>
											@endif
										@endisset
									@else
										@isset($seance['event']->statusPushka)
											@if($seance['event']->statusPushka === 'accepted')
												<div class="absolute top-0 right-4 text-sm text-center text-black uppercase transition-all duration-300 ease-in-out bg-white rounded-b shadow hover:shadow-lg">
													<x-teatr.pushkin_icon></x-teatr.pushkin_icon>
												</div>
											@endif
										@endisset
									@endif
									@if(array_key_exists($seance['start'], $replaces))
										@isset($seance['event']->getEventById($replaces[$seance['start']]['to'])->ageRestriction)
											<div class="absolute right-4 {{ ($seance['event']->getEventById($replaces[$seance['start']]['to'])->statusPushka == 'accepted') ? 'top-12' : 'top-2' }} w-12 text-xl text-white font-bold uppercase">
												<div class="w-full text-right">
													{{ $seance['event']->getEventById($replaces[$seance['start']]['to'])->ageRestriction }}+
												</div>
											</div>
										@endisset
									@else
										@isset($seance['event']->ageRestriction)
											<div class="absolute right-4 {{ ($seance['event']->statusPushka == 'accepted') ? 'top-12' : 'top-2' }} w-12 text-xl text-white font-bold uppercase">
												<div class="w-full text-right">
													{{ $seance['event']->ageRestriction }}+
												</div>
											</div>
										@endisset
									@endif
									@if(array_key_exists($seance['start'], $replaces))
										@isset($seance['event']->getEventById($replaces[$seance['start']]['to'])->extraFields)
											@isset($seance['event']->getEventById($replaces[$seance['start']]['to'])->extraFields->premiere)
												@if($seance['event']->getEventById($replaces[$seance['start']]['to'])->extraFields->premiere === true)
													<a href="{{ route('afisha.variant', [ 'variant' => 'premiers' ]) }}">
														<div class="absolute left-4 bottom-4 p-2 rounded text-sm text-center text-white uppercase bg-pink-700 filter drop-shadow-lg">
																Премьера!
														</div>
													</a>
												@else
													@isset($seance['event']->getEventById($replaces[$seance['start']]['to'])->category->sysName)
														<a href="{{ route('afisha.category', [ 'category' => $seance['event']->getEventById($replaces[$seance['start']]['to'])->category->sysName ]) }}">
															<div class="absolute left-4 bottom-6 text-sm text-center text-white uppercase filter drop-shadow-lg">
																	{{ $seance['event']->getEventById($replaces[$seance['start']]['to'])->category->name }}
															</div>
														</a>
													@endisset
												@endif
											@else
												@isset($seance['event']->getEventById($replaces[$seance['start']]['to'])->category->sysName)
													<a href="{{ route('afisha.category', [ 'category' => $seance['event']->getEventById($replaces[$seance['start']]['to'])->category->sysName ]) }}">
														<div class="absolute left-4 bottom-6 text-sm text-center text-white uppercase filter drop-shadow-lg">
																{{ $seance['event']->getEventById($replaces[$seance['start']]['to'])->category->name }}
														</div>
													</a>
												@endisset
											@endisset
										@else
											@isset($seance['event']->getEventById($replaces[$seance['start']]['to'])->category->sysName)
												<a href="{{ route('afisha.category', [ 'category' => $seance['event']->getEventById($replaces[$seance['start']]['to'])->category->sysName ]) }}">
													<div class="absolute left-4 bottom-6 text-sm text-center text-white uppercase filter drop-shadow-lg">
															{{ $seance['event']->getEventById($replaces[$seance['start']]['to'])->category->name }}
													</div>
												</a>
											@endisset
										@endisset
									@else
										@isset($seance['event']->extraFields)
											@isset($seance['event']->extraFields->premiere)
												@if($seance['event']->extraFields->premiere === true)
													<a href="{{ route('afisha.variant', [ 'variant' => 'premiers' ]) }}">
														<div class="absolute left-4 bottom-4 p-2 rounded text-sm text-center text-white uppercase bg-pink-700 filter drop-shadow-lg">
																Премьера!
														</div>
													</a>
												@else
													@isset($seance['event']->category->sysName)
														<div  x-data="{ popover: false }" class="absolute left-4 bottom-6 text-sm text-center text-white uppercase filter drop-shadow-lg">
															<a href="{{ route('afisha.category', [ 'category' => $seance['event']->category->sysName ]) }}">
																{{ $seance['event']->category->name }}
															</a>
															@if($seance['event']->organizerPlace || $seance['event']->organizerPerson)
																<div class="before:block before:absolute before:-inset-1 before:bg-pink-700 before:rounded-full relative mt-2 cursor-pointer" @click="popover = ! popover">
																	<span class="relative text-white">Гастроли </span>
																</div>
																<div class="absolute left-0 bottom-6 text-sm p-2 mb-2 ml-0 bg-gray-700 opacity-90 rounded text-left normal-case border border-pink-700 transition-all duration-300 ease-in-out" x-show="popover">
																	{{ $seance['event']->organizerPerson }}
																</div>
															@endif
														</div>
													@endisset
												@endif
											@else
												@isset($seance['event']->category->sysName)
													<div  x-data="{ popover: false }" class="absolute left-4 bottom-6 text-sm text-center text-white uppercase filter drop-shadow-lg">
														<a href="{{ route('afisha.category', [ 'category' => $seance['event']->category->sysName ]) }}">
															{{ $seance['event']->category->name }}
														</a>
														@if($seance['event']->organizerPlace || $seance['event']->organizerPerson)
															<div class="before:block before:absolute before:-inset-1 before:bg-pink-700 before:rounded-full relative mt-2 cursor-pointer" @click="popover = ! popover">
																<span class="relative text-white">Гастроли </span>
															</div>
															<div class="absolute left-0 bottom-6 text-sm p-2 mb-2 ml-0 bg-gray-700 opacity-90 rounded text-left normal-case border border-pink-700 transition-all duration-300 ease-in-out" x-show="popover">
																{{ $seance['event']->organizerPerson }}
															</div>
														@endif
													</div>
												@endisset
											@endisset
										@else
											@isset($seance['event']->category->sysName)
												<div  x-data="{ popover: false }" class="absolute left-4 bottom-6 text-sm text-center text-white uppercase filter drop-shadow-lg">
													<a href="{{ route('afisha.category', [ 'category' => $seance['event']->category->sysName ]) }}">
														{{ $seance['event']->category->name }}
													</a>
													@if($seance['event']->organizerPlace || $seance['event']->organizerPerson)
														<div class="before:block before:absolute before:-inset-1 before:bg-pink-700 before:rounded-full relative mt-2 cursor-pointer" @click="popover = ! popover">
															<span class="relative text-white">Гастроли </span>
														</div>
														<div class="absolute left-0 bottom-6 text-sm p-2 mb-2 ml-0 bg-gray-700 opacity-90 rounded text-left normal-case border border-pink-700 transition-all duration-300 ease-in-out" x-show="popover">
															{{ $seance['event']->organizerPerson }}
														</div>
													@endif
												</div>
											@endisset
										@endisset
									@endif
									@if(in_array($seance['start'], $cancels))
										<div class="absolute right-4 bottom-4 bg-pink-700 font-bold text-sm text-center text-white rounded">
											<span class="inline-block px-4 pt-3 pb-1 uppercase overflow-hidden">
												Событие<br/>отменено!
											</span>
										</div>
									@elseif(array_key_exists($seance['start'], $replaces))
										@isset($seance['event']->getEventById($replaces[$seance['start']]['to'])->saleLink)
											@if($replaces[$seance['start']]['to'] == '721371')
												<a href="https://widget.afisha.yandex.ru/w/events/192837?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24" class="group absolute right-4 bottom-4 font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
											@else
												<a href="{{ $seance['event']->getEventById($replaces[$seance['start']]['to'])->saleLink }}" class="group absolute right-4 bottom-4 font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
											@endif
												<div class="inline-block pr-2 pl-2 py-2 text-black rounded-l border-r-2 border-yellow-400 border-dashed bg-gray-100">
													<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
													</svg>
												</div>
												<span class="inline-block px-4 overflow-hidden" style="margin-bottom:-7px;">
													<div class="w-16 whitespace-nowrap transition duration-300 ease-in-out transform -translate-x-24 hover:translate-x-0">
														<span class="uppercase">Купить</span>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<span class="">от&nbsp;{{ $seance['event']->getEventById($replaces[$seance['start']]['to'])->price }}₽</span>
													</div>
												</span>
											</a>
										@endisset
									@else
										@isset($seance['event']->saleLink)
											@if($seance['event']->id == '721371')
												<a href="https://widget.afisha.yandex.ru/w/events/192837?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24" class="group absolute right-4 bottom-4 font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
											@else
												<a href="{{ $seance['event']->saleLink }}" class="group absolute right-4 bottom-4 font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
											@endif
												<div class="inline-block pr-2 pl-2 py-2 text-black rounded-l border-r-2 border-yellow-400 border-dashed bg-gray-100">
													<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
													</svg>
												</div>
												<span class="inline-block px-4 overflow-hidden" style="margin-bottom:-7px;">
													<div class="w-16 whitespace-nowrap transition duration-300 ease-in-out transform -translate-x-24 hover:translate-x-0">
														<span class="uppercase">Купить</span>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<span class="">от&nbsp;{{ $seance['event']->price }}₽</span>
													</div>
												</span>
											</a>
										@endisset
									@endif
								</div>
								<div class="px-2 pt-2 pb-6 sm:pb-2 w-full">
									@isset($seance['event']->id)
										@if(array_key_exists($seance['start'], $replaces))
											<span class="uppercase font-bold">
												Замена
											</span>
											<a href="{{ route('repertuar.id', [ 'id' => $seance['event']->id ]) }}">
												<span class="line-through uppercase font-bold hover:text-indigo-600 transition duration-300 ease-in-out">
													{{ $seance['event']->name }}
												</span>
												&nbsp;
											</a>
											<span class="uppercase font-bold">
												на
											</span>
											<a href="{{ route('repertuar.id', [ 'id' => $replaces[$seance['start']]['to'] ]) }}">
												<span class="uppercase font-bold hover:text-indigo-600 transition duration-300 ease-in-out">
													{{ $seance['event']->getEventById($replaces[$seance['start']]['to'])->name }}
												</span>
											</a>
										@else
											<a href="{{ route('repertuar.id', [ 'id' => $seance['event']->id ]) }}">
												<div class="uppercase font-bold hover:text-indigo-600 transition duration-300 ease-in-out">
													{{ $seance['event']->name }}
												</div>
											</a>
										@endif
									@endisset
									@isset($seance['event']->description)
										@if(array_key_exists($seance['start'], $replaces))
											<div class="text-base">
												Все ранее приобретенные билеты на {{ $seance['start'] }} действительны.
											</div>
										@else
											<div class="text-base">
												{!! $seance['event']->getTrancatedStr($seance['event']->description, 200) !!}
											</div>
										@endif
									@endisset
									@isset($seance['event']->tags)
										<div class="py-2 text-sm lowercase italic">
											@foreach($seance['event']->tags as $tag)
												<a class="transition duration-300 ease-in-out hover:text-tegold" href="{{ route('afisha.tag', [ 'tag' => $tag->sysName ]) }}">
													#{{ $tag->name }}
												</a>
											@endforeach
										</div>
									@endisset
								</div>
							</div>
							@endif
						@endforeach
					</div>
				@endisset
				@empty($actual_seances)
					<div class="my-40 text-center">
						<div class="py-8">
							По заданным критериям событий не найдено.
						</div>
						<a class="p-4 rounded text-white bg-tegold" href="{{ route('repertuar') }}">
							Перейти в «Репертуар»
						</a>
					</div>
				@endempty
				
				@isset($now, $now_in_human_format)
					<div>{{ $now }} / {{ $now_in_human_format }}</div>
				@endisset
				
				@isset($events)
					<div>
						@foreach($events as $event)
							<div>
								<div class="bg-gray-300 text-black">
									{{ $event->id }} {{ $event->name }} {{ $event->end }}
								</div>
								@foreach($event->seances as $seance)
									{{ var_dump($seance->end) }}
								@endforeach
							</div>
						@endforeach
					</div>
				@endisset
			</div>
		</div>
	</x-slot>
</x-teatr.layout>