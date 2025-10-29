<template>
  <div class="cctv-monitoring-page">
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
          alt="Professional CCTV monitoring center with multiple screens"
          container-class="w-full h-full hidden md:block hero-image"
          image-class="w-full h-full object-cover"
          :lazy="false"
          :show-loading-icon="false"
        />
        <!-- Mobile hero image -->
        <EnhancedImage
          :src="heroBannerMobile"
          alt="Professional CCTV monitoring center with multiple screens"
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
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
            <span class="text-white text-sm font-medium font-body">CCTV & Video Surveillance</span>
          </div>

          <!-- Main content in solid background card -->
          <div class="hero-card-lg p-8 lg:p-12">
            <h1 class="heading-xl text-white font-heading mb-4 text-shadow-lg">
              Advanced CCTV & 24/7 Video Surveillance Systems
            </h1>
            
            <p class="text-lg text-white/90 max-w-3xl mx-auto mb-8 font-body text-shadow">
              State-of-the-art video surveillance systems with 24/7 professional monitoring, AI detection technology, and cloud-based storage for complete property protection.
            </p>

            <!-- Key metrics -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">4K</div>
                <div class="text-sm text-white/90 font-body">Ultra HD Quality</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">24/7</div>
                <div class="text-sm text-white/90 font-body">Live Monitoring</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">AI</div>
                <div class="text-sm text-white/90 font-body">Smart Detection</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">Cloud</div>
                <div class="text-sm text-white/90 font-body">Secure Storage</div>
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
          <h2 class="heading-lg text-text mb-6">Security Blind Spots & Monitoring Challenges</h2>
          <p class="text-lg text-muted mb-8">
            Traditional security measures leave critical gaps in coverage and response capabilities that modern video surveillance systems can eliminate.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Challenge 1 -->
          <div class="card text-center p-8">
            <div class="w-16 h-16 bg-danger/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Limited Coverage</h3>
            <p class="text-muted">
              Gaps in surveillance coverage create blind spots where criminal activity can occur undetected, leaving properties vulnerable to theft and vandalism.
            </p>
          </div>

          <!-- Challenge 2 -->
          <div class="card text-center p-8">
            <div class="w-16 h-16 bg-danger/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Delayed Response</h3>
            <p class="text-muted">
              Without real-time monitoring, security incidents are discovered hours or days later when it's too late to prevent losses or apprehend suspects.
            </p>
          </div>

          <!-- Challenge 3 -->
          <div class="card text-center p-8">
            <div class="w-16 h-16 bg-danger/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Poor Video Quality</h3>
            <p class="text-muted">
              Low-resolution cameras and inadequate lighting result in unusable footage that cannot identify suspects or provide evidence for investigations and insurance claims.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Solution Section -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">Our Advanced CCTV & Monitoring Solution</h2>
          <p class="text-lg text-muted mb-8">
            ECIS delivers cutting-edge video surveillance systems with professional monitoring services for comprehensive property protection.
          </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <!-- Solution Features -->
          <div class="space-y-8">
            <!-- Feature 1 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">4K Ultra HD Cameras</h3>
                <p class="text-muted">
                  Crystal-clear 4K resolution cameras with infrared night vision, wide-angle coverage, and weather-resistant housing for optimal image quality in all conditions.
                </p>
              </div>
            </div>

            <!-- Feature 2 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">AI-Powered Detection</h3>
                <p class="text-muted">
                  Advanced artificial intelligence identifies human movement, vehicle activity, and suspicious behavior with real-time alerts to reduce false alarms and improve response times.
                </p>
              </div>
            </div>

            <!-- Feature 3 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Cloud Storage & Backup</h3>
                <p class="text-muted">
                  Secure cloud storage with automated backup ensures your video footage is protected and accessible from anywhere, with customizable retention periods and easy retrieval.
                </p>
              </div>
            </div>

            <!-- Feature 4 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Mobile App Control</h3>
                <p class="text-muted">
                  Remote access through mobile apps allows you to view live feeds, receive instant alerts, and control cameras from anywhere with secure login and user permissions.
                </p>
              </div>
            </div>
          </div>

          <!-- Technology Showcase -->
          <div class="card p-8 bg-action/5 border-action/20">
            <h3 class="text-2xl font-heading font-bold text-text mb-6 text-center">CCTV System Capabilities</h3>
            
            <div class="space-y-6">
              <div class="flex justify-between items-center">
                <span class="text-muted font-medium">Video Resolution</span>
                <span class="text-2xl font-heading font-bold text-action">4K UHD</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-muted font-medium">Storage Capacity</span>
                <span class="text-2xl font-heading font-bold text-action">Unlimited</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-muted font-medium">Night Vision Range</span>
                <span class="text-2xl font-heading font-bold text-action">150ft</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-muted font-medium">Motion Detection</span>
                <span class="text-2xl font-heading font-bold text-action">AI-Powered</span>
              </div>
            </div>

            <div class="mt-8 p-4 bg-surface rounded-lg border border-action/10">
              <p class="text-sm text-muted italic text-center">
                "The CCTV system caught the break-in attempt and alerted us immediately. The video quality helped police identify and arrest the suspects."
              </p>
              <p class="text-sm font-medium text-text text-center mt-2">
                — David Chen, Warehouse Manager
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Camera Types Section -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">Professional Camera Systems</h2>
          <p class="text-lg text-muted">
            Choose from a comprehensive range of camera types designed for specific security needs and environments.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Dome Cameras -->
          <div class="card text-center p-6 hover:border-action/50 transition-colors">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z" />
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">Dome Cameras</h3>
            <p class="text-muted text-sm">Vandal-resistant indoor/outdoor cameras with 360° coverage and discreet design.</p>
          </div>

          <!-- Bullet Cameras -->
          <div class="card text-center p-6 hover:border-action/50 transition-colors">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">Bullet Cameras</h3>
            <p class="text-muted text-sm">Long-range outdoor cameras with powerful zoom and infrared night vision.</p>
          </div>

          <!-- PTZ Cameras -->
          <div class="card text-center p-6 hover:border-action/50 transition-colors">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">PTZ Cameras</h3>
            <p class="text-muted text-sm">Pan, tilt, zoom cameras with remote control and automated tracking capabilities.</p>
          </div>

          <!-- Hidden Cameras -->
          <div class="card text-center p-6 hover:border-action/50 transition-colors">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21" />
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">Covert Cameras</h3>
            <p class="text-muted text-sm">Discrete surveillance cameras for sensitive areas and undercover monitoring.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Steps Section -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">CCTV Installation & Setup Process</h2>
          <p class="text-lg text-muted">
            Our systematic approach ensures optimal camera placement and system configuration for maximum security coverage.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Step 1 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">1</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Site Survey</h3>
            <p class="text-muted">
              Comprehensive property assessment to identify optimal camera locations, coverage areas, and potential blind spots.
            </p>
          </div>

          <!-- Step 2 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">2</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">System Design</h3>
            <p class="text-muted">
              Custom surveillance system design with camera specifications, network infrastructure, and storage requirements.
            </p>
          </div>

          <!-- Step 3 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">3</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Installation</h3>
            <p class="text-muted">
              Professional installation with proper mounting, wiring, and network configuration by certified technicians.
            </p>
          </div>

          <!-- Step 4 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">4</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Monitoring Setup</h3>
            <p class="text-muted">
              System testing, user training, and activation of 24/7 professional monitoring services with mobile app access.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto">
          <h2 class="heading-lg text-text text-center mb-12">CCTV System FAQ</h2>
          
          <div class="space-y-6">
            <!-- FAQ 1 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                What's the difference between 1080p and 4K cameras?
              </h3>
              <p class="text-muted">
                4K cameras provide 4 times the resolution of 1080p, delivering crystal-clear detail that's essential for identifying faces, license plates, and other critical evidence. While 1080p may be sufficient for general monitoring, 4K is recommended for areas requiring detailed identification.
              </p>
            </div>

            <!-- FAQ 2 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                How long is video footage stored and can I access it remotely?
              </h3>
              <p class="text-muted">
                Video footage is stored in secure cloud servers with customizable retention periods from 30 days to 1 year. You can access live feeds and recorded footage from anywhere using our mobile app or web portal with secure login credentials.
              </p>
            </div>

            <!-- FAQ 3 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                Do cameras work in complete darkness and bad weather?
              </h3>
              <p class="text-muted">
                Our cameras feature advanced infrared night vision with ranges up to 150 feet and weather-resistant housing rated for extreme conditions. They maintain clear visibility in complete darkness, rain, snow, and high winds.
              </p>
            </div>

            <!-- FAQ 4 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                Can the system integrate with existing security equipment?
              </h3>
              <p class="text-muted">
                Yes, our CCTV systems integrate with most existing security systems including alarms, access control, and intercom systems. We can also upgrade older camera systems while utilizing existing wiring and infrastructure where possible.
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
          <h2 class="heading-lg text-text mb-4">Upgrade Your Property's Surveillance</h2>
          <p class="text-lg text-muted mb-8 max-w-2xl mx-auto">
            Get a free CCTV system consultation and discover how advanced video surveillance can provide 24/7 protection for your property.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <router-link to="/contact" class="btn btn--primary">Request CCTV Consultation</router-link>
            <a href="tel:+15612490897" class="btn btn--secondary">Call (561) 249-0897</a>
          </div>

          <!-- Trust indicators -->
          <div class="flex flex-wrap justify-center items-center gap-8 mt-12 text-muted text-sm">
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span>Professional Installation</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span>24/7 Monitoring Available</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span>Cloud Storage Included</span>
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

