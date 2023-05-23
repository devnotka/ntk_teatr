<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="container w-full max-w-7xl mx-auto pb-4 md:px-4 md:my-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<x-teatr.fedor_left></x-teatr.fedor_left>
			<x-teatr.fedor_right></x-teatr.fedor_right>
			<h1 class="block md:hidden text-center col-span-4 px-4 py-4 uppercase text-lg">
					Международный театральный фестиваль Ф.М. Достоевского
			</h1>
			<div class="col-span-4 md:col-span-1 mx-4 md:mx-0">
				<x-teatr.fest_filters :years="$years"></x-teatr.fest_filters>
			</div>
			<div class="col-span-4 md:col-span-2 lg:col-span-3 transition-all duration-300 ease-in-out md:pl-8 md:border-l md:border-gray-300 md:border-dashed">
				<h1 class="hidden md:block uppercase text-xl">
					Международный театральный фестиваль Ф.М. Достоевского
				</h1>
				<div class="px-4 md:px-0 pb-4">
					<p>
						Среди немногочисленных театральных фестивалей, посвященных одному автору, этот занимает уникальное место – его программа строго составляется из спектаклей по произведениям Ф.М. Достоевского (в исключительном случае – по фактам его биографии). Есть много городов и мест, связанных с пребыванием Ф.М. Достоевского, но фестиваль существует только в Новгородской области – Великом Новгороде и Старой Руссе.
					</p>
					<p>
						Фестиваль Достоевского – один из старейших в своем роде. Начинался он в 1992 году как камерная творческая акция. Сейчас за годы его проведения в Новгородской области побывали представители десятков городов России, стран Европы и Азии, тысячи участников.
					</p>
				</div>
				<div class="px-4 md:px-0 pb-4 flex flex-row justify-between">
					<div class="w-1/2 flex justify-start">
						<a class="block px-4 py-2 font-bold text-sm text-center text-white bg-indigo-600 rounded overflow-hidden shadow hover:shadow-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out" href="https://fmdfest.ru" target="_blank">
							Сайт фестиваля
						</a>
					</div>
					<div class="w-1/2 flex justify-start">
						<a class="block px-4 py-2 font-bold text-sm text-center text-white bg-indigo-600 rounded overflow-hidden shadow hover:shadow-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out" href="https://fmdfest.ru" target="_blank">
							Афиша фестиваля
						</a>
					</div>
					<div class="w-1/2 flex justify-start">
						<a class="block px-4 py-2 font-bold text-sm text-center text-white bg-indigo-600 rounded overflow-hidden shadow hover:shadow-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out" href="https://vk.com/dostoevskyfestival" target="_blank">
							Сообщество в VK
						</a>
					</div>
				</div>
				<div id="2021" x-data="{ open: true }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2022 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							Осенью 2022 года фестиваль проходит в Великом Новгороде и Старой Руссе.
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«БРАТЬЯ КАРАМАЗОВЫ», Национальный академический драматический театр имени М. Горького (Минск, Республика Беларусь);
								</li>
								<li>
									«ПОСЛЕДНИЙ ПОХОД КАТЕРИНЫ ИВАНОВНЫ», Драматический театр «Странник» (Санкт-Петербург);
								</li>
								<li>
									«РУЛЕТЕНБУРГЪ», Театр «Школа драматического искусства» (Москва);
								</li>
								<li>
									«СОН СМЕШНОГО ЧЕЛОВЕКА», Липецкий государственный академический театр драмы имени Л.Н. Толстого;
								</li>
								<li>
									«ПРЕСТУПЛЕНИЕ. СОНЕЧКА», Великолукский драматический театр;
								</li>
								<li>
									«ДНЕВНИК ПИСАТЕЛЯ», Школа лабораторных исследований теорий и практик театра;
								</li>
								<li>
									«МЫШЬ В ГОРОХЕ», Театр Talk (Магнитогорск);
								</li>
								<li>
									«ДЯДЮШКИН СОН», Брянский областной театр юного зрителя;
								</li>
								<li>
									«КАЛЕЙДОСКОП РАЗОЧАРОВАНИЙ», Ансамбль новой музыки «Shakin’ Manas», театр буто OddDance при поддержке «Наш театр» (Санкт-Петербург);
								</li>
								<li>
									«РАСКОЛЬНИКОВ. МЕЖДУ ТЬМОЙ И СВЕТОМ», Московский драматический театр имени Сергея Есенина;
								</li>
								<li>
									«ЗАПИСКИ ИЗ МЕРТВОГО ДОМА», Краснодарский академический театр драмы имени Максима Горького;
								</li>
								<li>
									«КРОТКАЯ», Набережночелнинский государственный театр кукол (Республика Татарстан);
								</li>
								<li>
									«ИДИОТ2», Перформанс-группа «Омлет для любимой женщины» (Великий Новгород);
								</li>
								<li>
									«КРОТКАЯ», Сахалинский международный театральный центр им. А.П. Чехова;
								</li>
								<li>
									«ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ», Новгородский академический театр драмы им. Ф.М. Достоевского (Великий Новгород);
								</li>
								<li>
									«ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ», Борисоглебский драматический театр им. Н.Г. Чернышевского;
								</li>
								<li>
									«СЁСТРЫ ДАСТАЕЎСКІЯ/СЁСТРЫ ДОСТОЕВСКИЕ», Минский областной драматический театр (Минск, Молодечно, Республика Беларусь);
								</li>
								<li>
									«ИГРОК», Рыбинский драматический театр;
								</li>
								<li>
									«СМЕШНЫЕ ЧЕЛОВЕЧКИ», Театральное товарищество «Завод» (Владимир);
								</li>
								<li>
									«"PRO И CONTRA". ДИАЛОГ С СОВЕСТЬЮ», Новгородский академический театр драмы им. Ф.М. Достоевского (Великий Новгород);
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2021" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2021 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							В 2021 году фестиваль проводился с 4 по 11 ноября в трёх городах: Великий Новгород, Старая Русса и Боровичи.
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«ПО ТУ СТОРОНУ ГРЕХА», Академический театр балета Бориса Эйфмана (Санкт-Петербург);
								</li>
								<li>
									«ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ», TINFO (Хельсинки, Финляндия), Новгородское областное театрально-концертное агентство, Новгородский академический театр драмы им. Ф.М. Достоевского (Великий Новгород и Хельсинки, Финляндия);
								</li>
								<li>
									«БРАТЬЯ КАРАМАЗОВЫ», Новгородское областное театрально-концертное агентство, Новгородский академический театр драмы им. Ф.М. Достоевского (Великий Новгород);
								</li>
								<li>
									«БЕДНЫЕ ЛЮДИ», Театр юных зрителей им. А.А. Брянцева (Санкт-Петербург);
								</li>
								<li>
									«СКАНДАЛЬНОЕ ПРОИСШЕСТВИЕ В ПАССАЖЕ, ИЛИ КРОКОДИЛ», Театр «Карабаска» (Пермь);
								</li>
								<li>
									«ИДИОТКА», Перформанс-группа «Омлет для любимой женщины» (Великий Новгород);
								</li>
								<li>
									«КАРАМАЗОВЫ», Московский драматический театр им. Сергея Есенина (Москва);
								</li>
								<li>
									«МАЛЬЧИКИ», Ивановский областной драматический театр (Иваново);
								</li>
								<li>
									«RASTAИДИОТ», «Наш театр» (Санкт-Петербург);
								</li>
								<li>
									«БЕСЫ», Драматический театр «Странник» (Санкт-Петербург);
								</li>
								<li>
									«БЕЗ[ИДИОТ]А», Социально-художественный театр (Санкт-Петербург);
								</li>
								<li>
									«САКАЛЛЫ САБЫЙ/ИДИОТ», Нижнекамский государственный татарский драматический театр имени Туфана Миннуллина (Республика Татарстан);
								</li>
								<li>
									«УБИВЕЦ», Московский театр «У Никитских ворот» (Москва);
								</li>
								<li>
									«ГРУСТНЫЕ ПЕСНИ ИЗ СЕРДЦА ЕВРОПЫ», sadsongskomplex:fi (Хельсинки, Финляндия);
								</li>
								<li>
									«ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ. СЦЕНЫ ИЗ РОМАНА», Московский художественный академический театр им. М. Горького, Российский институт театрального искусства - ГИТИС (Москва);
								</li>
								<li>
									«ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ», Забайкальский краевой драматический театр (Чита);
								</li>
								<li>
									«НИКТО ДРУГОЙ НЕ ДАЛ БЫ МНЕ СТОЛЬКО СЧАСТЬЯ», Людмила Лисюкова (Смоленск);
								</li>
								<li>
									«АНГЕЛ МОЙ», Усть-Илимский театр драмы и комедии (Иркутская область);
								</li>
								<li>
									«ВОЗВРАЩЕНИЕ ФОМЫ», Драматический театр г. Братска (Иркутская область);
								</li>
								<li>
									«МАЛЕНЬКИЕ КАРТИНКИ», Новгородское областное театрально-концертное агентство, Новгородский академический театр драмы им. Ф.М. Достоевского (Великий Новгород);
								</li>
								<li>
									«СЕЛО СТЕПАНЧИКОВО И ЕГО ОБИТАТЕЛИ», Кимрский театр драмы и комедии (Тверская область).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2020" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2020 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							В ноябре 2020 года фестиваль проводился в Великом Новгороде и Старой Руссе.
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«БЕЛЫЕ НОЧИ», Центр Интернационального Театра (Флоренция, Италия);
								</li>
								<li>
									«ПОДЗЕМКА», Interazioni Elementari (Флоренция, Италия);
								</li>
								<li>
									«БРАТЬЯ КАРАМАЗОВЫ», Театр-студия «Небольшой драматический театр» (Санкт-Петербург);
								</li>
								<li>
									«АРХИВАРИУС», Концептуальная команда исполнителей (Санкт-Петербург);
								</li>
								<li>
									«БЕЛЫЕ НОЧИ», Владимирский областной театр кукол (Владимир);
								</li>
								<li>
									«ИГРОК», Государственный русский театр драмы им. Ф.А Искандера (Сухум, Абхазия);
								</li>
								<li>
									«ИГРОК», Смоленский государственный академический драматический театр имени А. С. Грибоедова (Смоленск);
								</li>
								<li>
									«ИДИОТ», Пермский театр «У Моста» (Пермь);
								</li>
								<li>
									«НЕШКОЛЬНАЯ ПРОГРАММА», Свободный театр современного танца (Пермь);
								</li>
								<li>
									«ИДИОТ», Белгородский государственный драматический театр имени М.С. Щепкина (Белгород);
								</li>
								<li>
									«ДЯДЮШКИН СОН», Московский академический театр имени Владимира Маяковского (Москва);
								</li>
								<li>
									«НЕЖНЫЙ ВОЗРАСТ ИЛИ СТРАННАЯ ИСТОРИЯ МОЕЙ ЛЮБВИ», Театральная мастерская АСБ (Санкт-Петербург);
								</li>
								<li>
									«НЕЭВКЛИДОВЫ ПАРАЛЛЕЛИ», Театр Комедианты (Санкт-Петербург);
								</li>
								<li>
									«ИДИОТ. ФИНАЛ», Театр «Левендаль» (Санкт-Петербург).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2019" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2019 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							С 6 по 13 ноября 2019 года XXIII Международный театральный фестиваль Ф.М. Достоевского представит в Великом Новгороде и Старой Руссе панораму спектаклей по произведениям великого русского классика. Не оставив ни одного драматургического сочинения, Ф.М. Достоевский неизменно присутствует в репертуаре театров по всему миру. Форум ежегодно объединяет как премьерные, так и зарекомендовавшие себя постановки на различных языках.
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«8 (ВОСЕМЬ)», Московский театр на Таганке (Москва);
								</li>
								<li>
									ЭКЗИСТЕНЦИАЛЬНАЯ ДРАМА «НАКАЗАНИЕ», Вышневолоцкий областной драматический театр (Вышний Волочок);
								</li>
								<li>
									«SUÇ VE CEZA» («ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ»), Turkish State Theatres (Анкара, Турция);
								</li>
								<li>
									«БРАТ АЛЁША» ПЬЕСА ВИКТОРА РОЗОВА ПО МОТИВАМ РОМАНА «БРАТЬЯ КАРАМАЗОВЫ», Театр Скорика (Москва);
								</li>
								<li>
									«ИДИОТ», Санкт-Петербургский православный театр «Странник» (Санкт-Петербург);
								</li>
								<li>
									КОМЕДИЯ МОРДАСОВСКИХ НРАВОВ «ДЯДЮШКИН СОН», Минский областной драматический театр (Минск, Беларусь);
								</li>
								<li>
									ХОРЕОГРАФИЧЕСКИЙ СПЕКТАКЛЬ «ИСПОВЕДЬ», Танцевальная компания «Ятеатр» (Москва);
								</li>
								<li>
									ЛИТЕРАТУРНО-ПЛАСТИЧЕСКАЯ КОМПОЗИЦИЯ «СНЫ О ПРЕСТУПЛЕНИИ И НАКАЗАНИИ», Театр Метакинетики (Москва);
								</li>
								<li>
									ТРАГИКОМЕДИЯ «СЕЛО СТЕПАНЧИКОВО И ЕГО ОБИТАТЕЛИ», Театр «Внутреннее зрение» (Москва);
								</li>
								<li>
									«RIKOS JA RANGAISTUS» («ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ»), Suomen Kansallisteatteri (Финский национальный театр) (Хельсинки, Финляндия);
								</li>
								<li>
									«ШАТОВ. КИРИЛЛОВ. ПЁТР.», Российский академический молодёжный театр (РАМТ) (Москва);
								</li>
								<li>
									«IDIOTA» («ИДИОТ»), Авторский театр Татьяны Малиновской-Тышкевич «NieMa» (Щецин, Польша);
								</li>
								<li>
									«ИДИОТ», Московский драматический театр имени Сергея Есенина (Москва);
								</li>
								<li>
									«КРОТКАЯ», Алтайский краевой театр драмы им. В.М. Шукшина (Барнаул);
								</li>
								<li>
									МОНОЛОГ В ВОСЬМИ ЧАСТЯХ «БАЛ. БЕСЫ», Казанский государственный театр юного зрителя (Казань, Республика Татарстан, Россия);
								</li>
								<li>
									«УБИВЕЦ», Калужский областной драматический театр (Калуга);
								</li>
								<li>
									ОЩУЩЕНИЕ РОМАНА «БРАТЬЯ КАРАМАЗОВЫ», Рыбинский драматический театр (Рыбинск);
								</li>
								<li>
									ФАНТАСМАГОРИИ ЛЮБВИ «СЕЛО СТЕПАНЧИКОВО И ЕГО ОБИТАТЕЛИ», Воркутинский драматический театр (Воркута, Республика Коми, Россия).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2018" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2018 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«DER SPIELER» ПО МОТИВАМ РОМАНА «ИГРОК», Новгородский академический театр драмы им. Ф.М.Достоевского (Великий Новгород);
								</li>
								<li>
									«白痴» («ИДИОТ»), Tokyo Novyi Repertory Theater (Токио, Япония);
								</li>
								<li>
									ИСТОРИЯ ЛЮБВИ «РАСКОЛЬНИКОВ И СОНЯ» ПО РОМАНУ «ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ», Православный театр «Странник» (Санкт-Петербург);
								</li>
								<li>
									ZLOČININKAZEN/ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ, Akademijazagledališče, radio, film in televizijo Lutkovno gledališče Ljubljana (Любляна, Словения);
								</li>
								<li>
									ТРАГИФАРС В ДВУХ ДЕЙСТВИЯХ «ОЧАРОВАТЕЛЬНЫЙ  СОН» ПО ПОВЕСТИ «ДЯДЮШКИН СОН», Гомельский областной драматический театр (Гомель, Беларусь);
								</li>
								<li>
									«ВЕЧНЫЙ МУЖ», Государственный драматический Театр на Васильевском (Санкт-Петербург);
								</li>
								<li>
									«ЧУЖАЯ ЖЕНА И МУЖ ПОД КРОВАТЬЮ», Театр «Арт Ист» (Ашхабад, Туркменистан);
								</li>
								<li>
									СЦЕНЫ ПО РОМАНУ «ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ» «КАКОЙ УЖ ТУТ МИКОЛКА!..», Ведогонь–театр (Москва и Зеленоград);
								</li>
								<li>
									«БРАТЬЯ КАРАМАЗОВЫ», Архангельский молодежный театр (Архангельск);
								</li>
								<li>
									«ИГРА В ПРЕСТУПЛЕНИЕ. ДОСТОЕВСКИЙ» ИММЕРСИВНЫЙ ДЕТЕКТИВ ПО РОМАНУ «ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ», Московский театр «Школа современной пьесы» ГИТИС мастерская народного артиста России А.В. Галибина (Москва);
								</li>
								<li>
									«BRACIA KARAMAZOW» («БРАТЬЯ КАРАМАЗОВЫ»), Teatr Polski we Wrocławiu (Вроцлав, Польша);
								</li>
								<li>
									«EL JUGADOR» («ИГРОК»), Balagán Teatro (Мадрид, Испания);
								</li>
								<li>
									«UŽRAŠAI IŠ POGRINDŽIO» («ЗАПИСКИ ИЗ ПОДПОЛЬЯ»), Teatras Teomai (Вильнюс, Литва);
								</li>
								<li>
									«СВИДРИГАЙЛОВ» ВОЯЖ ПО РОМАНУ «ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ», Волгоградский молодежный театр (Волгоград).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2017" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2017 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«ЧУЖАЯ ЖЕНА И МУЖ ПОД КРОВАТЬЮ», Государственный академический театр имени Евгения Вахтангова (Москва);
								</li>
								<li>
									МОНОСПЕКТАКЛЬ «ИВАН КАРАМАЗОВ ВОЗВРАЩАЕТ БИЛЕТ», Театр «Рондо» (Слупск, Польша);
								</li>
								<li>
									«ВСЕХ ВАС ЗАКЛЮЧУ В МОЁ СЕРДЦЕ», Театр Народной Драмы (Санкт-Петербург);
								</li>
								<li>
									«КРОТКАЯ», Театр «Комната 4» (Москва);
								</li>
								<li>
									ПО РОМАНУ «ИДИОТ» «ДЕНЬ РОЖДЕНИЕ Н.Ф.», Наш театр (Санкт-Петербург);
								</li>
								<li>
									«ЗАПИСКИ ИЗ МЁРТВОГО ДОМА», Кемеровский областной ордена «Знак Почёта» театр драмы им. А.В. Луначарского (Кемерово).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2016" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2016 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									ЧЁРНАЯ КОМЕДИЯ «ЗАПИСКИ ИЗ ПОДПОЛЬЯ», Турецкий Государственный Театр/Turkish State Theater (Анкара, Турция);
								</li>
								<li>
									ДРАМА «БРАТЬЯ КАРАМАЗОВЫ», Театр-студия «Theamai» (Вильнюс, Литва);
								</li>
								<li>
									СЦЕНИЧЕСКАЯ КОМПОЗИЦИЯ Г.А. ТОВСТОНОГОВА, МИФ «ИДИОТ», ЛО ГБУК «Драматический театр на Васильевском» (Санкт-Петербург);
								</li>
								<li>
									ДРАМА «АПОКАЛИПСИС РАСКОЛЬНИКОВА», Театральная группа «Мокешафат» (Тегеран, Иран);
								</li>
								<li>
									ДРАМА «СОН ГОСПОДИНА ГОЛЯДКИНА», АТД Камерный театр «Новая драма» (Пермь);
								</li>
								<li>
									ФАНТАСТИЧЕСКАЯ ИСТОРИЯ «БОБОК», Романтический театр-мастерская Юрия Томошевского (Санкт-Петербург);
								</li>
								<li>
									ФАНТАСТИЧЕСКИЙ РАССКАЗ «КРОТКАЯ», Молодёжный театр «АртИст» (Ашхабад, Туркменистан);
								</li>
								<li>
									ДРАМА В ОДНОМ ДЕЙСТВИИ «БРАТ ИВАН» ПО РОМАНУ Ф.ДОСТОЕВСКОГО «БРАТЬЯ КАРАМАЗОВЫ», Областное государственное автономное учреждение культуры Иркутский академический драматический театр им. Н.П. Охлопкова (Иркутск);
								</li>
								<li>
									МОЛИТВА «СОН СМЕШНОГО ЧЕЛОВЕКА», ОАУК «Липецкий государственный академический театр драмы им. Л.Н. Толстого» (Липецк);
								</li>
								<li>
									ИСТОРИЯ С ЛЮБОВЬЮ И УБИЙСТВАМИ «О ПРЕСТУПЛЕНИИ», Бюджетное учреждение культуры Вологодской области «Вологодский областной театр юного зрителя» (Вологда);
								</li>
								<li>
									СЕНТИМЕНТАЛЬНЫЙ РОМАН «БЕЛЫЕ НОЧИ», Муниципальное учреждение культуры «Рыбинский драматический театр» (Рыбинск);
								</li>
								<li>
									БИОГРАФИЯ «ОКТЯБРЬ ДОСТОЕВСКОГО», МЭТ Мастерская Н.Л. Скорика (Химки).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2015" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2015 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									ЭТЮДЫ ПО МОТИВАМ ПРОИЗВЕДЕНИЙ Ф.М. ДОСТОЕВСКОГО «АНГЕЛЫ ДОСТОЕВСКОГО», Независимый театральный проект Международного театрального фестиваля моноспектаклей «ASTPINDYS» («Отражение») (Висагинас, Литва);
								</li>
								<li>
									ПЛАСТИКО-ХОРЕОГРАФИЧЕСКИЙ СПЕКТАКЛЬ «КРОТКАЯ», Театр танца «Альтана» (Минск, Республика Беларусь);
								</li>
								<li>
									«СНЫ…», Театр драмы Республики Карелия «Творческая мастерская» (Петрозаводск);
								</li>
								<li>
									КОМИЧЕСКАЯ ТРАГЕДИЯ «КРОТКАЯ», Театр «Самарская площадь» (Самара);
								</li>
								<li>
									ДРАМА «СВИДАНИЕ В БЕЛУЮ НОЧЬ», Театр «Алые паруса» (Санкт-Петербург);
								</li>
								<li>
									МУЗЫКАЛЬНО-ЛИТЕРАТУРНЫЙ ПЕРФОМАНС «ГОРОД ТУМАНОВ И СНОВ», «Наш театр» (Санкт-Петербург);
								</li>
								<li>
									ДРАМА «ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ», Владимирский академический областной драматический театр (Владимир);
								</li>
								<li>
									ПСИХОЛОГИЧЕСКАЯ ДРАМА «СРЕДИ МИРОВ…», «Классический театр» (Санкт-Петербург);
								</li>
								<li>
									МОНОДРАМА «ЗЛОЙ СПЕКТАКЛЬ» ИЛИ «… ЛУЧШЕ БЫ БЫЛО ЭТОМУ ЧЕЛОВЕКУ НЕ РОЖДАТЬСЯ…», ТЮЗ «Дилижанс» (Тольятти).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2014" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2014 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ», Театр Малый (Вроцлав, Польша);
								</li>
								<li>
									ДРАМА В 3-Х ДЕЙСТВИЯХ НА ТЕМУ РОМАНА «ИДИОТ» «НАСТАСЬЯ ФИЛИППОВНА», Театр драмы Республики Карелия «Творческая мастерская» (Петрозаводск);
								</li>
								<li>
									«ИСКУШЕНИЕ ИДИОЛОГИЕЙ ИДИОТА», Камерный театр «Спичка» (Белгород);
								</li>
								<li>
									СЕНТИМЕНТАЛЬНЫЙ РОМАН «БЕЛЫЕ НОЧИ», Кинешемский драматический театр имени А.Н. Островского (Кинешма);
								</li>
								<li>
									МОНОЛОГИ «ДОСТОЕВСКИЙ. МОНОЛОГИ», Романтический театр Юрия Томошевского (Санкт-Петербург);
								</li>
								<li>
									ФАНТАЗИЯ В 2-Х ДЕЙСТВИЯХ «БЕДНЫЕ ЛЮДИ», Воронежский государственный театр юного зрителя (Воронеж);
								</li>
								<li>
									ДРАМА В 2-Х ЧАСТЯХ «ПРЕСТУПЛЕНИЕ И НАКАЗАНИЯ», Брянский областной театр юного зрителя (Брянск);
								</li>
								<li>
									ДРАМА «КРОТКАЯ», Театральная мастерская 202 (Санкт-Петербург).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2013" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2013 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									МОНОСПЕКТАКЛЬ «ГРУСТНЫЕ ПЕСНИ ИЗ СЕРДЦА ЕВРОПЫ», Городской театр Лаппеенранта (Лаппеенранта, Финляндия);
								</li>
								<li>
									«Н.Ф.Б.» ДВИЖЕНИЕ В ПРОСТРАНСТВЕ РОМАНА «ИДИОТ», Новгородский академический театр драмы имени Ф.М.Достоевского (Великий Новгород);
								</li>
								<li>
									«БРАТЬЯ КАРАМАЗОВЫ», Омский государственный драматический театр «Галерка» (Омск);
								</li>
								<li>
									СПЕКТАКЛЬ-РАССЛЕДОВАНИЕ «РОДИОН РОМАНОВИЧ РАСКОЛЬНИКОВ» («Р.Р.Р.»), Санкт-Петербургский театр-студия «Абажур» (Санкт-петербург);
								</li>
								<li>
									«ЛЮБОВИ СКОТОПРИГОНЬЕВСКА» ПО РОМАНУ Ф.М. ДОСТОЕВСКОГО «БРАТЬЯ КАРАМАЗОВЫ», Театральный проект Македония Киселева (Санкт-Петербург);
								</li>
								<li>
									«730 ШАГОВ» СЦЕНИЧЕСКАЯ ВЕРСИЯ РОМАНА Ф.М.ДОСТОЕВСКОГО «ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ», ВГИК им. Герасимова, Мастерская профессора И.Н. Ясуловича (Москва);
								</li>
								<li>
									«ЖИТИЕ ВЕЛИКОГО ГРЕШНИКА» («ВЕЛИКИЙ ИНКВИЗИТОР»), АНО Театральный центр. Театральная мастерская Вахрамеевых (Барнаул).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2012" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2012 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«СНЫ НАСТАСЬИ ФИЛИППОВНЫ», Берлинский драматический театр (Берлин, Германия);
								</li>
								<li>
									«НЕТОЧКА НЕЗВАНОВА», Театр «Бошко Буха» (Белград, Сербия);
								</li>
								<li>
									«СЕЛО СТЕПАНЧИКОВО И…», Русский духовный театр «ГЛАС» (Москва);
								</li>
								<li>
									«ФОМА ФОМИЧ СОЗИДАЕТ ВСЕОБЩЕЕ СЧАСТЬЕ…», Московский драматический театр «Сопричастность» (Москва);
								</li>
								<li>
									«ЖИТЬ ХОЧЕТСЯ», Санкт-Петербургский театр-студия «Абажур» (Санкт-Петербург);
								</li>
								<li>
									«АГЛАЯ», Театр «Школа драматического искусства» (Москва);
								</li>
								<li>
									«МАЛЬЧИКИ», НОУ «Светлые знания», Театр молодого актёра (Вологда);
								</li>
								<li>
									«ПОВЕЛИТЕЛЬ БУКВЪ», Тамбовский государственный ордена «Знак Почёта» драматический театр (Тамбов);
								</li>
								<li>
									«НАКАЗАНИЕ БЕЗ ПРЕСТУПЛЕНИЯ», Театр-студия «Арлекин» (Заречный, Пензенская область).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2011" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2011 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«КОШМАР РОДИОНА РОМАНОВИЧА», Театр «Ирина Колесар» (Сремска-Митровица, Сербия);
								</li>
								<li>
									«КРОТКАЯ», Новокузнецкий драматический театр (Новокузнецк);
								</li>
								<li>
									«ИВАН И ЧЕРТ», Московский драматический театр «АпАРТе» (Москва);
								</li>
								<li>
									«МЫКАРАМАЗОВЫ», Школа-студия МХАТ, мастерская народного артиста России К.А. Райкина (Москва);
								</li>
								<li>
									«НА ВОЛНЕ Ф.М.», Актерская творческая мастерская «Поиск предмета» (Москва);
								</li>
								<li>
									«БЕСЫ. СЦЕНИЧЕСКИЕ ОПЫТЫ. ЧАСТЬ III», Новый художественный театр (Челябинск);
								</li>
								<li>
									«КРОТКАЯ», Театр «Мастерская» п/р Григория Козлова (Санкт-Петербург).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2010" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2010 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«КРОТКАЯ», Литовский национальный драматический театр (Вильнюс, Литва);
								</li>
								<li>
									«БЕЛЫЕ НОЧИ», Новгородский академический театр драмы имени Ф.М. Достоевского (Великий Новгород);
								</li>
								<li>
									«ДЯДЮШКИН СОН», Полоцкий театр «Пилигрим» (Полоцк, Республика Беларусь);
								</li>
								<li>
									«ЧОРТ. КОШМАР ИВАНА ФЕДОРОВИЧА», Институт Русского театра, мастерская М.Г. Розовского (Москва);
								</li>
								<li>
									«ДОСТОЕВСКИЙ ВОПРОС», Актер Национального академического драмтеатра имени М. Горького Валерий Шушкевич (Минск, Республика Беларусь);
								</li>
								<li>
									«Я СЧАСТЛИВА, СЧАСТЛИВА, СЧАСТЛИВА…», Новгородский академический театр драмы имени Ф.М. Достоевского (Великий Новгород);
								</li>
								<li>
									«БЕЛЫЕ НОЧИ», Независимый проект (Санкт-Петербург).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2009" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2009 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«БЕЛЫЕ НОЧИ», Новгородский академический театр драмы имени Ф.М. Достоевского (Великий Новгород);
								</li>
								<li>
									«КРОТКАЯ», Молодежный театр «Предел» (Скопин, Рязанская область);
								</li>
								<li>
									«БЕЛЫЕ НОЧИ», Молодежный художественный театр (Улан-Удэ, Республика Бурятия);
								</li>
								<li>
									«КЛАССИКА. RU», Камерный драматический театр (Вологда);
								</li>
								<li>
									«НАСТАСЬЯ ФИЛИППОВНА», Московский новый драматический театр (Москва);
								</li>
								<li>
									«УНИЖЕННЫЕ И ОСКОРБЛЕННЫЕ», РАТИ-ГИТИС, мастерская профессора О. Кудрявцева (Москва);
								</li>
								<li>
									«БЕСЫ. СЦЕНИЧЕСКИЕ ОПЫТЫ. ЧАСТЬ II», Новый художественный театр (Челябинск).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2008" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2008 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«БЕДНЫЕ ЛЮДИ», Актриса театра «Бошко Буха» Зорица Йованович (Белград, Сербия);
								</li>
								<li>
									«НЕТОЧКА НЕЗВАНОВА», Театр «Лаборатория Драматического Искусства» имени Михаила Чехова (Екатеринбург);
								</li>
								<li>
									«БЕЛЫЕ НОЧИ», Молодежный театр-студия «Ключ» (Набережные Челны, Республика Татарстан);
								</li>
								<li>
									«ЛЮБЯЩИЙ ТЕБЯ ДОСТОЕВСКИЙ», Виталий Салтыков, Татьяна Маколова (Санкт-Петербург);
								</li>
								<li>
									«ВОЗВРАЩЕНИЕ, 4 СЦЕНЫ ИЗ ЖИЗНИ ЛЬВА НИКОЛАЕВИЧА МЫШКИНА», СПбГАТИ, мастерская заслуженного деятеля искусств РФ Г.М. Козлова (Санкт-Петербург);
								</li>
								<li>
									«Я СЧАСТЛИВА, СЧАСТЛИВА, СЧАСТЛИВА…», Новгородский академический театр драмы им. Ф.М. Достоевского (Великий Новгород).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2007" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2007 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«ИГРОК», Филипп Фратчак (Торунь, Польша);
								</li>
								<li>
									«КРОТКАЯ», Театр драматических импровизаций (Санкт-Петербург);
								</li>
								<li>
									«БЕДНЫЕ ЛЮДИ», Театр юного зрителя имени Брянцева (Санкт-Петербург);
								</li>
								<li>
									«РАСКОЛЬНИКОВ», Православный драматический театр «Странник» (Санкт-Петербург);
								</li>
								<li>
									«ДОЧКИ-МАТЕРИ», Театральная группа «Декамерон» (Москва);
								</li>
								<li>
									СПЕКТАКЛЬ-КОМПОЗИЦИЯ «ЧЕЛОВЕК - ЕСТЬ ТАЙНА» ПО ПРОИЗВЕДЕНИЯМ Ф.М. ДОСТОЕВСКОГО И ТВОРЕНИЯМ СВЯТИТЕЛЯ ТИХОНА ЗАДОНСКОГО, Театр-студия «Артель» (Щербинка, Московская область);
								</li>
								<li>
									«Я СЧАСТЛИВА, СЧАСТЛИВА, СЧАСТЛИВА…», Новгородский академический театр драмы им. Ф.М. Достоевского (Великий Новгород).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2006" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2006 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									МОНОСПЕКТАКЛЬ «НЕТОЧКА НЕЗВАНОВА», Актриса белградского театра «Бошко Буха» Зорица Йованович (Белград, Сербия);
								</li>
								<li>
									«БЕЛЫЕ НОЧИ», Бакинский Камерный театр (Баку, Азербайджан);
								</li>
								<li>
									«Я СЧАСТЛИВА, СЧАСТЛИВА, СЧАСТЛИВА…», Новгородский академический театр драмы им. Ф.М. Достоевского (Великий Новгород);
								</li>
								<li>
									МОНОСПЕКТАКЛЬ «ДОЛГАЯ ОБРАТНАЯ ДОРОГА ИЗ ПЕТЕРБУРГА В ШВЕЙЦАРИЮ» ПО РОМАНУ Ф.М. ДОСТОЕВСКОГО «ИДИОТ», Бакинский Камерный театр, народная артистка республики Ирина Перлова (Баку, Азербайджан);
								</li>
								<li>
									«ПАССАЖ В ПАССАЖЕ» СЛЕДСТВЕННЫЙ ЭКСПЕРИМЕНТ ПО ПОВЕСТИ Ф.М. ДОСТОЕВСКОГО «КРОКОДИЛ, ИЛИ ПАССАЖ В ПАССАЖЕ», Омский областной театр юных зрителей имени 20-летия Ленинского комсомола (Омск);
								</li>
								<li>
									«ОСКОЛКИ РАСКОЛЬНИКОВА», Вологодский камерный драматический театр (Вологда);
								</li>
								<li>
									«ДОСТОЕВСКИЙ ЧЕСТЕРТОН: ПАРАДОКСЫ ПРЕСТУПЛЕНИЯ ИЛИ ОДИНОКИЕ ВСАДНИКИ АПОКАЛИПСИСА», Театральная мастерская «АСБ» (Санкт-Петербург);
								</li>
								<li>
									«ПРОИСШЕСТВИЯ НЕВЕРОЯТНЫЕ», Московский новый драматический театр (Москва);
								</li>
								<li>
									«РУЛЕТЕНБУРГ», Театральная группа «Декамерон» (Москва).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2005" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2005 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«КОШМАР РОДИОНА РОМАНОВИЧА», Театр «Слово» (Требин, Сербия);
								</li>
								<li>
									«КРОТКАЯ», Псковский академический театр драмы имени Пушкина (Псков);
								</li>
								<li>
									«DOSTOYVSKY.RU» ПО ПРОИЗВЕДЕНИЮ «ЗАПИСКИ ИЗ МЕРТВОГО ДОМА», Омский государственный камерный театр «Пятый театр» (Омск);
								</li>
								<li>
									«Я СЧАСТЛИВА, СЧАСТЛИВА, СЧАСТЛИВА…», Новгородский академический театр драмы им. Ф.М. Достоевского (Великий Новгород);
								</li>
								<li>
									«ЗАПИСКИ ИЗ ПОДПОЛЬЯ», Олег Комаров, артист Киевского театра русской драмы имени Леси Украинки (Киев, Украина);
								</li>
								<li>
									«ЖАТВА ДУХА», Новгородский академический театр драмы им. Ф.М. Достоевского (Великий Новгород);
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2004" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2004 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«СЕМЕН ЗАХАРОВИЧ» ИЗ «ПРЕСТУПЛЕНИЯ И НАКАЗАНИЯ» Ф.М. ДОСТОЕВСКОГО, Актёр Союза профессиональных актёров Эстонии Вячеслав Рыбников (Таллинн, Эстония);
								</li>
								<li>
									ВЕСЁЛОЕ СНОВИДЕНИЕ БЕЗ АНТРАКТА «ДЯДЮШКИН СОН», Камерный драматический театр (Вологда);
								</li>
								<li>
									«КРОТКАЯ», Театр «Событие» (Санкт–Петербург);
								</li>
								<li>
									«ОБНЯТЬСЯ И ЗАПЛАКАТЬ» ПО ПОВЕСТИ Ф.М. ДОСТОЕВСКОГО «ВЕЧНЫЙ МУЖ», «Белый театр» Литературно-мемориального музея Ф. М. Достоевского (Санкт-Петербург);
								</li>
								<li>
									«ВЕРТЕП». ХОЖДЕНИЕ ПО МЫТАРСТВАМ В 3-Х ДЕЙСТВИЯХ ПО ПРОИЗВЕДЕНИЯМ «ЧУЖАЯ ЖЕНА», «БОБОК», «СОН СМЕШНОГО ЧЕЛОВЕКА», Новгородский академический театр драмы им. Ф.М. Достоевского (Великий Новгород);
								</li>
								<li>
									«МАЛЬЧИКИ» ПО РОМАНУ Ф.М. ДОСТОЕВСКОГО «БРАТЬЯ КАРАМАЗОВЫ», Артист Московского драматического театра на Перовской, заслуженный артист РФ Виктор Никитин (Москва).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2003" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2003 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«ИСПОВЕДЬ СТАВРОГИНА», Белградский драматический театр (Белград, Сербия);
								</li>
								<li>
									«ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ», Киевский государственный театр «Колесо» (Киев, Украина);
								</li>
								<li>
									«ЧУЖАЯ ЖЕНА И МУЖ ПОД КРОВАТЬЮ», Новгородский академический театр драмы им. Ф.М. Достоевского (Великий Новгород);
								</li>
								<li>
									«УНИЖЕННЫЕ И ОСКОРБЛЕННЫЕ», Сургутский музыкально-драматический театр, Санкт-Петербургский «Классический театр» (Сургут и Санкт-Петербург).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2002" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2002 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									МОНОСПЕКТАКЛЬ «КРОТКАЯ», Заслуженный артист Республики Беларусь Владимир Шелестов (Минск, Республика Беларусь);
								</li>
								<li>
									«МАЛЬЧИК У ХРИСТА НА ЁЛКЕ», Калининградский театр драмы (Калининград);
								</li>
								<li>
									«БОБОК», Новгородский академический театр драмы им. Ф.М. Достоевского (Великий Новгород);
								</li>
								<li>
									МОНОСПЕКТАКЛЬ «ЕКАТЕРИНА ИВАНОВНА МАРМЕЛАДОВА», Актриса Рада Дьюрисин (Югославия);
								</li>
								<li>
									МОНОСПЕКТАКЛЬ «СМЕШНОЙ», Заслуженный артист России Леонид Мозговой (Санкт-Петербург).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2001" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2001 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«БЕЛЫЕ НОЧИ», Лобнинский Театр драмы (Лобня);
								</li>
								<li>
									«ЗАПИСКИ ИЗ ПОДЗЕМЕЛЬЯ», Национальный театр Белграда (Белград, Сербия);
								</li>
								<li>
									«Я ЖЕЛАЛА БЫ ЖИТЬ ТАМ, ГДЕ ПОБОЛЬШЕ СОЛНЦА», Смоленский Государственный театр драмы (Смоленск);
								</li>
								<li>
									«СОН СМЕШНОГО ЧЕЛОВЕКА», Новгородский областной академический театр драмы имени Ф.М. Достоевского (Великий Новгород);
								</li>
								<li>
									«ЭТИ ДВА СТОЛЬ ЗАМЕЧАТЕЛЬНЫЕ СУЩЕСТВА», Студия имени Чехова (Москва).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="2000" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						2000 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«ФЕДОР И АННА», Московский драматический театр имени А.Пушкина (Москва);
								</li>
								<li>
									«СВЕТЛОЕ ВОСКРЕСЕНЬЕ», Московский государственный русский духовный театр «Глас» (Москва);
								</li>
								<li>
									«ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ», Тверской государственный областной театр драмы для детей и молодежи (Тверь);
								</li>
								<li>
									«СНИЛСЯ МНЕ СОН», Новгородский академический театр драмы им. Ф.М. Достоевского (Великий Новгород);
								</li>
								<li>
									«ЧУЖАЯ ЖЕНА И МУЖ ПОД КРОВАТЬЮ», Архангельский театр драмы им. М.В. Ломоносова (Архангельск);
								</li>
								<li>
									«ЗАПИСКИ ИЗ ПОДПОЛЬЯ», Мурманский областной театр драмы (Мурманск);
								</li>
								<li>
									МОНОСПЕКТАКЛЬ «НИКТО ДРУГОЙ НЕ ДАЛ БЫ МНЕ СТОЛЬКО СЧАСТЬЯ», Смоленский областной театр драмы (Смоленск).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="1996" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						1996 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«ПЬЯНЕНЬКИЙ МАРМЕЛАДОВ», Театр «Романтей Кикаку» (Япония);
								</li>
								<li>
									«МУЗЫКА В ЖИЗНИ ДОСТОЕВСКОГО», Смоленский театр драмы (Смоленск);
								</li>
								<li>
									МОНОСПЕКТАКЛЬ «НИКТО ДРУГОЙ НЕ ДАЛ БЫ МНЕ СТОЛЬКО СЧАСТЬЯ», Актриса Смоленского театра драмы Л. Лисюкова (Смоленск);
								</li>
								<li>
									«КРОТКАЯ», Рязанский Государственный Ордена «Знак Почета» областной театр драмы (Рязань);
								</li>
								<li>
									«ХОЗЯЙКА», Национальный Молодежный театр Республики Башкортостан (Уфа);
								</li>
								<li>
									«БЕЛЫЕ НОЧИ», Новосибирский государственный драматический театр «Старый дом» (Новосибирск).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="1995" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						1995 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									«БРАТЬЯ КАРАМАЗОВЫ. ЗАВТРА СУД.», Театральная группа В. Саркисова (Москва);
								</li>
								<li>
									«СОН СМЕШНОГО ЧЕЛОВЕКА», Маленький театр Н. Савенковой (Нижний Новгород);
								</li>
								<li>
									«БРАТЬЯ КАРАМАЗОВЫ. СУДЕБНАЯ ОШИБКА. ЭПИЛОГ», Лауреат Пушкинского конкурса актриса Н. Кудрявцева (Санкт Петербург);
								</li>
								<li>
									МОНОСПЕКТАКЛЬ «БОГ САМ ЗНАЕТ, КАК Я СТРАДАЛА», Заслуженная артистка России Л. Коликова (Великий Новгород);
								</li>
								<li>
									«БЕЛЫЕ НОЧИ», Театр юного зрителя имени Брянцева (Санкт-Петербург);
								</li>
								<li>
									«СОН СМЕШНОГО ЧЕЛОВЕКА», Актёр Воронежского театра драмы О. Мокшанов (Воронеж).
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="1992" x-data="{ open: false }" class="px-4 py-2 md:px-0 transition-all duration-300 ease-in-out">
					<div @click="open = !open" class="px-4 py-2 rounded bg-gray-50 dark:bg-gray-700 dark:text-gray-300 cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-4 w-4 -mt-1 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
							<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
						</svg>
						1992 год
					</div>
					<div x-show="open" class="p-2">
						<p>
							
						</p>
						<div class="">
							<h3 class="py-2 uppercase text-base">
								Участники:
							</h3>
							<ul class="pl-2 list-disc list-inside">
								<li>
									МОНОСПЕКТАКЛЬ «МАЛЬЧИКИ», Актриса Ярославского академического театра им. Ф.Г. Волкова Татьяна Позднякова (Ярославль);
								</li>
								<li>
									МОНОСПЕКТАКЛЬ «СОН СМЕШНОГО ЧЕЛОВЕКА», Заслуженный артист России, народный артист Республики Карелия Юрий Гришмановский (Петрозаводск);
								</li>
								<li>
									«СОЗЕРЦАТЕЛЬ. ТРАКТАТ О СМЕРДЯКОВЕ», Новгородский областной театр драмы (Новгород);
								</li>
								<li>
									«ОМРАЧЕНИЕ» ВАРИАЦИЯ ПО Ф.М. ДОСТОЕВСКОМУ «ПРЕСТУПЛЕНИЕ И НАКАЗАНИЕ», Санкт-Петербургский театр «ОСОБНЯК» (Санкт-Петербург);
								</li>
								<li>
									«БОБОК», Актер Архангельского театра драмы им. М.В. Ломоносова Николай Обабков (Архангельск).
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</x-slot>
</x-teatr.layout>