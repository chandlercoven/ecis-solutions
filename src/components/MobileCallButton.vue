<template>
  <!-- Mobile Call Button - Only visible on mobile devices -->
  <div class="mobile-call-button" id="floating-call-button">
    <a 
      href="tel:+15166408144" 
      class="call-btn group"
      :class="{ 'call-btn-pulse': shouldPulse }"
      title="Call Now"
    >
      <!-- Phone Icon -->
      <svg class="call-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
      </svg>
      
      <!-- Pulse Ring Animation -->
      <div class="pulse-ring"></div>
    </a>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const shouldPulse = ref(false)

// Pulse animation control
const startPulsing = () => {
  shouldPulse.value = true
}

const stopPulsing = () => {
  shouldPulse.value = false
}

// Start pulsing after 3 seconds of page load
onMounted(() => {
  setTimeout(() => {
    startPulsing()
  }, 3000)
})

// Stop pulsing when component unmounts
onUnmounted(() => {
  stopPulsing()
})
</script>

<style scoped>
.mobile-call-button {
  @apply fixed bottom-4 right-4 z-50;
  @apply lg:hidden; /* Only show on mobile/tablet, hide on desktop */
}

.call-btn {
  @apply relative flex items-center justify-center;
  @apply w-14 h-14 rounded-full shadow-lg hover:shadow-xl;
  @apply transition-all duration-300 transform;
  @apply hover:scale-110 active:scale-95;
  @apply text-white;
  @apply overflow-hidden;
  /* Use the new yellow button styling */
  background: var(--accent);
  border: 1px solid var(--accent);
  /* Material Design elevation */
  box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.2), 
              0 6px 10px 0 rgba(0, 0, 0, 0.14), 
              0 1px 18px 0 rgba(0, 0, 0, 0.12);
}

.call-btn:hover {
  background: #b8941f; /* Darker yellow on hover */
  border-color: #b8941f;
  /* Enhanced elevation on hover */
  box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 
              0 8px 10px 1px rgba(0, 0, 0, 0.14), 
              0 3px 14px 2px rgba(0, 0, 0, 0.12);
}

.call-icon {
  @apply w-6 h-6;
  @apply transition-transform duration-300;
}

.call-btn:hover .call-icon {
  @apply scale-110;
}

/* Pulse animation */
.call-btn-pulse {
  animation: pulse-glow 2s infinite;
}

@keyframes pulse-glow {
  0%, 100% {
    box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.2), 
                0 6px 10px 0 rgba(0, 0, 0, 0.14), 
                0 1px 18px 0 rgba(0, 0, 0, 0.12),
                0 0 0 0 rgba(212, 175, 55, 0.7);
  }
  50% {
    box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.2), 
                0 6px 10px 0 rgba(0, 0, 0, 0.14), 
                0 1px 18px 0 rgba(0, 0, 0, 0.12),
                0 0 0 8px rgba(212, 175, 55, 0);
  }
}

/* Pulse ring animation */
.pulse-ring {
  @apply absolute inset-0 rounded-full;
  @apply border-2 border-accent;
  @apply animate-ping;
  @apply opacity-75;
}

/* Responsive adjustments for very small screens */
@media (max-width: 360px) {
  .mobile-call-button {
    @apply bottom-3 right-3;
  }
  
  .call-btn {
    @apply w-12 h-12;
  }
  
  .call-icon {
    @apply w-5 h-5;
  }
}

/* Ensure it doesn't interfere with other elements */
@media (max-height: 600px) {
  .mobile-call-button {
    @apply bottom-3 right-3;
  }
}
</style>
