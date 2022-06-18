<template>
  <div class="flex justify-between">
      <div class="complaint">
          <vice-see-complaint/>
      </div>

      <div class="menu">
          <vice-menu/>
      </div>
  </div>
</template>

<script>
import ViceSeeComplaint from '../../component/vice_procureur/ViceSeeComplaint.vue'
import ViceMenu from '../../component/vice_procureur/ViceMenu.vue'
export default {
  components: { ViceSeeComplaint, ViceMenu },

}
</script>

<style scoped>
  .complaint{ 
    width: 81vw;
  }
  .menu{ 
    width: 20%;
  }
</style>