<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: ur

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'PHP DebugBar کا استعمال کرتے ہوئے غلطی رپورٹنگ اور کارکردگی تجزیہ');

define('_MI_DEBUGBAR_ENABLE', 'DebugBar دکھائیں');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Smarty Debug فعال کریں');
define('_MI_DEBUGBAR_FILESDEBUG', 'شامل فائلوں کا ٹیب فعال کریں');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'درخواست کے دوران لوڈ ہونے والی تمام PHP فائلیں دکھائیں');
define('_MI_DEBUGBAR_SLOWQUERY', 'سست سوال کی حد (سیکنڈ)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'اس سے سست سوالات سرخ رنگ میں نمایاں ہیں (مثلاً 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'سوال لاگنگ');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'تمام سوالات یا صرف سست اور غلطیاں');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'تمام سوالات');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'صرف سست اور غلطیاں');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Ray انضمام فعال کریں');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Ray ایپ میں ڈیبگ ڈیٹا بھیجیں');

define('_MI_DEBUGBAR_ADMENU1', 'گھر');
define('_MI_DEBUGBAR_MENU_ABOUT', 'بارے میں');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'انتظامیہ پر واپس ');
\define('_MI_DEBUGBAR_OVERVIEW', 'جائزہ');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'دستبرداری');
\define('_MI_DEBUGBAR_LICENSE', 'لائسنس');
\define('_MI_DEBUGBAR_SUPPORT', 'معاونت');
