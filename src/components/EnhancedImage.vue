<template>
  <div 
    :class="[
      'enhanced-image-container',
      'relative',
      'overflow-hidden',
      containerClass
    ]"
    :style="containerStyle"
  >
    <!-- Loading skeleton/placeholder -->
    <div 
      v-if="isLoading"
      :class="[
        'absolute inset-0',
        'bg-gradient-to-r',
        'from-slate-200 via-slate-100 to-slate-200',
        'animate-pulse',
        'flex items-center justify-center',
        skeletonClass
      ]"
    >
      <!-- Optional loading icon -->
      <div 
        v-if="showLoadingIcon"
        class="w-8 h-8 text-slate-400"
      >
        <svg class="animate-spin" fill="none" viewBox="0 0 24 24">
          <circle 
            class="opacity-25" 
            cx="12" 
            cy="12" 
            r="10" 
            stroke="currentColor" 
            stroke-width="4"
          />
          <path 
            class="opacity-75" 
            fill="currentColor" 
            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
          />
        </svg>
      </div>
    </div>

    <!-- Error state -->
    <div 
      v-if="hasError"
      :class="[
        'absolute inset-0',
        'bg-slate-100',
        'flex items-center justify-center',
        'text-slate-500',
        'text-sm'
      ]"
    >
      <div class="text-center">
        <svg class="w-8 h-8 mx-auto mb-2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <p>Image unavailable</p>
      </div>
    </div>

    <!-- Actual image -->
    <img
      :src="src"
      :alt="alt"
      :class="[
        'enhanced-image',
        'w-full h-full object-cover',
        noAnimation ? '' : 'transition-all duration-700 ease-out',
        imageClass,
        {
          'opacity-0 scale-105': isLoading && !noAnimation,
          'opacity-100 scale-100': !isLoading && !hasError
        }
      ]"
      :style="imageStyle"
      @load="handleLoad"
      @error="handleError"
      @loadstart="() => { if (!isTimingStarted.value) { networkStartTime.value = performance.now(); console.log('📡 Network request started:', src) } }"
      :loading="lazy ? 'lazy' : 'eager'"
      :decoding="lazy ? 'async' : 'sync'"
    />

    <!-- Optional overlay content -->
    <div 
      v-if="overlayContent && !isLoading && !hasError"
      :class="[
        'absolute inset-0',
        'flex items-center justify-center',
        'pointer-events-none',
        overlayClass
      ]"
    >
      <slot name="overlay">
        {{ overlayContent }}
      </slot>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted, nextTick } from 'vue'

// Props
const props = defineProps({
  src: {
    type: String,
    required: true
  },
  alt: {
    type: String,
    required: true
  },
  // Styling props
  containerClass: {
    type: String,
    default: ''
  },
  imageClass: {
    type: String,
    default: ''
  },
  skeletonClass: {
    type: String,
    default: ''
  },
  overlayClass: {
    type: String,
    default: ''
  },
  // Behavior props
  lazy: {
    type: Boolean,
    default: true
  },
  showLoadingIcon: {
    type: Boolean,
    default: false
  },
  overlayContent: {
    type: String,
    default: null
  },
  // Style props
  containerStyle: {
    type: Object,
    default: () => ({})
  },
  imageStyle: {
    type: Object,
    default: () => ({})
  },
  // Animation props
  fadeInDuration: {
    type: Number,
    default: 700
  },
  scaleOnLoad: {
    type: Boolean,
    default: true
  },
  noAnimation: {
    type: Boolean,
    default: false
  }
})

// Reactive state
const isLoading = ref(true)
const hasError = ref(false)
const isLoaded = ref(false)

// Performance timing
const loadStartTime = ref(0)
const loadEndTime = ref(0)
const loadDuration = ref(0)
const networkStartTime = ref(0)
const networkDuration = ref(0)
const isTimingStarted = ref(false)

// Computed
const imageClasses = computed(() => {
  const baseClasses = 'enhanced-image w-full h-full object-cover transition-all duration-700 ease-out'
  const stateClasses = {
    'opacity-0 scale-105': isLoading.value,
    'opacity-100 scale-100': !isLoading.value && !hasError.value
  }
  
  return [
    baseClasses,
    props.imageClass,
    stateClasses
  ]
})

// Methods
const handleLoad = () => {
  if (!isTimingStarted.value) return // Prevent multiple calls
  
  isTimingStarted.value = false
  loadEndTime.value = performance.now()
  loadDuration.value = loadEndTime.value - loadStartTime.value
  networkDuration.value = networkStartTime.value > 0 ? loadEndTime.value - networkStartTime.value : loadDuration.value
  
  console.log('Image loaded:', props.src)
  console.log('⏱️ Total time:', loadDuration.value.toFixed(2) + 'ms')
  console.log('🌐 Network time:', networkDuration.value.toFixed(2) + 'ms')
  console.log('⚙️ Processing time:', Math.max(0, loadDuration.value - networkDuration.value).toFixed(2) + 'ms')
  console.log('📊 Performance:', loadDuration.value < 100 ? '🚀 Fast' : loadDuration.value < 500 ? '⚡ Good' : '🐌 Slow')
  
  // Performance recommendations
  if (loadDuration.value > 1000) {
    console.warn('⚠️ SLOW IMAGE DETECTED:', props.src)
    console.warn('💡 Consider: Smaller file size, WebP format, or CDN')
  }
  
  isLoading.value = false
  hasError.value = false
  isLoaded.value = true
  
  // Force reactivity update
  nextTick(() => {
    console.log('Image state updated - isLoading:', isLoading.value, 'hasError:', hasError.value)
  })
}

const handleError = () => {
  console.error('Image failed to load:', props.src)
  isLoading.value = false
  hasError.value = true
  isLoaded.value = false
}

// Lifecycle
onMounted(() => {
  if (!isTimingStarted.value) {
    isTimingStarted.value = true
    
    // Stagger loading to prevent server overload
    const delay = props.lazy ? Math.random() * 500 : 0
    
    setTimeout(() => {
      loadStartTime.value = performance.now()
      console.log('🔄 Image loading started:', props.src)
      
      // Preload critical images if not lazy
      if (!props.lazy) {
        // Add preload link for critical images
        const link = document.createElement('link')
        link.rel = 'preload'
        link.as = 'image'
        link.href = props.src
        link.fetchPriority = 'high'
        document.head.appendChild(link)
      }
    }, delay)
  }
})

// Expose methods for parent components
defineExpose({
  isLoading,
  hasError,
  isLoaded,
  reload: () => {
    isLoading.value = true
    hasError.value = false
    isLoaded.value = false
  }
})
</script>

<style scoped>
.enhanced-image-container {
  /* Ensure proper aspect ratio maintenance */
  position: relative;
}

.enhanced-image {
  /* Smooth transitions for all properties */
  transition: opacity 0.7s ease-out, transform 0.7s ease-out;
}

/* Loading skeleton animation */
@keyframes shimmer {
  0% {
    background-position: -200px 0;
  }
  100% {
    background-position: calc(200px + 100%) 0;
  }
}

.animate-pulse {
  background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
  background-size: 200px 100%;
  animation: shimmer 1.5s infinite;
}

/* Enhanced loading states */
.enhanced-image-container:has(.enhanced-image[src=""]) {
  background: linear-gradient(90deg, #f8f9fa 25%, #e9ecef 50%, #f8f9fa 75%);
  background-size: 200px 100%;
  animation: shimmer 1.5s infinite;
}

/* Accessibility improvements */
.enhanced-image:focus-visible {
  outline: 2px solid var(--action, #0077ff);
  outline-offset: 2px;
}

/* Reduced motion support */
@media (prefers-reduced-motion: reduce) {
  .enhanced-image {
    transition: opacity 0.3s ease;
  }
  
  .animate-pulse {
    animation: none;
  }
  
  .animate-spin {
    animation: none;
  }
}
</style>
