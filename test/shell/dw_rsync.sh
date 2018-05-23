#!/bin/bash

ls

cat <<__EOT__
指定された引数は、
  $1
  $2
  $3
  $4
  $5
の$#個です。
__EOT__

rsync -r -e 'ssh -p '$4 ~/Desktop/studio_kitchen $2@$1:/var/www/html/studio_kitchen --progress