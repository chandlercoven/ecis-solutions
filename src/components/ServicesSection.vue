<template>
  <section id="services" class="section-padding bg-navy-900">
    <div class="container-custom">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
        <div class="inline-flex items-center space-x-2 bg-electric-blue/10 rounded-full px-4 py-2">
          <span class="text-electric-blue text-sm font-semibold uppercase tracking-wider">Our Services</span>
        </div>
        <h2 class="heading-lg text-white">
          Comprehensive Security Solutions
        </h2>
        <p class="text-lg text-silver-light">
          From residential communities to commercial properties, we provide tailored security services 
          that protect what matters most.
        </p>
      </div>

      <!-- Services Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-responsive">
        <!-- HOA/Community Security -->
        <div class="service-card group" @click="handleServiceClick('hoa')">
          <div class="mb-6">
            <div class="service-icon-container">
              <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.623 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                </svg>
              </div>
            </div>
          </div>
          <h3 class="heading-sm text-gray-800 mb-3 group-hover:text-blue-600 transition-colors duration-300">HOA & Community Security</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">
            24/7 gate management, patrol services, and access control for gated communities and residential complexes.
          </p>
          <div class="flex items-center text-blue-600 font-semibold group-hover:translate-x-2 transition-all duration-300">
            <span>Learn More</span>
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </div>

        <!-- Commercial Property Security -->
        <div class="service-card group" @click="handleServiceClick('commercial')">
          <div class="mb-6">
            <div class="service-icon-container">
              <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                </svg>
              </div>
            </div>
          </div>
          <h3 class="heading-sm text-gray-800 mb-3 group-hover:text-green-600 transition-colors duration-300">Commercial Property Security</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">
            Professional security for office buildings, retail centers, warehouses, and industrial facilities.
          </p>
          <div class="flex items-center text-green-600 font-semibold group-hover:translate-x-2 transition-all duration-300">
            <span>Learn More</span>
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </div>

        <!-- Private Investigations -->
        <div class="service-card group" @click="handleServiceClick('investigations')">
          <div class="mb-6">
            <div class="service-icon-container">
              <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
              </div>
            </div>
          </div>
          <h3 class="heading-sm text-gray-800 mb-3 group-hover:text-purple-600 transition-colors duration-300">Private Investigations</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">
            Discreet investigations, background checks, surveillance, and corporate fraud investigations.
          </p>
          <div class="flex items-center text-purple-600 font-semibold group-hover:translate-x-2 transition-all duration-300">
            <span>Learn More</span>
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </div>

        <!-- Executive/Event Security -->
        <div class="service-card group" @click="handleServiceClick('executive')">
          <div class="mb-6">
            <div class="service-icon-container">
              <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-3 transition-all duration-300 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 1.5c-1.921 0-3.816.111-5.68.319-1.464.16-2.608 1.304-2.768 2.768-.208 1.864-.319 3.759-.319 5.68 0 1.921.111 3.816.319 5.68.16 1.464 1.304 2.608 2.768 2.768 1.864.208 3.759.319 5.68.319 1.921 0 3.816-.111 5.68-.319 1.464-.16 2.608-1.304 2.768-2.768.208-1.864.319-3.759.319-5.68 0-1.921-.111-3.816-.319-5.68-.16-1.464-1.304-2.608-2.768-2.768-1.864-.208-3.759-.319-5.68-.319zM12 9.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
                </svg>
              </div>
            </div>
          </div>
          <h3 class="heading-sm text-gray-800 mb-3 group-hover:text-orange-600 transition-colors duration-300">Executive & Event Security</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">
            VIP protection, event security management, and crowd control for special occasions.
          </p>
          <div class="flex items-center text-orange-600 font-semibold group-hover:translate-x-2 transition-all duration-300">
            <span>Learn More</span>
            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </div>
      </div>

      <!-- CTA Section -->
      <div class="text-center mt-16">
        <p class="text-lg text-silver-light mb-6">
          Need a customized security solution for your specific needs?
        </p>
        <button 
          @click="scrollToSection('contact')"
          class="btn-primary glow-effect"
        >
          Get a Free Security Assessment
        </button>
      </div>
    </div>
  </section>
</template>

<script setup>
const handleServiceClick = (service) => {
  // In MVP, scroll to contact. In future, route to service detail page
  scrollToSection('contact')
}

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
</script>
