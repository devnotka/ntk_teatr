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
					<x-teatr.afisha_filters3 :categories="$categories" :tags="$tags" :prices="$prices" :variants="$variants"></x-teatr.afisha_filters3>
				@endisset
			</div>
			<div class="col-span-4 transition-all duration-300 ease-in-out md:col-span-2 lg:col-span-3 md:pl-8 md:border-l md:border-gray-300 md:border-dashed">
				<h1 class="hidden md:block pb-8 uppercase text-xl">
					Афиша Новгородского театра драмы
				</h1>
				@isset($actual_seances)
					<div class="flex flex-wrap justify-start backdrop-blur-sm rounded dark:text-gray-300 transition-all duration-300 ease-in-out">
						@foreach($actual_seances as $seance)
							@isset($seance->activity->event)
								@if($seance->is_cancel === 0 && $seance->replace === null || $seance->is_cancel === 0 && $seance->replace != null || $seance->is_cancel === 1 && $seance->replace === null)
									<div class="w-full sm:w-1/2 md:w-full lg:w-1/2 sm:p-2">
										<div class="relative w-full overflow-hidden">
											@isset($seance->id)
												@if($seance->replace)
													<div class="">
														<a href="{{ route('repertuar.id', [ 'id' => $seance->getEventBySeanceId($seance->replace)->activity->event->id ]) }}">
															<img class="brightness-50 contrast-50 sm:rounded" src="{{ $seance->activity->event->getExplodeImagename($seance->getEventBySeanceId($seance->replace)->activity->event->image->name, 700, 485) }}" />
														</a>
														<a href="{{ route('repertuar.id', [ 'id' => $seance->getEventBySeanceId($seance->replace)->activity->event->id ]) }}">
															<div class="absolute bottom-0 w-full h-20 bg-gradient-to-b from-transparent to-black opacity-50 sm:rounded-b"></div>
														</a>
														<a href="{{ route('repertuar.id', [ 'id' => $seance->activity->event->id ]) }}">
															<img class="absolute bottom-2 right-2 rounded" src="{{ $seance->activity->event->getExplodeImagename($seance->activity->event->image->name, 270, 185) }}" />
														</a>
													</div>
												@elseif($seance->datechange)
													<a href="{{ route('repertuar.id', [ 'id' => $seance->activity->event->id ]) }}">
														<img class="sm:rounded" src="{{ $seance->activity->event->getExplodeImagename($seance->activity->event->image->name, 700, 485) }}" />
													</a>
													<a href="{{ route('repertuar.id', [ 'id' => $seance->activity->event->id ]) }}">
														<div class="absolute bottom-0 w-full h-20 bg-gradient-to-b from-transparent to-black opacity-50 sm:rounded-b"></div>
													</a>
												@else
													<a href="{{ route('repertuar.id', [ 'id' => $seance->activity->event->id ]) }}">
														<img class="sm:rounded" src="{{ $seance->activity->event->getExplodeImagename($seance->activity->event->image->name, 700, 485) }}" />
													</a>
													<a href="{{ route('repertuar.id', [ 'id' => $seance->activity->event->id ]) }}">
														<div class="absolute bottom-0 w-full h-20 bg-gradient-to-b from-transparent to-black opacity-50 sm:rounded-b"></div>
													</a>
												@endif
											@endisset
											@isset($seance->date)
												<div class="absolute top-0 left-4 text-sm text-center text-white uppercase transition-all duration-300 ease-in-out shadow hover:shadow-lg">
													{!! $seance->getHumanDateForBadge($seance->date) !!}
												</div>
											@endisset
											@isset($seance->activity->event->ageRestriction)
												<div class="absolute right-4 top-2 w-12 text-xl text-white font-bold uppercase">
													<div class="w-full text-right">
														{{ $seance->activity->event->ageRestriction }}+
													</div>
												</div>
											@endisset
											@isset($seance->activity->event->extraFields)
												@isset($seance->activity->event->extraFields->premiere)
													@if($seance->activity->event->extraFields->premiere === true)
														<div  class="absolute left-4 bottom-6 text-sm text-center text-white uppercase filter drop-shadow-lg">
															<a href="{{ route('afisha.category', [ 'category' => $seance->activity->event->category->sysName ]) }}">
																{{ $seance->activity->event->category->name }}
															</a>
															<a href="{{ route('afisha.variant', [ 'variant' => 'premiers' ]) }}">
																<div class="before:block before:absolute before:-inset-1 before:bg-pink-700 before:rounded-full relative mt-2 cursor-pointer">
																	<span class="relative text-white">Премьера</span>
																</div>
															</a>
														</div>
													@else
														@isset($seance->activity->event->category->sysName)
															<div  x-data="{ popover: false }" class="absolute left-4 bottom-6 text-sm text-center text-white uppercase filter drop-shadow-lg">
																<a href="{{ route('afisha.category', [ 'category' => $seance->activity->event->category->sysName ]) }}">
																	{{ $seance->activity->event->category->name }}
																</a>
																@if($seance->activity->event->organizerPlace || $seance->activity->event->organizerPerson)
																	<div class="before:block before:absolute before:-inset-1 before:bg-pink-700 before:rounded-full relative mt-2 cursor-pointer" @click="popover = ! popover">
																		<span class="relative text-white">Гастроли</span>
																	</div>
																	<div class="absolute left-0 bottom-6 text-sm p-2 mb-2 ml-0 bg-gray-700 opacity-90 rounded text-left normal-case border border-pink-700 transition-all duration-300 ease-in-out" x-show="popover">
																		{{ $seance->activity->event->organizerPerson }}
																	</div>
																@endif
															</div>
														@endisset
													@endif
												@else
													@isset($seance->activity->event->category->sysName)
														<div  x-data="{ popover: false }" class="absolute left-4 bottom-6 text-sm text-center text-white uppercase filter drop-shadow-lg">
															<a href="{{ route('afisha.category', [ 'category' => $seance->activity->event->category->sysName ]) }}">
																{{ $seance->activity->event->category->name }}
															</a>
															@if($seance->activity->event->organizerPlace || $seance->activity->event->organizerPerson)
																<div class="before:block before:absolute before:-inset-1 before:bg-pink-700 before:rounded-full relative mt-2 cursor-pointer" @click="popover = ! popover">
																	<span class="relative text-white">Гастроли</span>
																</div>
																<div class="absolute left-0 bottom-6 text-sm p-2 mb-2 ml-0 bg-gray-700 opacity-90 rounded text-left normal-case border border-pink-700 transition-all duration-300 ease-in-out" x-show="popover">
																	{{ $seance->activity->event->organizerPerson }}
																</div>
															@endif
														</div>
													@endisset
												@endisset
											@else
												@isset($seance->activity->event->category->sysName)
													<div  x-data="{ popover: false }" class="absolute left-4 bottom-6 text-sm text-center text-white uppercase filter drop-shadow-lg">
														<a href="{{ route('afisha.category', [ 'category' => $seance->activity->event->category->sysName ]) }}">
															{{ $seance->activity->event->category->name }}
														</a>
														@if($seance->activity->event->organizerPlace || $seance->activity->event->organizerPerson)
															<div class="before:block before:absolute before:-inset-1 before:bg-pink-700 before:rounded-full relative mt-2 cursor-pointer" @click="popover = ! popover">
																<span class="relative text-white">Гастроли</span>
															</div>
															<div class="absolute left-0 bottom-6 text-sm p-2 mb-2 ml-0 bg-gray-700 opacity-90 rounded text-left normal-case border border-pink-700 transition-all duration-300 ease-in-out" x-show="popover">
																{{ $seance->activity->event->organizerPerson }}
															</div>
														@endif
													</div>
												@endisset
											@endisset
											@if($seance->is_cancel === 1)
												<div class="absolute right-4 bottom-4 bg-pink-700 font-bold text-sm text-center text-white rounded">
													<span class="inline-block px-4 pt-3 pb-1 uppercase overflow-hidden">
														Отменено!
													</span>
												</div>
											@else
												@if($seance->min_price != 0)
													<a href="{{ 'https://widget.afisha.yandex.ru/w/sessions/ticketsteam-788@'.$seance->id.'?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24' }}" class="group absolute right-4 bottom-4 font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
														<div class="inline-block pr-2 pl-2 py-2 text-black rounded-l border-r-2 border-yellow-400 border-dashed bg-gray-100">
															<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
															</svg>
														</div>
														<span class="inline-block px-4 overflow-hidden" style="margin-bottom:-7px;">
															<div class="w-16 whitespace-nowrap transition duration-300 ease-in-out transform -translate-x-24 hover:translate-x-0">
																<span class="uppercase">Купить</span>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																<span class="">от&nbsp;{{ $seance->min_price }}₽</span>
															</div>
														</span>
													</a>
												@else
													<!--
													<a href="{{ 'https://widget.afisha.yandex.ru/w/sessions/ticketsteam-788@'.$seance->id.'?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24' }}" class="group absolute right-4 bottom-4 font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
														<div class="inline-block pr-2 pl-2 py-2 text-black rounded-l border-r-2 border-yellow-400 border-dashed bg-gray-100">
															<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
															</svg>
														</div>
														<span class="inline-block px-4 overflow-hidden" style="margin-bottom:-7px;">
															<div class="w-16 whitespace-nowrap transition duration-300 ease-in-out">
																<div class="-ml-1 uppercase">Продано</div>
															</div>
														</span>
													</a>
													-->
													<a href="{{ 'https://widget.afisha.yandex.ru/w/sessions/ticketsteam-788@'.$seance->id.'?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24' }}" class="group absolute right-4 bottom-4 font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
														<div class="inline-block pr-2 pl-2 py-2 text-black rounded-l border-r-2 border-yellow-400 border-dashed bg-gray-100">
															<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
															</svg>
														</div>
														<span class="inline-block px-4 overflow-hidden" style="margin-bottom:-7px;">
															<div class="w-16 whitespace-nowrap transition duration-300 ease-in-out transform -translate-x-24 hover:translate-x-0">
																<span class="uppercase">Купить</span>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																<span class="">от&nbsp;{{ $seance->min_price }}₽</span>
															</div>
														</span>
													</a>
												@endif
											@endif
										</div>
										<div class="px-2 pt-2 pb-6 sm:pb-2 w-full">
											@if($seance->replace)
												@isset($seance->activity->event->name)
													<span class="uppercase font-bold">
														Замена
													</span>
													<a href="{{ route('repertuar.id', [ 'id' => $seance->getEventBySeanceId($seance->replace)->activity->event->id ]) }}">
														<span class="uppercase font-bold hover:text-indigo-600 transition duration-300 ease-in-out">
															{{ $seance->getEventBySeanceId($seance->replace)->activity->event->name }}
														</span>
														&nbsp;
													</a>
													<span class="uppercase font-bold">
														на
													</span>
													<a href="{{ route('repertuar.id', [ 'id' => $seance->activity->event->id ]) }}">
														<span class="uppercase font-bold hover:text-indigo-600 transition duration-300 ease-in-out">
															{!! $seance->activity->event->name !!}
														</span>
													</a>
													<div class="text-sm">
														Все ранее приобретенные билеты на {{ $seance->getHumanDateForReplace($seance->date) }} действительны.
													</div>
												@endisset
											@elseif($seance->datechange)
												@isset($seance->activity->event->name)
													<a href="{{ route('repertuar.id', [ 'id' => $seance->activity->event->id ]) }}">
														<div class="uppercase font-bold hover:text-indigo-600 transition duration-300 ease-in-out">
															{!! $seance->activity->event->name !!}
														</div>
													</a>
												@endisset
												@isset($seance->activity->event->description)
													<div class="text-sm">
														Внимание! Событие перенесено с {{ $seance->getHumanDate($seance->datechange) }} на {{ $seance->getHumanDate($seance->date) }}. Все ранее приобретенные билеты действительны на новую дату!
													</div>
												@endisset
											@else
												@isset($seance->activity->event->name)
													<a href="{{ route('repertuar.id', [ 'id' => $seance->activity->event->id ]) }}">
														<div class="uppercase font-bold hover:text-indigo-600 transition duration-300 ease-in-out">
															{!! $seance->activity->event->name !!}
														</div>
													</a>
												@endisset
												@isset($seance->activity->event->description)
													<div class="text-sm">
														{!! $seance->activity->event->getTrancatedStr($seance->activity->event->description, 200) !!}
													</div>
												@endisset
											@endif
											@if($seance->venue_id === 15815190)
												<div class="text-sm mt-2 px-2 border-l border-gray-300">
													Обратите внимание! Событие проходит на сцене Новгородской областной филармонии им. А.С. Аренского.
												</div>
											@endif
											@isset($seance->activity->event->tags)
												<div class="py-2 text-sm lowercase italic">
													@foreach($seance->activity->event->tags as $tag)
														<a class="transition duration-300 ease-in-out hover:text-tegold" href="{{ route('afisha.tag', [ 'tag' => $tag->sysName ]) }}">
															#{{ $tag->name }}
														</a>
													@endforeach
												</div>
											@endisset
										</div>
									</div>
								@endif
							@endisset
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
			</div>
		</div>
	</x-slot>
</x-teatr.layout>
