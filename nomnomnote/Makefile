# Makefile for Laravel project

# Variables
APP_CONTAINER = nomnomnote_app
DB_CONTAINER = mysql

# Commands
.PHONY: help install up down test lint artisan fresh migrate seed

help:
	@echo "Usage:"
	@echo "  make install        Install dependencies"
	@echo "  make up             Start the containers"
	@echo "  make down           Stop the containers"
	@echo "  make rebuild        Rebuild the container and start them"
	@echo "  make artisan        Run an Artisan command (e.g., make artisan migrate)"
	@echo "  make test           Run the test suite"
	@echo "  make fresh          Drop and recreate the database"
	@echo "  make migrate        Run database migrations"
	@echo "  make seed           Seed the database"
	@echo "  make lint           Run PHP linter"
	@echo "  make bash           Go inside the app container"


install:
	composer install
	npm install

up:
	docker-compose up -d

down:
	docker-compose down

rebuild:
	docker compose up -d --build

artisan:
	docker-compose exec $(APP_CONTAINER) php artisan $(filter-out $@,$(MAKECMDGOALS))

migrate:
	make artisan migrate

seed:
	make artisan db:seed

fresh:
	make artisan migrate:fresh --seed

test:
	docker-compose exec $(APP_CONTAINER) php artisan test

lint:
	docker-compose exec $(APP_CONTAINER) ./vendor/bin/pint

bash:
	docker exec -it $(APP_CONTAINER) bash
