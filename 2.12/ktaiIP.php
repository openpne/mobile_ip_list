<?php

/**
 * Copyright 2005-2012 OpenPNE Project (http://www.openpne.jp/)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * 2012/11/01 リリース版
 * ・WILLCOM
 * 通信設備の設備更改に伴う一時的な増設による追加。問題なく完了すれば近日中に終了する予定。
 */

// 許可するIP帯域のリスト
// 'IP Adress/BitMask' の形式で入力してください
$GLOBALS['_OPENPNE_KTAI_IP_LIST'] = array(

// DoCoMo (2010/06/24更新)
// http://www.nttdocomo.co.jp/service/developer/make/content/ip/index.html
'210.153.84.0/24',
'210.136.161.0/24',
'210.153.86.0/24',
'124.146.174.0/24',
'124.146.175.0/24',
'202.229.176.0/24',
'202.229.177.0/24',
'202.229.178.0/24',

// au 2011年夏モデル以前 (2012/03/23更新)
// http://www.au.kddi.com/ezfactory/tec/spec/ezsava_ip.html
'210.230.128.224/28',
'121.111.227.160/27',
'219.108.158.0/27',
'219.125.146.0/28',
'61.117.2.32/29',
'61.117.2.40/29',
'219.108.158.40/29',
'222.5.62.128/25',
'59.135.38.128/25',
'219.108.157.0/25',
'219.125.145.0/25',
'121.111.231.0/25',
'121.111.227.0/25',
'118.152.214.192/26',
'118.159.131.0/25',
'118.159.133.0/25',
'118.159.132.160/27',
'111.86.142.0/26',
'111.86.141.64/26',
'111.86.141.128/26',
'111.86.141.192/26',
'118.159.133.192/26',
'111.86.143.192/27',
'111.86.143.224/27',
'111.86.147.0/27',
'111.86.142.128/27',
'111.86.142.160/27',
'111.86.142.192/27',
'111.86.142.224/27',
'111.86.143.0/27',
'111.86.143.32/27',
'111.86.147.32/27',
'111.86.147.64/27',
'111.86.147.96/27',
'111.86.147.128/27',
'111.86.147.160/27',
'111.86.147.192/27',
'111.86.147.224/27',

// au 2011年秋冬モデル以降 (2012/07/16更新)
// http://www.au.kddi.com/ezfactory/tec/spec/ezsava_ip.html
'111.107.116.64/26',
'111.107.116.192/28',

// SoftBank (2012/07/30更新)
// http://creation.mb.softbank.jp/mc/tech/tech_web/web_ipaddress.html
// softbank 2012年5月中旬以降
'123.108.237.112/28',
'123.108.239.224/28',
'202.253.96.144/28',
'202.253.99.144/28',
'210.228.189.188/30',

// WILLCOM (2012/01/12更新)
// http://www.willcom-inc.com/ja/service/contents_service/create/center_info/
'114.20.49.0/24',
'114.20.50.0/24',
'114.20.51.0/24',
'114.20.52.0/24',
'114.20.53.0/24',
'114.20.54.0/24',
'114.20.55.0/24',
'114.20.56.0/24',
'114.20.57.0/24',
'114.20.58.0/24',
'114.20.59.0/24',
'114.20.60.0/24',
'114.20.61.0/24',
'114.20.62.0/24',
'114.20.63.0/24',
'114.20.64.0/24',
'114.20.65.0/24',
'114.20.66.0/24',
'114.20.67.0/24',
'114.21.128.0/24',
'114.21.129.0/24',
'114.21.130.0/24',
'114.21.131.0/24',
'114.21.132.0/24',
'114.21.133.0/24',
'114.21.134.0/24',
'114.21.135.0/24',
'114.21.136.0/24',
'114.21.137.0/24',
'114.21.138.0/24',
'114.21.139.0/24',
'114.21.140.0/24',
'114.21.141.0/24',
'114.21.142.0/24',
'114.21.143.0/24',
'114.21.144.0/24',
'114.21.145.0/24',
'114.21.146.0/24',
'114.21.147.0/24',
'114.21.148.0/24',
'114.21.149.0/24',
'125.28.0.0/24',
'125.28.1.0/24',
'125.28.11.0/24',
'125.28.12.0/24',
'125.28.13.0/24',
'125.28.14.0/24',
'125.28.15.0/24',
'125.28.16.0/24',
'125.28.17.0/24',
'125.28.2.0/24',
'125.28.3.0/24',
'125.28.4.0/24',
'125.28.5.0/24',
'125.28.6.0/24',
'125.28.7.0/24',
'125.28.8.0/24',
'210.168.246.0/24',
'210.168.247.0/24',
'210.169.92.0/24',
'210.169.93.0/24',
'210.169.94.0/24',
'210.169.95.0/24',
'210.169.96.0/24',
'210.169.97.0/24',
'210.169.98.0/24',
'210.169.99.0/24',
'210.255.190.0/24',
'211.126.192.128/25',
'211.18.232.0/24',
'211.18.233.0/24',
'211.18.234.0/24',
'211.18.235.0/24',
'211.18.236.0/24',
'211.18.237.0/24',
'211.18.238.0/24',
'211.18.239.0/24',
'219.108.10.0/24',
'219.108.11.0/24',
'219.108.12.0/24',
'219.108.13.0/24',
'219.108.14.0/24',
'219.108.15.0/24',
'219.108.2.0/24',
'219.108.3.0/24',
'219.108.4.0/24',
'219.108.5.0/24',
'219.108.6.0/24',
'219.108.7.0/24',
'219.108.8.0/24',
'219.108.9.0/24',
'221.119.0.0/24',
'221.119.1.0/24',
'221.119.2.0/24',
'221.119.3.0/24',
'221.119.4.0/24',
'221.119.5.0/24',
'221.119.6.0/24',
'221.119.7.0/24',
'221.119.8.0/24',
'221.119.9.0/24',
'61.198.128.0/24',
'61.198.129.0/24',
'61.198.130.0/24',
'61.198.131.0/24',
'61.198.132.0/24',
'61.198.133.0/24',
'61.198.134.0/24',
'61.198.135.0/24',
'61.198.136.0/24',
'61.198.137.0/24',
'61.198.139.0/29',
'61.198.139.128/27',
'61.198.139.160/28',
'61.198.140.0/24',
'61.198.141.0/24',
'61.198.142.0/24',
'61.198.143.0/24',
'61.198.160.0/24',
'61.198.161.0/24',
'61.198.162.0/24',
'61.198.163.0/24',
'61.198.164.0/24',
'61.198.165.0/24',
'61.198.166.0/24',
'61.198.168.0/24',
'61.198.169.0/24',
'61.198.170.0/24',
'61.198.171.0/24',
'61.198.172.0/24',
'61.198.173.0/24',
'61.198.174.0/24',
'61.198.175.0/24',
'61.198.248.0/24',
'61.198.249.0/24',
'61.198.250.0/24',
'61.198.251.0/24',
'61.198.252.0/24',
'61.198.253.0/24',
'61.198.254.0/24',
'61.198.255.0/24',
'61.204.0.0/24',
'61.204.2.0/24',
'61.204.3.0/25',
'61.204.3.128/25',
'61.204.4.0/24',
'61.204.5.0/24',
'61.204.6.0/25',
'61.204.6.128/25',
'61.204.7.0/25',
'61.204.92.0/24',
'61.204.93.0/24',
'61.204.94.0/24',
'61.204.95.0/24',

// WILLCOM (2012/11/01更新)
// 通信設備の設備更改に伴う一時的な増設による追加。問題なく完了すれば近日中に終了する予定。
'61.198.131.0/24',
'61.198.140.0/24',
'61.198.141.0/24',
'61.198.143.0/24',
'61.198.165.0/24',
'61.198.166.0/24',
);

?>
