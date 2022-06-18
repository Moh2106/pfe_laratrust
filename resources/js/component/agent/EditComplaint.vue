<template>
    <div class="flex justify-between border-l-orange-300">
        <div class="edit">
            <form @submit.prevent="save" class="form text-black">

                <div class="plainte">
                <!--Informations sur la plainte -->
                <div>
                    <h1 class="information">معلومات عن الشكاية</h1>
                </div>

                <br>

                    <!--Contre un inconnu en checkbox-->
                <div>
                    <input type="checkbox" name="" id="inconnu" v-model="info.contre_inconnu">
                    <label for="inconnu">ضد شخص غريب</label>
                </div>

                    <br>

                <!--Type de la plainte et source de la plainte-->
                <div class="espace">

                    <div>
                        <label for="source_plainte"> مصدر الشكاية</label> <br>
                        <select name="" id="source_plainte" v-model="info.source_plainte">
                            <option value="مشتكي">مشتكي </option>
                            <option value="محامي">محامي</option>
                            <option value="وشاية">وشاية</option>
                            <option value="اختصاص">اختصاص</option>
                            <option value="وزارة العدل">وزارة العدل</option>
                            <option value="مؤسسة سجنية">مؤسسة سجنية</option>
                            <option value="الوكيل العام لدى محكمة النقض">الوكيل العام لدى محكمة النقض</option>
                            <option value="إنابة">إنابة</option>
                            <option value="آخر">آخر</option>
                            <option value="مؤسسة محمد السادس للجالية المغربية المقيمة بالخارج">مؤسسة محمد السادس للجالية المغربية المقيمة بالخارج</option>
                            <option value="الوكيل العام لدى محكمة الإستئناف">الوكيل العام لدى محكمة الإستئناف</option>
                            <option value="رئاسة النيابة العامة">رئاسة النيابة العامة</option>
                        </select>
                    </div>

                    <div>
                        <label for="type_plainte">نوع الشكاية</label> <br>
                        <select name="" id="type_plainte" v-model="info.type_plainte">
                            <option value="شكاية عادية[3301]">شكاية عادية [3301]</option>
                            <option value="[3103] شكاية العنف ضد الأطفال">[3103] شكاية العنف ضد الأطفال</option>
                            <option value="[3104] شكاية العنف ضد النساء">[3104] شكاية العنف ضد النساء</option>
                            <option value="[3107] شكاية المعتقلين">[3107] شكاية المعتقلين</option>
                            <option value="[3108] شكايةالجالية المغربية">[3108] شكايةالجالية المغربية</option>
                            <option value="[3109] شكاية ضد المحامون">[3109] شكاية ضد المحامون</option>
                            <option value="[3110] شكاية استثنائية">[3110] شكاية استثنائية</option>
                            <option value="[3111] شكاية ضد العدول">[3111] شكاية ضد العدول</option>
                            <option value="[3112] شكاية ضد الموثقين">[3112] شكاية ضد الموثقين</option>
                            <option value="3113">[3113] شكاية ضد الخبراء</option>
                            <option value="[3114] شكاية ضد  المفوضين القضائيين">[3114] شكاية ضد  المفوضين القضائيين</option>
                            <option value="[3115] شكاية   ضباط الشرطة ومن لهم صفة الإمتياز">[3115] شكاية   ضباط الشرطة ومن لهم صفة الإمتياز</option>
                            <option value="[3116] شكاية ضد التراجمة">[3116] شكاية ضد التراجمة</option>
                            <option value="[3117] شكاية العنف ضد الزوج">[3117] شكاية العنف ضد الزوج</option>
                            <option value="[3118] شكاية  ضد المحكمين">[3118] شكاية  ضد المحكمين</option>
                            <option value="[3119] شكاية انتخابية">[3119] شكاية انتخابية</option>
                            <option value="[3120] شكاية مباشرة أمام قاضي التحقيق">[3120] شكاية مباشرة أمام قاضي التحقيق</option>
                            <option value="[3121] شكاية مباشرة أمام رئيس المحكمة">[3121] شكاية مباشرة أمام رئيس المحكمة</option>
                            <option value="[3123] شكاية الجرائم المالية">[3123] شكاية الجرائم المالية</option>
                        </select>
                    </div>

                </div>

                <!--Référence de la plainte, date des faits et lieu des faits-->
                <div class="espace">
                    <div>
                        <label for="reference">مرجع الشكاية</label> <br>
                        <input type="text" name="" id="reference" v-model="info.reference">
                    </div>

                    <div>
                        <label for="date_inscription">تاريخ الإدراج</label> <br>
                        <input type="date" name="" id="date_inscription" v-model="info.date_inscription">
                    </div>
                </div>

                    <br>

                <div class="espace">
                    <div>
                        <label for="date_des_faits">تاريخ الوقائع</label> <br>
                        <input type="date" name="" id="date_des_faits" v-model="info.date_des_faits">
                    </div>

                    <div>
                        <label for="lieu_des_faits">موقع الحقائق</label> <br>
                        <input type="text" name="" id="lieu_des_faits" v-model="info.lieu_des_faits">
                    </div>
                </div>

                <div class="objet">
                    <label for="objet">موضوع الشكاية</label> <br>
                    <textarea name="" id="objet" rows="1" v-model="info.objet"></textarea>
                </div>

                </div>
                <!---Informations sur la personne -->

                <div class="second_part">


                    <div class="flex justify-between information">
                        <div>
                            <button @click="open.isOpen=!open.isOpen" class="enregister_autre">
                            <router-link to="/dashboard/addcomplaint">إضافة مشتكي آخر</router-link>
                            </button>
                        </div>

                        <h1>معلومات عن المشتكي</h1>
                    </div>

                    <div class="flex justify-between plaignant">
                    <!--Nom du plaignant-->
                    <input type="text" name="" placeholder="اسم المشتكي" v-model="info.nom_plaignant1">

                    <!--Prénom du plaignant-->
                    <input type="text" name="" placeholder="الاسم الأول لمقدم الشكوى" v-model="info.prenom_plaignant1">

                    <!--Genre du plaignant-->
                    <select name="" id="" placeholder="نوع" v-model="info.genre_plaignant1">
                        <option value="masculin">ذكر</option>
                        <option value="feminin">أنثى</option>
                    </select>

                    <!--CIN du plaignant-->
                    <input type="text" name=""  placeholder="CIN لصاحب الشكوى" v-model="info.cin_plaignant1">

                    <!--Avocat du plaignant-->
                    <input type="text" name=""  placeholder="محامي المشتكي" v-model="info.avocat_plaignant1">
                    </div>

                    <div class="flex justify-between plaignant" v-if="open.isOpen">
                    <!--Nom du plaignant-->
                    <input type="text" name="" placeholder="اسم المشتكي" v-model="info.nom_plaignant2">

                    <!--Prénom du plaignant-->
                    <input type="text" name="" placeholder="الاسم الأول لمقدم الشكوى" v-model="info.prenom_plaignant2">

                    <!--Genre du plaignant-->
                    <select name="" id="" placeholder="نوع" v-model="info.genre_plaignant2">
                        <option value="masculin">ذكر</option>
                        <option value="feminin">أنثى</option>
                    </select>

                    <!--CIN du plaignant-->
                    <input type="text" name=""  placeholder="CIN لصاحب الشكوى" v-model="info.cin_plaignant2">

                    <!--Avocat du plaignant-->
                    <input type="text" name=""  placeholder="محامي المشتكي" v-model="info.avocat_plaignant2">
                    </div>

                </div>
          
                <br>

                <div class="w-40 mx-auto">
                    <button type="submit" class="enregister">قم بتسجيل الشكوى</button>
                </div>

            </form>
        </div>

        <div class="menu">
            <menu-agent/>
        </div>
    </div>
</template>

<script>
import { onMounted, reactive} from 'vue';
import usePlainte from '../../service/PlainteService'
import MenuAgent from './MenuAgent.vue';

export default {
  components: { MenuAgent },
    props:{
        id:{ 
            required: true,
            type: String,
        }
    },

    setup(props){

        const open = reactive({
            isOpen:false,
        });

        const {info, getComplaint, updatePlainte} = usePlainte();
        onMounted(getComplaint(props.id));

        const save = async () => {
            await updatePlainte(props.id);
        };

        return{ 
            open,
            info,
            save,
        }
        
    }
  
    
}
</script>

<style scoped>
    .plainte{ 
        text-align: right;
        border: 1px solid #98b9e1;
        background: #fff;
    }


    .second_part{ 
        margin: 1em 0;
        border: 1px solid #98b9e1;
        background: #fff;
    }
    .information{ 
        border: 1px solid #98b9e1;
        padding: 0.5em;
        background: #d8e1ec;
        color: #0f056b;
    }

    .plaignant{ 
        margin: 1em;
    }
    .espace{ 
        display: flex;
        justify-content: space-around;
    }

    input, select, textarea{ 
        border-radius: 0.5em;
        text-align: right;
    }

    input[type=checkbox]{ 
        height: 1em;
    }

    input, select{ 
        height: 2.5em;
    }


    input:focus, select:focus, textarea:focus{ 
        -webkit-box-shadow: 6px -3px 13px -6px rgba(66, 68, 90, 1);
        -moz-box-shadow: 6px -3px 13px -6px rgba(66, 68, 90, 1);
        box-shadow: 6px -3px 13px -6px rgba(66, 68, 90, 1);
        border: 2px solid #000;
    }
    
    textarea{ 
        width: 95%;
    }

    .objet{ 
        margin: 0 1em;
    }
    .enregister{ 
        background: #2c75ff;
        color: #fff;
        padding: 0.5em;
        border-radius: 0.5em;
        margin: 0.5em;
        text-align: center;
    }

    .enregister_autre{ 
        background: #2c75ff;
        color: #fff;
        padding: 0.5em;
        border-radius: 0.5em;
    }

    .menu{ 
        width: 20%;
    }

    .edit{ 
        transform: translateY(-1.3em);
        width: 100vw;
        margin: 0 auto;
        height: 77vh;
        overflow-y: scroll;
        background: url('../../images/image1.jpeg');
    }

    .form{ 
        width: 77vw;
        margin: 1em 2em 0 2em;
    }

    
</style>