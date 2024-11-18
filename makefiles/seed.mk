seed: # Run php artisan migrate
	@docker compose run --rm artisan db:seed
