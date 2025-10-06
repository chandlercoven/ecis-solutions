<template>
  <nav 
    :class="[
      'fixed top-0 left-0 right-0 z-50 transition-all duration-base',
      isScrolled ? 'bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900/95 backdrop-blur shadow-lg' : 'bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900'
    ]"
  >
    <div class="container py-4">
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <router-link 
          to="/" 
          class="flex items-center space-x-4 group focus-ring-keyboard py-2"
          aria-label="ECIS Solutions home page"
        >
          <EnhancedImage
            src="/logo.png"
            alt="ECIS Solutions Logo"
            container-class="h-16 w-auto flex-shrink-0"
            image-class="h-16 w-auto group-hover:scale-105 transition-transform duration-base"
            :lazy="false"
            :show-loading-icon="false"
            :scale-on-load="false"
            :no-animation="true"
          />
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
          
          <!-- Call Now Button -->
          <a 
            href="tel:+15166408144" 
            class="btn btn--call-now text-sm"
            aria-label="Call now"
          >
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            Call Now: (516) 640-8144
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <button 
          @click="toggleMobileMenu"
          class="lg:hidden relative w-10 h-10 text-white focus-ring-keyboard touch-target"
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
          class="lg:hidden absolute top-full left-0 right-0 w-full bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900/95 backdrop-blur border-t border-slate-700/20"
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
            
            <!-- Mobile Call Now -->
            <a 
              href="tel:+15166408144" 
              class="btn btn--call-now text-base mt-4"
              @click="closeMobileMenu"
              role="menuitem"
            >
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              Call Now: (516) 640-8144
            </a>
          </div>
        </div>
      </transition>
    </div>
    
    <!-- Announcement Banner -->
    <div v-if="showBanner" class="bg-accent text-white px-2 sm:px-4 text-center border-b border-accent/20 cursor-pointer hover:bg-accent/90 transition-colors" @click="handleEnrollClick">
      <div class="container mx-auto">
        <!-- Mobile Layout -->
        <div class="sm:hidden flex items-center justify-between gap-2 py-1">
          <div class="flex items-center gap-1 text-xs font-medium flex-1 min-w-0">
            <span class="font-bold truncate">Security License Training</span>
            <span class="text-xs">• Nov 1st</span>
          </div>
          <div class="flex items-center gap-1 flex-shrink-0">
            <span class="text-sm font-bold">$249</span>
            <button 
              @click.stop="handleEnrollClick"
              class="bg-white text-accent px-2 py-0.5 rounded text-xs font-semibold hover:bg-white/90 transition-colors"
            >
              <span class="line-through opacity-60">$299</span>
            </button>
            <button 
              @click.stop="closeBanner"
              class="text-white/70 hover:text-white transition-colors p-0.5"
              aria-label="Close announcement"
            >
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        
        <!-- Desktop Layout -->
        <div class="hidden sm:flex items-center justify-center gap-4 py-1">
          <!-- Main Message -->
          <div class="flex items-center gap-2 text-sm font-medium">
            <span class="font-bold">Security License Training</span>
            <span class="inline">• Classes start November 1st</span>
          </div>
          
          <!-- Price & CTA -->
          <div class="flex items-center gap-3">
            <span class="text-lg font-bold">$249</span>
            <button 
              @click.stop="handleEnrollClick"
              class="bg-white text-accent px-3 py-1 rounded text-xs font-semibold hover:bg-white/90 transition-colors"
            >
              Secure Spot - <span class="line-through opacity-60">$299</span>
            </button>
          </div>
          
          <!-- Close Button -->
          <button 
            @click.stop="closeBanner"
            class="text-white/70 hover:text-white transition-colors p-1"
            aria-label="Close announcement"
          >
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { ref, onMounted, onUnmounted, watch } from 'vue'
import { useRouter, useRoute } from 'vue-router'
import EnhancedImage from './EnhancedImage.vue'
// Using static image path

const router = useRouter()
const route = useRoute()
const isScrolled = ref(false)
const mobileMenuOpen = ref(false)
const showBanner = ref(true)

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

// Watch for route changes and close mobile menu
watch(() => route.path, () => {
  if (mobileMenuOpen.value) {
    closeMobileMenu()
  }
})

// Banner functions
const closeBanner = () => {
  showBanner.value = false
  localStorage.setItem('announcement-banner-dismissed-v2', 'true')
}

const handleEnrollClick = () => {
  router.push('/contact')
  
  // Track the click for analytics
  if (typeof gtag !== 'undefined') {
    gtag('event', 'click', {
      event_category: 'announcement',
      event_label: 'security-license-contact',
      value: 25
    })
  }
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
  
  // Check if banner was previously dismissed
  const dismissed = localStorage.getItem('announcement-banner-dismissed-v2')
  if (dismissed === 'true') {
    showBanner.value = false
  }
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
  document.removeEventListener('click', handleClickOutside)
})
</script>