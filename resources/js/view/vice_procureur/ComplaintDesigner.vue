<template>
  <div class="flex justify-between">
      <div class="see">
          <div>
              <input type="search" placeholder="بحث" v-model="rech" class="ml-7 mt-1 rounded-lg text-right">
          </div>

          <div>
            <template v-for="plaintes in getFilteredPlainte" :key="plaintes.id">

                <div class="text-white text-right border-b-2 border-b-white m-2">
                   <span v-text = "plaintes.created_at"></span> <bdi> بتاريخ  </bdi><span v-text = "plaintes.reference_plainte"> </span> <bdi> من أجل دراسة الشكاية  </bdi><span v-text = "plaintes.vice_procureur_name"></span> تم تعيين نائب وكيل الملك
                </div>

            </template>
          </div>
      </div>
      

      <div class="menu">
          <vice-menu/>
      </div>
  </div>
</template>

<script>
import { onMounted, ref, computed } from '@vue/runtime-core';
import usePlainteDesigner from '../../service/PlainteDesignerService'
import ViceMenu from '../../component/vice_procureur/ViceMenu.vue';

export default {

    components:{ 
        ViceMenu
    },

    setup(){ 
        const {plainte,getAllPlainteDesigner} = usePlainteDesigner();
        onMounted(getAllPlainteDesigner());
        const rech = ref('');

        const getFilteredPlainte = computed( () => {

            return plainte.value.filter(plaintes => {
                return (plaintes.vice_procureur_name.toLowerCase().includes(rech.value.toLowerCase()) || plaintes.reference_plainte.toLowerCase().includes(rech.value.toLowerCase()))
            })
        });

        return{ 
            plainte,
            rech,
            getFilteredPlainte,
        }
    }
}
</script>

<style scoped>
 .see{ 
        height: 77vh;
        width: 82vw;
        overflow-y: scroll;
        transform: translateY(-1.5em);
        background: url('../../images/image1.jpeg');
    }

    .menu{ 
        width: 20%;
    }
</style>