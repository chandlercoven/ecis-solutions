import { ref, computed } from 'vue'

// Global loading state management
const globalLoading = ref(false)
const componentLoadingStates = ref(new Map())

export function useLoading(componentId = null) {
  // Component-specific loading
  if (componentId) {
    const isLoading = computed({
      get: () => componentLoadingStates.value.get(componentId) || false,
      set: (value) => componentLoadingStates.value.set(componentId, value)
    })

    const setLoading = (loading) => {
      isLoading.value = loading
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

    return {
      isLoading,
      setLoading,
      withLoading
    }
  }

  // Global loading
  const setGlobalLoading = (loading) => {
    globalLoading.value = loading
  }

  const withGlobalLoading = async (asyncFn) => {
    setGlobalLoading(true)
    try {
      const result = await asyncFn()
      return result
    } finally {
      setGlobalLoading(false)
    }
  }

  return {
    globalLoading: computed(() => globalLoading.value),
    setGlobalLoading,
    withGlobalLoading
  }
}

// Lazy component loader with loading states
export function useLazyComponent(importFn, componentId) {
  const { isLoading, setLoading } = useLoading(componentId)
  
  const loadComponent = async () => {
    setLoading(true)
    try {
      const component = await importFn()
      return component
    } finally {
      setLoading(false)
    }
  }

  return {
    isLoading,
    loadComponent
  }
}

// Intersection observer for lazy loading
export function useIntersectionObserver(options = {}) {
  const isIntersecting = ref(false)
  const target = ref(null)

  const observer = new IntersectionObserver(
    ([entry]) => {
      isIntersecting.value = entry.isIntersecting
    },
    {
      threshold: 0.1,
      rootMargin: '50px',
      ...options
    }
  )

  const observe = (element) => {
    if (element) {
      target.value = element
      observer.observe(element)
    }
  }

  const unobserve = () => {
    if (target.value) {
      observer.unobserve(target.value)
    }
  }

  return {
    isIntersecting,
    observe,
    unobserve
  }
}
