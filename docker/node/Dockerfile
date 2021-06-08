FROM node:14-alpine AS BUILD_IMAGE

# couchbase sdk requirements
RUN apk update && apk add python make g++ && rm -rf /var/cache/apk/*

WORKDIR /app

COPY package.json yarn.lock ./

# install dependencies
RUN yarn --frozen-lockfile

COPY . .

# lint & test
RUN yarn lint & yarn test

# build application
RUN yarn build

# remove development dependencies
RUN npm prune --production

FROM node:14-alpine

WORKDIR /app

# copy from build image
COPY --from=BUILD_IMAGE /usr/src/app/dist ./dist
COPY --from=BUILD_IMAGE /usr/src/app/node_modules ./node_modules

EXPOSE 3030
