<template>
  <div class="services-page">
    <!-- Services Hero Section -->
    <section class="hero-section relative min-h-[60vh] flex items-center justify-center animate-on-scroll pt-24 sm:pt-20 lg:pt-24">
      <div class="absolute inset-0 z-0">
        <!-- Enhanced overlay layers -->
        <div class="absolute inset-0 bg-gradient-to-b from-bg/40 via-bg/70 to-bg/90 z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-bg/30 via-transparent to-bg/30 z-20"></div>
        <div class="absolute inset-0 bg-black/20 z-30"></div>
        
        <img 
          src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=2560&q=80"
          alt="Professional security team monitoring surveillance systems"
          class="w-full h-full object-cover"
        >
      </div>

      <div class="relative z-20 container text-center">
        <div class="max-w-4xl mx-auto">
          <!-- Solid background badge -->
          <div class="inline-flex items-center space-x-2 sm:space-x-3 hero-card-sm mb-6 mt-6 sm:mt-4">
            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
            <span class="text-white text-xs sm:text-sm font-medium font-body">Professional Security Services</span>
          </div>

          <!-- Main content in solid background card -->
          <div class="hero-card-lg p-8 lg:p-12">
            <h1 class="heading-xl text-white font-heading mb-4 text-shadow-lg">
              Comprehensive Security Solutions
            </h1>
            
            <p class="text-lg text-white/90 max-w-3xl mx-auto mb-8 font-body text-shadow">
              From 24/7 patrol services to advanced surveillance systems, we provide tailored security solutions that protect what matters most to you.
            </p>

            <!-- Quick stats in solid background cards -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">200+</div>
                <div class="text-sm text-white/90 font-body">Properties Protected</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">24/7</div>
                <div class="text-sm text-white/90 font-body">Response Available</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">3 min</div>
                <div class="text-sm text-white/90 font-body">Average Response</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">98%</div>
                <div class="text-sm text-white/90 font-body">Client Satisfaction</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Core Services Grid -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="text-center mb-12">
          <h2 class="heading-lg text-text mb-4">Our Core Services</h2>
          <p class="text-lg text-muted max-w-2xl mx-auto">Choose from our comprehensive range of security services designed to meet your specific needs.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Security Patrol -->
          <div class="card group hover:border-action/50 transition-all duration-base">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-action/20 transition-colors">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">24/7 Security Patrol</h3>
            <p class="text-muted mb-4">Visible deterrence with scheduled and random patrols. GPS-tracked vehicles and real-time reporting.</p>
            <ul class="space-y-2 mb-4">
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Licensed officers
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Incident documentation
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Emergency response
              </li>
            </ul>
            <router-link to="/contact" class="text-action font-semibold text-sm hover:underline">Learn More →</router-link>
          </div>

          <!-- HOA Security -->
          <div class="card group hover:border-action/50 transition-all duration-base">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-action/20 transition-colors">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">HOA & Residential</h3>
            <p class="text-muted mb-4">Specialized security for gated communities, HOAs, and residential properties with access control.</p>
            <ul class="space-y-2 mb-4">
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Gate management
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Visitor verification
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Community patrols
              </li>
            </ul>
            <router-link to="/contact" class="text-action font-semibold text-sm hover:underline">Learn More →</router-link>
          </div>

          <!-- CCTV Monitoring -->
          <div class="card group hover:border-action/50 transition-all duration-base">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-action/20 transition-colors">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">CCTV & Monitoring</h3>
            <p class="text-muted mb-4">Advanced surveillance systems with 24/7 monitoring, AI detection, and cloud storage solutions.</p>
            <ul class="space-y-2 mb-4">
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                HD cameras
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Motion detection
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Remote access
              </li>
            </ul>
            <router-link to="/contact" class="text-action font-semibold text-sm hover:underline">Learn More →</router-link>
          </div>

          <!-- More service cards... -->
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container text-center">
        <h2 class="heading-lg text-text mb-4">Ready to Secure Your Property?</h2>
        <p class="text-lg text-muted mb-8 max-w-2xl mx-auto">
          Get a free security assessment and customized protection plan for your specific needs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <router-link to="/contact" class="btn btn--primary">Get Free Assessment</router-link>
          <a href="tel:+15166408144" class="btn btn--secondary">Call (516) 640-8144</a>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
// Services page functionality
</script>

<style scoped>
.hero-section {
  background: linear-gradient(135deg, var(--bg) 0%, var(--surface) 100%);
}

.hero-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at center, transparent 0%, var(--bg)/20 100%);
  z-index: 1;
}
</style>
