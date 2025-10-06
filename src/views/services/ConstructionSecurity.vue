<template>
  <div class="construction-security-page">
    <!-- Service Hero Section -->
    <section class="hero-section relative min-h-[70vh] flex items-center justify-center animate-on-scroll pt-24 sm:pt-20 lg:pt-24">
      <div class="absolute inset-0 z-0">
        <!-- Enhanced overlay layers -->
        <div class="absolute inset-0 bg-gradient-to-b from-bg/50 via-bg/75 to-bg/90 z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-bg/40 via-transparent to-bg/40 z-20"></div>
        <div class="absolute inset-0 bg-black/30 z-30"></div>
        
        <!-- Desktop hero image -->
        <EnhancedImage
          :src="heroBanner"
          alt="Professional security officer at construction site"
          container-class="w-full h-full hidden md:block hero-image"
          image-class="w-full h-full object-cover"
          :lazy="false"
          :show-loading-icon="false"
        />
        <!-- Mobile hero image -->
        <EnhancedImage
          :src="heroBannerMobile"
          alt="Professional security officer at construction site"
          container-class="w-full h-full block md:hidden hero-image"
          image-class="w-full h-full object-cover"
          :lazy="false"
          :show-loading-icon="false"
        />
      </div>

      <div class="relative z-20 container text-center">
        <div class="max-w-4xl mx-auto">
          <!-- Service badge -->
          <div class="inline-flex items-center space-x-3 hero-card-sm mb-6 mt-6 sm:mt-4">
            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517l-.318-.158a6 6 0 00-3.86-.517l-2.387.477a2 2 0 00-1.022.547M4 7h16M4 7v10a2 2 0 002 2h12a2 2 0 002-2V7M4 7l4-4m12 4l-4-4" />
            </svg>
            <span class="text-white text-sm font-medium font-body">Construction Security</span>
          </div>

          <!-- Main content in solid background card -->
          <div class="hero-card-lg p-8 lg:p-12">
            <h1 class="heading-xl text-white font-heading mb-4 text-shadow-lg">
              Construction Site Security Services
            </h1>
            
            <p class="text-lg text-white/90 max-w-3xl mx-auto mb-8 font-body text-shadow">
              Temporary security services for construction sites, equipment theft prevention, and worker safety during building projects with specialized construction environment expertise.
            </p>

            <!-- Key metrics -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">200+</div>
                <div class="text-sm text-white/90 font-body">Sites Secured</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">24/7</div>
                <div class="text-sm text-white/90 font-body">Equipment Protection</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">95%</div>
                <div class="text-sm text-white/90 font-body">Theft Reduction</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">Temporary</div>
                <div class="text-sm text-white/90 font-body">Flexible Service</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Problem Section -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">Construction Security Challenges</h2>
          <p class="text-lg text-muted mb-8">
            Construction sites face unique security challenges that require specialized knowledge of construction environments, equipment protection, and temporary security solutions.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Challenge 1 -->
          <div class="card text-center p-8">
            <div class="w-16 h-16 bg-danger/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.464 0L4.35 16.5c-.77.833.192 2.5 1.732 2.5z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Equipment Theft</h3>
            <p class="text-muted">
              Construction equipment, tools, and materials are high-value targets for theft, costing projects thousands of dollars and causing significant delays.
            </p>
          </div>

          <!-- Challenge 2 -->
          <div class="card text-center p-8">
            <div class="w-16 h-16 bg-danger/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Worker Safety</h3>
            <p class="text-muted">
              Construction workers face safety risks from unauthorized access, vandalism, and security threats that can impact worker safety and project timelines.
            </p>
          </div>

          <!-- Challenge 3 -->
          <div class="card text-center p-8">
            <div class="w-16 h-16 bg-danger/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Site Access Control</h3>
            <p class="text-muted">
              Managing access for workers, contractors, inspectors, and visitors while preventing unauthorized entry and maintaining security during construction phases.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Solution Section -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">Our Construction Security Solution</h2>
          <p class="text-lg text-muted mb-8">
            ECIS provides specialized construction security services with trained officers who understand construction environments and temporary security requirements.
          </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <!-- Solution Features -->
          <div class="space-y-8">
            <!-- Feature 1 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517l-.318-.158a6 6 0 00-3.86-.517l-2.387.477a2 2 0 00-1.022.547M4 7h16M4 7v10a2 2 0 002 2h12a2 2 0 002-2V7M4 7l4-4m12 4l-4-4" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Equipment Theft Prevention</h3>
                <p class="text-muted">
                  Specialized training in construction equipment security, tool protection, and material security with knowledge of construction site layouts and equipment types.
                </p>
              </div>
            </div>

            <!-- Feature 2 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Worker Safety Protocols</h3>
                <p class="text-muted">
                  Construction-specific safety protocols, worker protection, and coordination with construction managers to ensure worker safety and project security.
                </p>
              </div>
            </div>

            <!-- Feature 3 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Site Access Control</h3>
                <p class="text-muted">
                  Visitor management, worker check-in/out procedures, and controlled access to different areas of the construction site with proper identification and authorization.
                </p>
              </div>
            </div>

            <!-- Feature 4 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Flexible Scheduling</h3>
                <p class="text-muted">
                  Temporary security services that adapt to construction schedules, project phases, and changing security needs throughout the construction timeline.
                </p>
              </div>
            </div>
          </div>

          <!-- Construction Types -->
          <div class="card p-8 bg-action/5 border-action/20">
            <h3 class="text-2xl font-heading font-bold text-text mb-6 text-center">Construction Projects We Secure</h3>
            
            <div class="space-y-4">
              <div class="bg-surface rounded-lg p-4 border border-action/10">
                <h4 class="font-heading font-semibold text-text mb-2">Residential Construction</h4>
                <p class="text-sm text-muted">Single-family homes, townhouses, and residential developments with equipment and material protection.</p>
              </div>
              
              <div class="bg-surface rounded-lg p-4 border border-action/10">
                <h4 class="font-heading font-semibold text-text mb-2">Commercial Buildings</h4>
                <p class="text-sm text-muted">Office buildings, retail centers, and commercial facilities with high-value equipment security.</p>
              </div>
              
              <div class="bg-surface rounded-lg p-4 border border-action/10">
                <h4 class="font-heading font-semibold text-text mb-2">Infrastructure Projects</h4>
                <p class="text-sm text-muted">Road construction, utility projects, and infrastructure development with specialized security needs.</p>
              </div>

              <div class="bg-surface rounded-lg p-4 border border-action/10">
                <h4 class="font-heading font-semibold text-text mb-2">Industrial Facilities</h4>
                <p class="text-sm text-muted">Manufacturing plants, warehouses, and industrial construction with heavy equipment protection.</p>
              </div>
            </div>

            <div class="mt-8 p-4 bg-surface rounded-lg border border-action/10">
              <p class="text-sm text-muted italic text-center">
                "ECIS security has eliminated equipment theft completely. Our construction projects stay on schedule and within budget."
              </p>
              <p class="text-sm font-medium text-text text-center mt-2">
                — Mike Rodriguez, Construction Manager
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Steps Section -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">Construction Security Implementation</h2>
          <p class="text-lg text-muted">
            Our systematic approach ensures effective security coverage throughout all phases of construction projects.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Step 1 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">1</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Site Assessment</h3>
            <p class="text-muted">
              Comprehensive evaluation of construction site security needs, equipment types, and specialized requirements for different construction phases.
            </p>
          </div>

          <!-- Step 2 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">2</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Security Planning</h3>
            <p class="text-muted">
              Development of construction-specific security protocols, equipment protection strategies, and flexible scheduling to match project timelines.
            </p>
          </div>

          <!-- Step 3 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">3</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Officer Deployment</h3>
            <p class="text-muted">
              Placement of trained security officers with construction experience and knowledge of equipment types, site layouts, and construction safety protocols.
            </p>
          </div>

          <!-- Step 4 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">4</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Project Completion</h3>
            <p class="text-muted">
              Continuous security coverage throughout construction phases with regular adjustments to match changing security needs and project requirements.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto">
          <h2 class="heading-lg text-text text-center mb-12">Construction Security FAQ</h2>
          
          <div class="space-y-6">
            <!-- FAQ 1 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                How do you protect construction equipment from theft?
              </h3>
              <p class="text-muted">
                Our officers are trained in construction equipment security, including equipment identification, tracking, and protection protocols. We use specialized knowledge of construction equipment types and implement security measures tailored to each site's specific equipment and layout.
              </p>
            </div>

            <!-- FAQ 2 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                Can you provide security for different construction phases?
              </h3>
              <p class="text-muted">
                Yes, we adapt our security services to different construction phases. Early phases focus on equipment and material protection, while later phases may require different security measures. Our flexible approach ensures appropriate security coverage throughout the entire construction timeline.
              </p>
            </div>

            <!-- FAQ 3 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                How do you coordinate with construction workers and contractors?
              </h3>
              <p class="text-muted">
                Our officers work closely with construction managers, site supervisors, and contractors to ensure security measures don't interfere with construction operations. We coordinate access control, worker safety, and security protocols while supporting the construction team's productivity.
              </p>
            </div>

            <!-- FAQ 4 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                What happens when the construction project is complete?
              </h3>
              <p class="text-muted">
                Our construction security services are designed to be temporary and flexible. When the project is complete, we can transition to permanent security services for the completed facility or end the temporary security coverage as needed. We provide seamless transitions based on your ongoing security requirements.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container text-center">
        <div class="max-w-4xl mx-auto">
          <h2 class="heading-lg text-text mb-4">Secure Your Construction Site</h2>
          <p class="text-lg text-muted mb-8 max-w-2xl mx-auto">
            Get specialized construction security services that understand construction environments and provide flexible, temporary security solutions for your building projects.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <router-link to="/contact" class="btn btn--primary">Request Construction Security Quote</router-link>
            <a href="tel:+15166408144" class="btn btn--secondary">Call (516) 640-8144</a>
          </div>

          <!-- Trust indicators -->
          <div class="flex flex-wrap justify-center items-center gap-8 mt-12 text-muted text-sm">
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span>Construction Training</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span>Equipment Protection</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span>200+ Sites Secured</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import EnhancedImage from '@/components/EnhancedImage.vue'
import { heroBanner, heroBannerMobile } from '@/assets/images.js'
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
