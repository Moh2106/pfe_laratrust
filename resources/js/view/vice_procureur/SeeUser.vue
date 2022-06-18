<template>
  <div class="flex justify-between hauteur">
      <div class="user">
          <vice-user/>
      </div>

      <div class="menu">
          <vice-menu/>
      </div>
  </div>
</template>

<script>
import ViceUser from '../../component/vice_procureur/ViceUser.vue'
import ViceMenu from '../../component/vice_procureur/ViceMenu.vue'
export default {
  components: { ViceMenu, ViceUser },

}
</script>

<style scoped>

  .user{ 
    width: 82vw;
    transform: translateY(-0.7em);
  }
  .menu{ 
    width: 20%;
  }

  .hauteur{ 
    height: 77vh;
  }
</style>