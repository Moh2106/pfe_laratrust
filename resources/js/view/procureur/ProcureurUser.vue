<template>
  <div class="flex justify-between">
      <div class="user">
          <user-view />
      </div>

      <div class="menu">
          <menu-procureur />
      </div>
  </div>
</template>

<script>
import MenuProcureur from '../../component/procureur/MenuProcureur.vue'
import UserView from '../../component/procureur/UserView.vue'
export default {
  components: { UserView, MenuProcureur },

}
</script>

<style scoped>
  .user{ 
    width: 80vw;
    margin: 0 auto;
  }

  .menu{ 
    width: 20%;
    margin: 0 auto;
  }
</style>