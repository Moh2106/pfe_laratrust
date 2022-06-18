<template>
  <div class="create text-right">
      <form action="" @submit.prevent="save" class="bg-white p-5 w-1/3 mx-auto rounded-lg translate-y-24 text-black">
          <div>
              <label for="name">الإسم الكامل</label> <br>
              <input type="text" name="" id="name" v-model="form.name" class="rounded-lg w-full text-right" required>
          </div>

          <div>
              <label for="email">البريد الإلكتروني</label> <br>
              <input type="text" name="" id="email" v-model="form.email" class="rounded-lg w-full text-right " required>
          </div>

          <div>
              <label for="password">كلمة السر</label> <br>
              <input type="password" name="" id="password" v-model="form.password" class="rounded-lg w-full text-right" required>
          </div>

          <div>
              <label for="role_id">حفظ باسم</label> <br>
              <select name="role_id" id="" class="rounded-lg w-full text-right h-7" v-model="form.role_id" required>
                    <option value="admin">الوكيل العام للملك</option>
                    <option value="viceprocureur">نائب وكيل الملك</option>
                    <option value="agent"> وكيل التسجيل  </option>
                    <option value="administrateur">مدير</option>
              </select>
          </div>

            <br>

          <div>
              <button type="submit" class="bg-blue-600 rounded-lg text-white hover:bg-blue-700 p-2 mx-auto">حفظ</button>
          </div>

      </form>
  </div>
</template>

<script>
import { reactive } from 'vue'
import userUser from '../../service/UserService'
export default {
    setup(){
        const form = reactive({
            name: '',
            email: '',
            password: '',
        });
        
        const {createUser} = userUser();

        const save = async () =>{
            await createUser({...form});
        }

        return{ 
            form,
            save,
        }
    }
}
</script>

<style scoped>
    .create{ 
        height: 77vh;
        transform: translateY(-1.5em);
        background: url('../../images/image1.jpeg') fixed;
    }
</style>