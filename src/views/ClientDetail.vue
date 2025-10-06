<template>
  <div class="client-detail min-h-screen bg-bg">
    <!-- Mobile Header -->
    <div class="bg-surface border-b border-border px-4 py-3 sticky top-0 z-40">
      <div class="flex items-center justify-between">
        <div class="flex items-center space-x-3">
          <button @click="$router.back()" class="p-2 hover:bg-surface-2 rounded-lg">
            <svg class="w-5 h-5 text-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
          </button>
          <div>
            <h1 class="text-lg font-heading font-semibold text-text">{{ client?.name }}</h1>
            <p class="text-sm text-text-muted">{{ client?.type }}</p>
          </div>
        </div>
        <button 
          @click="showEditModal = true"
          class="p-2 hover:bg-surface-2 rounded-lg"
        >
          <svg class="w-5 h-5 text-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Client Status Banner -->
    <div v-if="client" class="px-4 py-3" :class="client.status === 'Active' ? 'bg-success/10' : 'bg-warning/10'">
      <div class="flex items-center space-x-2">
        <div :class="client.status === 'Active' ? 'bg-success' : 'bg-warning'" class="w-2 h-2 rounded-full"></div>
        <span :class="client.status === 'Active' ? 'text-success' : 'text-warning'" class="text-sm font-medium">
          {{ client.status }} Client
        </span>
      </div>
    </div>

    <!-- Mobile Content -->
    <div class="px-4 py-4 space-y-6">
      <!-- Contact Information -->
      <div class="bg-surface rounded-lg p-4 border border-border">
        <h2 class="text-lg font-heading font-semibold text-text mb-4">Contact Information</h2>
        <div class="space-y-3">
          <div class="flex items-start space-x-3">
            <svg class="w-5 h-5 text-text-muted mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            </svg>
            <div>
              <p class="font-medium text-text">{{ client?.contactPerson }}</p>
              <p class="text-sm text-text-muted">Contact Person</p>
            </div>
          </div>
          
          <div class="flex items-start space-x-3">
            <svg class="w-5 h-5 text-text-muted mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            <div>
              <a :href="`mailto:${client?.email}`" class="text-action hover:text-action-hover">{{ client?.email }}</a>
              <p class="text-sm text-text-muted">Email</p>
            </div>
          </div>
          
          <div class="flex items-start space-x-3">
            <svg class="w-5 h-5 text-text-muted mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <div>
              <a :href="`tel:${client?.phone}`" class="text-action hover:text-action-hover">{{ client?.phone }}</a>
              <p class="text-sm text-text-muted">Phone</p>
            </div>
          </div>
          
          <div class="flex items-start space-x-3">
            <svg class="w-5 h-5 text-text-muted mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            <div>
              <p class="text-text">{{ client?.address }}</p>
              <p class="text-sm text-text-muted">Address</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Services -->
      <div class="bg-surface rounded-lg p-4 border border-border">
        <h2 class="text-lg font-heading font-semibold text-text mb-4">Services</h2>
        <div class="flex flex-wrap gap-2">
          <span
            v-for="service in client?.services"
            :key="service"
            class="px-3 py-1 bg-action/10 text-action text-sm rounded-full"
          >
            {{ service }}
          </span>
        </div>
      </div>

      <!-- Contract Information -->
      <div class="bg-surface rounded-lg p-4 border border-border">
        <h2 class="text-lg font-heading font-semibold text-text mb-4">Contract Details</h2>
        <div class="space-y-3">
          <div class="flex justify-between items-center">
            <span class="text-text-muted">Monthly Rate</span>
            <span class="font-semibold text-text">${{ client?.monthlyRate?.toLocaleString() }}</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-text-muted">Contract Start</span>
            <span class="text-text">{{ formatDate(client?.contractStart) }}</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-text-muted">Contract End</span>
            <span class="text-text">{{ formatDate(client?.contractEnd) }}</span>
          </div>
          <div class="flex justify-between items-center">
            <span class="text-text-muted">Days Remaining</span>
            <span :class="getDaysRemaining(client?.contractEnd) < 30 ? 'text-warning' : 'text-text'">
              {{ getDaysRemaining(client?.contractEnd) }} days
            </span>
          </div>
        </div>
      </div>

      <!-- Notes -->
      <div v-if="client?.notes" class="bg-surface rounded-lg p-4 border border-border">
        <h2 class="text-lg font-heading font-semibold text-text mb-4">Notes</h2>
        <p class="text-text-muted">{{ client.notes }}</p>
      </div>

      <!-- Quick Actions -->
      <div class="bg-surface rounded-lg p-4 border border-border">
        <h2 class="text-lg font-heading font-semibold text-text mb-4">Quick Actions</h2>
        <div class="grid grid-cols-2 gap-3">
          <button class="p-3 bg-action/10 text-action rounded-lg hover:bg-action/20 active:bg-action/30">
            <svg class="w-5 h-5 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z" />
            </svg>
            <span class="text-sm font-medium">Report Incident</span>
          </button>
          
          <button class="p-3 bg-action/10 text-action rounded-lg hover:bg-action/20 active:bg-action/30">
            <svg class="w-5 h-5 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="text-sm font-medium">Schedule Patrol</span>
          </button>
          
          <button class="p-3 bg-action/10 text-action rounded-lg hover:bg-action/20 active:bg-action/30">
            <svg class="w-5 h-5 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <span class="text-sm font-medium">Call Client</span>
          </button>
          
          <button class="p-3 bg-action/10 text-action rounded-lg hover:bg-action/20 active:bg-action/30">
            <svg class="w-5 h-5 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            <span class="text-sm font-medium">Send Email</span>
          </button>
        </div>
      </div>
    </div>

    <!-- Edit Client Modal -->
    <div v-if="showEditModal" class="fixed inset-0 z-50 overflow-y-auto">
      <div class="fixed inset-0 bg-black/60" @click="showEditModal = false"></div>
      <div class="relative min-h-screen flex items-end justify-center p-4">
        <div class="bg-surface rounded-t-xl shadow-lg max-w-md w-full p-6 border border-border">
          <h2 class="text-lg font-heading font-semibold text-text mb-4">Edit Client</h2>
          
          <form @submit.prevent="handleUpdateClient" class="space-y-4">
            <div>
              <label class="block text-sm font-medium text-text mb-2">Client Name</label>
              <input
                v-model="editClient.name"
                type="text"
                required
                class="w-full bg-surface-2 border border-border rounded-lg px-3 py-3 text-text focus:border-action focus:ring-2 focus:ring-focus"
              />
            </div>

            <div>
              <label class="block text-sm font-medium text-text mb-2">Contact Person</label>
              <input
                v-model="editClient.contactPerson"
                type="text"
                required
                class="w-full bg-surface-2 border border-border rounded-lg px-3 py-3 text-text focus:border-action focus:ring-2 focus:ring-focus"
              />
            </div>

            <div>
              <label class="block text-sm font-medium text-text mb-2">Email</label>
              <input
                v-model="editClient.email"
                type="email"
                required
                class="w-full bg-surface-2 border border-border rounded-lg px-3 py-3 text-text focus:border-action focus:ring-2 focus:ring-focus"
              />
            </div>

            <div>
              <label class="block text-sm font-medium text-text mb-2">Phone</label>
              <input
                v-model="editClient.phone"
                type="tel"
                required
                class="w-full bg-surface-2 border border-border rounded-lg px-3 py-3 text-text focus:border-action focus:ring-2 focus:ring-focus"
              />
            </div>

            <div>
              <label class="block text-sm font-medium text-text mb-2">Monthly Rate</label>
              <input
                v-model.number="editClient.monthlyRate"
                type="number"
                required
                class="w-full bg-surface-2 border border-border rounded-lg px-3 py-3 text-text focus:border-action focus:ring-2 focus:ring-focus"
              />
            </div>

            <div class="flex space-x-3 pt-4">
              <button
                type="button"
                @click="showEditModal = false"
                class="flex-1 py-3 px-4 border border-border text-text rounded-lg hover:bg-surface-2"
              >
                Cancel
              </button>
              <button
                type="submit"
                class="flex-1 py-3 px-4 bg-action text-white rounded-lg hover:bg-action-hover"
              >
                Update Client
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive, computed, onMounted } from 'vue'
import { useRoute } from 'vue-router'
import { useClientsStore } from '@/stores/clients'

const route = useRoute()
const clientsStore = useClientsStore()

// UI state
const showEditModal = ref(false)
const editClient = reactive({})

// Computed
const client = computed(() => {
  return clientsStore.getClientById(parseInt(route.params.id))
})

// Methods
const handleUpdateClient = () => {
  clientsStore.updateClient(client.value.id, editClient)
  showEditModal.value = false
}

const formatDate = (dateString) => {
  return new Date(dateString).toLocaleDateString('en-US', {
    month: 'short',
    day: 'numeric',
    year: 'numeric'
  })
}

const getDaysRemaining = (endDate) => {
  const today = new Date()
  const end = new Date(endDate)
  const diffTime = end - today
  const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24))
  return diffDays
}

// Initialize edit form when modal opens
const openEditModal = () => {
  if (client.value) {
    Object.assign(editClient, client.value)
    showEditModal.value = true
  }
}

onMounted(() => {
  if (!client.value) {
    // Redirect if client not found
    router.push('/clients')
  }
})
</script>

<style scoped>
/* Mobile-first responsive design */
.client-detail {
  padding-bottom: env(safe-area-inset-bottom);
}

/* Touch-friendly interactions */
.active\:bg-action\/30:active {
  background-color: rgba(0, 119, 255, 0.3);
}

/* Smooth scrolling for mobile */
.overflow-y-auto {
  scrollbar-width: none;
  -ms-overflow-style: none;
}

.overflow-y-auto::-webkit-scrollbar {
  display: none;
}
</style>
