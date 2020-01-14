#! /bin/sh
echo "'" | sudo -S -v

INP=test/input
OUTP=test/output

J=0
m=0

#FC=$(cd $INP/ && ls -1 | wc -l)

g++ solution.cpp

if [ ! -f a.out ]
then
	printf 'Compilation Error\n0\n0'>verdict.txt
	exit
	
fi

chmod 777 a.out

echo "'" | sudo -S -v
chmod 777 log.txt

>details.txt
>log.txt
>tim.txt

for i in $INP/*.txt
do

dos2unix -q  $OUTP/output0$J.txt

echo "'" | sudo -S -v
sudo touch timelimit.txt
chmod 777 timelimit.txt

>timelimit.txt
echo "1" >timelimit.txt


ts=$(date +%s%N)
timeout 2s ./a.out < $INP/input0$J.txt > res/result0$J.txt
TIME=$((($(date +%s%N) - $ts)/1000000))

echo "0" >timelimit.txt
/usr/bin/time -v ./a.out < $INP/input0$J.txt 2>>details.txt


max[$J]=$TIME

echo "'" | sudo -S -v


echo ${max[$J]} >> tim.txt


chmod 777 res/result0$J.txt

if diff -q  res/result0$J.txt  $OUTP/output0$J.txt
then
	printf 'Accepted\n'>>log.txt
	
else
	if diff -q -b res/result0$J.txt $OUTP/output0$J.txt | diff -q -B res/result0$J.txt $OUTP/output0$J.txt
	then
		printf 'Presentation Error\n' >>log.txt
		break
	else
		printf 'Wrong Answer\n' >>log.txt
		break
	fi
fi
J=$((J + 1))
done
#end loop

#FILE=a.out

#count max time
echo "'" | sudo -S -v
sudo touch time.txt
chmod 777 time.txt 
#sudo touch tim.txt
#chmod 777 tim.txt


sort -r tim.txt>> time.txt
read -r maxTime<time.txt

#handle verdict
echo "'" | sudo -S -v
sudo touch verdict.txt
chmod 777 verdict.txt
>verdict.txt

if grep -Fxq "Wrong Answer" log.txt
then
    printf 'Wrong Answer\n0\n0'>verdict.txt
    exit
    
elif grep -Fxq "Presentation Error" log.txt
then
	printf 'Presentation Error\n0\n0'>verdict.txt
	exit
	
elif [ ! -f a.out ]
then
	printf 'Compilation Error\n0\n0'>verdict.txt
	exit
else
   printf 'Accepted'>verdict.txt
fi




#write time to verdict
echo "'" | sudo -S -v

printf '\n%d' "$maxTime">>verdict.txt









