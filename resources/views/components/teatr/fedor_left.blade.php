<div class="absolute z-29 hidden xl:block" style="">
	<div style="width:300px;height:267px;margin-top:-800px;margin-left:1000px;" class="absolute cursor-help transition-all duration-1000 ease-out bg-norepeat bg-right te-fedor-left" 
		x-data="{ fedor_left_animation: true }"
		x-init="$nextTick(() => { 
			setInterval(() => {
				if(fedor_left_animation === true && $el.style.marginTop == '300px' && $el.style.marginLeft == '-240px') {
					$el.style.marginTop = '320px'
					$el.style.marginLeft = '-110px'
					$el.style.transform = 'rotate(14deg) scale(0.95)'
				} else {
					$el.style.marginTop = '300px'
					$el.style.marginLeft = '-240px'
					$el.style.transform = 'rotate(-3deg) scale(1)'

				}
			}, 1400); 
		})"
		x-on:click="$nextTick(() => {
			
			const citls = document.getElementsByClassName('citl')
			
			for (const citl of citls) {
				citl.style.display = 'none'
				citl.style.opacity = 0
			}
			
			var rnd = Math.floor(Math.random() * citls.length) + 1
			document.getElementById('cit-left-'+rnd).style.display = 'block'
			
			setTimeout(() => {
				fedor_left_animation = false
				document.getElementById('cit-left-'+rnd).style.opacity = 1
			}, 500)
			
			$el.style.marginTop = '300px'
			$el.style.marginLeft = '-240px'
			$el.style.transform = 'rotate(-3deg) scale(1)'
			
			setTimeout(() => {
				fedor_left_animation = true
				document.getElementById('cit-left-'+rnd).style.display = 'none'
				document.getElementById('cit-left-'+rnd).style.opacity = 0
			}, 5500)
			
		})"></div>

</div>