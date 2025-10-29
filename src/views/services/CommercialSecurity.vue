<template>
  <div class="commercial-security-page">
    <!-- Service Hero Section -->
    <section class="hero-section relative min-h-[70vh] flex items-center justify-center animate-on-scroll pt-24 sm:pt-20 lg:pt-24">
      <div class="absolute inset-0 z-0">
        <!-- Enhanced overlay layers -->
        <div class="absolute inset-0 bg-gradient-to-b from-bg/50 via-bg/75 to-bg/90 z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-bg/40 via-transparent to-bg/40 z-20"></div>
        <div class="absolute inset-0 bg-black/30 z-30"></div>
        
        <!-- Desktop hero image -->
        <EnhancedImage
          :src="heroBanner"
          alt="Professional security officer protecting commercial property"
          container-class="w-full h-full hidden md:block hero-image"
          image-class="w-full h-full object-cover"
          :lazy="false"
          :show-loading-icon="false"
        />
        <!-- Mobile hero image -->
        <EnhancedImage
          :src="heroBannerMobile"
          alt="Professional security officer protecting commercial property"
          container-class="w-full h-full block md:hidden hero-image"
          image-class="w-full h-full object-cover"
          :lazy="false"
          :show-loading-icon="false"
        />
      </div>

      <div class="relative z-20 container text-center">
        <div class="max-w-4xl mx-auto">
          <!-- Service badge -->
          <div class="inline-flex items-center space-x-3 hero-card-sm mb-6 mt-6 sm:mt-4">
            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>
            <span class="text-white text-sm font-medium font-body">Commercial Property Security</span>
          </div>

          <!-- Main content in solid background card -->
          <div class="hero-card-lg p-8 lg:p-12">
            <h1 class="heading-xl text-white font-heading mb-4 text-shadow-lg">
              Professional Security for Commercial Properties
            </h1>
            
            <p class="text-lg text-white/90 max-w-3xl mx-auto mb-8 font-body text-shadow">
              Comprehensive security solutions for office buildings, retail centers, warehouses, and industrial facilities with 24/7 protection and asset monitoring.
            </p>

            <!-- Key metrics -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">500+</div>
                <div class="text-sm text-white/90 font-body">Properties Secured</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">24/7</div>
                <div class="text-sm text-white/90 font-body">Asset Protection</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">90</div>
                <div class="text-sm text-white/90 font-body">Sec Response</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">98%</div>
                <div class="text-sm text-white/90 font-body">Client Retention</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Problem Section -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">Commercial Security Challenges</h2>
          <p class="text-lg text-muted mb-8">
            Commercial properties face complex security threats that require specialized protection strategies and professional response protocols.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Challenge 1 -->
          <div class="card text-center p-8">
            <div class="w-16 h-16 bg-danger/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Theft & Break-ins</h3>
            <p class="text-muted">
              Commercial properties contain valuable assets, equipment, and inventory that attract criminals. After-hours break-ins result in significant financial losses and business disruption.
            </p>
          </div>

          <!-- Challenge 2 -->
          <div class="card text-center p-8">
            <div class="w-16 h-16 bg-danger/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Employee Safety</h3>
            <p class="text-muted">
              Workplace violence, harassment, and threats to employee safety create liability concerns and impact productivity. Businesses must protect their workforce around the clock.
            </p>
          </div>

          <!-- Challenge 3 -->
          <div class="card text-center p-8">
            <div class="w-16 h-16 bg-danger/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Regulatory Compliance</h3>
            <p class="text-muted">
              Commercial properties must meet industry-specific security regulations, insurance requirements, and safety standards while managing access control and visitor management.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Solution Section -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">Our Commercial Security Solution</h2>
          <p class="text-lg text-muted mb-8">
            ECIS delivers comprehensive security services tailored to the unique needs of commercial properties and business operations.
          </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <!-- Solution Features -->
          <div class="space-y-8">
            <!-- Feature 1 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Advanced Access Control</h3>
                <p class="text-muted">
                  Professional management of access control systems, visitor screening, employee verification, and after-hours security with comprehensive entry/exit logging.
                </p>
              </div>
            </div>

            <!-- Feature 2 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Perimeter Monitoring</h3>
                <p class="text-muted">
                  24/7 monitoring of building perimeters, parking areas, loading docks, and critical infrastructure with immediate response to suspicious activity or security breaches.
                </p>
              </div>
            </div>

            <!-- Feature 3 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
              </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Asset Protection</h3>
                <p class="text-muted">
                  Specialized protection for valuable equipment, inventory, and sensitive areas with regular inspections, alarm response, and theft prevention protocols.
                </p>
              </div>
            </div>

            <!-- Feature 4 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Comprehensive Reporting</h3>
                <p class="text-muted">
                  Detailed incident reports, daily activity logs, and monthly security assessments with digital dashboards for property managers and business owners.
                </p>
              </div>
            </div>
          </div>

          <!-- Solution Image/Stats -->
          <div class="card p-8 bg-action/5 border-action/20">
            <h3 class="text-2xl font-heading font-bold text-text mb-6 text-center">Commercial Security Results</h3>
            
            <div class="space-y-6">
              <div class="flex justify-between items-center">
                <span class="text-muted font-medium">Theft Reduction</span>
                <span class="text-2xl font-heading font-bold text-action">92%</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-muted font-medium">Security Incidents</span>
                <span class="text-2xl font-heading font-bold text-action">-78%</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-muted font-medium">Insurance Savings</span>
                <span class="text-2xl font-heading font-bold text-action">25%</span>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-muted font-medium">Response Time</span>
                <span class="text-2xl font-heading font-bold text-action">90s</span>
              </div>
            </div>

            <div class="mt-8 p-4 bg-surface rounded-lg border border-action/10">
              <p class="text-sm text-muted italic text-center">
                "ECIS has eliminated our security concerns and reduced our insurance costs significantly. Their officers are professional and responsive."
              </p>
              <p class="text-sm font-medium text-text text-center mt-2">
                — Michael Rodriguez, Property Manager
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Industries Served -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">Industries We Protect</h2>
          <p class="text-lg text-muted">
            Specialized security solutions for diverse commercial property types and business sectors.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Office Buildings -->
          <div class="card text-center p-6 hover:border-action/50 transition-colors">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">Office Buildings</h3>
            <p class="text-muted text-sm">Corporate headquarters, professional offices, and multi-tenant buildings.</p>
          </div>

          <!-- Retail Centers -->
          <div class="card text-center p-6 hover:border-action/50 transition-colors">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">Retail Centers</h3>
            <p class="text-muted text-sm">Shopping centers, malls, and standalone retail establishments.</p>
          </div>

          <!-- Warehouses -->
          <div class="card text-center p-6 hover:border-action/50 transition-colors">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0V1a1 1 0 011-1h2a1 1 0 011 1v18a1 1 0 01-1 1H3a1 1 0 01-1-1V1a1 1 0 011-1h2a1 1 0 011 1v3" />
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">Warehouses</h3>
            <p class="text-muted text-sm">Distribution centers, storage facilities, and logistics operations.</p>
          </div>

          <!-- Industrial Facilities -->
          <div class="card text-center p-6 hover:border-action/50 transition-colors">
            <div class="w-16 h-16 bg-action/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-2">Industrial Sites</h3>
            <p class="text-muted text-sm">Manufacturing plants, production facilities, and industrial complexes.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Steps Section -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">Our Commercial Security Process</h2>
          <p class="text-lg text-muted">
            A proven methodology for implementing comprehensive commercial security solutions.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Step 1 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">1</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Site Assessment</h3>
            <p class="text-muted">
              Comprehensive evaluation of your property's security vulnerabilities, access points, and risk factors.
            </p>
          </div>

          <!-- Step 2 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">2</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Security Design</h3>
            <p class="text-muted">
              Custom security protocol development including patrol routes, access procedures, and emergency response plans.
            </p>
          </div>

          <!-- Step 3 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">3</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Implementation</h3>
            <p class="text-muted">
              Deployment of trained security officers with industry-specific experience and technology integration.
            </p>
          </div>

          <!-- Step 4 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">4</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Monitoring</h3>
            <p class="text-muted">
              Ongoing performance monitoring, reporting, and security optimization to ensure maximum effectiveness.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto">
          <h2 class="heading-lg text-text text-center mb-12">Commercial Security FAQ</h2>
          
          <div class="space-y-6">
            <!-- FAQ 1 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                What makes commercial security different from residential security?
              </h3>
              <p class="text-muted">
                Commercial security involves larger properties, more complex access control, multiple entry points, valuable assets, employee safety, and regulatory compliance requirements. Our officers receive specialized training for business environments.
              </p>
            </div>

            <!-- FAQ 2 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                How do you handle after-hours security for businesses?
              </h3>
              <p class="text-muted">
                We provide 24/7 monitoring with regular patrols, alarm response, and emergency protocols. Our officers secure the premises, monitor surveillance systems, and respond immediately to any security breaches or incidents.
              </p>
            </div>

            <!-- FAQ 3 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                Can you integrate with existing security systems?
              </h3>
              <p class="text-muted">
                Yes, our security officers are trained to work with existing CCTV, access control, and alarm systems. We can also recommend upgrades and work with your preferred security technology vendors.
              </p>
            </div>

            <!-- FAQ 4 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                What reporting do property managers receive?
              </h3>
              <p class="text-muted">
                Property managers receive detailed daily reports, incident documentation, weekly summaries, and monthly security assessments. We also provide real-time notifications for any security events or emergencies.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container text-center">
        <div class="max-w-4xl mx-auto">
          <h2 class="heading-lg text-text mb-4">Protect Your Commercial Property</h2>
          <p class="text-lg text-muted mb-8 max-w-2xl mx-auto">
            Get a comprehensive security assessment for your commercial property and discover how professional security services can protect your assets and reduce liability.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <router-link to="/contact" class="btn btn--primary">Request Security Assessment</router-link>
            <a href="tel:+15612490897" class="btn btn--secondary">Call (561) 249-0897</a>
          </div>

          <!-- Trust indicators -->
          <div class="flex flex-wrap justify-center items-center gap-8 mt-12 text-muted text-sm">
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span>Licensed & Bonded</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span>Fully Insured</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span>500+ Properties Protected</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import EnhancedImage from '@/components/EnhancedImage.vue'
import { heroBanner, heroBannerMobile } from '@/assets/images.js'
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
</style>
