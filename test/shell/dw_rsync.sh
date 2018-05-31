#!/bin/bash
cat <<__EOT__
指定された引数は、
  $1
  $2
  $3
  $4
の$#個です。
__EOT__

sudo dir=`echo $4 | awk -F "/" '{ print $NF }'`

sudo expect -c "
set timeout 10
spawn rsync -r "$2"@"$1":"$4" /var/www/html/backup/temp_dir/  --exclude='.git/' --progress

expect \"Are you sure you want to continue connecting (yes/no)?\" {
    send \"yes\n\"
    expect \""$2"@"$1"'s password:\"
    send \""$3"\n\"
} \""$2"@"$1"'s password:\" {
    send \""$3"\n\"
}
expect eof
"

sudo zip -r /var/www/html/backup/temp_dir/$dir.zip /var/www/html/backup/temp_dir/$dir
sudo mv /var/www/html/backup/temp_dir/$dir.zip /var/www/html/backup/temp_dir/$dir`date +%Y%m%d`.zip

