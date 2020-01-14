#! /bin/sh
echo "'" | sudo -S -v

INP=test/input
OUTP=test/output

J=0
#FC=$(cd $INP/ && ls -1 | wc -l)

g++ solution.cpp
chmod 777 a.out
#gcc add.c
for i in $INP/*.txt
do

dos2unix -q  $OUTP/output0$J.txt
#printf 'output0%d.txt modified  \n' "$J"
#START=$(($(date +%s%N)/1000000))
ts=$(date +%s%N)
./a.out < $INP/input0$J.txt > res/result0$J.txt
TIME=$((($(date +%s%N) - $ts)/1000000))

chmod 777 res/result0$J.txt

if diff -q  res/result0$J.txt  $OUTP/output0$J.txt
then
	printf 'Test case %d Accepted \t Running Time %d MS \n' "$J" "$TIME" >>log.txt
else
	if diff -b res/result0$J.txt $OUTP/output0$J.txt | diff -B res/result0$J.txt $OUTP/output0$J.txt
	then
		printf 'Presentation %d error\n' "$J" >>log.txt
	else
		printf 'Wrong Answer %d  \n' "$J" >>log.txt
	fi
fi
J=$((J + 1))
done
echo "'" | sudo -S -v
chmod 777 log.txt



