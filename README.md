CORRER:
docker-compose up -d
docker-compose exec db mysql -uroot -padmin
docker run --rm -w /app -v "$(pwd):/app" node:12-alpine sh -c "npm install && npm build" 