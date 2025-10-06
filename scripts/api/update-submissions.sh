#!/bin/bash
# Script to update submissions.json from Docker API service

# Fetch data from Docker API service
curl -H "Authorization: Bearer ecis-team-2024" http://localhost:8081/api-submissions.php > /var/www/ecis-solutions/submissions.json

# Set proper permissions
chmod 644 /var/www/ecis-solutions/submissions.json

echo "Submissions updated at $(date)"
