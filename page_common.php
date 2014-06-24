<?php
/* ページ共通クラス */
abstract class PageCommon
{
  /* ページの全HTMLを取得 */
  public function getPage()
  {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title><?php echo $this->getTitle(); ?></title>
</head>
<body>
<?php $this->getBody(); ?>
</body>
</html>
<?php
  }

  abstract protected function getTitle(); // タイトル取得用
  abstract protected function getBody();  // コンテンツ取得用
}