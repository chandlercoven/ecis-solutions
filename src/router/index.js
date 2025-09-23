import { createRouter, createWebHistory } from 'vue-router'

// Loading state management
let isLoading = false
const loadingCallbacks = new Set()

export const setLoading = (loading) => {
  isLoading = loading
  loadingCallbacks.forEach(callback => callback(loading))
}

export const onLoadingChange = (callback) => {
  loadingCallbacks.add(callback)
  return () => loadingCallbacks.delete(callback)
}

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import(/* webpackChunkName: "home" */ '../views/Home.vue'),
      meta: { 
        preload: true, // Preload home page
        title: 'Professional Security Services | ECIS Solutions'
      }
    },
    {
      path: '/services',
      name: 'services',
      component: () => import(/* webpackChunkName: "services" */ '../views/Services.vue'),
      meta: { 
        title: 'Security Services | ECIS Solutions',
        preload: true // High priority page
      }
    },
    {
      path: '/training',
      name: 'training',
      component: () => import(/* webpackChunkName: "training" */ '../views/Training.vue'),
      meta: { 
        title: 'Security Training Academy | ECIS Solutions'
      }
    },
    {
      path: '/about',
      name: 'about',
      component: () => import(/* webpackChunkName: "about" */ '../views/About.vue'),
      meta: { 
        title: 'About ECIS Solutions | Professional Security'
      }
    },
    {
      path: '/contact',
      name: 'contact',
      component: () => import(/* webpackChunkName: "contact" */ '../views/Contact.vue'),
      meta: { 
        title: 'Contact ECIS Solutions | Free Security Assessment'
      }
    }
  ],
  scrollBehavior(to, from, savedPosition) {
    if (savedPosition) {
      return savedPosition
    } else if (to.hash) {
      return {
        el: to.hash,
        behavior: 'smooth'
      }
    } else {
      // Delay scrolling to top to allow for page transition
      return new Promise((resolve) => {
        setTimeout(() => {
          resolve({ top: 0, behavior: 'smooth' })
        }, 200)
      })
    }
  }
})

// Enhanced navigation guards with loading coordination
router.beforeEach(async (to, from, next) => {
  // Set loading state
  setLoading(true)
  
  // Update page title
  if (to.meta.title) {
    document.title = to.meta.title
  }
  
  // Preload next likely routes
  if (to.meta.preload) {
    // Preload related routes in background
    const preloadRoutes = ['/services', '/contact']
    preloadRoutes.forEach(route => {
      if (route !== to.path) {
        import(/* webpackChunkName: "preload" */ `../views${route === '/' ? '/Home' : route.charAt(0).toUpperCase() + route.slice(1)}.vue`)
          .catch(() => {}) // Ignore preload errors
      }
    })
  }
  
  next()
})

router.afterEach((to, from) => {
  // Clear loading state after route is loaded
  setTimeout(() => {
    setLoading(false)
  }, 100)
})

// Preload critical routes after router is ready
// In Vue Router 4, we use router.isReady() instead of onReady()
router.isReady().then(() => {
  // Preload high-priority routes
  const criticalRoutes = ['/services', '/contact']
  criticalRoutes.forEach(route => {
    import(/* webpackChunkName: "preload" */ `../views${route.charAt(0).toUpperCase() + route.slice(1)}.vue`)
      .catch(() => {})
  })
})

export default router
