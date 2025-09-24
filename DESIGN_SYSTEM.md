# ECIS Design System Documentation

## Overview

The ECIS Design System is a comprehensive, organized approach to styling that combines **Design Tokens**, **Component Classes**, and **Utility Classes** with Tailwind CSS integration. This system ensures consistency, maintainability, and scalability across the entire application.

## Architecture

### 1. Design Tokens (`src/assets/css/tokens.css`)
**Single source of truth** for all design decisions:
- Colors (semantic naming)
- Typography (fluid scales)
- Spacing (4px base unit)
- Shadows, borders, motion
- Z-index scales
- Breakpoints

### 2. Component Classes (`src/assets/css/components.css`)
**Reusable component styles** following design system principles:
- Buttons (multiple variants and sizes)
- Cards (elevated, flat, service cards)
- Form elements (inputs, labels, validation)
- Typography components
- Navigation elements
- Badges and alerts

### 3. Utility Classes (`src/assets/css/utilities.css`)
**Single-purpose utilities** for common patterns:
- Layout utilities
- Animation utilities
- Focus management
- Accessibility helpers
- Responsive utilities

## Key Principles

### 1. **Design Token System**
All styling decisions flow from design tokens (CSS custom properties):
```css
/* ✅ Good - Uses design tokens */
.btn--primary {
  background: var(--action);
  color: var(--white);
  padding: var(--space-3) var(--space-6);
}

/* ❌ Avoid - Hardcoded values */
.btn--primary {
  background: #0077ff;
  color: #ffffff;
  padding: 12px 24px;
}
```

### 2. **Semantic Naming**
Use meaningful names that describe purpose, not appearance:
```css
/* ✅ Good - Semantic */
--action: #0077ff;
--text-muted: #b7c6da;
--surface-2: #1c3251;

/* ❌ Avoid - Appearance-based */
--blue: #0077ff;
--light-gray: #b7c6da;
--dark-blue: #1c3251;
```

### 3. **Consistent Spacing**
Use only multiples of 4px (our base unit):
```css
/* ✅ Good - 4px multiples */
padding: var(--space-4);  /* 16px */
margin: var(--space-6); /* 24px */

/* ❌ Avoid - Arbitrary values */
padding: 15px;
margin: 23px;
```

### 4. **Component-First Approach**
Build reusable components, not one-off styles:
```vue
<!-- ✅ Good - Uses component classes -->
<button class="btn btn--primary btn--lg">Get Started</button>

<!-- ❌ Avoid - Inline styles -->
<button style="background: #0077ff; padding: 16px 32px;">Get Started</button>
```

## Usage Guidelines

### Color System
```css
/* Primary Actions */
.btn--primary { background: var(--action); }

/* Secondary Actions */
.btn--secondary { border-color: var(--action); }

/* Premium Elements (≤10% usage) */
.badge--accent { background: var(--accent); }

/* Status Colors */
.alert--success { border-color: var(--success); }
.alert--warning { border-color: var(--warning); }
.alert--danger { border-color: var(--danger); }
```

### Typography Scale
```css
/* Headlines */
.heading-xl { font-size: var(--text-5xl); } /* 48-64px */
.heading-lg { font-size: var(--text-4xl); } /* 36-48px */
.heading-md { font-size: var(--text-3xl); } /* 30-40px */

/* Body Text */
.text-body { font-size: var(--text-base); } /* 16-18px */
.text-body-lg { font-size: var(--text-lg); } /* 18-20px */
```

### Component Variants
```vue
<!-- Button Variants -->
<button class="btn btn--primary">Primary Action</button>
<button class="btn btn--secondary">Secondary Action</button>
<button class="btn btn--ghost">Text Only</button>
<button class="btn btn--premium">Premium Service</button>

<!-- Button Sizes -->
<button class="btn btn--sm">Small</button>
<button class="btn btn--lg">Large</button>
<button class="btn btn--xl">Extra Large</button>

<!-- Card Types -->
<div class="card">Standard Card</div>
<div class="card card--elevated">Elevated Card</div>
<div class="card card--flat">Flat Card</div>
<div class="service-card">Service Card</div>
```

### Utility Classes
```vue
<!-- Layout -->
<div class="container">Max-width container</div>
<div class="section">Standard section padding</div>

<!-- Spacing -->
<div class="space-y-4">Vertical spacing</div>
<div class="space-x-2">Horizontal spacing</div>

<!-- Focus Management -->
<button class="focus-ring-keyboard">Keyboard focus only</button>

<!-- Animations -->
<div class="animate-on-scroll">Scroll-triggered animation</div>
<div class="animate-fade-in">Fade in animation</div>
```

## Tailwind Integration

The design system integrates seamlessly with Tailwind CSS:

```vue
<!-- Use Tailwind classes with design tokens -->
<div class="bg-surface text-text p-6 rounded-lg shadow-md">
  <h2 class="font-heading text-2xl font-bold text-action">
    Design System Integration
  </h2>
  <p class="text-muted">
    This uses our design tokens through Tailwind classes.
  </p>
</div>
```

## File Organization

```
src/assets/
├── main.css                 # Main entry point
└── css/
    ├── tokens.css          # Design tokens
    ├── components.css       # Component classes
    └── utilities.css       # Utility classes
```

## Best Practices

### 1. **Always Use Design Tokens**
```css
/* ✅ Good */
color: var(--text);
background: var(--surface);
padding: var(--space-4);

/* ❌ Avoid */
color: #eef3fb;
background: #162840;
padding: 16px;
```

### 2. **Component Composition**
```vue
<!-- ✅ Good - Composable components -->
<button class="btn btn--primary btn--lg">
  <Icon name="shield" />
  Get Security Assessment
</button>

<!-- ❌ Avoid - Monolithic classes -->
<button class="primary-large-button-with-icon">
  Get Security Assessment
</button>
```

### 3. **Responsive Design**
```css
/* ✅ Good - Mobile-first with design tokens */
.btn {
  padding: var(--space-3) var(--space-6);
}

@media (min-width: 640px) {
  .btn {
    padding: var(--space-4) var(--space-8);
  }
}
```

### 4. **Accessibility First**
```css
/* ✅ Good - Accessible focus states */
.btn:focus-visible {
  outline: 2px solid var(--focus);
  outline-offset: 2px;
}

/* ✅ Good - Respect user preferences */
@media (prefers-reduced-motion: reduce) {
  * {
    animation-duration: 0.01ms !important;
  }
}
```

## Maintenance

### Adding New Tokens
1. Add to `tokens.css` with semantic naming
2. Update `tailwind.config.js` if needed
3. Document usage in this file

### Creating New Components
1. Add to `components.css` following existing patterns
2. Use design tokens for all values
3. Include responsive variants
4. Add accessibility features
5. Document in this file

### Performance Considerations
- Design tokens are CSS custom properties (fast)
- Component classes are optimized for reuse
- Utility classes are single-purpose (efficient)
- Reduced motion support built-in
- Mobile-first responsive design

## Migration Guide

If you have existing styles that don't follow this system:

1. **Identify hardcoded values** and replace with design tokens
2. **Extract reusable patterns** into component classes
3. **Use utility classes** for one-off styling needs
4. **Test across breakpoints** and accessibility requirements
5. **Update Tailwind classes** to use design tokens

## Resources

- [Design Tokens W3C Specification](https://design-tokens.github.io/community-group/format/)
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [WCAG 2.1 Guidelines](https://www.w3.org/WAI/WCAG21/quickref/)
- [CSS Custom Properties MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties)
