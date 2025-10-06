<template>
  <header class="bg-surface border-b border-border sticky top-0 z-40 backdrop-blur-sm bg-surface/95">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <!-- Logo and App Name -->
        <div class="flex items-center">
          <router-link to="/dashboard" class="flex items-center">
            <div class="h-10 w-10 bg-action/10 rounded-lg flex items-center justify-center mr-3 hover:bg-action/20 transition-colors">
              <svg class="h-6 w-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>
            </div>
            <div class="flex items-baseline space-x-2">
              <span class="text-xl font-heading font-bold text-text">ECIS Portal</span>
              <span class="text-xs text-text-muted bg-accent/10 px-2 py-0.5 rounded-full">Admin</span>
            </div>
          </router-link>
        </div>

        <!-- Navigation Menu -->
        <nav class="hidden md:flex items-center space-x-1">
          <router-link 
            to="/dashboard" 
            class="px-4 py-2 rounded-md text-sm font-medium text-text-muted hover:text-text hover:bg-surface-2 transition-colors"
            :class="{ 'bg-surface-2 text-action': $route.path === '/dashboard' }"
          >
            Dashboard
          </router-link>
          <router-link 
            to="/submissions" 
            class="px-4 py-2 rounded-md text-sm font-medium text-text-muted hover:text-text hover:bg-surface-2 transition-colors relative"
            :class="{ 'bg-surface-2 text-action': $route.path === '/submissions' }"
          >
            Submissions
            <span v-if="unreadCount > 0" class="absolute -top-1 -right-1 bg-action text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">
              {{ unreadCount > 9 ? '9+' : unreadCount }}
            </span>
          </router-link>
          <router-link 
            to="/clients" 
            class="px-4 py-2 rounded-md text-sm font-medium text-text-muted hover:text-text hover:bg-surface-2 transition-colors"
            :class="{ 'bg-surface-2 text-action': $route.path === '/clients' }"
          >
            Clients
          </router-link>
          <router-link 
            to="/incidents" 
            class="px-4 py-2 rounded-md text-sm font-medium text-text-muted hover:text-text hover:bg-surface-2 transition-colors"
            :class="{ 'bg-surface-2 text-action': $route.path === '/incidents' }"
          >
            Incidents
          </router-link>
          <router-link 
            v-if="authStore.canViewReports"
            to="/reports" 
            class="px-4 py-2 rounded-md text-sm font-medium text-text-muted hover:text-text hover:bg-surface-2 transition-colors"
            :class="{ 'bg-surface-2 text-action': $route.path === '/reports' }"
          >
            Reports
          </router-link>
          <router-link 
            v-if="authStore.canManageUsers"
            to="/users" 
            class="px-4 py-2 rounded-md text-sm font-medium text-text-muted hover:text-text hover:bg-surface-2 transition-colors"
            :class="{ 'bg-surface-2 text-action': $route.path === '/users' }"
          >
            Users
          </router-link>
        </nav>

        <!-- User Menu -->
        <div class="flex items-center space-x-4">
          <!-- Notifications -->
          <button 
            class="relative p-2 rounded-lg hover:bg-surface-2 transition-colors"
            @click="toggleNotifications"
          >
            <svg class="h-5 w-5 text-text-muted hover:text-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            <span v-if="hasNotifications" class="absolute top-1.5 right-1.5 h-2 w-2 bg-action rounded-full"></span>
          </button>

          <!-- User Dropdown -->
          <div class="relative">
            <button 
              @click="showUserMenu = !showUserMenu"
              @blur="() => setTimeout(() => showUserMenu = false, 200)"
              class="flex items-center space-x-2 p-2 rounded-lg hover:bg-surface-2 transition-colors"
            >
              <div class="h-8 w-8 bg-action/20 rounded-full flex items-center justify-center">
                <span class="text-xs font-medium text-action">{{ userInitials }}</span>
              </div>
              <span class="text-sm font-medium text-text hidden sm:block">{{ authStore.userName }}</span>
              <svg class="h-4 w-4 text-text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            
            <!-- Dropdown Menu -->
            <transition 
              enter-active-class="transition ease-out duration-100"
              enter-from-class="transform opacity-0 scale-95"
              enter-to-class="transform opacity-100 scale-100"
              leave-active-class="transition ease-in duration-75"
              leave-from-class="transform opacity-100 scale-100"
              leave-to-class="transform opacity-0 scale-95"
            >
              <div 
                v-if="showUserMenu" 
                class="absolute right-0 mt-2 w-48 rounded-lg shadow-lg bg-surface border border-border overflow-hidden"
              >
                <div class="px-4 py-3 border-b border-border">
                  <p class="text-sm font-medium text-text">{{ authStore.userName }}</p>
                  <p class="text-xs text-text-muted">{{ authStore.userEmail }}</p>
                  <p class="text-xs text-accent mt-1">{{ authStore.userRole }}</p>
                </div>
                <router-link 
                  to="/dashboard/profile"
                  class="block px-4 py-2 text-sm text-text-muted hover:bg-surface-2 hover:text-text transition-colors"
                >
                  <div class="flex items-center">
                    <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Profile Settings
                  </div>
                </router-link>
                <router-link 
                  to="/dashboard/security"
                  class="block px-4 py-2 text-sm text-text-muted hover:bg-surface-2 hover:text-text transition-colors"
                >
                  <div class="flex items-center">
                    <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    Security
                  </div>
                </router-link>
                <button 
                  @click="handleLogout"
                  class="w-full text-left px-4 py-2 text-sm text-danger hover:bg-danger/10 transition-colors border-t border-border"
                >
                  <div class="flex items-center">
                    <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Sign Out
                  </div>
                </button>
              </div>
            </transition>
          </div>

          <!-- Mobile Menu Toggle -->
          <button 
            @click="showMobileMenu = !showMobileMenu"
            class="md:hidden p-2 rounded-lg hover:bg-surface-2 transition-colors"
          >
            <svg v-if="!showMobileMenu" class="h-6 w-6 text-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg v-else class="h-6 w-6 text-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Navigation -->
      <transition
        enter-active-class="transition ease-out duration-200"
        enter-from-class="opacity-0 -translate-y-1"
        enter-to-class="opacity-100 translate-y-0"
        leave-active-class="transition ease-in duration-150"
        leave-from-class="opacity-100 translate-y-0"
        leave-to-class="opacity-0 -translate-y-1"
      >
        <nav v-if="showMobileMenu" class="md:hidden py-4 border-t border-border">
          <router-link 
            to="/dashboard" 
            class="block px-4 py-2 rounded-md text-sm font-medium text-text-muted hover:text-text hover:bg-surface-2 transition-colors"
            :class="{ 'bg-surface-2 text-action': $route.path === '/dashboard' }"
            @click="showMobileMenu = false"
          >
            Dashboard
          </router-link>
          <router-link 
            to="/submissions" 
            class="block px-4 py-2 rounded-md text-sm font-medium text-text-muted hover:text-text hover:bg-surface-2 transition-colors"
            :class="{ 'bg-surface-2 text-action': $route.path === '/submissions' }"
            @click="showMobileMenu = false"
          >
            Submissions
            <span v-if="unreadCount > 0" class="ml-2 bg-action text-white text-xs rounded-full px-2 py-0.5">
              {{ unreadCount }}
            </span>
          </router-link>
          <router-link 
            to="/clients" 
            class="block px-4 py-2 rounded-md text-sm font-medium text-text-muted hover:text-text hover:bg-surface-2 transition-colors"
            :class="{ 'bg-surface-2 text-action': $route.path === '/clients' }"
            @click="showMobileMenu = false"
          >
            Clients
          </router-link>
          <router-link 
            to="/incidents" 
            class="block px-4 py-2 rounded-md text-sm font-medium text-text-muted hover:text-text hover:bg-surface-2 transition-colors"
            :class="{ 'bg-surface-2 text-action': $route.path === '/incidents' }"
            @click="showMobileMenu = false"
          >
            Incidents
          </router-link>
          <router-link 
            v-if="authStore.canViewReports"
            to="/reports" 
            class="block px-4 py-2 rounded-md text-sm font-medium text-text-muted hover:text-text hover:bg-surface-2 transition-colors"
            :class="{ 'bg-surface-2 text-action': $route.path === '/reports' }"
            @click="showMobileMenu = false"
          >
            Reports
          </router-link>
          <router-link 
            v-if="authStore.canManageUsers"
            to="/users" 
            class="block px-4 py-2 rounded-md text-sm font-medium text-text-muted hover:text-text hover:bg-surface-2 transition-colors"
            :class="{ 'bg-surface-2 text-action': $route.path === '/users' }"
            @click="showMobileMenu = false"
          >
            Users
          </router-link>
        </nav>
      </transition>
    </div>
  </header>
</template>

<script setup>
import { ref, computed } from 'vue'
import { useRouter } from 'vue-router'
import { useAuthStore } from '@/stores/auth'

const router = useRouter()
const authStore = useAuthStore()

// UI state
const showUserMenu = ref(false)
const showMobileMenu = ref(false)
const hasNotifications = ref(false)

// TODO: Get this from a store or API
const unreadCount = ref(3)

// Computed
const userInitials = computed(() => {
  const name = authStore.userName || 'User'
  return name.split(' ').map(n => n[0]).join('').toUpperCase()
})

// Methods
const handleLogout = () => {
  authStore.logout()
  router.push('/login')
}

const toggleNotifications = () => {
  // TODO: Implement notifications panel
  console.log('Notifications clicked')
}
</script>

<style scoped>
/* Custom styles if needed */
</style>
