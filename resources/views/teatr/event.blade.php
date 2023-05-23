<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="container w-full max-w-7xl mx-auto transition-all duration-300 ease-in-out">
			@isset($event)
				@isset($event->gallery)
					<div x-data="{ activeSlide: 1, slides: [...Array(document.getElementsByClassName('carousel_img').length + 1).keys()].slice(1) }" class="relative w-full md:ml-4 transition-all duration-300 ease-in-out">
						<div x-show="activeSlide < slides.length" @click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1" 
							class="hidden md:block absolute z-30 w-20 transition-color duration-300 ease-in-out hover:text-indigo-600 h-full right-0 cursor-pointer bg-gradient-to-r from-transparent to-white dark:to-gray-800">
							<div class="flex h-full justify-center">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 m-auto md:h-12 md:w-12 xl:h-16 xl:w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
								</svg>
							</div>
						</div>
						<div x-show="activeSlide > 1" @click="activeSlide = activeSlide === slides.length ? slides.length - 1 : activeSlide - 1" 
							class="hidden md:block absolute z-30 w-20 transition-color duration-300 ease-in-out hover:text-indigo-600 h-full left-0 cursor-pointer bg-gradient-to-l from-transparent to-white dark:to-gray-800">
							<div class="flex h-full justify-center">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 m-auto md:h-12 md:w-12 xl:h-16 xl:w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
								</svg>
							</div>
						</div>
						<div class="overflow-hidden">
							<div class="relative md:rounded w-full overflow-x-scroll md:overflow-hidden md:mt-4 md:mb-2 lg:mt-6 xl:mt-8">
								<template x-for="slide in slides" :key="slide">
									<div x-show="activeSlide == slide" class="hidden md:block absolute z-30 left-0 bottom-0 pl-4 pt-2 pr-4 pb-2 flex items-center text-white bg-indigo-600 rounded-tr-3xl">
										<span x-text="slide+'/'+slides.length"></span>
									</div>
								</template>
								<div :style="activeSlide > 1 && { transform:'translateX(-'+((activeSlide-1)*38)+'rem)' }" class="relative flex flex-row transition-all duration-300 ease-in-out">
									@isset($event->image)
										<img @click="() => { this.open('{{ $event->getExplodeImagename($event->image->name) }}', '_blank').focus() }" 
											class="transition-all duration-300 ease-in-out carousel_img cursor-pointer mr-2 md:mr-4 lg:mr-6 xl:mr-8 md:rounded" 
											src="{{ $event->getExplodeImagename($event->image->name, 576, 400) }}" />
									@endisset
									@isset($event->gallery)
										@foreach($event->gallery as $k => $gallery)
											<img @click="() => { this.open('{{ $event->getExplodeImagename($gallery->name) }}', '_blank').focus() }" 
											class="transition-all duration-300 ease-in-out carousel_img cursor-pointer mr-2 md:mr-4 lg:mr-6 xl:mr-8 md:rounded" 
											src="{{ $event->getExplodeImagename($gallery->name, 576, 400) }}" />
										@endforeach
									@endisset
								</div>
							</div>
							@isset($event->ageRestriction)
								<div class="block absolute left-0 top-0 md:top-4 lg:top-6 xl:top-8 pl-4 pt-2 pr-4 pb-2 font-bold text-xl text-white filter drop-shadow">
									{{ $event->ageRestriction }}+
								</div>
							@endisset
						</div>
					</div>
					<div class="relative w-full md:w-1/2">
						<div class="p-4 h-full rounded transition-all duration-300 ease-in-out">
							<div class="truncate pb-4 text-xs lg:text-sm uppercase transition-all duration-300 ease-in-out">
								<span class="pr-1">
									Великий Новгород
								</span>
								<span class="font-black px-1">·</span>
								<span>
									Театр драмы
								</span>
								@isset($event->category)
									<span class="font-black  px-1">·</span>
									<a href="{{ route('afisha.category', [ 'category' => $event->category->sysName ]) }}">
										<span class="hover:text-indigo-600">
											{{ $event->category->name }}
										</span>
									</a>
								@endisset
							</div>
							<div class="flex flex-col justify-between h-full -mt-8 pt-8">
								<div class="transition-all duration-300 ease-in-out">
									<h1 class="uppercase text-lg lg:text-xl xl:text-2xl font-bold transition-all duration-300 ease-in-out">
										{{ $event->name }}
									</h1>
									@isset($event->shortDescription)
										<div class="text-sm xl:text-base transition-all duration-300 ease-in-out">
											{{ $event->shortDescription }}
										</div>
									@endisset
								</div>
							</div>
							<div class="flex flex-row py-2">
								@isset($event->activity->actual_seances)
									@if(count($event->activity->actual_seances) > 0)
										@isset($event->extraFields)
											@isset($event->extraFields->premiere)
												@if($event->extraFields->premiere === true)
													<a href="{{ route('afisha.variant', [ 'variant' => 'premiers' ]) }}" alt="Премьеры в Новгородском театре драмы">
														<div class="mr-1 px-2 py-1 rounded font-bold text-sm text-center text-white uppercase bg-pink-700 border border-pink-700">
															Премьера!
														</div>
													</a>
												@endif
											@endisset
										@endisset
										@isset($event->statusPushka)
											<!-- kosyak zavlita -->
											@if($event->id != 1767846)
												<div class="mr-1 px-2 py-1 rounded border border-gray-300 text-sm transition-all duration-300 ease-in-out">
													Событие доступно по Пушкинской карте
												</div>
											@endif
										@endisset
									@endif
								@endisset
							</div>
						</div>
					</div>			
				@else
					@isset($event->image)
						<div class="relative rounded md:my-4 lg:my-6 xl:my-8 transition-all duration-300 ease-in-out">
							<div class="relative flex flex-wrap transition-all duration-300 ease-in-out">
								<div class="relative transition-all duration-300 ease-in-out cursor-pointer w-full h-full mt-px md:mt-0 md:pl-4 md:rounded md:w-1/2">
									@isset($event->ageRestriction)
										<div class="absolute left-0 top-0 ml-4 md:ml-8 mt-2 font-bold text-white text-2xl filter drop-shadow">
											{{ $event->ageRestriction }}+
										</div>
									@endisset
									@isset($event->activity->actual_seances)
										@if(count($event->activity->actual_seances) > 0)
											@isset($event->statusPushka)
												@if($event->statusPushka === 'accepted')
													<div class="absolute right-4 text-sm text-center text-black uppercase transition-all duration-300 ease-in-out bg-white rounded-b shadow hover:shadow-lg">
														<x-teatr.pushkin_icon></x-teatr.pushkin_icon>
													</div>
													<div class="absolute right-16 top-0 pt-2 pr-2 text-xs text-right text-white uppercase tracking-tight filter drop-shadow">
														Событие доступно</br>
														по Пушкинской карте
													</div>
												@endif
											@endisset
										@endif
									@endisset
									@isset($event->activity->actual_seances)
										@if(count($event->activity->actual_seances) > 0)
											@isset($event->extraFields)
												@isset($event->extraFields->premiere)
													@if($event->extraFields->premiere === true)
														<a href="{{ route('afisha.variant', [ 'variant' => 'premiers' ]) }}">
															<div class="absolute left-4 md:left-8 bottom-4 p-2 rounded font-bold text-sm text-center text-white uppercase bg-pink-700 filter drop-shadow-lg">
																	Премьера!
															</div>
														</a>
													@endif
												@endisset
											@endisset
										@endif
									@endisset
									@isset($event->activity->actual_seances)
										@if(count($event->activity->actual_seances) > 0)
											<!--
											<a href="{{ $event->saleLink }}" class="group absolute right-4 bottom-4 font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
												<div class="inline-block pr-2 pl-2 py-2 text-black rounded-l border-r-2 border-yellow-400 border-dashed bg-gray-100">
													<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
													</svg>
												</div>
												<span class="inline-block px-4 overflow-hidden" style="margin-bottom:-7px;">
													<div class="w-16 whitespace-nowrap transition duration-300 ease-in-out transform -translate-x-24 hover:translate-x-0">
														<span class="uppercase">Купить</span>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<span class="">от&nbsp;{{ $event->price }}₽</span>
													</div>
												</span>
											</a>
											-->
										@endif
									@endisset
									<img @click="() => { this.open('{{ $event->getExplodeImagename($event->image->name) }}', '_blank').focus() }" 
										class="md:rounded" 
										src="{{ $event->getExplodeImagename($event->image->name, 750, 530) }}" />
								</div>
								<div class="relative w-full md:w-1/2">
									<div class="p-4 h-full rounded transition-all duration-300 ease-in-out md:mx-4">
										<div class="truncate pb-4 text-xs lg:text-sm uppercase transition-all duration-300 ease-in-out">
											<span class="pr-1">
												Великий Новгород
											</span>
											<span class="font-black px-1">·</span>
											<span>
												Театр драмы
											</span>
											@isset($event->category)
												<span class="font-black  px-1">·</span>
												<a href="{{ route('afisha.category', [ 'category' => $event->category->sysName ]) }}">
													<span class="hover:text-indigo-600">
														{{ $event->category->name }}
													</span>
												</a>
											@endisset
										</div>
										<div class="flex flex-col justify-between h-full -mt-8 pt-8">
											<div class="transition-all duration-300 ease-in-out">
												<h1 class="uppercase text-lg lg:text-xl xl:text-2xl font-bold transition-all duration-300 ease-in-out">
													{{ $event->name }}
												</h1>
												@isset($event->shortDescription)
													<div class="text-sm xl:text-base transition-all duration-300 ease-in-out">
														{{ $event->shortDescription }}
													</div>
												@endisset
											</div>
											<div class="hidden lg:block p-4 rounded bg-gray-100 dark:bg-gray-700 transition-all duration-300 ease-in-out">
												<h4 class="text-sm pb-2 transition-all duration-300 ease-in-out">Быстрые ссылки:</h4>
												@isset($event->seances)
													@if(count($event->getActualSeancesFromSeancesArray($event->seances)) > 0)
														<a href="#seances"
															alt="Расписание события «{{ $event->name }}» в Новгородском театре драмы" 
															class="transition-all duration-300 ease-in-out inline-block my-1 mr-1 p-2 uppercase text-xs font-thin rounded border border-gray-300 hover:border-indigo-500 dark:hover:border-indigo-600 dark:border-gray-600 hover:bg-indigo-600 hover:text-white dark:hover:bg-indigo-600"
														>
															<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
															</svg>
															<span class="pl-1">Расписание</span>
														</a>
													@endif
												@endisset
												@isset($event->description)
													<a href="#description"
														alt="Расписание события «{{ $event->name }}» в Новгородском театре драмы" 
														class="transition-all duration-300 ease-in-out inline-block my-1 mr-1 p-2 uppercase text-xs font-thin rounded border border-gray-300 dark:border-gray-600 hover:border-indigo-500 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white dark:hover:bg-indigo-600"
													>
														<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
														</svg>
														<span class="pl-1">Описание</span>
													</a>
												@endisset
											</div>
											@isset($event->tags)
												<div class="hidden md:block">
													<h4 class="text-sm pb-2 transition-all duration-300 ease-in-out">Теги:</h4>
													@foreach($event->tags as $tag)
													<a href="{{ route('afisha.tag', [ 'tag' => $tag->sysName ]) }}" 
														alt="События в Новгородском театре драмы по тегу #{{ $tag->sysName }}" 
														class="transition-all duration-300 ease-in-out inline-block lowercase my-1 mr-1 py-1 px-2 rounded border border-gray-300 dark:border-gray-600 hover:border-indigo-500 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white dark:hover:bg-indigo-600"
													>
														#{{ $tag->name }}
													</a>
													@endforeach
												</div>
											@endisset
										</div>
									</div>
								</div>
							</div>
						</div>
					@endisset
				@endisset
				@isset($event->seances)
					@if(count($event->getActualSeancesFromSeancesArray($event->seances)) > 0)
						<div id="seances" class="px-4 pb-4 xl:pb-8">
							<h2 class="text-sm lg:text-base uppercase">
								Расписание показов:
							</h2>
							<div class="flex flex-col pt-2">
								@if(in_array($event->id, data_get($replaces, '*.to')))
									@foreach($replaces as $k => $replace)
										@if($replace['to'] === $event->id)
											<div class="relative flex flex-row px-2 py-1 md:px-4 md:py-2 my-2 rounded text-sm md:text-base bg-gray-100 dark:bg-gray-700">
												<div class="w-44">
													@foreach(explode(' ', $k) as $key => $fragment)
														@if($key === 0)
															<div class="uppercase">
																<span class="text-2xl font-bold">{{ $fragment }}</span>
														@elseif($key === 1)
																{{ $fragment }}
														@elseif($key === 2)
																в <span class="font-bold">{{ $fragment }}</span>,
														@else
																{{ $fragment }}
															</div>
														@endif
													@endforeach
												</div>
												<div class="relative flex-grow">
													@if($replace['to'] == '721371')
														<a href="https://widget.afisha.yandex.ru/w/events/192837?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24" class="absolute right-0 top-1/2 -mt-5 block w-36 h-10 group font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
													@else
														<a href="{{ $event->getEventById($replace['to'])->saleLink }}" class="absolute right-0 top-1/2 -mt-5 block w-36 h-10 group font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
													@endif
															<div class="inline-block -ml-0.5 px-2 py-2 text-black rounded-l border-r-2 border-yellow-400 border-dashed bg-gray-100">
																<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
																</svg>
															</div>
															<span class="inline-block px-4 overflow-hidden" style="margin-bottom:-7px;">
																<div class="w-16 whitespace-nowrap transition duration-300 ease-in-out transform -translate-x-24 hover:translate-x-0">
																	<span class="uppercase">Купить</span>
																	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																	<span class="">от&nbsp;{{ $event->getEventById($replace['to'])->price }}₽</span>
																</div>
															</span>
														</a>
												</div>
											</div>
										@endif
									@endforeach
								@endif
								@foreach($event->getActualSeancesFromSeancesArray($event->seances) as $k => $seance)
									<div class="relative flex flex-row px-2 py-1 md:px-4 md:py-2 my-2 rounded text-sm md:text-base bg-gray-100 dark:bg-gray-700">
										<div class="w-44">
											@foreach(explode(' ', $event->getEpochToDatetime($seance->start)) as $key => $fragment)
												@if($key === 0)
													<div class="uppercase">
														<span class="text-2xl font-bold">{{ $fragment }}</span>
												@elseif($key === 1)
														{{ $fragment }}
												@elseif($key === 2)
														в <span class="font-bold">{{ $fragment }}</span>,
												@else
														{{ $fragment }}
													</div>
												@endif
											@endforeach
										</div>
										<div class="relative flex-grow">
											@if(in_array($event->getEpochToDatetime($seance->start), $cancels))
												<div class="absolute right-0 top-1/2 -mt-5 block bg-pink-700 font-bold text-sm text-center text-white rounded">
													<span class="inline-block px-4 pt-3 pb-1 uppercase overflow-hidden">
														Событие отменено!
													</span>
												</div>
											@elseif(array_key_exists($event->getEpochToDatetime($seance->start), $replaces))
												<a href="{{ route('repertuar.id', [ 'id' => $replaces[$event->getEpochToDatetime($seance->start)]['to'] ]) }}">
													<div class="absolute right-0 top-1/2 -mt-5 block bg-pink-700 font-bold text-sm text-center text-white rounded">
														<span class="inline-block px-4 pt-3 pb-1 uppercase overflow-hidden">
															Замена 
															<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
															</svg>
														</span>
													</div>
												</a>
											@else
												@if($event->id == '721371')
													<a href="https://widget.afisha.yandex.ru/w/events/192837?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24" class="absolute right-0 top-1/2 -mt-5 block w-36 h-10 group font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
												@else
													<a href="{{ $event->saleLink }}" class="absolute right-0 top-1/2 -mt-5 block w-36 h-10 group font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
												@endif
													<div class="inline-block -ml-0.5 px-2 py-2 text-black rounded-l border-r-2 border-yellow-400 border-dashed bg-gray-100">
														<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
														</svg>
													</div>
													<span class="inline-block px-4 overflow-hidden" style="margin-bottom:-7px;">
														<div class="w-16 whitespace-nowrap transition duration-300 ease-in-out transform -translate-x-24 hover:translate-x-0">
															<span class="uppercase">Купить</span>
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															<span class="">от&nbsp;{{ $event->price }}₽</span>
														</div>
													</span>
												</a>
											@endif
										</div>
									</div>
								@endforeach
							</div>
						</div>
					@else
						@if(in_array($event->id, data_get($replaces, '*.to')))
							<div id="seances" class="px-4 pb-4 xl:pb-8">
								<h2 class="text-sm lg:text-base uppercase">
									Расписание показов:
								</h2>
								<div class="flex flex-col pt-2">
									@if(in_array($event->id, data_get($replaces, '*.to')))
										@foreach($replaces as $k => $replace)
											@if($replace['to'] === $event->id)
												<div class="relative flex flex-row px-2 py-1 md:px-4 md:py-2 my-2 rounded text-sm md:text-base bg-gray-100 dark:bg-gray-700">
													<div class="w-44">
														@foreach(explode(' ', $k) as $key => $fragment)
															@if($key === 0)
																<div class="uppercase">
																	<span class="text-2xl font-bold">{{ $fragment }}</span>
															@elseif($key === 1)
																	{{ $fragment }}
															@elseif($key === 2)
																	в <span class="font-bold">{{ $fragment }}</span>,
															@else
																	{{ $fragment }}
																</div>
															@endif
														@endforeach
													</div>
													<div class="relative flex-grow">
														@if($replace['to'] == '721371')
															<a href="https://widget.afisha.yandex.ru/w/events/192837?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24" class="absolute right-0 top-1/2 -mt-5 block w-36 h-10 group font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
														@else
															<a href="{{ $event->getEventById($replace['to'])->saleLink }}" class="absolute right-0 top-1/2 -mt-5 block w-36 h-10 group font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
														@endif
															<div class="inline-block -ml-0.5 px-2 py-2 text-black rounded-l border-r-2 border-yellow-400 border-dashed bg-gray-100">
																<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
																</svg>
															</div>
															<span class="inline-block px-4 overflow-hidden" style="margin-bottom:-7px;">
																<div class="w-16 whitespace-nowrap transition duration-300 ease-in-out transform -translate-x-24 hover:translate-x-0">
																	<span class="uppercase">Купить</span>
																	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																	<span class="">от&nbsp;{{ $event->getEventById($replace['to'])->price }}₽</span>
																</div>
															</span>
														</a>
													</div>
												</div>
											@endif
										@endforeach
									@endif
								</div>
							</div>
						@endif
					@endif
				@endisset
				@isset($event->videoHostings)
					<div id="video" class="px-4 pb-0 xl:pb-4">
						<h2 class="text-sm lg:text-base uppercase -mb-2">
							Видео:
						</h2>
						<div class="relative p-4 -mx-6 overflow-hidden">
							<div class="flex flex-wrap">
								@foreach($event->videoHostings as $video)
									<div class="w-full md:w-1/2 p-2">
										<div class="video-container">
											{!! $video->id !!}
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				@endisset
				@isset($event->description)
					<div id="description" class="px-4 pb-4 xl:pb-8">
						<h2 class="text-sm lg:text-base uppercase">
							Аннотация:
						</h2>
						<div class="">
							{!! html_entity_decode($event->description) !!}
						</div>
					</div>
				@endisset
				@isset($event->tags)
					<div class="{{ isset($event->gallery) ? '' : 'md:hidden' }} px-4 pb-4 xl:pb-8">
						<h2 class="text-sm lg:text-base uppercase">
							Теги:
						</h2>
						@foreach($event->tags as $tag)
							<a href="{{ route('afisha.tag', [ 'tag' => $tag->sysName ]) }}" 
								alt="События в Новгородском театре драмы по тегу #{{ $tag->sysName }}" 
								class="transition-all duration-300 ease-in-out inline-block lowercase my-1 mr-1 py-1 px-2 rounded border border-gray-300 dark:border-gray-600 hover:border-indigo-500 dark:hover:border-indigo-600 hover:bg-indigo-600 hover:text-white dark:hover:bg-indigo-600"
							>
								#{{ $tag->name }}
							</a>
						@endforeach
					</div>
				@endisset
			@endisset
		</div>
	</x-slot>
</x-teatr.layout>