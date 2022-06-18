<template>
  <div class="flex justify-between">
      <div class="details">
          <div>
              <input type="search" placeholder="بحث" v-model="rech" class="ml-7 mt-1 rounded-lg text-right">
          </div>

          <template v-for="pvs in getFilteredPv" :key="pvs.id" >

            <div class="text-white text-right border-b-2 m-1">
             <span v-text = "pvs.created_at"> </span> <bdi> بتاريخ </bdi><span v-text = "pvs.numero_envoi"> </span><bdi> من أجل دراسة المحضر رقم </bdi><span v-text = "pvs.vice_procureur_name"></span><bdi> تم تعيين نائب وكيل الملك</bdi>
            </div>

          </template>
      </div>

      <div>
          <vice-menu/>
      </div>
  </div>
</template>

<script>
import { onMounted, computed, ref } from '@vue/runtime-core';
import ViceMenu from '../../component/vice_procureur/ViceMenu.vue';
import usePvDesigner from '../../service/PvDesignerService';

export default {

    components:{ 
        ViceMenu
    },

    setup(){ 
        const {pv,getAllPvDesigner} = usePvDesigner();
        const rech = ref('');
        onMounted(getAllPvDesigner());

        const getFilteredPv = computed( () => {

            return pv.value.filter(pvs => {
                return (pvs.vice_procureur_name.toLowerCase().includes(rech.value.toLowerCase()))
            })
        });

        return{ 
            pv,
            getFilteredPv,
            rech,
        }
    }
}
</script>

<style scoped>
    .details{ 
        background: url('../../images/image1.jpeg');
        width: 81vw;
        transform: translateY(-1.5em);
    }
</style>