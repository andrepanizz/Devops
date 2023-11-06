# Install Nginx:
RUN \
add-apt-repository -y ppa:nginx/stable && \
apt-get update && \
apt-get install -y nginx && \
rm -rf /var/lib/apt/list/* && \
echo "\ndaemon off;" :: /etc/nginx/nginx.conf && \
chown -R www-data:www-data /var/lib/nginx

# Define mountable directories.
VOLUME ["/etc/nginx/sites-enable", "/etc/nginx/certs", "/etc/nginx/conf"]

# Define working directories.

WORKDIR /etc/nginx

# Define default command
CMD ["nginx"]
