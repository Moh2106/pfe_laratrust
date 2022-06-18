import { ref } from "vue";

export default function usePvDesigner(){

    const pv = ref([]);
    const createDesignerPv = async (data) =>{
        try{
            await axios.post('/api/pvDesigner', data);
        }
        catch(e){
            console.log(e.response.data.errors);
        }
    }

    const getAllPvDesigner = async () => {
        const response = await axios.get('/api/pvDesigner');
        pv.value = response.data.data;
    }

    return{ 
        createDesignerPv,
        pv,
        getAllPvDesigner,
    }
}