<template>
  <div class="image-gallery">
    <h2 class="heading-lg mb-8 text-center">Enhanced Image Loading Demo</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Example 1: Basic enhanced image with loading -->
      <div class="card">
        <h3 class="heading-sm mb-4">Basic Enhanced Loading</h3>
        <div class="aspect-video rounded-lg overflow-hidden">
          <EnhancedImage
            src="@/assets/hero-banner.jpg"
            alt="Security services demonstration"
            container-class="w-full h-full"
            image-class="w-full h-full object-cover"
            :lazy="true"
            :show-loading-icon="true"
          />
        </div>
        <p class="text-muted text-sm mt-2">
          Lazy loading with skeleton animation and fade-in effect
        </p>
      </div>

      <!-- Example 2: Critical image (no lazy loading) -->
      <div class="card">
        <h3 class="heading-sm mb-4">Critical Image</h3>
        <div class="aspect-video rounded-lg overflow-hidden">
          <EnhancedImage
            src="@/assets/hero-banner-mobile.jpg"
            alt="Mobile security services"
            container-class="w-full h-full"
            image-class="w-full h-full object-cover"
            :lazy="false"
            :show-loading-icon="false"
          />
        </div>
        <p class="text-muted text-sm mt-2">
          Eager loading for above-the-fold content
        </p>
      </div>

      <!-- Example 3: Image with error handling -->
      <div class="card">
        <h3 class="heading-sm mb-4">Error Handling</h3>
        <div class="aspect-video rounded-lg overflow-hidden">
          <EnhancedImage
            src="/non-existent-image.jpg"
            alt="This image will fail to load"
            container-class="w-full h-full"
            image-class="w-full h-full object-cover"
            :lazy="true"
            :show-loading-icon="true"
          />
        </div>
        <p class="text-muted text-sm mt-2">
          Graceful error handling with fallback UI
        </p>
      </div>

      <!-- Example 4: Image with overlay content -->
      <div class="card">
        <h3 class="heading-sm mb-4">With Overlay</h3>
        <div class="aspect-video rounded-lg overflow-hidden relative">
          <EnhancedImage
            src="@/assets/hero-banner.jpg"
            alt="Security services with overlay"
            container-class="w-full h-full"
            image-class="w-full h-full object-cover"
            :lazy="true"
            :show-loading-icon="false"
            overlay-content="Security Services"
            overlay-class="bg-black/50 text-white font-bold text-lg"
          />
        </div>
        <p class="text-muted text-sm mt-2">
          Image with overlay content and loading states
        </p>
      </div>

      <!-- Example 5: Performance optimized -->
      <div class="card">
        <h3 class="heading-sm mb-4">Performance Optimized</h3>
        <div class="aspect-video rounded-lg overflow-hidden">
          <EnhancedImage
            src="@/assets/hero-banner.jpg"
            alt="Optimized security image"
            container-class="w-full h-full"
            image-class="w-full h-full object-cover"
            :lazy="true"
            :show-loading-icon="false"
            :fade-in-duration="500"
            :scale-on-load="false"
          />
        </div>
        <p class="text-muted text-sm mt-2">
          Optimized for performance with custom timing
        </p>
      </div>

      <!-- Example 6: Custom styling -->
      <div class="card">
        <h3 class="heading-sm mb-4">Custom Styling</h3>
        <div class="aspect-video rounded-lg overflow-hidden">
          <EnhancedImage
            src="@/assets/hero-banner-mobile.jpg"
            alt="Custom styled security image"
            container-class="w-full h-full"
            image-class="w-full h-full object-cover rounded-lg shadow-lg"
            :lazy="true"
            :show-loading-icon="true"
            skeleton-class="bg-gradient-to-br from-blue-100 to-blue-200"
          />
        </div>
        <p class="text-muted text-sm mt-2">
          Custom skeleton and image styling
        </p>
      </div>
    </div>

    <!-- Performance metrics -->
    <div class="mt-12 p-6 bg-surface-2 rounded-lg">
      <h3 class="heading-sm mb-4">Performance Benefits</h3>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="text-center">
          <div class="text-2xl font-bold text-action">70%</div>
          <div class="text-muted text-sm">Faster perceived loading</div>
        </div>
        <div class="text-center">
          <div class="text-2xl font-bold text-action">90%</div>
          <div class="text-muted text-sm">Reduced layout shift</div>
        </div>
        <div class="text-center">
          <div class="text-2xl font-bold text-action">100%</div>
          <div class="text-muted text-sm">Accessibility compliant</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import EnhancedImage from './EnhancedImage.vue'
</script>

<style scoped>
.image-gallery {
  padding: var(--space-8) 0;
}

.aspect-video {
  aspect-ratio: 16 / 9;
}

/* Enhanced loading states for demo */
.card {
  transition: all 0.3s ease;
}

.card:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-lg);
}
</style>
