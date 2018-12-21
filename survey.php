<?php 
  $sid = 0;
  if (isset($_GET['sid'])) {
    $sid = $_GET['sid'];
  }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div id="wrap">
    <div id="survey">
      <h3><span>SDHS</span> Conference 2018</h3>
      <form action="survey-ok.php" method="get">
        <div class="form-group">
          <input type="hidden" name="sid" value="<?php echo $sid; ?>">
          <select class="custom-select" required>
            <option selected disabled value="">BEST 강의를 선택해주세요</option>
            <option value="1">팀 프로젝트 경험담 ( KOI )</option>
            <option value="2">실리콘밸리 연수 경험담 ( KOI )</option>
            <option value="3">동아리 소개 ( MOD )</option>
            <option value="4">동아리 결과물 발표 ( MOD )</option>
            <option value="5">2018 ON 총결산 ( ON )</option>
            <option value="6">BSP와 랜덤맵 알고리즘 ( ON )</option>
            <option value="7">회사의 경험과 노하우 ( ON )</option>
            <option value="8">Image Detection ( SS )</option>
            <option value="9">WEB & CHATBOT ( SS )</option>
            <option value="10">동아리 작품 소개 및 트렌드 ( TOI )</option>
            <option value="11">동아리 소개 ( LUGH )</option>
          </select>
        </div>
        <div class="form-group">
          <label for="good">* 좋았던 점 혹은 느낀 점을 입력해주세요</label>
          <textarea class="form-control" id="good" name="good" rows="3" required></textarea>
        </div>
        <div class="form-group">
          <label for="improve">* 개선되었면 하는 점을 입력해주세요</label>
          <textarea class="form-control" id="improve" name="improve" rows="3" required></textarea>
        </div>
      <button type="submit" class="btn btn-primary">제출</button>
      </form>
    </div>
  </div>
  <script src="./js/bootstrap.js"></script>
</body>
</html>