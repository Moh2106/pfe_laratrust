<template>
  <div class="flex justify-between">
      <div class="see">
          <div>
              <input type="search" placeholder="القيام ببحث" v-model="rech" class="ml-7 mt-1 rounded-lg text-right">
          </div>

          <template v-for="pv in getFilteredPv" :key="pv.id">
                <div class="details p-4 block text-right bg-white text-black rounded-lg">
                     <div>
                    رقم الإرسالية  <span v-text = "pv.numero_envoi"></span>
                    </div>

                    <div>
                            <bdi>بواسطة  <span v-text = "pv.source_pv"> </span> </bdi> <bdi>  بتاريخ  <span v-text = "pv.date_enregistrement"> </span></bdi> <bdi> محضر مسجل من طرف <span v-text = "pv.prenom_personne_pv1"> </span> <span v-text = "pv.nom_personne_pv1"></span></bdi>
                    </div>

                    <button class="mt-2">
                        <router-link :to="{name: 'pvDetails', params: {id: pv.id}}" class="bg-blue-500 rounded-lg p-1 text-white">انظر المزيد من التفاصيل <i class="fa-solid fa-plus"></i></router-link>
                    </button>

                </div>
            </template>
      </div>

      <div class="menu">
          <vice-menu/>
      </div>
  </div>
</template>

<script>
import { onMounted, ref, computed } from 'vue';
import usePvs from '../../service/PvService';
import ViceMenu from './ViceMenu.vue';

export default {

    components:{
    ViceMenu
},

    setup(){
        const {infoPv, getAllPv} = usePvs();
        const rech = ref('');

        onMounted(getAllPv());

        const getFilteredPv = computed( () => {

            return infoPv.value.filter(pv => {
                return (pv.nom_personne_pv1.toLowerCase().includes(rech.value.toLowerCase()) || pv.police_judiciaire.toLowerCase().includes(rech.value.toLowerCase()))
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
    .details{
        -webkit-box-shadow: 0px 0px 5px 0px rgba(66, 68, 90, 1);
        -moz-box-shadow: 0px 0px 5px 0px rgba(66, 68, 90, 1);
        box-shadow: 0px 0px 5px 0px rgba(66, 68, 90, 1);
        width: 75vw;
        height: auto;
        margin: 2em;
    }

    .see{ 
        width: 85vw;
        height: 77vh;
        overflow-y: scroll;
        transform: translateY(-1.5em);
        background: url('../../images/image1.jpeg');
    }

    .menu{ 
        width: 20%;
    }
</style>