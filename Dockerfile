FROM node:lts as builder

COPY . /data
WORKDIR /data

RUN cd /data \
  && npm i -g gatsby-cli \
  && npm ci \
  && gatsby build

FROM nginx:1.17

COPY --from=builder /data/public /usr/share/nginx/html
