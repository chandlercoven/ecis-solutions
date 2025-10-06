# ECIS Solutions - Docker Port Configuration

## Port Mappings

### Current Services
| Service | Container Name | Internal Port | External Port | Purpose |
|---------|---------------|---------------|---------------|---------|
| Vue Frontend | ecis-solutions | 80 | 3000 | Main website |
| Laravel Backend | ecis-backend | 80 | 8100 | API server |
| MySQL Database | ecis-mysql | 3306 | 3306 | Database |
| phpMyAdmin | ecis-phpmyadmin | 80 | 8200 | Database management |

### Nginx Proxy Manager Integration
| Service | Domain | Proxy To | Notes |
|---------|--------|----------|-------|
| Frontend | ecissolutions.com | http://ecis-solutions:80 | Use container name internally |
| API | api.ecissolutions.com | http://ecis-backend:80 | Use container name internally |

## Important Networking Notes

### Container-to-Container Communication
- Containers on the same Docker network can communicate using container names
- Example: Laravel can connect to MySQL using `ecis-mysql:3306`

### Browser-to-Container Communication
- **Browsers CANNOT resolve Docker container names**
- Must use `localhost:PORT` for local development
- Must use actual domain names for production

### CORS Configuration
The Laravel backend is configured to accept requests from:
- `http://localhost:3000` (Vue in Docker)
- `http://localhost:5173` (Vue in dev mode)
- `https://ecissolutions.com` (Production)

### Environment Variables
```bash
# For Vue Frontend (in docker-compose.yml)
VITE_API_URL=http://localhost:8100/api  # Browser needs localhost, not container name!

# For Laravel Backend (in docker-compose.yml)
DB_HOST=ecis-mysql        # Container-to-container, so container name works
DB_DATABASE=ecis_solutions
DB_USERNAME=ecis_user
DB_PASSWORD=securepassword123
```

## Production Setup with Nginx Proxy Manager

1. **Frontend Proxy Host:**
   - Domain: `ecissolutions.com`
   - Scheme: `http`
   - Forward Hostname/IP: `ecis-solutions` (container name)
   - Forward Port: `80`
   - Enable SSL with Let's Encrypt

2. **API Proxy Host:**
   - Domain: `api.ecissolutions.com`
   - Scheme: `http`
   - Forward Hostname/IP: `ecis-backend` (container name)
   - Forward Port: `80`
   - Enable SSL with Let's Encrypt
   - Custom Nginx Configuration:
   ```nginx
   # Add CORS headers for API
   add_header 'Access-Control-Allow-Origin' 'https://ecissolutions.com' always;
   add_header 'Access-Control-Allow-Methods' 'GET, POST, PUT, DELETE, OPTIONS' always;
   add_header 'Access-Control-Allow-Headers' 'Accept,Authorization,Cache-Control,Content-Type,DNT,If-Modified-Since,Keep-Alive,Origin,User-Agent,X-Requested-With' always;
   ```

## Avoiding Port Conflicts

Before starting services, check for port conflicts:
```bash
# Check what's using a port
sudo lsof -i :8100
sudo netstat -tulpn | grep :8100

# View all Docker containers and their ports
docker ps --format "table {{.Names}}\t{{.Ports}}"
```

## Testing Connectivity

### From Browser:
```javascript
// Test API from browser console
fetch('http://localhost:8100/api/health')
  .then(r => r.text())
  .then(console.log)
```

### From Container:
```bash
# Test from Vue container to Laravel container
docker exec ecis-solutions curl http://ecis-backend/api/health

# Test from Laravel to MySQL
docker exec ecis-backend php artisan db:show
```
