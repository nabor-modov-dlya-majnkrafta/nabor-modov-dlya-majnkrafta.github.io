<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
ini_set('error_log','error_log.txt');
header('X-Robots-Tag: noindex');

// ��������� ���� � ���������, � ������� ������� ����.
$url = isset($_POST['url']) ? strip_tags(trim($_POST['url'])) : '';
$key = isset($_POST['key']) ? strip_tags(trim($_POST['key'])) : '';

// ������ ������, �� ��� ����� ����������� ��������:
$link = array('http://bablotop.xyz/my/knigi?keyword='.urlencode($key));

if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_POST['id'])) {
shuffle($link);

echo '<!DOCTYPE html>
<html lang="ru">
  <head>
      <meta charset="utf-8">
    <title>��������...</title>
  </head>
  <body>
  <script>document.location.href = "'.trim($link[0]).'";</script>
  </body>
</html>';
die();
}
