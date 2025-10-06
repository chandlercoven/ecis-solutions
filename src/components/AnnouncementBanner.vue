<template>
  <!-- Announcement Banner -->
  <div v-if="showBanner" class="announcement-banner bg-accent text-white py-2 px-4 relative">
    <div class="container mx-auto">
      <div class="flex items-center justify-center gap-4">
        <!-- Main Message -->
        <div class="flex items-center gap-2 text-sm font-medium">
          <span class="font-bold">Security License Training</span>
          <span class="hidden sm:inline">• Classes start November 1st</span>
          <span class="sm:hidden">• Nov 1st</span>
        </div>
        
        <!-- Price & CTA -->
        <div class="flex items-center gap-2 sm:gap-3">
          <span class="text-lg font-bold">$249</span>
          <button 
            @click="handleEnrollClick"
            class="bg-white text-accent px-2 py-1 rounded text-xs font-semibold hover:bg-white/90 transition-colors whitespace-nowrap"
          >
            <span class="hidden sm:inline">Secure Spot - $299</span>
            <span class="sm:hidden">$299</span>
          </button>
        </div>
        
        <!-- Close Button -->
        <button 
          @click="closeBanner"
          class="text-white/70 hover:text-white transition-colors p-1"
          aria-label="Close announcement"
        >
          <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()
const showBanner = ref(true)

// Check if banner was previously dismissed
onMounted(() => {
  const dismissed = localStorage.getItem('announcement-banner-dismissed')
  if (dismissed === 'true') {
    showBanner.value = false
  }
})

const closeBanner = () => {
  showBanner.value = false
  localStorage.setItem('announcement-banner-dismissed', 'true')
}

const handleEnrollClick = () => {
  // Navigate to training page or contact form
  router.push('/training')
  
  // Track the click for analytics
  if (typeof gtag !== 'undefined') {
    gtag('event', 'click', {
      event_category: 'announcement',
      event_label: 'security-license-waitlist',
      value: 249
    })
  }
}
</script>

<style scoped>
.announcement-banner {
  position: relative;
  z-index: 40;
  margin-top: 80px; /* Account for fixed navigation height */
  border-bottom: 1px solid rgba(212, 175, 55, 0.2);
}

/* Subtle animation on load */
.announcement-banner {
  animation: slideDown 0.3s ease-out;
}

@keyframes slideDown {
  from {
    transform: translateY(-100%);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

/* Mobile adjustments */
@media (max-width: 640px) {
  .announcement-banner {
    padding: 0.5rem 1rem;
  }
  
  .announcement-banner .container > div {
    flex-wrap: wrap;
    gap: 0.5rem;
    justify-content: center;
  }
  
  .announcement-banner .container > div > div:first-child {
    font-size: 0.8rem;
    text-align: center;
  }
  
  .announcement-banner .container > div > div:last-child {
    font-size: 0.75rem;
  }
}
</style>
