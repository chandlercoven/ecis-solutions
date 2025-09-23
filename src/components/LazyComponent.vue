<template>
  <div ref="container" class="lazy-component">
    <!-- Loading state -->
    <div v-if="isLoading" class="loading-placeholder">
      <slot name="loading">
        <div class="flex items-center justify-center p-8">
          <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-action"></div>
        </div>
      </slot>
    </div>
    
    <!-- Error state -->
    <div v-else-if="hasError" class="error-placeholder">
      <slot name="error" :error="error" :retry="retry">
        <div class="text-center p-8">
          <p class="text-danger mb-4">Failed to load component</p>
          <button @click="retry" class="btn btn--primary">Retry</button>
        </div>
      </slot>
    </div>
    
    <!-- Loaded component -->
    <component v-else-if="loadedComponent" :is="loadedComponent" v-bind="$attrs" />
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted, watch } from 'vue'
import { useIntersectionObserver } from '../composables/useLoading'

const props = defineProps({
  importFn: {
    type: Function,
    required: true
  },
  threshold: {
    type: Number,
    default: 0.1
  },
  rootMargin: {
    type: String,
    default: '50px'
  },
  immediate: {
    type: Boolean,
    default: false
  }
})

const emit = defineEmits(['loaded', 'error'])

const container = ref(null)
const loadedComponent = ref(null)
const isLoading = ref(false)
const hasError = ref(false)
const error = ref(null)

// Intersection observer for lazy loading
const { isIntersecting, observe, unobserve } = useIntersectionObserver({
  threshold: props.threshold,
  rootMargin: props.rootMargin
})

// Load component function
const loadComponent = async () => {
  if (loadedComponent.value || isLoading.value) return
  
  isLoading.value = true
  hasError.value = false
  error.value = null
  
  try {
    const component = await props.importFn()
    loadedComponent.value = component
    emit('loaded', component)
  } catch (err) {
    hasError.value = true
    error.value = err
    emit('error', err)
  } finally {
    isLoading.value = false
  }
}

// Retry function
const retry = () => {
  loadedComponent.value = null
  loadComponent()
}

// Watch for intersection
const stopWatching = watch(isIntersecting, (intersecting) => {
  if (intersecting && !loadedComponent.value && !isLoading.value) {
    loadComponent()
  }
})

onMounted(() => {
  if (props.immediate) {
    loadComponent()
  } else {
    observe(container.value)
  }
})

onUnmounted(() => {
  unobserve()
  stopWatching()
})
</script>

<style scoped>
.lazy-component {
  min-height: 100px; /* Prevent layout shift */
}

.loading-placeholder,
.error-placeholder {
  min-height: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>
