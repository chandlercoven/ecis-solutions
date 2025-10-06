<template>
  <div class="min-h-screen bg-bg flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
      <!-- Header -->
      <div class="text-center">
        <div class="mx-auto h-16 w-16 bg-action/10 rounded-full flex items-center justify-center mb-6">
          <svg class="h-8 w-8 text-action" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.031 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
        </div>
        <h2 class="text-3xl font-heading font-bold text-text">
          ECIS Team Portal
        </h2>
        <p class="mt-2 text-sm text-text-muted">
          Sign in to access the internal management system
        </p>
      </div>

      <!-- Login Form -->
      <div class="bg-surface rounded-xl shadow-lg p-8 border border-border">
        <form @submit.prevent="handleLogin" class="space-y-6">
          <!-- Email Field -->
          <div>
            <label for="email" class="block text-sm font-medium text-text mb-2">
              Email Address
            </label>
            <input
              id="email"
              v-model="form.email"
              type="email"
              required
              class="w-full bg-surface-2 border border-border rounded-md px-3 py-3 text-text
                     focus:border-action focus:ring-2 focus:ring-focus 
                     disabled:opacity-50"
              placeholder="your.email@ecissolutions.com"
              :disabled="isLoading"
            />
          </div>

          <!-- Password Field -->
          <div>
            <label for="password" class="block text-sm font-medium text-text mb-2">
              Password
            </label>
            <div class="relative">
              <input
                id="password"
                v-model="form.password"
                :type="showPassword ? 'text' : 'password'"
                required
                class="w-full bg-surface-2 border border-border rounded-md px-3 py-3 pr-10 text-text
                       focus:border-action focus:ring-2 focus:ring-focus 
                       disabled:opacity-50"
                placeholder="Enter your password"
                :disabled="isLoading"
              />
              <button
                type="button"
                @click="showPassword = !showPassword"
                class="absolute inset-y-0 right-0 pr-3 flex items-center"
                :disabled="isLoading"
              >
                <svg v-if="showPassword" class="h-5 w-5 text-text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21" />
                </svg>
                <svg v-else class="h-5 w-5 text-text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
              </button>
            </div>
          </div>

          <!-- Remember Me -->
          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <input
                id="remember-me"
                v-model="form.rememberMe"
                type="checkbox"
                class="h-4 w-4 text-action focus:ring-focus border-border rounded"
                :disabled="isLoading"
              />
              <label for="remember-me" class="ml-2 block text-sm text-text-muted">
                Remember me
              </label>
            </div>
            <div class="text-sm">
              <a href="#" class="font-medium text-action hover:text-action-hover">
                Forgot password?
              </a>
            </div>
          </div>

          <!-- Error Message -->
          <div v-if="error" class="bg-danger/10 border border-danger/20 rounded-md p-4">
            <div class="flex">
              <svg class="h-5 w-5 text-danger" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
              </svg>
              <div class="ml-3">
                <h3 class="text-sm font-medium text-danger">
                  Login Failed
                </h3>
                <div class="mt-2 text-sm text-danger">
                  {{ error }}
                </div>
              </div>
            </div>
          </div>

          <!-- Submit Button -->
          <button
            type="submit"
            :disabled="isLoading || !form.email || !form.password"
            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-action hover:bg-action-hover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-focus disabled:opacity-50 disabled:cursor-not-allowed"
          >
            <svg v-if="isLoading" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            {{ isLoading ? 'Signing in...' : 'Sign in' }}
          </button>
        </form>


      </div>

      <!-- Footer -->
      <div class="text-center">
        <p class="text-xs text-text-muted">
          © 2024 ECIS Solutions. All rights reserved.
        </p>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive, computed } from 'vue'
import { useRouter } from 'vue-router'
import { useAuthStore } from '@/stores/auth'

const router = useRouter()
const authStore = useAuthStore()

// Form state
const form = reactive({
  email: '',
  password: '',
  rememberMe: false
})

// UI state
const showPassword = ref(false)
const error = ref('')
const isLoading = computed(() => authStore.isLoading)

// Handle login
const handleLogin = async () => {
  console.log('🔐 Login.vue: Login form submitted', { email: form.email })
  error.value = ''
  
  try {
    const result = await authStore.login(form.email, form.password)
    
    console.log('🔐 Login.vue: Login result received', result)
    
    if (result.success) {
      console.log('✅ Login.vue: Login successful, redirecting to:', result.redirectTo || '/dashboard')
      // Redirect to dashboard (or use redirectTo if provided)
      router.push(result.redirectTo || '/dashboard')
    } else {
      console.log('❌ Login.vue: Login failed', result.error)
      error.value = result.error || 'Login failed. Please try again.'
    }
  } catch (err) {
    console.error('❌ Login.vue: Login error occurred', err)
    error.value = 'An unexpected error occurred. Please try again.'
  }
}


</script>

<style scoped>
/* Custom focus styles */
input:focus {
  outline: none;
  border-color: var(--action);
  box-shadow: 0 0 0 2px var(--focus);
}

/* Button hover effects */
button:not(:disabled):hover {
  transform: translateY(-1px);
  box-shadow: 0 4px 12px rgba(0, 119, 255, 0.3);
}

/* Loading animation */
@keyframes spin {
  to {
    transform: rotate(360deg);
  }
}

.animate-spin {
  animation: spin 1s linear infinite;
}
</style>
