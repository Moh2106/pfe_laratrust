<template>
  <div class="flex justify-between">
      <div class="details text-black">
          <div class="px-8 bg-white text-center py-5 shadow-stone-900 rounded-lg w-1/3 mx-auto m-2">
              <div id="page">
                <h1><span v-text="info.contre_inconnu"></span> : ضد مجهول</h1>
                <h1><span v-text="info.source_de_la_plainte"></span> : <bdi>  مصدر الشكاية</bdi></h1>
                <h1><span v-text="info.type_de_la_plainte"></span> : <bdi>نوع الشكاية </bdi></h1>
                <h1><span v-text="info.reference"></span> : <bdi> مرجع الشكاية </bdi></h1>
                <h1><span v-text="info.date_inscription"></span> : <bdi> تاريخ الإدراج </bdi></h1>
                <h1><span v-text="info.date_des_faits"></span> : <bdi> تاريخ الوقائع </bdi></h1>
                <h1><span v-text="info.lieu_des_faits"></span> : <bdi> موقع الحقائق </bdi></h1>
                <h1><span v-text="info.objet"></span> : <bdi> موضوع الشكاية </bdi></h1>
                <h1><span v-text="info.nom_plaignant1"></span> : <bdi> اسم المشتكي الأول </bdi></h1>
                <h1><span v-text="info.prenom_plaignant1"></span> : <bdi> الاسم الأول للمشتكي الأول </bdi></h1>
                <h1><span v-text="info.genre_plaignant1"></span> : <bdi> جنس المشتكي الأول </bdi></h1>
                <h1><span v-text="info.cin_plaignant1"></span> : <bdi> المشتكي الأول CIN </bdi> </h1>
                <h1><span v-text="info.avocat_plaignant1"></span> : <bdi> محامي المشتكي الأول </bdi></h1>
                <h1><span v-text="info.nom_plaignant2"></span> : <bdi> اسم المشتكي الثاني </bdi></h1>
                <h1><span v-text="info.prenom_plaignant2"></span> : <bdi> الاسم الأول للمشتكي الثاني </bdi></h1>
                <h1><span v-text="info.genre_plaignant2"></span> : <bdi> جنس المشتكي الثاني </bdi></h1>
                <h1><span v-text="info.cin_plaignant2"></span> : <bdi>  المشتكي الثاني CIN </bdi></h1>
                <h1><span v-text="info.avocat_plaignant2"></span> : <bdi> محامي المشتكي الثاني </bdi> </h1>
              </div>

                <br>

               <div class="flex justify-around">
                <div>
                    <router-link :to="{name: 'editComplaint'}" class="bg-green-500 p-2 text-white rounded-md">تعديل</router-link>
                </div>

                <div>
                    <button @click="destroy(info.id)" class="bg-red-500 p-2 text-white rounded-md">حذف</button>
                </div>

                <div>
                    <button @click="download">pdf تحميل </button>
                </div>
               </div>
          </div>

      </div>

      <div class="menu">
          <menu-agent/>
      </div>
      
  </div>
</template>

<script>
import { onMounted } from '@vue/runtime-core';
import usePlainte from '../../service/PlainteService'
import MenuAgent from './MenuAgent.vue';
import jspdf from 'jspdf';
import html2canvas from 'html2canvas';

export default {
  components: { MenuAgent },

    props: { 
        id:{ 
            required: true,
            type: String,
        }
    },

    setup(props){ 
        const {info, getComplaint, destroyPlainte} = usePlainte();

        onMounted(getComplaint(props.id));

        const download = () => { 
            window.html2canvas = html2canvas;
            const doc = new jspdf("p","pt","a3");

            doc.html(document.querySelector("#page"), {
                callback: function(pdf){
                    pdf.save("plainte.pdf")
                }
            });
        }

        const destroy = async (id) =>{ 
            await destroyPlainte(id);
        }

        return{ 
            info,
            download,
            destroy,
        }
    }
}
</script>

<style scoped>
    .details{ 
        margin: 0 auto;
        transform: translateY(-1.3em);
        background: url('../../images/image1.jpeg');
        height: 77vh;
        width: 82vw;
        overflow-y: scroll;
    }
    .menu{ 
        width: 20%;
    }
</style>