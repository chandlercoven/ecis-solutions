<template>
  <div class="home">
    <!-- Hero Section -->
    <HeroSection />

    <!-- Proof/Stats Section -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
          <div class="text-center">
            <div class="text-3xl lg:text-4xl font-heading font-bold text-action mb-2">15+</div>
            <div class="text-muted text-sm lg:text-base">Years Experience</div>
          </div>
          <div class="text-center">
            <div class="text-3xl lg:text-4xl font-heading font-bold text-action mb-2">3min</div>
            <div class="text-muted text-sm lg:text-base">Response Time</div>
          </div>
          <div class="text-center">
            <div class="text-3xl lg:text-4xl font-heading font-bold text-action mb-2">200+</div>
            <div class="text-muted text-sm lg:text-base">Properties Protected</div>
          </div>
          <div class="text-center">
            <div class="text-3xl lg:text-4xl font-heading font-bold text-action mb-2">24/7</div>
            <div class="text-muted text-sm lg:text-base">Coverage Available</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Preview -->
    <ServicesSection />

    <!-- Technology Section -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container">
        <div class="text-center mb-12">
          <h2 class="heading-lg text-text mb-4">Advanced Security Technology</h2>
          <p class="text-lg text-muted max-w-3xl mx-auto">
            State-of-the-art systems that keep you connected and protected around the clock
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div class="text-center">
            <div class="w-16 h-16 bg-action/10 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">GPS Tracking</h3>
            <p class="text-muted text-sm">Real-time officer location monitoring</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 bg-action/10 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">CCTV Monitoring</h3>
            <p class="text-muted text-sm">24/7 surveillance systems</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 bg-action/10 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">Digital Reports</h3>
            <p class="text-muted text-sm">Instant incident documentation</p>
          </div>

          <div class="text-center">
            <div class="w-16 h-16 bg-action/10 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">Mobile Apps</h3>
            <p class="text-muted text-sm">Client communication platform</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <TestimonialsSection />

    <!-- CTA Banner -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container text-center">
        <h2 class="heading-lg text-text mb-4">
          Ready to Secure Your Property?
        </h2>
        <p class="text-lg text-muted mb-8 max-w-2xl mx-auto">
          Get a free security assessment and discover how ECIS can protect what matters most to you.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <router-link to="/contact" class="btn btn--primary">
            Schedule Free Assessment
          </router-link>
          <router-link to="/services" class="btn btn--secondary">
            View All Services
          </router-link>
        </div>
        
        <div class="mt-8 text-sm text-muted">
          <p>Emergency services available 24/7 • Licensed & Bonded • Response time: 3 minutes</p>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import HeroSection from '../components/HeroSection.vue'
import ServicesSection from '../components/ServicesSection.vue'
import TestimonialsSection from '../components/TestimonialsSection.vue'
</script>
