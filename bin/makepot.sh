#!/usr/bin/env bash

docker run \
  --user root \
  --rm \
  --volume  "$(pwd):/var/www/html/jaxon" \
  wordpress:cli bash -c 'php -d memory_limit=1024M "$(which wp)" i18n make-pot ./jaxon/ ./jaxon/languages/jaxon.pot --headers={\"Last-Translator\":\"friends@themeisle.com\"\,\"Project-Id-Version\":\"Raft\"\,\"Report-Msgid-Bugs-To\":\"https://github.com/Codeinwp/jaxon/issues\"\} --allow-root --exclude=dist,build,bundle,e2e-tests '