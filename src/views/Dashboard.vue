<template>
  <div class="dashboard">
    <!-- Navigation Header -->
    <nav class="bg-surface border-b border-border">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <!-- Logo and Title -->
          <div class="flex items-center">
            <div class="flex-shrink-0 flex items-center">
              <div class="h-8 w-8 bg-action/10 rounded-lg flex items-center justify-center mr-3">
                <svg class="h-5 w-5 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </div>
              <h1 class="text-xl font-heading font-bold text-text">ECIS Team Portal</h1>
            </div>
          </div>

          <!-- User Menu -->
          <div class="flex items-center space-x-4">
            <!-- Notifications -->
            <button class="relative p-2 text-text-muted hover:text-text hover:bg-surface-2 rounded-lg">
              <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4.828 7l2.586 2.586a2 2 0 002.828 0L12 7M4.828 7H9M4.828 7l-2.586 2.586a2 2 0 000 2.828L4.828 12" />
              </svg>
              <span class="absolute top-0 right-0 h-2 w-2 bg-danger rounded-full"></span>
            </button>

            <!-- User Profile Dropdown -->
            <div class="relative">
              <button @click="showUserMenu = !showUserMenu" class="flex items-center space-x-3 p-2 rounded-lg hover:bg-surface-2">
                <div class="h-8 w-8 bg-action/10 rounded-full flex items-center justify-center">
                  <span class="text-sm font-medium text-action">{{ userInitials }}</span>
                </div>
                <div class="text-left">
                  <p class="text-sm font-medium text-text">{{ authStore.userName }}</p>
                  <p class="text-xs text-text-muted">{{ authStore.userRole }}</p>
                </div>
                <svg class="h-4 w-4 text-text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>

              <!-- Dropdown Menu -->
              <div v-if="showUserMenu" class="absolute right-0 mt-2 w-48 bg-surface rounded-lg shadow-lg border border-border z-50">
                <div class="py-1">
                  <a href="#" class="block px-4 py-2 text-sm text-text hover:bg-surface-2">Profile Settings</a>
                  <a href="#" class="block px-4 py-2 text-sm text-text hover:bg-surface-2">Notifications</a>
                  <div class="border-t border-border my-1"></div>
                  <button @click="handleLogout" class="block w-full text-left px-4 py-2 text-sm text-danger hover:bg-surface-2">
                    Sign out
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <!-- Welcome Section -->
      <div class="mb-8">
        <h2 class="text-2xl font-heading font-bold text-text mb-2">
          Welcome back, {{ authStore.userName }}!
        </h2>
        <p class="text-text-muted">
          Here's what's happening with your security operations today.
        </p>
      </div>

      <!-- Stats Overview -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Active Patrols -->
        <div class="bg-surface rounded-xl p-6 border border-border">
          <div class="flex items-center">
            <div class="p-2 bg-action/10 rounded-lg">
              <svg class="h-6 w-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <div class="ml-4">
              <p class="text-sm font-medium text-text-muted">Active Patrols</p>
              <p class="text-2xl font-bold text-text">12</p>
            </div>
          </div>
        </div>

        <!-- Incidents Today -->
        <div class="bg-surface rounded-xl p-6 border border-border">
          <div class="flex items-center">
            <div class="p-2 bg-warning/10 rounded-lg">
              <svg class="h-6 w-6 text-warning" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z" />
              </svg>
            </div>
            <div class="ml-4">
              <p class="text-sm font-medium text-text-muted">Incidents Today</p>
              <p class="text-2xl font-bold text-text">3</p>
            </div>
          </div>
        </div>

        <!-- Clients Served -->
        <div class="bg-surface rounded-xl p-6 border border-border">
          <div class="flex items-center">
            <div class="p-2 bg-success/10 rounded-lg">
              <svg class="h-6 w-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </div>
            <div class="ml-4">
              <p class="text-sm font-medium text-text-muted">Active Clients</p>
              <p class="text-2xl font-bold text-text">47</p>
            </div>
          </div>
        </div>

        <!-- Response Time -->
        <div class="bg-surface rounded-xl p-6 border border-border">
          <div class="flex items-center">
            <div class="p-2 bg-accent/10 rounded-lg">
              <svg class="h-6 w-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div class="ml-4">
              <p class="text-sm font-medium text-text-muted">Avg Response</p>
              <p class="text-2xl font-bold text-text">2.3m</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Content Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Recent Activity -->
        <div class="lg:col-span-2">
          <div class="bg-surface rounded-xl p-6 border border-border">
            <h3 class="text-lg font-heading font-semibold text-text mb-4">Recent Activity</h3>
            <div class="space-y-4">
              <div class="flex items-start space-x-3">
                <div class="w-2 h-2 bg-action rounded-full mt-2"></div>
                <div class="flex-1">
                  <p class="text-sm text-text">Officer Rodriguez completed patrol at Lincoln High School</p>
                  <p class="text-xs text-text-muted">2 minutes ago</p>
                </div>
              </div>
              <div class="flex items-start space-x-3">
                <div class="w-2 h-2 bg-warning rounded-full mt-2"></div>
                <div class="flex-1">
                  <p class="text-sm text-text">Incident reported at Metro Shopping Center</p>
                  <p class="text-xs text-text-muted">15 minutes ago</p>
                </div>
              </div>
              <div class="flex items-start space-x-3">
                <div class="w-2 h-2 bg-success rounded-full mt-2"></div>
                <div class="flex-1">
                  <p class="text-sm text-text">New client onboarded: Sunrise Apartments</p>
                  <p class="text-xs text-text-muted">1 hour ago</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Quick Actions -->
        <div class="space-y-6">
          <!-- Quick Actions Card -->
          <div class="bg-surface rounded-xl p-6 border border-border">
            <h3 class="text-lg font-heading font-semibold text-text mb-4">Quick Actions</h3>
            <div class="space-y-3">
              <button v-if="authStore.canCreateIncidents" class="w-full text-left p-3 bg-action/5 hover:bg-action/10 rounded-lg border border-action/20 transition-colors">
                <div class="flex items-center space-x-3">
                  <svg class="h-5 w-5 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z" />
                  </svg>
                  <span class="text-sm font-medium text-text">Report Incident</span>
                </div>
              </button>
              
              <router-link v-if="authStore.canManageClients" to="/clients" class="w-full text-left p-3 bg-action/5 hover:bg-action/10 rounded-lg border border-action/20 transition-colors">
                <div class="flex items-center space-x-3">
                  <svg class="h-5 w-5 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                  <span class="text-sm font-medium text-text">Manage Clients</span>
                </div>
              </router-link>
              
              <router-link to="/submissions" class="w-full text-left p-3 bg-action/5 hover:bg-action/10 rounded-lg border border-action/20 transition-colors">
                <div class="flex items-center space-x-3">
                  <svg class="h-5 w-5 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  </svg>
                  <span class="text-sm font-medium text-text">View Submissions</span>
                </div>
              </router-link>
              
              <button class="w-full text-left p-3 bg-action/5 hover:bg-action/10 rounded-lg border border-action/20 transition-colors">
                <div class="flex items-center space-x-3">
                  <svg class="h-5 w-5 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                  <span class="text-sm font-medium text-text">Schedule Patrol</span>
                </div>
              </button>
            </div>
          </div>

          <!-- Emergency Contacts -->
          <div class="bg-surface rounded-xl p-6 border border-border">
            <h3 class="text-lg font-heading font-semibold text-text mb-4">Emergency Contacts</h3>
            <div class="space-y-3">
              <div class="flex items-center justify-between">
                <span class="text-sm text-text-muted">Emergency Line</span>
                <a href="tel:+15166408144" class="text-sm font-medium text-action hover:text-action-hover">(516) 640-8144</a>
              </div>
              <div class="flex items-center justify-between">
                <span class="text-sm text-text-muted">Dispatch</span>
                <a href="tel:+15166408144" class="text-sm font-medium text-action hover:text-action-hover">(516) 640-8144</a>
              </div>
              <div class="flex items-center justify-between">
                <span class="text-sm text-text-muted">Manager</span>
                <a href="tel:+15166408144" class="text-sm font-medium text-action hover:text-action-hover">(516) 640-8144</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'
import { useRouter } from 'vue-router'
import { useAuthStore } from '@/stores/auth'

const router = useRouter()
const authStore = useAuthStore()

// UI state
const showUserMenu = ref(false)

// Computed
const userInitials = computed(() => {
  const name = authStore.userName
  return name.split(' ').map(n => n[0]).join('').toUpperCase()
})

// Methods
const handleLogout = () => {
  authStore.logout()
  router.push('/login')
}

// Close user menu when clicking outside
const closeUserMenu = (event) => {
  if (!event.target.closest('.relative')) {
    showUserMenu.value = false
  }
}

// Add click outside listener
document.addEventListener('click', closeUserMenu)
</script>

<style scoped>
/* Custom scrollbar for activity feed */
.space-y-4::-webkit-scrollbar {
  width: 4px;
}

.space-y-4::-webkit-scrollbar-track {
  background: var(--surface-2);
  border-radius: 2px;
}

.space-y-4::-webkit-scrollbar-thumb {
  background: var(--border);
  border-radius: 2px;
}

/* Hover effects for quick actions */
button:hover {
  transform: translateY(-1px);
  box-shadow: 0 4px 12px rgba(0, 119, 255, 0.15);
}

/* Animation for stats cards */
.bg-surface {
  transition: all 0.2s ease-in-out;
}

.bg-surface:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}
</style>
