<template>
	<section>
		<div class="hero-bg-image"
			v-bind:class="[whiteFontColor ? 'hero-white-font' : 'hero-black-font', { 
				'hero-fullscreen' : fullScreen,
				'hero-default-bg' : !bgImage
				}]"
			v-bind:style="[bgImage ? { 'background-image' : `url(${bgImage})`, 'background-size' : 'cover' } : '']">
			<div class="full-width"
				v-bind:class="{ 'hero-opacity-div': bgImage }">
				<div class="container full-height">
					<div class="flex-column hero-title-content" 
						v-if="search">
						<h1 class="hero-title">{{ heroTitle }}</h1>
<!-- 						<div class="row">
							<div class="col-xs-12 col-sm-2">
								<select name="borough">
									<option value="bronx">Bronx</option>
									<option value="brooklyn">Brooklyn</option>
									<option value="brooklyn">Manhattan</option>
									<option value="brooklyn">Staten Island</option>
									<option value="brooklyn">Queens</option>
								</select>
							</div> -->
							<!-- <div class="col-xs-12 col-sm-10"> -->
								<span class="hero-input-container">
									<i class="hero-search-icon fa fa-search"/>
									<input class="hero-search" placeholder="Enter an agent, neighborhood, address, ZIP code, or listing ID" type="text" name="search">
								</span>
							<!-- </div>
						</div> -->
						
					</div>
					<div class="flex-column hero-title-content"
						v-else>
						<h1 class="hero-title">{{ heroTitle }}</h1>
						<h3 class="hero-content">{{ subText }}</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>


<script>
	export default {
		props: {
			bgImage: String,
			search: Boolean,
			heroTitle: String,
			fullScreen: Boolean,
			subText: String,
			whiteFontColor: Boolean
		}
	}
</script>
