<template>
  <div class="flex justify-between addPvs">
      <div class="add">
          <pv-forms />
      </div>

      <div class="menu">
          <menu-agent />
      </div>
  </div>
</template>

<script>
import MenuAgent from '../../component/agent/MenuAgent.vue'
import PvForms from '../../component/agent/PvForms.vue'
export default {
  components: { 
      PvForms,
      MenuAgent,
      },

}
</script>

<style scoped>

    .add{ 
        transform: translateY(-1.5em);
        text-align: right;
        width: 85%;
        height: 77vh;
        overflow-y: scroll;
        background: url('../../images/image1.jpeg');
    }

    .menu{ 
        width: 20%;
    }
</style>