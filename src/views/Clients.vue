<template>
  <div class="clients-page min-h-screen bg-bg">
    <!-- Mobile Header -->
    <div class="bg-surface border-b border-border px-4 py-3 sticky top-0 z-40">
      <div class="flex items-center justify-between">
        <div class="flex items-center space-x-3">
          <button @click="$router.back()" class="p-2 hover:bg-surface-2 rounded-lg">
            <svg class="w-5 h-5 text-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
          </button>
          <h1 class="text-lg font-heading font-semibold text-text">Clients</h1>
        </div>
        <button 
          @click="showAddClient = true"
          class="p-2 bg-action text-white rounded-lg hover:bg-action-hover"
        >
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Mobile Stats Cards -->
    <div class="p-4 space-y-3">
      <div class="grid grid-cols-2 gap-3">
        <div class="bg-surface rounded-lg p-4 border border-border">
          <div class="text-2xl font-bold text-text">{{ clientsStore.activeClients.length }}</div>
          <div class="text-sm text-text-muted">Active Clients</div>
        </div>
        <div class="bg-surface rounded-lg p-4 border border-border">
          <div class="text-2xl font-bold text-action">${{ clientsStore.totalMonthlyRevenue.toLocaleString() }}</div>
          <div class="text-sm text-text-muted">Monthly Revenue</div>
        </div>
      </div>
    </div>

    <!-- Mobile Search & Filters -->
    <div class="px-4 pb-4">
      <!-- Search Bar -->
      <div class="relative mb-3">
        <input
          v-model="clientsStore.searchQuery"
          type="text"
          placeholder="Search clients..."
          class="w-full bg-surface-2 border border-border rounded-lg px-4 py-3 pl-10 text-text focus:border-action focus:ring-2 focus:ring-focus"
        />
        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 text-text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </div>

      <!-- Filter Chips -->
      <div class="flex space-x-2 overflow-x-auto pb-2">
        <button
          @click="clientsStore.setFilterStatus('All')"
          :class="clientsStore.filterStatus === 'All' ? 'bg-action text-white' : 'bg-surface-2 text-text-muted'"
          class="px-3 py-1 rounded-full text-sm whitespace-nowrap"
        >
          All Status
        </button>
        <button
          @click="clientsStore.setFilterStatus('Active')"
          :class="clientsStore.filterStatus === 'Active' ? 'bg-action text-white' : 'bg-surface-2 text-text-muted'"
          class="px-3 py-1 rounded-full text-sm whitespace-nowrap"
        >
          Active
        </button>
        <button
          @click="clientsStore.setFilterStatus('Inactive')"
          :class="clientsStore.filterStatus === 'Inactive' ? 'bg-action text-white' : 'bg-surface-2 text-text-muted'"
          class="px-3 py-1 rounded-full text-sm whitespace-nowrap"
        >
          Inactive
        </button>
      </div>
    </div>

    <!-- Mobile Client List -->
    <div class="px-4 pb-20">
      <div class="space-y-3">
        <div
          v-for="client in clientsStore.filteredClients"
          :key="client.id"
          @click="selectClient(client)"
          class="bg-surface rounded-lg p-4 border border-border active:bg-surface-2 cursor-pointer"
        >
          <!-- Client Header -->
          <div class="flex items-start justify-between mb-2">
            <div class="flex-1">
              <h3 class="font-heading font-semibold text-text">{{ client.name }}</h3>
              <p class="text-sm text-text-muted">{{ client.type }}</p>
            </div>
            <div class="flex items-center space-x-2">
              <span 
                :class="client.status === 'Active' ? 'bg-success/10 text-success' : 'bg-warning/10 text-warning'"
                class="px-2 py-1 rounded-full text-xs font-medium"
              >
                {{ client.status }}
              </span>
              <svg class="w-4 h-4 text-text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </div>
          </div>

          <!-- Contact Info -->
          <div class="space-y-1 mb-3">
            <div class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
              <span class="text-sm text-text-muted">{{ client.contactPerson }}</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg class="w-4 h-4 text-text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <span class="text-sm text-text-muted">{{ client.phone }}</span>
            </div>
          </div>

          <!-- Services -->
          <div class="flex flex-wrap gap-1 mb-3">
            <span
              v-for="service in client.services.slice(0, 2)"
              :key="service"
              class="px-2 py-1 bg-action/10 text-action text-xs rounded"
            >
              {{ service }}
            </span>
            <span
              v-if="client.services.length > 2"
              class="px-2 py-1 bg-surface-2 text-text-muted text-xs rounded"
            >
              +{{ client.services.length - 2 }} more
            </span>
          </div>

          <!-- Revenue -->
          <div class="flex items-center justify-between">
            <span class="text-sm font-medium text-text">${{ client.monthlyRate.toLocaleString() }}/month</span>
            <span class="text-xs text-text-muted">{{ formatDate(client.contractEnd) }}</span>
          </div>
        </div>
      </div>

      <!-- Empty State -->
      <div v-if="clientsStore.filteredClients.length === 0" class="text-center py-12">
        <svg class="w-12 h-12 text-text-muted mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <h3 class="text-lg font-heading font-semibold text-text mb-2">No clients found</h3>
        <p class="text-text-muted mb-4">Try adjusting your search or filters</p>
        <button
          @click="clientsStore.clearFilters()"
          class="text-action hover:text-action-hover font-medium"
        >
          Clear filters
        </button>
      </div>
    </div>

    <!-- Add Client Modal -->
    <div v-if="showAddClient" class="fixed inset-0 z-50 overflow-y-auto">
      <div class="fixed inset-0 bg-black/60" @click="showAddClient = false"></div>
      <div class="relative min-h-screen flex items-end justify-center p-4">
        <div class="bg-surface rounded-t-xl shadow-lg max-w-md w-full p-6 border border-border">
          <h2 class="text-lg font-heading font-semibold text-text mb-4">Add New Client</h2>
          
          <form @submit.prevent="handleAddClient" class="space-y-4">
            <div>
              <label class="block text-sm font-medium text-text mb-2">Client Name</label>
              <input
                v-model="newClient.name"
                type="text"
                required
                class="w-full bg-surface-2 border border-border rounded-lg px-3 py-3 text-text focus:border-action focus:ring-2 focus:ring-focus"
                placeholder="Enter client name"
              />
            </div>

            <div>
              <label class="block text-sm font-medium text-text mb-2">Contact Person</label>
              <input
                v-model="newClient.contactPerson"
                type="text"
                required
                class="w-full bg-surface-2 border border-border rounded-lg px-3 py-3 text-text focus:border-action focus:ring-2 focus:ring-focus"
                placeholder="Enter contact person"
              />
            </div>

            <div>
              <label class="block text-sm font-medium text-text mb-2">Email</label>
              <input
                v-model="newClient.email"
                type="email"
                required
                class="w-full bg-surface-2 border border-border rounded-lg px-3 py-3 text-text focus:border-action focus:ring-2 focus:ring-focus"
                placeholder="Enter email address"
              />
            </div>

            <div>
              <label class="block text-sm font-medium text-text mb-2">Phone</label>
              <input
                v-model="newClient.phone"
                type="tel"
                required
                class="w-full bg-surface-2 border border-border rounded-lg px-3 py-3 text-text focus:border-action focus:ring-2 focus:ring-focus"
                placeholder="Enter phone number"
              />
            </div>

            <div>
              <label class="block text-sm font-medium text-text mb-2">Client Type</label>
              <select
                v-model="newClient.type"
                required
                class="w-full bg-surface-2 border border-border rounded-lg px-3 py-3 text-text focus:border-action focus:ring-2 focus:ring-focus"
              >
                <option value="">Select type</option>
                <option value="Educational">Educational</option>
                <option value="Commercial">Commercial</option>
                <option value="Residential">Residential</option>
                <option value="Healthcare">Healthcare</option>
                <option value="Construction">Construction</option>
                <option value="Government">Government</option>
              </select>
            </div>

            <div>
              <label class="block text-sm font-medium text-text mb-2">Monthly Rate</label>
              <input
                v-model.number="newClient.monthlyRate"
                type="number"
                required
                class="w-full bg-surface-2 border border-border rounded-lg px-3 py-3 text-text focus:border-action focus:ring-2 focus:ring-focus"
                placeholder="Enter monthly rate"
              />
            </div>

            <div class="flex space-x-3 pt-4">
              <button
                type="button"
                @click="showAddClient = false"
                class="flex-1 py-3 px-4 border border-border text-text rounded-lg hover:bg-surface-2"
              >
                Cancel
              </button>
              <button
                type="submit"
                class="flex-1 py-3 px-4 bg-action text-white rounded-lg hover:bg-action-hover"
              >
                Add Client
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive } from 'vue'
import { useRouter } from 'vue-router'
import { useClientsStore } from '@/stores/clients'

const router = useRouter()
const clientsStore = useClientsStore()

// UI state
const showAddClient = ref(false)
const newClient = reactive({
  name: '',
  contactPerson: '',
  email: '',
  phone: '',
  type: '',
  monthlyRate: 0,
  address: '',
  services: [],
  status: 'Active',
  contractStart: new Date().toISOString().split('T')[0],
  contractEnd: new Date(Date.now() + 365 * 24 * 60 * 60 * 1000).toISOString().split('T')[0],
  notes: ''
})

// Methods
const selectClient = (client) => {
  router.push(`/clients/${client.id}`)
}

const handleAddClient = () => {
  clientsStore.addClient(newClient)
  showAddClient.value = false
  
  // Reset form
  Object.assign(newClient, {
    name: '',
    contactPerson: '',
    email: '',
    phone: '',
    type: '',
    monthlyRate: 0,
    address: '',
    services: [],
    status: 'Active',
    contractStart: new Date().toISOString().split('T')[0],
    contractEnd: new Date(Date.now() + 365 * 24 * 60 * 60 * 1000).toISOString().split('T')[0],
    notes: ''
  })
}

const formatDate = (dateString) => {
  return new Date(dateString).toLocaleDateString('en-US', {
    month: 'short',
    day: 'numeric',
    year: 'numeric'
  })
}
</script>

<style scoped>
/* Mobile-first responsive design */
.clients-page {
  padding-bottom: env(safe-area-inset-bottom);
}

/* Touch-friendly interactions */
.active\:bg-surface-2:active {
  background-color: var(--surface-2);
}

/* Smooth scrolling for mobile */
.overflow-x-auto {
  scrollbar-width: none;
  -ms-overflow-style: none;
}

.overflow-x-auto::-webkit-scrollbar {
  display: none;
}
</style>
