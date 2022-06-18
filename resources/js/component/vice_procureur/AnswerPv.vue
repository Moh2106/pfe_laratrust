<template>
  <div class="flex justify-between">
      <div class="details">
            <div>
                <input type="search" placeholder="بحث" v-model="rech" class="ml-7 mt-1 rounded-lg text-right">
            </div>
            <div>
                <template v-for="pv in getFilteredPv" :key="pv.id">
                    <div class="bg-white text-black text-right rounded-lg p-2 see">
                        <h1><span v-text="pv.numero_envoi"></span>: رقم الإرسال</h1>
                        <h1><span v-text="pv.vice_procureur_name"></span>: نائب وكيل الملك</h1>
                        <h1><span v-text="pv.reponse"></span>: جواب</h1>
                        <h1><span v-text="pv.created_at"></span>: أرسل بتاريخ</h1>
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
import usePvReponse from '../../service/PvReponseService'
import ViceMenu from './ViceMenu.vue';

export default {
    components:{
        ViceMenu,
    },

    setup(){ 
        const rech = ref('');
        const {infoPv, getPvReponse} = usePvReponse();
        onMounted(getPvReponse());

        const getFilteredPv = computed( () => {

            return infoPv.value.filter(pv => {
                return (pv.vice_procureur_name.toLowerCase().includes(rech.value.toLowerCase()) || pv.numero_envoi.includes(rech.value))
            })
        });

        return{ 
            infoPv,
            rech,
            getFilteredPv,
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
        width: 83vw;
        height: 79vh;
        overflow-y: scroll;
        background: url('../../images/image1.jpeg');
    }

    .see{
        -webkit-box-shadow: 0px 0px 5px 0px rgba(66, 68, 90, 1);
        -moz-box-shadow: 0px 0px 5px 0px rgba(66, 68, 90, 1);
        box-shadow: 0px 0px 5px 0px rgba(66, 68, 90, 1);
        width: 75vw;
        margin: 2em;
    }

</style>