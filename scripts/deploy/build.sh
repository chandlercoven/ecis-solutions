#!/bin/bash

# ECIS Solutions Build Script
# This script handles building and deploying the application with Docker

echo "🚀 Starting ECIS Solutions build process..."

# Check if we're in the right directory
if [ ! -f "package.json" ]; then
    echo "❌ Error: package.json not found. Please run this script from the project root."
    exit 1
fi

# Parse command line arguments
FORCE_RECREATE=false
CLEAN_BUILD=false

while [[ $# -gt 0 ]]; do
    case $1 in
        --force)
            FORCE_RECREATE=true
            shift
            ;;
        --clean)
            CLEAN_BUILD=true
            shift
            ;;
        --help)
            echo "Usage: ./build.sh [options]"
            echo "Options:"
            echo "  --force    Force recreate containers"
            echo "  --clean    Clean Docker system before build"
            echo "  --help     Show this help message"
            exit 0
            ;;
        *)
            echo "Unknown option: $1"
            echo "Use --help for usage information"
            exit 1
            ;;
    esac
done

# Clean build if requested
if [ "$CLEAN_BUILD" = true ]; then
    echo "🧹 Cleaning Docker system..."
    docker compose down
    docker system prune -f
fi

# Build the application
echo "📦 Building Vue.js application..."
npm run build

if [ $? -ne 0 ]; then
    echo "❌ Build failed!"
    exit 1
fi

# Stop existing containers
echo "🛑 Stopping existing containers..."
docker compose down

# Start containers with appropriate flags
if [ "$FORCE_RECREATE" = true ]; then
    echo "🔄 Starting containers with force recreate..."
    docker compose up -d --build --force-recreate
else
    echo "🚀 Starting containers..."
    docker compose up -d --build
fi

if [ $? -eq 0 ]; then
    echo "✅ Build and deployment completed successfully!"
    echo "🌐 Application should be available at: http://localhost:3000"
else
    echo "❌ Deployment failed!"
    exit 1
fi
