/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        // Semantic colors using CSS variables
        bg: "var(--bg)",
        surface: "var(--surface)", 
        surface2: "var(--surface-2)",
        text: "var(--text)", 
        muted: "var(--text-muted)", 
        border: "var(--border)",
        action: "var(--action)", 
        actionHover: "var(--action-hover)", 
        accent: "var(--accent)", 
        focus: "var(--focus)",
        success: "var(--success)",
        warning: "var(--warning)",
        danger: "var(--danger)",
        white: "var(--white)",
        black: "var(--black)",
      },
      fontFamily: {
        heading: "var(--font-heading)",
        body: "var(--font-body)"
      },
      borderRadius: {
        sm: "var(--radius-sm)",
        md: "var(--radius-md)", 
        lg: "var(--radius-lg)", 
        xl: "var(--radius-xl)", 
        "2xl": "var(--radius-2xl)"
      },
      boxShadow: {
        sm: "var(--shadow-sm)",
        md: "var(--shadow-md)", 
        lg: "var(--shadow-lg)"
      },
      transitionDuration: {
        fast: "var(--duration-fast)",
        base: "var(--duration-base)", 
        slow: "var(--duration-slow)"
      },
      transitionTimingFunction: {
        standard: "var(--easing-standard)",
        entrance: "var(--easing-entrance)",
        exit: "var(--easing-exit)"
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
