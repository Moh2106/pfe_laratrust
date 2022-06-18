import { ref } from "vue";

export default function usePlainteDesigner(){

    const plainte = ref([]);

    const createDesignerPlainte = async (data) =>{
        try{
            await axios.post('/api/plainteDesigner', data);
        }
        catch(e){
            console.log(e.response.data.errors);
        }
    }

    const getAllPlainteDesigner = async () => {
        const response = await axios.get('/api/plainteDesigner');
        plainte.value = response.data.data;
    }

    return{ 
        plainte,
        createDesignerPlainte,
        getAllPlainteDesigner,
    }
}