<template>
  <nav aria-label="Breadcrumb" class="bg-surface border-b border-border">
    <div class="container py-3">
      <ol class="flex items-center space-x-2 text-sm">
        <li>
          <router-link 
            to="/" 
            class="text-muted hover:text-action transition-colors duration-base"
            aria-label="Home"
          >
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
          </router-link>
        </li>
        
        <li v-for="(crumb, index) in breadcrumbs" :key="index" class="flex items-center">
          <svg class="w-4 h-4 text-muted mx-2" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
          </svg>
          
          <router-link 
            v-if="crumb.path && index < breadcrumbs.length - 1"
            :to="crumb.path"
            class="text-muted hover:text-action transition-colors duration-base"
          >
            {{ crumb.name }}
          </router-link>
          
          <span 
            v-else
            class="text-text font-medium"
            aria-current="page"
          >
            {{ crumb.name }}
          </span>
        </li>
      </ol>
    </div>
  </nav>
</template>

<script setup>
import { computed } from 'vue'
import { useRoute } from 'vue-router'

const route = useRoute()

const breadcrumbs = computed(() => {
  const crumbs = []
  
  // Always start with Home
  crumbs.push({ name: 'Home', path: '/' })
  
  // Add current page based on route
  switch (route.name) {
    case 'services':
      crumbs.push({ name: 'Security Services' })
      break
    case 'training':
      crumbs.push({ name: 'Security Training' })
      break
    case 'about':
      crumbs.push({ name: 'About Us' })
      break
    case 'contact':
      crumbs.push({ name: 'Contact' })
      break
    default:
      // For home page, don't add extra crumbs
      if (route.name !== 'home') {
        crumbs.push({ name: route.meta?.title || 'Page' })
      }
  }
  
  return crumbs
})
</script>

<style scoped>
/* Breadcrumb specific styles */
.router-link-active {
  @apply text-action;
}
</style>
