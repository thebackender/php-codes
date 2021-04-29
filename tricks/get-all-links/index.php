<h1 style="text-align:center;">Extract All Links from a Webpage using PHP</h1>
<hr>
<?php
function getAllLinks($url){
  $urlData = file_get_contents($url);
  $dom = new DOMDocument();
  @$dom->loadHTML($urlData);
  $xpath = new DOMXPath($dom);
  $hrefs = $xpath->evaluate("/html/body//a");
  for($i=0;$i<$hrefs->length;$i++){
    $href = $hrefs->item($i);
    $url = $href->getAttribute('href');
    $url = filter_var($url,FILTER_SANITIZE_URL);
    if(!filter_var($url,FILTER_VALIDATE_URL) === false){
      $urlList[] = $url;
    }
  }
  return array_unique($urlList);
}
$link = 'https://wikipedia.org';
echo '<h3>Links from '.$link.'</h3>';
echo '<pre>';
print_r(getAllLinks($link));