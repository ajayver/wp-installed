#!/usr/bin/env bash
set -Eeuo pipefail

echo >&2 "Checking if WordPress is installed..."

if ! wp core is-installed; then
    echo >&2 "WordPress is not installed. Installing..."
    wp core install --url=localhost:8889 --title="Uncanny Automator E2E Container" --admin_user=admin --admin_password=password --admin_email=dev@uncannyowl.com --allow-root
    wp rewrite structure '/%postname%'
fi

echo >&2 "WordPress is installed."

exec "$@"