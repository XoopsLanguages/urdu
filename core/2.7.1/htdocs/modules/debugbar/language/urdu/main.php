<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: ur

define('_MD_DEBUGBAR_DEBUG', 'ڈیبگ');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'شامل فائلیں');
define('_MD_DEBUGBAR_PHP_VERSION', 'PHP ورژن');
define('_MD_DEBUGBAR_NONE', 'کوئی نہیں');
define('_MD_DEBUGBAR_ERRORS', 'غلطیاں');
define('_MD_DEBUGBAR_DEPRECATED', 'متروک');
define('_MD_DEBUGBAR_QUERIES', 'سوالات');
define('_MD_DEBUGBAR_BLOCKS', 'بلاکس');
define('_MD_DEBUGBAR_EXTRA', 'اضافی');
define('_MD_DEBUGBAR_TIMERS', 'ٹائمر');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s کو لوڈ ہونے میں %s سیکنڈ لگے۔');
define('_MD_DEBUGBAR_TOTAL', 'کل');
define('_MD_DEBUGBAR_NOT_CACHED', 'کیشڈ نہیں');
define('_MD_DEBUGBAR_CACHED', 'کیشڈ (ہر %s سیکنڈ میں دوبارہ بناتا ہے)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(خالی تار)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'بول سچ');
define('_MD_DEBUGBAR_BOOL_FALSE', 'بول غلط');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'ڈیٹابیس سوالات');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'میموری استعمال');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d سوالات');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d نقلیں)');
define('_MD_DEBUGBAR_BYTES', '%s بائٹس');
define('_MD_DEBUGBAR_DB_VERSION', '%s ورژن');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- ایرر نمبر: %s ایرر میسج: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- خرابی #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'استثناء');
define('_MD_DEBUGBAR_RAY_QUERY', 'سوال #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'آہستہ');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'بلاک (کیشڈ %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'بلاک (کیشڈ نہیں)');
define('_MD_DEBUGBAR_RAY_DUMP', 'ڈمپ');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'ٹیمپلیٹ سیاق');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(کوئی ٹیمپلیٹ متغیر نہیں)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d vars)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'ڈائریکٹری "modules/debugbar/%s" نہیں بنائی گئی۔');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'اثاثہ کاپی کے دوران ڈائریکٹری "%s" بنانے میں ناکام');
