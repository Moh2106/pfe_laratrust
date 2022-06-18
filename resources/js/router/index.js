import {createRouter, createWebHistory} from 'vue-router'
import AgentDashboard from '../view/agent/AgentDashboard'
import AddComplaint from '../view/agent/AddComplaint'
import AddPvs from '../view/agent/AddPvs'
import GestionPvView from '../view/agent/GestionPvView'
import PvDetails from '../component/agent/PvDetails'
import EditPv from '../component/agent/EditPv'
import GestionComplaintView from '../view/agent/GestionComplaintView'
import ComplaintDetails from '../component/agent/ComplaintDetails'
import EditComplaint from '../component/agent/EditComplaint'

const routes = [
    
    {
        path: '/dashboard',
        name: 'agentDashboard',
        component: AgentDashboard
    },

    {
        path: '/dashboard/addcomplaint',
        name: 'addComplaint',
        component: AddComplaint
    },

    {
        path: '/dashboard/addPv',
        name: 'addPv',
        component: AddPvs
    },

    {
        path: '/dashboard/gestionPv',
        name: 'gestionPv',
        component: GestionPvView
    },

    {
        path: '/dashboard/:id/moredetails/',
        name: 'moreDetails',
        component: PvDetails,
        props: true
    },

    {
        path: '/dashboard/:id/editPv/',
        name: 'editPv',
        component: EditPv,
        props: true
    },

    {
        path: '/dashboard/gestionComplaint',
        name: 'gestionComplaint',
        component: GestionComplaintView
    },

    {
        path: '/dashboard/:id/detailsComplaint/',
        name: 'detailsComplaint',
        component: ComplaintDetails,
        props: true
    },

    {
        path: '/dashboard/:id/editComplaint/',
        name: 'editComplaint',
        component: EditComplaint,
        props: true
    },
    
    
] 

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
  })

  export default router