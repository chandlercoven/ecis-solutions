<template>
  <section id="investigations" class="section-padding bg-slate-100 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 opacity-5">
      <div class="absolute top-0 left-0 w-96 h-96 bg-electric-blue rounded-full filter blur-3xl"></div>
      <div class="absolute bottom-0 right-0 w-96 h-96 bg-navy rounded-full filter blur-3xl"></div>
    </div>

    <div class="container-custom relative z-10">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
        <div class="inline-flex items-center space-x-2 bg-electric-blue/20 rounded-full px-4 py-2">
          <span class="text-electric-blue text-sm font-semibold uppercase tracking-wider">Private Investigations</span>
        </div>
        <h2 class="heading-lg text-text">
          Discreet & Professional Investigations
        </h2>
        <p class="text-lg text-muted">
          Licensed private investigators providing confidential services for individuals, 
          attorneys, and businesses throughout Florida.
        </p>
      </div>

      <!-- Services Grid -->
      <div class="grid lg:grid-cols-3 gap-8">
        <!-- Background Checks -->
        <div class="bg-surface rounded-xl p-8 border border hover:border-electric-blue/30 transition-all duration-300 shadow-sm">
          <div class="w-14 h-14 bg-gradient-cta rounded-lg flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
          </div>
          <h3 class="text-xl font-heading font-semibold text-text mb-3">Background Checks</h3>
          <ul class="space-y-2 text-muted text-sm">
            <li class="flex items-start">
              <svg class="w-4 h-4 text-electric-blue mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              Employment verification
            </li>
            <li class="flex items-start">
              <svg class="w-4 h-4 text-electric-blue mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              Criminal history
            </li>
            <li class="flex items-start">
              <svg class="w-4 h-4 text-electric-blue mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              Financial records
            </li>
            <li class="flex items-start">
              <svg class="w-4 h-4 text-electric-blue mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              Reference checks
            </li>
          </ul>
        </div>

        <!-- Surveillance -->
        <div class="bg-surface rounded-xl p-8 border border hover:border-electric-blue/30 transition-all duration-300 shadow-sm">
          <div class="w-14 h-14 bg-gradient-cta rounded-lg flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
          </div>
          <h3 class="text-xl font-heading font-semibold text-text mb-3">Surveillance Services</h3>
          <ul class="space-y-2 text-muted text-sm">
            <li class="flex items-start">
              <svg class="w-4 h-4 text-electric-blue mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              Insurance fraud
            </li>
            <li class="flex items-start">
              <svg class="w-4 h-4 text-electric-blue mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              Infidelity cases
            </li>
            <li class="flex items-start">
              <svg class="w-4 h-4 text-electric-blue mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              Worker's compensation
            </li>
            <li class="flex items-start">
              <svg class="w-4 h-4 text-electric-blue mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              Child custody cases
            </li>
          </ul>
        </div>

        <!-- Corporate Investigations -->
        <div class="bg-surface rounded-xl p-8 border border hover:border-electric-blue/30 transition-all duration-300 shadow-sm">
          <div class="w-14 h-14 bg-gradient-cta rounded-lg flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 1.5c-1.921 0-3.816.111-5.68.319-1.464.16-2.608 1.304-2.768 2.768-.208 1.864-.319 3.759-.319 5.68 0 1.921.111 3.816.319 5.68.16 1.464 1.304 2.608 2.768 2.768 1.864.208 3.759.319 5.68.319 1.921 0 3.816-.111 5.68-.319 1.464-.16 2.608-1.304 2.768-2.768.208-1.864.319-3.759.319-5.68 0-1.921-.111-3.816-.319-5.68-.16-1.464-1.304-2.608-2.768-2.768-1.864-.208-3.759-.319-5.68-.319zM12 9.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
            </svg>
          </div>
          <h3 class="text-xl font-heading font-semibold text-text mb-3">Corporate Services</h3>
          <ul class="space-y-2 text-muted text-sm">
            <li class="flex items-start">
              <svg class="w-4 h-4 text-electric-blue mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              Internal theft
            </li>
            <li class="flex items-start">
              <svg class="w-4 h-4 text-electric-blue mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              Due diligence
            </li>
            <li class="flex items-start">
              <svg class="w-4 h-4 text-electric-blue mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              Litigation support
            </li>
            <li class="flex items-start">
              <svg class="w-4 h-4 text-electric-blue mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              Asset searches
            </li>
          </ul>
        </div>
      </div>

      <!-- Trust Indicators -->
      <div class="trust-indicators-card relative overflow-hidden">
        <div class="grid md:grid-cols-3 gap-8 items-center relative z-10">
          <div class="text-center md:text-left">
            <div class="inline-flex items-center space-x-2 mb-4">
              <div class="w-2 h-2 bg-electric-blue rounded-full animate-pulse"></div>
              <span class="text-electric-blue text-sm font-semibold uppercase tracking-wider">Trusted Service</span>
            </div>
            <h3 class="text-2xl font-heading font-semibold text-text mb-3">
              Handled with Discretion
            </h3>
            <p class="text-muted leading-relaxed">
              All investigations conducted with complete confidentiality and professionalism.
            </p>
          </div>
          
          <div class="flex justify-center items-center space-x-12">
            <div class="stat-item text-center group">
              <div class="relative">
                <div class="text-4xl font-bold text-electric-blue mb-2 group-hover:scale-110 transition-transform duration-300">
                  <span class="counter" data-target="20">0</span>+
                </div>
                <div class="absolute -top-2 -right-2 w-3 h-3 bg-electric-blue/30 rounded-full animate-ping"></div>
              </div>
              <div class="text-sm text-muted font-medium">Years Experience</div>
            </div>
            <div class="stat-item text-center group">
              <div class="relative">
                <div class="text-4xl font-bold text-electric-blue mb-2 group-hover:scale-110 transition-transform duration-300">
                  <span class="counter" data-target="1000">0</span>+
                </div>
                <div class="absolute -top-2 -right-2 w-3 h-3 bg-electric-blue/30 rounded-full animate-ping" style="animation-delay: 0.5s;"></div>
              </div>
              <div class="text-sm text-muted font-medium">Cases Solved</div>
            </div>
          </div>
          
          <div class="text-center md:text-right">
            <button 
              @click="scrollToSection('contact')"
              class="btn-primary-enhanced group"
            >
              <span class="flex items-center">
                <span>Request Consultation</span>
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { onMounted } from 'vue'

const scrollToSection = (sectionId) => {
  const element = document.getElementById(sectionId)
  if (element) {
    // Calculate dynamic offset based on navigation state
    const navElement = document.querySelector('nav')
    const navHeight = navElement ? navElement.offsetHeight : 80
    const offset = navHeight + 20 // Add 20px buffer for better positioning
    const elementPosition = element.offsetTop - offset
    window.scrollTo({
      top: elementPosition,
      behavior: 'smooth'
    })
  }
}

// Animated counter functionality
const animateCounters = () => {
  const counters = document.querySelectorAll('.counter')
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counter = entry.target
        const target = parseInt(counter.getAttribute('data-target'))
        const duration = 2000 // 2 seconds
        const increment = target / (duration / 16) // 60fps
        let current = 0
        
        const updateCounter = () => {
          current += increment
          if (current < target) {
            counter.textContent = Math.floor(current)
            requestAnimationFrame(updateCounter)
          } else {
            counter.textContent = target
          }
        }
        
        updateCounter()
        observer.unobserve(counter)
      }
    })
  }, { threshold: 0.5 })
  
  counters.forEach(counter => {
    observer.observe(counter)
  })
}

onMounted(() => {
  animateCounters()
})
</script>
