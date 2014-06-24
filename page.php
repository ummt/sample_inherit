<?php
require_once 'page_common.php';

class Page extends PageCommon
{
  /* タイトル指定 */
  protected function getTitle()
  {
    return 'サンプルページ';
  }

  /* コンテンツ指定 */
  protected function getBody()
  {
?>
<h1>ページタイトル</h1>
<p>コンテンツ</p>
<?php
  }
}