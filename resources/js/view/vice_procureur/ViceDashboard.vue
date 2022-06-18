<template>
  <div class="flex justify-between">
      <div class="details">
          <img src="../../images/image2.jpg" alt="" srcset="" class="w-full">
      </div>

      <div class="menu">
          <vice-menu/>
      </div>
  </div>
</template>

<script>
import ViceMenu from '../../component/vice_procureur/ViceMenu.vue'
import ViceUser from '../../component/vice_procureur/ViceUser.vue'
export default {
  components: { ViceMenu, ViceUser },

}
</script>

<style scoped>
  .menu{ 
    width: 20%;
  }

  .details{ 
    width: 82vw;
    transform: translateY(-1.5em);
  }
</style>