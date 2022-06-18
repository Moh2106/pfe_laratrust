<template>
  <div class="flex justify-between">
      <div class="details">
          <img src="../../images/image2.jpg" alt="" class="w-full">
      </div>

      <div class="menu">
          <menu-procureur/>
      </div>
  </div>
</template>

<script>
import MenuProcureur from '../../component/procureur/MenuProcureur.vue'
import ModalView from '../../component/modal/ModalView.vue'
export default {
  components: {
    MenuProcureur,
    ModalView
},

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