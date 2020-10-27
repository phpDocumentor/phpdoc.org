FROM nginx:1.17

ARG VERSION="latest"

COPY web /usr/share/nginx/html
COPY web /usr/share/nginx/html/$VERSION
COPY nginx.conf /etc/nginx/conf.d/default.conf

RUN ln -sf /dev/stdout /var/log/nginx/access.log \
 && ln -sf /dev/stderr /var/log/nginx/error.log \
