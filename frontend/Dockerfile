FROM node:lts-alpine as front

RUN npm install -g @vue/cli
RUN mkdir /app
WORKDIR /app
COPY . /app
RUN npn install
EXPOSE 8080
CMD ["npm", "run", "dev"]