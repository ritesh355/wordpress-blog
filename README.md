# Dockerized WordPress Blog (Day 30 of 100 Days of DevOps)

A Docker Compose project deploying a WordPress blog with MySQL and Nginx.

## Setup
- **Directory**: `~/wordpress-blog`
- **Services**: WordPress, MySQL, Nginx
- **Files**:
  - `docker-compose.yml`: Defines services, volumes, and network.
  - `nginx/default.conf`: Nginx proxy configuration.
  - `themes/custom-theme/`: Custom WordPress theme.

## Steps
1. Clone: `git clone https://github.com/ritesh355/wordpress-blog`
2. Run: `docker-compose up -d`
3. Access: `http://localhost`
4. Setup WordPress via browser.
5. Create test post: "My First DevOps Post".
6. Test connectivity: `docker-compose exec wordpress bash`, then `mysql -h mysql -u wordpress_user -pwordpress_password -D wordpress -e "SELECT * FROM wp_posts;"`.
7. Test persistence: `docker-compose down && docker-compose up -d`.
8. Add custom theme: `themes/custom-theme`.

## Fixes
- Resolved 502 error with `proxy_pass http://wordpress:80`.
- Fixed `bash4`, `mysql: command not found`, and `No database selected` errors.
- Corrected theme directory creation with `mkdir -p`.

## Next Steps
- Add HTTPS.
- Deploy to cloud (e.g., AWS).
