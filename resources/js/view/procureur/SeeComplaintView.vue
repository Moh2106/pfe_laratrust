<template>
  <div class="flex justify-between">
      <div class="complaint">
          <see-complaint/>
      </div>

      <div class="menu">
          <menu-procureur/>
      </div>
  </div>
</template>

<script>
import MenuProcureur from '../../component/procureur/MenuProcureur.vue'
import SeeComplaint from '../../component/procureur/SeeComplaint.vue'
export default {
  components: { SeeComplaint, MenuProcureur },

}
</script>

<style scoped>
  .complaint{ 
    width: 81vw;
    margin: 0 auto;
  }

  .menu{ 
    width: 20%;
  }
</style>