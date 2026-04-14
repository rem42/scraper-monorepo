DOCKER_COMP = docker compose
PHP_CONT = $(DOCKER_COMP) exec php
COMPOSER = $(PHP_CONT) composer

.DEFAULT_GOAL := help

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

start: up
stop: down

## --- DOCKER ---
build: ## Construit les images Docker
	$(DOCKER_COMP) build

up: ## Démarre les containers
	$(DOCKER_COMP) up -d

down: ## Arrête les containers
	$(DOCKER_COMP) down

shell: ## Entre dans le container PHP
	$(PHP_CONT) sh

## --- COMPOSER & MONOREPO ---
install: ## Installe toutes les dépendances
	$(COMPOSER) install

merge: ## Fusionne les composer.json des packages vers la racine
	$(PHP_CONT) vendor/bin/monorepo-builder merge

propagate: ## Propage les versions de la racine vers les packages
	$(PHP_CONT) vendor/bin/monorepo-builder propagate

## --- TESTS ---
test: ## Lance tous les tests de tous les packages
	$(PHP_CONT) vendor/bin/phpunit --colors=always

cs-fix: ## Lance PHP-CS-Fixer sur tous les packages
	$(PHP_CONT) vendor/bin/php-cs-fixer fix

## --- GIT SUBTREE (Gestion des scrapers) ---
# Usage: make add-scraper name=scraper-allocine url=https://github.com/rem42/scraper-allocine.git
add-scraper: ## Ajoute un nouveau scraper via git subtree (name=... url=...)
	git remote add origin-$(name) $(url)
	git fetch origin-$(name)
	git subtree add --prefix=packages/$(name) origin-$(name) main --squash

split-dry: ## Simule le split pour voir ce qui serait envoyé
	$(PHP_CONT) vendor/bin/monorepo-builder split-packages --dry-run
