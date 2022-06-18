<template>
    <div class="user">
        <div class="flex justify-between ">
            <div>
                <button class="btn_creer">
                    <router-link to="/dashboard/createUser" class="creer">إنشاء مستخدم</router-link>
                </button>
            </div>

            <div>
                <input type="text" v-model="rech" placeholder=" بحث" class="rounded-lg text-right">
            </div>
        </div>
        
        <table class="table-auto border-1 mx-auto w-auto text-black bg-white p-5 rounded-lg">
            <thead>
                <th scope="col" class="px-6 py-3">حدت</th>
                <th scope="col" class="px-6 py-3">الحالة</th>
                <th scope="col" class="px-6 py-3">البريد الإلكتروني</th>
                <th scope="col" class="px-6 py-3">الإسم الكامل</th>
                <th scope="col" class="px-6 py-3">معرف</th>
            </thead>

            <template v-for="utilisateur in getFilteredUser" v-bind:key="utilisateur.id">
                <tbody>
                    <td scope="col" class="px-6 py-3">
                        <button>
                            <router-link :to="{name: 'EditUser', params: {id: utilisateur.id}}" class="rounded-lg bg-green-500 text-white p-1 hover:bg-green-600">تعديل</router-link>
                        </button>
                    </td>

                    <td scope="col" class="px-6 py-3 border-black focus:bg-slate-50">
                        <div v-text="utilisateur.status"></div>
                    </td>

                    <td scope="col" class="px-6 py-3 focus:bg-slate-50">
                        <div v-text="utilisateur.email"></div>
                    </td>

                    <td scope="col" class="px-6 py-3 focus:bg-slate-50">
                        <div v-text="utilisateur.name"></div>
                    </td>

                    <td scope="col" class="px-6 py-3 focus:bg-slate-50">
                        <div v-text="utilisateur.id"></div>
                    </td>
  
                </tbody>
            </template>

        </table>

    </div>
</template>

<script>
import { computed, onMounted, ref } from 'vue';
import userUser from '../../service/UserService';

export default {

    setup(props){
        const {utilisateurs, getUtilisateurs} = userUser();

        const rech = ref('');

        const getFilteredUser = computed( () => {

            return utilisateurs.value.filter(utilisateur => {
                return (utilisateur.name.toLowerCase().includes(rech.value.toLowerCase()))
            })
        });

        onMounted(getUtilisateurs);
        onMounted(getFilteredUser);

        return{
            utilisateurs,
            rech,
            getFilteredUser,
        }
    }
}
</script>

<style scoped>

    .btn_creer{ 
        margin-bottom: 2em;
    }
    .creer{ 
        background: #136f63;
        color: white;
        padding: 0.5em;
        border-radius: 0.5em;
    }

    .user{ 
        height: 82vh;
        overflow-y: scroll;
        width: 100vw;
        padding: 1em;
        transform: translateY(0.2em);
        background: url('../../images/image1.jpeg') fixed;
    }

</style>
