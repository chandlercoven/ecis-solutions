<template>
  <section id="contact" class="section bg-gradient-primary relative">
    <div class="container">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
        <div class="inline-flex items-center space-x-2 bg-surface/20 backdrop-blur-sm rounded-full px-4 py-2">
          <span class="text-white text-sm font-semibold uppercase tracking-wider">Get In Touch</span>
        </div>
        <h2 class="heading-lg text-white">
          Start Securing Your Property Today
        </h2>
        <p class="text-body-lg text-white/80">
          Contact us for a free security assessment or to learn more about our services and training programs.
        </p>
      </div>

      <!-- Contact Grid -->
      <div class="grid lg:grid-cols-2 gap-12">
        <!-- Contact Form -->
        <div class="card">
          <h3 class="heading-sm text-text mb-6">Request a Free Assessment</h3>
          
          <form @submit.prevent="handleSubmit" class="space-y-6">
            <div class="grid md:grid-cols-2 gap-6">
              <div>
                <label for="firstName" class="label label--required">
                  First Name
                </label>
                <input 
                  type="text" 
                  id="firstName" 
                  v-model="form.firstName"
                  required
                  class="input"
                  placeholder="John"
                >
              </div>
              
              <div>
                <label for="lastName" class="label label--required">
                  Last Name
                </label>
                <input 
                  type="text" 
                  id="lastName" 
                  v-model="form.lastName"
                  required
                  class="input"
                  placeholder="Doe"
                >
              </div>
            </div>

            <div>
              <label for="email" class="label label--required">
                Email Address
              </label>
              <input 
                type="email" 
                id="email" 
                v-model="form.email"
                required
                class="input"
                placeholder="john.doe@example.com"
              >
            </div>

            <div>
              <label for="phone" class="label label--required">
                Phone Number
              </label>
              <input 
                type="tel" 
                id="phone" 
                v-model="form.phone"
                required
                class="input"
                placeholder="(555) 123-4567"
              >
            </div>

            <div>
              <label for="service" class="label">
                Service Needed
              </label>
              <select 
                id="service" 
                v-model="form.service"
                class="select"
              >
                <option value="">Select a service</option>
                <option value="hoa">HOA/Community Security</option>
                <option value="commercial">Commercial Property Security</option>
                <option value="investigations">Private Investigations</option>
                <option value="executive">Executive/Event Security</option>
                <option value="training">Security Training</option>
                <option value="other">Other</option>
              </select>
            </div>

            <div>
              <label for="message" class="label">
                Message
              </label>
              <textarea 
                id="message" 
                v-model="form.message"
                rows="4"
                class="textarea"
                placeholder="Tell us about your security needs..."
              ></textarea>
            </div>

            <button 
              type="submit" 
              class="btn btn--primary w-full"
              :disabled="isSubmitting"
            >
              <span v-if="!isSubmitting">Send Message</span>
              <span v-else class="flex items-center justify-center">
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
                  <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                  <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Sending...
              </span>
            </button>
          </form>

          <!-- Success Message -->
          <transition name="fade">
            <div v-if="showSuccess" class="alert alert--success mt-6">
              <p class="font-medium">Thank you for your message! We'll be in touch within 24 hours.</p>
            </div>
          </transition>
        </div>

        <!-- Contact Info & Map -->
        <div class="space-y-8">
          <!-- Quick Contact Cards -->
          <div class="grid gap-4">
            <a href="tel:+15166408144" class="card interactive">
              <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-surface-2 rounded-lg flex items-center justify-center">
                  <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                </div>
                <div>
                  <p class="text-muted text-sm">Call Us 24/7</p>
                  <p class="text-text text-lg font-semibold">(516) 640-8144</p>
                </div>
              </div>
            </a>

            <a href="mailto:michael@ecissolutions.com" class="card interactive">
              <div class="flex items-center space-x-4">
                <div class="w-12 h-12 bg-surface-2 rounded-lg flex items-center justify-center">
                  <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                </div>
                <div>
                  <p class="text-muted text-sm">Email Us</p>
                  <p class="text-text text-lg font-semibold">michael@ecissolutions.com</p>
                </div>
              </div>
            </a>

            <div class="card">
              <div class="flex items-start space-x-4">
                <div class="w-12 h-12 bg-surface-2 rounded-lg flex items-center justify-center flex-shrink-0">
                  <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </div>
                <div>
                  <p class="text-muted text-sm">Headquarters</p>
                  <p class="text-text font-semibold">1234 Security Blvd</p>
                  <p class="text-text">Miami, FL 33101</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Map -->
          <div class="rounded-xl overflow-hidden shadow-2xl h-96">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.39885917968!2d-80.29949904603467!3d25.76168088301871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C%20FL!5e0!3m2!1sen!2sus!4v1678901234567!5m2!1sen!2sus"
              width="100%" 
              height="100%" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade"
              class="w-full h-full"
            ></iframe>
          </div>

          <!-- Business Hours -->
          <div class="card">
            <h4 class="font-heading font-semibold mb-4 text-text">Business Hours</h4>
            <div class="space-y-2 text-muted">
              <div class="flex justify-between">
                <span>Security Services:</span>
                <span class="font-semibold text-text">24/7 Available</span>
              </div>
              <div class="flex justify-between">
                <span>Office Hours:</span>
                <span>Mon-Fri: 8AM - 6PM</span>
              </div>
              <div class="flex justify-between">
                <span>Training Academy:</span>
                <span>Mon-Sat: 9AM - 5PM</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'

const form = ref({
  firstName: '',
  lastName: '',
  email: '',
  phone: '',
  service: '',
  message: ''
})

const isSubmitting = ref(false)
const showSuccess = ref(false)

const handleSubmit = async () => {
  isSubmitting.value = true
  
  // Simulate form submission
  setTimeout(() => {
    isSubmitting.value = false
    showSuccess.value = true
    
    // Reset form
    form.value = {
      firstName: '',
      lastName: '',
      email: '',
      phone: '',
      service: '',
      message: ''
    }
    
    // Hide success message after 5 seconds
    setTimeout(() => {
      showSuccess.value = false
    }, 5000)
  }, 2000)
}
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
