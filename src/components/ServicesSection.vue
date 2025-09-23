<template>
  <section class="section bg-bg animate-on-scroll">
    <div class="container">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-12">
        <div class="inline-flex items-center space-x-2 bg-action/10 rounded-full px-4 py-2 mb-4">
          <span class="text-action text-sm font-semibold font-body uppercase tracking-wider">Our Services</span>
        </div>
        <h2 class="heading-lg text-text mb-4">
          Comprehensive Security Solutions
        </h2>
        <p class="text-lg text-muted max-w-2xl mx-auto">
          Professional security services tailored to protect your people, property, and peace of mind.
        </p>
      </div>

      <!-- Services Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- HOA/Community Security -->
        <div class="service-card" @click="navigateToServices('hoa')">
          <div class="mb-6">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.623 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
              </svg>
            </div>
          </div>
          <h3 class="text-lg font-heading font-semibold text-text mb-3">HOA & Community Security</h3>
          <p class="text-muted mb-6 leading-relaxed text-sm">
            24/7 patrol services, gate management, and access control for residential communities and homeowner associations.
          </p>
          <div class="flex items-center text-action font-semibold text-sm">
            <span>Explore Service</span>
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </div>

        <!-- Commercial Property Security -->
        <div class="service-card" @click="navigateToServices('commercial')">
          <div class="mb-6">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
              </svg>
            </div>
          </div>
          <h3 class="text-lg font-heading font-semibold text-text mb-3">Commercial Property Security</h3>
          <p class="text-muted mb-6 leading-relaxed text-sm">
            Professional security for office buildings, retail centers, warehouses, and industrial facilities.
          </p>
          <div class="flex items-center text-action font-semibold text-sm">
            <span>Explore Service</span>
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </div>

        <!-- Private Investigations -->
        <div class="service-card" @click="navigateToServices('investigations')">
          <div class="mb-6">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
              </svg>
            </div>
          </div>
          <h3 class="text-lg font-heading font-semibold text-text mb-3">Private Investigations</h3>
          <p class="text-muted mb-6 leading-relaxed text-sm">
            Discreet investigations, background checks, surveillance, and corporate fraud investigations.
          </p>
          <div class="flex items-center text-action font-semibold text-sm">
            <span>Explore Service</span>
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </div>

        <!-- Executive/Event Security -->
        <div class="service-card" @click="navigateToServices('executive')">
          <div class="mb-6">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </div>
          </div>
          <h3 class="text-lg font-heading font-semibold text-text mb-3">Executive & Event Security</h3>
          <p class="text-muted mb-6 leading-relaxed text-sm">
            VIP protection, event security management, and crowd control for special occasions and high-profile clients.
          </p>
          <div class="flex items-center text-action font-semibold text-sm">
            <span>Explore Service</span>
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </div>
        </div>
      </div>

      <!-- CTA Section -->
      <div class="text-center mt-12">
        <p class="text-lg text-muted mb-6">
          Need a customized security solution for your specific needs?
        </p>
        <router-link 
          to="/contact"
          class="btn btn--primary"
        >
          Get Your Free Security Assessment
        </router-link>
      </div>
    </div>
  </section>
</template>

<script setup>
import { useRouter } from 'vue-router'

const router = useRouter()

const navigateToServices = (serviceType) => {
  // Navigate to services page with specific service in focus
  router.push({ path: '/services', query: { service: serviceType } })
}
</script>
