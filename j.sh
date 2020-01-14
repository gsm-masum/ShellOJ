#! /bin/sh
echo "'" | sudo -S -v

cd source
#/usr/bin/time -v bash judge2.sh 2>details.txt
bash judge2.sh
chmod 777 details.txt



#bash db.sh >>error.txt
#echo "'" | sudo -S -v
#sudo chmod 777 error.txt
