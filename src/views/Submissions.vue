<template>
  <div class="submissions">
    <!-- Navigation Header -->
    <nav class="bg-surface border-b border-border">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <!-- Logo and Title -->
          <div class="flex items-center">
            <div class="flex-shrink-0 flex items-center">
              <div class="h-8 w-8 bg-action/10 rounded-lg flex items-center justify-center mr-3">
                <svg class="h-5 w-5 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
              </div>
              <h1 class="text-xl font-heading font-bold text-text">Contact Submissions</h1>
            </div>
          </div>

          <!-- User Menu -->
          <div class="flex items-center space-x-4">
            <!-- Refresh Button -->
            <button 
              @click="refreshSubmissions"
              :disabled="loading"
              class="inline-flex items-center px-3 py-2 border border-border text-sm font-medium rounded-md text-text bg-surface hover:bg-surface-2 disabled:opacity-50"
            >
              <svg v-if="loading" class="animate-spin -ml-1 mr-2 h-4 w-4 text-text-muted" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
              </svg>
              <svg v-else class="-ml-1 mr-2 h-4 w-4 text-text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
              </svg>
              Refresh
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
                  <router-link to="/dashboard" class="block px-4 py-2 text-sm text-text hover:bg-surface-2">Dashboard</router-link>
                  <a href="#" class="block px-4 py-2 text-sm text-text hover:bg-surface-2">Profile Settings</a>
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
      <div v-if="loading" class="text-center py-8 sm:py-12">
        <div class="inline-flex items-center text-gray-500">
          <svg class="animate-spin -ml-1 mr-3 h-4 w-4 sm:h-5 sm:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
          <span class="text-sm sm:text-base">Loading submissions...</span>
        </div>
      </div>

      <div v-else-if="submissions.length === 0" class="text-center py-8 sm:py-12">
        <svg class="mx-auto h-8 w-8 sm:h-12 sm:w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
        </svg>
        <h3 class="mt-2 text-sm sm:text-base font-medium text-gray-900">No submissions yet</h3>
        <p class="mt-1 text-xs sm:text-sm text-gray-500">Contact form submissions will appear here.</p>
      </div>

        <div v-else class="space-y-4">
          <div 
            v-for="submission in submissions" 
            :key="submission.id || submission.timestamp" 
            class="bg-surface rounded-xl border border-border p-6 hover:shadow-lg transition-all duration-200"
            :class="{
              'ring-2 ring-action/20': submission.status === 'unread',
              'opacity-75': submission.status === 'read'
            }"
          >
            <!-- Header with status indicators -->
            <div class="flex items-start justify-between mb-4">
              <div class="flex-1 min-w-0">
                <div class="flex items-center space-x-3 mb-2">
                  <h3 class="text-lg font-heading font-semibold text-text truncate">{{ submission.name }}</h3>
                  <!-- Status badge -->
                  <span 
                    class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium"
                    :class="{
                      'bg-action/10 text-action': submission.status === 'unread',
                      'bg-success/10 text-success': submission.status === 'read'
                    }"
                  >
                    <div 
                      class="w-2 h-2 rounded-full mr-1.5"
                      :class="{
                        'bg-action': submission.status === 'unread',
                        'bg-success': submission.status === 'read'
                      }"
                    ></div>
                    {{ submission.status === 'unread' ? 'New' : 'Read' }}
                  </span>
                </div>
                <p class="text-sm text-text-muted">{{ formatDate(submission.timestamp) }}</p>
              </div>
              
              <!-- Service badge -->
              <div v-if="submission.service" class="ml-4 flex-shrink-0">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-accent/10 text-accent border border-accent/20">
                  {{ submission.service.toUpperCase() }}
                </span>
              </div>
            </div>

            <!-- Contact info with action buttons -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
              <div class="space-y-3">
                <div class="flex items-center text-sm text-text">
                  <svg class="h-4 w-4 mr-3 flex-shrink-0 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                  </svg>
                  <a :href="`mailto:${submission.email}`" class="hover:text-action transition-colors">{{ submission.email }}</a>
                </div>
                <div class="flex items-center text-sm text-text">
                  <svg class="h-4 w-4 mr-3 flex-shrink-0 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                  </svg>
                  <a :href="`tel:${submission.phone}`" class="hover:text-action transition-colors">{{ submission.phone }}</a>
                </div>
              </div>
              
              <!-- Action buttons -->
              <div class="flex flex-col space-y-2">
                <button 
                  @click="markAsRead(submission)"
                  :disabled="submission.status === 'read'"
                  class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-lg transition-colors"
                  :class="{
                    'bg-action text-white hover:bg-action-hover': submission.status === 'unread',
                    'bg-surface-2 text-text-muted cursor-not-allowed': submission.status === 'read'
                  }"
                >
                  <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  {{ submission.status === 'unread' ? 'Mark as Read' : 'Read' }}
                </button>
                
                <button 
                  @click="replyToSubmission(submission)"
                  class="inline-flex items-center px-3 py-2 text-sm font-medium text-action border border-action rounded-lg hover:bg-action/5 transition-colors"
                >
                  <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
                  </svg>
                  Reply
                </button>
              </div>
            </div>
            
            <!-- Message -->
            <div v-if="submission.message" class="bg-surface-2 rounded-lg p-4 border border-border">
              <p class="text-sm text-text leading-relaxed">{{ submission.message }}</p>
            </div>
            
            <!-- Status info -->
            <div v-if="submission.lastTouchedBy" class="mt-4 pt-4 border-t border-border">
              <div class="flex items-center justify-between text-xs text-text-muted">
                <span>Last touched by {{ submission.lastTouchedBy }}</span>
                <span v-if="submission.lastTouchedAt">{{ formatDate(submission.lastTouchedAt) }}</span>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'
import { useRouter } from 'vue-router'
import { useAuthStore } from '@/stores/auth'
import submissionsData from '@/data/submissions.json'

const router = useRouter()
const authStore = useAuthStore()

// UI state
const showUserMenu = ref(false)

// Form state
const submissions = ref([])
const loading = ref(false)
const error = ref(null)

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

const fetchSubmissions = async () => {
  loading.value = true
  error.value = null
  
  try {
    // Use imported data directly - no API call needed!
    submissions.value = submissionsData.submissions || []
  } catch (err) {
    error.value = err.message
    console.error('Error loading submissions:', err)
  } finally {
    loading.value = false
  }
}

const refreshSubmissions = () => {
  fetchSubmissions()
}

const markAsRead = (submission) => {
  if (submission.status === 'unread') {
    submission.status = 'read'
    submission.readBy = authStore.userName
    submission.readAt = new Date().toISOString()
    submission.lastTouchedBy = authStore.userName
    submission.lastTouchedAt = new Date().toISOString()
    
    // Update the data file (in a real app, this would be an API call)
    updateSubmissionStatus(submission)
  }
}

const replyToSubmission = (submission) => {
  // Open email client with pre-filled reply
  const subject = `Re: Your inquiry about ${submission.service} services`
  const body = `Hi ${submission.name},\n\nThank you for your interest in our ${submission.service} services.\n\n`
  const mailtoUrl = `mailto:${submission.email}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`
  window.open(mailtoUrl)
  
  // Mark as touched
  submission.lastTouchedBy = authStore.userName
  submission.lastTouchedAt = new Date().toISOString()
  updateSubmissionStatus(submission)
}

const updateSubmissionStatus = (submission) => {
  // In a real app, this would update the backend
  // For now, we'll just update the local state
  console.log('Updated submission:', submission)
}

const formatDate = (timestamp) => {
  const date = new Date(timestamp)
  return date.toLocaleString('en-US', {
    year: 'numeric',
    month: 'short',
    day: 'numeric',
    hour: '2-digit',
    minute: '2-digit'
  })
}

// Auto-refresh every 30 seconds
let refreshInterval = null

onMounted(() => {
  fetchSubmissions()
  
  // Set up auto-refresh
  refreshInterval = setInterval(() => {
    fetchSubmissions()
  }, 30000) // 30 seconds
})

// Clean up interval on unmount
onUnmounted(() => {
  if (refreshInterval) {
    clearInterval(refreshInterval)
  }
})
</script>
