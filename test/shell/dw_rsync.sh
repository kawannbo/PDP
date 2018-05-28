#!/bin/bash
cat <<__EOT__
指定された引数は、
  $1
  $2
  $3
  $4
  $5
の$#個です。
__EOT__
#!/bin/bash

expect -c "
set timeout 10
spawn rsync -r www@160.16.92.117:/var/www/html /var/www/html/backup/rcs  --exclude='.git/' --progress

expect \"Are you sure you want to continue connecting (yes/no)?\" {
    send \"yes\n\"
    expect \"www@160.16.92.117's password:\"
    send \"dcV98y7u\n\"
} \"www@160.16.92.117's password:\" {
    send \"dcV98y7u\n\"
}


interact
"

zip -r /var/www/html/backup/rcs/rcs.zip /var/www/html/backup/rcs/html
mv /var/www/html/backup/rcs/rcs.zip /var/www/html/backup/rcs/rcs`date +%Y%m%d`.zip


