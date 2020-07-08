FROM node:lts as builder

ARG NODE_AUTH_TOKEN
COPY . /data
WORKDIR /data

RUN cd /data \
  && npm i -g gatsby-cli
RUN npm i
RUN gatsby build

FROM nginx:1.17

COPY --from=builder /data/public /usr/share/nginx/html
