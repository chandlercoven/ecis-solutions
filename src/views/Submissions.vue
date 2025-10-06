<template>
  <div class="submissions min-h-screen bg-bg">
    <!-- Page Header -->
    <div class="bg-surface border-b border-border">
      <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-2 sm:py-6">
        <!-- Mobile: Ultra-compact single row, Desktop: Full layout -->
        <div class="flex items-center justify-between">
          <!-- Mobile: Compact title with indicators inline -->
          <div class="flex items-center space-x-2 sm:space-x-3">
            <div class="h-5 w-5 sm:h-10 sm:w-10 bg-action/10 rounded-lg flex items-center justify-center">
              <svg class="h-3 w-3 sm:h-6 sm:w-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
            </div>
            <h1 class="text-base sm:text-2xl font-heading font-bold text-text">Submissions</h1>
            
            <!-- Mobile: Inline indicators -->
            <div class="flex items-center space-x-1 sm:hidden">
              <!-- New submissions badge -->
              <span v-if="newSubmissionsCount > 0" class="inline-flex items-center px-1 py-0.5 rounded-full text-xs font-medium bg-action text-white animate-pulse">
                {{ newSubmissionsCount }}
              </span>
              <!-- Connection status -->
              <div 
                class="w-1.5 h-1.5 rounded-full"
                :class="isSSEConnected ? 'bg-success animate-pulse' : 'bg-danger'"
                :title="isSSEConnected ? 'Live' : 'Offline'"
              ></div>
            </div>
          </div>
          
          <!-- Desktop: Full indicators -->
          <div class="hidden sm:flex items-center space-x-3">
            <!-- New submissions indicator -->
            <div v-if="newSubmissionsCount > 0" class="flex items-center space-x-2">
              <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-action text-white animate-pulse">
                {{ newSubmissionsCount }} new
              </span>
              <button 
                @click="newSubmissionsCount = 0"
                class="text-xs text-text-muted hover:text-action transition-colors"
                title="Dismiss new submissions indicator"
              >
                ✕
              </button>
            </div>
            
            <!-- Connection status indicator -->
            <div class="flex items-center space-x-2">
              <div class="flex items-center space-x-1">
                <div 
                  class="w-2 h-2 rounded-full"
                  :class="isSSEConnected ? 'bg-success animate-pulse' : 'bg-danger'"
                  :title="isSSEConnected ? 'Real-time connection active' : 'Real-time connection offline'"
                ></div>
                <span class="text-xs text-text-muted">
                  {{ isSSEConnected ? 'Live' : 'Offline' }}
                </span>
              </div>
            </div>
          </div>
          
          <!-- Action Buttons - Mobile: Icon-only, Desktop: Full -->
          <div class="flex items-center space-x-1 sm:space-x-3">
            <!-- Filter Toggle -->
            <button 
              @click="showFilters = !showFilters"
              class="inline-flex items-center justify-center px-2 sm:px-3 py-1.5 sm:py-2 border border-border text-sm font-medium rounded-md text-text bg-surface hover:bg-surface-2 transition-colors min-h-[36px] sm:min-h-[44px]"
              :class="{ 'bg-action/10 border-action text-action': showFilters }"
              :title="showFilters ? 'Hide filters' : 'Show filters'"
            >
              <svg class="h-4 w-4 sm:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.707A1 1 0 013 7V4z" />
              </svg>
              <span class="hidden sm:inline">Filter</span>
            </button>
            
            <!-- Auto-Refresh Toggle -->
            <button 
              @click="toggleAutoRefresh"
              class="inline-flex items-center justify-center px-2 sm:px-3 py-1.5 sm:py-2 border border-border text-sm font-medium rounded-md transition-colors min-h-[36px] sm:min-h-[44px]"
              :class="isAutoRefreshEnabled ? 'bg-action/10 border-action text-action' : 'text-text bg-surface hover:bg-surface-2'"
              :title="isAutoRefreshEnabled ? 'Auto-refresh enabled (10s)' : 'Auto-refresh disabled'"
            >
              <svg v-if="isAutoRefreshEnabled" class="h-4 w-4 sm:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
              <svg v-else class="h-4 w-4 sm:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="hidden sm:inline">{{ isAutoRefreshEnabled ? 'Auto-Refresh ON' : 'Auto-Refresh OFF' }}</span>
            </button>
            
            <!-- Refresh Button -->
            <button 
              @click="refreshSubmissions"
              :disabled="loading"
              class="inline-flex items-center justify-center px-2 sm:px-4 py-1.5 sm:py-2 border border-border text-sm font-medium rounded-md text-text bg-surface hover:bg-surface-2 disabled:opacity-50 transition-colors min-h-[36px] sm:min-h-[44px]"
              title="Refresh submissions"
            >
              <svg v-if="loading" class="animate-spin h-4 w-4 sm:mr-2 text-text-muted" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
              </svg>
              <svg v-else class="h-4 w-4 sm:mr-2 text-text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
              </svg>
              <span class="hidden sm:inline">Refresh</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Filter Panel -->
    <div v-if="showFilters" class="bg-surface-2 border-b border-border">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <!-- Mobile: Single column, Desktop: Multi-column -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
          <!-- Status Filter -->
          <div>
            <label class="block text-sm font-medium text-text mb-2">Status</label>
            <select v-model="filters.status" class="w-full px-3 py-2 bg-surface border border-border rounded-md text-text focus:border-action focus:ring-2 focus:ring-focus">
              <option value="">All Status</option>
              <option value="unread">Unread</option>
              <option value="read">Read</option>
            </select>
          </div>
          
          <!-- Service Filter -->
          <div>
            <label class="block text-sm font-medium text-text mb-2">Service</label>
            <select v-model="filters.service" class="w-full px-3 py-2 bg-surface border border-border rounded-md text-text focus:border-action focus:ring-2 focus:ring-focus">
              <option value="">All Services</option>
              <option value="security-patrol">Security Patrol</option>
              <option value="cctv-monitoring">CCTV Monitoring</option>
              <option value="hoa-security">HOA Security</option>
            </select>
          </div>
          
          <!-- Date Range -->
          <div>
            <label class="block text-sm font-medium text-text mb-2">Date Range</label>
            <select v-model="filters.dateRange" class="w-full px-3 py-2 bg-surface border border-border rounded-md text-text focus:border-action focus:ring-2 focus:ring-focus">
              <option value="">All Time</option>
              <option value="today">Today</option>
              <option value="week">This Week</option>
              <option value="month">This Month</option>
            </select>
          </div>
          
          <!-- Clear Filters -->
          <div class="flex items-end">
            <button 
              @click="clearFilters"
              class="w-full px-4 py-2 text-sm font-medium text-text-muted border border-border rounded-md hover:bg-surface hover:text-text transition-colors"
            >
              Clear Filters
            </button>
          </div>
        </div>
      </div>
    </div>

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

      <div v-else-if="filteredSubmissions.length === 0" class="text-center py-8 sm:py-12">
        <svg class="mx-auto h-8 w-8 sm:h-12 sm:w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
        </svg>
        <h3 class="mt-2 text-sm sm:text-base font-medium text-gray-900">No submissions yet</h3>
        <p class="mt-1 text-xs sm:text-sm text-gray-500">Contact form submissions will appear here.</p>
      </div>

        <div v-else class="space-y-4 sm:space-y-6">
          <!-- Bulk Actions Bar -->
          <div v-if="selectedSubmissions.length > 0" class="bg-action/5 border border-action/20 rounded-lg p-4 mb-4">
            <div class="flex items-center justify-between">
              <div class="flex items-center space-x-2">
                <span class="text-sm font-medium text-action">{{ selectedSubmissions.length }} selected</span>
                <button @click="clearSelection" class="text-xs text-text-muted hover:text-action">Clear</button>
              </div>
              <div class="flex items-center space-x-2">
                <button @click="bulkMarkAsRead" class="px-3 py-1.5 text-xs font-medium bg-action text-white rounded-md hover:bg-action-hover">
                  Mark as Read
                </button>
                <button @click="bulkExport" class="px-3 py-1.5 text-xs font-medium border border-action text-action rounded-md hover:bg-action/5">
                  Export
                </button>
              </div>
            </div>
          </div>

          <div 
            v-for="submission in filteredSubmissions" 
            :key="submission.id || submission.timestamp" 
            class="bg-surface rounded-xl border border-border p-4 sm:p-6 hover:shadow-lg transition-all duration-200 group cursor-pointer"
            :class="{
              'ring-2 ring-action/20': submission.status === 'unread',
              'ring-2 ring-action/40': selectedSubmissions.includes(submission.id),
              'opacity-75': submission.status === 'read'
            }"
            @click="toggleSelection(submission.id)"
          >
            <!-- Enhanced Header with Priority & Selection Indicators -->
            <div class="flex items-start justify-between mb-4">
              <div class="flex-1 min-w-0">
                <!-- Name with priority indicator -->
                <div class="flex items-center space-x-2 mb-2">
                  <h3 class="text-base sm:text-lg font-heading font-semibold text-text truncate">{{ submission.name }}</h3>
                  
                  <!-- Priority indicator (enhanced signifier) -->
                  <div class="flex items-center space-x-1">
                    <div class="w-2 h-2 rounded-full" :class="getPriorityColor(submission.priority)"></div>
                    <span class="text-xs text-text-muted">{{ getPriorityLabel(submission.priority) }}</span>
                  </div>
                </div>
                
                <!-- Status and timestamp with enhanced signifiers -->
                <div class="flex items-center space-x-3">
                  <!-- Status badge with animation for unread -->
                  <span 
                    class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium transition-all duration-200"
                    :class="{
                      'bg-action/10 text-action animate-pulse': submission.status === 'unread',
                      'bg-success/10 text-success': submission.status === 'read'
                    }"
                  >
                    <div 
                      class="w-2 h-2 rounded-full mr-1.5"
                      :class="{
                        'bg-action animate-pulse': submission.status === 'unread',
                        'bg-success': submission.status === 'read'
                      }"
                    ></div>
                    {{ submission.status === 'unread' ? 'New' : 'Read' }}
                  </span>
                  
                  <!-- Timestamp with relative time -->
                  <span class="text-sm text-text-muted">{{ formatDate(submission.timestamp) }}</span>
                </div>
              </div>
              
              <!-- Service badge and selection indicator -->
              <div class="flex items-center space-x-2">
                <!-- Service badge -->
                <div v-if="submission.service" class="hidden sm:block">
                  <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
                    {{ submission.service.toUpperCase() }}
                  </span>
                </div>
                
                <!-- Selection indicator (enhanced signifier) -->
                <div class="flex items-center justify-center w-6 h-6 rounded-full border-2 transition-all duration-200"
                     :class="selectedSubmissions.includes(submission.id) 
                       ? 'bg-action border-action text-white' 
                       : 'border-border hover:border-action/50'">
                  <svg v-if="selectedSubmissions.includes(submission.id)" class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </div>
            </div>

            <!-- Contact info with action buttons - Mobile: Stack, Desktop: Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
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
              
              <!-- Enhanced Action Buttons with Better Signifiers -->
              <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2">
                <!-- Primary Action - Mark as Read -->
                <button 
                  @click.stop="markAsRead(submission)"
                  :disabled="submission.status === 'read'"
                  class="inline-flex items-center justify-center px-3 py-2 text-sm font-medium rounded-lg transition-all duration-200 min-h-[44px] min-w-[120px]"
                  :class="{
                    'bg-action text-white hover:bg-action-hover shadow-md hover:shadow-lg transform hover:-translate-y-0.5': submission.status === 'unread',
                    'bg-surface-2 text-text-muted cursor-not-allowed opacity-50': submission.status === 'read'
                  }"
                  :title="submission.status === 'unread' ? 'Mark this submission as read' : 'Already read'"
                >
                  <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  {{ submission.status === 'unread' ? 'Mark as Read' : 'Read' }}
                </button>
                
                <!-- Secondary Action - Reply -->
                <button 
                  @click.stop="replyToSubmission(submission)"
                  class="inline-flex items-center justify-center px-3 py-2 text-sm font-medium text-action border border-action rounded-lg hover:bg-action/5 hover:border-action/80 transition-all duration-200 min-h-[44px] min-w-[100px]"
                  title="Reply to this submission"
                >
                  <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
                  </svg>
                  Reply
                </button>
                
                <!-- Tertiary Action - More Options (Enhanced Signifier) -->
                <div class="relative">
                  <button 
                    @click.stop="toggleMoreActions(submission.id)"
                    class="inline-flex items-center justify-center p-2 text-text-muted hover:text-text hover:bg-surface-2 rounded-lg transition-all duration-200 min-h-[44px] min-w-[44px]"
                    title="More actions"
                  >
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                    </svg>
                  </button>
                  
                  <!-- Dropdown Menu (Hidden Signifier) -->
                  <div v-if="activeMoreActions === submission.id" 
                       class="absolute right-0 top-full mt-1 w-48 bg-surface border border-border rounded-lg shadow-lg z-10">
                    <div class="py-1">
                      <button @click="exportSubmission(submission)" 
                              class="w-full px-4 py-2 text-sm text-text hover:bg-surface-2 text-left flex items-center">
                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Export
                      </button>
                      <button @click="flagSubmission(submission)" 
                              class="w-full px-4 py-2 text-sm text-text hover:bg-surface-2 text-left flex items-center">
                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2v4.01"></path>
                        </svg>
                        Flag
                      </button>
                      <button @click="deleteSubmission(submission)" 
                              class="w-full px-4 py-2 text-sm text-danger hover:bg-danger/5 text-left flex items-center">
                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                        Delete
                      </button>
                    </div>
                  </div>
                </div>
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
const showFilters = ref(false)

// Form state
const submissions = ref([])
const loading = ref(false)
const error = ref(null)

// Real-time state
const lastSubmissionCount = ref(0)
const newSubmissionsCount = ref(0)
const autoRefreshInterval = ref(null)
const isAutoRefreshEnabled = ref(true)
const refreshInterval = 10000 // 10 seconds
const eventSource = ref(null)
const isSSEConnected = ref(false)

// Enhanced interaction state
const selectedSubmissions = ref([])
const activeMoreActions = ref(null)

// Filter state
const filters = ref({
  status: '',
  service: '',
  dateRange: ''
})

// Computed properties
const filteredSubmissions = computed(() => {
  let filtered = submissions.value

  // Filter by status
  if (filters.value.status) {
    filtered = filtered.filter(sub => sub.status === filters.value.status)
  }

  // Filter by service
  if (filters.value.service) {
    filtered = filtered.filter(sub => sub.service === filters.value.service)
  }

  // Filter by date range
  if (filters.value.dateRange) {
    const now = new Date()
    const today = new Date(now.getFullYear(), now.getMonth(), now.getDate())
    
    filtered = filtered.filter(sub => {
      const subDate = new Date(sub.timestamp)
      
      switch (filters.value.dateRange) {
        case 'today':
          return subDate >= today
        case 'week':
          const weekAgo = new Date(today.getTime() - 7 * 24 * 60 * 60 * 1000)
          return subDate >= weekAgo
        case 'month':
          const monthAgo = new Date(today.getTime() - 30 * 24 * 60 * 60 * 1000)
          return subDate >= monthAgo
        default:
          return true
      }
    })
  }

  return filtered
})

// Methods

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

const clearFilters = () => {
  filters.value = {
    status: '',
    service: '',
    dateRange: ''
  }
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

// Enhanced interaction methods
const toggleSelection = (submissionId) => {
  const index = selectedSubmissions.value.indexOf(submissionId)
  if (index > -1) {
    selectedSubmissions.value.splice(index, 1)
  } else {
    selectedSubmissions.value.push(submissionId)
  }
}

const clearSelection = () => {
  selectedSubmissions.value = []
}

const bulkMarkAsRead = () => {
  selectedSubmissions.value.forEach(id => {
    const submission = submissions.value.find(s => s.id === id)
    if (submission && submission.status === 'unread') {
      markAsRead(submission)
    }
  })
  clearSelection()
}

const bulkExport = () => {
  const selectedData = submissions.value.filter(s => selectedSubmissions.value.includes(s.id))
  console.log('Exporting selected submissions:', selectedData)
  alert(`Exporting ${selectedData.length} submissions`)
  clearSelection()
}

const toggleMoreActions = (submissionId) => {
  activeMoreActions.value = activeMoreActions.value === submissionId ? null : submissionId
}

const exportSubmission = (submission) => {
  console.log('Exporting submission:', submission)
  alert(`Exporting ${submission.name}`)
  activeMoreActions.value = null
}

const flagSubmission = (submission) => {
  console.log('Flagging submission:', submission)
  alert(`Flagging ${submission.name}`)
  activeMoreActions.value = null
}

const deleteSubmission = (submission) => {
  if (confirm(`Are you sure you want to delete ${submission.name}'s submission?`)) {
    const index = submissions.value.findIndex(s => s.id === submission.id)
    if (index > -1) {
      submissions.value.splice(index, 1)
    }
  }
  activeMoreActions.value = null
}

// Priority helpers
const getPriorityColor = (priority) => {
  switch (priority) {
    case 'high': return 'bg-danger'
    case 'medium': return 'bg-warning'
    case 'low': return 'bg-success'
    default: return 'bg-text-muted'
  }
}

const getPriorityLabel = (priority) => {
  switch (priority) {
    case 'high': return 'High'
    case 'medium': return 'Medium'
    case 'low': return 'Low'
    default: return 'Normal'
  }
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

// Real-time submission management
const startAutoRefresh = () => {
  if (autoRefreshInterval.value) {
    clearInterval(autoRefreshInterval.value)
  }
  
  autoRefreshInterval.value = setInterval(async () => {
    if (isAutoRefreshEnabled.value) {
      await checkForNewSubmissions()
    }
  }, refreshInterval)
}

const stopAutoRefresh = () => {
  if (autoRefreshInterval.value) {
    clearInterval(autoRefreshInterval.value)
    autoRefreshInterval.value = null
  }
}

const checkForNewSubmissions = async () => {
  try {
    const response = await fetch('/api/submissions', {
      headers: {
        'Authorization': 'Bearer ecis-team-2024'
      }
    })
    
    if (response.ok) {
      const data = await response.json()
      const currentCount = data.submissions?.length || 0
      
      // Check if there are new submissions
      if (currentCount > lastSubmissionCount.value) {
        newSubmissionsCount.value = currentCount - lastSubmissionCount.value
        lastSubmissionCount.value = currentCount
        
        // Show notification
        showNewSubmissionNotification()
        
        // Refresh the submissions list
        await fetchSubmissions()
      }
    }
  } catch (error) {
    console.error('Error checking for new submissions:', error)
  }
}

const showNewSubmissionNotification = () => {
  // Create browser notification if permission granted
  if (Notification.permission === 'granted') {
    new Notification('New Submission Received!', {
      body: `${newSubmissionsCount.value} new submission${newSubmissionsCount.value > 1 ? 's' : ''} received`,
      icon: '/logo.png',
      tag: 'new-submission'
    })
  }
  
  // Show in-app notification
  console.log(`🔔 ${newSubmissionsCount.value} new submission${newSubmissionsCount.value > 1 ? 's' : ''} received!`)
}

const toggleAutoRefresh = () => {
  isAutoRefreshEnabled.value = !isAutoRefreshEnabled.value
  if (isAutoRefreshEnabled.value) {
    startAutoRefresh()
    startSSEConnection()
  } else {
    stopAutoRefresh()
    stopSSEConnection()
  }
}

// Server-Sent Events for real-time updates
const startSSEConnection = () => {
  if (eventSource.value) {
    eventSource.value.close()
  }
  
  try {
    eventSource.value = new EventSource('http://localhost:8100/api/submissions/stream')
    
    eventSource.value.onopen = () => {
      isSSEConnected.value = true
      console.log('🔗 SSE connection established')
    }
    
    eventSource.value.onmessage = (event) => {
      const data = JSON.parse(event.data)
      if (data.type === 'new_submission') {
        newSubmissionsCount.value++
        showNewSubmissionNotification()
        // Refresh submissions immediately
        fetchSubmissions()
      }
    }
    
    eventSource.value.onerror = (error) => {
      console.error('SSE connection error:', error)
      isSSEConnected.value = false
      // Fallback to polling if SSE fails
      if (isAutoRefreshEnabled.value) {
        startAutoRefresh()
      }
    }
  } catch (error) {
    console.error('Failed to establish SSE connection:', error)
    // Fallback to polling
    if (isAutoRefreshEnabled.value) {
      startAutoRefresh()
    }
  }
}

const stopSSEConnection = () => {
  if (eventSource.value) {
    eventSource.value.close()
    eventSource.value = null
    isSSEConnected.value = false
    console.log('🔌 SSE connection closed')
  }
}

// Request notification permission
const requestNotificationPermission = async () => {
  if ('Notification' in window && Notification.permission === 'default') {
    await Notification.requestPermission()
  }
}

// Server-Sent Events for real-time updates
const startSSE = () => {
  if (eventSource.value) {
    eventSource.value.close()
  }
  
  // Use relative URL to avoid CORS issues
  eventSource.value = new EventSource('/api/submissions/stream')
  
  eventSource.value.onopen = () => {
    isSSEConnected.value = true
    console.log('🔗 SSE connection opened')
  }
  
  eventSource.value.onmessage = (event) => {
    try {
      const data = JSON.parse(event.data)
      if (data.type === 'new_submission') {
        console.log('🔔 New submission received via SSE:', data)
        newSubmissionsCount.value++
        showNewSubmissionNotification()
        fetchSubmissions() // Refresh the list
      }
    } catch (error) {
      console.error('Error parsing SSE data:', error)
    }
  }
  
  eventSource.value.onerror = (error) => {
    console.error('SSE connection error:', error)
    isSSEConnected.value = false
    // Attempt to reconnect after 5 seconds
    setTimeout(() => {
      if (isAutoRefreshEnabled.value) {
        startSSE()
      }
    }, 5000)
  }
}

const stopSSE = () => {
  if (eventSource.value) {
    eventSource.value.close()
    eventSource.value = null
    isSSEConnected.value = false
  }
}

onMounted(async () => {
  await requestNotificationPermission()
  fetchSubmissions()
  startAutoRefresh()
  startSSE() // Start Server-Sent Events
})

onUnmounted(() => {
  stopAutoRefresh()
  stopSSE()
})
</script>
