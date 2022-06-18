<template>
  <div class="see">
      <div>
          <input type="search" placeholder="بحث" v-model="rech" class="ml-7 mt-1 rounded-lg text-right">
      </div>

      <template v-for="plaintes in getFilteredPlainte" :key="plaintes.id">
        <div class="details p-2 block text-right bg-white text-black rounded">
            <div>
               <span v-text = "plaintes.reference "></span>  مرجع الشكاية 
            </div>

            <div class="text-right">
                  <bdi> ومصدرها <span v-text = "plaintes.source_de_la_plainte"> </span></bdi> <bdi>  بتاريخ <span v-text = "plaintes.date_inscription"> </span> <bdi>نوعها <span v-text = "plaintes.type_de_la_plainte"> </span>    </bdi> </bdi> <bdi><span v-text = "plaintes.prenom_plaignant1"></span> <span v-text = "plaintes.nom_plaignant1"></span>   شكاية مسجلة من طرف   </bdi>
            </div>

            <button class="mt-1">
                <router-link :to="{name: 'moreDetails', params: {id: plaintes.id}}" class="bg-blue-500 rounded-lg p-1 text-white mt-1">انظر المزيد من التفاصيل <i class="fa-solid fa-plus"></i></router-link>
            </button>

        </div>
      </template>
  </div>
</template>

<script>
import { onMounted, ref, computed } from 'vue';
import usePlainte from '../../service/PlainteService'
export default {

    setup(){
        const {plainte, getPlainte} = usePlainte();
        const rech = ref('');

        const getFilteredPlainte = computed( () => {

            return plainte.value.filter(plaintes => {
                return (plaintes.type_de_la_plainte.toLowerCase().includes(rech.value.toLowerCase()) || plaintes.nom_plaignant1.toLowerCase().includes(rech.value.toLowerCase()))
            })
        });


        onMounted(getPlainte);

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
        width: 75vw;
        margin: 2em;
    }

    .see{ 
        height: 77vh;
        overflow-y: scroll;
        transform: translateY(-1.5em);
        background: url('../../images/image1.jpeg');
    }
</style>