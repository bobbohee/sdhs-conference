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
    <div id="index">
      <h3><span>SDHS</span> Conference 2018</h3>
      <form action="survey.php" method="get">
        <div class="form-group">
          <label for="sid">학번을 입력해주세요</label>
          <input type="text" class="form-control" id="sid" name="sid" maxlength="5" required>
        </div>
        <button type="submit" class="btn btn-primary">설문조사 하러가기</button>
      </form>
    </div>
  </div>
  <script src="./js/bootstrap.js"></script>
</body>
</html>