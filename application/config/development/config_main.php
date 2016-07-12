<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// サイト名
//define('SITE_NAME','みんなの卓球');
define('SITE_NAME','卓球ナビ(開発)');


// メールアドレス
define('MAIL_ADDRESS_FROM', 'info@takkyu-navi.jp');

define('LANG','Japanese');

// 消費税
define('TAX',1.08);

// ランキング対象の最小コメント数（野球の規定打席みたいなもの）
define('RANKING_COMMENT_CNT',0);

// yahooデベロッパーのアプリケーションID
//define('YAHOO_DEVELOPER_ID', "_HZmS.Cxg67CBghJKjwh5wtvIlIUYOL7UvbX7z.J1x1Pwg_TkTOvERUi8aOp5CeI5VmkIg--");
define('YAHOO_DEVELOPER_ID', "dj0zaiZpPU1QYVdqQThhakluZCZkPVlXazlUVlZJZVUxUk5XY21jR285TUEtLSZzPWNvbnN1bWVyc2VjcmV0Jng9OGE-");

// レビューに対する投票1回分のポイント数（増減兼用）
define('VOTE_POINT',1);

// Google Translate API Key
define('GOOGLE_TRANSLATE_API_KEY', "AIzaSyCVysDldCieAPZDD4dI5i8XoNdqFk4OvNg");

// DBスレーブを利用するかどうか 
$config['use_db_slave'] = true;

// キャッシュするかどうか
$config['cache_flag'] = false;

// キャッシュディレクトリ
$config['cache_dir'] = BASEPATH . "cache/web/content/";

// キャッシュ時間（秒）
$config['cache_lifetime'] = "3600";


// Google Anlytics モバイルのコード（空白の場合は解析を行わない、コード例：MO-10000000-1）
$config['google_anlytics_mobile_code'] = "";


// base_url
$config['base_url'] = "";

// クッキーの保存期間
$config['cookie_expire'] = 100 * 86400;

// クッキーに保存するキーワード
$config['cookie_tail'] = "aaaa";

$config['ip_member'] = array(
	'127.0.0.1',
);





//
//
// ここから下は設定を変更しない
//
//



?>
