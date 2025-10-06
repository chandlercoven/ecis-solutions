<template>
  <div class="services-page">
    <!-- Services Hero Section -->
    <section class="hero-section relative min-h-[60vh] flex items-center justify-center animate-on-scroll pt-24 sm:pt-20 lg:pt-24">
      <div class="absolute inset-0 z-0">
        <!-- Enhanced overlay layers -->
        <div class="absolute inset-0 bg-gradient-to-b from-bg/40 via-bg/70 to-bg/90 z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-bg/30 via-transparent to-bg/30 z-20"></div>
        <div class="absolute inset-0 bg-black/20 z-30"></div>
        
        <!-- Desktop hero image -->
        <EnhancedImage
          :src="heroBanner"
          alt="Professional security team monitoring surveillance systems"
          container-class="w-full h-full hidden md:block hero-image"
          image-class="w-full h-full object-cover"
          :lazy="false"
          :show-loading-icon="false"
        />
        <!-- Mobile hero image -->
        <EnhancedImage
          :src="heroBannerMobile"
          alt="Professional security team monitoring surveillance systems"
          container-class="w-full h-full block md:hidden hero-image"
          image-class="w-full h-full object-cover"
          :lazy="false"
          :show-loading-icon="false"
        />
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
          <div class="hero-card-lg p-4 sm:p-6 lg:p-8 xl:p-12 max-w-5xl mx-auto">
            <h1 class="heading-xl text-white font-heading mb-3 sm:mb-4 text-shadow-lg">
              Comprehensive Security Solutions
            </h1>
            
            <p class="text-base sm:text-lg text-white/90 max-w-3xl mx-auto mb-6 sm:mb-8 font-body text-shadow">
              From 24/7 patrol services to advanced surveillance systems, we provide tailored security solutions that protect what matters most to you.
            </p>

            <!-- Quick stats in solid background cards -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 lg:gap-6">
              <div class="hero-card-sm text-center p-3 sm:p-4 lg:p-6">
                <div class="text-xl sm:text-2xl lg:text-3xl font-heading font-bold text-action mb-1">200+</div>
                <div class="text-xs sm:text-sm text-white/90 font-body">Properties Protected</div>
              </div>
              <div class="hero-card-sm text-center p-3 sm:p-4 lg:p-6">
                <div class="text-xl sm:text-2xl lg:text-3xl font-heading font-bold text-action mb-1">24/7</div>
                <div class="text-xs sm:text-sm text-white/90 font-body">Response Available</div>
              </div>
              <div class="hero-card-sm text-center p-3 sm:p-4 lg:p-6">
                <div class="text-xl sm:text-2xl lg:text-3xl font-heading font-bold text-action mb-1">3 min</div>
                <div class="text-xs sm:text-sm text-white/90 font-body">Average Response</div>
              </div>
              <div class="hero-card-sm text-center p-3 sm:p-4 lg:p-6">
                <div class="text-xl sm:text-2xl lg:text-3xl font-heading font-bold text-action mb-1">98%</div>
                <div class="text-xs sm:text-sm text-white/90 font-body">Client Satisfaction</div>
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
            <router-link to="/services/security-patrol" class="text-action font-semibold text-sm hover:underline">Learn More →</router-link>
          </div>

          <!-- HOA Security -->
          <div class="card group hover:border-action/50 transition-all duration-base">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-action/20 transition-colors">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">HOA & Residential Security</h3>
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
            <router-link to="/services/hoa-security" class="text-action font-semibold text-sm hover:underline">Learn More →</router-link>
          </div>

          <!-- Commercial Property Security -->
          <div class="card group hover:border-action/50 transition-all duration-base">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-action/20 transition-colors">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Commercial Property Security</h3>
            <p class="text-muted mb-4">Professional security for office buildings, retail centers, warehouses, and industrial facilities.</p>
            <ul class="space-y-2 mb-4">
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Access control systems
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Perimeter monitoring
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Asset protection
              </li>
            </ul>
            <router-link to="/services/commercial-security" class="text-action font-semibold text-sm hover:underline">Learn More →</router-link>
          </div>

          <!-- CCTV Monitoring -->
          <div class="card group hover:border-action/50 transition-all duration-base">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-action/20 transition-colors">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">CCTV & Monitoring Systems</h3>
            <p class="text-muted mb-4">Advanced surveillance systems with 24/7 monitoring, AI detection, and cloud storage solutions.</p>
            <ul class="space-y-2 mb-4">
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                4K HD cameras
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                AI motion detection
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Remote monitoring
              </li>
            </ul>
            <router-link to="/services/cctv-monitoring" class="text-action font-semibold text-sm hover:underline">Learn More →</router-link>
          </div>

          <!-- Private Investigations -->
          <div class="card group hover:border-action/50 transition-all duration-base">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-action/20 transition-colors">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Private Investigations</h3>
            <p class="text-muted mb-4">Discreet investigations, background checks, surveillance, and corporate fraud investigations.</p>
            <ul class="space-y-2 mb-4">
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Background verification
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Surveillance services
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Corporate investigations
              </li>
            </ul>
            <router-link to="/services/private-investigations" class="text-action font-semibold text-sm hover:underline">Learn More →</router-link>
          </div>

          <!-- Executive & Event Security -->
          <div class="card group hover:border-action/50 transition-all duration-base">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-action/20 transition-colors">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Executive & Event Security</h3>
            <p class="text-muted mb-4">VIP protection, event security management, and crowd control for special occasions and high-profile clients.</p>
            <ul class="space-y-2 mb-4">
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                VIP protection
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Event security planning
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Crowd management
              </li>
            </ul>
            <router-link to="/services/executive-security" class="text-action font-semibold text-sm hover:underline">Learn More →</router-link>
          </div>
        </div>
      </div>
    </section>

    <!-- Specialized Security Markets Section -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="text-center mb-12">
          <h2 class="heading-lg text-text mb-4">Specialized Security Markets</h2>
          <p class="text-lg text-muted max-w-2xl mx-auto">Industry-specific security solutions tailored to unique sector requirements and compliance standards.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Healthcare Security -->
          <div class="card group hover:border-action/50 transition-all duration-base">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-action/20 transition-colors">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Healthcare Security</h3>
            <p class="text-muted mb-4">Specialized security for hospitals, clinics, and medical facilities with patient safety and HIPAA compliance.</p>
            <ul class="space-y-2 mb-4">
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Patient safety protocols
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Emergency room security
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                HIPAA compliance
              </li>
            </ul>
            <router-link to="/services/healthcare-security" class="text-action font-semibold text-sm hover:underline">Learn More →</router-link>
          </div>

          <!-- Educational Security -->
          <div class="card group hover:border-action/50 transition-all duration-base">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-action/20 transition-colors">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Educational Security</h3>
            <p class="text-muted mb-4">Campus security for schools, universities, and educational institutions with student safety focus.</p>
            <ul class="space-y-2 mb-4">
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Student safety protocols
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Campus access control
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Event security
              </li>
            </ul>
            <router-link to="/services/educational-security" class="text-action font-semibold text-sm hover:underline">Learn More →</router-link>
          </div>

          <!-- Construction Security -->
          <div class="card group hover:border-action/50 transition-all duration-base">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-action/20 transition-colors">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517l-.318-.158a6 6 0 00-3.86-.517l-2.387.477a2 2 0 00-1.022.547M4 7h16M4 7v10a2 2 0 002 2h12a2 2 0 002-2V7M4 7l4-4m12 4l-4-4" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Construction Security</h3>
            <p class="text-muted mb-4">Temporary security for construction sites, equipment protection, and worker safety during building projects.</p>
            <ul class="space-y-2 mb-4">
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Equipment theft prevention
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Worker safety
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Site access control
              </li>
            </ul>
            <router-link to="/services/construction-security" class="text-action font-semibold text-sm hover:underline">Learn More →</router-link>
          </div>

          <!-- Banking Security -->
          <div class="card group hover:border-action/50 transition-all duration-base">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-action/20 transition-colors">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Banking & Financial Security</h3>
            <p class="text-muted mb-4">Financial institution security including ATM protection, cash transport, and customer safety.</p>
            <ul class="space-y-2 mb-4">
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                ATM security
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Cash transport
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Customer protection
              </li>
            </ul>
            <router-link to="/services/banking-security" class="text-action font-semibold text-sm hover:underline">Learn More →</router-link>
          </div>

          <!-- Government Security -->
          <div class="card group hover:border-action/50 transition-all duration-base">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-action/20 transition-colors">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Government Contracting</h3>
            <p class="text-muted mb-4">Federal and state security contracts with specialized clearance requirements and compliance standards.</p>
            <ul class="space-y-2 mb-4">
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Federal contracts
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Security clearances
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Compliance standards
              </li>
            </ul>
            <router-link to="/services/government-security" class="text-action font-semibold text-sm hover:underline">Learn More →</router-link>
          </div>

          <!-- Retail Security -->
          <div class="card group hover:border-action/50 transition-all duration-base">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-action/20 transition-colors">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Retail Loss Prevention</h3>
            <p class="text-muted mb-4">Shoplifting prevention, inventory protection, and customer safety for retail establishments.</p>
            <ul class="space-y-2 mb-4">
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Shoplifting prevention
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Inventory protection
              </li>
              <li class="flex items-start text-sm text-muted">
                <svg class="w-4 h-4 text-success mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Customer safety
              </li>
            </ul>
            <router-link to="/services/retail-security" class="text-action font-semibold text-sm hover:underline">Learn More →</router-link>
          </div>
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
import EnhancedImage from '@/components/EnhancedImage.vue'
import { heroBanner, heroBannerMobile } from '@/assets/images.js'

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
