# Nginx Proxy Manager Configuration

## Login Credentials
- **URL**: Nginx Proxy Manager Admin Panel
- **Email**: chandlercoven@gmail.com
- **Password**: Falloncoven2023!@#

## Proxy Host Configuration

### Main Site (ecissolutions.com)
1. **Domain Names**: 
   - `ecissolutions.com`
   - `www.ecissolutions.com`

2. **Details Tab**:
   - **Scheme**: `http`
   - **Forward Hostname / IP**: `ecis-solutions` (Docker container name)
   - **Forward Port**: `80` (internal nginx port)
   - **Cache Assets**: OFF (Vue.js handles caching)
   - **Block Common Exploits**: ✓
   - **Websockets Support**: ✓

3. **Custom Locations** (if needed):
   - **Location**: `/api-submissions.php`
   - **Scheme**: `http`
   - **Forward Hostname / IP**: `ecis-nginx-api`
   - **Forward Port**: `80`

4. **SSL Tab**:
   - **SSL Certificate**: Let's Encrypt
   - **Force SSL**: ✓
   - **HSTS Enabled**: ✓
   - **HSTS Subdomains**: ✓
   - **HTTP/2 Support**: ✓

5. **Advanced Tab** (Custom Nginx Configuration):
```nginx
# Handle client-side routing for Vue.js
location / {
    proxy_pass http://ecis-solutions:80;
    proxy_set_header Host $host;
    proxy_set_header X-Real-IP $remote_addr;
    proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
    proxy_set_header X-Forwarded-Proto $scheme;
    
    # Important for Vue.js SPA routing
    try_files $uri $uri/ /index.html;
}

# API endpoint
location /api-submissions.php {
    proxy_pass http://ecis-nginx-api:80/api-submissions.php;
    proxy_set_header Host $host;
    proxy_set_header X-Real-IP $remote_addr;
    proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
    proxy_set_header X-Forwarded-Proto $scheme;
}

# Contact form handler
location /contact-form-working.php {
    proxy_pass http://ecis-nginx-api:80/contact-form-working.php;
    proxy_set_header Host $host;
    proxy_set_header X-Real-IP $remote_addr;
    proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
    proxy_set_header X-Forwarded-Proto $scheme;
}
```

## Docker Container Names (Already Connected to proxy-network)
- **Main App**: `ecis-solutions` (port 80 internal)
- **API Service**: `ecis-nginx-api` (port 80 internal)
- **PHP Processor**: `ecis-api` (port 9000 internal)

## Verify Configuration
After setting up in Nginx Proxy Manager:
1. Visit https://www.ecissolutions.com - Should show the main site
2. Visit https://www.ecissolutions.com/login - Should show the login page
3. Login with team credentials - Should redirect to /submissions
4. Submissions page should show with proper styling and functionality

## Troubleshooting
If the site doesn't load properly:
1. Check that all containers are running: `docker ps | grep ecis`
2. Verify containers are on proxy-network: `docker inspect ecis-solutions | grep proxy-network`
3. Clear browser cache and cookies
4. Check Nginx Proxy Manager logs for errors
