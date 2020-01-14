#! /bin/sh
echo "'" | sudo -S -v
sudo g++ solution.cpp
sudo chmod 777 a.out
sudo bash judge.sh
