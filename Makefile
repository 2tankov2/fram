static:
		php -S localhost:3000
dynamic:
		php -S localhost:3000 index.php
install:
		composer install
lint:
		composer run-script phpcs -- --standard=PSR12