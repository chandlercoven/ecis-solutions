<template>
  <div class="submissions min-h-screen bg-bg">
    <!-- Mobile-First Page Header -->
    <div class="bg-surface border-b border-border">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6">
        <!-- Mobile: Stack vertically, Desktop: Horizontal -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-3 sm:space-y-0">
          <!-- Title Section -->
          <div class="flex items-center space-x-3">
            <div class="h-8 w-8 sm:h-10 sm:w-10 bg-action/10 rounded-lg flex items-center justify-center">
              <svg class="h-5 w-5 sm:h-6 sm:w-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
            </div>
            <div class="flex flex-col">
              <h1 class="text-xl sm:text-2xl font-heading font-bold text-text">Contact Submissions</h1>
              <p v-if="submissions.length > 0" class="text-sm text-text-muted mt-1">
                {{ submissions.filter(s => s.status === 'unread').length }} unread, {{ submissions.length }} total
              </p>
            </div>
          </div>
          
          <!-- Action Buttons - Mobile: Full width, Desktop: Inline -->
          <div class="w-full sm:w-auto flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3">
            <button 
              @click="refreshSubmissions"
              :disabled="loading"
              class="w-full sm:w-auto inline-flex items-center justify-center px-4 py-2 border border-border text-sm font-medium rounded-md text-text bg-surface hover:bg-surface-2 disabled:opacity-50 transition-colors min-h-[44px]"
            >
              <svg v-if="loading" class="animate-spin h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
              </svg>
              <svg v-else class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
              </svg>
              Refresh
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <div v-if="loading" class="text-center py-12">
        <div class="inline-flex items-center text-gray-500">
          <svg class="animate-spin -ml-1 mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
          <span>Loading submissions...</span>
        </div>
      </div>

      <div v-else-if="submissions.length === 0" class="text-center py-12">
        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
        </svg>
        <h3 class="mt-2 text-base font-medium text-gray-900">No submissions yet</h3>
        <p class="mt-1 text-sm text-gray-500">Contact form submissions will appear here.</p>
      </div>

      <div v-else class="space-y-4 sm:space-y-6">
        <div v-for="submission in submissions" :key="submission.id" class="bg-surface rounded-xl border border-border p-4 sm:p-6 hover:shadow-lg transition-all duration-200">
          <!-- Mobile-First Header -->
          <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between mb-4 space-y-3 sm:space-y-0">
            <div class="flex-1 min-w-0">
              <div class="flex flex-col sm:flex-row sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                <h3 class="text-base sm:text-lg font-heading font-semibold text-text truncate">{{ submission.name }}</h3>
                <!-- Status Badge - Mobile: Inline, Desktop: Separate -->
                <span 
                  class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium w-fit"
                  :class="{
                    'bg-action/10 text-action': submission.status === 'unread',
                    'bg-success/10 text-success': submission.status === 'read'
                  }"
                >
                  {{ submission.status === 'unread' ? 'New' : 'Read' }}
                </span>
              </div>
              <p class="text-sm text-text-muted mt-1">{{ formatDate(submission.timestamp) }}</p>
              <p v-if="submission.updated_by" class="text-xs text-text-muted mt-1">
                Last updated by {{ submission.updated_by }} 
                <span v-if="submission.updated_at">on {{ formatDate(submission.updated_at) }}</span>
              </p>
            </div>
          </div>

          <!-- Contact Info -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <div class="space-y-3">
              <div class="flex items-center space-x-3">
                <svg class="h-4 w-4 text-text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span class="text-sm text-text">{{ submission.email }}</span>
              </div>
              
              <div class="flex items-center space-x-3">
                <svg class="h-4 w-4 text-text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <span class="text-sm text-text">{{ submission.phone }}</span>
              </div>
            </div>
            
            <div v-if="submission.service" class="flex items-center space-x-3">
              <svg class="h-4 w-4 text-text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <span class="text-sm text-text">{{ submission.service }}</span>
            </div>
          </div>

          <!-- Message -->
          <div v-if="submission.message" class="mb-4">
            <p class="text-sm text-text-muted">{{ submission.message }}</p>
          </div>

          <!-- Mobile-First Actions -->
          <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-3 sm:space-y-0">
            <div class="flex items-center space-x-2">
              <button 
                v-if="submission.status === 'unread'"
                @click="markAsRead(submission)"
                class="inline-flex items-center px-2 py-1 text-xs font-medium text-text-muted hover:text-action transition-colors group min-h-[44px]"
                title="Mark as read"
              >
                <svg class="h-3 w-3 mr-1 opacity-60 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Mark read
              </button>
              <button 
                v-else
                @click="markAsUnread(submission)"
                class="inline-flex items-center px-2 py-1 text-xs font-medium text-text-muted hover:text-warning transition-colors group min-h-[44px]"
                title="Mark as unread"
              >
                <svg class="h-3 w-3 mr-1 opacity-60 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.707A1 1 0 013 7V4z"></path>
                </svg>
                Mark unread
              </button>
            </div>
            <button 
              @click="replyToSubmission(submission)"
              class="w-full sm:w-auto inline-flex items-center justify-center px-3 py-2 text-sm font-medium text-action border border-action rounded-md hover:bg-action/5 transition-colors min-h-[44px]"
            >
              <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
              </svg>
              Reply
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, computed } from 'vue'
import { useAuthStore } from '@/stores/auth'

const authStore = useAuthStore()

// Debug auth state
console.log('🔍 Submissions.vue: Auth state on mount:', {
  isAuthenticated: authStore.isAuthenticated,
  token: authStore.token ? authStore.token.substring(0, 20) + '...' : 'NO TOKEN',
  user: authStore.userName
})

// Simple state
const submissions = ref([])
const loading = ref(false)

// Load submissions from API
const loadSubmissions = async () => {
  loading.value = true
  try {
    // Ensure auth store is initialized
    if (!authStore.token) {
      console.log('🔄 Submissions.vue: No token found, initializing auth store')
      authStore.initializeAuth()
    }
    
    // Fallback: get token directly from localStorage
    const directToken = localStorage.getItem('ecis_token')
    const tokenToUse = authStore.token || directToken
    
    console.log('🔍 Submissions.vue: Making API request with token:', tokenToUse ? tokenToUse.substring(0, 20) + '...' : 'NO TOKEN')
    console.log('🔍 Submissions.vue: Full token (first 30 chars):', tokenToUse ? tokenToUse.substring(0, 30) : 'NO TOKEN')
    console.log('🔍 Submissions.vue: Direct localStorage token:', directToken ? directToken.substring(0, 20) + '...' : 'NO TOKEN')
    
    if (!tokenToUse) {
      console.error('❌ Submissions.vue: No authentication token available')
      return
    }
    
    const headers = {
      'Authorization': `Bearer ${tokenToUse}`,
      'Content-Type': 'application/json',
      'Accept': 'application/json'
    }
    
    console.log('🔍 Submissions.vue: Request headers:', headers)
    
    const response = await fetch('/api/submissions', {
      headers
    })
    
    console.log('🔍 Submissions.vue: API response status:', response.status)
    
    if (response.ok) {
      const data = await response.json()
      console.log('✅ Submissions.vue: API response data:', data)
      submissions.value = data.submissions || []
    } else {
      const errorData = await response.text()
      console.error('❌ Submissions.vue: API Error:', response.status, response.statusText, errorData)
    }
  } catch (error) {
    console.error('❌ Submissions.vue: Error loading submissions:', error)
  } finally {
    loading.value = false
  }
}

// Refresh submissions
const refreshSubmissions = () => {
  loadSubmissions()
}

// Mark submission as read
const markAsRead = async (submission) => {
  try {
    // Update locally first for immediate feedback
    const originalStatus = submission.status
    submission.status = 'read'
    submission.updated_by = authStore.userName
    submission.updated_at = new Date().toISOString()
    
    // Send to API to persist the change
    const response = await fetch(`/api/submissions/${submission.id}/status`, {
      method: 'PATCH',
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Content-Type': 'application/json',
        'Accept': 'application/json'
      },
      body: JSON.stringify({
        status: 'read',
        updated_by: authStore.userName
      })
    })
    
    if (!response.ok) {
      throw new Error('Failed to update status')
    }
    
    console.log('✅ Marked as read by:', authStore.userName)
  } catch (error) {
    console.error('❌ Error marking as read:', error)
    // Revert on error
    submission.status = originalStatus
    submission.updated_by = null
    submission.updated_at = null
  }
}

// Mark submission as unread
const markAsUnread = async (submission) => {
  try {
    // Update locally first for immediate feedback
    const originalStatus = submission.status
    submission.status = 'unread'
    submission.updated_by = authStore.userName
    submission.updated_at = new Date().toISOString()
    
    // Send to API to persist the change
    const response = await fetch(`/api/submissions/${submission.id}/status`, {
      method: 'PATCH',
      headers: {
        'Authorization': `Bearer ${authStore.token}`,
        'Content-Type': 'application/json',
        'Accept': 'application/json'
      },
      body: JSON.stringify({
        status: 'unread',
        updated_by: authStore.userName
      })
    })
    
    if (!response.ok) {
      throw new Error('Failed to update status')
    }
    
    console.log('✅ Marked as unread by:', authStore.userName)
  } catch (error) {
    console.error('❌ Error marking as unread:', error)
    // Revert on error
    submission.status = originalStatus
    submission.updated_by = null
    submission.updated_at = null
  }
}

// Reply to submission
const replyToSubmission = (submission) => {
  // TODO: Implement reply functionality
  console.log('Reply to:', submission.name)
}

// Format date
const formatDate = (timestamp) => {
  return new Date(timestamp).toLocaleDateString('en-US', {
    year: 'numeric',
    month: 'short',
    day: 'numeric',
    hour: '2-digit',
    minute: '2-digit'
  })
}

// Load submissions on mount
onMounted(async () => {
    console.log('🔍 Submissions.vue: Component mounted, calling loadSubmissions (AUTOMATED DEPLOYMENT TEST)')
  console.log('🔍 Submissions.vue: Auth state at mount:', {
    isAuthenticated: authStore.isAuthenticated,
    token: authStore.token ? authStore.token.substring(0, 20) + '...' : 'NO TOKEN',
    user: authStore.userName
  })
  
  // Wait a bit for auth store to be fully initialized
  await new Promise(resolve => setTimeout(resolve, 100))
  
  console.log('🔍 Submissions.vue: After delay, auth state:', {
    isAuthenticated: authStore.isAuthenticated,
    token: authStore.token ? authStore.token.substring(0, 20) + '...' : 'NO TOKEN',
    user: authStore.userName
  })
  
  loadSubmissions()
})
</script>