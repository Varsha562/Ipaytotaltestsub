<?php

$data = ['order_id' => $_GET["order_id"],
          'sulte_apt_no' => $_GET["sulte_apt_no"]
        ];
if($_GET['status']=="success")
{
$url ='https://ipaytotal.solutions/response?status=success&message=Your%20transaction%20was%20success&';
$url .= http_build_query($data);
header('Location :'.$url);
}
else
  if($_GET['status']=="fail")
  {
$url = 'https://ipaytotal.solutions/response?status=fail&message=Activity%20limit%20exceeded.';
$url .= http_build_query($data);
header('Location :'.$url);
}
exit();
?>
