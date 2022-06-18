<template>
  <div class="flex justify-between">
      <div class="details">
            <div class=" text-center text-black bg-white rounded-lg p-2 w-1/3 mx-auto translate-y-6">
                <h1>معلومات الشكاية</h1>
                <h1><span v-text="info.reference"></span>: <bdi> المرجع </bdi></h1>
                <h1><span v-text="info.contre_inconnu"></span>: <bdi> ضد مجهول </bdi></h1>
                <h1><span v-text="info.source_de_la_plainte"></span> : <bdi> مصدر الشكاية </bdi></h1>
                <h1><span v-text="info.type_de_la_plainte"></span> : <bdi> نوع الشكاية </bdi></h1>
                <h1><span v-text="info.date_inscription"></span> : <bdi> تاريخ الإدراج </bdi></h1>
                <h1><span v-text="info.date_des_faits"></span> : <bdi> تاريخ الوقائع </bdi></h1>
                <h1><span v-text="info.lieu_des_faits"></span> : <bdi> موقع الحقائق </bdi></h1>
                <h1><span v-text="info.objet"></span> : <bdi> موضوع الشكاية </bdi></h1>
                <h1><span v-text="info.prenom_plaignant1"></span> : <bdi> إسم المشتكي الأول </bdi></h1>
                <h1><span v-text="info.nom_plaignant1"></span> : <bdi>   الإسم الأول للمشتكي الأول </bdi></h1>
                <h1><span v-text="info.genre_plaignant1"></span> : <bdi> الجنس   </bdi></h1>
                <h1><span v-text="info.cin_plaignant1"></span> : <bdi> رقم البطاقة الوطنية للمشتكي الأول </bdi></h1>
                <h1><span v-text="info.avocat_plaignant1"></span> : <bdi> محامي المشتكي الأول </bdi></h1>
                <h1><span v-text="info.prenom_plaignant2"></span> : <bdi> إسم المشتكي التاني </bdi></h1>
                <h1><span v-text="info.nom_plaignant2"></span> : <bdi> الإسم الأول للمشتكي التاني </bdi></h1>
                <h1><span v-text="info.genre_plaignant2"></span> : <bdi>   الجنس </bdi></h1>
                <h1><span v-text="info.cin_plaignant2"></span> : <bdi> رقم البطاقة الوطنية للمشتكي التاني </bdi></h1>
                <h1><span v-text="info.avocat_plaignant2"></span> : <bdi> محامي المشتكي التاني </bdi></h1>
            </div>
      </div>
      
      
      <div class="menu">
          <vice-menu/>
      </div>

  </div>
</template>

<script>
import { onMounted } from 'vue';
import usePlainte from '../../service/PlainteService'
import userUser from '../../service/UserService';
import ViceMenu from './ViceMenu.vue';
    
export default {
    props:{ 
        id:{ 
            required: true,
            type: String
        }
    },

    components:{  
        ViceMenu,
    },

    setup(props){
        const {info, getComplaint} = usePlainte();
        const {vice, getViceProcureur} = userUser();

        onMounted(getComplaint(props.id));
        onMounted(getViceProcureur());

        return{ 
            info,
            vice,
        }
    }
}
</script>

<style scoped>
.details{ 
        transform: translateY(-1.5em);
        width: 80vw;
        height: 77vh;
        overflow-y: scroll;
        background: url('../../images/image1.jpeg');
    }
    .menu{ 
        width: 20%;
    }

</style>