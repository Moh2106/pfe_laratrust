import {createRouter, createWebHistory} from 'vue-router'
import ProcureurDashboard from '../view/procureur/ProcureurDashboard'
import ProcureurUser from '../view/procureur/ProcureurUser'
import CreateUserView from '../view/procureur/CreateUserView'
import SeeComplaintView from '../view/procureur/SeeComplaintView'
import EditUser from '../component/procureur/EditUser'
import ComplaintMore from '../component/procureur/ComplaintMore'
import SeePv from '../component/procureur/SeePv'
import PvMore from '../component/procureur/PvMore'
import ComplaintStatistique from '../component/procureur/ComplaintStatistique'
import PvStatistique from '../component/procureur/PvStatistique'
import ViceAnswerPlainte from '../component/procureur/ViceAnswerPlainte'
import ViceAnswerPv from '../component/procureur/ViceAnswerPv'

const routes = [
    {
        path: '/dashboard',
        name: 'procureurDashboard',
        component: ProcureurDashboard
    },

    {
        path: '/dashboard/user',
        name: 'procureurUser',
        component: ProcureurUser
    },

    {
        path: '/dashboard/createuser',
        name: 'createuser',
        component: CreateUserView
    },

    {
        path: '/dashboard/seecomplaint',
        name: 'seecomplaint',
        component: SeeComplaintView
    },

    {
        path: '/dashboard/seepv',
        name: 'seepv',
        component: SeePv
    },
    
    {
        path: '/dashboard/:id/moredetails/',
        name: 'moreDetails',
        component: ComplaintMore,
        props: true
    },

    {
        path: '/dashboard/:id/pvdetails/',
        name: 'pvDetails',
        component: PvMore,
        props: true
    },
    
    {
        path: '/dashboard/:id/editUser/',
        name: 'editUser',
        component: EditUser,
        props: true
    },

    {
        path: '/dashboard/complaintStatistique',
        name: 'complaintStatistique',
        component: ComplaintStatistique
    },

    {
        path: '/dashboard/pvStatistique',
        name: 'pvStatistique',
        component: PvStatistique
    },

    {
        path: '/dashboard/viceAnswerPlainte',
        name: 'viceAnswerPlainte',
        component: ViceAnswerPlainte
    },

    {
        path: '/dashboard/viceAnswerPv',
        name: 'viceAnswerPv',
        component: ViceAnswerPv
    },
] 

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
  })

  export default router