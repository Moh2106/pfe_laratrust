<template>
  <div class="flex justify-between">
      <div class="user">
          <create-user />
      </div>

      <div class="menu">
          <menu-procureur />
      </div>
  </div>


</template>

<script>
import CreateUser from '../../component/procureur/CreateUser.vue'
import MenuProcureur from '../../component/procureur/MenuProcureur.vue'
export default {
  components: { CreateUser, MenuProcureur },

}
</script>

<style scoped>
    .user{ 
        width: 80vw;
        margin: 0 auto;
    }

    .menu{ 
        width: 20%;
        margin: auto;
    }
</style>