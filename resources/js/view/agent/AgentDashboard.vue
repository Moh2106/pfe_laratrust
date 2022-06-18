<template>
  <div class="flex justify-between w-full dash">
      <div class="details">
          <img src="../../images/image2.jpg" alt="" srcset="" class="w-full">
      </div>

      <div class="menu">
          <MenuAgent />
      </div>
  </div>
</template>

<script>
import MenuAgent from '../../component/agent/MenuAgent.vue';

export default {
    components: {
         MenuAgent 
    },
}
</script>

<style scoped>
    .dash{ 
        height: 77vh;
    }

    .details{ 
        width: 82vw;
        transform: translateY(-1.5em);
    }
    .menu{ 
        width: 20%;
    }
</style>