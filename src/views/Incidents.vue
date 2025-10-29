<template>
  <div class="incidents min-h-screen bg-bg">
    <!-- Mobile-First Page Header -->
    <div class="bg-surface border-b border-border">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 sm:py-6">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center space-y-3 sm:space-y-0">
          <div class="flex items-center space-x-3">
            <div class="h-8 w-8 sm:h-10 sm:w-10 bg-action/10 rounded-lg flex items-center justify-center">
              <svg class="h-5 w-5 sm:h-6 sm:w-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.5 0L4.268 19.5c-.77.833.192 2.5 1.732 2.5z" />
              </svg>
            </div>
            <div class="flex flex-col">
              <h1 class="text-xl sm:text-2xl font-heading font-bold text-text">Incidents</h1>
              <p class="text-sm text-text-muted mt-1">Security incidents and reports</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <div class="text-center py-12">
        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.5 0L4.268 19.5c-.77.833.192 2.5 1.732 2.5z" />
        </svg>
        <h3 class="mt-2 text-base font-medium text-gray-900">No incidents yet</h3>
        <p class="mt-1 text-sm text-gray-500">Security incidents will appear here.</p>
      </div>
    </div>
  </div>
</template>

<script setup>
// Incidents page - TODO: Implement incident management
</script>
