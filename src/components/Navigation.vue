<template>
  <nav 
    :class="[
      'fixed top-0 left-0 right-0 z-50 transition-all duration-300',
      isScrolled ? 'bg-navy-dark/95 backdrop-blur-md shadow-lg py-6' : 'bg-transparent py-8'
    ]"
  >
    <div class="container-custom">
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <a 
          href="#home" 
          @click="scrollToSection('home')"
          class="flex items-center space-x-4 sm:space-x-6 group"
        >
          <img 
            src="/src/assets/ecis-logo2.png" 
            alt="East Coast Investigation Security Logo" 
            class="h-12 sm:h-14 w-auto group-hover:scale-105 transition-transform duration-300"
          >
          <div class="flex flex-col space-y-2">
            <span class="text-white font-heading font-bold text-sm sm:text-lg leading-tight">
              East Coast Investigation
            </span>
            <span class="text-white/70 font-body text-xs font-medium tracking-wider uppercase hidden sm:block">
              Professional Security Services
            </span>
          </div>
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex items-center space-x-8">
          <a 
            v-for="item in navItems" 
            :key="item.id"
            :href="`#${item.id}`"
            @click="scrollToSection(item.id)"
            :class="[
              'text-sm font-medium transition-all duration-300 hover:text-electric-blue',
              activeSection === item.id ? 'text-electric-blue' : 'text-white/90'
            ]"
          >
            {{ item.label }}
          </a>
          
          <!-- Call Now Button -->
          <a 
            href="tel:+1234567890" 
            class="btn-primary text-sm"
          >
            Call Now
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <button 
          @click="mobileMenuOpen = !mobileMenuOpen"
          class="lg:hidden relative w-10 h-10 text-white focus:outline-none"
        >
          <span class="sr-only">Open main menu</span>
          <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
            <span 
              :class="[
                'block absolute h-0.5 w-6 bg-current transform transition duration-300 ease-in-out',
                mobileMenuOpen ? 'rotate-45' : '-translate-y-2'
              ]"
            ></span>
            <span 
              :class="[
                'block absolute h-0.5 w-6 bg-current transform transition duration-300 ease-in-out',
                mobileMenuOpen ? 'opacity-0' : ''
              ]"
            ></span>
            <span 
              :class="[
                'block absolute h-0.5 w-6 bg-current transform transition duration-300 ease-in-out',
                mobileMenuOpen ? '-rotate-45' : 'translate-y-2'
              ]"
            ></span>
          </div>
        </button>
      </div>

      <!-- Mobile Navigation -->
      <transition
        enter-active-class="transition ease-out duration-200"
        enter-from-class="opacity-0 -translate-y-4"
        enter-to-class="opacity-100 translate-y-0"
        leave-active-class="transition ease-in duration-150"
        leave-from-class="opacity-100 translate-y-0"
        leave-to-class="opacity-0 -translate-y-4"
      >
        <div 
          v-if="mobileMenuOpen"
          class="lg:hidden absolute top-full left-0 right-0 bg-navy-dark/95 backdrop-blur-md shadow-xl mt-4"
        >
          <div class="container-custom py-8 space-y-6">
            <a 
              v-for="item in navItems" 
              :key="item.id"
              :href="`#${item.id}`"
              @click="closeMobileMenu(); scrollToSection(item.id)"
              :class="[
                'block py-3 px-4 text-base font-medium rounded-lg transition-all duration-300',
                activeSection === item.id 
                  ? 'bg-electric-blue/20 text-electric-blue' 
                  : 'text-white/90 hover:bg-white/10 hover:text-white'
              ]"
            >
              {{ item.label }}
            </a>
            
          </div>
        </div>
      </transition>
    </div>
  </nav>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const isScrolled = ref(false)
const mobileMenuOpen = ref(false)
const activeSection = ref('home')

const navItems = [
  { id: 'home', label: 'Home' },
  { id: 'services', label: 'Services' },
  { id: 'training', label: 'Training & Licensing' },
  { id: 'investigations', label: 'Investigations' },
  { id: 'about', label: 'About' },
  { id: 'contact', label: 'Contact' }
]

const handleScroll = () => {
  isScrolled.value = window.scrollY > 50
  
  // Update active section based on scroll position
  const sections = navItems.map(item => ({
    id: item.id,
    element: document.getElementById(item.id)
  })).filter(section => section.element)
  
  const scrollPosition = window.scrollY + 100
  
  for (let i = sections.length - 1; i >= 0; i--) {
    const section = sections[i]
    if (section.element.offsetTop <= scrollPosition) {
      activeSection.value = section.id
      break
    }
  }
}

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

const closeMobileMenu = () => {
  mobileMenuOpen.value = false
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
  handleScroll() // Check initial scroll position
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>