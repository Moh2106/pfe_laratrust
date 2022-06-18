<template>
    <div>
        
      <form @submit.prevent="save" class="text-black">

      <div class="plainte">
          <!--Informations sur la plainte -->
          <div>
              <h1 class="information">معلومات عن الشكاية</h1>
          </div>

            <!--Contre un inconnu en checkbox-->
          <div>
              <input type="checkbox" name="" id="inconnu" v-model="plainte.contre_inconnu">
              <label for="inconnu">ضد شخص مجهول</label>
          </div>


          <!--Type de la plainte et source de la plainte-->
          <div class="espace">

            <div>
                <label for="source_plainte"> مصدر الشكاية</label> <br>
                <select name="" id="source_plainte" v-model="plainte.source_plainte">
                    <option value="مشتكي">مشتكي</option>
                    <option value="محامي">محامي</option>
                    <option value="وشاية">وشاية</option>
                    <option value="اختصاص">اختصاص</option>
                    <option value="وزارة العدل">وزارة العدل</option>
                    <option value="مؤسسة سجنية">مؤسسة سجنية</option>
                    <option value="الوكيل العام لدى محكمة النقض">الوكيل العام لدى محكمة النقض</option>
                    <option value="إنابة">إنابة</option>
                    <option value="أخرى">أخرى</option>
                    <option value="مؤسسة محمد السادس للجالية المغربية المقيمة بالخارج">مؤسسة محمد السادس للجالية المغربية المقيمة بالخارج</option>
                    <option value="الوكيل العام لدى محكمة الإستئناف">الوكيل العام لدى محكمة الإستئناف</option>
                    <option value="ئاسة النيابة العامة">رئاسة النيابة العامة</option>
                </select>
            </div>

            <div>
                <label for="type_plainte">نوع الشكاية</label> <br>
                <select name="" id="type_plainte" v-model="plainte.type_plainte">
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
                  <input type="text" name="" id="reference" v-model="plainte.reference">
              </div>

              <div>
                  <label for="date_inscription">تاريخ الإدراج</label> <br>
                  <input type="date" name="" id="date_inscription" v-model="plainte.date_inscription">
              </div>
          </div>


          <div class="espace">
            <div>
                  <label for="date_des_faits">تاريخ الوقائع</label> <br>
                  <input type="date" name="" id="date_des_faits" v-model="plainte.date_des_faits">
              </div>

              <div>
                  <label for="lieu_des_faits">موقع الحقائق</label> <br>
                  <input type="text" name="" id="lieu_des_faits" v-model="plainte.lieu_des_faits">
              </div>
          </div>

          <div class="objet">
              <label for="objet">موضوع الشكاية</label> <br>
              <textarea name="" id="objet" rows="1" v-model="plainte.objet"></textarea>
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
              <input type="text" name="" placeholder="اسم المشتكي" v-model="plainte.nom_plaignant1">

              <!--Prénom du plaignant-->
              <input type="text" name="" placeholder="الإسم الأول لمقدم الشكاية" v-model="plainte.prenom_plaignant1">

              <!--Genre du plaignant-->
              <select name="" id="" placeholder="نوع" v-model="plainte.genre_plaignant1">
                  <option value="masculin">ذكر</option>
                  <option value="feminin">أنثى</option>
              </select>

              <!--CIN du plaignant-->
              <input type="text" name=""  placeholder=" لصاحب الشكاية CIN" v-model="plainte.cin_plaignant1">

              <!--Avocat du plaignant-->
              <input type="text" name=""  placeholder="محامي المشتكي" v-model="plainte.avocat_plaignant1">
            </div>

            <div class="flex justify-between plaignant" v-if="open.isOpen">
              <!--Nom du plaignant-->
              <input type="text" name="" placeholder="اسم المشتكي" v-model="plainte.nom_plaignant2">

              <!--Prénom du plaignant-->
              <input type="text" name="" placeholder="الإسم الأول لمقدم الشكاية" v-model="plainte.prenom_plaignant2">

              <!--Genre du plaignant-->
              <select name="" id="" placeholder="نوع" v-model="plainte.genre_plaignant2">
                  <option value="masculin">ذكر</option>
                  <option value="feminin">أنثى</option>
              </select>

              <!--CIN du plaignant-->
              <input type="text" name=""  placeholder=" لصاحب الشكاية CIN" v-model="plainte.cin_plaignant2">

              <!--Avocat du plaignant-->
              <input type="text" name=""  placeholder="محامي المشتكي" v-model="plainte.avocat_plaignant2">
            </div>

        </div>
          

        <div class="w-40 mx-auto">
            <button type="submit" class="enregister">تسجيل الشكاية</button>
        </div>

      </form>

    </div>
</template>

<script>
import { reactive } from 'vue'
import usePlainte from '../../service/PlainteService';
import router from '../../router/index';

export default {
    setup(){
        const open = reactive({
            isOpen:false,
        });

        const plainte = reactive({
            contre_inconnu: false,
            source_plainte: '',
            type_plainte: '',
            reference: '',
            date_inscription: '',
            date_des_faits: '',
            lieu_des_faits: '',
            objet: '',
            nom_plaignant1: '',
            prenom_plaignant1: '',
            genre_plaignant1: '',
            cin_plaignant1: '',
            avocat_plaignant1: '',
            nom_plaignant2: '',
            prenom_plaignant2: '',
            genre_plaignant2: '',
            cin_plaignant2: '',
            avocat_plaignant2: '',
        })

        const {createPlainte} = usePlainte();

        const save = async () =>{
            await createPlainte({...plainte});
            router.push({name: 'addComplaint'});
        }

        return {
            open,
            plainte,
            save,
        };


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
        margin: 0.2em;
        text-align: center;
    }

    .enregister_autre{ 
        background: #2c75ff;
        color: #fff;
        padding: 0.5em;
        border-radius: 0.5em;
    }
    
</style>