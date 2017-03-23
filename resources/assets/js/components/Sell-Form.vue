<template>
  <section class="section">
    <div class="container">
      <div class="flex-column just-c-c align-i-c sell-form-title-container center">
        <h2 class="no-margin">Start by connecting with a local expert</h2>
        <h3>We'll match you with an agent who knows your area best.</h3>
      </div>
      <form v-bind:class="{ 'animated slideOutRight': submitted, 'hidden': showSuccess }">
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="form-group" v-bind:class="{ 'has-error': errors.has('name'), 'has-success': this.fields.passed('name') }">
              <input v-model="form.name" v-validate:lazy="this.nameRules" type="text" class="form-control input-lg"  name="name" placeholder="Name">
              <span v-show="errors.has('name')">{{ errors.first('name') }}</span>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="form-group" v-bind:class="{ 'has-error': errors.has('email'), 'has-success': this.fields.passed('email') }">
              <input v-model="form.email" v-validate:lazy="this.emailRules" type="email" class="form-control input-lg"  name="email" placeholder="Email">
              <span v-show="errors.has('email')">{{ errors.first('email') }}</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="form-group" v-bind:class="{ 'has-error': errors.has('zip code'), 'has-success': this.fields.passed('zip code') }">
              <input v-model="form.zipCode" v-validate:lazy="this.zipCodeRules" type="number" class="form-control input-lg sell-form-no-spin" name="zip code" placeholder="Zip Code">
              <span v-show="errors.has('zip code')">{{ errors.first('zip code')}}</span>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="form-group" v-bind:class="{ 'has-error': errors.has('phone'), 'has-success': this.fields.passed('phone') }">
              <input v-model="form.phone" v-validate:lazy="this.phoneRules" type="number" class="form-control input-lg sell-form-no-spin" name="phone" placeholder="Phone Number | Optional">
              <span v-show="errors.has('phone')">{{ errors.first('phone')}}</span>
            </div>
          </div>
          <div class="col-xs-12 center">
            <button @click="validate" type="button" class="btn btn-primary btn-lg sell-form-submit-button">Connect with us</button>
          </div>
        </div>
      </form>
      <div class="center" v-if="showSuccess" v-bind:class="{ 'animated slideInRight': showSuccess }">
        <img class="sell-form-check-image" src="/images/check-mark.svg" alt="Submission Recieved" />
        <h2>Great! An agent will contact you shortly!</h2>
      </div>
    </div>
  </section>
</template>


<script>
	export default {
   data: () => ({
    form: {
      email: '',
      name: '',
      phone: '',
      zipCode: ''
    },
    nameRules: {
      required: true,
      alpha_spaces: true,
      max: 25,
      min: 2
    },
    emailRules: {
      required: true,
      email: true,
      max: 25,
      min: 3
    },
    zipCodeRules: {
      required: true,
      numeric: true,
      digits: 5
    },
    phoneRules: {
      numeric: true,
      min: 10,
      max: 20
    },
    submitted: false,
    showSuccess: false
   }),
    methods: {
      validate() {
        this.$validator.validateAll().then(() => {
          return axios.post('/api/contact', {
            email: this.form.email,
            name: this.form.name,
            phone: this.form.phone,
            zipCode: this.form.zipCode
          })
        }).then(response => {
          if (response.status === 200) {
            this.submitted = true;
    
            setTimeout(() => {
              this.showSuccess = true;
            }, 1000);
          }
        }).catch(err => {
          console.error(err);
        });
      }
    },
    // components: {
    //   'agentCard': agentCard
    // },
    // mounted() {
    //   axios.get('/api/agents')
    //     .then(response => {
    //       this.agents = response.data;
    //     })
    //     .catch(err => {console.log(error)});
    // },
	}
</script>
