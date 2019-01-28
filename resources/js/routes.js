import Vue from 'vue'
import VueRouter from 'vue-router'

import HomeDashboard from './components/HomeDashboard'
// import AdminCompanies from './pages/admin/AdminCompanies'
// import AdminUsers from './pages/admin/AdminUsers'
// import AdminRoles from './pages/admin/AdminRoles'

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'dashboard',
      component: HomeDashboard
    }
    //,
    // {
    //   path: '/admin',
    //   name: 'admin',
    //   component: AdminCompanies
    // },
    // {
    //   path: '/admin/users',
    //   name: 'admin-users',
    //   component: AdminUsers
    // },
    // {
    //   path: '/admin/users/roles',
    //   name: 'admin-roles',
    //   component: AdminRoles
    // }
  ]
})

export default router
