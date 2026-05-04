<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: ur
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'مدد کا متن دکھائیں/چھپائیں');
// License
//define('LICENSE_NOT_WRITEABLE', 'لائسنس فائل "%s" قابل تحریر نہیں ہے!');
//define('LICENSE_IS_WRITEABLE', '%s لائسنس قابل تحریر ہے۔');
// Configuration check page
define('SERVER_API', 'سرور API');
define('PHP_EXTENSION', '%s توسیع');
define('CHAR_ENCODING', 'کردار انکوڈنگ');
define('XML_PARSING', 'XML پارسنگ');
define('REQUIREMENTS', 'تقاضے');
define('_PHP_VERSION', 'PHP ورژن');
define('RECOMMENDED_SETTINGS', 'تجویز کردہ ترتیبات');
define('RECOMMENDED_EXTENSIONS', 'تجویز کردہ ایکسٹینشنز');
define('SETTING_NAME', 'ترتیب کا نام');
define('RECOMMENDED', 'تجویز کردہ');
define('CURRENT', 'موجودہ');
define('RECOMMENDED_EXTENSIONS_MSG', 'یہ ایکسٹینشنز عام استعمال کے لیے درکار نہیں ہیں، لیکن 
 کچھ مخصوص خصوصیات (جیسے کثیر زبان یا RSS سپورٹ) کو دریافت کرنے کے لیے ضروری ہو سکتی ہیں۔ اس طرح، ان کو انسٹال کرنے کی سفارش کی جاتی ہے.');
define('NONE', 'کوئی نہیں');
define('SUCCESS', 'کامیابی');
define('WARNING', 'انتباہ');
define('FAILED', 'ناکام');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'XOOPS انسٹالیشن وزرڈ');
define('LANGUAGE_SELECTION', 'زبان کا انتخاب');
define('LANGUAGE_SELECTION_TITLE', 'اپنی زبان منتخب کریں');        // L128
define('INTRODUCTION', 'تعارف');
define('INTRODUCTION_TITLE', 'XOOPS انسٹالیشن وزرڈ میں خوش آمدید');        // L0
define('CONFIGURATION_CHECK', 'کنفیگریشن چیک');
define('CONFIGURATION_CHECK_TITLE', 'آپ کی سرور کنفیگریشن چیک ہو رہی ہے');
define('PATHS_SETTINGS', 'راستے کی ترتیبات');
define('PATHS_SETTINGS_TITLE', 'راستے کی ترتیبات');
define('DATABASE_CONNECTION', 'ڈیٹا بیس کنکشن');
define('DATABASE_CONNECTION_TITLE', 'ڈیٹا بیس کنکشن');
define('DATABASE_CONFIG', 'ڈیٹا بیس ترتیب');
define('DATABASE_CONFIG_TITLE', 'ڈیٹا بیس ترتیب');
define('CONFIG_SAVE', 'کنفیگریشن محفوظ کریں');
define('CONFIG_SAVE_TITLE', 'آپ کے سسٹم کنفیگریشن کو محفوظ کرنا');
define('TABLES_CREATION', 'ٹیبل بنانا');
define('TABLES_CREATION_TITLE', 'ڈیٹابیس ٹیبل بنانا');
define('INITIAL_SETTINGS', 'ابتدائی ترتیبات');
define('INITIAL_SETTINGS_TITLE', 'براہ کرم اپنی ابتدائی ترتیبات درج کریں۔');
define('DATA_INSERTION', 'ڈیٹا داخل کرنا');
define('DATA_INSERTION_TITLE', 'آپ کی ترتیبات کو ڈیٹا بیس میں محفوظ کرنا');
define('WELCOME', 'خوش آمدید');
define('WELCOME_TITLE', 'آپ کی XOOPS سائٹ میں خوش آمدید');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'XOOPS فزیکل پاتھز');
define('XOOPS_URLS', 'ویب مقامات');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS دستاویزات روٹ فزیکل پاتھ');
define('XOOPS_ROOT_PATH_HELP', 'XOOPS دستاویزات (پیش کردہ) ڈائرکٹری کا فزیکل پاتھ بغیر ٹریلنگ سلیش کے');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS لائبریری ڈائریکٹری');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS ڈیٹا فائلز ڈائرکٹری');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'ویب سائٹ کا مقام (URL)'); // L56
define('XOOPS_URL_HELP', 'مین URL جو آپ کی XOOPS انسٹالیشن تک رسائی کے لیے استعمال کیا جائے گا۔'); // L58
define('LEGEND_CONNECTION', 'سرور کنکشن');
define('LEGEND_DATABASE', 'ڈیٹابیس'); // L51
define('DB_HOST_LABEL', 'سرور ہوسٹ نام');    // L27
define('DB_HOST_HELP', 'ڈیٹا بیس سرور کا میزبان نام۔ اگر آپ کو یقین نہیں ہے تو، <em>localhost</em> زیادہ تر معاملات میں کام کرتا ہے۔'); // L67
define('DB_USER_LABEL', 'صارف نام');    // L28
define('DB_USER_HELP', 'صارف اکاؤنٹ کا نام جو ڈیٹا بیس سرور سے منسلک ہونے کے لیے استعمال کیا جائے گا۔'); // L65
define('DB_PASS_LABEL', 'پاس ورڈ');    // L52
define('DB_PASS_HELP', 'آپ کے ڈیٹا بیس صارف اکاؤنٹ کا پاس ورڈ'); // L68
define('DB_NAME_LABEL', 'ڈیٹا بیس کا نام');    // L29
define('DB_NAME_HELP', 'میزبان پر ڈیٹا بیس کا نام۔ اگر موجود نہ ہو تو انسٹالر ڈیٹا بیس بنانے کی کوشش کرے گا۔'); // L64
define('DB_CHARSET_LABEL', 'ڈیٹا بیس کریکٹر سیٹ');
define('DB_CHARSET_HELP', 'MySQL میں کریکٹر سیٹ سپورٹ شامل ہے جو آپ کو مختلف قسم کے کریکٹر سیٹس کا استعمال کرتے ہوئے ڈیٹا کو ذخیرہ کرنے اور مختلف کولیشنز کے مطابق موازنہ کرنے کے قابل بناتا ہے۔');
define('DB_COLLATION_LABEL', 'ڈیٹا بیس کولیشن');
define('DB_COLLATION_HELP', 'ایک کولیشن کریکٹر سیٹ میں حروف کا موازنہ کرنے کے لیے قواعد کا ایک مجموعہ ہے۔');
define('DB_PREFIX_LABEL', 'ٹیبل پریفکس');    // L30
define('DB_PREFIX_HELP', 'یہ سابقہ ڈیٹا بیس میں نام کے تنازعات سے بچنے کے لیے بنائے گئے تمام نئے ٹیبلز میں شامل کر دیا جائے گا۔ اگر آپ کو یقین نہیں ہے تو صرف ڈیفالٹ رکھیں'); // L63
define('DB_PCONNECT_LABEL', 'مستقل کنکشن استعمال کریں');    // L54
define('DB_PCONNECT_HELP', "ڈیفالٹ 'نہیں' ہے۔ اگر آپ کو یقین نہیں ہے تو اسے خالی چھوڑ دیں۔"); // L69
define('DB_DATABASE_LABEL', 'ڈیٹابیس');
define('LEGEND_ADMIN_ACCOUNT', 'ایڈمن اکاؤنٹ');
define('ADMIN_LOGIN_LABEL', 'ایڈمن لاگ ان'); // L37
define('ADMIN_EMAIL_LABEL', 'ایڈمن ای میل'); // L38
define('ADMIN_PASS_LABEL', 'ایڈمن پاس ورڈ'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'پاس ورڈ کی تصدیق کریں'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'پچھلا'); // L42
define('BUTTON_NEXT', 'جاری رکھیں'); // L47
// Messages
define('XOOPS_FOUND', '%s ملا');
define('CHECKING_PERMISSIONS', 'فائل اور ڈائرکٹری کی اجازتوں کی جانچ ہو رہی ہے...'); // L82
define('IS_NOT_WRITABLE', '%s قابل تحریر نہیں ہے۔'); // L83
define('IS_WRITABLE', '%s قابل تحریر ہے۔'); // L84
define('XOOPS_PATH_FOUND', 'راستہ ملا۔');
//define('READY_CREATE_TABLES', 'کوئی XOOPS ٹیبلز کا پتہ نہیں چلا۔ <br> انسٹالر اب XOOPS سسٹم ٹیبل بنانے کے لئے تیار ہے۔');
define('XOOPS_TABLES_FOUND', 'XOOPS سسٹم ٹیبل آپ کے ڈیٹا بیس میں پہلے سے موجود ہیں۔'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS سسٹم ٹیبلز بنائے گئے ہیں۔');
//define('READY_INSERT_DATA', 'انسٹالر اب آپ کے ڈیٹا بیس میں ابتدائی ڈیٹا داخل کرنے کے لیے تیار ہے۔');
//define('READY_SAVE_MAINFILE', 'انسٹالر اب مخصوص سیٹنگز کو <em>mainfile.php</em> میں محفوظ کرنے کے لیے تیار ہے۔');
define('SAVED_MAINFILE', 'ترتیبات محفوظ');
define('SAVED_MAINFILE_MSG', 'انسٹالر نے مخصوص سیٹنگز کو <em>mainfile.php</em> اور <em>secure.php</em> میں محفوظ کر لیا ہے۔');
define('DATA_ALREADY_INSERTED', 'XOOPS ڈیٹا بیس میں ملا۔');
define('DATA_INSERTED', 'ابتدائی ڈیٹا ڈیٹا بیس میں داخل کر دیا گیا۔');
// %s is database name
define('DATABASE_CREATED', 'ڈیٹا بیس %s بنایا گیا!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'ٹیبل بنانے سے قاصر %s'); // L118
define('TABLE_CREATED', 'ٹیبل %s بنایا گیا۔'); // L45
define('ROWS_INSERTED', '%d اندراجات کو ٹیبل %s میں داخل کیا گیا۔'); // L119
define('ROWS_FAILED', 'ٹیبل %s میں %d اندراجات داخل کرنے میں ناکام۔'); // L120
define('TABLE_ALTERED', 'ٹیبل %s اپ ڈیٹ ہو گیا۔'); // L133
define('TABLE_NOT_ALTERED', 'جدول کو اپ ڈیٹ کرنے میں ناکام %s۔'); // L134
define('TABLE_DROPPED', 'ٹیبل %s گرا دیا گیا۔'); // L163
define('TABLE_NOT_DROPPED', 'ٹیبل %s کو حذف کرنے میں ناکام۔'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'مخصوص فولڈر تک رسائی نہیں ہو سکی۔ براہ کرم تصدیق کریں کہ یہ موجود ہے اور سرور کے ذریعہ پڑھنے کے قابل ہے۔');
define('ERR_NO_XOOPS_FOUND', 'مخصوص فولڈر میں کوئی XOOPS تنصیب نہیں مل سکی۔');
define('ERR_INVALID_EMAIL', 'غلط ای میل'); // L73
define('ERR_REQUIRED', 'معلومات ضروری ہیں۔'); // L41
define('ERR_PASSWORD_MATCH', 'دونوں پاس ورڈ مماثل نہیں ہیں۔');
define('ERR_NEED_WRITE_ACCESS', 'سرور کو درج ذیل فائلوں اور فولڈرز تک تحریری رسائی دی جانی چاہیے<br> (یعنی UNIX/LINUX سرور پر <em>chmod 775 Directory_name</em>)<br> اگر وہ دستیاب نہیں ہیں یا صحیح طریقے سے نہیں بنائے گئے ہیں تو براہ کرم دستی طور پر تخلیق کریں اور مناسب اجازتیں مرتب کریں۔');
define('ERR_NO_DATABASE', 'ڈیٹا بیس نہیں بنا سکا۔ تفصیلات کے لیے سرور ایڈمنسٹریٹر سے رابطہ کریں۔'); // L31
define('ERR_NO_DBCONNECTION', 'ڈیٹا بیس سرور سے کنکشن نہیں ہو سکا۔'); // L106
define('ERR_WRITING_CONSTANT', 'مسلسل لکھنے میں ناکام %s۔'); // L122
define('ERR_COPY_MAINFILE', 'ڈسٹری بیوشن فائل کو %s پر کاپی نہیں کیا جا سکا');
define('ERR_WRITE_MAINFILE', '%s میں نہیں لکھا جا سکا۔ براہ کرم فائل کی اجازت چیک کریں اور دوبارہ کوشش کریں۔');
define('ERR_READ_MAINFILE', 'پڑھنے کے لیے %s نہیں کھول سکا');
define('ERR_INVALID_DBCHARSET', "چار سیٹ '%s' تعاون یافتہ نہیں ہے۔");
define('ERR_INVALID_DBCOLLATION', "کولیشن '%s' تعاون یافتہ نہیں ہے۔");
define('ERR_CHARSET_NOT_SET', 'ڈیفالٹ کریکٹر سیٹ XOOPS ڈیٹا بیس کے لیے سیٹ نہیں ہے۔');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'سپورٹ');
define('LOGIN', 'توثیق');
define('LOGIN_TITLE', 'توثیق');
define('USER_LOGIN', 'ایڈمنسٹریٹر لاگ ان');
define('USERNAME', 'صارف نام:');
define('PASSWORD', 'پاس ورڈ :');
define('ICONV_CONVERSION', 'کریکٹر سیٹ تبدیلی');
define('ZLIB_COMPRESSION', 'Zlib کمپریشن');
define('IMAGE_FUNCTIONS', 'امیج فنکشنز');
define('IMAGE_METAS', 'تصویری میٹا ڈیٹا (exif)');
define('FILTER_FUNCTIONS', 'فلٹر فنکشنز');
define('ADMIN_EXIST', 'ایڈمنسٹریٹر اکاؤنٹ پہلے سے موجود ہے۔');
define('CONFIG_SITE', 'سائٹ کنفیگریشن');
define('CONFIG_SITE_TITLE', 'سائٹ کنفیگریشن');
define('MODULES', 'ماڈیولز کی تنصیب');
define('MODULES_TITLE', 'ماڈیولز کی تنصیب');
define('THEME', 'تھیم منتخب کریں');
define('THEME_TITLE', 'ڈیفالٹ تھیم منتخب کریں');
define('INSTALLED_MODULES', 'درج ذیل ماڈیولز نصب کیے گئے ہیں۔');
define('NO_MODULES_FOUND', 'کوئی ماڈیول نہیں ملا۔');
define('NO_INSTALLED_MODULES', 'کوئی ماڈیول نصب نہیں۔');
define('THEME_NO_SCREENSHOT', 'اسکرین شاٹ نہیں ملا');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'پاس ورڈ کی طاقت');
define('PASSWORD_DESC', 'پاس ورڈ درج نہیں کیا');
define('PASSWORD_GENERATOR', 'پاس ورڈ جنریٹر');
define('PASSWORD_GENERATE', 'بنائیں');
define('PASSWORD_COPY', 'کاپی کریں');
define('PASSWORD_VERY_WEAK', 'بہت کمزور');
define('PASSWORD_WEAK', 'کمزور');
define('PASSWORD_BETTER', 'بہتر');
define('PASSWORD_MEDIUM', 'درمیانہ');
define('PASSWORD_STRONG', 'مضبوط');
define('PASSWORD_STRONGEST', 'سب سے مضبوط');
//2.5.7
define('WRITTEN_LICENSE', 'نے لکھا XOOPS %s لائسنس کلید: <strong>_%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'دوبارہ کوشش کریں');
define('CHMOD_CHGRP_IGNORE', 'بہرحال استعمال کریں');
define('CHMOD_CHGRP_ERROR', 'انسٹالر کنفیگریشن فائل %1$s لکھنے کے قابل نہیں ہوسکتا ہے۔<p>PHP صارف %2$s اور گروپ %3$s کے تحت فائلیں لکھ رہا ہے۔<p> ڈائریکٹری %4$s/ میں صارف %5$s اور گروپ %6$s ہے');
//2.5.9
define("CURL_HTTP", "کلائنٹ URL لائبریری (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'ویب سائٹ کے لیے کوکی ڈومین');
define('XOOPS_COOKIE_DOMAIN_HELP', 'کوکیز سیٹ کرنے کے لیے ڈومین۔ خالی ہو سکتا ہے، URL (www.example.com) سے مکمل ہوسٹ، یا ذیلی ڈومینز (www.example.com اور blog.example.com) پر اشتراک کرنے کے لیے رجسٹرڈ ڈومین (example.com) کے بغیر۔');
define('INTL_SUPPORT', 'انٹرنیشنلائزیشن فنکشنز');
define('XOOPS_SOURCE_CODE', "XOOPS پر GitHub");
define('XOOPS_INSTALLING', 'انسٹال ہو رہا ہے');
define('XOOPS_ERROR_ENCOUNTERED', 'غلطی');
define('XOOPS_ERROR_SEE_BELOW', 'پیغامات کے لیے نیچے دیکھیں۔');
define('MODULES_AVAILABLE', 'دستیاب ماڈیولز');
define('INSTALL_THIS_MODULE', '%s شامل کریں');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'کنفیگریشن فائل کو کاپی نہیں کیا جا سکا %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS سائٹ');
define('_WEBSITE_SLOGAN', 'بس اسے استعمال کریں!');
define('_WEBSITE_META_KEYWORDS', 'xoops، ویب ایپلیکیشن فریم ورک، cms، مواد کے انتظام کا نظام');
define('_WEBSITE_FOOTER', "تقویت یافتہ بذریعہ XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>The XOOPS پروجیکٹ</a>");
define('_WEBSITE_COPYRIGHT', 'کاپی رائٹ © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS ایک متحرک آبجیکٹ اورینٹڈ پر مبنی اوپن سورس پورٹل اسکرپٹ ہے جو PHP میں لکھا گیا ہے۔');
define('_WEBSITE_CENSOR_REPLACE', 'اوہ');
