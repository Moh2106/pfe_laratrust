<template>
    <div class="flex justify-between">
        <div class="details">
            <div class="bg-white text-black p-2 w-3/5 mx-auto translate-y-2 rounded-lg m-4">
                <div class="text-center text-black">
                    <input v-bind:value="info.id" :disabled="true" class="bg-black text-white rounded-lg text-center">
                    <br>
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

                <div class="border-2 rounded-2xl border-cyan-900 m-4 p-4 w-2/3 mx-auto">
                <div class="flex justify-between">
                    <input type="text" id="" v-model="name.identifiant" placeholder="معرف الشكوى" class="rounded-lg text-right">
                    <input type="number" id="" v-model="name.reference" placeholder="مرجع الشكوى" class="rounded-lg text-right">
                </div>

                <br>

                <div class="text-center">
                    <label for="choisir_vice">اختيار نائب للمدعي العام</label>
                    <select name="" id="choisir_vice" v-model="name.vice_procureur" class="w-40 rounded-lg text-right h-10">
                        <template v-for="procureur in vice" :key="procureur.id">
                            <option v-bind:value="procureur.name" v-text="procureur.name"></option>
                        </template>
                    </select>
                </div>

                <div class="w-20 mx-auto m-2">
                    <button @click="save" class="bg-blue-600 p-1 rounded text-white w-20">حفظ</button>
                </div>

                </div>

            </div>
        </div>
        

        <div class="menu">
            <menu-procureur/>
        </div>
    </div>
  
</template>

<script>
import { onMounted, reactive } from 'vue';
import userUser from '../../service/UserService';
import usePvs from '../../service/PvService';
import MenuProcureur from './MenuProcureur.vue'
import usePvDesigner from '../../service/PvDesignerService';
    
export default {
    props:{ 
        id:{ 
            required: true,
            type: String
        }
    },

    components:{  
        MenuProcureur,
    },

    setup(props){
        const {vice, getViceProcureur} = userUser();
        const {info, getPv} = usePvs();
        const {createDesignerPv} = usePvDesigner();

        onMounted(getPv(props.id));
        onMounted(getViceProcureur());

        const name = reactive({
            identifiant: '',
            reference: '',
            vice_procureur: '',
        });

        const save = async () => { 
            await createDesignerPv({...name});
        }

        return{ 
            info,
            vice,
            name,
            save,
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