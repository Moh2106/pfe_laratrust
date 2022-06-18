<template>
  <div>
      <div>
          <input type="search" placeholder="بحث" v-model="rech" class="rounded-lg mx-6 text-right shadow-sm border-2 mt-2">
      </div>

      <div v-if="this.rech && getFilteredPv.length > 0" class="text-white">
       {{ getFilteredPv.length}} تم العثور على ملف الشرطة القضائية
      </div>

      <div v-if="this.rech && getFilteredPv.length == 0" class="text-white">
       لم يتم العثور على سجلات الشرطة
      </div>

      <template v-for="pv in getFilteredPv" :key="pv.id">

        <div class="details p-3 m-2 mx-auto rounded-lg">
            <div>
            رقم الإرسالية  <span v-text = "pv.numero_envoi"></span>
            </div>

            <div>
                  <bdi>بواسطة  <span v-text = "pv.source_pv"> </span> </bdi> <bdi>  بتاريخ  <span v-text = "pv.date_enregistrement"> </span></bdi> <bdi> محضر مسجل من طرف <span v-text = "pv.prenom_personne_pv1"> </span> <span v-text = "pv.nom_personne_pv1"></span></bdi>
            </div>

            <div class="mt-2">
              <button>
                <router-link :to="{name: 'moreDetails', params: {id: pv.id}}" class="enregister"> انظر المزيد من التفاصيل</router-link>
              </button>
            </div>
        </div>

        

      </template>
  </div>
</template>

<script>
import { onMounted, ref, computed } from '@vue/runtime-core';
import usePvs from '../../service/PvService';

export default {
  setup(){ 
      const {infoPv, getAllPv} = usePvs();
      const rech = ref('');

      onMounted(getAllPv());

      const getFilteredPv = computed( () => {

            return infoPv.value.filter(pv => {
                return (pv.nom_personne_pv1.toLowerCase().includes(rech.value.toLowerCase()) || pv.police_judiciaire.toLowerCase().includes(rech.value.toLowerCase()))
            })
        });

        onMounted(getFilteredPv);

      return{ 
        rech,
        infoPv,
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
        background: #fff;
        width: 70vw;
        margin: 2em;
        text-align: right;
        color: black;
    }

    .enregister{ 
        background: #2c75ff;
        color: #fff;
        padding: 0.5em;
        border-radius: 0.5em;
    }
</style>