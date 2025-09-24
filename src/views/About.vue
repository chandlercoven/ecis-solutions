<template>
  <div class="about-page">
    <!-- Mission Hero Section -->
    <section class="hero-section relative min-h-[60vh] flex items-center justify-center animate-on-scroll pt-24 sm:pt-20 lg:pt-24">
      <div class="absolute inset-0 z-0">
        <!-- Enhanced overlay layers -->
        <div class="absolute inset-0 bg-gradient-to-b from-bg/40 via-bg/70 to-bg/90 z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-bg/30 via-transparent to-bg/30 z-20"></div>
        <div class="absolute inset-0 bg-black/20 z-30"></div>
        
        <!-- Desktop hero image -->
        <img 
          src="@/assets/hero-banner.jpg"
          alt="Professional security team in uniform at headquarters"
          class="w-full h-full object-cover hidden md:block"
        >
        <!-- Mobile hero image -->
        <img 
          src="@/assets/hero-banner-mobile.jpg"
          alt="Professional security team in uniform at headquarters"
          class="w-full h-full object-cover block md:hidden"
        >
      </div>

      <div class="relative z-20 container text-center">
        <div class="max-w-4xl mx-auto">
          <!-- Solid background badge -->
          <div class="inline-flex items-center space-x-2 sm:space-x-3 hero-card-sm mb-6 mt-6 sm:mt-4">
            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
            <span class="text-white text-xs sm:text-sm font-medium font-body">Established 2008</span>
          </div>

          <!-- Main content in solid background card -->
          <div class="hero-card-lg p-8 lg:p-12">
            <h1 class="heading-xl text-white font-heading mb-4 text-shadow-lg">
              Protecting Communities Since 2008
            </h1>
            
            <p class="text-lg text-white/90 max-w-3xl mx-auto font-body text-shadow">
              With over 15 years of experience, ECIS Solutions has built a reputation for excellence in professional security services throughout Florida.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Mission & Values -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <div>
            <h2 class="heading-lg text-text mb-6">Our Mission</h2>
            <p class="text-muted text-lg mb-6 leading-relaxed">
              To provide uncompromising security solutions that safeguard what matters most—your people, your property, and your peace of mind.
            </p>
            <p class="text-muted mb-6">
              We combine cutting-edge technology with highly trained personnel to deliver comprehensive security services that exceed expectations.
            </p>
            
            <div class="space-y-4">
              <div class="flex items-start space-x-3">
                <div class="w-8 h-8 bg-action/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-4 h-4 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-heading font-semibold text-text mb-1">Integrity First</h4>
                  <p class="text-muted text-sm">Operating with the highest ethical standards in every interaction.</p>
                </div>
              </div>

              <div class="flex items-start space-x-3">
                <div class="w-8 h-8 bg-action/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-4 h-4 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-heading font-semibold text-text mb-1">Excellence in Service</h4>
                  <p class="text-muted text-sm">Continuous improvement and attention to detail in everything we do.</p>
                </div>
              </div>

              <div class="flex items-start space-x-3">
                <div class="w-8 h-8 bg-action/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-4 h-4 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-heading font-semibold text-text mb-1">Community Partnership</h4>
                  <p class="text-muted text-sm">Building lasting relationships with the communities we protect.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="bg-bg rounded-lg p-8 border border-border">
            <h3 class="text-2xl font-heading font-semibold text-text mb-8">By the Numbers</h3>
            <div class="grid grid-cols-2 gap-6">
              <div>
                <div class="text-3xl font-heading font-bold text-gradient mb-2">15+</div>
                <div class="text-muted text-sm">Years of Excellence</div>
              </div>
              <div>
                <div class="text-3xl font-heading font-bold text-gradient mb-2">200+</div>
                <div class="text-muted text-sm">Properties Protected</div>
              </div>
              <div>
                <div class="text-3xl font-heading font-bold text-gradient mb-2">500+</div>
                <div class="text-muted text-sm">Officers Trained</div>
              </div>
              <div>
                <div class="text-3xl font-heading font-bold text-gradient mb-2">24/7</div>
                <div class="text-muted text-sm">Always Available</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Leadership Team -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container">
        <div class="text-center mb-12">
          <h2 class="heading-lg text-text mb-4">Our Leadership</h2>
          <p class="text-lg text-muted max-w-2xl mx-auto">Experienced professionals dedicated to your security.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
          <!-- Michael LaBella - President -->
          <div class="text-center">
            <div class="w-32 h-32 bg-surface rounded-full mx-auto mb-4 flex items-center justify-center border-2 border-border">
              <svg class="w-16 h-16 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
            </div>
            <h3 class="font-heading font-semibold text-text mb-1">Michael LaBella</h3>
            <p class="text-action text-sm font-semibold mb-2">President</p>
            <p class="text-muted text-sm">Leading ECIS Solutions with over 15 years of security industry expertise and strategic vision.</p>
          </div>

          <!-- Jake LaBella - VP & Field Operations Director -->
          <div class="text-center">
            <div class="w-32 h-32 bg-surface rounded-full mx-auto mb-4 flex items-center justify-center border-2 border-border">
              <svg class="w-16 h-16 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
            </div>
            <h3 class="font-heading font-semibold text-text mb-1">Jake LaBella</h3>
            <p class="text-action text-sm font-semibold mb-2">VP & Field Operations Director</p>
            <p class="text-muted text-sm">Overseeing field operations and ensuring seamless security service delivery across all locations.</p>
          </div>

          <!-- Joseph F. LaBella - Security Director -->
          <div class="text-center">
            <div class="w-32 h-32 bg-surface rounded-full mx-auto mb-4 flex items-center justify-center border-2 border-border">
              <svg class="w-16 h-16 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
            </div>
            <h3 class="font-heading font-semibold text-text mb-1">Joseph F. LaBella</h3>
            <p class="text-action text-sm font-semibold mb-2">Security Director</p>
            <p class="text-muted text-sm">Directing security protocols and ensuring the highest standards of protection for our clients.</p>
          </div>

          <!-- Gabriel Calderon - Logistics Coordinator Director -->
          <div class="text-center">
            <div class="w-32 h-32 bg-surface rounded-full mx-auto mb-4 flex items-center justify-center border-2 border-border">
              <svg class="w-16 h-16 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
            </div>
            <h3 class="font-heading font-semibold text-text mb-1">Gabriel Calderon</h3>
            <p class="text-action text-sm font-semibold mb-2">Logistics Coordinator Director</p>
            <p class="text-muted text-sm">Managing operational logistics and coordinating resources to ensure efficient service delivery.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Certifications & Credentials -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="text-center mb-12">
          <h2 class="heading-lg text-text mb-4">Licensed & Certified</h2>
          <p class="text-lg text-muted max-w-2xl mx-auto">Fully licensed, bonded, and insured for your protection.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div class="card text-center">
            <svg class="w-12 h-12 text-action mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
            <h4 class="font-heading font-semibold text-text mb-1">State Licensed</h4>
            <p class="text-muted text-sm">Florida License #B2800123</p>
          </div>

          <div class="card text-center">
            <svg class="w-12 h-12 text-action mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h4 class="font-heading font-semibold text-text mb-1">Fully Insured</h4>
            <p class="text-muted text-sm">$5M General Liability</p>
          </div>

          <div class="card text-center">
            <svg class="w-12 h-12 text-action mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
            <h4 class="font-heading font-semibold text-text mb-1">Training Academy</h4>
            <p class="text-muted text-sm">State Approved School</p>
          </div>

          <div class="card text-center">
            <svg class="w-12 h-12 text-action mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <h4 class="font-heading font-semibold text-text mb-1">BBB Accredited</h4>
            <p class="text-muted text-sm">A+ Rating Since 2010</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Career CTA -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container text-center">
        <h2 class="heading-lg text-text mb-4">Join Our Team</h2>
        <p class="text-lg text-muted mb-8 max-w-2xl mx-auto">
          We're always looking for dedicated professionals to join our growing team. Build a rewarding career in security with ECIS Solutions.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <router-link to="/training" class="btn btn--primary">View Training Programs</router-link>
          <router-link to="/contact" class="btn btn--secondary">Career Opportunities</router-link>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
// About page functionality
</script>

<style scoped>
.hero-section {
  background: linear-gradient(135deg, var(--bg) 0%, var(--surface) 100%);
}

.hero-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at center, transparent 0%, var(--bg)/20 100%);
  z-index: 1;
}

.text-gradient {
  background: linear-gradient(135deg, var(--action) 0%, var(--accent) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

/* About page specific styles */
</style>
