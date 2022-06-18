<template>
  <div class="flex justify-between">
      <div class="text-black details edit">
          <form @submit.prevent="save" class="form bg-white p-5 mx-auto rounded-lg translate-y-24 text-black">
                <div class="text-right">
                    <label for="name">الإسم الكامل</label> <br>
                    <input type="text" name="" id="name" v-model="info.name" class="rounded-lg w-full text-right" required>
                </div>

                <div class="text-right">
                    <label for="email">البريد الإلكتروني </label> <br>
                    <input type="text" name="" id="email" v-model="info.email" class="rounded-lg w-full text-right" required>
                </div>

                <div class="text-right">
                    <label for="password">كلمة السر</label> <br>
                    <input type="password" name="" id="password" v-model="info.password" class="rounded-lg w-full text-right" required>
                </div>

                <div class="text-right">
                    <label for="status">تفعيل حساب</label> <br>
                    <input type="checkbox" name="" id="status" v-model="info.status" class="rounded-lg">
                </div>

                <div class="text-right">
                    <label for="role_id">حفظ باسم</label> <br>
                    <select name="role_id" id="" class="rounded-lg w-full text-right h-7" v-model="info.role_id" required>
                        <option value="agent"> وكيل التسجيل  </option>
                    </select>
                </div>

                <br>

                <div>
                    <button type="submit" class="bg-green-600 rounded-lg text-white hover:bg-green-700 p-2 mx-auto">تعديل</button>
                </div>

            </form>
      </div>

      <div class="menu">
          <vice-menu/> 
      </div>
      

  </div>
</template>

<script>
import { onMounted } from 'vue';
import userUser from '../../service/UserService';
import ViceMenu from './ViceMenu'
import path from '../../router/vice'

export default {
    props: {
        id: {
            required: true,
            type: String
        }
    },

    components:{   
        ViceMenu,
    },

    setup(props) {
        const { info, getUser, updateUser } = userUser();
        onMounted(getUser(props.id));
        const save = async () => {
            await updateUser(props.id);
            await path.push({name: 'seeUser'});
        };
        return {
            open,
            info,
            save,
        };
    },
}
</script>

<style scoped>
    .form{   
        width: 30%;
        margin: 0 auto;
    }

    .menu{ 
        width: 20%;
    }

    .edit{ 
        width: 82vw;
        background: url('../../images/image1.jpeg');
        transform: translateY(-1.3em);
    }
</style>