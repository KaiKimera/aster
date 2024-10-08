#!/bin/bash -e

_cmd_exists() {
  if ! command -v "${1}" > /dev/null; then
    echo "${0}: '${1}' is not installed, exiting..." 1>&2
    exit 1
  fi
}

asterisk=$( command -v 'asterisk' ); _cmd_exists 'asterisk'
cmd=''

case "${1}" in
  'reload') cmd='reload' ;;
  'restart') cmd='restart now' ;;
  'stop') cmd='stop now' ;;
  *) echo 'Command is not supported!' && exit 1 ;;
esac

${asterisk} -x "core ${cmd}"

exit 0
