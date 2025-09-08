/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        // Primary colors - trust and security
        'navy': {
          DEFAULT: '#1e3a5f',
          dark: '#0f1f33',
          light: '#2d4f7c',
          800: '#1e293b',
          900: '#0f172a',
        },
        'charcoal': {
          DEFAULT: '#2b2d42',
          dark: '#1a1b2e',
          light: '#3d3f57'
        },
        // Secondary colors - professional
        'silver': {
          DEFAULT: '#b8c5d6',
          metallic: '#c0c0c0',
          light: '#e5e9ef',
          400: '#94a3b8',
          500: '#64748b',
        },
        'cool-gray': {
          DEFAULT: '#8d99ae',
          light: '#adb5bd',
          dark: '#6c757d'
        },
        // Accent colors
        'electric-blue': {
          DEFAULT: '#0077ff',
          hover: '#0066dd',
          light: '#4da3ff'
        },
        'law-enforcement-gold': {
          DEFAULT: '#d4af37',
          hover: '#b8941f',
          light: '#e6c547',
          dark: '#b8941f'
        },
        'alert-orange': '#ff6b35',
        'urgent-red': '#d62828'
      },
      fontFamily: {
        'heading': ['Montserrat', 'Oswald', 'sans-serif'],
        'body': ['Inter', 'Open Sans', 'sans-serif']
      },
      spacing: {
        '18': '4.5rem',
        '88': '22rem',
        '128': '32rem',
        '144': '36rem'
      },
      animation: {
        'fade-in': 'fadeIn 0.8s ease-in-out',
        'fade-in-up': 'fadeInUp 0.8s ease-out',
        'slide-up': 'slideUp 0.6s ease-out',
        'glow': 'glow 2s ease-in-out infinite',
        'float': 'float 6s ease-in-out infinite',
        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite'
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' }
        },
        fadeInUp: {
          '0%': { opacity: '0', transform: 'translateY(30px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' }
        },
        slideUp: {
          '0%': { transform: 'translateY(20px)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' }
        },
        glow: {
          '0%, 100%': { boxShadow: '0 0 20px rgba(0, 119, 255, 0.5)' },
          '50%': { boxShadow: '0 0 30px rgba(0, 119, 255, 0.8)' }
        },
        float: {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-10px)' }
        }
      },
      boxShadow: {
        'card': '0 4px 20px rgba(0, 0, 0, 0.08)',
        'card-hover': '0 8px 30px rgba(0, 0, 0, 0.12)',
        'glow': '0 0 30px rgba(0, 119, 255, 0.3)',
        'glow-strong': '0 0 40px rgba(0, 119, 255, 0.5)'
      },
      backgroundImage: {
        'gradient-primary': 'linear-gradient(135deg, #1e3a5f 0%, #2d4f7c 100%)',
        'gradient-cta': 'linear-gradient(135deg, #0077ff 0%, #4da3ff 100%)',
        'gradient-gold': 'linear-gradient(135deg, #d4af37 0%, #e6c547 100%)',
        'gradient-dark': 'linear-gradient(180deg, rgba(30,58,95,0.95) 0%, rgba(43,45,66,0.95) 100%)',
        'gradient-overlay': 'linear-gradient(180deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%)'
      },
      transitionTimingFunction: {
        'smooth': 'cubic-bezier(0.4, 0, 0.2, 1)',
      },
      backdropBlur: {
        xs: '2px',
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
