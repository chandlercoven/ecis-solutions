<template>
  <div class="training-page">
    <!-- Training Hero Section -->
    <section class="hero-section relative min-h-[60vh] flex items-center justify-center animate-on-scroll pt-24 sm:pt-20 lg:pt-24 pb-8 sm:pb-12">
      <div class="absolute inset-0 z-0">
        <!-- Enhanced overlay layers -->
        <div class="absolute inset-0 bg-gradient-to-b from-bg/40 via-bg/70 to-bg/90 z-10"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-bg/30 via-transparent to-bg/30 z-20"></div>
        <div class="absolute inset-0 bg-black/20 z-30"></div>
        
        <!-- Desktop hero image -->
        <img 
          src="@/assets/hero-banner.jpg"
          alt="Security training academy classroom with professional instructors"
          class="w-full h-full object-cover hidden md:block"
        >
        <!-- Mobile hero image -->
        <img 
          src="@/assets/hero-banner-mobile.jpg"
          alt="Security training academy classroom with professional instructors"
          class="w-full h-full object-cover block md:hidden"
        >
      </div>

      <div class="relative z-20 container text-center">
        <div class="max-w-4xl mx-auto">
          <!-- Solid background badge -->
          <div class="inline-flex items-center space-x-2 sm:space-x-3 hero-card-sm mb-6 mt-6 sm:mt-4">
            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
            <span class="text-white text-xs sm:text-sm font-medium font-body">State-Approved Training Academy</span>
          </div>

          <!-- Main content in solid background card -->
          <div class="hero-card-lg p-8 lg:p-12">
            <h1 class="heading-xl text-white font-heading mb-4 text-shadow-lg">
              Launch Your Security Career
            </h1>
            
            <p class="text-lg text-white/90 max-w-3xl mx-auto mb-8 font-body text-shadow">
              Professional security training with Class D & G licensing, experienced instructors, and job placement assistance.
            </p>

            <!-- Key benefits -->
            <div class="flex flex-wrap justify-center gap-6">
              <span class="bg-accent/20 backdrop-blur-sm text-accent font-semibold px-4 py-2 rounded-full text-sm">State Approved</span>
              <span class="bg-accent/20 backdrop-blur-sm text-accent font-semibold px-4 py-2 rounded-full text-sm">Job Placement</span>
              <span class="bg-accent/20 backdrop-blur-sm text-accent font-semibold px-4 py-2 rounded-full text-sm">Expert Instructors</span>
              <span class="bg-accent/20 backdrop-blur-sm text-accent font-semibold px-4 py-2 rounded-full text-sm">Flexible Schedule</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Training Programs -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="text-center mb-12">
          <h2 class="heading-lg text-text mb-4">Training Programs</h2>
          <p class="text-lg text-muted max-w-2xl mx-auto">State-approved certification programs designed to prepare you for a successful career in security.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
          <!-- Class D License -->
          <div class="card">
            <div class="flex items-center mb-6">
              <div class="w-16 h-16 bg-accent/10 rounded-xl flex items-center justify-center mr-4">
                <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-1">Class D License Training</h3>
                <p class="text-action text-sm font-semibold">Unarmed Security Officer</p>
              </div>
            </div>
            
            <p class="text-muted mb-6 leading-relaxed">Comprehensive training for unarmed security positions including patrol, access control, and emergency response procedures.</p>
            
            <div class="space-y-4 mb-6">
              <div>
                <h4 class="font-semibold text-text mb-2">Program Includes:</h4>
                <ul class="text-muted text-sm space-y-2">
                  <li class="flex items-start"><span class="w-1 h-1 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>40-hour state-mandated curriculum</li>
                  <li class="flex items-start"><span class="w-1 h-1 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>Legal authority and limitations</li>
                  <li class="flex items-start"><span class="w-1 h-1 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>Emergency procedures and first aid</li>
                  <li class="flex items-start"><span class="w-1 h-1 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>Report writing and documentation</li>
                  <li class="flex items-start"><span class="w-1 h-1 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>Professional communication skills</li>
                </ul>
              </div>

              <div class="flex justify-between items-center pt-4 border-t border-border">
                <div>
                  <span class="text-text font-semibold">Duration:</span>
                  <span class="text-muted text-sm ml-2">1 week (40 hours)</span>
                </div>
                <div>
                  <span class="text-text font-semibold">Cost:</span>
                  <span class="text-accent font-bold ml-2">$299</span>
                </div>
              </div>
            </div>
            
            <router-link to="/contact" class="btn btn--primary w-full">Enroll in Class D Training</router-link>
          </div>

          <!-- Class G License -->
          <div class="card">
            <div class="flex items-center mb-6">
              <div class="w-16 h-16 bg-accent/10 rounded-xl flex items-center justify-center mr-4">
                <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
              </div>
              <div>
                <h3 class="text-xl font-heading font-semibold text-text mb-1">Class G License Training</h3>
                <p class="text-action text-sm font-semibold">Armed Security Officer</p>
              </div>
            </div>
            
            <p class="text-muted mb-6 leading-relaxed">Advanced training for armed security positions with firearms proficiency, tactical training, and specialized response protocols.</p>
            
            <div class="space-y-4 mb-6">
              <div>
                <h4 class="font-semibold text-text mb-2">Program Includes:</h4>
                <ul class="text-muted text-sm space-y-2">
                  <li class="flex items-start"><span class="w-1 h-1 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>28-hour firearms training course</li>
                  <li class="flex items-start"><span class="w-1 h-1 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>Weapons safety and maintenance</li>
                  <li class="flex items-start"><span class="w-1 h-1 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>Tactical response procedures</li>
                  <li class="flex items-start"><span class="w-1 h-1 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>Legal use of force guidelines</li>
                  <li class="flex items-start"><span class="w-1 h-1 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>Range qualification and testing</li>
                </ul>
              </div>

              <div class="bg-warning/10 border border-warning/20 rounded-lg p-4">
                <p class="text-warning text-xs">
                  <strong>Prerequisites:</strong> Must hold valid Class D license and meet additional background requirements.
                </p>
              </div>

              <div class="flex justify-between items-center pt-4 border-t border-border">
                <div>
                  <span class="text-text font-semibold">Duration:</span>
                  <span class="text-muted text-sm ml-2">3 days (28 hours)</span>
                </div>
                <div>
                  <span class="text-text font-semibold">Cost:</span>
                  <span class="text-accent font-bold ml-2">$599</span>
                </div>
              </div>
            </div>
            
            <router-link to="/contact" class="btn btn--premium w-full">Enroll in Class G Training</router-link>
          </div>
        </div>
      </div>
    </section>

    <!-- Training Process -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container">
        <div class="text-center mb-12">
          <h2 class="heading-lg text-text mb-4">Your Path to Certification</h2>
          <p class="text-lg text-muted max-w-2xl mx-auto">Our proven training process gets you licensed and job-ready in just one week.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div class="text-center">
            <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-white font-heading font-bold text-lg">1</span>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-3">Enrollment</h3>
            <p class="text-muted text-sm">Complete application and background check. Start your journey to security certification.</p>
          </div>

          <div class="text-center">
            <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-white font-heading font-bold text-lg">2</span>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-3">Training</h3>
            <p class="text-muted text-sm">Intensive hands-on training with experienced law enforcement instructors.</p>
          </div>

          <div class="text-center">
            <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-white font-heading font-bold text-lg">3</span>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-3">Certification</h3>
            <p class="text-muted text-sm">Pass state examination and receive your official security officer license.</p>
          </div>

          <div class="text-center">
            <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-white font-heading font-bold text-lg">4</span>
            </div>
            <h3 class="text-lg font-heading font-semibold text-text mb-3">Job Placement</h3>
            <p class="text-muted text-sm">Immediate job placement assistance with our network of security employers.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose ECIS Academy -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <!-- Content -->
          <div>
            <h2 class="heading-lg text-text mb-6">Why Choose ECIS Academy?</h2>
            
            <div class="space-y-6">
              <div class="flex items-start space-x-4">
                <div class="w-8 h-8 bg-accent/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-heading font-semibold text-text mb-1">Expert Instructors</h4>
                  <p class="text-muted text-sm">Learn from former law enforcement officers and military veterans with decades of real-world experience.</p>
                </div>
              </div>

              <div class="flex items-start space-x-4">
                <div class="w-8 h-8 bg-accent/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-heading font-semibold text-text mb-1">Flexible Scheduling</h4>
                  <p class="text-muted text-sm">Day, evening, and weekend classes available to fit your current work schedule.</p>
                </div>
              </div>

              <div class="flex items-start space-x-4">
                <div class="w-8 h-8 bg-accent/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-heading font-semibold text-text mb-1">Job Placement Assistance</h4>
                  <p class="text-muted text-sm">95% of graduates find employment within 30 days through our extensive employer network.</p>
                </div>
              </div>

              <div class="flex items-start space-x-4">
                <div class="w-8 h-8 bg-accent/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                  <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <div>
                  <h4 class="font-heading font-semibold text-text mb-1">Modern Facilities</h4>
                  <p class="text-muted text-sm">State-of-the-art training center with classroom, simulation areas, and firearms range.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Stats/Image -->
          <div class="text-center">
            <div class="bg-bg rounded-lg p-8 border border-border mb-8">
              <div class="grid grid-cols-2 gap-6">
                <div>
                  <div class="text-3xl font-heading font-bold text-gradient mb-2">500+</div>
                  <div class="text-muted text-sm">Officers Trained</div>
                </div>
                <div>
                  <div class="text-3xl font-heading font-bold text-gradient mb-2">95%</div>
                  <div class="text-muted text-sm">Job Placement Rate</div>
                </div>
                <div>
                  <div class="text-3xl font-heading font-bold text-gradient mb-2">98%</div>
                  <div class="text-muted text-sm">Pass Rate</div>
                </div>
                <div>
                  <div class="text-3xl font-heading font-bold text-gradient mb-2">15+</div>
                  <div class="text-muted text-sm">Years Experience</div>
                </div>
              </div>
            </div>

            <div class="bg-bg rounded-lg h-64 flex items-center justify-center border border-border">
              <div class="text-center">
                <svg class="w-16 h-16 text-action mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                <p class="text-muted">ECIS Academy Training Facility</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Upcoming Classes -->
    <section class="section bg-bg animate-on-scroll">
      <div class="container">
        <div class="text-center mb-12">
          <h2 class="heading-lg text-text mb-4">Upcoming Classes</h2>
          <p class="text-lg text-muted max-w-2xl mx-auto">Check our current schedule and secure your spot in the next available class.</p>
        </div>

        <div class="max-w-4xl mx-auto space-y-6">
          <!-- Class Schedule Item -->
          <div class="bg-surface rounded-lg p-6 border border-border">
            <div class="flex flex-col md:flex-row md:items-center justify-between">
              <div class="mb-4 md:mb-0">
                <h3 class="font-heading font-semibold text-text mb-1">Class D Training - February 2024</h3>
                <p class="text-muted text-sm">Monday-Friday, 9:00 AM - 6:00 PM</p>
                <p class="text-action text-sm font-semibold mt-1">5 spots remaining</p>
              </div>
              <div class="flex gap-3">
                <span class="bg-accent/20 text-accent px-3 py-1 rounded-full text-sm font-semibold">$299</span>
                <router-link to="/contact" class="btn btn--primary">Reserve Spot</router-link>
              </div>
            </div>
          </div>

          <div class="bg-surface rounded-lg p-6 border border-border">
            <div class="flex flex-col md:flex-row md:items-center justify-between">
              <div class="mb-4 md:mb-0">
                <h3 class="font-heading font-semibold text-text mb-1">Class G Training - March 2024</h3>
                <p class="text-muted text-sm">Weekend intensive: Saturday-Sunday-Monday</p>
                <p class="text-action text-sm font-semibold mt-1">8 spots remaining</p>
              </div>
              <div class="flex gap-3">
                <span class="bg-accent/20 text-accent px-3 py-1 rounded-full text-sm font-semibold">$599</span>
                <router-link to="/contact" class="btn btn--premium">Reserve Spot</router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Benefits & Career Opportunities -->
    <section class="section bg-surface animate-on-scroll">
      <div class="container text-center">
        <h2 class="heading-lg text-text mb-4">Start Your Security Career Today</h2>
        <p class="text-lg text-muted mb-8 max-w-2xl mx-auto">
          Join Florida's growing security industry with professional training, job placement assistance, and career advancement opportunities.
        </p>
        
        <div class="grid md:grid-cols-3 gap-8 mb-12">
          <div class="text-center">
            <div class="text-2xl font-heading font-bold text-action mb-2">$35K-$55K</div>
            <div class="text-muted text-sm">Average Annual Salary</div>
          </div>
          <div class="text-center">
            <div class="text-2xl font-heading font-bold text-action mb-2">Growth</div>
            <div class="text-muted text-sm">Industry Expanding 15% Yearly</div>
          </div>
          <div class="text-center">
            <div class="text-2xl font-heading font-bold text-action mb-2">Benefits</div>
            <div class="text-muted text-sm">Health, Dental, Retirement</div>
          </div>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <router-link to="/contact" class="btn btn--primary">Start Your Application</router-link>
          <a href="tel:+15166408144" class="btn btn--secondary">Speak with Advisor</a>
        </div>
        
        <div class="mt-8 text-sm text-muted">
          <p>Equal Opportunity Training • Financial Aid Available • Flexible Payment Plans</p>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
// Training page functionality
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

/* Training page specific styles */
</style>
