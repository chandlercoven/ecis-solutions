<template>
  <div class="dashboard min-h-screen bg-bg">
    <!-- Page Header -->
    <div class="bg-surface border-b border-border">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="flex items-center space-x-3">
          <div class="h-10 w-10 bg-action/10 rounded-lg flex items-center justify-center">
            <svg class="h-6 w-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
          </div>
          <h1 class="text-2xl font-heading font-bold text-text">Dashboard</h1>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <!-- Welcome Section -->
      <div class="mb-8">
        <h2 class="text-2xl font-heading font-bold text-text mb-2">
          Welcome back, {{ authStore.userName }}!
        </h2>
        <p class="text-text-muted">
          Here's what's happening with your contact form submissions today.
        </p>
      </div>

      <!-- Submission Stats -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Total Submissions -->
        <div class="bg-surface rounded-xl p-6 border border-border">
          <div class="flex items-center">
            <div class="p-2 bg-action/10 rounded-lg">
              <svg class="h-6 w-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
            </div>
            <div class="ml-4">
              <p class="text-sm font-medium text-text-muted">Total Submissions</p>
              <p class="text-2xl font-bold text-text">{{ submissionStats.total }}</p>
            </div>
          </div>
        </div>

        <!-- New Today -->
        <div class="bg-surface rounded-xl p-6 border border-border">
          <div class="flex items-center">
            <div class="p-2 bg-warning/10 rounded-lg">
              <svg class="h-6 w-6 text-warning" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z" />
              </svg>
            </div>
            <div class="ml-4">
              <p class="text-sm font-medium text-text-muted">New Today</p>
              <p class="text-2xl font-bold text-text">{{ submissionStats.newToday }}</p>
            </div>
          </div>
        </div>

        <!-- Read -->
        <div class="bg-surface rounded-xl p-6 border border-border">
          <div class="flex items-center">
            <div class="p-2 bg-success/10 rounded-lg">
              <svg class="h-6 w-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div class="ml-4">
              <p class="text-sm font-medium text-text-muted">Read</p>
              <p class="text-2xl font-bold text-text">{{ submissionStats.read }}</p>
            </div>
          </div>
        </div>

        <!-- Unread -->
        <div class="bg-surface rounded-xl p-6 border border-border">
          <div class="flex items-center">
            <div class="p-2 bg-accent/10 rounded-lg">
              <svg class="h-6 w-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div class="ml-4">
              <p class="text-sm font-medium text-text-muted">Unread</p>
              <p class="text-2xl font-bold text-text">{{ submissionStats.unread }}</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Content Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Recent Submissions -->
        <div class="lg:col-span-2">
          <div class="bg-surface rounded-xl p-6 border border-border">
            <div class="flex items-center justify-between mb-4">
              <h3 class="text-lg font-heading font-semibold text-text">Recent Submissions</h3>
              <router-link to="/submissions" class="text-sm text-action hover:text-action-hover">
                View All →
              </router-link>
            </div>
            
            <div v-if="loading" class="text-center py-8">
              <div class="inline-flex items-center text-gray-500">
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                  <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                <span>Loading submissions...</span>
              </div>
            </div>

            <div v-else-if="recentSubmissions.length === 0" class="text-center py-8">
              <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
              </svg>
              <h3 class="mt-2 text-sm font-medium text-gray-900">No submissions yet</h3>
              <p class="mt-1 text-sm text-gray-500">Get started by sharing your contact form.</p>
            </div>

            <div v-else class="space-y-4">
              <div v-for="submission in recentSubmissions" :key="submission.id" 
                   class="flex items-start space-x-3 p-3 rounded-lg hover:bg-surface-2 transition-colors">
                <div class="w-2 h-2 rounded-full mt-2" 
                     :class="submission.status === 'unread' ? 'bg-action' : 'bg-success'"></div>
                <div class="flex-1 min-w-0">
                  <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-text truncate">{{ submission.name }}</p>
                    <span class="text-xs text-text-muted">{{ formatTime(submission.timestamp) }}</span>
                  </div>
                  <p class="text-sm text-text-muted">{{ submission.email }}</p>
                  <p v-if="submission.service" class="text-xs text-accent">{{ submission.service }}</p>
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
              <router-link to="/submissions" class="w-full text-left p-3 bg-action/5 hover:bg-action/10 rounded-lg border border-action/20 transition-colors">
                <div class="flex items-center space-x-3">
                  <svg class="h-5 w-5 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                  </svg>
                  <span class="text-sm font-medium text-text">View All Submissions</span>
                </div>
              </router-link>
              
              <button @click="refreshSubmissions" class="w-full text-left p-3 bg-action/5 hover:bg-action/10 rounded-lg border border-action/20 transition-colors">
                <div class="flex items-center space-x-3">
                  <svg class="h-5 w-5 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                  </svg>
                  <span class="text-sm font-medium text-text">Refresh Data</span>
                </div>
              </button>
            </div>
          </div>

          <!-- Contact Info -->
          <div class="bg-surface rounded-xl p-6 border border-border">
            <h3 class="text-lg font-heading font-semibold text-text mb-4">Contact Info</h3>
            <div class="space-y-3">
              <div class="flex items-center justify-between">
                <span class="text-sm text-text-muted">Emergency Line</span>
                <a href="tel:+15612490897" class="text-sm font-medium text-action hover:text-action-hover">(561) 249-0897</a>
              </div>
              <div class="flex items-center justify-between">
                <span class="text-sm text-text-muted">Dispatch</span>
                <a href="tel:+15612490897" class="text-sm font-medium text-action hover:text-action-hover">(561) 249-0897</a>
              </div>
              <div class="flex items-center justify-between">
                <span class="text-sm text-text-muted">Manager</span>
                <a href="tel:+15612490897" class="text-sm font-medium text-action hover:text-action-hover">(561) 249-0897</a>
              </div>
            </div>
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

const submissions = ref([])
const loading = ref(true)
const error = ref(null)

// Computed stats based on submissions
const submissionStats = computed(() => {
  const total = submissions.value.length
  const read = submissions.value.filter(s => s.status === 'read').length
  const unread = submissions.value.filter(s => s.status === 'unread').length
  
  // Count new submissions today
  const today = new Date().toDateString()
  const newToday = submissions.value.filter(s => {
    const submissionDate = new Date(s.timestamp).toDateString()
    return submissionDate === today
  }).length

  return { total, read, unread, newToday }
})

// Get recent submissions (last 5)
const recentSubmissions = computed(() => {
  return submissions.value.slice(0, 5)
})

const fetchSubmissions = async () => {
  loading.value = true
  error.value = null
  
  try {
    // For now, use mock data since the backend is broken
    // TODO: Replace with real API call when backend is fixed
    const mockSubmissions = [
      {
        id: 1,
        name: 'John Smith',
        email: 'john@example.com',
        phone: '(555) 123-4567',
        service: 'Security Consultation',
        message: 'Interested in security services for our office building.',
        status: 'unread',
        timestamp: new Date().toISOString()
      },
      {
        id: 2,
        name: 'Sarah Johnson',
        email: 'sarah@company.com',
        phone: '(555) 987-6543',
        service: 'Patrol Services',
        message: 'Need regular patrol services for our warehouse.',
        status: 'read',
        timestamp: new Date(Date.now() - 2 * 60 * 60 * 1000).toISOString()
      },
      {
        id: 3,
        name: 'Mike Wilson',
        email: 'mike@business.org',
        phone: '(555) 456-7890',
        service: 'Emergency Response',
        message: 'Looking for 24/7 emergency response services.',
        status: 'unread',
        timestamp: new Date(Date.now() - 4 * 60 * 60 * 1000).toISOString()
      }
    ]
    
    submissions.value = mockSubmissions
  } catch (e) {
    error.value = 'Failed to fetch submissions: ' + e.message
    console.error(e)
  } finally {
    loading.value = false
  }
}

const refreshSubmissions = () => {
  fetchSubmissions()
}

const formatTime = (isoString) => {
  const date = new Date(isoString)
  const now = new Date()
  const diffInHours = Math.floor((now - date) / (1000 * 60 * 60))
  
  if (diffInHours < 1) {
    return 'Just now'
  } else if (diffInHours < 24) {
    return `${diffInHours}h ago`
  } else {
    const diffInDays = Math.floor(diffInHours / 24)
    return `${diffInDays}d ago`
  }
}

onMounted(() => {
  fetchSubmissions()
})
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
button:hover, a:hover {
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