<template>
  <footer class="bg-charcoal-dark pt-16 pb-8">
    <div class="container-custom">
      <!-- Footer Content -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
        <!-- Company Info -->
        <div>
          <div class="flex items-start space-x-3 mb-4">
            <img 
              src="/src/assets/ecis-logo2.png" 
              alt="East Coast Investigation Security Logo" 
              class="h-12 w-auto mt-1"
            >
            <div class="flex flex-col">
              <span class="text-white font-heading font-bold text-lg leading-tight">
                East Coast Investigation Security
              </span>
              <span class="text-silver-light font-body text-xs font-medium tracking-wider uppercase mt-1">
                Professional Security Services
              </span>
            </div>
          </div>
          <p class="text-silver-light mb-4">
            Professional security services protecting communities, businesses, and people across Florida.
          </p>
          <div class="space-y-2 text-silver-light text-sm">
            <p>FL License #B2800245</p>
            <p>FL PI License #A2800245</p>
          </div>
        </div>

        <!-- Quick Links -->
        <div>
          <h3 class="text-white font-heading font-semibold mb-4">Quick Links</h3>
          <ul class="space-y-2">
            <li>
              <a href="#services" @click="scrollToSection('services')" class="text-silver-light hover:text-electric-blue transition-colors">
                Security Services
              </a>
            </li>
            <li>
              <a href="#training" @click="scrollToSection('training')" class="text-silver-light hover:text-electric-blue transition-colors">
                Training Academy
              </a>
            </li>
            <li>
              <a href="#investigations" @click="scrollToSection('investigations')" class="text-silver-light hover:text-electric-blue transition-colors">
                Private Investigations
              </a>
            </li>
            <li>
              <a href="#about" @click="scrollToSection('about')" class="text-silver-light hover:text-electric-blue transition-colors">
                About Us
              </a>
            </li>
            <li>
              <a href="#contact" @click="scrollToSection('contact')" class="text-silver-light hover:text-electric-blue transition-colors">
                Contact
              </a>
            </li>
          </ul>
        </div>

        <!-- Services -->
        <div>
          <h3 class="text-white font-heading font-semibold mb-4">Our Services</h3>
          <ul class="space-y-2">
            <li>
              <a href="#services" class="text-silver-light hover:text-electric-blue transition-colors">
                HOA Security
              </a>
            </li>
            <li>
              <a href="#services" class="text-silver-light hover:text-electric-blue transition-colors">
                Commercial Security
              </a>
            </li>
            <li>
              <a href="#services" class="text-silver-light hover:text-electric-blue transition-colors">
                Event Security
              </a>
            </li>
            <li>
              <a href="#training" class="text-silver-light hover:text-electric-blue transition-colors">
                Class D Training
              </a>
            </li>
            <li>
              <a href="#training" class="text-silver-light hover:text-electric-blue transition-colors">
                Class G Training
              </a>
            </li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div>
          <h3 class="text-white font-heading font-semibold mb-4">Contact Us</h3>
          <ul class="space-y-3">
            <li class="flex items-start space-x-3">
              <svg class="w-5 h-5 text-electric-blue mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <div>
                <p class="text-silver-light">24/7 Emergency</p>
                <a href="tel:+13055551234" class="text-white hover:text-electric-blue transition-colors">
                  (305) 555-1234
                </a>
              </div>
            </li>
            <li class="flex items-start space-x-3">
              <svg class="w-5 h-5 text-electric-blue mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <div>
                <a href="mailto:info@ecissolutions.com" class="text-white hover:text-electric-blue transition-colors">
                  info@ecissolutions.com
                </a>
              </div>
            </li>
            <li class="flex items-start space-x-3">
              <svg class="w-5 h-5 text-electric-blue mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <div class="text-silver-light">
                <p>1234 Security Blvd</p>
                <p>Miami, FL 33101</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- Newsletter Signup -->
      <div class="bg-charcoal rounded-xl p-8 mb-12">
        <div class="grid lg:grid-cols-2 gap-6 items-center">
          <div>
            <h3 class="text-white font-heading font-semibold text-xl mb-2">
              Stay Updated
            </h3>
            <p class="text-silver-light">
              Get security tips, training updates, and company news delivered to your inbox.
            </p>
          </div>
          <form @submit.prevent="handleNewsletterSubmit" class="flex flex-col sm:flex-row gap-3">
            <input 
              type="email" 
              v-model="newsletterEmail"
              placeholder="Enter your email"
              required
              class="flex-1 px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/50 focus:border-electric-blue focus:bg-white/20 transition-colors"
            >
            <button type="submit" class="px-6 py-3 bg-gradient-cta text-white font-semibold rounded-lg hover:shadow-glow transition-all duration-300">
              Subscribe
            </button>
          </form>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="pt-8 border-t border-charcoal">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
          <p class="text-silver-light text-sm">
            © 2025 ECIS Solutions. All rights reserved.
          </p>
          
          <!-- Social Links -->
          <div class="flex space-x-4">
            <a href="#" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-electric-blue transition-colors group">
              <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </a>
            <a href="#" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-electric-blue transition-colors group">
              <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
              </svg>
            </a>
            <a href="#" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-electric-blue transition-colors group">
              <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
              </svg>
            </a>
            <a href="#" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-electric-blue transition-colors group">
              <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1112.324 0 6.162 6.162 0 01-12.324 0zM12 16a4 4 0 110-8 4 4 0 010 8zm4.965-10.405a1.44 1.44 0 112.881.001 1.44 1.44 0 01-2.881-.001z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
import { ref } from 'vue'

const newsletterEmail = ref('')

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

const handleNewsletterSubmit = () => {
  // Handle newsletter signup
  console.log('Newsletter signup:', newsletterEmail.value)
  newsletterEmail.value = ''
  // Show success message or handle API call
}
</script>
