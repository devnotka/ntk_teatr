<x-teatr.layout :fon="$fon" :title="$title" :description="$description">
	<x-slot name="content">
		<div class="w-full bg-gradient-to-r from-slate-200/25 via-tegold/75 to-gray-600/25 backdrop-blur-sm">
			<div class="container w-full max-w-7xl mx-auto text-white px-4 pt-6 pb-8 md:px-4 md:pt-12 md:pb-16 transition-all duration-300 ease-in-out">
				<x-teatr.breadcrumbs :breadcrumbs="$breadcrumbs"></x-teatr.breadcrumbs>
				<h1 class="uppercase text-white tracking-tighter text-2xl md:text-3xl filter drop-shadow transition-all duration-300 ease-in-out">
					History of the Novgorod academic Drama Theatre named after Dostoevsky
				</h1>
			</div>
		</div>
		<div class="container w-full max-w-7xl mx-auto px-4 md:my-4 py-4 grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4">
			<x-teatr.fedor2_left></x-teatr.fedor2_left>
			<x-teatr.fedor2_right></x-teatr.fedor2_right>
			<div class="col-span-4 md:col-span-2 lg:col-span-3 md:pr-8 md:border-r md:border-gray-300 md:border-dashed">
				<div class="">
					<div class="flex justify-center mb-4 -mx-4 md:mx-0">
						<img class="object-contain object-center md:rounded md:border md:border-white dark:border-gray-900 transition-all duration-300 ease-in-out" src="/images/about/0001.jpg" alt="The Novgorod academic Drama Theatr named after Dostoevsky. Historic photo."/>
					</div>
					<p>
						<span class="whitespace-nowrap">F. M. Dostoyevsky</span> is the most ancient, centuries-old history. On the whole of Russia rattled the creativity of the Novgorod folk mummers, buffoons, became widespread in the XVI century. Liturgical drama «fiery furnace show», which was held in St. Sophia Cathedral before Christmas, is mentioned in the «Historical Bulletin» for 1899. Widespread had and school performance. In 1825, opened the initial permanent theatre, the Keeper of which was a man Lototsky.
					</p>
					<p>
						Since 1853 the theatre in Novgorod permanent, known in those years, the entrepreneur Nikolai Ivanovich Ivanov. In one of the merchant houses, converted into a theatre room throughout the season were regular paid performances. The most famous actors of the province flocked to the company, and often the capital's «stars» participated in these performances.
					</p>
					<p>
						The first in the city's history of public permanent theatre appeared in Novgorod in 1918 at the Department of art of the province Department of national education. This was the Novgorod theatre of the October revolution. A new social order put forward new requirements for the theater. Through the scene the masses of workers approached with the artistic intelligentsia, we are introduced to spiritual riches, not previously available neither to the workers nor the peasants.
					</p>
					<p>
						One of the first heads of the Novgorod theatre of the October revolution were: VI Egert, B. S. Efimov, A. Larionov-Yurenev. The repertoire of the theatre «the Idiot» by F. Dostoevsky, «Paul I» by Merezhkovsky, «Intrigue and love» F. Schiller, «the Death of Ivan the terrible» by A. Tolstoy, «Princess Turandot» Gozzi.
					</p>
					<p>
						Of course all these pieces, the events described in them were removed from real life. But it was as if they connected the remote past with the present life and invoked feelings and thoughts that are close to people and at this difficult time. Hall of the theatre, overfull. «New audience» was quite receptive and enthusiastic. Despite the predominance of the repertoire of classical plays, in the life of Novgorod theatre getting some new accents, dictated by time.
					</p>
					<p>
						In the season of 1927-1928, there are the first Soviet drama. In the play «Love Yarovaya» of K. trenev, «Rahl» B. Lavrenev on stage the first time, participants and heroes of the civil war, the exponent of the will of the insurgent people.
					</p>
					<p>
						In the season of 1927-1928, when the theatre of the October revolution created a children's theatre. The best children's performances in this season were «the little humpbacked Horse», «Flint», «don Quixote».
					</p>
					<p>
						So the theatre existed with short interruptions, until 1934, and then was reorganized into the Leningrad regional Maly drama theatre.
					</p>
					<p>
						In the 1930s, Leningrad region Directorate of art had at its disposal 18 theatres of different genres. When the question arose about creating a stationary city theatres, to guide the work of the theatres in Novgorod was sent to a young talented actor N. Lebedev.
					</p>
					<p>
						In the season of 1934-1935, the most successful have been other performances of «Yegor Bulychev» M. Gorky, «Wonderful fusion» Kirshon. Along with the creations of Gogol and Ostrovsky, Moliere, and Schiller appear and modern drama — «the Road of flowers» Kataev, «virgin soil upturned» by M. Sholokhov. On the stage of Novgorod theatre of the October revolution saw many famous Russian actors. In the lists of the creative troupe were such names as Nepokojchitskij, M. Modestov, B. Freundlich, received the title «Honored artist of the RSFSR» for the role of pavka Korchagin in the play «How the steel was tempered».
					</p>
					<p>
						June 1941 found the theatre was on tour in Staraya Russa. The attack of the fascist invaders and the temporary occupation of the city did not interrupt the activities of the theatre. But now it's been a creative front-line teams with excerpts and monologues from theatrical performances to units of the Leningrad and Volkhov fronts.
					</p>
					<p>
						After the liberation of Novgorod from Nazi invaders in the city resumed operation of a stationary theater. From September 1, 1944, it was reorganized into the Novgorod regional theatre run by the regional Department on Affairs of arts, and from June 1953 — the regional Department of culture.
					</p>
				</div>
			</div>
			<div class="hidden md:block md:col-span-1">
				<x-teatr.oteatre2></x-teatr.oteatre2>
			</div>
		</div>
	</x-slot>
</x-teatr.layout>