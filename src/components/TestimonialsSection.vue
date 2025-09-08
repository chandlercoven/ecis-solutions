<template>
  <section id="testimonials" class="section-padding bg-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-electric-blue/5 rounded-full filter blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-navy/5 rounded-full filter blur-3xl"></div>

    <div class="container-custom relative z-10">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
        <div class="inline-flex items-center space-x-2 bg-electric-blue/10 rounded-full px-4 py-2">
          <span class="text-electric-blue text-sm font-semibold uppercase tracking-wider">Testimonials</span>
        </div>
        <h2 class="heading-lg text-navy-dark">
          What Our Clients Say
        </h2>
        <p class="text-lg text-gray-600">
          Don't just take our word for it. Here's what our clients have to say about their experience with ECIS Solutions.
        </p>
      </div>

      <!-- Testimonials Carousel -->
      <div class="relative max-w-5xl mx-auto">
        <!-- Quote Icon -->
        <div class="absolute -top-8 left-1/2 -translate-x-1/2 z-20">
          <svg class="w-16 h-16 text-electric-blue/20" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
          </svg>
        </div>

        <!-- Testimonials Container -->
        <div class="relative">
          <transition-group
            name="fade"
            tag="div"
            class="relative"
          >
            <div 
              v-for="(testimonial, index) in testimonials"
              :key="testimonial.id"
              v-show="index === currentTestimonial"
              class="text-center"
            >
              <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-10 lg:p-14 shadow-xl border border-gray-100">
                <!-- Rating Stars -->
                <div class="flex justify-center mb-6">
                  <div class="flex space-x-1">
                    <svg v-for="n in 5" :key="n" class="w-6 h-6 text-electric-blue" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                  </div>
                </div>

                <!-- Quote -->
                <p class="text-2xl lg:text-3xl text-gray-700 font-light italic leading-relaxed mb-8">
                  "{{ testimonial.quote }}"
                </p>

                <!-- Author -->
                <div class="flex flex-col items-center">
                  <div class="w-16 h-16 bg-gradient-primary rounded-full flex items-center justify-center mb-4">
                    <span class="text-white font-bold text-xl">{{ testimonial.initials }}</span>
                  </div>
                  <h4 class="font-heading font-semibold text-navy-dark text-lg">{{ testimonial.name }}</h4>
                  <p class="text-gray-600">{{ testimonial.title }}</p>
                  <p class="text-sm text-gray-500 mt-1">{{ testimonial.company }}</p>
                </div>
              </div>
            </div>
          </transition-group>

          <!-- Navigation Arrows -->
          <button 
            @click="previousTestimonial"
            class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-full lg:-translate-x-1/2 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-50 transition-colors group"
          >
            <svg class="w-6 h-6 text-gray-600 group-hover:text-electric-blue transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
          </button>
          
          <button 
            @click="nextTestimonial"
            class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-full lg:translate-x-1/2 w-12 h-12 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-50 transition-colors group"
          >
            <svg class="w-6 h-6 text-gray-600 group-hover:text-electric-blue transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>

        <!-- Dots Indicator -->
        <div class="flex justify-center space-x-2 mt-8">
          <button 
            v-for="(testimonial, index) in testimonials"
            :key="testimonial.id"
            @click="currentTestimonial = index"
            :class="[
              'w-2 h-2 rounded-full transition-all duration-300',
              index === currentTestimonial ? 'w-8 bg-electric-blue' : 'bg-gray-300 hover:bg-gray-400'
            ]"
          ></button>
        </div>
      </div>

      <!-- Trust Stats -->
      <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mt-20 max-w-4xl mx-auto">
        <div class="text-center">
          <div class="text-4xl font-bold gradient-text">500+</div>
          <div class="text-gray-600 mt-2">Happy Clients</div>
        </div>
        <div class="text-center">
          <div class="text-4xl font-bold gradient-text">98%</div>
          <div class="text-gray-600 mt-2">Client Retention</div>
        </div>
        <div class="text-center">
          <div class="text-4xl font-bold gradient-text">24/7</div>
          <div class="text-gray-600 mt-2">Support Available</div>
        </div>
        <div class="text-center">
          <div class="text-4xl font-bold gradient-text">5.0</div>
          <div class="text-gray-600 mt-2">Average Rating</div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const currentTestimonial = ref(0)
let autoplayInterval = null

const testimonials = [
  {
    id: 1,
    quote: "ECIS has transformed the security of our gated community. Since partnering with them, we've seen incidents drop by over 50%. Their professional guards and responsive management team have given our residents peace of mind.",
    name: "Michael Rodriguez",
    title: "HOA Board President",
    company: "Sunset Lakes Community",
    initials: "MR"
  },
  {
    id: 2,
    quote: "As a property manager overseeing multiple commercial sites, I need security I can rely on. ECIS delivers consistent, professional service across all our locations. They're not just vendors, they're partners in protecting our assets.",
    name: "Sarah Johnson",
    title: "Regional Property Manager",
    company: "Premier Commercial Properties",
    initials: "SJ"
  },
  {
    id: 3,
    quote: "I completed my Class D certification through ECIS Academy and landed a job within two weeks of graduation. The instructors were knowledgeable, the training was comprehensive, and the job placement assistance was invaluable.",
    name: "James Williams",
    title: "Security Officer",
    company: "ECIS Academy Graduate",
    initials: "JW"
  }
]

const nextTestimonial = () => {
  currentTestimonial.value = (currentTestimonial.value + 1) % testimonials.length
}

const previousTestimonial = () => {
  currentTestimonial.value = currentTestimonial.value === 0 
    ? testimonials.length - 1 
    : currentTestimonial.value - 1
}

const startAutoplay = () => {
  autoplayInterval = setInterval(() => {
    nextTestimonial()
  }, 6000) // Change testimonial every 6 seconds
}

const stopAutoplay = () => {
  if (autoplayInterval) {
    clearInterval(autoplayInterval)
  }
}

onMounted(() => {
  startAutoplay()
})

onUnmounted(() => {
  stopAutoplay()
})
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
