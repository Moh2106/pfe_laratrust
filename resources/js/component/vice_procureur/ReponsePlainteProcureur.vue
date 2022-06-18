<template>
  <div class="flex justify-between">
      <div class="details">
          <div class="w-full text-white">
              <form action="" @submit.prevent="save" class="w-2/3 mx-auto">
                <div class="flex justify-between">
                    <div class="text-right">
                        <label for="identifiant">معرف الشكاية </label> <br>
                        <input type="text" name="" id="identifiant" v-model="info.identifiant" class="rounded-lg text-right text-black">
                    </div>
                    
                    <div class="text-right">
                        <label for="reference">مرجع الشكاية </label> <br>
                        <input type="text" name="" id="reference" v-model="info.reference" class="rounded-lg text-right text-black">
                    </div>

                </div>
                  
                <div class="text-right">
                    <label for="vice_procureur">إسم نائب وكيل الملك </label> <br>
                    <input type="text" name="" id="vice_procureur" v-model="info.vice_procureur" class="rounded-lg text-right text-black">
                </div>

                <br>

                <div class="text-right">
                    <label for="reponse">رد مفصل للوكيل العام للملك </label> <br>
                    <textarea name="" id="reponse" rows="10" v-model="info.reponse" class="rounded-lg text-right w-full text-black"></textarea>
                </div>

                  <br>

                  <div class="text-right">
                      <button type="submit" class="bg-green-500 rounded-lg p-2">حفظ الجواب</button>
                  </div>
                  
              </form>
          </div>
      </div>

      <div>
          <vice-menu/>
      </div>
  </div>
</template>

<script>
import { reactive } from 'vue'
import usePlainteReponse from '../../service/PlainteReponseService';
import ViceMenu from './ViceMenu.vue'
export default {
  components: { ViceMenu },

  setup(){ 
      const info = reactive({
          identifiant: '',
          reference: '',
          vice_procureur: '',
          reponse: '',
      });

      const {createPlainteReponse} = usePlainteReponse();

      const save = () => {
          createPlainteReponse({...info});
          
      }

      return{ 
          save,
          info,
      }
  }

}
</script>

<style scoped>
    .details{ 
        width: 83vw;
        transform: translateY(-1.5em);
        background: url('../../images/image1.jpeg');
    }
</style>