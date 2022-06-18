<template>
  <div class="menu">
      <div class="complaint">
          <ComplaintForms />
      </div>
      
      <div class="agent " >
          <MenuAgent/>
      </div>
  </div>
</template>

<script>

import MenuAgent from '../../component/agent/MenuAgent.vue'
import ComplaintForms from '../../component/agent/ComplaintForms.vue'

export default {
  components: {
    MenuAgent,
    ComplaintForms
},

}
</script>

<style scoped>
.menu{
  display: flex;
  justify-content: space-between;
}

.menu .complaint{
  padding: 2em;
  width: 82vw;
  transform: translateY(-1.3em);
  margin: 0 auto;
  height: 77vh;
  overflow-y: scroll;
  scroll-behavior: smooth;
  background: url('../../images/image1.jpeg');
  
}
.menu .agent{
  width: 20%;
}


</style>

