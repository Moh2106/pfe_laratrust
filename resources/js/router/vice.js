import {createRouter, createWebHistory} from 'vue-router'
import ViceDashboard from '../view/vice_procureur/ViceDashboard'
import SeeUser from '../view/vice_procureur/SeeUser'
import ViceCreationUtilisateur from '../view/vice_procureur/ViceCreationUtilisateur'
import ViceEditUser from '../component/vice_procureur/ViceEditUser'
import ViceComplaint from '../view/vice_procureur/ViceComplaint'
import ViceComplaintMore from '../component/vice_procureur/ViceComplaintMore'
import ViceSeePv from '../component/vice_procureur/ViceSeePv'
import VicePvMore from '../component/vice_procureur/VicePvMore'
import ComplaintDesigner from '../view/vice_procureur/ComplaintDesigner'
import PvDesigner from '../view/vice_procureur/PvDesigner'
import ReponsePlainteProcureur from '../component/vice_procureur/ReponsePlainteProcureur'
import ReponsePvProcureur from '../component/vice_procureur/ReponsePvProcureur'
import ViceComplaintStatistique from '../component/vice_procureur/ViceComplaintStatistique'
import VicePvStatistique from '../component/vice_procureur/VicePvStatistique'
import AnswerPlainte from '../component/vice_procureur/AnswerPlainte'
import AnswerPv from '../component/vice_procureur/AnswerPv'

const routes = [
    {
        path: '/dashboard',
        name: 'viceDashboard',
        component: ViceDashboard
    },

    {
        path: '/dashboard/user',
        name: 'seeUser',
        component: SeeUser
    },

    {
        path: '/dashboard/:id/editUser/',
        name: 'editUser',
        component: ViceEditUser,
        props: true
    },

    {
        path: '/dashboard/seecomplaint',
        name: 'seecomplaint',
        component: ViceComplaint
    },

    {
        path: '/dashboard/seepv',
        name: 'seepv',
        component: ViceSeePv
    },

    {
        path: '/dashboard/createuser',
        name: 'createuser',
        component: ViceCreationUtilisateur
    },

    {
        path: '/dashboard/complaintDesignation',
        name: 'complaintDesignation',
        component: ComplaintDesigner
    },

    {
        path: '/dashboard/pvDesignation',
        name: 'pvDesignation',
        component: PvDesigner
    },

    {
        path: '/dashboard/:id/moredetails/',
        name: 'moreDetails',
        component: ViceComplaintMore,
        props: true
    },

    {
        path: '/dashboard/:id/pvdetails/',
        name: 'pvDetails',
        component: VicePvMore,
        props: true
    },

    {
        path: '/dashboard/reponseplainte',
        name: 'reponseplainte',
        component: ReponsePlainteProcureur
    },

    {
        path: '/dashboard/reponsepv',
        name: 'reponsepv',
        component: ReponsePvProcureur
    },

    {
        path: '/dashboard/complaintStatistique',
        name: 'complaintStatistique',
        component: ViceComplaintStatistique
    },

    {
        path: '/dashboard/pvStatistique',
        name: 'pvStatistique',
        component: VicePvStatistique
    },

    {
        path: '/dashboard/answerPlainte',
        name: 'answerPlainte',
        component: AnswerPlainte
    },

    {
        path: '/dashboard/answerPv',
        name: 'answerPv',
        component: AnswerPv
    },
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
  })

  export default router