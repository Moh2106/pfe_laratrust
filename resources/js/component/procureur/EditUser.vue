<template>
  <div class="flex justify-between">
      <div class="text-black details">
          <form @submit.prevent="save" class="form bg-white p-5 mx-auto rounded-lg translate-y-24 text-black text-right">
                <div>
                    <label for="name">الإسم الكامل</label> <br>
                    <input type="text" name="" id="name" v-model="info.name" class="rounded-lg w-full text-right" required>
                </div>

                <div>
                    <label for="email">البريد الإلكتروني </label> <br>
                    <input type="text" name="" id="email" v-model="info.email" class="rounded-lg w-full text-right" required>
                </div>

                <div>
                    <label for="password">كلمة السر</label> <br>
                    <input type="password" name="" id="password" v-model="info.password" class="rounded-lg w-full text-right" required>
                </div>

                <div>
                    <label for="status">تفعيل حساب</label> <br>
                    <input type="checkbox" name="" id="status" v-model="info.status" class="rounded-lg">
                </div>

                <div>
                    <label for="role_id">حفظ بصفة</label> <br>
                    <select name="role_id" id="role_id"  v-model="info.role_id" class="rounded-lg w-full text-right">
                            <option value="admin">وكيل الملك</option>
                            <option value="viceprocureur">نائب وكيل الملك </option>
                            <option value="agent"> وكيل التسجيل  </option>
                            <option value="administrateur">مدير</option>
                    </select>
                </div>

                <br>

                <div>
                    <button type="submit" class="bg-green-600 rounded-lg text-white hover:bg-green-700 p-2 mx-auto">تعديل</button>
                </div>

            </form>
      </div>

      <div class="menu">
          <menu-procureur/> 
      </div>
      

  </div>
</template>

<script>
import { onMounted } from 'vue';
import userUser from '../../service/UserService';
import ModalView from '../modal/ModalView.vue';
import MenuProcureur from './MenuProcureur.vue';

export default {
    props: {
        id: {
            required: true,
            type: String
        }
    },
    setup(props) {
        const { info, getUser, updateUser } = userUser();
        onMounted(getUser(props.id));
        const save = async () => {
            await updateUser(props.id);
        };
        return {
            open,
            info,
            save,
        };
    },
    components: { ModalView, MenuProcureur }
}
</script>

<style scoped>
    .details{   
        height: 79vh;
        width: 80vw;
        transform: translateY(-1.3em);
        overflow-y: scroll;
        background: url('../../images/image1.jpeg') fixed;
    }

    .menu{ 
        width: 20%;
    }

    .form{
        width: 25vw;
    }
</style>