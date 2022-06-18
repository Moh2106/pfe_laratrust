import axios from "axios";
import { ref } from "vue";

export default function usePvReponse(){ 
    const infoPv = ref([]);

    const createPvReponse = async (data) =>{
        try{
            await axios.post('/api/pvReponse', data);
            window.confirm('Message bien envoyé');
        }
        catch(e){
            console.log(e.response.data.errors);
        }
    }

    const getPvReponse = async () => { 
        const response = await axios.get('/api/pvReponse');
        infoPv.value = response.data.data;

        console.log({...infoPv});
    }

    return{ 
        createPvReponse,
        infoPv,
        getPvReponse,
    }
}