#!/bin/bash

# Run Laravel migrations
php artisan migrate --seed

# Start Apache in the foreground
apache2-foreground