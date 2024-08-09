FROM bitnami/wordpress:6

COPY Prometheus-Metrics-in-WordPress /opt/bitnami/wordpress/wp-content/plugins/Prometheus-Metrics-in-WordPress 

WORKDIR /opt/bitnami/wordpress/wp-content/plugins/Prometheus-Metrics-in-WordPress 

USER 0
RUN composer update -o
RUN chown -R daemon /opt/bitnami/wordpress/wp-content/plugins/Prometheus-Metrics-in-WordPress
# USER 1001


