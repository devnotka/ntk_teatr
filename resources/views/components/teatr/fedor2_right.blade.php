<div class="absolute z-29 hidden xl:block" style="">
	<div style="width:180px;height:305px;margin-top:-1000px;margin-left:1265px;" class="absolute cursor-help transition-all duration-300 ease-out bg-norepeat bg-right te-fedor2-right animate-pulse" 
		x-data="{ fedor_right_animation: true }"
		x-init="$nextTick(() => { 
			setInterval(() => {
				if(fedor_right_animation === true && $el.style.marginTop == '120px' && $el.style.marginLeft == '1265px') {
					setTimeout(() => {
						$el.style.marginTop = '100px'
						$el.style.transform = 'rotate(6deg) scale(1)'
					}, 500)
				} else {
					$el.style.marginTop = '120px'
					$el.style.transform = 'rotate(-2deg) scale(1)'
				}
			}, 1200); 
		})"
		x-on:click="$nextTick(() => {
			
			const citrs = document.getElementsByClassName('citr')
			
			for (const citr of citrs) {
				citr.style.display = 'none'
				citr.style.opacity = 0
			}
			
			var rnd = Math.floor(Math.random() * citrs.length) + 1
			document.getElementById('cit-right-'+rnd).style.display = 'block'
			
			setTimeout(() => {
				fedor_right_animation = false
				document.getElementById('cit-right-'+rnd).style.opacity = 1
			}, 500)
			
			setTimeout(() => {
				fedor_right_animation = true
				document.getElementById('cit-right-'+rnd).style.display = 'none'
				document.getElementById('cit-right-'+rnd).style.opacity = 0
			}, 5500)
			
		})"></div>

</div>