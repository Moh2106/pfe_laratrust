require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from 'vue';
import router from './router/index';
import road from './router/admin'
import path from './router/vice'
import way from './router/hello'
import AddComplaint from './view/agent/AddComplaint'
import AgentDashboard from './view/agent/AgentDashboard'
import GestionPvView from './view/agent/GestionPvView'
import ProcureurDashboard from './view/procureur/ProcureurDashboard'
import ProcureurUser from './view/procureur/ProcureurUser'
import CreateUserView from './view/procureur/CreateUserView'
import SeeComplaintView from './view/procureur/SeeComplaintView'
import EditUser from './component/procureur/editUser'
import PvDetails from './component/agent/PvDetails'
import PvDetailsView from './view/agent/PvDetailsView'
import EditPv from './component/agent/EditPv'
import GestionComplaintView from './view/agent/GestionComplaintView'
import ComplaintDetails from './component/agent/ComplaintDetails'
import EditComplaint from './component/agent/EditComplaint'
import ViceDashboard from './view/vice_procureur/ViceDashboard'
import ViceCreationUtilisateur from './view/vice_procureur/ViceCreationUtilisateur'
import SeeUser from './view/vice_procureur/SeeUser'
import ViceEditUser from './component/vice_procureur/ViceEditUser'
import ViceComplaint from './view/vice_procureur/ViceComplaint'
import ViceComplaintMore from './component/vice_procureur/ViceComplaintMore'
import SeePv from './component/procureur/SeePv'
import PvMore from './component/procureur/PvMore'
import ViceSeePv from './component/vice_procureur/ViceSeePv'
import VicePvMore from './component/vice_procureur/VicePvMore'
import ComplaintDesigner from './view/vice_procureur/ComplaintDesigner'
import PvDesigner from './view/vice_procureur/PvDesigner'
import ComplaintStatistique from './component/procureur/ComplaintStatistique'
import PvStatistique from './component/procureur/PvStatistique'
import ReponsePlainteProcureur from './component/vice_procureur/ReponsePlainteProcureur'
import ReponsePvProcureur from './component/vice_procureur/ReponsePvProcureur'
import ViceAnswerPlainte from './component/procureur/ViceAnswerPlainte'
import ViceAnswerPv from './component/procureur/ViceAnswerPv'
import AnswerPlainte from './component/vice_procureur/AnswerPlainte'
import AnswerPv from './component/vice_procureur/AnswerPv'
import VicePvStatistique from './component/vice_procureur/VicePvStatistique'
import ViceComplaintStatistique from './component/vice_procureur/ViceComplaintStatistique'
import AdminUser from './component/administrateur/AdminUser'
import AdminCreateUser from './component/administrateur/AdminCreateUser'
import AdminEditUser from './component/administrateur/AdminEditUser'

createApp({
    components:{
        ProcureurDashboard,
        ProcureurUser,
        CreateUserView,
        SeeComplaintView,
        EditUser,
        SeePv,
        PvMore,
        ComplaintStatistique,
        PvStatistique,
        ViceAnswerPlainte,
        ViceAnswerPv,
    }

})
.use(road)
.mount('#app')

createApp({
    components:{
        AgentDashboard,
        AddComplaint,
        GestionPvView,
        PvDetails,
        PvDetailsView,
        EditPv,
        GestionComplaintView,
        ComplaintDetails,
        EditComplaint,
        PvStatistique,
    }

})
.use(router)
.mount('#agent')

createApp({
    components:{ 
        ViceDashboard,
        ViceCreationUtilisateur,
        SeeUser,
        ViceEditUser,
        ViceComplaint,
        ViceComplaintMore,
        ViceSeePv,
        VicePvMore,
        ComplaintDesigner,
        PvDesigner,
        ReponsePlainteProcureur,
        ReponsePvProcureur,
        AnswerPlainte,
        AnswerPv,
        VicePvStatistique,
        ViceComplaintStatistique,
    }
})
.use(path)
.mount('#vice')

createApp({
    components:{
        AdminUser,
        AdminCreateUser,
        AdminEditUser,
    }
})
.use(way)
.mount('#hello')
