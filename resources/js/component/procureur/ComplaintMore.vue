<template>
  <div class="flex justify-between">
      <div class="details">
          <div class="bg-white text-black p-2 w-2/3 mx-auto translate-y-2 rounded-lg m-4">
                <div class="text-center text-black">
                <h1>معلومات عن الشكاية</h1>
                <input v-bind:value="info.id" :disabled="true" class="bg-black text-white text-center rounded-lg">
                <br>

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

                <div class="border-2 rounded-2xl border-cyan-900 m-4 p-4 w-2/3 mx-auto">
                    <div class="flex justify-between">
                        <input type="text" id="" v-model="name.identifiant" placeholder="معرّف الشكاية" class="rounded-lg text-right">
                        <input type="text" name="" id="" v-model="name.reference" placeholder=" مرجع الشكاية" class="rounded-lg text-right">
                    </div>

                    <br>

                    <div class="text-center">
                        <select name="" id="choisir_vice" v-model="name.vice_procureur" class="w-40 rounded-lg text-right h-10">
                            <template v-for="procureur in vice" :key="procureur.id">
                                <option v-bind:value="procureur.name" v-text="procureur.name"></option>
                            </template>
                        </select>
                        <label for="choisir_vice" class="m-1">اختيار نائب الوكيل العام للملك</label>
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
import { onMounted, reactive, ref } from 'vue';
import usePlainteDesigner from '../../service/PlainteDesignerService';
import usePlainte from '../../service/PlainteService'
import userUser from '../../service/UserService';
import MenuProcureur from './MenuProcureur.vue';
    
export default {
  components: { MenuProcureur },
    props:{ 
        id:{ 
            required: true,
            type: String
        }
    },

    setup(props){
        const {info, getComplaint} = usePlainte();
        const {vice, getViceProcureur} = userUser();
        const {createDesignerPlainte} = usePlainteDesigner();

        const name = reactive({
            identifiant: '',
            reference: '',
            vice_procureur: '',
        });


        onMounted(getComplaint(props.id));
        onMounted(getViceProcureur());
        onMounted(() => { 
            console.log(info.reference);
        })

        const save = async () => { 
            await createDesignerPlainte({...name});
        }

        return{ 
            name,
            info,
            vice,
            save,
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