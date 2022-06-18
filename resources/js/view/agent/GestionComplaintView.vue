<template>
  <div class="flex justify-between m-0">
      <div class="complaint">
          <gestion-complaint />
      </div>

      <div class="menu">
          <menu-agent/>
      </div>
  </div>
</template>

<script>
import GestionComplaint from '../../component/agent/GestionComplaint.vue'
import MenuAgent from '../../component/agent/MenuAgent.vue'

export default {
  components: { MenuAgent, GestionComplaint },

}
</script>

<style scoped>

  .complaint{ 
    width: 82vw;
    margin: 0 auto;
    transform: translateY(-1.3em);
  }
  
  .menu{ 
    width: 20%;
  }

</style>
