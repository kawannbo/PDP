#!/bin/bash
str1=`date "+%Y/%m/%d %H:%M"`
str2=`curl https://google.com -s -o /dev/null -w "%{time_total}"`
tab="\t"
n="\n"
echo -e $str1$tab$str2$n >> responsetime.log
