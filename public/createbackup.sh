rm -rf backup.tar.gz backup.sql
tar --exclude='./cache' -czvf backup.tar.gz ./
