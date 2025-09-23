import { ref, computed, reactive, readonly } from 'vue'

// Global app state
const state = reactive({
  isLoading: false,
  currentRoute: null,
  preloadedRoutes: new Set(),
  componentStates: new Map(),
  user: null,
  theme: 'dark'
})

// Actions
export const useAppStore = () => {
  // Loading state
  const setLoading = (loading) => {
    state.isLoading = loading
  }

  const withLoading = async (asyncFn) => {
    setLoading(true)
    try {
      const result = await asyncFn()
      return result
    } finally {
      setLoading(false)
    }
  }

  // Route management
  const setCurrentRoute = (route) => {
    state.currentRoute = route
  }

  const markRoutePreloaded = (route) => {
    state.preloadedRoutes.add(route)
  }

  const isRoutePreloaded = (route) => {
    return state.preloadedRoutes.has(route)
  }

  // Component state management
  const setComponentState = (componentId, state) => {
    state.componentStates.set(componentId, state)
  }

  const getComponentState = (componentId) => {
    return state.componentStates.get(componentId)
  }

  // Theme management
  const setTheme = (theme) => {
    state.theme = theme
    document.documentElement.setAttribute('data-theme', theme)
  }

  // Computed properties
  const isLoading = computed(() => state.isLoading)
  const currentRoute = computed(() => state.currentRoute)
  const theme = computed(() => state.theme)

  return {
    // State
    state: readonly(state),
    isLoading,
    currentRoute,
    theme,
    
    // Actions
    setLoading,
    withLoading,
    setCurrentRoute,
    markRoutePreloaded,
    isRoutePreloaded,
    setComponentState,
    getComponentState,
    setTheme
  }
}

// Route preloading utility
export const preloadRoute = async (routeName) => {
  const store = useAppStore()
  
  if (store.isRoutePreloaded(routeName)) {
    return
  }

  try {
    // Dynamic import based on route name
    const routeMap = {
      home: () => import('../views/Home.vue'),
      services: () => import('../views/Services.vue'),
      training: () => import('../views/Training.vue'),
      about: () => import('../views/About.vue'),
      contact: () => import('../views/Contact.vue')
    }

    const importFn = routeMap[routeName]
    if (importFn) {
      await importFn()
      store.markRoutePreloaded(routeName)
    }
  } catch (error) {
    console.warn(`Failed to preload route: ${routeName}`, error)
  }
}

// Component lazy loading with state coordination
export const createLazyComponent = (importFn, componentId) => {
  const store = useAppStore()
  
  return {
    async load() {
      store.setComponentState(componentId, { loading: true, error: null })
      
      try {
        const component = await importFn()
        store.setComponentState(componentId, { 
          loading: false, 
          error: null, 
          component 
        })
        return component
      } catch (error) {
        store.setComponentState(componentId, { 
          loading: false, 
          error 
        })
        throw error
      }
    },
    
    get state() {
      return store.getComponentState(componentId) || { loading: false, error: null }
    }
  }
}
