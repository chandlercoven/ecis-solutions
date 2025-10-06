# ECIS Solutions - Professional Security Services

A modern Vue.js application for ECIS Solutions, providing comprehensive security services including 24/7 patrol coverage, CCTV monitoring, and emergency response.

## 🚀 Quick Start

### Development
```bash
npm install
npm run dev
```

### Production Build
```bash
npm run build
```

### Docker Deployment
```bash
docker compose up -d --build
```

## 📁 Project Structure

```
├── src/                    # Vue.js source code
│   ├── components/         # Reusable UI components
│   ├── views/             # Page components
│   ├── stores/            # Pinia state management
│   ├── router/            # Vue Router configuration
│   └── assets/            # Static assets
├── docs/                  # Documentation
├── scripts/               # Utility scripts
│   ├── api/               # API-related scripts
│   ├── build/             # Build scripts
│   ├── deploy/            # Deployment scripts
│   ├── email/             # Email configuration
│   └── test/              # Testing scripts
├── public/                # Static public files
└── dist/                  # Built application
```

## 🔧 Key Features

- **Contact Form Submissions**: Real-time submission tracking with read/unread status
- **Team Portal**: Secure login for Chandler, Michael, and Joey
- **Responsive Design**: Mobile-first approach with Tailwind CSS
- **Performance Optimized**: Image preloading and caching strategies

## 📋 Team Portal Access

- **Chandler**: chandler@ecissolutions.com
- **Michael**: michael@ecissolutions.com  
- **Joey**: joey@ecissolutions.com
- **Password**: ecis2024

## 🛠️ Development

### Submissions System
The submissions system automatically tracks contact form submissions with:
- Read/unread status tracking
- User activity logging
- Auto-refresh every 30 seconds
- Email reply integration

### Updating Submissions
```bash
# Convert log file to JSON
node scripts/api/update-submissions-system.js

# Rebuild and deploy
npm run build
```

## 🚀 Deployment

### Production Deployment
```bash
# Build the application
npm run build

# Copy to production
cp -r dist/* /var/www/ecis-solutions/

# Update submissions data
node scripts/api/update-submissions-system.js
```

## 📞 Contact

- **Phone**: (516) 640-8144
- **Email**: info@ecissolutions.com
- **Website**: https://ecissolutions.com

---

**ECIS Solutions** - We safeguard what matters most—your people, your property, your peace of mind.