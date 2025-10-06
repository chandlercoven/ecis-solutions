<template>
  <div class="home">
    <!-- Hero Section -->
    <HeroSection />

    <!-- Proof/Stats Section -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
          <div class="text-center">
            <div class="text-3xl lg:text-4xl font-heading font-bold text-action mb-2">25+</div>
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
            <div class="w-20 h-20 rounded-xl overflow-hidden mx-auto mb-4 shadow-lg">
              <EnhancedImage
                :src="gpsMonitoring"
                alt="GPS tracking system showing real-time officer locations"
                container-class="w-full h-full"
                image-class="w-full h-full object-cover"
                :lazy="true"
                :show-loading-icon="false"
              />
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">GPS Tracking</h3>
            <p class="text-muted text-sm">Real-time officer location monitoring</p>
          </div>

          <div class="text-center">
            <div class="w-20 h-20 rounded-xl overflow-hidden mx-auto mb-4 shadow-lg">
              <EnhancedImage
                :src="cctvMonitoring"
                alt="CCTV surveillance system monitoring property"
                container-class="w-full h-full"
                image-class="w-full h-full object-cover"
                :lazy="true"
                :show-loading-icon="false"
              />
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">CCTV Monitoring</h3>
            <p class="text-muted text-sm">24/7 surveillance systems</p>
          </div>

          <div class="text-center">
            <div class="w-20 h-20 rounded-xl overflow-hidden mx-auto mb-4 shadow-lg">
              <EnhancedImage
                :src="digitalReports"
                alt="Digital incident reporting system interface"
                container-class="w-full h-full"
                image-class="w-full h-full object-cover"
                :lazy="true"
                :show-loading-icon="false"
              />
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">Digital Reports</h3>
            <p class="text-muted text-sm">Instant incident documentation</p>
          </div>

          <div class="text-center">
            <div class="w-20 h-20 rounded-xl overflow-hidden mx-auto mb-4 shadow-lg">
              <EnhancedImage
                :src="realTimeAlert"
                alt="Real-time security alert notification system"
                container-class="w-full h-full"
                image-class="w-full h-full object-cover"
                :lazy="true"
                :show-loading-icon="false"
              />
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">Real-Time Alerts</h3>
            <p class="text-muted text-sm">Instant incident notifications</p>
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
          <p>Security services available 24/7 • Licensed & Bonded • Response time: 3 minutes</p>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import HeroSection from '../components/HeroSection.vue'
import ServicesSection from '../components/ServicesSection.vue'
import TestimonialsSection from '../components/TestimonialsSection.vue'
import EnhancedImage from '../components/EnhancedImage.vue'
import { gpsMonitoring, cctvMonitoring, digitalReports, realTimeAlert } from '@/assets/images.js'
</script>
