<?php
include "TopSdk.php";
date_default_timezone_set('Asia/Shanghai');

// $c = new DingTalkClient(DingTalkConstant::$CALL_TYPE_OAPI, DingTalkConstant::$METHOD_GET , DingTalkConstant::$FORMAT_JSON);
// $req = new OapiGettokenRequest;
// $req->setCorpid("dingc95d22c053c528xx");
// $req->setCorpsecret("y2bvq4CbSV0TupI0bTg");
// $resp=$c->execute($req, "accessToken","https://oapi.dingtalk.com/gettoken");
// var_dump($resp)

$c = new TopClient;
$c->appkey = '25369007';
$c->secretKey = '99508336e031375ea4744f5498010712';
$req = new TbkTpwdCreateRequest;
$req->setUserId("123");
$req->setText("长度大于5个字符");
$req->setUrl("https://uland.taobao.com/coupon/edetail?e=OrW0k%2FsSRu4NfLV8niU3RwXoB%2BDaBK5LQS0Flu%2FfbSp4QsdWMikAalrisGmre1Id0BFAqRODu11hKq8M7GTQeUVOldLhlGmxmSRVIqf0xdDEOL0N8pxnrZBvSc2A6yd8e1NfunALHEm3GXpSbfs48mtecLSIL4PF%2FNWMWAnU3e37lpv3Xpz4j%2B2EH9ZkW0infjHMNTxsYKQCGruttYDvNg%3D%3D&&app_pvid=59590_11.23.63.209_377_1546012302022&ptl=floorId:2836;app_pvid:59590_11.23.63.209_377_1546012302022;tpp_pvid:100_11.182.43.234_145305_481546012302025940&union_lens=lensId:0b173fd1_0c32_167f5839ad5_9a9b");
$req->setExt("{}");
$resp = $c->execute($req);
var_dump($resp);

// $c = new TopClient;
// $c->appkey = '25369007';
// $c->secretKey = '99508336e031375ea4744f5498010712';
// $req = new TbkDgMaterialOptionalRequest;
// $req->setPageSize("20");
// $req->setPageNo("1");
// $req->setPlatform("2");
// $req->setAdzoneId("171014486");
// $req->setQ("https://detail.tmall.com/item.htm?id=521104570073&ut_sk=1.Wk119FQ/e2gDABGSU8RoMdmX_21380790_1545989764248.Copy.1&sourceType=item&price=49-79.8&origin_");
// $resp = $c->execute($req);
// print_r($resp);
?>
