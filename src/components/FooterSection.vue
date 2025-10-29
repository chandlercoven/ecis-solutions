<template>
  <footer class="bg-surface pt-16 pb-8 border-t border-border/20 overflow-hidden">
    <div class="container">
      <!-- Footer Content -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
        <!-- Company Info -->
        <div>
          <div class="flex items-start space-x-3 mb-4">
            <EnhancedImage
              src="/logo.png"
              alt="ECIS Solutions Logo"
              container-class="h-12 w-auto mt-1"
              image-class="h-12 w-auto"
              :lazy="false"
              :show-loading-icon="false"
              :scale-on-load="false"
            />
            <div class="flex flex-col">
              <span class="text-text font-heading font-bold text-lg leading-tight">
                ECIS Solutions
              </span>
              <span class="text-muted font-body text-xs font-medium tracking-wider uppercase mt-1">
                Professional Security Services
              </span>
            </div>
          </div>
          <p class="text-muted mb-4 text-sm leading-relaxed">
            We safeguard what matters most—your people, your property, your peace of mind.
          </p>
          <div class="space-y-2 text-muted text-sm">
            <p class="flex items-center">
              <span class="w-2 h-2 bg-accent rounded-full mr-2"></span>
              FL License #A 1700202
            </p>
            <p class="flex items-center">
              <span class="w-2 h-2 bg-accent rounded-full mr-2"></span>
              FL License #B 1900402
            </p>
            <p class="flex items-center">
              <span class="w-2 h-2 bg-accent rounded-full mr-2"></span>
              Fully Licensed & Bonded
            </p>
          </div>
        </div>

        <!-- Quick Links -->
        <div>
          <h3 class="text-text font-heading font-semibold mb-4">Quick Links</h3>
          <ul class="space-y-3">
            <li>
              <router-link to="/services" class="text-muted hover:text-action transition-colors duration-base text-sm">
                Security Services
              </router-link>
            </li>
            <li>
              <router-link to="/training" class="text-muted hover:text-action transition-colors duration-base text-sm">
                Training Academy
              </router-link>
            </li>
            <li>
              <router-link to="/about" class="text-muted hover:text-action transition-colors duration-base text-sm">
                About Us
              </router-link>
            </li>
            <li>
              <router-link to="/contact" class="text-muted hover:text-action transition-colors duration-base text-sm">
                Contact
              </router-link>
            </li>
          </ul>
        </div>

        <!-- Services -->
        <div>
          <h3 class="text-text font-heading font-semibold mb-4">Our Services</h3>
          <ul class="space-y-3">
            <li>
              <router-link to="/services" class="text-muted hover:text-action transition-colors duration-base text-sm">
                HOA Security
              </router-link>
            </li>
            <li>
              <router-link to="/services" class="text-muted hover:text-action transition-colors duration-base text-sm">
                Commercial Security
              </router-link>
            </li>
            <li>
              <router-link to="/services" class="text-muted hover:text-action transition-colors duration-base text-sm">
                Private Investigations
              </router-link>
            </li>
            <li>
              <router-link to="/training" class="text-muted hover:text-action transition-colors duration-base text-sm">
                Security Training
              </router-link>
            </li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div>
          <h3 class="text-text font-heading font-semibold mb-4">Contact Us</h3>
          <ul class="space-y-4">
            <li class="flex items-start space-x-3">
              <svg class="w-5 h-5 text-action mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <div>
                <p class="text-muted text-sm">24/7 Call Now</p>
                <a href="tel:+15612490897" class="text-text hover:text-action transition-colors duration-base font-medium">
                  (561) 249-0897
                </a>
              </div>
            </li>
            <li class="flex items-start space-x-3">
              <svg class="w-5 h-5 text-action mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <div>
                <a href="mailto:michael@ecissolutions.com" class="text-text hover:text-action transition-colors duration-base font-medium text-sm">
                  michael@ecissolutions.com
                </a>
              </div>
            </li>
            <li class="flex items-start space-x-3">
              <svg class="w-5 h-5 text-action mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <div class="text-muted text-sm">
                <p>Greater Metro Area</p>
                <p>Florida Statewide</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- CTA Section -->
      <div class="bg-bg rounded-xl p-8 mb-12 border border-border/20">
        <div class="text-center">
          <h3 class="text-text font-heading font-semibold text-xl mb-3">
            Ready to Secure Your Property?
          </h3>
          <p class="text-muted mb-6 max-w-2xl mx-auto">
            Get a free security assessment and discover how we can protect what matters most to you.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <router-link to="/contact" class="btn btn--primary">
              Schedule Free Assessment
            </router-link>
            <a href="tel:+15612490897" class="btn btn--premium">
              Call (561) 249-0897
            </a>
          </div>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="pt-8 border-t border-border/20">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
          <div class="text-center md:text-left">
            <p class="text-muted text-sm">
              © 2024 ECIS Solutions. All rights reserved.
            </p>
            <p class="text-muted text-xs mt-1">
              Licensed Security Services • Florida Statewide Coverage
            </p>
          </div>
          
          <!-- Social Links -->
          <div class="flex space-x-3">
            <a href="#" class="w-10 h-10 bg-surface-2 rounded-lg flex items-center justify-center hover:bg-action transition-colors duration-base group" aria-label="Follow us on Facebook">
              <svg class="w-5 h-5 text-text group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </a>
            <a href="#" class="w-10 h-10 bg-surface-2 rounded-lg flex items-center justify-center hover:bg-action transition-colors duration-base group" aria-label="Follow us on LinkedIn">
              <svg class="w-5 h-5 text-text group-hover:text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
import EnhancedImage from './EnhancedImage.vue'
// Using static image path

// No additional functionality needed - using router-based navigation
</script>
