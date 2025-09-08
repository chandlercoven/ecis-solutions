<template>
  <section id="training" class="section-padding bg-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute inset-0 bg-pattern"></div>
    </div>

    <div class="container-custom relative z-10">
      <div class="grid lg:grid-cols-2 gap-responsive-lg items-center">
        <!-- Left Content -->
        <div class="space-y-4 sm:space-y-6">
          <div class="inline-flex items-center space-x-2 bg-law-enforcement-gold/10 rounded-full px-4 py-2">
            <span class="text-law-enforcement-gold text-sm font-semibold uppercase tracking-wider">ECIS Training Academy</span>
          </div>
          
          <h2 class="heading-lg text-navy-dark">
            Launch Your Career in Security
          </h2>
          
          <p class="text-lg text-gray-600 leading-relaxed">
            Get licensed and certified through our state-approved training programs. 
            Join hundreds of graduates who have started successful security careers.
          </p>

          <!-- Course Cards -->
          <div class="space-y-4 pt-4">
            <div class="training-card group">
              <div class="flex items-start space-x-4">
                <div class="training-icon w-14 h-14 bg-gradient-to-br from-amber-500 to-amber-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                  <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.623 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                  </svg>
                </div>
                <div class="flex-1">
                  <div class="flex items-center space-x-2 mb-2">
                    <h3 class="text-xl font-heading font-semibold text-navy-dark group-hover:text-amber-600 transition-colors duration-300">Class D License</h3>
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">Popular</span>
                  </div>
                  <p class="text-gray-600 text-sm leading-relaxed mb-3">Unarmed Security Officer certification. 40-hour comprehensive training program covering legal aspects, emergency procedures, and professional conduct.</p>
                  <div class="flex items-center text-amber-600 text-sm font-semibold">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    40 Hours • $299
                  </div>
                </div>
              </div>
            </div>

            <div class="training-card group">
              <div class="flex items-start space-x-4">
                <div class="training-icon w-14 h-14 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                  <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                  </svg>
                </div>
                <div class="flex-1">
                  <div class="flex items-center space-x-2 mb-2">
                    <h3 class="text-xl font-heading font-semibold text-navy-dark group-hover:text-red-600 transition-colors duration-300">Class G License</h3>
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded-full">Advanced</span>
                  </div>
                  <p class="text-gray-600 text-sm leading-relaxed mb-3">Armed Security Officer certification. Advanced training with firearms qualification, tactical response, and enhanced legal training.</p>
                  <div class="flex items-center text-red-600 text-sm font-semibold">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    28 Hours • $499
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- CTA Buttons -->
          <div class="flex flex-col sm:flex-row gap-4 pt-6">
            <button class="btn-primary group">
              <span class="flex items-center">
                <span>View Training Schedule</span>
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
              </span>
            </button>
            <button class="btn-secondary group">
              <span class="flex items-center">
                <span>Download Course Info</span>
                <svg class="w-5 h-5 ml-2 group-hover:translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
              </span>
            </button>
          </div>
        </div>

        <!-- Right Image -->
        <div class="relative">
          <div class="relative rounded-2xl overflow-hidden shadow-2xl">
            <img 
              src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
              alt="Security training classroom"
              class="w-full h-auto"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-navy-dark/60 to-transparent"></div>
          </div>
          
          <!-- Badge -->
          <div class="absolute -bottom-6 -left-6 bg-white rounded-xl p-6 shadow-xl">
            <div class="flex items-center space-x-4">
              <div class="text-electric-blue">
                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                </svg>
              </div>
              <div>
                <div class="text-2xl font-bold text-navy-dark">500+</div>
                <div class="text-sm text-gray-600">Graduates Working</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Stats Bar -->
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mt-20">
        <div class="stats-card group">
          <div class="stats-number group-hover:scale-110 transition-transform duration-300">
            <span class="counter" data-target="95">0</span>%
          </div>
          <div class="text-gray-600 mt-2 text-sm font-medium">Pass Rate</div>
          <div class="w-8 h-1 bg-gradient-to-r from-green-400 to-green-600 rounded-full mx-auto mt-2"></div>
        </div>
        <div class="stats-card group">
          <div class="stats-number group-hover:scale-110 transition-transform duration-300">
            <span class="counter" data-target="500">0</span>+
          </div>
          <div class="text-gray-600 mt-2 text-sm font-medium">Graduates</div>
          <div class="w-8 h-1 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full mx-auto mt-2"></div>
        </div>
        <div class="stats-card group">
          <div class="stats-number group-hover:scale-110 transition-transform duration-300">
            <span class="counter" data-target="30">0</span>+
          </div>
          <div class="text-gray-600 mt-2 text-sm font-medium">Industry Partners</div>
          <div class="w-8 h-1 bg-gradient-to-r from-purple-400 to-purple-600 rounded-full mx-auto mt-2"></div>
        </div>
        <div class="stats-card group">
          <div class="stats-number group-hover:scale-110 transition-transform duration-300">
            <span class="counter" data-target="100">0</span>%
          </div>
          <div class="text-gray-600 mt-2 text-sm font-medium">State Approved</div>
          <div class="w-8 h-1 bg-gradient-to-r from-amber-400 to-amber-600 rounded-full mx-auto mt-2"></div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { onMounted } from 'vue'

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

<style scoped>
.bg-pattern {
  background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.4'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
</style>
