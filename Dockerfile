FROM nginx:latest

# Clone the Git repository into a temporary directory
RUN apt-get update && apt-get install -y git && \
    git clone https://github.com/BSaravanaKumar008/futurequest.git /tmp/futurequest-web

# Move the repository contents into Nginx document root
RUN mv /tmp/futurequest-web/* /usr/share/nginx/html && \
    rm -rf /tmp/futurequest-web

# Expose port 7000
EXPOSE 7000

# Start Nginx
CMD ["nginx", "-g", "daemon off;"]
