<template>
  <div class="flex justify-between">

      <div class="taille">
          <div class="text-black text-rigth">
            <div class="mr-5 text-white text-right ">
                    <h1>تعديل محضر </h1>
            </div>

          <form @submit.prevent="save" class="form">

          <!--Référence-->
          <div class="reference">
              <div>
                  <h1>المرجع</h1>
              </div>

              <div class="flex justify-between espace">

                  <div>
                      <label for="police_judiciaire">الشرطة القضائية</label> <br>
                      <input type="text" name="" id="police_judiciaire" v-model="info.police_judiciaire">
                  </div>

                  <div>
                      <label for="classe_police">  صنف الضابطة القضائية</label> <br>
                      <select name="classe_police" id="classe_police" v-model="info.classe_de_la_police">
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
                      <select name="" id="type_source" v-model="info.source_pv">
                          <option value="محلي"> محلي</option>
                          <option value="إنابة">إنابة</option>
                          <option value="اختصاص">اختصاص</option>
                      </select>
                  </div>
              </div>

              <div class="flex justify-between espace">

                  <div>
                      <label for="date_enregistrement">تاريخ التسجيل</label> <br>
                      <input type="date" name="" id="date_enregistrement" v-model="info.date_enregistrement">
                  </div>

                  <div>
                      <label for="numero_envoi">رقم الإرسالية</label> <br>
                      <input type="number" name="" id="numero_envoi" v-model="info.numero_envoi">
                  </div>
              </div>
          </div>

          <!--Poursuite public-->
          <div class="reference">
              <div>
                  <h1>النيابة العامة </h1>
              </div>

                <br>

              <div class="flex justify-between espace">
                  <div>
                      <label for="date_inscription">تاريخ الإدراج</label> <br>
                      <input type="date" id="date_inscription" v-model="info.date_inscription">
                  </div>

                  <div>
                      <label for="type_enregistrement">نوع المحضر</label> <br>
                      <input type="text" id="type_enregistrement" v-model="info.type_enregistrement">
                  </div>
              </div>

              <div>
                  <label for="sujet_procès" class="area">موضوع المحضر</label> <br>
                  <textarea name="" id="sujet_procès" rows="1" v-model="info.sujet_pv"></textarea>
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
                      <input type="checkbox" name="" id="contre_inconnu" v-model="info.contre_inconnu">
                      <label for="contre_inconnu">ضد شخص غريب</label>
                  </div>
              </div>

                <br>
                <div class="flex justify-between espace">
                  <!--Nom du plaignant-->
                  <input type="text" name="" placeholder="اسم  الطرف الأول " v-model="info.nom_personne_pv1">

                    <!--Prénom du plaignant-->
                    <input type="text" name="" placeholder="الاسم الأول  للطرف الأول" v-model="info.prenom_personne_pv1">

                    <!--Genre du plaignant-->
                    <select name="" id="" placeholder="نوع" v-model="info.genre_personne_pv1">
                        <option value="ذكر">ذكر</option>
                        <option value="أنثى">أنثى</option>
                    </select>

                    <!--CIN du plaignant-->
                    <input type="text" name=""  placeholder="  الطرف الأول CIN" v-model="info.cin_personne_pv1">

                    <!--Avocat du plaignant-->
                    <input type="text" name=""  placeholder=" الممثل القانوني للطرف الأول" v-model="info.avocat_personne_pv1">
                </div>

                <div class="flex justify-between espace" v-if="open.isOpen">
                  <!--Nom du plaignant2-->
                  <input type="text" name="" placeholder="اسم الطرف الثاني " v-model="info.nom_personne_pv2">

                    <!--Prénom du plaignant-->
                    <input type="text" name="" placeholder="الاسم الأول للطرف الثاني " v-model="info.prenom_personne_pv2">

                    <!--Genre du plaignant-->
                    <select name="" id="" placeholder="جنس" v-model="info.genre_personne_pv2">
                        <option value="ذكر">ذكر</option>
                        <option value="أنثى">أنثى</option>
                    </select>

                    <!--CIN du plaignant-->
                    <input type="text" name=""  placeholder="  الطرف الثاني CIN" v-model="info.cin_personne_pv2">

                    <!--Avocat du plaignant-->
                    <input type="text" name=""  placeholder="الممثل القانوني للطرف الثاني" v-model="info.avocat_personne_pv2">
                </div>
            </div>

            <div class="w-40 mx-auto ">
                <button type="submit" class="enregister w-40">قم بتسجيل الشكوى</button>
            </div>
          </form>
      </div>
      </div>

      <div class="menu">
          <menu-agent/>
      </div>


    
  </div>
</template>

<script>
import { onMounted, reactive } from 'vue'
import usePvs from '../../service/PvService';
import MenuAgent from './MenuAgent.vue';

export default {
  components: { MenuAgent },

    props: { 
        id: { 
            required: true,
            type: String,
        }
    },

    setup(props){
        const open = reactive({
            isOpen:false,
        });

        const {getPv, info, updatePv} = usePvs();

        onMounted(getPv(props.id));

        const {createPv} = usePvs();

        const save = async () => {
            await updatePv(props.id);
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
        padding: 0.5em;
        border-radius: 0.5em;
        margin: 1em 10em;
        text-align: center;
        transform: translateX(-3em);
    }

    
    .menu{ 
        width: 20%;
    }

    .taille{ 
        width: 83vw;
        background: url('../../images/image1.jpeg');
        height: 77vh;
        transform: translateY(-1.3em);
        overflow-y: scroll;
    }

    .form{ 
        width: 90%;
        margin: 0 auto;
    }
</style>