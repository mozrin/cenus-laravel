seed!: # Run php artisan db:wipe, migrate, and then db:seed
	@docker compose run --rm artisan db:wipe
	@docker compose run --rm artisan migrate
	@docker compose run --rm artisan db:seed
