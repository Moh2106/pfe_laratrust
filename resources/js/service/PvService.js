import axios from "axios";
import { ref } from "vue";
import router from '../router/index'

export default function usePvs(){

    const infoPv = ref([]);
    const info = ref([]);
    const nombre = ref([]);

    const createPv = async (data) =>{
        try{
            await axios.post('/api/pv', data);
        }
        catch(e){
            console.log(e.response.data.errors);
        }
    }

    const getAllPv = async () => {
        const response = await axios.get('/api/pv');
        infoPv.value = response.data.data;
    }

    const getPv = async (id) =>{
        const response = await axios.get('/api/pv/'+ id);
        info.value = response.data;
    }

    const updatePv = async (id) => {
        await axios.put('/api/pv/'+ id, info.value);
        await router.push({name: 'agentDashboard'});
    }

    const pvNombre = async (data) => { 
        const response = await axios.post('/pv/nombre', data);
        nombre.value = response.data;
    }


    return{
        createPv,
        getAllPv,
        getPv,
        info,
        infoPv,
        updatePv,
        pvNombre,
        nombre,
    }
}