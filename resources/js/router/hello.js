import {createRouter, createWebHistory} from 'vue-router'
import AdminUser from '../component/administrateur/AdminUser'
import AdminCreateUser from '../component/administrateur/AdminCreateUser'
import AdminEditUser from '../component/administrateur/AdminEditUser'

const routes = [ 
    {
        path: '/dashboard',
        name: 'adminUser',
        component: AdminUser
    },

    {
        path: '/dashboard/createUser',
        name: 'createUser',
        component: AdminCreateUser
    },

    {
        path: '/dashboard/:id/EditUser/',
        name: 'EditUser',
        component: AdminEditUser,
        props: true
    },
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
  })

  export default router