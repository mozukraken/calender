<?php

$body = '';
$period = new DatePeriod(
  new DateTime('first day of this month'),
  new DateInterval('P1D'),
  new DateTime('first day of next month')
);

foreach ($period as $day) {
  $body .= sprintf('<td>%d</td>', $day->format('d'));
}
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Calender</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th><a href="">&laquo;</a></th>
          <th colspan="5">2/2</th>
          <th><a href="">&raquo;</a></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Sun</td>
          <td>Mon</td>
          <td>Tue</td>
          <td>Wed</td>
          <td>Thu</td>
          <td>Fri</td>
          <td>Sat</td>
        </tr>
        <tr>
          <?php echo $body ?>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="7">Today</th>
        </tr>
      </tfoot>
    </table>
  </body>
</html>
