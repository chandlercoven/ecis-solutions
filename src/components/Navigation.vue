<template>
  <nav 
    :class="[
      'fixed top-0 left-0 right-0 z-50 transition-all duration-base',
      isScrolled ? 'bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900/95 backdrop-blur shadow-lg py-4' : 'bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 py-6'
    ]"
  >
    <div class="container">
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <router-link 
          to="/" 
          class="flex items-center space-x-4 group focus-ring-keyboard"
          aria-label="ECIS Solutions home page"
        >
          <img 
            src="/src/assets/logo.png" 
            alt="ECIS Solutions Logo" 
            class="h-16 w-auto group-hover:scale-105 transition-transform duration-base"
          >
        </router-link>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex items-center space-x-6">
          <router-link 
            v-for="item in navItems" 
            :key="item.path"
            :to="item.path"
            :class="[
              'text-sm font-medium font-body transition-all duration-base hover:text-action relative',
              'after:absolute after:bottom-0 after:left-0 after:h-0.5 after:bg-action after:transition-all after:duration-base',
              $route.path === item.path 
                ? 'text-action after:w-full after:scale-x-100' 
                : 'text-white/90 after:w-0 hover:after:w-full'
            ]"
            :aria-current="$route.path === item.path ? 'page' : undefined"
          >
            {{ item.label }}
          </router-link>
          
          <!-- Emergency Call Button -->
          <a 
            href="tel:+15166408144" 
            class="btn btn--premium text-sm"
            aria-label="Call emergency security line"
          >
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            Emergency: (516) 640-8144
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <button 
          @click="toggleMobileMenu"
          class="lg:hidden relative w-10 h-10 text-white focus-ring-keyboard"
          :aria-expanded="mobileMenuOpen"
          :aria-label="mobileMenuOpen ? 'Close main menu' : 'Open main menu'"
        >
          <span class="sr-only">{{ mobileMenuOpen ? 'Close' : 'Open' }} main menu</span>
          <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
            <span 
              :class="[
                'block absolute h-0.5 w-6 bg-current transform transition-all duration-base',
                mobileMenuOpen ? 'rotate-45' : '-translate-y-2'
              ]"
            ></span>
            <span 
              :class="[
                'block absolute h-0.5 w-6 bg-current transform transition-all duration-base',
                mobileMenuOpen ? 'opacity-0' : ''
              ]"
            ></span>
            <span 
              :class="[
                'block absolute h-0.5 w-6 bg-current transform transition-all duration-base',
                mobileMenuOpen ? '-rotate-45' : 'translate-y-2'
              ]"
            ></span>
          </div>
        </button>
      </div>

      <!-- Mobile Navigation -->
      <transition
        enter-active-class="transition ease-out duration-base"
        enter-from-class="opacity-0 -translate-y-4"
        enter-to-class="opacity-100 translate-y-0"
        leave-active-class="transition ease-in duration-fast"
        leave-from-class="opacity-100 translate-y-0"
        leave-to-class="opacity-0 -translate-y-4"
      >
        <div 
          v-if="mobileMenuOpen"
          class="lg:hidden absolute top-full left-0 right-0 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900/95 backdrop-blur border-t border-slate-700/20"
          role="menu"
        >
          <div class="container py-6 space-y-1">
            <router-link 
              v-for="item in navItems" 
              :key="item.path"
              :to="item.path"
              @click="closeMobileMenu"
              :class="[
                'block py-3 px-4 text-base font-medium font-body rounded-lg transition-all duration-base',
                $route.path === item.path 
                  ? 'bg-action/20 text-action border-l-2 border-action' 
                  : 'text-white/90 hover:bg-surface hover:text-white'
              ]"
              :aria-current="$route.path === item.path ? 'page' : undefined"
              role="menuitem"
            >
              {{ item.label }}
            </router-link>
            
            <!-- Mobile Emergency Call -->
            <a 
              href="tel:+15166408144" 
              class="block py-3 px-4 text-base font-medium font-body text-accent border border-accent/20 rounded-lg mt-4"
              @click="closeMobileMenu"
              role="menuitem"
            >
              📞 Emergency: (516) 640-8144
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

const navItems = [
  { path: '/', label: 'Home' },
  { path: '/services', label: 'Services' },
  { path: '/training', label: 'Training' },
  { path: '/about', label: 'About' },
  { path: '/contact', label: 'Contact' }
]

const handleScroll = () => {
  isScrolled.value = window.scrollY > 50
}

const toggleMobileMenu = () => {
  mobileMenuOpen.value = !mobileMenuOpen.value
}

const closeMobileMenu = () => {
  mobileMenuOpen.value = false
}

// Close mobile menu when clicking outside
const handleClickOutside = (event) => {
  const nav = event.target.closest('nav')
  if (!nav && mobileMenuOpen.value) {
    closeMobileMenu()
  }
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
  document.addEventListener('click', handleClickOutside)
  handleScroll()
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
  document.removeEventListener('click', handleClickOutside)
})
</script>