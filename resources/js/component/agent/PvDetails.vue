<template>
  <div class="flex justify-between">
      <div class="general">
          <div class="details  px-8 bg-white text-center py-5 shadow-stone-900 rounded-lg m-2">
                <div class="text-black">
                    <h1><span v-text="info.id"></span> : معرف المحضر </h1>
                    <h1><span v-text="info.police_judiciaire"></span> : <bdi>  رقم محضر الضابطة القضائية </bdi></h1>
                    <h1><span v-text="info.classe_de_la_police"></span> : <bdi> صنف الضابطة القضائية </bdi></h1>
                    <h1><span v-text="info.source_pv"></span> : <bdi> مصدر المحضر </bdi></h1>
                    <h1><span v-text="info.date_enregistrement"></span> : <bdi> تاريخ التسجيل </bdi></h1>
                    <h1><span v-text="info.numero_envoi"></span> : <bdi> رقم الإرسالية </bdi></h1>
                    <h1><span v-text="info.date_inscription"></span> : <bdi> تاريخ الإدراج </bdi></h1>
                    <h1><span v-text="info.type_enregistrement"></span> : <bdi> نوع المحضر </bdi></h1>
                    <h1><span v-text="info.sujet_pv"></span> : <bdi> موضوع المحضر </bdi></h1>
                    <h1><span v-text="info.contre_inconnu"></span> : <bdi> ضد مجهول </bdi></h1>
                    <h1><span v-text="info.nom_personne_pv1"></span> : <bdi> إسم الطرف الأول   </bdi></h1>
                    <h1><span v-text="info.prenom_personne_pv1"></span> : <bdi> الاسم الأول للطرف الأول </bdi></h1>
                    <h1><span v-text="info.genre_personne_pv1"></span> : <bdi> الجنس  </bdi></h1>
                    <h1><span v-text="info.cin_personne_pv1"></span> : <bdi> الطرف الأول  </bdi> CIN </h1>
                    <h1><span v-text="info.avocat_personne_pv1"></span>: <bdi>   الممثل القانوني للطرف الأول  </bdi></h1>
                    <h1><span v-text="info.nom_personne_pv2"></span> : <bdi> إسم الطرف الثاني  </bdi></h1>
                    <h1><span v-text="info.prenom_personne_pv2"></span> : <bdi> الاسم الأول للطرف الثاني </bdi></h1>
                    <h1><span v-text="info.genre_personne_pv2"></span> : <bdi> الجنس </bdi></h1>
                    <h1><span v-text="info.cin_personne_pv2"></span> : <bdi> الطرف الثاني </bdi> CIN</h1>
                    <h1><span v-text="info.avocat_personne_pv2"> </span> : <bdi>   الممثل القانوني للطرف الثاني  </bdi></h1>
                </div>

      <br>

      <div class="flex justify-around">
          <div>
              <button>
                  <router-link :to="{name: 'editPv'}" class="bg-green-500 text-white p-2 rounded-md">تعديل</router-link>
              </button>
          </div>

          <div>
              <button>
                  <router-link to="#" class="bg-red-500 text-white p-2 rounded-md">حذف
                  </router-link>
              </button>
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
import usePvs from '../../service/PvService'
import MenuAgent from './MenuAgent.vue';
export default {
  components: { MenuAgent },
    props: {
        id: {
            required: true,
            type: String
        }
    },

    setup(props){ 
        const {info, getPv} = usePvs();

        onMounted(getPv(props.id));

        return{ 
            info,
        }
    }
}
</script>

<style scoped>
    .general{ 
        width: 83vw;
        transform: translateY(-1.3em);
        background: url('../../images/image1.jpeg');
    }
    .details{ 
        width: 70vh;
        margin: 0 auto;
        height: 77vh;
        
    }

    .menu{
        width: 20%;
    }
</style>