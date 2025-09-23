<template>
  <div class="lazy-loading-example">
    <h2>Lazy Loading Coordination Examples</h2>
    
    <!-- Example 1: Lazy Component with Intersection Observer -->
    <section class="mb-8">
      <h3>1. Lazy Component (loads when visible)</h3>
      <LazyComponent 
        :import-fn="() => import('../components/TestimonialsSection.vue')"
        :threshold="0.2"
        root-margin="100px"
      >
        <template #loading>
          <div class="p-8 text-center">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-action mx-auto mb-4"></div>
            <p>Loading testimonials...</p>
          </div>
        </template>
        <template #error="{ error, retry }">
          <div class="p-8 text-center">
            <p class="text-danger mb-4">Failed to load: {{ error.message }}</p>
            <button @click="retry" class="btn btn--primary">Retry</button>
          </div>
        </template>
      </LazyComponent>
    </section>

    <!-- Example 2: Component with Loading State -->
    <section class="mb-8">
      <h3>2. Component with Loading State</h3>
      <div v-if="componentLoading.isLoading" class="p-8 text-center">
        <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-action mx-auto mb-4"></div>
        <p>Loading component data...</p>
      </div>
      <div v-else class="p-8 bg-surface rounded-lg">
        <p>Component loaded successfully!</p>
        <button @click="loadData" class="btn btn--primary mt-4">Reload Data</button>
      </div>
    </section>

    <!-- Example 3: Route Preloading -->
    <section class="mb-8">
      <h3>3. Route Preloading</h3>
      <div class="flex gap-4">
        <button @click="preloadServices" class="btn btn--secondary">
          Preload Services Page
        </button>
        <button @click="preloadContact" class="btn btn--secondary">
          Preload Contact Page
        </button>
      </div>
      <p class="text-sm text-muted mt-2">
        Preloaded routes: {{ preloadedRoutes.join(', ') || 'None' }}
      </p>
    </section>

    <!-- Example 4: Global Loading State -->
    <section class="mb-8">
      <h3>4. Global Loading Coordination</h3>
      <div class="flex gap-4">
        <button @click="simulateGlobalLoading" class="btn btn--primary">
          Simulate Global Loading
        </button>
        <button @click="simulateRouteChange" class="btn btn--secondary">
          Simulate Route Change
        </button>
      </div>
      <p class="text-sm text-muted mt-2">
        Global loading: {{ globalLoading ? 'Yes' : 'No' }}
      </p>
    </section>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { useLoading } from '../composables/useLoading'
import { useAppStore, preloadRoute } from '../stores/app.js'
import LazyComponent from '../components/LazyComponent.vue'

// Component loading state
const { isLoading: componentLoading, withLoading } = useLoading('example-component')

// Global app store
const appStore = useAppStore()
const globalLoading = appStore.isLoading
const preloadedRoutes = ref([])

// Load data with loading state
const loadData = async () => {
  await withLoading(async () => {
    // Simulate API call
    await new Promise(resolve => setTimeout(resolve, 2000))
  })
}

// Preload routes
const preloadServices = async () => {
  await preloadRoute('services')
  updatePreloadedRoutes()
}

const preloadContact = async () => {
  await preloadRoute('contact')
  updatePreloadedRoutes()
}

const updatePreloadedRoutes = () => {
  preloadedRoutes.value = Array.from(appStore.state.preloadedRoutes)
}

// Simulate global loading
const simulateGlobalLoading = async () => {
  await appStore.withLoading(async () => {
    await new Promise(resolve => setTimeout(resolve, 3000))
  })
}

// Simulate route change
const simulateRouteChange = () => {
  appStore.setCurrentRoute({ name: 'example', path: '/example' })
}

onMounted(() => {
  updatePreloadedRoutes()
})
</script>

<style scoped>
.lazy-loading-example {
  max-width: 800px;
  margin: 0 auto;
  padding: 2rem;
}

section {
  border: 1px solid var(--border);
  border-radius: 8px;
  padding: 1.5rem;
}

h3 {
  margin-bottom: 1rem;
  color: var(--text);
}
</style>
