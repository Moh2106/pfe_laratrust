<template>
    <div class="flex justify-between">
        <div class="details">
            <div class="bg-white text-black p-2 w-1/3 mx-auto translate-y-2 rounded-lg">
                <div class="text-center text-black">
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
            </div>   
        </div>

        <div class="menu">
            <vice-menu/>
        </div>
    </div>
  
</template>

<script>
import { onMounted } from 'vue';
import userUser from '../../service/UserService';
import usePvs from '../../service/PvService';
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
        const {vice, getViceProcureur} = userUser();
        const {info, getPv} = usePvs();

        onMounted(getPv(props.id));
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
        width: 85vw;
        height: 77vh;
        background: url('../../images/image1.jpeg');
        overflow-y: scroll;
    }

    .menu{ 
        width: 20%;
    }
</style>