<template>
  <div class="flex justify-between">
      <div class="complaint">
          <vice-create-user/>
      </div>

      <div class="menu">
          <vice-menu/>
      </div>
  </div>
</template>

<script>
import ViceCreateUser from '../../component/vice_procureur/ViceCreateUser.vue'
import ViceMenu from '../../component/vice_procureur/ViceMenu.vue'
export default {
  components: { ViceMenu , ViceCreateUser},

}
</script>

<style scoped>
  .complaint{ 
    width: 82vw;
  }
  .menu{ 
    width: 20%;
  }
</style>