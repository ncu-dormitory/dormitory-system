<?php include('random.php');?>

          <img src="/image/news.png" alt="News" class="icon-50">
          <span>
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
              <?php for($i=0;$i<5;$i++):?>
              <tr>
                <td>2019-01-30</td>
                <td>一般公告</td>
                <td><?php for($a=0;$a<10;$a++)echo random(10).'';?></td>
              </tr>
              <?php endfor;?>
              <tr>
                <td>2019-01-10</td>
                <td>一般公告</td>
                <td>開發者好累 開發者好累 開發者好累 開發者好累 開發者好累 開發者好累 開發者好累</td>
              </tr>
            </tbody>
          </table>