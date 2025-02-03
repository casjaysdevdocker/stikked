#!/usr/bin/env bash
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
##@Version           :  202408151652-git
# @@Author           :  CasjaysDev
# @@Contact          :  CasjaysDev <docker-admin@casjaysdev.pro>
# @@License          :  MIT
# @@ReadME           :
# @@Copyright        :  Copyright 2023 CasjaysDev
# @@Created          :  Mon Aug 28 06:48:42 PM EDT 2023
# @@File             :  05-custom.sh
# @@Description      :  script to run custom
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# shellcheck shell=bash
# shellcheck disable=SC2016
# shellcheck disable=SC2031
# shellcheck disable=SC2120
# shellcheck disable=SC2155
# shellcheck disable=SC2199
# shellcheck disable=SC2317
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# Set bash options
set -o pipefail
[ "$DEBUGGER" = "on" ] && echo "Enabling debugging" && set -x$DEBUGGER_OPTIONS
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# Set env variables
exitCode=0
WWW_ROOT_DIR="${WWW_ROOT_DIR:-/usr/local/share/httpd/default}"
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# Predifined actions

# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# Main script
[ -d "/etc/stikked" ] || mkdir -p "/etc/stikked"
[ -d "$WWW_ROOT_DIR" ] || mkdir -p "$WWW_ROOT_DIR"
git clone https://github.com/casjaydns/casjay.cc /tmp/stikked
cp -Rf "/tmp/stikked/htdocs/." "$WWW_ROOT_DIR/"
rm -Rf "$WWW_ROOT_DIR/application/config/stikked.php"
symlink "/etc/stikked/config.php" "$WWW_ROOT_DIR/application/config/stikked.php"
rm -Rf "/tmp/stikked"
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
# Set the exit code
exitCode=$?
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
exit $exitCode
