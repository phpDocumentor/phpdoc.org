FROM node:lts as builder

ARG NODE_AUTH_TOKEN
ARG VERSION="latest"

COPY . /data
WORKDIR /data

RUN cd /data \
  && npm i -g gatsby-cli
RUN npm i
RUN npm run build

FROM nginx:1.17

ARG VERSION="latest"

COPY --from=builder /data/public /usr/share/nginx/html/$VERSION
COPY --from=builder /data/public/404.html /usr/share/nginx/html/404.html
COPY nginx.conf /etc/nginx/conf.d/default.conf

RUN ln -sf /dev/stdout /var/log/nginx/access.log \
 && ln -sf /dev/stderr /var/log/nginx/error.log \
