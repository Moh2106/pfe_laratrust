<template>
  <div class="flex justify-between">
      <div class="details">
            <div>
                <input type="search" placeholder="بحث" v-model="rech" class="ml-7 mt-1 rounded-lg text-right">
            </div>
            <div>
                <template v-for="plaintes in getFilteredPlainte" :key="plaintes.id">
                    <div class="bg-white text-black text-right rounded-lg p-2 see">
                        <h1><span v-text="plaintes.reference_plainte"></span>: مصدر الشكاية</h1>
                        <h1><span v-text="plaintes.vice_procureur_name"></span>: نائب وكيل الملك</h1>
                        <h1><span v-text="plaintes.reponse"></span>: جواب نائب وكيل الملك</h1>
                        <h1><span v-text="plaintes.created_at"></span>: تاريخ الإرسال </h1>
                    </div>
                </template>
            </div>
      </div>

      <div class="menu">
          <menu-procureur/>
      </div>
  </div>
</template>

<script>
import { onMounted, ref, computed } from '@vue/runtime-core';
import usePlainteReponse from '../../service/PlainteReponseService'
import MenuProcureur from './MenuProcureur.vue';
export default {
    components: { 
        MenuProcureur,
    },

    setup(){ 
        const {plainte, getPlainteReponse} = usePlainteReponse();
        const rech = ref('');

        const getFilteredPlainte = computed( () => {

            return plainte.value.filter(plaintes => {
                return (plaintes.vice_procureur_name.toLowerCase().includes(rech.value.toLowerCase()) || plaintes.reference_plainte.toLowerCase().includes(rech.value.toLowerCase()))
            })
        });

        onMounted(getPlainteReponse());

        return{ 
            plainte,
            rech,
            getFilteredPlainte,
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
        height: 77vh;
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