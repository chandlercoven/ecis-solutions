<template>
  <section id="about" class="section-padding bg-gray-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
      <svg class="absolute right-0 top-0 w-96 h-96 text-navy" fill="currentColor" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="0.5" fill="none" />
        <circle cx="50" cy="50" r="30" stroke="currentColor" stroke-width="0.5" fill="none" />
        <circle cx="50" cy="50" r="20" stroke="currentColor" stroke-width="0.5" fill="none" />
      </svg>
    </div>

    <div class="container-custom relative z-10">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
        <div class="inline-flex items-center space-x-2 bg-navy/10 rounded-full px-4 py-2">
          <span class="text-navy text-sm font-semibold uppercase tracking-wider">About ECIS</span>
        </div>
        <h2 class="heading-lg text-text">
          Trust Built on Experience
        </h2>
      </div>

      <!-- Split Layout -->
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <!-- Left: Image/Team -->
        <div class="relative">
          <div class="relative rounded-2xl overflow-hidden shadow-xl">
            <img 
              src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
              alt="ECIS Security Team"
              class="w-full h-auto"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-navy-dark/60 via-transparent to-transparent"></div>
            
            <!-- Founder Badge -->
            <div class="absolute bottom-6 left-6 right-6 bg-surface/95 backdrop-blur-sm rounded-xl p-4">
              <div class="flex items-center space-x-4">
                <div class="w-16 h-16 bg-gradient-primary rounded-full flex items-center justify-center">
                  <span class="text-white font-bold text-xl">JL</span>
                </div>
                <div>
                  <h3 class="font-heading font-semibold text-text">Joseph La Bella</h3>
                  <p class="text-sm text-muted">Founder & CEO</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Trust Metrics -->
        <div class="space-y-8">
          <div>
            <h3 class="heading-md text-text mb-4">
              Two Decades of Excellence
            </h3>
            <p class="text-lg text-muted leading-relaxed">
              Founded by Joseph La Bella, ECIS Solutions brings over 20 years of security expertise 
              to South Florida. We've built our reputation on reliability, professionalism, and an 
              unwavering commitment to protecting our clients.
            </p>
          </div>

          <!-- Trust Badges Grid -->
          <div class="grid grid-cols-2 gap-6">
            <div class="bg-surface rounded-xl p-6 shadow-card border border">
              <div class="flex items-center space-x-3 mb-3">
                <div class="w-10 h-10 bg-electric-blue/10 rounded-lg flex items-center justify-center">
                  <svg class="w-6 h-6 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                </div>
                <span class="font-heading font-semibold text-text">Licensed</span>
              </div>
              <p class="text-sm text-muted">State-licensed security agency and training academy</p>
            </div>

            <div class="bg-surface rounded-xl p-6 shadow-card border border">
              <div class="flex items-center space-x-3 mb-3">
                <div class="w-10 h-10 bg-electric-blue/10 rounded-lg flex items-center justify-center">
                  <svg class="w-6 h-6 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                <span class="font-heading font-semibold text-text">Insured</span>
              </div>
              <p class="text-sm text-muted">Fully insured for your complete peace of mind</p>
            </div>

            <div class="bg-surface rounded-xl p-6 shadow-card border border">
              <div class="flex items-center space-x-3 mb-3">
                <div class="w-10 h-10 bg-electric-blue/10 rounded-lg flex items-center justify-center">
                  <svg class="w-6 h-6 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </div>
                <span class="font-heading font-semibold text-text">Statewide</span>
              </div>
              <p class="text-sm text-muted">Coverage across all of Florida</p>
            </div>

            <div class="bg-surface rounded-xl p-6 shadow-card border border">
              <div class="flex items-center space-x-3 mb-3">
                <div class="w-10 h-10 bg-electric-blue/10 rounded-lg flex items-center justify-center">
                  <svg class="w-6 h-6 text-electric-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
                </div>
                <span class="font-heading font-semibold text-text">Professional</span>
              </div>
              <p class="text-sm text-muted">Trained and certified security professionals</p>
            </div>
          </div>

          <!-- Experience Stats -->
          <div class="bg-gradient-primary rounded-xl p-8">
            <div class="grid grid-cols-3 gap-6 text-center">
              <div>
                <div class="text-3xl font-bold text-white">20+</div>
                <div class="text-white/80 text-sm mt-1">Years in Business</div>
              </div>
              <div>
                <div class="text-3xl font-bold text-white">50+</div>
                <div class="text-white/80 text-sm mt-1">Team Members</div>
              </div>
              <div>
                <div class="text-3xl font-bold text-white">24/7</div>
                <div class="text-white/80 text-sm mt-1">Available</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Certifications Bar -->
      <div class="mt-16 pt-12 border-t border">
        <p class="text-center text-muted mb-8">Trusted by Leading Organizations</p>
        <div class="flex flex-wrap justify-center items-center gap-8 opacity-60">
          <!-- Placeholder for certification/partner logos -->
          <div class="text-muted">
            <svg class="w-32 h-12" fill="currentColor" viewBox="0 0 120 40">
              <text x="10" y="25" font-family="Arial" font-size="12">FL License #A 1700202</text>
            </svg>
          </div>
          <div class="text-muted">
            <svg class="w-32 h-12" fill="currentColor" viewBox="0 0 120 40">
              <text x="10" y="25" font-family="Arial" font-size="12">BBB Accredited</text>
            </svg>
          </div>
          <div class="text-muted">
            <svg class="w-32 h-12" fill="currentColor" viewBox="0 0 120 40">
              <text x="10" y="25" font-family="Arial" font-size="12">ASIS Member</text>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
// Animation logic can be added here
</script>
