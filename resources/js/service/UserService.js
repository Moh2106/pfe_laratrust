import axios from "axios";
import { ref } from "vue";
import router from "../router";

export default function userUser(){
    const utilisateurs = ref([]);
    const info = ref([]);
    const vice = ref([]);

    const getUtilisateurs = async () => {
        const response = await axios.get('/api/utilisateur');
        utilisateurs.value = response.data.data;
        console.log(utilisateurs.value);
    }

    const createUser = async (data) =>{
        await axios.post('/api/utilisateur', data);
        window.confirm('تمت إضافة المستعمل بنجاح');
        await router.push('/dashboard/user');
    }

    const getUser = async (id) =>{
        const response = await axios.get('/api/utilisateur/'+ id);
        info.value = response.data;
    }

    const updateUser = async (id) => {
        await axios.put('/api/utilisateur/'+ id, info.value);
        window.confirm('تم تعديل المستخدم بنجاح');
        await router.push('/dashboard/user');
    }

    const getViceProcureur = async () => { 
        const response = await axios.get('/utilisateur/vice');
        vice.value = response.data;
    }

    return{
        utilisateurs,
        info,
        getUtilisateurs,
        createUser,
        getUser,
        updateUser,
        getViceProcureur,
        vice,
    }
}