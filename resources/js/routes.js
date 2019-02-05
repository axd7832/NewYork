import Vue from 'vue'
import VueRouter from 'vue-router'

import HomeDashboard from './pages/HomeDashboard'
import Company from './pages/Company'
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
    },
    {
      path: '/company',
      name: 'company',
      component: Company
    },
    {
      path: '/company/:id',
      name: 'company',
      component: Company
    },
    {
      path: '**',
      redirect: '/'
      // name: 'dashboard',
      // component: HomeDashboard
    },
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
