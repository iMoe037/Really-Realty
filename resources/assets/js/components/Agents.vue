<template>
  <section class="agent-card-container section">
    <div class="flex-row flex-wrap justify-c-c">
      <agent-card
        v-for="agent in agents"
        :agent-name="combineNames(agent.first_name, agent.last_name)"
        :agent-image="agent.agent_photo"
        :agent-email="agent.email"
        :agent-phone="agent.phone"></agent-card>
    </div>
  </section>
</template>


<script>
  import agentCard from './Agent-Card.vue';

	export default {
    data: function() {
      return {
        agents: []
      }
    },
    methods: {
      combineNames: function(first, last) {
        return `${first} ${last}`;
      }
    },
    components: {
      'agentCard': agentCard
    },
    mounted() {
      axios.get('/api/agents')
        .then(response => {
          this.agents = response.data;
        })
        .catch(err => {console.log(error)});
    },
	}
</script>
