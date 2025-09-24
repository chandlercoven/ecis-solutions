<template>
  <!-- This component handles dynamic SEO meta tags -->
  <div v-if="false" style="display: none;">
    <!-- Hidden component for SEO meta tag management -->
  </div>
</template>

<script setup>
import { onMounted, watch } from 'vue'
import { useRoute } from 'vue-router'

const route = useRoute()

// SEO optimization functions
const updatePageSEO = () => {
  // Update page title
  if (route.meta?.title) {
    document.title = route.meta.title
  }
  
  // Update meta description
  if (route.meta?.description) {
    updateMetaTag('description', route.meta.description)
  }
  
  // Update meta keywords
  if (route.meta?.keywords) {
    updateMetaTag('keywords', route.meta.keywords)
  }
  
  // Update canonical URL
  updateCanonicalUrl(route.path)
  
  // Update Open Graph tags
  updateOpenGraphTags()
}

const updateMetaTag = (name, content) => {
  let meta = document.querySelector(`meta[name="${name}"]`)
  if (!meta) {
    meta = document.createElement('meta')
    meta.name = name
    document.head.appendChild(meta)
  }
  meta.content = content
}

const updateCanonicalUrl = (path) => {
  const baseUrl = 'https://ecissolutions.com'
  const canonicalUrl = path === '/' ? baseUrl : `${baseUrl}${path}`
  
  let canonical = document.querySelector('link[rel="canonical"]')
  if (!canonical) {
    canonical = document.createElement('link')
    canonical.rel = 'canonical'
    document.head.appendChild(canonical)
  }
  canonical.href = canonicalUrl
}

const updateOpenGraphTags = () => {
  const baseUrl = 'https://ecissolutions.com'
  const currentUrl = route.path === '/' ? baseUrl : `${baseUrl}${route.path}`
  
  // Update OG title
  updateOGTag('og:title', route.meta?.title || 'Professional Security Services | ECIS Solutions')
  
  // Update OG description
  updateOGTag('og:description', route.meta?.description || 'Professional security services with 24/7 patrol coverage, CCTV monitoring, and emergency response.')
  
  // Update OG URL
  updateOGTag('og:url', currentUrl)
  
  // Update Twitter title
  updateMetaTag('twitter:title', route.meta?.title || 'Professional Security Services | ECIS Solutions')
  
  // Update Twitter description
  updateMetaTag('twitter:description', route.meta?.description || 'Professional security services with 24/7 patrol coverage, CCTV monitoring, and emergency response.')
}

const updateOGTag = (property, content) => {
  let meta = document.querySelector(`meta[property="${property}"]`)
  if (!meta) {
    meta = document.createElement('meta')
    meta.setAttribute('property', property)
    document.head.appendChild(meta)
  }
  meta.content = content
}

// Watch for route changes
watch(() => route.path, () => {
  updatePageSEO()
})

onMounted(() => {
  updatePageSEO()
})
</script>
