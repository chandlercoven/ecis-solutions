<template>
  <div id="app" class="min-h-screen bg-bg text-text">
    <!-- Navigation -->
    <Navigation />
    
    <!-- Loading Indicator -->
    <Transition name="fade">
      <div 
        v-if="isLoading" 
        class="fixed top-0 left-0 w-full h-1 bg-action z-50"
      >
        <div class="h-full bg-action-hover animate-pulse"></div>
      </div>
    </Transition>
    
    <!-- Router View - Page Content -->
    <main class="relative z-10">
      <RouterView v-slot="{ Component, route }">
        <Suspense>
          <Transition name="page" mode="out-in" @before-enter="onPageEnter" @after-enter="onPageEntered">
            <component :is="Component" :key="route.path" />
          </Transition>
          <template #fallback>
            <div class="min-h-screen flex items-center justify-center">
              <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-action"></div>
            </div>
          </template>
        </Suspense>
      </RouterView>
    </main>
    
    <!-- Footer -->
    <FooterSection />
    
    <!-- Mobile Call Button -->
    <MobileCallButton />
    
    <!-- Back to Top Button -->
    <transition name="fade">
      <button 
        v-if="showBackToTop"
        @click="scrollToTop"
        class="fixed bottom-8 right-8 z-40 w-12 h-12 bg-action rounded-full shadow-lg hover:shadow-lg items-center justify-center transition-all duration-base hover:scale-110 hidden lg:flex focus-ring"
        aria-label="Back to top"
      >
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
      </button>
    </transition>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted, nextTick } from 'vue'
import Navigation from './components/Navigation.vue'
import FooterSection from './components/FooterSection.vue'
import MobileCallButton from './components/MobileCallButton.vue'
import { onLoadingChange } from './router'

const showBackToTop = ref(false)
const isLoading = ref(false)

// Subscribe to loading state changes
const unsubscribeLoading = onLoadingChange((loading) => {
  isLoading.value = loading
})

// Global scroll animations setup
const observeElements = () => {
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  }

  const callback = (entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible')
      }
    })
  }

  const observer = new IntersectionObserver(callback, options)

  // Observe all elements with animate-on-scroll class
  nextTick(() => {
    const elements = document.querySelectorAll('.animate-on-scroll')
    elements.forEach(element => observer.observe(element))
  })
}

// Handle scroll events
const handleScroll = () => {
  showBackToTop.value = window.scrollY > 500
}

// Scroll to top function
const scrollToTop = () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  })
}

// Page transition handlers
const onPageEnter = () => {
  // Reset scroll animations for new page
  nextTick(() => {
    observeElements()
  })
}

const onPageEntered = () => {
  // Page fully loaded and transitioned
  console.log('Page transition completed')
}

onMounted(() => {
  // Set up scroll animations
  setTimeout(() => {
    observeElements()
  }, 100)
  
  // Add scroll event listener
  window.addEventListener('scroll', handleScroll)
  
  // Check initial scroll position
  handleScroll()
  
  // Set up global intersection observer for any page
  nextTick(() => {
    const sections = document.querySelectorAll('section')
    sections.forEach(section => {
      if (!section.classList.contains('animate-on-scroll')) {
        section.classList.add('animate-on-scroll')
      }
    })
    observeElements()
  })
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
  unsubscribeLoading()
})
</script>

<style>
/* Global fade transition for back to top button */
.fade-enter-active,
.fade-leave-active {
  transition: opacity var(--duration-base) var(--easing-standard);
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

/* Page transition */
.page-enter-active,
.page-leave-active {
  transition: all 0.2s ease;
}

.page-enter-from {
  opacity: 0;
  transform: translateY(10px);
}

.page-leave-to {
  opacity: 0;
  transform: translateY(-10px);
}
</style>