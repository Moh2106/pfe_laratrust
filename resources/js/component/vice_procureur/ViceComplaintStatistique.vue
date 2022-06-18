<template>
  <div class="flex justify-between">
      <div class="details text-white text-right">
          <h1 class="text-center">إحصائيات</h1>
          <form action="" @submit.prevent="save" class="w-2/3 mx-auto">

              <div class="flex justify-around">
                  <div>
                    <label for="arrive">إلى</label> <br>
                    <input type="date" name="" id="a" v-model="date.arrive" class="rounded-lg text-black">
                  </div>

                  <div>
                     <label for="depart">من</label> <br>
                     <input type="date" name="" id="de" v-model="date.depart" class="rounded-lg text-black">
                  </div>
              </div>
              

              <div class="w-1/3 mx-auto text-center">
                  <button @click="open.isOpen = true" class="bg-green-500 text-white p-1 pl-2 pr-2 rounded-lg">حفظ</button>
              </div>

              <br><br>

              <div v-text="nombre" class="text-6xl text-center text-black bg-white w-1/3 mx-auto rounded-lg" v-if="open.isOpen"></div>
              
          </form>
      </div>

      <div class="menu">
          <vice-menu/>
      </div>
  </div>
</template>

<script>
import { reactive } from '@vue/runtime-core'
import ViceMenu from './ViceMenu.vue';
import usePlainte from '../../service/PlainteService';
export default {
  components: { ViceMenu },

  setup(){ 
      const date = reactive({
          depart: '',
          arrive: '',
      });

      const open = reactive({
          isOpen: false,
      });

      const {nombre, plainteNombre} = usePlainte();

      const save = async () => { 
          await plainteNombre({...date});
      }

      return{ 
          date,
          nombre,
          save,
          open,
      }
  }

}
</script>

<style scoped>
.menu{
    width: 20%;
}

.details{ 
    transform: translateY(-1.5em);
    width: 80vw;
    background: url('../../images/image1.jpeg');
}

</style>