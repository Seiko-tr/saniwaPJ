import { createRouter, createWebHistory } from 'vue-router'
import Top from '@/components/Top.vue'
import Reservation from '@/components/Reservation.vue'

const routes = [
  {
    path: '/',
    name: 'Top',
    component: Top
  },
  {
    path: '/reservation',
    name: 'Reservation',
    component: Reservation
  }
]

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes
})

export default router