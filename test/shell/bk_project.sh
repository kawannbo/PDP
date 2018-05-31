#!/bin/bash

cat <<__EOT__
指定された引数は、
  $1
  $2
  $3
  $4
の$#個です。
__EOT__

echo "00 00 * * 0 root ./home/kawano/backupProg/sup_bk.sh yagiswa.sakura.ne.jp "$1" "$2" "$3" "$4" " >> /etc/crontab;


