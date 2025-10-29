import { createRouter, createWebHistory } from 'vue-router'
import { imagePreloader } from '@/utils/imagePreloader.js'

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
        title: 'ECIS Solutions - Professional Security Services | 24/7 Patrol & Protection',
        description: 'ECIS Solutions - Professional security services with 24/7 patrol coverage, CCTV monitoring, and emergency response. Licensed officers protect 200+ properties with 3-minute response time. Call (561) 249-0897 for free assessment.',
        keywords: 'security services, 24/7 patrol, HOA security, commercial security, CCTV monitoring, emergency response, security training, licensed security officers, property protection'
      }
    },
    {
      path: '/services',
      name: 'services',
      component: () => import(/* webpackChunkName: "services" */ '../views/Services.vue'),
      meta: { 
        title: 'ECIS Solutions - Security Services | 24/7 Patrol, CCTV & Emergency Response',
        description: 'ECIS Solutions - Comprehensive security services including 24/7 patrol coverage, CCTV monitoring, HOA security, commercial property protection, and emergency response. Licensed and bonded security officers. Call (561) 249-0897.',
        keywords: 'security patrol services, CCTV monitoring, HOA security, commercial security, emergency response, security officers, property protection, surveillance systems',
        preload: true // High priority page
      }
    },
    {
      path: '/training',
      name: 'training',
      component: () => import(/* webpackChunkName: "training" */ '../views/Training.vue'),
      meta: { 
        title: 'Security Training Academy | ECIS Solutions - Professional Security Officer Certification',
        description: 'Professional security training academy offering certified security officer training, security guard certification, and specialized security courses. State-approved training programs.',
        keywords: 'security training, security officer certification, security guard training, security academy, professional security courses, security certification'
      }
    },
    {
      path: '/about',
      name: 'about',
      component: () => import(/* webpackChunkName: "about" */ '../views/About.vue'),
      meta: { 
        title: 'About ECIS Solutions | Professional Security Company - 25+ Years Experience',
        description: 'Learn about ECIS Solutions, a professional security company with 25+ years of experience protecting 200+ properties. Licensed, bonded, and BBB A+ rated security services.',
        keywords: 'about ECIS Solutions, security company, professional security, licensed security, bonded security, BBB A+ rating, security experience'
      }
    },
    {
      path: '/contact',
      name: 'contact',
      component: () => import(/* webpackChunkName: "contact" */ '../views/Contact.vue'),
      meta: { 
        title: 'ECIS Solutions - Contact | Free Security Assessment - (561) 249-0897',
        description: 'ECIS Solutions - Contact us for a free security assessment. Call (561) 249-0897 for professional security services, 24/7 patrol coverage, and emergency response. Licensed and bonded security officers.',
        keywords: 'contact ECIS Solutions, free security assessment, security consultation, security quote, emergency security, 24/7 security, security services contact'
      }
    },
    // Individual Service Pages
    {
      path: '/services/hoa-security',
      name: 'hoa-security',
      component: () => import(/* webpackChunkName: "hoa-security" */ '../views/services/HoaSecurity.vue'),
      meta: {
        title: 'HOA & Residential Security Services | ECIS Solutions - Gated Community Protection',
        description: 'Professional HOA and residential security services. 24/7 gate management, community patrols, and visitor verification for gated communities. Licensed security officers with 99% resident satisfaction.',
        keywords: 'HOA security, residential security, gated community security, gate management, community patrols, visitor verification, homeowner association security, residential property protection'
      }
    },
    {
      path: '/services/commercial-security',
      name: 'commercial-security', 
      component: () => import(/* webpackChunkName: "commercial-security" */ '../views/services/CommercialSecurity.vue'),
      meta: {
        title: 'Commercial Property Security Services | ECIS Solutions - Office & Retail Protection',
        description: 'Commercial property security for office buildings, retail centers, warehouses, and industrial facilities. 24/7 asset protection, access control, and perimeter monitoring with 98% client retention.',
        keywords: 'commercial property security, office building security, retail security, warehouse security, industrial security, asset protection, commercial patrol services, business security'
      }
    },
    {
      path: '/services/security-patrol',
      name: 'security-patrol',
      component: () => import(/* webpackChunkName: "security-patrol" */ '../views/services/SecurityPatrol.vue'),
      meta: {
        title: '24/7 Security Patrol Services | ECIS Solutions - Mobile Security Response',
        description: '24/7 security patrol services with GPS-tracked vehicles and 3-minute response times. Licensed officers provide visible deterrence and emergency response for properties across the region.',
        keywords: '24/7 security patrol, mobile security, security response, patrol services, GPS tracking, emergency response, security officers, property patrol, visible deterrence'
      }
    },
    {
      path: '/services/cctv-monitoring',
      name: 'cctv-monitoring',
      component: () => import(/* webpackChunkName: "cctv-monitoring" */ '../views/services/CctvMonitoring.vue'),
      meta: {
        title: 'CCTV & Video Surveillance Systems | ECIS Solutions - 24/7 Monitoring',
        description: 'Advanced CCTV and video surveillance systems with 24/7 monitoring, AI detection, and cloud storage. Professional installation and monitoring for complete property protection.',
        keywords: 'CCTV monitoring, video surveillance, security cameras, 24/7 monitoring, AI detection, surveillance systems, remote monitoring, security camera installation'
      }
    },
    {
      path: '/services/private-investigations',
      name: 'private-investigations',
      component: () => import(/* webpackChunkName: "private-investigations" */ '../views/services/PrivateInvestigations.vue'),
      meta: {
        title: 'Private Investigation Services | ECIS Solutions - Licensed Private Investigators',
        description: 'Professional private investigation services including background checks, surveillance, corporate investigations, and fraud detection. Licensed investigators with 20+ years experience.',
        keywords: 'private investigations, private investigator, background checks, surveillance services, corporate investigations, fraud investigation, licensed investigators, detective services'
      }
    },
    {
      path: '/services/executive-security',
      name: 'executive-security',
      component: () => import(/* webpackChunkName: "executive-security" */ '../views/services/ExecutiveSecurity.vue'),
      meta: {
        title: 'Executive & Event Security Services | ECIS Solutions - VIP Protection',
        description: 'Executive protection and event security services including VIP security, crowd control, and special event management. Professional security officers for high-profile clients and events.',
        keywords: 'executive security, VIP protection, event security, bodyguard services, crowd control, special events, executive protection, personal security, event management'
      }
    },
    // Specialized Security Markets
    {
      path: '/services/healthcare-security',
      name: 'healthcare-security',
      component: () => import(/* webpackChunkName: "healthcare-security" */ '../views/services/HealthcareSecurity.vue'),
      meta: {
        title: 'Healthcare Security Services | ECIS Solutions - Medical Facility Protection',
        description: 'Specialized healthcare security services for hospitals, clinics, and medical facilities. HIPAA-compliant security with patient safety protocols and medical environment expertise.',
        keywords: 'healthcare security, hospital security, medical facility security, HIPAA compliance, patient safety, medical security, clinic security, healthcare protection'
      }
    },
    {
      path: '/services/educational-security',
      name: 'educational-security',
      component: () => import(/* webpackChunkName: "educational-security" */ '../views/services/EducationalSecurity.vue'),
      meta: {
        title: 'Educational Security Services | ECIS Solutions - School & Campus Protection',
        description: 'Campus security services for schools, universities, and educational institutions. Student safety protocols, campus access control, and educational event security.',
        keywords: 'educational security, school security, campus security, university security, student safety, educational facility security, campus protection, school safety'
      }
    },
    {
      path: '/services/construction-security',
      name: 'construction-security',
      component: () => import(/* webpackChunkName: "construction-security" */ '../views/services/ConstructionSecurity.vue'),
      meta: {
        title: 'Construction Site Security Services | ECIS Solutions - Building Project Protection',
        description: 'Temporary security services for construction sites, equipment theft prevention, and worker safety. Specialized construction security for building projects and development sites.',
        keywords: 'construction security, construction site security, building project security, equipment theft prevention, construction safety, temporary security, development site security'
      }
    },
    {
      path: '/services/banking-security',
      name: 'banking-security',
      component: () => import(/* webpackChunkName: "banking-security" */ '../views/services/BankingSecurity.vue'),
      meta: {
        title: 'Banking & Financial Security Services | ECIS Solutions - ATM & Cash Protection',
        description: 'Financial institution security services including ATM security, cash transport, and customer protection. Specialized banking security for financial facilities and cash handling.',
        keywords: 'banking security, financial security, ATM security, cash transport security, bank security, financial institution security, cash handling security, banking protection'
      }
    },
    {
      path: '/services/government-security',
      name: 'government-security',
      component: () => import(/* webpackChunkName: "government-security" */ '../views/services/GovernmentSecurity.vue'),
      meta: {
        title: 'Government Security Contracting | ECIS Solutions - Federal & State Security',
        description: 'Government security contracting services for federal and state agencies. Security clearances, compliance standards, and specialized government facility protection.',
        keywords: 'government security, federal security, state security, government contracting, security clearances, government facility security, federal contracts, government protection'
      }
    },
    {
      path: '/services/retail-security',
      name: 'retail-security',
      component: () => import(/* webpackChunkName: "retail-security" */ '../views/services/RetailSecurity.vue'),
      meta: {
        title: 'Retail Loss Prevention Services | ECIS Solutions - Shoplifting Prevention',
        description: 'Retail security services including shoplifting prevention, inventory protection, and customer safety. Specialized retail loss prevention for stores and shopping centers.',
        keywords: 'retail security, loss prevention, shoplifting prevention, retail protection, inventory security, store security, retail loss prevention, shopping center security'
      }
    },
    // Internal Team Portal Routes - All prefixed with /app/
    {
      path: '/app/login',
      name: 'login',
      component: () => import(/* webpackChunkName: "login" */ '../views/Login.vue'),
      meta: {
        title: 'ECIS Team Portal - Login',
        description: 'Secure login for ECIS Solutions internal team portal',
        requiresAuth: false
      }
    },
    // Redirect old /login to /app/login (only one we need)
    {
      path: '/login',
      redirect: '/app/login'
    },
    // Redirect old /dashboard to /app/dashboard
    {
      path: '/dashboard',
      redirect: '/app/dashboard'
    },
    {
      path: '/app/dashboard',
      name: 'dashboard',
      component: () => import(/* webpackChunkName: "dashboard" */ '../views/Dashboard.vue'),
      meta: {
        title: 'ECIS Team Portal - Dashboard',
        description: 'Internal team dashboard for ECIS Solutions',
        requiresAuth: true
      }
    },
    {
      path: '/app/clients',
      name: 'clients',
      component: () => import(/* webpackChunkName: "clients" */ '../views/Clients.vue'),
      meta: {
        title: 'ECIS Team Portal - Clients',
        description: 'Client management for ECIS Solutions',
        requiresAuth: true
      }
    },
    {
      path: '/app/clients/:id',
      name: 'client-detail',
      component: () => import(/* webpackChunkName: "client-detail" */ '../views/ClientDetail.vue'),
      meta: {
        title: 'ECIS Team Portal - Client Details',
        description: 'Client details for ECIS Solutions',
        requiresAuth: true
      }
    },
    {
      path: '/app/submissions',
      name: 'submissions',
      component: () => import(/* webpackChunkName: "submissions" */ '../views/Submissions.vue'),
      meta: {
        title: 'ECIS Team Portal - Contact Submissions',
        description: 'View and manage contact form submissions for ECIS Solutions',
        requiresAuth: true
      }
    },
    {
      path: '/app/incidents',
      name: 'incidents',
      component: () => import(/* webpackChunkName: "incidents" */ '../views/Incidents.vue'),
      meta: {
        title: 'ECIS Team Portal - Incidents',
        description: 'Incident management for ECIS Solutions',
        requiresAuth: true
      }
    },
    {
      path: '/app/reports',
      name: 'reports',
      component: () => import(/* webpackChunkName: "reports" */ '../views/Reports.vue'),
      meta: {
        title: 'ECIS Team Portal - Reports',
        description: 'Reports and analytics for ECIS Solutions',
        requiresAuth: true
      }
    },
    {
      path: '/app/users',
      name: 'users',
      component: () => import(/* webpackChunkName: "users" */ '../views/Users.vue'),
      meta: {
        title: 'ECIS Team Portal - Users',
        description: 'User management for ECIS Solutions',
        requiresAuth: true
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

// Enhanced navigation guards with loading coordination and SEO
router.beforeEach(async (to, from, next) => {
  console.log('🚦 Router: Navigation starting', {
    from: from.path,
    to: to.path,
    requiresAuth: to.meta.requiresAuth
  })
  
  // Set loading state
  setLoading(true)
  
  // Authentication check for protected routes
  if (to.meta.requiresAuth) {
    const { useAuthStore } = await import('@/stores/auth')
    const authStore = useAuthStore()
    
    // Initialize auth state from localStorage
    authStore.initializeAuth()
    
    console.log('🔐 Router: Auth check for protected route', {
      isAuthenticated: authStore.isAuthenticated,
      user: authStore.userName,
      role: authStore.userRole
    })
    
    if (!authStore.isAuthenticated) {
      console.log('❌ Router: Not authenticated, redirecting to login')
      next('/app/login')
      return
    }
  }
  
  // Redirect authenticated users away from login page
  if (to.path === '/app/login') {
    const { useAuthStore } = await import('@/stores/auth')
    const authStore = useAuthStore()
    authStore.initializeAuth()
    
    console.log('🔐 Router: Login page access check', {
      isAuthenticated: authStore.isAuthenticated,
      user: authStore.userName
    })
    
    if (authStore.isAuthenticated) {
      console.log('✅ Router: Already authenticated, redirecting to dashboard')
      next('/app/dashboard')
      return
    }
  }
  
  // Update page title
  if (to.meta.title) {
    document.title = to.meta.title
  }
  
  // Update meta description
  if (to.meta.description) {
    updateMetaTag('description', to.meta.description)
  }
  
  // Update meta keywords
  if (to.meta.keywords) {
    updateMetaTag('keywords', to.meta.keywords)
  }
  
  // Update canonical URL
  updateCanonicalUrl(to.path)
  
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
  
  // Smart image preloading based on route
  imagePreloader.preloadRouteImages(to.path)
  
  console.log('✅ Router: Navigation completed', {
    to: to.path,
    title: to.meta.title
  })
  
  next()
})

// Helper function to update meta tags
function updateMetaTag(name, content) {
  let meta = document.querySelector(`meta[name="${name}"]`)
  if (!meta) {
    meta = document.createElement('meta')
    meta.name = name
    document.head.appendChild(meta)
  }
  meta.content = content
}

// Helper function to update canonical URL
function updateCanonicalUrl(path) {
  const baseUrl = 'https://ecissolutions.com'
  const canonicalUrl = path === '/' ? baseUrl : `${baseUrl}${path}`
  
  let canonical = document.querySelector('link[rel="canonical"]')
  if (!canonical) {
    canonical = document.createElement('link')
    canonical.rel = 'canonical'
    document.head.appendChild(canonical)
  }
  canonical.href = canonicalUrl
}

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
