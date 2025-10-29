<template>
  <div class="contact-page">
    <!-- Contact Hero -->
    <section class="hero-section relative min-h-[60vh] flex items-center justify-center animate-on-scroll pt-24 sm:pt-20 lg:pt-24">
      <div class="absolute inset-0 z-0">
        <!-- Enhanced overlay layers -->
        <div class="absolute inset-0 bg-gradient-to-b from-bg/40 via-bg/70 to-bg/90 z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-bg/30 via-transparent to-bg/30 z-20"></div>
        <div class="absolute inset-0 bg-black/20 z-30"></div>
        
        <!-- Desktop hero image -->
        <img 
          src="@/assets/hero-banner.jpg"
          alt="ECIS security command center with monitoring equipment"
          class="w-full h-full object-cover hidden md:block"
        >
        <!-- Mobile hero image -->
        <img 
          src="@/assets/hero-banner-mobile.jpg"
          alt="ECIS security command center with monitoring equipment"
          class="w-full h-full object-cover block md:hidden"
        >
      </div>

      <div class="relative z-20 container text-center">
        <div class="max-w-4xl mx-auto">
          <!-- Solid background badge -->
          <div class="inline-flex items-center space-x-2 sm:space-x-3 hero-card-sm mb-6 mt-6 sm:mt-4">
            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <span class="text-white text-xs sm:text-sm font-medium font-body">Available 24/7</span>
          </div>

          <!-- Main content in solid background card -->
          <div class="hero-card-lg p-8 lg:p-12">
            <h1 class="heading-xl text-white font-heading mb-4 text-shadow-lg">
              Get Your Free Security Assessment
            </h1>
            
            <p class="text-lg text-white/90 max-w-3xl mx-auto font-body text-shadow">
              Ready to protect what matters most? Contact our security experts for a consultation tailored to your specific needs.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Form + Info Section -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="grid lg:grid-cols-2 gap-12">
          <!-- Contact Form -->
          <div class="order-2 lg:order-1">
            <h3 class="text-2xl font-heading font-semibold text-text mb-6">Send Us a Message</h3>
            
            <form 
              action="https://formspree.io/f/YOUR_FORM_ID" 
              method="POST" 
              @submit.prevent="handleSubmit" 
              class="space-y-6"
            >
              <!-- Name Field -->
              <div>
                <label for="name" class="block text-sm font-medium text-text mb-2 text-left">
                  Full Name <span class="text-danger">*</span>
                </label>
                <input 
                  id="name"
                  v-model="form.name"
                  type="text"
                  required
                  class="input w-full"
                  placeholder="John Doe"
                  aria-describedby="name-help"
                />
                <p id="name-help" class="help-text mt-1">Please provide your full name for our records.</p>
              </div>

              <!-- Email Field -->
              <div>
                <label for="email" class="block text-sm font-medium text-text mb-2 text-left">
                  Email Address <span class="text-danger">*</span>
                </label>
                <input 
                  id="email"
                  v-model="form.email"
                  type="email"
                  required
                  class="input w-full"
                  placeholder="john@example.com"
                  aria-describedby="email-help"
                />
                <p id="email-help" class="help-text mt-1">We'll use this to send your security assessment results.</p>
              </div>

              <!-- Phone Field -->
              <div>
                <label for="phone" class="block text-sm font-medium text-text mb-2 text-left">
                  Phone Number <span class="text-danger">*</span>
                </label>
                <input 
                  id="phone"
                  v-model="form.phone"
                  type="tel"
                  required
                  class="input w-full"
                  placeholder="(555) 123-4567"
                  aria-describedby="phone-help"
                />
                <p id="phone-help" class="help-text mt-1">For urgent matters and appointment scheduling.</p>
              </div>

              <!-- Property Type -->
              <div>
                <label for="property-type" class="block text-sm font-medium text-text mb-2 text-left">
                  Property Type <span class="text-danger">*</span>
                </label>
                <select 
                  id="property-type"
                  v-model="form.propertyType"
                  required
                  class="input w-full"
                  aria-describedby="property-help"
                >
                  <option value="">Select Property Type</option>
                  <option value="residential">Residential Community</option>
                  <option value="commercial">Commercial Property</option>
                  <option value="hoa">HOA/Neighborhood</option>
                  <option value="construction">Construction Site</option>
                  <option value="event">Special Event</option>
                  <option value="personal">Personal Protection</option>
                </select>
                <p id="property-help" class="help-text mt-1">This helps us recommend the right security solution for your needs.</p>
              </div>

              <!-- Service Interest -->
              <div>
                <label for="service" class="block text-sm font-medium text-text mb-2 text-left">Service Interest</label>
                <select 
                  id="service"
                  v-model="form.service"
                  class="input w-full"
                  aria-describedby="service-help"
                >
                  <option value="">Select a Service</option>
                  <option value="patrol">Security Patrol</option>
                  <option value="investigations">Private Investigation</option>
                  <option value="training">Security Training</option>
                  <option value="executive">Executive Protection</option>
                  <option value="consultation">Security Consultation</option>
                </select>
                <p id="service-help" class="help-text mt-1">Optional: Let us know your primary area of interest.</p>
              </div>

              <!-- Message -->
              <div>
                <label for="message" class="block text-sm font-medium text-text mb-2 text-left">
                  Message <span class="text-danger">*</span>
                </label>
                <textarea 
                  id="message"
                  v-model="form.message"
                  rows="4"
                  required
                  class="input w-full resize-none"
                  placeholder="Tell us about your security needs and any specific concerns..."
                  aria-describedby="message-help"
                ></textarea>
                <p id="message-help" class="help-text mt-1">Please describe your security needs and any specific concerns.</p>
              </div>

              <!-- Submit Button -->
              <button 
                type="submit"
                :disabled="isSubmitting"
                class="btn btn--primary w-full"
                :aria-busy="isSubmitting"
              >
                <span v-if="!isSubmitting">Send Security Assessment Request</span>
                <span v-else class="flex items-center justify-center">
                  <svg class="animate-spin w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a7.646 7.646 0 100 15.292V12" />
                  </svg>
                  Sending Request...
                </span>
              </button>

              <!-- Success/Error Messages -->
              <div v-if="submitMessage" :class="[
                'p-4 rounded-lg border text-sm',
                submitSuccess 
                  ? 'bg-success/10 border-success/20 text-success' 
                  : 'bg-danger/10 border-danger/20 text-danger'
              ]">
                {{ submitMessage }}
              </div>
            </form>
          </div>

          <!-- Contact Information -->
          <div class="order-1 lg:order-2">
            <h3 class="text-2xl font-heading font-semibold text-text mb-6">Get in Touch</h3>
            
            <div class="space-y-6">
              <!-- Call Now Contact -->
              <div class="bg-bg rounded-lg p-6 border border-border">
                <div class="flex items-start space-x-4">
                  <div class="w-12 h-12 bg-action/10 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                  </div>
                  <div>
                    <h4 class="font-heading font-semibold text-text mb-1">Call Now</h4>
                    <a href="tel:+15612490897" class="text-lg font-semibold text-action hover:text-action/80 transition-colors">
                      (561) 249-0897
                    </a>
                    <p class="text-muted text-sm mt-1">Available 24/7 for all security needs</p>
                  </div>
                </div>
              </div>

              <!-- General Inquiries -->
              <div class="space-y-4">
                <div class="flex items-start space-x-4">
                  <svg class="w-6 h-6 text-action mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                  <div>
                    <h4 class="font-heading font-semibold text-text mb-1">General Inquiries</h4>
                    <a href="mailto:michael@ecissolutions.com" class="text-action hover:text-action/80 transition-colors">
                      michael@ecissolutions.com
                    </a>
                    <p class="text-muted text-sm mt-1">For quotes, questions, and general information</p>
                  </div>
                </div>

                <div class="flex items-start space-x-4">
                  <svg class="w-6 h-6 text-action mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  <div>
                    <h4 class="font-heading font-semibold text-text mb-1">Service Area</h4>
                    <p class="text-text">Greater Metro Area</p>
                    <p class="text-muted text-sm mt-1">Florida Statewide Coverage Available</p>
                  </div>
                </div>

                <div class="flex items-start space-x-4">
                  <svg class="w-6 h-6 text-action mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <div>
                    <h4 class="font-heading font-semibold text-text mb-1">Business Hours</h4>
                    <p class="text-text">Mon-Fri: 8:00 AM - 6:00 PM</p>
                    <p class="text-muted text-sm mt-1">Security services available 24/7</p>
                  </div>
                </div>
              </div>

              <!-- Response Guarantee -->
              <div class="bg-action/10 rounded-lg p-6 border border-action/20">
                <h4 class="font-heading font-semibold text-text mb-3">Response Guarantee</h4>
                <div class="space-y-2 text-sm">
                  <div class="flex items-center">
                    <svg class="w-4 h-4 text-success mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-text">Response time: <strong>3 minutes</strong></span>
                  </div>
                  <div class="flex items-center">
                    <svg class="w-4 h-4 text-success mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-text">General inquiries: <strong>24 hours</strong></span>
                  </div>
                  <div class="flex items-center">
                    <svg class="w-4 h-4 text-success mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-text">Assessment scheduling: <strong>Same day</strong></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 24/7 Call Now Banner -->
    <section class="section bg-action/10 border-y border-action/20 animate-on-scroll">
      <div class="container text-center">
        <div class="max-w-3xl mx-auto">
          <div class="flex items-center justify-center mb-4">
            <svg class="w-8 h-8 text-action mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <h2 class="text-2xl font-heading font-bold text-text">Ready to Get Started?</h2>
          </div>
          
          <p class="text-lg text-muted mb-6">
            For immediate assistance, security consultations, or to learn more about our services, call us now.
          </p>
          
          <a 
            href="tel:+15612490897" 
            class="inline-flex items-center gap-3 bg-action text-white px-8 py-4 rounded-lg font-heading font-semibold text-lg hover:bg-action/90 transition-colors duration-base shadow-lg hover:shadow-xl focus-ring"
            aria-label="Call now"
          >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            Call (561) 249-0897 Now
          </a>
          
          <p class="text-muted text-sm mt-4">
            Average response time: 3 minutes • Available 24/7/365
          </p>
        </div>
      </div>
    </section>

    <!-- Coverage Area Section -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container">
        <div class="text-center mb-12">
          <h2 class="heading-lg text-text mb-4">Our Coverage Area</h2>
          <p class="text-lg text-muted max-w-2xl mx-auto">Serving communities and businesses throughout South Florida with rapid response capabilities.</p>
        </div>

        <!-- Cities by County -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Palm Beach County -->
          <div class="bg-surface rounded-lg p-6 border border-border">
            <div class="flex items-center mb-4">
              <svg class="w-6 h-6 text-action mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <h3 class="text-lg font-heading font-semibold text-text">Palm Beach County</h3>
            </div>
            <div class="space-y-2">
              <div class="text-sm text-text">West Palm Beach</div>
              <div class="text-sm text-text">Boca Raton</div>
              <div class="text-sm text-text">Delray Beach</div>
              <div class="text-sm text-text">Boynton Beach</div>
              <div class="text-sm text-text">Jupiter</div>
              <div class="text-sm text-text">Palm Beach Gardens</div>
              <div class="text-sm text-text">Wellington</div>
              <div class="text-sm text-text">Royal Palm Beach</div>
              <div class="text-sm text-text">Lake Worth</div>
              <div class="text-sm text-text">Lantana</div>
              <div class="text-sm text-text">Greenacres</div>
              <div class="text-sm text-text">Palm Springs</div>
              <div class="text-sm text-text">Riviera Beach</div>
              <div class="text-sm text-text">Palm Beach</div>
              <div class="text-sm text-text">Manalapan</div>
              <div class="text-sm text-text">Loxahatchee</div>
              <div class="text-sm text-text">The Acreage</div>
              <div class="text-sm text-text">Tequesta</div>
            </div>
          </div>

          <!-- Broward County -->
          <div class="bg-surface rounded-lg p-6 border border-border">
            <div class="flex items-center mb-4">
              <svg class="w-6 h-6 text-action mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <h3 class="text-lg font-heading font-semibold text-text">Broward County</h3>
            </div>
            <div class="space-y-2">
              <div class="text-sm text-text">Fort Lauderdale</div>
              <div class="text-sm text-text">Hollywood</div>
              <div class="text-sm text-text">Pembroke Pines</div>
              <div class="text-sm text-text">Coral Springs</div>
              <div class="text-sm text-text">Miramar</div>
              <div class="text-sm text-text">Plantation</div>
              <div class="text-sm text-text">Sunrise</div>
              <div class="text-sm text-text">Tamarac</div>
              <div class="text-sm text-text">Lauderhill</div>
              <div class="text-sm text-text">Davie</div>
              <div class="text-sm text-text">Pompano Beach</div>
              <div class="text-sm text-text">Deerfield Beach</div>
              <div class="text-sm text-text">Margate</div>
              <div class="text-sm text-text">Coconut Creek</div>
              <div class="text-sm text-text">Weston</div>
              <div class="text-sm text-text">Cooper City</div>
              <div class="text-sm text-text">Parkland</div>
              <div class="text-sm text-text">Wilton Manors</div>
            </div>
          </div>

          <!-- Miami-Dade County -->
          <div class="bg-surface rounded-lg p-6 border border-border">
            <div class="flex items-center mb-4">
              <svg class="w-6 h-6 text-action mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <h3 class="text-lg font-heading font-semibold text-text">Miami-Dade County</h3>
            </div>
            <div class="space-y-2">
              <div class="text-sm text-text">Miami</div>
              <div class="text-sm text-text">Hialeah</div>
              <div class="text-sm text-text">Miami Gardens</div>
              <div class="text-sm text-text">Homestead</div>
              <div class="text-sm text-text">Aventura</div>
              <div class="text-sm text-text">Coral Gables</div>
              <div class="text-sm text-text">Miami Beach</div>
              <div class="text-sm text-text">Doral</div>
              <div class="text-sm text-text">Kendall</div>
              <div class="text-sm text-text">Cutler Bay</div>
              <div class="text-sm text-text">Palmetto Bay</div>
              <div class="text-sm text-text">Pinecrest</div>
              <div class="text-sm text-text">Key Biscayne</div>
              <div class="text-sm text-text">Sunny Isles Beach</div>
              <div class="text-sm text-text">Bal Harbour</div>
              <div class="text-sm text-text">Bay Harbor Islands</div>
              <div class="text-sm text-text">Surfside</div>
              <div class="text-sm text-text">North Miami Beach</div>
            </div>
          </div>

          <!-- Martin County -->
          <div class="bg-surface rounded-lg p-6 border border-border">
            <div class="flex items-center mb-4">
              <svg class="w-6 h-6 text-action mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <h3 class="text-lg font-heading font-semibold text-text">Martin County</h3>
            </div>
            <div class="space-y-2">
              <div class="text-sm text-text">Stuart</div>
              <div class="text-sm text-text">Jensen Beach</div>
              <div class="text-sm text-text">Port St. Lucie</div>
              <div class="text-sm text-text">Palm City</div>
              <div class="text-sm text-text">Hobe Sound</div>
              <div class="text-sm text-text">Indiantown</div>
              <div class="text-sm text-text">Sewall's Point</div>
              <div class="text-sm text-text">Jupiter Island</div>
              <div class="text-sm text-text">Tequesta</div>
              <div class="text-sm text-text">Hutchinson Island</div>
              <div class="text-sm text-text">Rio</div>
              <div class="text-sm text-text">Ocean Breeze Park</div>
              <div class="text-sm text-text">Jupiter Farms</div>
              <div class="text-sm text-text">Palm Beach Gardens</div>
              <div class="text-sm text-text">North Palm Beach</div>
              <div class="text-sm text-text">Lake Park</div>
              <div class="text-sm text-text">Riviera Beach</div>
            </div>
          </div>
        </div>

        <!-- Additional Coverage Note -->
        <div class="mt-12 text-center">
          <div class="bg-action/10 rounded-lg p-6 border border-action/20 max-w-4xl mx-auto">
            <div class="flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-action mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <h3 class="text-xl font-heading font-semibold text-text">Comprehensive Coverage</h3>
            </div>
            <p class="text-text mb-4">
              Our security services extend throughout South Florida with rapid response capabilities. 
              Don't see your city listed? We provide coverage to surrounding areas and can customize 
              security solutions for your specific location.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
              <a href="tel:+15612490897" class="btn btn--primary">
                Call (561) 249-0897
              </a>
              <button @click="scrollToForm" class="btn btn--secondary">
                Request Assessment
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref, reactive } from 'vue'

// Form state
const form = reactive({
  name: '',
  email: '',
  phone: '',
  propertyType: '',
  service: '',
  message: ''
})

const isSubmitting = ref(false)
const submitMessage = ref('')
const submitSuccess = ref(false)

// Handle form submission
const handleSubmit = async () => {
  isSubmitting.value = true
  submitMessage.value = ''
  
  try {
    // Submit to Laravel backend
    const response = await fetch('/api/submissions', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        firstName: form.name.split(' ')[0] || form.name,
        lastName: form.name.split(' ').slice(1).join(' ') || '',
        email: form.email,
        phone: form.phone,
        service: form.service,
        message: form.message
      })
    })
    
    const result = await response.json()
    
    if (response.ok && result.success) {
      // Success
      submitSuccess.value = true
      submitMessage.value = 'Thank you! Your security assessment request has been received. We\'ll contact you within 24 hours to schedule your free consultation.'
      
      // Reset form
      Object.keys(form).forEach(key => form[key] = '')
    } else {
      throw new Error(result.error || 'Form submission failed')
    }
    
  } catch (error) {
    console.error('Form submission error:', error)
    // Error
    submitSuccess.value = false
    submitMessage.value = 'We encountered an issue sending your request. Please try again or call us directly at (561) 249-0897.'
  } finally {
    isSubmitting.value = false
    
    // Auto-clear message after 10 seconds
    setTimeout(() => {
      submitMessage.value = ''
    }, 10000)
  }
}

// Scroll to contact form
const scrollToForm = () => {
  const formSection = document.querySelector('.section.bg-surface')
  if (formSection) {
    formSection.scrollIntoView({ 
      behavior: 'smooth',
      block: 'start'
    })
  }
}
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
