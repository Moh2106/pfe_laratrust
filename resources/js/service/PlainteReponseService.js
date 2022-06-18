import { ref } from "vue";

export default function usePlainteReponse(){ 
    const plainte = ref([]);

    const createPlainteReponse = async (data) =>{
        try{
            await axios.post('/api/plainteReponse', data);
            window.confirm('Message bien envoyé');
        }
        catch(e){
            console.log(e.response.data.errors);
        }
    }

    const getPlainteReponse = async () => {
        const response = await axios.get('/api/plainteReponse');
        plainte.value = response.data.data;
    }

    return{ 
        createPlainteReponse,
        plainte,
        getPlainteReponse,
    }
}