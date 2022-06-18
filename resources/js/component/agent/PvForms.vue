<template>
  <div class="text-black">

      <div class="m-5 text-white">
          <h1> إضافة محضر</h1>
      </div>

      <form @submit.prevent="save">

          <!--Référence-->
          <div class="reference">
              <div>
                  <h1>المرجع</h1>
              </div>

              <div class="flex justify-between espace">

                  <div>
                      <label for="numero_rapport">رقم محضر الضابطة القضائية </label> <br>
                      <input type="text" name="" id="numero_rapport" v-model="pv.police_judiciaire">
                  </div>

                  <div>
                      <label for="classe_police">  صنف الضابطة القضائية</label> <br>
                      <select name="classe_police" id="classe_police" v-model="pv.classe_de_la_police">
                          <option value="الأمن الوطني">الأمن الوطني</option>
                          <option value="الدرك الملكي">الدرك الملكي </option>
                          <option value="كتابة الضبط">كتابة الضبط </option>
                          <option value="الموظفون المكلفون بمهمة">الموظفون المكلفون بمهمة</option>
                          <option value="باقي محرري المحاضر">باقي محرري المحاضر  </option>
                          <option value="الضباط السامون">الضباط السامون </option>
                          <option value="السلطة المحلية">السلطة المحلية</option>
                          <option value="وكلاء الملك">وكلاء الملك  </option>
                          <option value="الوكلاء العامون">الوكلاء العامون </option>
                          <option value="هيئة  المحامين">هيئة  المحامين</option>
                          <option value="المستشفيات">المستشفيات</option>
                          <option value="باشا مدينة قصبة تادلة">باشا مدينة قصبة تادلة  </option>
                      </select>
                  </div>

                  <div>
                      <label for="type_source">نوع المصدر</label> <br>
                      <select name="" id="type_source" v-model="pv.source_pv">
                          <option value="محلي"> محلي</option>
                          <option value="إنابة">إنابة</option>
                          <option value="اختصاص">اختصاص</option>
                      </select>
                  </div>
              </div>

              <div class="flex justify-between espace">

                  <div>
                      <label for="date_enregistrement">تاريخ التسجيل</label> <br>
                      <input type="date" name="" id="date_enregistrement" v-model="pv.date_enregistrement">
                  </div>

                  <div>
                      <label for="numero_envoi">رقم الإرسالية</label> <br>
                      <input type="number" name="" id="numero_envoi" v-model="pv.numero_envoi">
                  </div>
              </div>
          </div>

          <!--Poursuite public-->
          <div class="reference">
              <div>
                  <h1>النيابة العامة </h1>
              </div>

              <div class="flex justify-between espace">
                  <div>
                      <label for="date_inscription">تاريخ الإدراج</label> <br>
                      <input type="date" id="date_inscription" v-model="pv.date_inscription">
                  </div>

                  <div>
                      <label for="type_enregistrement">نوع المحضر</label> <br>
                      <input type="text" id="type_enregistrement" v-model="pv.type_enregistrement">
                  </div>
              </div>

              <div>
                  <label for="sujet_procès" class="area">موضوع المحضر</label> <br>
                  <textarea name="" id="sujet_procès" rows="1" v-model="pv.sujet_pv"></textarea>
              </div>
          </div>

          <!--Les parties-->
          <div class="plaignant">
              <div class="flex justify-between inconnu">
                  <button @click="open.isOpen =! open.isOpen" class="enregister_autre">
                      <router-link to="/dashboard/addPv">طرف جديد</router-link>
                  </button>

                  <h1>الأطراف</h1>

                  <div>
                      <input type="checkbox" name="" id="contre_inconnu" v-model="pv.contre_inconnu">
                      <label for="contre_inconnu">ضد شخص غريب</label>
                  </div>
              </div>

                <br>
                <div class="flex justify-between espace">
                  <!--Nom du plaignant-->
                  <input type="text" name="" placeholder="اسم  الطرف الأول " v-model="pv.nom_personne_pv1">

                    <!--Prénom du plaignant-->
                    <input type="text" name="" placeholder="الاسم الأول  للطرف الأول" v-model="pv.prenom_personne_pv1">

                    <!--Genre du plaignant-->
                    <select name="" id="" placeholder="نوع" v-model="pv.genre_personne_pv1">
                        <option value="ذكر">ذكر</option>
                        <option value="أنثى">أنثى</option>
                    </select>

                    <!--CIN du plaignant-->
                    <input type="text" name=""  placeholder="  الطرف الأول CIN" v-model="pv.cin_personne_pv1">

                    <!--Avocat du plaignant-->
                    <input type="text" name=""  placeholder=" الممثل القانوني للطرف الأول" v-model="pv.avocat_personne_pv1">
                </div>

                <div class="flex justify-between espace" v-if="open.isOpen">
                  <!--Nom du plaignant2-->
                  <input type="text" name="" placeholder="اسم الطرف الثاني " v-model="pv.nom_personne_pv2">

                    <!--Prénom du plaignant-->
                    <input type="text" name="" placeholder="الاسم الأول للطرف الثاني " v-model="pv.prenom_personne_pv2">

                    <!--Genre du plaignant-->
                    <select name="" id="" placeholder="جنس" v-model="pv.genre_personne_pv2">
                        <option value="ذكر">ذكر</option>
                        <option value="أنثى">أنثى</option>
                    </select>

                    <!--CIN du plaignant-->
                    <input type="text" name=""  placeholder="  الطرف الثاني CIN" v-model="pv.cin_personne_pv2">

                    <!--Avocat du plaignant-->
                    <input type="text" name=""  placeholder="الممثل القانوني للطرف الثاني" v-model="pv.avocat_personne_pv2">
                </div>
            </div>

            <div class="w-1/4 mx-auto">
                <button type="submit" class="enregister">تسجيل المحضر</button>
            </div>
      </form>
  </div>
</template>

<script>
import { reactive } from 'vue'
import usePvs from '../../service/PvService';
export default {
    setup(){
        const open = reactive({
            isOpen:false,
        });

        const pv = reactive({
            police_judiciaire: '',
            classe_de_la_police: '',
            source_pv: '',
            date_enregistrement: '',
            numero_envoi: '',
            date_inscription: '',
            type_enregistrement: '',
            sujet_pv: '',
            contre_inconnu: false,
            nom_personne_pv1: '',
            prenom_personne_pv1: '',
            genre_personne_pv1: '',
            cin_personne_pv1: '',
            avocat_personne_pv1: '',
            nom_personne_pv2: '',
            prenom_personne_pv2: '',
            genre_personne_pv2: '',
            cin_personne_pv2: '',
            avocat_personne_pv2: '',
        })

        const {createPv} = usePvs();

        const save = async () =>{
            await createPv({...pv});
        }

        return{ 
            open,
            pv,
            save,
        }
    }
}
</script>

<style scoped>
    .reference, .plaignant{ 
        border: 1px solid #85b0e4;
        margin: 1em;
        padding-bottom: 2em;
        background: #fff;
    }

    .espace{ 
        padding: 1em;
    }
    .reference h1, .inconnu{ 
        background: #cddcee;
        color: #001d3d;
        padding: 0.5em;
    }

    .reference textarea{ 
        width: 98%;
        margin: 0 1em;
    }

    .area{ 
        margin: 0 1em;
    }

    input, select, textarea{ 
        border-radius: 0.5em;
        text-align: right;
    }

    input, select{ 
        height: 2.3em;
    }


    input[type=checkbox]{ 
        height: 1em;
    }

    input:focus, select:focus, textarea:focus{ 
        -webkit-box-shadow: 6px -3px 13px -6px rgba(66, 68, 90, 1);
        -moz-box-shadow: 6px -3px 13px -6px rgba(66, 68, 90, 1);
        box-shadow: 6px -3px 13px -6px rgba(66, 68, 90, 1);
        border: 2px solid #000;
    }


    .enregister_autre{ 
        background: #2c75ff;
        color: #fff;
        padding: 0.5em;
        border-radius: 0.5em;
    }

    .enregister{ 
        background: #2c75ff;
        color: #fff;
        padding: 1em;
        border-radius: 0.5em;
        text-align: center;
    }
</style>