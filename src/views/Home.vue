<template>
  <div class="home">
    <!-- Hero Section -->
    <section id="home" class="hero-section relative min-h-screen flex items-center justify-center overflow-hidden">
      <!-- Background Image/Video -->
      <div class="absolute inset-0">
        <div class="hero-background bg-gradient-to-r from-navy-900 via-navy-800 to-navy-900"></div>
        <div class="absolute inset-0 bg-black/50"></div>
      </div>
      
      <!-- Hero Content -->
      <div class="relative z-10 text-center text-white max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-6xl font-heading font-bold mb-6 leading-tight">
          Protecting Communities, Businesses & People with 
          <span class="text-electric-blue">Professional Security</span>
        </h1>
        <p class="text-xl md:text-2xl text-silver-400 mb-8 leading-relaxed">
          Trusted by HOAs, Commercial Properties, and Executive Clients Across Florida
        </p>
        
        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <button @click="scrollToSection('contact')"
                  class="bg-electric-blue hover:bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
            Secure My Property
          </button>
          <button @click="scrollToSection('training')"
                  class="border-2 border-electric-blue text-electric-blue hover:bg-electric-blue hover:text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105">
            Start My Security Career
          </button>
        </div>
      </div>

      <!-- Scroll Indicator -->
      <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-silver-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
      </div>
    </section>

    <!-- Core Services Section -->
    <section id="services" class="py-20 bg-slate-100">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-heading font-bold text-navy-900 mb-4">
            Our Core Services
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Comprehensive security solutions tailored to protect what matters most to you
          </p>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- HOA & Community Security -->
          <div class="service-card bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
            <div class="text-electric-blue mb-4">
              <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-navy-900 mb-3">
              HOA & Community Security
            </h3>
            <p class="text-gray-600 mb-4">
              Dedicated patrol services and access control for residential communities and homeowner associations.
            </p>
            <button class="text-electric-blue font-semibold hover:text-blue-600 transition-colors">
              Learn More →
            </button>
          </div>

          <!-- Commercial Property Security -->
          <div class="service-card bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
            <div class="text-electric-blue mb-4">
              <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-navy-900 mb-3">
              Commercial Property Security
            </h3>
            <p class="text-gray-600 mb-4">
              Professional security services for office buildings, retail centers, and industrial properties.
            </p>
            <button class="text-electric-blue font-semibold hover:text-blue-600 transition-colors">
              Learn More →
            </button>
          </div>

          <!-- Private Investigations -->
          <div class="service-card bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
            <div class="text-electric-blue mb-4">
              <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-navy-900 mb-3">
              Private Investigations
            </h3>
            <p class="text-gray-600 mb-4">
              Confidential investigative services for corporate, legal, and personal matters.
            </p>
            <button class="text-electric-blue font-semibold hover:text-blue-600 transition-colors">
              Learn More →
            </button>
          </div>

          <!-- Event/Executive Protection -->
          <div class="service-card bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
            <div class="text-electric-blue mb-4">
              <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-navy-900 mb-3">
              Event/Executive Protection
            </h3>
            <p class="text-gray-600 mb-4">
              Elite protection services for high-profile events and executive personal security.
            </p>
            <button class="text-electric-blue font-semibold hover:text-blue-600 transition-colors">
              Learn More →
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Training & Licensing Academy Section -->
    <section id="training" class="py-20 bg-navy-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <!-- Content -->
          <div class="text-white">
            <h2 class="text-4xl font-heading font-bold mb-6">
              Launch Your Career in Security
            </h2>
            <p class="text-xl text-silver-400 mb-6">
              ECIS Academy now offering Class D & G licenses with comprehensive training programs designed to prepare you for a successful career in security.
            </p>
            <ul class="space-y-4 mb-8">
              <li class="flex items-center">
                <svg class="w-6 h-6 text-electric-blue mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Professional certification programs
              </li>
              <li class="flex items-center">
                <svg class="w-6 h-6 text-electric-blue mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Experienced instructors
              </li>
              <li class="flex items-center">
                <svg class="w-6 h-6 text-electric-blue mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Job placement assistance
              </li>
            </ul>
            <button class="bg-electric-blue hover:bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300">
              View Training Schedule
            </button>
          </div>

          <!-- Academy Image Placeholder -->
          <div class="relative">
            <div class="bg-slate-700 rounded-lg h-80 flex items-center justify-center">
              <div class="text-center text-silver-400">
                <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
                <p>ECIS Academy Facility</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About / Trust Section -->
    <section id="about" class="py-20 bg-slate-100">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <!-- Team Photo Placeholder -->
          <div class="relative">
            <div class="bg-slate-300 rounded-lg h-80 flex items-center justify-center">
              <div class="text-center text-slate-600">
                <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <p>ECIS Leadership Team</p>
              </div>
            </div>
          </div>

          <!-- About Content -->
          <div>
            <h2 class="text-4xl font-heading font-bold text-navy-900 mb-6">
              Trusted Security Professionals
            </h2>
            <p class="text-xl text-gray-600 mb-8">
              With over two decades of experience, ECIS has built a reputation for excellence in security services across Florida.
            </p>
            
            <!-- Stats -->
            <div class="grid grid-cols-2 gap-6 mb-8">
              <div class="text-center">
                <div class="text-3xl font-heading font-bold text-electric-blue mb-2">20+</div>
                <div class="text-gray-600">Years Experience</div>
              </div>
              <div class="text-center">
                <div class="text-3xl font-heading font-bold text-electric-blue mb-2">100%</div>
                <div class="text-gray-600">Licensed & Insured</div>
              </div>
              <div class="text-center">
                <div class="text-3xl font-heading font-bold text-electric-blue mb-2">24/7</div>
                <div class="text-gray-600">Coverage Available</div>
              </div>
              <div class="text-center">
                <div class="text-3xl font-heading font-bold text-electric-blue mb-2">FL</div>
                <div class="text-gray-600">Statewide Coverage</div>
              </div>
            </div>

            <!-- Shield Icon Watermark -->
            <div class="relative">
              <div class="absolute -top-4 -right-4 text-electric-blue/10">
                <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.4 16,13V16C16,16.6 15.6,17 15,17H9C8.4,17 8,16.6 8,16V13C8,12.4 8.4,11.5 9,11.5V10C9,8.6 10.6,7 12,7M12,8.2C11.2,8.2 10.2,8.7 10.2,10V11.5H13.8V10C13.8,8.7 12.8,8.2 12,8.2Z" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-navy-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-heading font-bold text-white mb-4">
            What Our Clients Say
          </h2>
          <p class="text-xl text-silver-400 max-w-3xl mx-auto">
            Trusted by communities, businesses, and individuals across Florida
          </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid md:grid-cols-3 gap-8">
          <!-- HOA Board Testimonial -->
          <div class="bg-slate-800 rounded-xl p-8">
            <div class="text-electric-blue mb-4">
              <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
              </svg>
            </div>
            <p class="text-white mb-6">
              "ECIS has provided exceptional security services for our community. Their professional approach and reliable patrol services have significantly improved our residents' peace of mind."
            </p>
            <div class="text-silver-400">
              <div class="font-semibold">Sarah Johnson</div>
              <div class="text-sm">HOA Board President</div>
            </div>
          </div>

          <!-- Property Manager Testimonial -->
          <div class="bg-slate-800 rounded-xl p-8">
            <div class="text-electric-blue mb-4">
              <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
              </svg>
            </div>
            <p class="text-white mb-6">
              "As a property manager, I need security services I can rely on. ECIS consistently delivers professional, responsive service that protects our tenants and property."
            </p>
            <div class="text-silver-400">
              <div class="font-semibold">Michael Rodriguez</div>
              <div class="text-sm">Commercial Property Manager</div>
            </div>
          </div>

          <!-- Student Testimonial -->
          <div class="bg-slate-800 rounded-xl p-8">
            <div class="text-electric-blue mb-4">
              <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
              </svg>
            </div>
            <p class="text-white mb-6">
              "The ECIS Academy training program was comprehensive and practical. The instructors prepared me well for my career in security, and I secured employment immediately after graduation."
            </p>
            <div class="text-silver-400">
              <div class="font-semibold">David Thompson</div>
              <div class="text-sm">Academy Graduate</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact / CTA Footer Section -->
    <section id="contact" class="py-20 bg-slate-100">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- CTA Banner -->
        <div class="text-center mb-16">
          <h2 class="text-4xl font-heading font-bold text-navy-900 mb-4">
            Schedule Your Free Security Consultation Today
          </h2>
          <p class="text-xl text-gray-600">
            Let us help you create a safer environment for your community or business
          </p>
        </div>

        <!-- Contact Section -->
        <div class="grid lg:grid-cols-2 gap-12">
          <!-- Contact Form -->
          <div>
            <h3 class="text-2xl font-heading font-semibold text-navy-900 mb-6">
              Get in Touch
            </h3>
            <form class="space-y-6">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-electric-blue focus:border-transparent">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-electric-blue focus:border-transparent">
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Service Type</label>
                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-electric-blue focus:border-transparent">
                  <option>Select a service</option>
                  <option>HOA & Community Security</option>
                  <option>Commercial Property Security</option>
                  <option>Private Investigation</option>
                  <option>Event/Executive Protection</option>
                  <option>Training Academy</option>
                </select>
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-electric-blue focus:border-transparent"></textarea>
              </div>
              <button type="submit" class="w-full bg-electric-blue hover:bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors duration-300">
                Send Message
              </button>
            </form>
          </div>

          <!-- Office Location & Map -->
          <div>
            <h3 class="text-2xl font-heading font-semibold text-navy-900 mb-6">
              Office Location
            </h3>
            <div class="space-y-4 mb-8">
              <div class="flex items-start">
                <svg class="w-6 h-6 text-electric-blue mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <div>
                  <div class="font-semibold text-navy-900">Address</div>
                  <div class="text-gray-600">123 Security Blvd<br>Orlando, FL 32801</div>
                </div>
              </div>
              <div class="flex items-start">
                <svg class="w-6 h-6 text-electric-blue mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <div>
                  <div class="font-semibold text-navy-900">Phone</div>
                  <div class="text-gray-600">(407) 555-ECIS</div>
                </div>
              </div>
              <div class="flex items-start">
                <svg class="w-6 h-6 text-electric-blue mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <div>
                  <div class="font-semibold text-navy-900">Email</div>
                  <div class="text-gray-600">info@ecis-solutions.com</div>
                </div>
              </div>
            </div>

            <!-- Map Placeholder -->
            <div class="bg-slate-300 rounded-lg h-64 flex items-center justify-center">
              <div class="text-center text-slate-600">
                <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                </svg>
                <p>Google Maps Integration</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-navy-900 text-white py-12">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-4 gap-8">
          <!-- Company Info -->
          <div>
            <h3 class="text-xl font-heading font-bold mb-4">ECIS</h3>
            <p class="text-silver-400 mb-4">
              Professional security services protecting communities, businesses, and people across Florida.
            </p>
            <div class="flex space-x-4">
              <a href="#" class="text-silver-400 hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                </svg>
              </a>
              <a href="#" class="text-silver-400 hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                </svg>
              </a>
              <a href="#" class="text-silver-400 hover:text-white">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
              </a>
            </div>
          </div>

          <!-- Services -->
          <div>
            <h3 class="text-lg font-heading font-semibold mb-4">Services</h3>
            <ul class="space-y-2 text-silver-400">
              <li><a href="#" class="hover:text-white">HOA Security</a></li>
              <li><a href="#" class="hover:text-white">Commercial Security</a></li>
              <li><a href="#" class="hover:text-white">Private Investigation</a></li>
              <li><a href="#" class="hover:text-white">Executive Protection</a></li>
            </ul>
          </div>

          <!-- Training -->
          <div>
            <h3 class="text-lg font-heading font-semibold mb-4">Training</h3>
            <ul class="space-y-2 text-silver-400">
              <li><a href="#" class="hover:text-white">Class D License</a></li>
              <li><a href="#" class="hover:text-white">Class G License</a></li>
              <li><a href="#" class="hover:text-white">Career Placement</a></li>
              <li><a href="#" class="hover:text-white">Academy Info</a></li>
            </ul>
          </div>

          <!-- Contact -->
          <div>
            <h3 class="text-lg font-heading font-semibold mb-4">Contact</h3>
            <ul class="space-y-2 text-silver-400">
              <li>(407) 555-ECIS</li>
              <li>info@ecis-solutions.com</li>
              <li>123 Security Blvd</li>
              <li>Orlando, FL 32801</li>
            </ul>
          </div>
        </div>

        <div class="border-t border-slate-700 mt-8 pt-8 text-center text-silver-400">
          <p>&copy; 2024 ECIS Solutions. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup>
const scrollToSection = (sectionId) => {
  const element = document.getElementById(sectionId)
  if (element) {
    const offset = 80 // Account for fixed nav height
    const elementPosition = element.offsetTop - offset
    window.scrollTo({
      top: elementPosition,
      behavior: 'smooth'
    })
  }
}
</script>

<style scoped>
.hero-background {
  background-image: 
    linear-gradient(135deg, #1e293b 0%, #0f172a 100%),
    url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23ffffff" fill-opacity="0.05"><circle cx="30" cy="30" r="1"/></g></svg>');
  animation: pulse 4s ease-in-out infinite;
}

@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.8; }
}

.service-card:hover {
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Parallax effect for sections */
.hero-section {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
