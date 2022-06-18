<template>
  <div class="flex justify-between">
      <div>
          <pv-details/>
      </div>

      <div>
          <menu-agent/>
      </div>
      
  </div>
</template>

<script>
import MenuAgent from '../../component/agent/MenuAgent.vue'
import PvDetails from '../../component/agent/PvDetails.vue'
export default {
  components: { PvDetails, MenuAgent },

}
</script>

<style>

</style>