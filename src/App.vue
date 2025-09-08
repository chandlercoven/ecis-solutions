<template>
  <div id="app">
    <!-- Navigation -->
    <Navigation />
    
    <!-- Main Content -->
    <main>
      <!-- Hero Section -->
      <HeroSection />
      
      <!-- Services Section -->
      <ServicesSection />
      
      <!-- Training Section -->
      <TrainingSection />
      
      <!-- Investigations Section -->
      <InvestigationsSection />
      
      <!-- About Section -->
      <AboutSection />
      
      <!-- Testimonials Section -->
      <TestimonialsSection />
      
      <!-- Contact Section -->
      <ContactSection />
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
        class="fixed bottom-8 right-8 z-40 w-12 h-12 bg-gradient-cta rounded-full shadow-lg hover:shadow-glow items-center justify-center transition-all duration-300 hover:scale-110 hidden lg:flex"
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
import HeroSection from './components/HeroSection.vue'
import ServicesSection from './components/ServicesSection.vue'
import TrainingSection from './components/TrainingSection.vue'
import InvestigationsSection from './components/InvestigationsSection.vue'
import AboutSection from './components/AboutSection.vue'
import TestimonialsSection from './components/TestimonialsSection.vue'
import ContactSection from './components/ContactSection.vue'
import FooterSection from './components/FooterSection.vue'
import MobileCallButton from './components/MobileCallButton.vue'

const showBackToTop = ref(false)

// Intersection Observer for scroll animations
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

onMounted(() => {
  // Set up scroll animations
  setTimeout(() => {
    observeElements()
  }, 100)
  
  // Add scroll event listener
  window.addEventListener('scroll', handleScroll)
  
  // Check initial scroll position
  handleScroll()
  
  // Add animate-on-scroll class to sections
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
})
</script>

<style>
/* Global animations */
.animate-on-scroll {
  opacity: 0;
  transform: translateY(30px);
  transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.animate-on-scroll.visible {
  opacity: 1;
  transform: translateY(0);
}

/* Fade transition for back to top button */
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>