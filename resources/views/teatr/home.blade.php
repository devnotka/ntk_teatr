<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="container w-full max-w-7xl mx-auto pt-4 pb-4 transition-all duration-300 ease-in-out">
			<x-teatr.fedor_left></x-teatr.fedor_left>
			<x-teatr.fedor_right></x-teatr.fedor_right>
			@isset($actual_seances_for_promo)
				@if(count($actual_seances_for_promo) > 3)
					<div class="">
						<div class="mt-2 mb-2 sm:mt-4 md:mt-4 md:mb-0">
							<a class="hover:text-tegold transition-all duration-300 ease-in-out" href="{{ route('afisha') }}">
								<h2 class="text-lg ml-2 md:ml-4">
									<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
									</svg>
									Скоро в театре
								</h2>
							</a>
						</div>
						<div class="w-full sm:p-2 sm:pt-0 md:p-4 md:py-2 sm:flex sm:flex-row justify-start dark:text-gray-300 transition-all duration-300 ease-in-out">
							<div class="w-full sm:w-2/3">
								<div class="relative w-full overflow-hidden mb-2 sm:mb-0 shadow-xl">
									<a href="{{ route('repertuar.id', [ 'id' => $actual_seances_for_promo[0]->activity->event->id ]) }}">
										<div class="absolute bottom-0 w-full h-72 bg-gradient-to-b from-transparent to-black opacity-50 sm:rounded"></div>
									</a>
									@isset($actual_seances_for_promo[0]->date)
										<div class="z-29 absolute left-4 text-sm text-center text-white uppercase transition-all duration-300 ease-in-out shadow hover:shadow-lg">
											{!! $actual_seances_for_promo[0]->getHumanDateForBadge($actual_seances_for_promo[0]->date) !!}
										</div>
									@endisset
									@isset($actual_seances_for_promo[0]->age)
										<div class="z-29 absolute right-4 top-2 w-12 text-xl text-white font-bold uppercase">
											<div class="w-full text-right">
												{{ $actual_seances_for_promo[0]->age }}
											</div>
										</div>
									@endisset
									<div class="z-29 absolute right-4 bottom-2 w-2/3 text-right">
										<a href="{{ route('repertuar.id', [ 'id' => $actual_seances_for_promo[0]->activity->event->id ]) }}">
											<div class="mb-2 text-base md:text-xl lg:text-2xl text-right text-white uppercase filter drop-shadow transition-all duration-300 ease-in-out">
												{!! $actual_seances_for_promo[0]->activity->event->name !!}
											</div>
										</a>
										@if($actual_seances_for_promo[0]->min_price != 0)
											<a href="{{ 'https://widget.afisha.yandex.ru/w/sessions/ticketsteam-788@'.$actual_seances_for_promo[0]->id.'?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24' }}" class="group inline-block w-36 h-10 font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
												<div class="inline-block pr-2 pl-2 py-2 text-black rounded-l border-r-2 border-yellow-400 border-dashed bg-gray-100">
													<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
													</svg>
												</div>
												<span class="inline-block px-4 overflow-hidden" style="margin-bottom:-7px;">
													<div class="w-16 whitespace-nowrap transition duration-300 ease-in-out transform -translate-x-24 hover:translate-x-0">
														<span class="uppercase">Купить</span>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														<span class="">от&nbsp;{{ $actual_seances_for_promo[0]->min_price }}₽</span>
													</div>
												</span>
											</a>
										@else
											<a href="{{ 'https://widget.afisha.yandex.ru/w/sessions/ticketsteam-788@'.$actual_seances_for_promo[0]->id.'?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24' }}" class="group inline-block w-36 h-10 font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
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
										@endif
									</div>
									@isset($actual_seances_for_promo[0]->activity->event->extraFields)
										@isset($actual_seances_for_promo[0]->activity->event->extraFields->premiere)
											@if($actual_seances_for_promo[0]->activity->event->extraFields->premiere === true)
												<a href="{{ route('afisha.variant', [ 'variant' => 'premiers' ]) }}">
													<div class="absolute left-4 bottom-4 p-2 rounded text-sm text-center text-white uppercase bg-pink-700 filter drop-shadow-lg">
															Премьера!
													</div>
												</a>
											@endif
										@endisset
									@endisset
									@isset($actual_seances_for_promo[0]->activity->event->id, $actual_seances_for_promo[0]->activity->event->videoHostings[0]->id)
										<a href="{{ route('repertuar.id', [ 'id' => $actual_seances_for_promo[0]->activity->event->id ]) }}">
											<div class="promo-video-container flex flex-col justify-start bg-black sm:rounded">
												<div class="z-28 video-container">
													{!! $actual_seances_for_promo[0]->activity->event->videoHostings[0]->id !!}
												</div>
											</div>
										</a>
									@else
										<a href="{{ route('repertuar.id', [ 'id' => $actual_seances_for_promo[0]->activity->event->id ]) }}">
											<img class="sm:rounded" src="{{ $actual_seances_for_promo[0]->activity->event->getExplodeImagename($actual_seances_for_promo[0]->activity->event->image->name, 850, 584) }}" />
										</a>
									@endisset
								</div>
							</div>
							<div class="flex flex-row sm:flex-col justify-between w-full sm:w-1/3 sm:pl-2 md:pl-4">
								<div class="mr-1 sm:ml-0 sm:mr-0 relative w-1/2 sm:w-full overflow-hidden mb-2 sm:mb-0 shadow-xl">
									<a href="{{ route('repertuar.id', [ 'id' => $actual_seances_for_promo[1]->activity->event->id ]) }}">
										<div class="absolute bottom-0 w-full h-36 bg-gradient-to-b from-transparent to-black opacity-50 rounded-r sm:rounded"></div>
									</a>
									@isset($actual_seances_for_promo[1]->date)
										<div class="hidden z-29 lg:block absolute left-4 text-sm text-center text-white uppercase transition-all duration-300 ease-in-out shadow hover:shadow-lg">
											{!! $actual_seances_for_promo[1]->getHumanDateForBadge($actual_seances_for_promo[1]->date) !!}
										</div>
										<div class="block lg:hidden z-29 absolute left-4 mt-3 w-24 text-sm text-left text-white uppercase transition-all duration-300 ease-in-out shadow hover:shadow-lg">
											{{ $actual_seances_for_promo[1]->getHumanDateForReplace($actual_seances_for_promo[1]->date) }}
										</div>
									@endisset
									@isset($actual_seances_for_promo[1]->age)
										<div class="absolute right-4 top-2 w-12 text-xl text-white font-bold uppercase">
											<div class="w-full text-right">
												{{ $actual_seances_for_promo[1]->age }}
											</div>
										</div>
									@endisset
									@isset($actual_seances_for_promo[1]->activity->event->id, $actual_seances_for_promo[1]->activity->event->name)
										<div class="absolute right-4 sm:left-4 bottom-2 w-5/6 text-right sm:text-left">
											<div class="h-12 lg:h-12 overflow-hidden flex flex-col justify-start">
												<a href="{{ route('repertuar.id', [ 'id' => $actual_seances_for_promo[1]->activity->event->id ]) }}">
													<div class="h-12 lg:h-12 flex flex-col justify-end text-base lg:text-lg xl:text-xl text-right sm:text-left text-white uppercase filter drop-shadow transition-all duration-300 ease-in-out">
														{!! $actual_seances_for_promo[1]->activity->event->name !!}
													</div>
												</a>
											</div>
											@if($actual_seances_for_promo[1]->min_price != 0)
												<a href="{{ 'https://widget.afisha.yandex.ru/w/sessions/ticketsteam-788@'.$actual_seances_for_promo[1]->id.'?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24' }}" class="group hidden lg:inline-block w-36 h-10 mt-2 font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
													<div class="inline-block pr-2 pl-2 py-2 text-black rounded-l border-r-2 border-yellow-400 border-dashed bg-gray-100">
														<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
														</svg>
													</div>
													<span class="inline-block px-4 overflow-hidden" style="margin-bottom:-7px;">
														<div class="w-16 whitespace-nowrap transition duration-300 ease-in-out transform -translate-x-24 hover:translate-x-0">
															<span class="uppercase">Купить</span>
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															<span class="">от&nbsp;{{ $actual_seances_for_promo[1]->min_price }}₽</span>
														</div>
													</span>
												</a>
												<div class="block lg:hidden">
													<a class="text-white hover:text-tegold filter drop-shadow transition-color duration-300 ease-in-out" href="{{ 'https://widget.afisha.yandex.ru/w/sessions/ticketsteam-788@'.$actual_seances_for_promo[1]->id.'?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24' }}">
														от {{ $actual_seances_for_promo[1]->min_price }}₽
														<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
														</svg>
													</a>
												</div>
											@else
												<a href="{{ 'https://widget.afisha.yandex.ru/w/sessions/ticketsteam-788@'.$actual_seances_for_promo[1]->id.'?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24' }}" class="group hidden lg:inline-block w-36 h-10 mt-2 font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
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
											@endif
										</div>
									@endisset
									<a href="{{ route('repertuar.id', [ 'id' => $actual_seances_for_promo[1]->activity->event->id ]) }}">
										<img class="rounded-r sm:rounded" src="{{ $actual_seances_for_promo[1]->activity->event->getExplodeImagename($actual_seances_for_promo[1]->activity->event->image->name, 820, 570) }}" />
									</a>
								</div>
								<div class="ml-1 sm:ml-0 sm:mr-0 relative w-1/2 sm:w-full overflow-hidden mb-2 sm:mb-0 shadow-xl">
									<a href="{{ route('repertuar.id', [ 'id' => $actual_seances_for_promo[2]->activity->event->id ]) }}">
										<div class="absolute bottom-0 w-full h-36 bg-gradient-to-b from-transparent to-black opacity-50 rounded-l sm:rounded"></div>
									</a>
									@isset($actual_seances_for_promo[2]->date)
										<div class="hidden z-29 lg:block absolute left-4 text-sm text-center text-white uppercase transition-all duration-300 ease-in-out shadow hover:shadow-lg">
											{!! $actual_seances_for_promo[2]->getHumanDateForBadge($actual_seances_for_promo[2]->date) !!}
										</div>
										<div class="block lg:hidden z-29 absolute left-4 mt-3 w-24 text-sm text-left text-white uppercase transition-all duration-300 ease-in-out shadow hover:shadow-lg">
											{{ $actual_seances_for_promo[2]->getHumanDateForReplace($actual_seances_for_promo[2]->date) }}
										</div>
									@endisset
									@isset($actual_seances_for_promo[2]->age)
										<div class="absolute right-4 top-2 w-12 text-xl text-white font-bold uppercase">
											<div class="w-full text-right">
												{{ $actual_seances_for_promo[2]->age }}
											</div>
										</div>
									@endisset
									@isset($actual_seances_for_promo[2]->activity->event->id, $actual_seances_for_promo[2]->activity->event->name)
										<div class="absolute right-4 sm:left-4 bottom-2 w-5/6 text-right sm:text-left">
											<div class="h-12 lg:h-12 overflow-hidden flex flex-col justify-start">
												<a href="{{ route('repertuar.id', [ 'id' => $actual_seances_for_promo[2]->activity->event->id ]) }}">
													<div class="h-12 lg:h-12 flex flex-col justify-end text-base lg:text-lg xl:text-xl text-right sm:text-left text-white uppercase filter drop-shadow transition-all duration-300 ease-in-out">
														{!! $actual_seances_for_promo[2]->activity->event->name !!}
													</div>
												</a>
											</div>
											@if($actual_seances_for_promo[2]->min_price != 0)
												<a href="{{ 'https://widget.afisha.yandex.ru/w/sessions/ticketsteam-788@'.$actual_seances_for_promo[2]->id.'?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24' }}" class="group hidden lg:inline-block w-36 h-10 mt-2 font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
													<div class="inline-block pr-2 pl-2 py-2 text-black rounded-l border-r-2 border-yellow-400 border-dashed bg-gray-100">
														<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
														</svg>
													</div>
													<span class="inline-block px-4 overflow-hidden" style="margin-bottom:-7px;">
														<div class="w-16 whitespace-nowrap transition duration-300 ease-in-out transform -translate-x-24 hover:translate-x-0">
															<span class="uppercase">Купить</span>
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
															<span class="">от&nbsp;{{ $actual_seances_for_promo[2]->min_price }}₽</span>
														</div>
													</span>
												</a>
												<div class="block lg:hidden">
													<a class="text-white hover:text-tegold filter drop-shadow transition-color duration-300 ease-in-out" href="{{ 'https://widget.afisha.yandex.ru/w/sessions/ticketsteam-788@'.$actual_seances_for_promo[2]->id.'?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24' }}">
														от {{ $actual_seances_for_promo[2]->min_price }}₽
														<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
														</svg>
													</a>
												</div>
											@else
												<a href="{{ 'https://widget.afisha.yandex.ru/w/sessions/ticketsteam-788@'.$actual_seances_for_promo[2]->id.'?clientKey=5e93d285-460e-4108-b06a-67adfd5eee2f&regionId=24' }}" class="group hidden lg:inline-block w-36 h-10 mt-2 font-bold text-sm text-center text-black bg-yellow-400 rounded overflow-hidden shadow hover:shadow-lg hover:text-white transition-all duration-300 ease-in-out">
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
											@endif
										</div>
									@endisset
									<a href="{{ route('repertuar.id', [ 'id' => $actual_seances_for_promo[2]->activity->event->id ]) }}">
										<img class="rounded-l sm:rounded" src="{{ $actual_seances_for_promo[2]->activity->event->getExplodeImagename($actual_seances_for_promo[2]->activity->event->image->name, 820, 570) }}" />
									</a>
								</div>
							</div>
						</div>
						<div class="">
							<h2 class="text-right text-base xl:text-lg mr-2 md:mr-4">
								<a class="hover:text-tegold transition-all duration-300 ease-in-out" href="{{ route('afisha') }}">
									Вся афиша
									<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
									</svg>
								</a>
							</h2>
						</div>
						<div class="hidden sm:block -mb-4 sm:p-4">
							<div class="border-t border-dashed border-gray-500"></div>
						</div>
					</div>
				@endif
			@endisset
			<div class="relative flex flex-row my-4 sm:mx-2 md:mx-4 sm:my-12 md:my-12 overflow-hidden shadow-lg rounded bg-gray-100 bg-gray-700">
				<div class="w-full">
					<a href="https://notka.glideapp.io" target="_blank">
						<div class="home_promobanner" style="background-image:url(/images/home/mpbanner.jpg);"></div>
					</a>
				</div>
			</div>
			<div class="relative flex flex-row my-4 sm:mx-2 md:mx-4 sm:my-12 md:my-12 p-2 md:p-4 lg:p-8 overflow-hidden shadow-lg rounded bg-gray-100 bg-gray-700">
				<img class="absolute w-full top-0 sm:-top-1/3 md:-top-1/2 lg:-top-2/3 left-0 transition-all duration-300 ease-in-out" src="/images/home/banner_vk.jpg" />
				<div class="w-1/4 lg:w-1/2"></div>
				<div class="w-3/4 lg:w-1/2 px-8 py-4 text-white text-right filter drop-shadow">
					<h3 class="text-xl lg:text-2xl">
						Официальное сообщество<br/>
						театра драмы в VK
					</h3>
					<div class="my-1 text-sm filter drop-shadow">
						Выигрывайте билеты!
					</div>
					<div class="my-4">
						<a class="px-8 py-2 rounded bg-indigo-600 hover:bg-indigo-700 shadow-xl transition-all duration-300 ease-in-out" href="https://vk.com/dostoevsky_theatre" target="_blank" rel="nofollow">
							Открыть
						</a>
					</div>
				</div>
			</div>
			<div class="hidden sm:block -mb-4 sm:pt-0 sm:p-4">
				<div class="border-t border-dashed border-gray-500"></div>
			</div>
			@isset($actual_events_wo_firsts)
				<div class="mt-2 mb-2 sm:mt-4 sm:mb-0 md:-mb-2 md:mt-4">
					<a class="hover:text-tegold transition-all duration-300 ease-in-out" href="{{ route('repertuar') }}">
						<h2 class="text-lg ml-2 md:ml-4">
							<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
							</svg>
							Репертуар театра
						</h2>
					</a>
				</div>
				<div class="w-full sm:p-1 md:p-2 md:pb-0 sm:flex sm:flex-wrap justify-start dark:text-gray-300 transition-all duration-300 ease-in-out">
					@foreach($actual_events_wo_firsts as $event)
						<div class="w-full sm:w-1/2 lg:w-1/3 pb-2 sm:p-1 md:p-2">
							<div class="relative overflow-hidden shadow-xl">
								<a href="{{ route('repertuar.id', [ 'id' => $event->id ]) }}">
									<div class="absolute bottom-0 w-full h-36 bg-gradient-to-b from-transparent to-black opacity-50 sm:rounded"></div>
								</a>
								@isset($event->ageRestriction)
									<div class="absolute right-4 top-2 w-12 text-xl text-white font-bold uppercase">
										<div class="w-full text-right">
											{{ $event->ageRestriction }}+
										</div>
									</div>
								@endisset
								@isset($event->id, $event->name)
									<div class="absolute left-4 bottom-4 w-5/6">
										<a href="{{ route('repertuar.id', [ 'id' => $event->id ]) }}">
											<div class="mt-2 text-base lg:text-lg xl:text-xl text-white uppercase filter drop-shadow transition-all duration-300 ease-in-out">
												{!! $event->name !!}
											</div>
										</a>
									</div>
								@endisset
								<a href="{{ route('repertuar.id', [ 'id' => $event->id ]) }}">
									<img class="sm:rounded transition-all duration-300 ease-in-out" src="{{ $event->getExplodeImagename($event->image->name, 820, 570) }}" />
								</a>
							</div>
						</div>
					@endforeach
				</div>
				<div class="">
					<h2 class="text-right text-base xl:text-lg mr-2 md:mr-4">
						<a class="hover:text-tegold transition-all duration-300 ease-in-out" href="{{ route('repertuar') }}">
							Весь репертуар
							<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
							</svg>
						</a>
					</h2>
				</div>
				<div class="hidden sm:block sm:p-2 sm:pb-8 md:p-4 md:pb-8">
					<div class="border-t border-dashed border-gray-500"></div>
				</div>
			@endisset
			<div class="sm:m-2 sm:mb-6 md:m-4 md:mb-8 lg:mb-8 sm:rounded sm:backdrop-blur-sm">
				<div class="flex flex-wrap justify-between items-center">
					<div class="w-1/2 md:w-1/3 lg:w-1/4 p-4 flex justify-center">
						<a class="w-3/4 rounded" href="https://notka-novgorod.ru/docs/cat/4" target="_blank" rel="nofollow">
							<center>
								<img class="rounded shadow-xl" src="/images/links/anticorrup.jpg" />
							</center>
						</a>
					</div>
					<div class="w-1/2 md:w-1/3 lg:w-1/4 p-4 flex justify-center">
						<a class="w-3/4 rounded" href="http://pravo.gov.ru/" target="_blank" rel="nofollow">
							<center>
								<img class="rounded shadow-xl" src="/images/links/pravogov.png" />
							</center>
						</a>
					</div>
					<div class="w-1/2 md:w-1/3 lg:w-1/4 p-4 flex justify-center">
						<a class="w-3/4 rounded" href="https://www.culture.ru/" target="_blank" rel="nofollow">
							<center>
								<img class="rounded shadow-xl" src="/images/links/culturerf.png" />
							</center>
						</a>
					</div>
					<div class="w-1/2 md:w-1/3 lg:w-1/4 p-4 flex justify-center">
						<a class="w-3/4 rounded" href="https://bus.gov.ru/pub/home" target="_blank" rel="nofollow">
							<center>
								<img class="rounded shadow-xl" src="/images/links/sitegmu.png" />
							</center>
						</a>
					</div>
					<div class="w-1/2 md:w-1/3 lg:w-1/4 p-4 flex justify-center">
						<a class="w-3/4 rounded" href="https://grants.culture.ru/" target="_blank" rel="nofollow">
							<center>
								<img class="rounded shadow-xl" src="/images/links/grantsculture.jpg" />
							</center>
						</a>
					</div>
					<div class="w-1/2 md:w-1/3 lg:w-1/4 p-4 flex justify-center">
						<a class="w-3/4 rounded bg-white" href="http://www.mxat-teatr.ru/" target="_blank" rel="nofollow">
							<center>
								<img class="rounded shadow-xl" src="/images/links/mxat.png" />
							</center>
						</a>
					</div>
					<div class="w-1/2 md:w-1/3 lg:w-1/4 p-4 flex justify-center">
						<a class="w-3/4 rounded" href="https://год2020.рф/" target="_blank" rel="nofollow">
							<center>
								<img class="rounded shadow-xl" src="/images/links/godpamyati2020.jpg" />
							</center>
						</a>
					</div>
					<div class="w-1/2 md:w-1/3 lg:w-1/4 p-4 flex justify-center">
						<a class="w-3/4 rounded" href="https://rvio.histrf.ru/activities/projects/dates/1#_edn%D0%A1%D0%95%D0%9D%D0%A2%D0%AF%D0%91%D0%A0%D0%AC" target="_blank" rel="nofollow">
							<center>
								<img class="rounded shadow-xl" src="/images/links/voendates.png" />
							</center>
						</a>
					</div>
				</div>
			</div>
		</div>
	</x-slot>
</x-teatr.layout>