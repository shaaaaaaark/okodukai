<?php
$dsn = 'mysql:dbname=[DB名]; host=[IPアドレス]; charset=utf8';
$usr = 'ユーザー名';
$passwd = 'パスワード';

try {
  $db = new PDO($dsn, $usr, $passwd);
  print '接続に成功しました。';
} catch (PDOException $e) {
  print "接続エラー：{$e->getMessage()}";
} finally {
  $db = null;
}