<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Service center</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" media="screen" href="/css/main.css" />
</head>
<body>
<main>
  <div id="main-container">
    <header>
      <!-- 宿舍服務中心 -->
    </header>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="/image/logo.png" alt="首頁" class="icon-default">
        <span>宿舍服務中心</span>
      </a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="navbar-collapse collapse" id="navbarColor01" style="">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item min-hide">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item min-hide">
            <a class="nav-link" href="https://www.ncu.edu.tw">中央大學</a>
          </li>
          <li class="nav-item min-hide">
            <a class="nav-link" href="http://osa.ncu.edu.tw/">學生事務處</a>
          </li>
          <li class="nav-item min-hide">
            <a class="nav-link" href="http://140.115.183.185/ncu7221/">生活輔導組</a>
          </li>
          <li class="nav-item min-show">
            <a class="nav-link" href="#">最新消息</a>
          </li>
          <li class="nav-item min-show">
            <a class="nav-link" href="#">宿舍介紹</a>
          </li>
          <li class="nav-item min-show">
            <a class="nav-link" href="#">表單下載</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- navbar -->

    <div id="main-content">
      <div class="row">
        <div class="col">
          <?php include('./index-left-part.html');?>
        </div>

        <div id="center-content" class="col-6">
          <?php include('./bulletin.php');?>
          <!-- <!php-start>
          <img src="/image/news.png" alt="News" class="icon-50">
          <span >
            最新消息 (<a href="#">一般公告</a>、<a href="#">施工消息</a>>、<a href="#">活動資訊</a>、<a href="#">重要行事曆</a>)
          </span>
          <table id="customers">
            <thead>
              <tr>
                <th width="85px">公告日期</th>
                <th width="85px">公告類別</th>
                <th>公告標題</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2019-01-30</td>
                <td>重要公告</td>
                <td>
                  hello hello hello hello hello hello hello hello hello hello hello
                  hello hello hello hello hello hello hello hello hello hello hello
                </td>
              </tr>
              <tr>
                <td>2019-01-10</td>
                <td>一般公告</td>
                <td>開發者好累 開發者好累 開發者好累 開發者好累 開發者好累 開發者好累 開發者好累</td>
              </tr>
            </tbody>
          </table>
          <!php-end> -->
        </div>

        <div class="col">
          <?php include('./index-right-part.html');?>
        </div>
      </div>
    </div>

    <div id="sub-content"><br>
      <?php include('./index-bottom-part.html');?>
    </div>

  </div>
</main>
<?php include('./copyright.html');?>
<script src="/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="/js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>