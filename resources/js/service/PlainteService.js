import axios from "axios"
import { ref } from "vue";
import router from '../router/index';

export default function usePlainte(){

    const plainte = ref([]);
    const info = ref([]);
    const nombre = ref([]);


    const getPlainte = async () => {
        const response = await axios.get('/api/plainte');
        plainte.value = response.data.data;
        
    }

    const createPlainte = async (data) =>{
        try{
            await axios.post('/api/plainte', data);
            window.confirm('تم إضافة الشكاية بنجاح');
        }
        catch(e){
            console.log(e.response.data.errors);
        }
    }

    const getComplaint = async (id) =>{
        const response = await axios.get('/api/plainte/'+ id);
        info.value = response.data;
    }

    const updatePlainte = async (id) => {
        await axios.put('/api/plainte/'+ id, info.value);
        await router.push({name: 'gestionComplaint'});
    }

    const plainteNombre = async (data) => { 
        const response = await axios.post('/plainte/nombre', data);
        nombre.value = response.data;
    }

    const destroyPlainte = async (id) => { 
        if(!window.confirm('تريد حقا حذف هذه الشكاية؟')) return;
        await axios.delete('/api/plainte/'+ id);
        await router.push({name: 'gestionComplaint'});
    }

    return{
        createPlainte,
        plainte,
        getPlainte,
        info,
        getComplaint,
        updatePlainte,
        plainteNombre,
        nombre,
        destroyPlainte,
    }
}