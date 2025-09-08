<template>
  <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-24 sm:pt-32">
    <!-- Background Image/Video -->
    <div class="absolute inset-0 z-0">
      <div class="absolute inset-0 bg-gradient-overlay z-10"></div>
      <img 
        src="https://images.unsplash.com/photo-1582139329536-e7284fece509?ixlib=rb-4.0.3&auto=format&fit=crop&w=2560&q=80"
        alt="Security patrol at gated community"
        class="w-full h-full object-cover"
      >
    </div>

    <!-- Content -->
    <div class="relative z-20 container-custom text-center mt-8 sm:mt-12">
      <div class="max-w-5xl mx-auto space-y-10 animate-fade-in-up">
        <!-- Badge -->
        <div class="inline-flex items-center space-x-3 bg-white/10 backdrop-blur-sm rounded-full px-8 py-3 border border-white/20">
          <span class="w-2 h-2 bg-electric-blue rounded-full animate-pulse"></span>
          <span class="text-white/90 text-sm font-medium">Licensed & Insured Security Services</span>
        </div>

        <!-- Main Headline -->
        <h1 class="heading-xl text-white">
          Protecting Communities,<br>
          Businesses & People with<br>
          <span class="gradient-text bg-gradient-to-r from-electric-blue to-electric-blue-light">Professional Security</span>
        </h1>
        
        <!-- Company Name -->
        <div class="text-center">
          <h2 class="text-2xl lg:text-3xl font-heading font-semibold text-white/90 mb-2">
            East Coast Investigation Security
          </h2>
          <p class="text-lg text-white/70 font-body">
            Licensed & Insured • Serving Florida Statewide
          </p>
        </div>

        <!-- Subheadline -->
        <p class="text-xl lg:text-2xl text-white/80 max-w-3xl mx-auto">
          From HOA security and commercial property protection to private investigations and security training, 
          we deliver comprehensive security solutions across Florida.
        </p>

        <!-- Dual CTAs -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center pt-8">
          <button 
            @click="scrollToSection('contact')"
            class="btn-primary glow-effect group"
          >
            <span class="flex items-center space-x-2">
              <span>Secure My Property</span>
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
            </span>
          </button>
          
          <button 
            @click="scrollToSection('training')"
            class="btn-secondary group"
          >
            <span class="flex items-center space-x-2">
              <span>Start My Security Career</span>
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
              </svg>
            </span>
          </button>
        </div>

        <!-- Trust Indicators -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-16 max-w-4xl mx-auto">
          <div class="text-center">
            <div class="text-3xl lg:text-4xl font-bold text-electric-blue">20+</div>
            <div class="text-sm text-white/70 mt-1">Years Experience</div>
          </div>
          <div class="text-center">
            <div class="text-3xl lg:text-4xl font-bold text-electric-blue">24/7</div>
            <div class="text-sm text-white/70 mt-1">Protection</div>
          </div>
          <div class="text-center">
            <div class="text-3xl lg:text-4xl font-bold text-electric-blue">500+</div>
            <div class="text-sm text-white/70 mt-1">Clients Served</div>
          </div>
          <div class="text-center">
            <div class="text-3xl lg:text-4xl font-bold text-electric-blue">100%</div>
            <div class="text-sm text-white/70 mt-1">Licensed & Insured</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
      <button 
        @click="scrollToSection('services')"
        class="text-white/60 hover:text-white transition-colors"
      >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
        </svg>
      </button>
    </div>
  </section>
</template>

<script setup>
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
