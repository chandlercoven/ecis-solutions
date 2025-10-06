<template>
  <div 
    :class="[
      'card transition-all duration-base',
      // Mobile: Full width, single column
      'w-full p-4',
      // Tablet: Slightly larger padding
      'sm:p-6',
      // Desktop: Constrained width, larger padding
      'lg:max-w-md lg:p-8',
      // Hover effects only on desktop
      'lg:hover:shadow-lg lg:hover:scale-105',
      // Touch feedback for mobile
      'active:scale-95 lg:active:scale-105'
    ]"
  >
    <!-- Mobile: Stacked layout -->
    <div class="flex flex-col sm:flex-row lg:flex-col gap-4">
      <!-- Image: Mobile full-width, desktop constrained -->
      <div 
        :class="[
          'relative overflow-hidden rounded-lg',
          'w-full h-48 sm:w-32 sm:h-32 lg:w-full lg:h-48',
          'flex-shrink-0'
        ]"
      >
        <EnhancedImage
          :src="image"
          :alt="title"
          container-class="w-full h-full"
          image-class="w-full h-full object-cover transition-transform duration-base hover:scale-105"
          :lazy="true"
          :show-loading-icon="false"
        />
      </div>
      
      <!-- Content: Responsive typography -->
      <div class="flex-1 space-y-3">
        <!-- Title: Responsive sizing -->
        <h3 
          :class="[
            'font-heading font-semibold text-text',
            'text-lg sm:text-base lg:text-xl',
            'line-clamp-2'
          ]"
        >
          {{ title }}
        </h3>
        
        <!-- Description: Mobile truncated, desktop full -->
        <p 
          :class="[
            'text-muted text-sm lg:text-base',
            'line-clamp-3 sm:line-clamp-2 lg:line-clamp-none'
          ]"
        >
          {{ description }}
        </p>
        
        <!-- Actions: Mobile stacked, desktop inline -->
        <div 
          :class="[
            'flex flex-col sm:flex-row gap-2',
            'sm:items-center sm:justify-between'
          ]"
        >
          <!-- Price: Responsive text size -->
          <div 
            :class="[
              'font-bold text-action',
              'text-lg sm:text-base lg:text-xl'
            ]"
          >
            {{ price }}
          </div>
          
          <!-- Button: Responsive sizing -->
          <button 
            :class="[
              'btn btn--primary',
              'w-full sm:w-auto',
              'text-sm lg:text-base',
              'min-h-[44px]' // Touch target
            ]"
            @click="$emit('action', $event)"
          >
            {{ actionText }}
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { useResponsive } from '@/utils/responsive-testing'
import EnhancedImage from './EnhancedImage.vue'

// Props
defineProps({
  title: {
    type: String,
    required: true
  },
  description: {
    type: String,
    required: true
  },
  image: {
    type: String,
    required: true
  },
  price: {
    type: String,
    required: true
  },
  actionText: {
    type: String,
    default: 'Learn More'
  }
})

// Emits
defineEmits(['action'])

// Responsive behavior
const { isMobile, isTablet, isDesktop } = useResponsive()
</script>

<style scoped>
/* Mobile-specific styles */
@media (max-width: 639px) {
  .card {
    margin: 0 var(--space-4);
    max-width: calc(100% - var(--space-8));
  }
}

/* Tablet-specific styles */
@media (min-width: 640px) and (max-width: 1023px) {
  .card {
    max-width: 100%;
  }
}

/* Desktop-specific styles */
@media (min-width: 1024px) {
  .card {
    max-width: 24rem; /* 384px */
  }
}

/* Touch device optimizations */
@media (hover: none) {
  .card:hover {
    transform: none;
    box-shadow: var(--shadow-md);
  }
}

/* High DPI display optimizations */
@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
  .card img {
    image-rendering: -webkit-optimize-contrast;
  }
}
</style>
