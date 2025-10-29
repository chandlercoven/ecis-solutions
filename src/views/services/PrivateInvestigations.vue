<template>
  <div class="private-investigations-page">
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
          alt="Professional private investigator conducting research"
          container-class="w-full h-full hidden md:block hero-image"
          image-class="w-full h-full object-cover"
          :lazy="false"
          :show-loading-icon="false"
        />
        <!-- Mobile hero image -->
        <EnhancedImage
          :src="heroBannerMobile"
          alt="Professional private investigator conducting research"
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
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
            <span class="text-white text-sm font-medium font-body">Private Investigation Services</span>
          </div>

          <!-- Main content in solid background card -->
          <div class="hero-card-lg p-8 lg:p-12">
            <h1 class="heading-xl text-white font-heading mb-4 text-shadow-lg">
              Professional Private Investigation Services
            </h1>
            
            <p class="text-lg text-white/90 max-w-3xl mx-auto mb-8 font-body text-shadow">
              Licensed private investigators providing confidential services for individuals, attorneys, and businesses. Background checks, surveillance, and corporate investigations handled with complete discretion.
            </p>

            <!-- Key metrics -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">20+</div>
                <div class="text-sm text-white/90 font-body">Years Experience</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">1000+</div>
                <div class="text-sm text-white/90 font-body">Cases Solved</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">100%</div>
                <div class="text-sm text-white/90 font-body">Confidential</div>
              </div>
              <div class="hero-card-sm text-center p-4 lg:p-6">
                <div class="text-2xl lg:text-3xl font-heading font-bold text-action mb-1">Licensed</div>
                <div class="text-sm text-white/90 font-body">& Bonded</div>
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
          <h2 class="heading-lg text-text mb-6">When You Need Professional Investigation</h2>
          <p class="text-lg text-muted mb-8">
            Complex situations require professional investigation services to uncover facts, gather evidence, and provide actionable intelligence.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Challenge 1 -->
          <div class="card text-center p-8">
            <div class="w-16 h-16 bg-danger/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Employment Verification</h3>
            <p class="text-muted">
              Hiring decisions require thorough background checks to verify employment history, credentials, and character references to protect your organization from fraud and liability.
            </p>
          </div>

          <!-- Challenge 2 -->
          <div class="card text-center p-8">
            <div class="w-16 h-16 bg-danger/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Corporate Fraud</h3>
            <p class="text-muted">
              Internal theft, embezzlement, and corporate fraud require discreet investigation to gather evidence while protecting business operations and maintaining confidentiality.
            </p>
          </div>

          <!-- Challenge 3 -->
          <div class="card text-center p-8">
            <div class="w-16 h-16 bg-danger/10 rounded-xl flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-danger" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Legal Support</h3>
            <p class="text-muted">
              Legal proceedings require professional evidence gathering, witness interviews, and documentation to support litigation and provide court-admissible findings.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Solution Section -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">Our Professional Investigation Services</h2>
          <p class="text-lg text-muted mb-8">
            ECIS licensed investigators provide comprehensive, confidential investigation services with detailed reporting and court-admissible evidence.
          </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <!-- Solution Features -->
          <div class="space-y-8">
            <!-- Feature 1 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Comprehensive Background Checks</h3>
                <p class="text-muted">
                  Thorough verification of employment history, education credentials, criminal records, financial history, and character references with detailed written reports.
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
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Professional Surveillance</h3>
                <p class="text-muted">
                  Discrete surveillance services for insurance fraud, workers' compensation claims, and legal proceedings with photo/video documentation and detailed activity logs.
                </p>
              </div>
            </div>

            <!-- Feature 3 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Corporate Investigations</h3>
                <p class="text-muted">
                  Internal theft investigations, due diligence, asset searches, and corporate fraud detection with legally admissible evidence and professional testimony.
                </p>
              </div>
            </div>

            <!-- Feature 4 -->
            <div class="flex items-start space-x-4">
              <div class="w-12 h-12 bg-action/10 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-2">Litigation Support</h3>
                <p class="text-muted">
                  Evidence gathering, witness interviews, accident reconstruction, and expert testimony for attorneys and legal proceedings with court-ready documentation.
                </p>
              </div>
            </div>
          </div>

          <!-- Investigation Types -->
          <div class="card p-8 bg-action/5 border-action/20">
            <h3 class="text-2xl font-heading font-bold text-text mb-6 text-center">Investigation Specialties</h3>
            
            <div class="space-y-4">
              <div class="bg-surface-2 rounded-lg p-4 border border-action/10">
                <h4 class="font-heading font-semibold text-text mb-2">Insurance Fraud</h4>
                <p class="text-sm text-muted">Workers' compensation, disability claims, and accident investigations with video evidence.</p>
              </div>
              
              <div class="bg-surface-2 rounded-lg p-4 border border-action/10">
                <h4 class="font-heading font-semibold text-text mb-2">Asset Searches</h4>
                <p class="text-sm text-muted">Hidden asset location, property records, and financial investigations for legal proceedings.</p>
              </div>
              
              <div class="bg-surface-2 rounded-lg p-4 border border-action/10">
                <h4 class="font-heading font-semibold text-text mb-2">Due Diligence</h4>
                <p class="text-sm text-muted">Business partner verification, acquisition research, and corporate background investigations.</p>
              </div>

              <div class="bg-surface-2 rounded-lg p-4 border border-action/10">
                <h4 class="font-heading font-semibold text-text mb-2">Missing Persons</h4>
                <p class="text-sm text-muted">Skip tracing, witness location, and heir searches with comprehensive database access.</p>
              </div>
            </div>

            <div class="mt-8 p-4 bg-surface-2 rounded-lg border border-action/10">
              <p class="text-sm text-muted italic text-center">
                "Their investigation provided the evidence we needed to resolve our insurance fraud case. Professional and thorough work."
              </p>
              <p class="text-sm font-medium text-text text-center mt-2">
                — Robert Sterling, Attorney
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Breakdown Section -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">Investigation Service Categories</h2>
          <p class="text-lg text-muted">
            Comprehensive investigation services tailored to specific client needs and legal requirements.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Background Checks -->
          <div class="card p-8 hover:border-action/50 transition-colors">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Background Checks</h3>
            <ul class="space-y-2 text-muted text-sm">
              <li class="flex items-start">
                <svg class="w-4 h-4 text-action mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Employment verification
              </li>
              <li class="flex items-start">
                <svg class="w-4 h-4 text-action mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Criminal history
              </li>
              <li class="flex items-start">
                <svg class="w-4 h-4 text-action mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Financial records
              </li>
              <li class="flex items-start">
                <svg class="w-4 h-4 text-action mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Reference checks
              </li>
            </ul>
          </div>

          <!-- Surveillance Services -->
          <div class="card p-8 hover:border-action/50 transition-colors">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Surveillance Services</h3>
            <ul class="space-y-2 text-muted text-sm">
              <li class="flex items-start">
                <svg class="w-4 h-4 text-action mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Insurance fraud
              </li>
              <li class="flex items-start">
                <svg class="w-4 h-4 text-action mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Workers' compensation
              </li>
              <li class="flex items-start">
                <svg class="w-4 h-4 text-action mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Activity monitoring
              </li>
              <li class="flex items-start">
                <svg class="w-4 h-4 text-action mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Legal documentation
              </li>
            </ul>
          </div>

          <!-- Corporate Services -->
          <div class="card p-8 hover:border-action/50 transition-colors">
            <div class="w-14 h-14 bg-action/10 rounded-lg flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
              </svg>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Corporate Services</h3>
            <ul class="space-y-2 text-muted text-sm">
              <li class="flex items-start">
                <svg class="w-4 h-4 text-action mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Internal theft
              </li>
              <li class="flex items-start">
                <svg class="w-4 h-4 text-action mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Due diligence
              </li>
              <li class="flex items-start">
                <svg class="w-4 h-4 text-action mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Litigation support
              </li>
              <li class="flex items-start">
                <svg class="w-4 h-4 text-action mt-0.5 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Asset searches
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Steps Section -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto text-center mb-12">
          <h2 class="heading-lg text-text mb-6">Our Investigation Process</h2>
          <p class="text-lg text-muted">
            A systematic approach ensures thorough investigation while maintaining confidentiality and legal compliance.
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Step 1 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">1</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Case Consultation</h3>
            <p class="text-muted">
              Confidential consultation to understand your needs, review available information, and develop an investigation strategy.
            </p>
          </div>

          <!-- Step 2 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">2</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Investigation Plan</h3>
            <p class="text-muted">
              Development of comprehensive investigation plan with timeline, methodology, and expected deliverables clearly defined.
            </p>
          </div>

          <!-- Step 3 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">3</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Evidence Gathering</h3>
            <p class="text-muted">
              Professional investigation execution using legal methods, advanced technology, and experienced investigative techniques.
            </p>
          </div>

          <!-- Step 4 -->
          <div class="text-center">
            <div class="w-20 h-20 bg-action rounded-xl flex items-center justify-center mx-auto mb-4">
              <span class="text-2xl font-heading font-bold text-white">4</span>
            </div>
            <h3 class="text-xl font-heading font-semibold text-text mb-3">Comprehensive Report</h3>
            <p class="text-muted">
              Detailed written report with findings, evidence, documentation, and expert testimony if required for legal proceedings.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="max-w-4xl mx-auto">
          <h2 class="heading-lg text-text text-center mb-12">Investigation Services FAQ</h2>
          
          <div class="space-y-6">
            <!-- FAQ 1 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                Are private investigation services legal and admissible in court?
              </h3>
              <p class="text-muted">
                Yes, all our investigations are conducted by licensed private investigators using legal methods. Evidence gathered follows proper procedures and is admissible in legal proceedings. We can provide expert testimony when required.
              </p>
            </div>

            <!-- FAQ 2 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                How do you ensure confidentiality during investigations?
              </h3>
              <p class="text-muted">
                All investigations are conducted with strict confidentiality. We use discrete methods, secure communication, and professional protocols. Client information and investigation details are protected under attorney-client privilege when applicable.
              </p>
            </div>

            <!-- FAQ 3 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                What type of evidence and documentation do you provide?
              </h3>
              <p class="text-muted">
                We provide comprehensive written reports with photographic evidence, video documentation, witness statements, and detailed activity logs. All evidence is court-ready and includes chain of custody documentation for legal proceedings.
              </p>
            </div>

            <!-- FAQ 4 -->
            <div class="card p-6">
              <h3 class="text-xl font-heading font-semibold text-text mb-3">
                How long do typical investigations take to complete?
              </h3>
              <p class="text-muted">
                Investigation timelines vary based on complexity and scope. Background checks typically take 3-5 days, surveillance operations 1-4 weeks, and complex corporate investigations 2-8 weeks. We provide estimated timelines during consultation.
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
          <h2 class="heading-lg text-text mb-4">Need Professional Investigation Services?</h2>
          <p class="text-lg text-muted mb-8 max-w-2xl mx-auto">
            Contact our licensed investigators for a confidential consultation about your case. All investigations are handled with complete discretion and professionalism.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <router-link to="/contact" class="btn btn--primary">Request Confidential Consultation</router-link>
            <a href="tel:+15612490897" class="btn btn--secondary">Call (561) 249-0897</a>
          </div>

          <!-- Trust indicators -->
          <div class="flex flex-wrap justify-center items-center gap-8 mt-12 text-muted text-sm">
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span>Licensed Investigators</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span>Confidential & Discrete</span>
            </div>
            <div class="flex items-center space-x-2">
              <svg class="w-5 h-5 text-success" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span>Court-Admissible Evidence</span>
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

