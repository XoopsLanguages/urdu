<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'دوسرا مرحلہ');
define('_US_2FA_PROMPT', 'اپنی تصدیقی ایپ سے کوڈ درج کریں');
define('_US_2FA_CODE', 'تصدیقی کوڈ');
define('_US_2FA_PROMPT_EMAIL', 'ہم نے %s پر چھ ہندسوں کا کوڈ بھیجا ہے۔ اسے نیچے درج کریں۔');
define('_US_2FA_CODE_EMAIL', 'آپ کی ای میل سے موصول کوڈ');
define('_US_2FA_SEND', 'نیا کوڈ بھیجیں');
define('_US_2FA_SENT', '%s پر نیا کوڈ بھیج دیا گیا ہے۔ یہ دس منٹ کے لیے درست ہے۔');
define('_US_2FA_SEND_WAIT', 'ایک منٹ سے بھی کم وقت پہلے ایک کوڈ بھیجا گیا تھا۔ دوسرا کوڈ درخواست کرنے سے پہلے اپنا ان باکس اور اسپیم فولڈر چیک کریں۔');
define('_US_2FA_SEND_FAILED', 'اس وقت کوڈ نہیں بھیجا جا سکا۔ تھوڑی دیر بعد دوبارہ کوشش کریں، یا بازیابی کوڈ استعمال کریں۔');
define('_US_2FA_EMAIL_SUBJECT', '%s: آپ کا لاگ ان کوڈ');
define('_US_2FA_EMAIL_BODY', '%s کے لیے آپ کا لاگ ان کوڈ یہ ہے:

%s

یہ %d منٹ کے لیے درست ہے اور ایک بار کام کرتا ہے۔ اگر آپ نے اس کی درخواست نہیں کی تو اس پیغام کو نظر انداز کریں اور اپنا پاس ورڈ تبدیل کرنے پر غور کریں۔');
define('_US_2FA_RECOVERY', 'اس کے بجائے بازیابی کوڈ استعمال کریں');
define('_US_2FA_RECOVERY_HINT', 'ہر بازیابی کوڈ ایک بار کام کرتا ہے۔ ایک استعمال کرنے پر آپ کو ای میل بھیجی جاتی ہے۔');
define('_US_2FA_SUBMIT', 'جاری رکھیں');
define('_US_2FA_STARTAGAIN', 'یہ لاگ ان ختم ہو چکا ہے یا اس میں خلل پڑا ہے۔ براہ کرم دوبارہ شروع کریں۔');
define('_US_2FA_BACKTOLOGIN', 'لاگ ان فارم پر واپس جائیں');
define('_US_2FA_BADCODE', 'وہ کوڈ قبول نہیں کیا گیا۔');
define('_US_2FA_LOCKED', 'بہت زیادہ کوششیں۔ دوسرا مرحلہ پندرہ منٹ کے لیے مقفل ہے؛ بازیابی کوڈ اب بھی کام کرتا ہے۔');
define('_US_2FA_UNAVAILABLE', 'دوسرا مرحلہ اس وقت دستیاب نہیں ہے۔ بازیابی کوڈ اب بھی کام کرتا ہے، یا سائٹ ایڈمنسٹریٹر سے رابطہ کریں۔');
define('_US_2FA_REQUIRED', 'اس اکاؤنٹ پر دو مرحلہ توثیق فعال ہے۔ براہ کرم سائٹ کے لاگ ان صفحے کے ذریعے لاگ ان کریں۔');
define('_US_2FA_HTTP_LOGIN', 'یہ پاپ اپ HTTP کے ذریعے دو مرحلہ لاگ ان مکمل نہیں کر سکتا کیونکہ آپ کا پاس ورڈ بغیر خفیہ کاری کے بھیجا جائے گا۔ اس کے بجائے سائٹ لاگ ان استعمال کریں، یا ایڈمنسٹریٹر سے سائٹ کے لیے HTTPS فعال کرنے کو کہیں۔');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: دوسرا مرحلہ مقفل ہو گیا');
define('_US_2FA_LOCKED_MAIL_BODY', 'آپ کے اکاؤنٹ %s کے لیے %s سے پانچ غلط دوسرے مرحلے کے کوڈز درج کیے گئے۔ دوسرا مرحلہ پندرہ منٹ کے لیے مقفل ہے۔ اگر یہ آپ نہیں تھے، تو اپنا پاس ورڈ تبدیل کریں۔');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: ایک بازیابی کوڈ استعمال کیا گیا');
define('_US_2FA_RECOVERY_MAIL_BODY', '%s سے آپ کے اکاؤنٹ %s میں لاگ ان کرنے کے لیے ایک بازیابی کوڈ استعمال کیا گیا۔ وہ کوڈ اب کام نہیں کرتا۔ اگر یہ آپ نہیں تھے، تو اپنا پاس ورڈ تبدیل کریں اور اپنے بازیابی کوڈز کو دوبارہ ترتیب دیں۔');
