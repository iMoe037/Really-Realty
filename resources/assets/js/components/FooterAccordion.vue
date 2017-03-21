<template>
	<div class="container footer-accordion-margin-top">
		<div class="visible-xs col-xs-12" v-for="section in sections">
			<div class="row accordion-color" 
				v-on:click="section.show = !section.show"
				v-bind:class="{ 'accordion-active-color': section.show }">
				<h4 class="footer-header footer-accordion-header">{{ section.name }}</h4>
				<i class="fa fa-chevron-right footer-accordion-chevron pull-right accordion-rotate" aria-hidden="true"
					v-bind:class="{ 'accordion-rotate-active': section.show }"></i>
					<hr class="footer-hr" v-if="!section.show">
			</div>
				<ul class="list-unstyled accordion-list" v-if="section.show">
					<li v-for="link in section.links"> 
						<a>{{ link }}</a>
					</li>
					<hr class="footer-hr-bottom">	
				</ul>	
		</div>
	</div>
</template>

<script>
	export default {
		data () {
			return {
				sections: [
					{
						name: 'Company',
						links: ['About Us', 'Team', 'Careers', 'Investors', 'Contact Us', 'Offices'],
						show: false
					},
					{
						name: 'Explore',
						links: ['Neighborhood Guides', 'New Developments', 'Sports & Entertainment', 'RR Quarterly', 'Market Research', 'Collections'],
						show: false
					},
					{
						name: 'Mobile',
						links: ['RR Homes iOS', 'RR Homes Android', 'RR Markets iOS', 'RR Markets Android'],
						show: false
					}
				]
			}
		}
	}
</script>