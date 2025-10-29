<template>
  <div class="security-patrol-page">
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
          alt="Security patrol officer with GPS-tracked vehicle"
          container-class="w-full h-full hidden md:block hero-image"
          image-class="w-full h-full object-cover"
          :lazy="false"
          :show-loading-icon="false"
        />
        <!-- Mobile hero image -->
        <EnhancedImage
          :src="heroBannerMobile"
          alt="Security patrol officer with GPS-tracked vehicle"
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
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
            <span class="text-white text-sm font-medium font-body">24/7 Security Patrol</span>
          </div>

          <!-- Main content in solid background card -->
          <div class="hero-card-lg p-8 lg:p-12">
            <h1 class="heading-xl text-white font-heading mb-4 text-shadow-lg">
              24/7 Mobile Security Patrol Services
            </h1>
            
            <p class="text-lg text-white/90 max-w-3xl mx-auto mb-8 font-body text-shadow">
              Professional mobile security patrol with GPS-tracked vehicles, real-time reporting, and rapid emergency response. Visible deterrence that protects your property around the clock.
            </p>

            <!-- Key metrics -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">200+</div>
                <div class="text-sm text-white/90 font-body">Properties Patrolled</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">3 min</div>
                <div class="text-sm text-white/90 font-body">Average Response</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">GPS</div>
                <div class="text-sm text-white/90 font-body">Vehicle Tracking</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">24/7</div>
                <div class="text-sm text-white/90 font-body">Coverage Available</div>
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
          <h2 class="heading-lg text-text mb-6">Why Properties Need Mobile Security Patrol</h2>
          <p class="text-lg text-muted mb-8">
            Static security measures aren't enough. Mobile patrols provide dynamic, visible deterrence and rapid response capabilities that static systems cannot match.
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
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Limited Coverage</h3>
            <p class="text-muted">
              Fixed security systems and cameras only cover specific areas, leaving blind spots and vulnerable zones that criminals can exploit for unauthorized access.
            </p>
          </div>

          <!-- Challenge 2 -->
          <div class="card text-center p-8">
            <div class="w-16 h-16 bg-danger/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Slow Response Times</h3>
            <p class="text-muted">
              When security incidents occur, every minute counts. Without on-site or nearby patrol officers, response times can be too slow to prevent losses or apprehend suspects.
            </p>
          </div>

          <!-- Challenge 3 -->
          <div class="card text-center p-8">
            <div class="w-16 h-16 bg-danger/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">No Visible Deterrence</h3>
            <p class="text-muted">
              Criminals avoid properties with visible security presence. Without regular patrol presence, your property appears unprotected and becomes a target for criminal activity.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Solution Section -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">Our Mobile Security Patrol Solution</h2>
          <p class="text-lg text-muted mb-8">
            ECIS mobile patrol services provide comprehensive property protection with trained officers, GPS-tracked vehicles, and real-time communication systems.
          </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <!-- Solution Features -->
          <div class="space-y-8">
            <!-- Feature 1 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">GPS-Tracked Patrol Vehicles</h3>
                <p class="text-muted">
                  All patrol vehicles are equipped with real-time GPS tracking, allowing supervisors and clients to monitor patrol routes, timing, and location verification for complete transparency.
                </p>
              </div>
            </div>

            <!-- Feature 2 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Real-Time Reporting</h3>
                <p class="text-muted">
                  Officers submit digital reports during each patrol, documenting observations, incidents, and property conditions with timestamps and photo documentation for complete accountability.
                </p>
              </div>
            </div>

            <!-- Feature 3 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Rapid Emergency Response</h3>
                <p class="text-muted">
                  Officers respond to alarms, emergencies, and security incidents within minutes, providing immediate on-scene assessment and coordination with emergency services when needed.
                </p>
              </div>
            </div>

            <!-- Feature 4 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Licensed & Trained Officers</h3>
                <p class="text-muted">
                  All patrol officers are state-licensed, professionally trained, and experienced in patrol procedures, emergency response, and customer service with ongoing education requirements.
                </p>
              </div>
            </div>
          </div>

          <!-- Patrol Schedule Example -->
          <div class="card p-8 bg-action/5 border-action/20">
            <h3 class="text-2xl font-heading font-bold text-text mb-6 text-center">Patrol Service Options</h3>
            
            <!-- Service Tiers -->
            <div class="space-y-4">
              <div class="bg-surface rounded-lg p-4 border border-action/10">
                <div class="flex justify-between items-center mb-2">
                  <h4 class="font-heading font-semibold text-text">Basic Patrol</h4>
                  <span class="text-action font-semibold">2-4 Checks/Night</span>
                </div>
                <p class="text-sm text-muted">Random patrol checks during overnight hours with incident reporting.</p>
              </div>
              
              <div class="bg-surface rounded-lg p-4 border border-action/10">
                <div class="flex justify-between items-center mb-2">
                  <h4 class="font-heading font-semibold text-text">Enhanced Patrol</h4>
                  <span class="text-action font-semibold">Hourly Checks</span>
                </div>
                <p class="text-sm text-muted">Scheduled hourly patrols with detailed property inspections and reporting.</p>
              </div>
              
              <div class="bg-surface rounded-lg p-4 border border-action/10">
                <div class="flex justify-between items-center mb-2">
                  <h4 class="font-heading font-semibold text-text">Premium Patrol</h4>
                  <span class="text-action font-semibold">24/7 Coverage</span>
                </div>
                <p class="text-sm text-muted">Round-the-clock patrol coverage with immediate alarm response and emergency services.</p>
              </div>
            </div>

            <div class="mt-8 p-4 bg-surface rounded-lg border border-action/10">
              <p class="text-sm text-muted italic text-center">
                "The patrol service has eliminated break-ins completely. We see the officers regularly and feel much safer."
              </p>
              <p class="text-sm font-medium text-text text-center mt-2">
                — Jennifer Walsh, Business Owner
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Technology Section -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">Advanced Patrol Technology</h2>
          <p class="text-lg text-muted">
            Our patrol services leverage cutting-edge technology to provide superior security coverage and accountability.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Tech Feature 1 -->
          <div class="card text-center p-6">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">GPS Tracking</h3>
            <p class="text-muted text-sm">Real-time vehicle location tracking with route verification and timing documentation.</p>
          </div>

          <!-- Tech Feature 2 -->
          <div class="card text-center p-6">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">Mobile Reporting</h3>
            <p class="text-muted text-sm">Digital incident reports with photos, timestamps, and GPS coordinates submitted in real-time.</p>
          </div>

          <!-- Tech Feature 3 -->
          <div class="card text-center p-6">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">Two-Way Radio</h3>
            <p class="text-muted text-sm">Direct communication with dispatch and emergency services for immediate response coordination.</p>
          </div>

          <!-- Tech Feature 4 -->
          <div class="card text-center p-6">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">Analytics Dashboard</h3>
            <p class="text-muted text-sm">Client portal with patrol history, incident trends, and performance metrics for transparency.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Steps Section -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">How Our Patrol Service Works</h2>
          <p class="text-lg text-muted">
            Our systematic approach ensures comprehensive coverage and reliable protection for your property.
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
              Comprehensive property evaluation to identify security risks, vulnerable areas, and optimal patrol routes and timing.
            </p>
          </div>

          <!-- Step 2 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">2</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Custom Patrol Plan</h3>
            <p class="text-muted">
              Development of customized patrol schedule with specific routes, checkpoints, and procedures tailored to your property.
            </p>
          </div>

          <!-- Step 3 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">3</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Officer Assignment</h3>
            <p class="text-muted">
              Assignment of trained, licensed officers familiar with your property and equipped with GPS-tracked patrol vehicles.
            </p>
          </div>

          <!-- Step 4 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">4</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Ongoing Service</h3>
            <p class="text-muted">
              Regular patrol execution with real-time reporting, incident response, and continuous service optimization.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto">
          <h2 class="heading-lg text-text text-center mb-12">Security Patrol FAQ</h2>
          
          <div class="space-y-6">
            <!-- FAQ 1 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                How often do patrol officers check my property?
              </h3>
              <p class="text-muted">
                Patrol frequency depends on your selected service level and security needs. Options range from 2-4 random checks per night to hourly patrols or 24/7 coverage. We customize the schedule based on your property's risk assessment and budget.
              </p>
            </div>

            <!-- FAQ 2 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                What happens if officers discover a security issue?
              </h3>
              <p class="text-muted">
                Officers immediately assess the situation, secure the area if safe to do so, and contact emergency services if needed. You're notified immediately with a detailed report including photos and recommendations. We coordinate with police for criminal activity.
              </p>
            </div>

            <!-- FAQ 3 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                Can I track patrol visits in real-time?
              </h3>
              <p class="text-muted">
                Yes, our GPS tracking system allows you to view patrol routes and timing through our client portal. You'll receive detailed reports after each patrol with timestamps, photos, and observations. This ensures complete transparency and accountability.
              </p>
            </div>

            <!-- FAQ 4 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                Are patrol officers armed and licensed?
              </h3>
              <p class="text-muted">
                All patrol officers are state-licensed, professionally trained, and bonded. Armed services are available where legally permitted and specifically requested. Officers receive ongoing training in de-escalation, emergency response, and legal procedures.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container text-center">
        <div class="max-w-4xl mx-auto">
          <h2 class="heading-lg text-text mb-4">Start Your Patrol Service Today</h2>
          <p class="text-lg text-muted mb-8 max-w-2xl mx-auto">
            Get immediate mobile security patrol coverage for your property with GPS tracking, real-time reporting, and rapid emergency response.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <router-link to="/contact" class="btn btn--primary">Request Patrol Service Quote</router-link>
            <a href="tel:+15612490897" class="btn btn--secondary">Call (561) 249-0897</a>
          </div>

          <!-- Trust indicators -->
          <div class="flex flex-wrap justify-center items-center gap-8 mt-12 text-muted text-sm">
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span>Licensed & Bonded</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span>GPS Tracked Vehicles</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span>3-Minute Response Time</span>
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
