# Build the container
build: ## Build the container
	docker-compose build php-cli

# Start interactive container
run:
	docker-compose run --rm php-cli bash
