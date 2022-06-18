<template>
  <div class="flex justify-between ">
      <div class="details">
          <gestion-pv/>
      </div>

      <div class="menu">
          <menu-agent />
      </div>
  </div>
</template>

<script>
import GestionPv from '../../component/agent/GestionPv.vue'
import MenuAgent from '../../component/agent/MenuAgent.vue'
export default {
  components: { GestionPv, MenuAgent },

}
</script>

<style scoped>
  .menu{ 
    width: 20%;
  }

  .details{ 
    transform: translateY(-1.5em);
    width: 85vw;
    background: url('../../images/image1.jpeg');
    height: 77vh;
    overflow-y: scroll;
  }
</style>