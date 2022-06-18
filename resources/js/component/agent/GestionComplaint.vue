<template>
  <div class="gestion">
      <div>
          <input type="search" placeholder="بحث" v-model="rech" class="mx-6 border-2 text-right rounded-xl mt-1">
      </div>

      <div v-for="plaintes in getFilteredPlainte" :key="plaintes.id">
        <div class="details p-3 m-2 mx-auto rounded-lg">
            <div>
               <span v-text = "plaintes.reference "></span>  مرجع الشكاية 
            </div>

            <div class="text-right">
                  <bdi> ومصدرها <span v-text = "plaintes.source_de_la_plainte"> </span></bdi> <bdi>  بتاريخ <span v-text = "plaintes.date_inscription"> </span> <bdi>نوعها <span v-text = "plaintes.type_de_la_plainte"> </span>    </bdi> </bdi> <bdi><span v-text = "plaintes.prenom_plaignant1"></span> <span v-text = "plaintes.nom_plaignant1"></span>   شكاية مسجلة من طرف   </bdi>
            </div>

            <br>

            <div>
                <button>
                    <router-link :to="{name: 'detailsComplaint', params: {id: plaintes.id}}" class="enregister">انظر المزيد من التفاصيل</router-link>
                </button>
            </div>
        </div>
            
      </div>
  </div>
</template>

<script>
import { onMounted, ref, computed } from '@vue/runtime-core';
import usePlainte from '../../service/PlainteService'
export default {

    setup(){ 
        const {plainte, getPlainte} = usePlainte();
        const rech = ref('');

        onMounted(getPlainte());

        const getFilteredPlainte = computed( () => {

            return plainte.value.filter(plaintes => {
                return (plaintes.type_de_la_plainte.toLowerCase().includes(rech.value.toLowerCase()) || plaintes.nom_plaignant1.toLowerCase().includes(rech.value.toLowerCase()))
            })
        });

        onMounted(getFilteredPlainte);

        return{
            rech,
            plainte,
            getFilteredPlainte,
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
        width: 72vw;
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

    .gestion{ 
        background: url('../../images/image1.jpeg');
        background-attachment: local;
        height: 77vh;
        overflow-y: scroll;
    }
</style>