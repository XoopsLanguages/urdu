<?php

// _LANGCODE: ur
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4 مائیگریشن');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'سکینر کے نتائج');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'اسکین چلائیں۔');
define('_XOOPS_SMARTY4_SCANNER_END', 'اسکینر سے باہر نکلیں۔');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'اصول');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'میچ');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'فائل');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'شمار درست کریں۔');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'دستی جائزہ درکار ہے۔');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'خود بخود طے کیا جا سکتا ہے: foreach شے کے متغیر کا نام "_item" (جیسے "foo" سے "foo_item" بن جاتا ہے) کو تبدیل کر دیا جائے گا۔');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'قابل تحریر نہیں۔');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'دوبارہ اسکین کے اختیارات');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'نیچے دیے گئے "ہاں" کے چیک باکس پر کلک کریں اور پھر رن سکین بٹن پر کلک کریں تاکہ کسی بھی مسئلے کو خود بخود حل کرنے کی کوشش کی جا سکے۔');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'مکمل نشان زد کریں۔');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'ٹیمپلیٹ ڈائرکٹری (اختیاری)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'ٹیمپلیٹ ایکسٹینشن (اختیاری)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 ایک اہم تبدیلی متعارف کراتا ہے: Smarty 4</h3>

<p>بدقسمتی سے، یہ تبدیلی ممکنہ طور پر کچھ پرانے تھیمز میں خلل ڈال سکتی ہے۔ لہذا، اپ گریڈ کے ساتھ آگے بڑھنے سے پہلے، براہ کرم یقینی بنائیں کہ آپ ان مراحل کی پیروی کرتے ہیں:

<li>کسی بھی پرانے تھیمز یا ماڈیول ٹیمپلیٹس کو چیک کرنے کے لیے preflight.php چلائیں۔</li>
<li>اگر کسی بھی مسئلے کی نشاندہی کی گئی ہے تو، اپ گریڈ کے ساتھ آگے بڑھنے سے پہلے ضروری ترمیمات کو سمجھنے کے لیے اس دستاویز سے رجوع کریں۔</li>
<li>مطلوبہ تبدیلیاں کرنے کے بعد، preflight.php کو دوبارہ چلائیں۔</li>
<li>اگر مزید مسائل نہیں ہیں، تو آپ اپ گریڈ کا عمل شروع کر سکتے ہیں۔</li>
</p>
EOT,
);
