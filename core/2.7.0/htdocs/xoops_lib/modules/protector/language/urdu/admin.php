<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','اجازتیں');
define('_MD_A_MYMENU_MYPREFERENCES','ترجیحات');
// index.php
define('_AM_TH_DATETIME', 'وقت');
define('_AM_TH_USER', 'صارف');
define('_AM_TH_IP', 'IP');
define('_AM_TH_ایجنٹ', 'AGENT');
define('_AM_TH_TYPE', 'قسم');
define('_AM_TH_DESCRIPTION', 'تفصیل');
define('_AM_TH_BADIPS','خراب IPs<br>_<br><span style="font-weight:normal;">ہر ایک کو IP ایک لائن<br>خالی لکھیں یعنی تمام IPs کی اجازت ہے</span>');
define('_AM_TH_GROUP1IPS','گروپ کے لیے اجازت یافتہ IPs=1<br><br><span style="font-weight:normal;">ہر ایک IP ایک لائن لکھیں۔<br>192.168۔ یعنی 192.168.*<br>خالی کا مطلب ہے تمام IPs کی اجازت ہے</span>');
define('_AM_LABEL_COMPACTLOG', 'کمپیکٹ لاگ');
define('_AM_BUTTON_COMPACTLOG', 'کمپیکٹ کریں!');
define('_AM_JS_COMPACTLOGCONFIRM', 'ڈپلیکیٹڈ (IP، قسم) ریکارڈز ہٹا دیے جائیں گے۔');
define('_AM_LABEL_REMOVEALL', 'تمام ریکارڈ ہٹائیں');
define('_AM_BUTTON_REMOVEALL', 'سب ہٹائیں!');
define('_AM_JS_REMOVEALLCONFIRM', 'تمام لاگز کو بالکل ہٹا دیا گیا ہے۔ کیا تم واقعی ٹھیک ہو؟');
define('_AM_LABEL_REMOVE', 'چیک کیے گئے ریکارڈز کو ہٹا دیں:');
define('_AM_BUTTON_REMOVE', 'ہٹائیں!');
define('_AM_JS_REMOVECONFIRM', 'ہٹائیں ٹھیک ہے؟');
define('_AM_MSG_IPFILESUPDATED', 'IPs کے لیے فائلوں کو اپ ڈیٹ کر دیا گیا ہے۔');
define('_AM_MSG_BADIPSCANTOPEN', 'خراب IP کی فائل نہیں کھولی جا سکتی');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'گروپ=1 کی اجازت دینے والی فائل کو نہیں کھولا جا سکتا');
define('_AM_MSG_REMOVED', 'ریکارڈ ہٹا دیے گئے');
define('_AM_MSG_DELFAILED', 'ریکارڈز کو حذف کرنے میں ناکام');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'کنفیگ ڈائرکٹری کو قابل تحریر تبدیل کریں: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'پریفکس مینیجر');
define('_AM_MSG_DBUPDATED', 'ڈیٹا بیس کامیابی سے اپ ڈیٹ ہو گئی!');
define('_AM_CONFIRM_DELETE', 'تمام ڈیٹا چھوڑ دیا جائے گا۔ ٹھیک ہے؟');
define('_AM_TXT_HOWTOCHANGEDB',"اگر آپ سابقہ ​​​​تبدیل کرنا چاہتے ہیں، <br> ترمیم کریں %s/data/secure.php کو دستی طور پر۔<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'محفوظ نہیں ہے۔');
define('_AM_ADV_TRUSTPATHPUBLIC', 'اگر آپ کوئی تصویر دیکھ سکتے ہیں -NG- یا لنک عام صفحہ لوٹاتا ہے، تو آپ کا XOOPS_TRUST_PATH ٹھیک سے نہیں رکھا گیا ہے۔ XOOPS_TRUST_PATH کے لیے بہترین جگہ DocumentRoot سے باہر ہے۔ اگر آپ ایسا نہیں کر سکتے تو آپ کو دوسرے بہترین طریقے کے طور پر XOOPS_TRUST_PATH کے نیچے .htaccess (سب سے انکار) ڈالنا ہوگا۔');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'چیک کریں کہ TRUST_PATH کے اندر موجود PHP فائلیں صرف پڑھنے کے لیے سیٹ ہیں (یہ 404,403 یا 500 ایرر ہونی چاہیے)');
define('_AM_ADV_REGISTERGLOBALS',"اگر 'آن' ہے، تو یہ ترتیب مختلف قسم کے انجیکشن حملوں کو دعوت دیتی ہے۔ اگر آپ کر سکتے ہیں تو php.ini میں 'register_globals off' سیٹ کریں، یا اگر ممکن نہ ہو تو اپنی XOOPS ڈائریکٹری میں .htaccess بنائیں یا ترمیم کریں:");
define('_AM_ADV_ALLOWURLFOPEN',"If 'ON', this setting allows attackers to execute arbitrary scripts on remote servers.<br>Only administrator can change this option.<br>If you are an admin, edit php.ini or httpd.conf.<br><b>Sample of httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>Else, claim it to your administrators.");
define('_AM_ADV_USETRANSSID',"اگر 'آن' ہے تو آپ کی سیشن آئی ڈی اینکر ٹیگز وغیرہ میں دکھائی جائے گی۔<br>سیشن ہائی جیکنگ کو روکنے کے لیے، XOOPS_ROOT_PATH میں .htaccess میں ایک لائن شامل کریں۔<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"یہ ترتیب 'SQL انجیکشنز' کو مدعو کرتی ہے۔<br>اس ماڈیول کی ترجیحات میں 'فورس سینیٹائزنگ *' آن کرنا نہ بھولیں۔");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'پریفکس مینیجر پر جائیں۔');
define('_AM_ADV_MAINUNPATCHED', 'آپ کو اپنی mainfile.php میں ترمیم کرنی چاہیے جیسا کہ README میں لکھا ہے۔');
define('_AM_ADV_DBFACTORYPATCHED', 'آپ کا ڈیٹا بیس فیکٹری ڈی بی لیئر ٹریپنگ اینٹی ایس کیو ایل انجیکشن کے لیے تیار ہے');
define('_AM_ADV_DBFACTORYUNPATCHED', 'آپ کا ڈیٹا بیس فیکٹری DBLayer ٹریپنگ اینٹی ایس کیو ایل انجیکشن کے لیے تیار نہیں ہے۔ کچھ پیچ درکار ہیں۔');
define('_AM_ADV_SUBTITLECHECK', 'چیک کریں کہ آیا پروٹیکٹر ٹھیک کام کرتا ہے۔');
define('_AM_ADV_CHECKCONTAMI', 'آلودگی');
define('_AM_ADV_CHECKISOCOM', 'الگ تبصرے');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'اور اس میں نیچے کی لائن لگائیں:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'پریفکس');
define('_AM_PROTECTOR_TABLES', 'ٹیبل');
define('_AM_PROTECTOR_UPDATED', 'اپ ڈیٹ ہوا');
define('_AM_PROTECTOR_COPY', 'کاپی کریں');
define('_AM_PROTECTOR_ACTIONS', 'اعمال');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'چیک شدہ ریکارڈ پر آئی پی پر پابندی لگائیں:');
define('_AM_BUTTON_BAN_BY_IP', 'IP پابندی!');
define('_AM_JS_BANCONFIRM', 'IP پابندی ٹھیک ہے؟');
define('_AM_MSG_BANNEDIP', 'IP بلاک ہیں');
define('_AM_ADMINSTATS_TITLE', 'Protector لاگ خلاصہ');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'پچھلا مہینہ');
define('_AM_ADMINSTATS_LAST_WEEK', 'پچھلا ہفتہ');
define('_AM_ADMINSTATS_LAST_DAY', 'کل');
define('_AM_ADMINSTATS_LAST_HOUR', 'آخری گھنٹہ');
