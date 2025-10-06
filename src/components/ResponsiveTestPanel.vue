<template>
  <div 
    v-if="showPanel"
    class="fixed bottom-4 right-4 z-50 bg-surface border border-border rounded-lg shadow-lg p-4 max-w-sm"
  >
    <div class="flex items-center justify-between mb-3">
      <h3 class="text-sm font-semibold text-text">Responsive Test Panel</h3>
      <button 
        @click="showPanel = false"
        class="text-muted hover:text-text transition-colors"
        aria-label="Close test panel"
      >
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    
    <!-- Current Device Info -->
    <div class="space-y-2 text-xs">
      <div class="flex justify-between">
        <span class="text-muted">Device:</span>
        <span class="font-medium text-text">{{ currentDevice }}</span>
      </div>
      <div class="flex justify-between">
        <span class="text-muted">Viewport:</span>
        <span class="font-medium text-text">{{ viewport.width }} × {{ viewport.height }}</span>
      </div>
      <div class="flex justify-between">
        <span class="text-muted">Breakpoint:</span>
        <span class="font-medium text-text">{{ currentBreakpoint }}</span>
      </div>
    </div>
    
    <!-- Test Results -->
    <div class="mt-4 space-y-2">
      <h4 class="text-xs font-semibold text-text mb-2">Test Results:</h4>
      <div 
        v-for="test in testResults" 
        :key="test.name"
        class="flex items-center justify-between text-xs"
      >
        <span class="text-muted">{{ test.name }}</span>
        <span 
          :class="[
            'px-2 py-1 rounded text-xs font-medium',
            test.passed ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'
          ]"
        >
          {{ test.passed ? '✓' : '✗' }}
        </span>
      </div>
    </div>
    
    <!-- Actions -->
    <div class="mt-4 flex gap-2">
      <button 
        @click="runTests"
        class="btn btn--sm btn--primary text-xs"
      >
        Run Tests
      </button>
      <button 
        @click="toggleDebug"
        class="btn btn--sm btn--secondary text-xs"
      >
        {{ debugMode ? 'Hide' : 'Show' }} Debug
      </button>
    </div>
    
    <!-- Debug Info -->
    <div v-if="debugMode" class="mt-4 p-3 bg-surface-2 rounded text-xs">
      <h4 class="font-semibold text-text mb-2">Debug Info:</h4>
      <pre class="text-muted whitespace-pre-wrap">{{ debugInfo }}</pre>
    </div>
  </div>
  
  <!-- Toggle Button -->
  <button 
    v-if="!showPanel"
    @click="showPanel = true"
    class="fixed bottom-4 right-4 z-50 w-12 h-12 bg-action text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-base touch-target"
    aria-label="Open responsive test panel"
  >
    <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
    </svg>
  </button>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'
import { 
  getCurrentDeviceCategory, 
  isMobile, 
  isTablet, 
  isDesktop,
  runResponsiveTests,
  COMMON_TESTS 
} from '@/utils/responsive-testing'

// Reactive state
const showPanel = ref(false)
const debugMode = ref(false)
const testResults = ref([])

// Computed properties
const currentDevice = computed(() => getCurrentDeviceCategory())
const currentBreakpoint = computed(() => {
  if (isMobile()) return 'Mobile (< 640px)'
  if (isTablet()) return 'Tablet (640px - 1023px)'
  if (isDesktop()) return 'Desktop (≥ 1024px)'
  return 'Unknown'
})

const viewport = computed(() => ({
  width: window.innerWidth,
  height: window.innerHeight
}))

const debugInfo = computed(() => {
  const tests = runResponsiveTests()
  return JSON.stringify(tests, null, 2)
})

// Methods
const runTests = () => {
  const results = runResponsiveTests()
  testResults.value = []
  
  // Flatten all test results
  Object.values(results.tests).forEach(category => {
    category.tests.forEach(test => {
      testResults.value.push({
        name: test.name,
        passed: test.passed,
        message: test.message
      })
    })
  })
}

const toggleDebug = () => {
  debugMode.value = !debugMode.value
}

// Lifecycle
onMounted(() => {
  // Only show in development
  if (import.meta.env.DEV) {
    showPanel.value = false // Start hidden
  }
  
  // Run initial tests
  runTests()
  
  // Listen for resize events
  window.addEventListener('resize', runTests)
})

onUnmounted(() => {
  window.removeEventListener('resize', runTests)
})
</script>

<style scoped>
/* Ensure panel doesn't interfere with main content */
.test-panel {
  max-height: 80vh;
  overflow-y: auto;
}

/* Mobile optimizations */
@media (max-width: 640px) {
  .test-panel {
    bottom: 1rem;
    right: 1rem;
    left: 1rem;
    max-width: none;
  }
}
</style>
