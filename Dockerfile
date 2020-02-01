FROM node as builder

COPY . /data
WORKDIR /data

RUN cd /data \
  && npm i -g gatsby-cli \
  && npm i \
  && gatsby build

FROM nginx:1.17

COPY --from=builder /data/public /usr/share/nginx/html
