<template>
  <section class="hero-section relative flex flex-col justify-center overflow-hidden animate-on-scroll pt-20 sm:pt-24 lg:pt-28 pb-12">
    <!-- Hero Background Image -->
    <div class="absolute inset-0 z-0">
      <!-- Hero background image - security scene -->
      <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
           style="background-image: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');">
      </div>
      
      <!-- Dark overlay for text readability -->
      <div class="absolute inset-0 bg-gradient-to-br from-slate-900/80 via-slate-800/70 to-slate-900/80 z-10"></div>
      
      <!-- Subtle blue accent overlay -->
      <div class="absolute inset-0 bg-gradient-to-t from-blue-900/20 via-transparent to-blue-800/30 z-20"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-20 container text-center">
      <div class="max-w-5xl mx-auto space-y-6 sm:space-y-8">

        <!-- Trust Badge - Solid Background -->
        <div class="inline-flex items-center space-x-2 sm:space-x-3 hero-card-sm mt-8 sm:mt-6">
          <span class="w-2 h-2 bg-action rounded-full animate-pulse"></span>
          <span class="text-white text-xs sm:text-sm font-medium font-body">Trusted Since 2008 • Licensed & Bonded</span>
        </div>

        <!-- Security Assessment Form Card -->
        <div class="hero-card-lg p-4 sm:p-6 lg:p-8 max-w-2xl mx-auto">
          <!-- Form Header -->
          <div class="text-center mb-6 sm:mb-8">
            <h1 class="text-2xl sm:text-3xl lg:text-4xl text-white font-heading mb-3 sm:mb-4 text-shadow-lg">
              Get Your Free Security Assessment
          </h1>
            <p class="text-sm sm:text-base lg:text-lg text-white/90 font-body leading-relaxed text-shadow">
              Licensed security professionals will evaluate your property and provide a customized protection plan.
            </p>
          </div>

          <!-- Simple Contact Form -->
          <form @submit.prevent="submitAssessment" class="space-y-4">
            <!-- Name -->
            <div>
              <label for="name" class="block text-sm font-medium text-white mb-2">Name *</label>
              <input 
                type="text" 
                id="name"
                v-model="form.contactName"
                required
                class="form-input"
                placeholder="Your name"
              />
            </div>

            <!-- Email -->
            <div>
              <label for="email" class="block text-sm font-medium text-white mb-2">Email *</label>
              <input 
                type="email" 
                id="email"
                v-model="form.contactEmail"
                required
                class="form-input"
                placeholder="your@email.com"
              />
            </div>

            <!-- Message -->
            <div>
              <label for="message" class="block text-sm font-medium text-white mb-2">Message *</label>
              <textarea 
                id="message"
                v-model="form.securityConcerns"
                required
                rows="4"
                class="form-input resize-none"
                placeholder="Tell us about your security needs..."
              ></textarea>
            </div>

            <!-- Submit Button -->
            <button 
              type="submit"
              :disabled="isSubmitting"
              class="w-full bg-action hover:bg-action-hover text-white font-semibold py-3 px-6 rounded-lg transition-colors disabled:opacity-50"
            >
              {{ isSubmitting ? 'Sending...' : 'Send Message' }}
            </button>
          </form>
        </div>

        <!-- Authority Badges - Professional Credentials -->
        <div class="space-y-4 sm:space-y-6 relative z-20">
          <!-- Top Row: Licensed & Bonded, 24/7 Response, Family Owned -->
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4 lg:gap-6 max-w-4xl mx-auto">
            <!-- Licensed & Bonded Badge -->
            <div class="hero-card-sm text-center p-4 lg:p-6 group hover:scale-105 transition-transform duration-base">
              <div class="w-12 h-12 mx-auto mb-3 bg-action/20 rounded-full flex items-center justify-center group-hover:bg-action/30 transition-colors">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </div>
              <div class="text-sm font-heading font-semibold text-white mb-1">Licensed & Bonded</div>
              <div class="text-xs text-white/80 font-body">State Security Board</div>
            </div>

            <!-- 24/7 Response Badge -->
            <div class="hero-card-sm text-center p-4 lg:p-6 group hover:scale-105 transition-transform duration-base">
              <div class="w-12 h-12 mx-auto mb-3 bg-warning/20 rounded-full flex items-center justify-center group-hover:bg-warning/30 transition-colors">
                <svg class="w-6 h-6 text-warning" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div class="text-sm font-heading font-semibold text-white mb-1">24/7 Response</div>
              <div class="text-xs text-white/80 font-body">Always Available</div>
            </div>

            <!-- Family Owned Badge -->
            <div class="hero-card-sm text-center p-4 lg:p-6 group hover:scale-105 transition-transform duration-base">
              <div class="w-12 h-12 mx-auto mb-3 bg-accent/20 rounded-full flex items-center justify-center group-hover:bg-accent/30 transition-colors">
                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </div>
              <div class="text-sm font-heading font-semibold text-white mb-1">Family Owned</div>
              <div class="text-xs text-white/80 font-body">Since 2008</div>
            </div>
          </div>

          <!-- BBB Rating - Premium Badge Design -->
          <div class="flex justify-center mt-6">
            <a 
              href="https://www.bbb.org/us/fl/west-palm-beach/profile/security-guards/east-coast-investigation-security-services-llc-0633-92046681" 
              target="_blank" 
              rel="noopener noreferrer"
              class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-accent/10 via-accent/5 to-transparent p-6 sm:p-8 transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-accent/20"
              aria-label="View ECIS Solutions BBB A+ rating profile"
            >
              
              <!-- Content -->
              <div class="relative z-10 text-center">
                <!-- BBB Logo with premium styling -->
                <div class="mb-2 relative">
                  <div class="w-64 h-64 mx-auto bg-gradient-to-br from-accent/20 to-accent/10 rounded-full flex items-center justify-center group-hover:from-accent/30 group-hover:to-accent/20 transition-all duration-300">
                    <img 
                      src="/src/assets/BBB-Logo.png" 
                      alt="Better Business Bureau A+ Rating" 
                      class="w-full h-full object-contain p-2"
                      loading="lazy"
                    />
                  </div>
                  <!-- Premium glow effect -->
                  <div class="absolute inset-0 rounded-full bg-accent/20 blur-xl opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div>
                </div>
                
                <!-- Rating text with premium styling -->
                <div>
                  <div class="text-lg font-heading font-bold text-accent group-hover:text-white transition-colors duration-300">
                    BBB A+ Rating
                  </div>
                  <div class="text-sm text-white/90 font-body">
                    Verified Business Excellence
                  </div>
                  <!-- Premium indicator -->
                  <div class="inline-flex items-center space-x-1 text-xs text-accent/80 font-medium">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <span>Premium Trust Rating</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, reactive } from 'vue'

// Form data
const form = reactive({
  propertyType: '',
  propertySize: '',
  hasConcerns: '',
  securityConcerns: '',
  contactName: '',
  contactPhone: '',
  contactEmail: ''
})

const isSubmitting = ref(false)

// Form submission handler
const submitAssessment = async () => {
  isSubmitting.value = true
  
  try {
    // Here you would typically send the data to your backend
    // For now, we'll simulate a submission
    await new Promise(resolve => setTimeout(resolve, 2000))
    
    // Show success message (you could use a toast notification here)
    alert('Thank you! Your security assessment request has been submitted. We\'ll contact you within 24 hours.')
    
    // Reset form
    Object.keys(form).forEach(key => {
      form[key] = ''
    })
    
  } catch (error) {
    console.error('Form submission error:', error)
    alert('Sorry, there was an error submitting your request. Please try again or call us directly.')
  } finally {
    isSubmitting.value = false
  }
}
</script>

<style scoped>
/* Hero section base styles - let Tailwind handle the background */
/* Background is handled by Tailwind classes in template, no additional CSS needed */

/* Radial gradient utility class */
.bg-gradient-radial {
  background: radial-gradient(ellipse at center, var(--tw-gradient-stops));
}

/* Enhanced Gradient Text using design system colors */
.text-gradient {
  background: linear-gradient(135deg, var(--action) 0%, var(--focus) 50%, var(--accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  text-shadow: none; /* Remove shadow for gradient text */
}

/* Performance-optimized subtle animation */
.hero-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 30% 20%, rgba(59, 130, 246, 0.05) 0%, transparent 50%);
  z-index: 10; /* Lower than content to avoid conflicts */
  animation: subtle-glow 8s ease-in-out infinite alternate;
  will-change: opacity; /* Optimize for animation performance */
}

/* Optimized keyframes - removed transform to prevent layout thrashing */
@keyframes subtle-glow {
  0% {
    opacity: 0.2;
  }
  100% {
    opacity: 0.4;
  }
}

/* Respect reduced motion preferences */
@media (prefers-reduced-motion: reduce) {
  .hero-section::before {
    animation: none;
  }
}

/* Mobile-specific optimizations */
@media (max-width: 768px) {
  .hero-section::before {
    background: radial-gradient(ellipse at 50% 30%, rgba(59, 130, 246, 0.03) 0%, transparent 40%);
  }
}

/* Form input styling - simplified and reusable */
.form-input {
  @apply w-full rounded-lg px-4 py-3 text-white focus:outline-none transition-colors;
  background-color: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.form-input::placeholder {
  color: rgba(255, 255, 255, 0.6);
}

.form-input:focus {
  border-color: var(--action);
  box-shadow: 0 0 0 2px rgba(0, 119, 255, 0.2);
}
</style>
