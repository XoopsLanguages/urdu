xoopseditor XOOPS کے لیے ایڈیٹرز کا ایک مجموعہ فراہم کرتا ہے۔

صارف گائیڈ:

1 فائلز xoops_version.php کو /xoopseditor/ کے تحت چیک کریں تاکہ یہ یقینی بنایا جا سکے کہ یہ آپ کی موجودہ فائلوں سے نئی ہے۔

2 اپ لوڈ کریں /xoopseditor/ پر /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 ترجیحات ترتیب دیں جہاں قابل اطلاق ہوں۔
3.1 ./dhtmlext(تمام ایڈیٹرز)/language/: انگریزی.php کی بنیاد پر اپنی مقامی زبان کی فائل بنائیں
3.3 ./dhtmlext(all editors)/editor_registry.php: ایڈیٹر کے لیے ترتیب ترتیب دیں: آرڈر - ایڈیٹر کا انتخاب استعمال ہونے کی صورت میں ڈسپلے آرڈر، 0 غیر فعال کرنے کے لیے؛ nohtml - غیر html نحو کے لیے کام کرتا ہے۔
3.3 ./FCKeditor/module/: فائلوں کو ماڈیول کے فولڈرز میں کاپی کریں اگر ماڈیول مخصوص اپ لوڈ کی اجازت، اسٹوریج اور ایڈیٹر کے اختیارات درکار ہوں
3.3.1 ./FCKeditor/module/fckeditor.config.js: ایڈیٹر کے اختیارات کے لیے، آپ کو عام طور پر اسے تبدیل کرنے کی ضرورت نہیں ہوتی ہے۔
3.3.2 ./FCKeditor/module/fckeditor.connector.php: فائل براؤزنگ (اور اسٹوریج اپ لوڈ کرنے) کے لیے فولڈر کی وضاحت کرنے کے لیے => XOOPS/uploads/XOOPS_FCK_FOLDER/، فولڈر کو دستی طور پر تخلیق کرنے کی ضرورت ہے۔
3.3.3 ./FCKeditor/module/fckeditor.upload.php: اپ لوڈ کرنے کی اجازت اور اسٹوریج اپ لوڈ کرنے کی وضاحت کریں
3.4 XOOPS/uploads/fckeditor/: فولڈر بنانے کے لیے اگر FCKeditor فعال ہے، اپ لوڈ کے لیے استعمال کیا جاتا ہے جہاں سے اپ لوڈ فولڈر کی وضاحت نہیں کی گئی ہے۔
3.5 ./tinymce/tinymce/jscripts/: اپنی مقامی زبان کی فائلیں http://tinymce.moxiecode.com/language.php سے ڈاؤن لوڈ کریں۔

4 فائل کے ناموں کو چیک کریں: فائل نام کیس کے حساس نظام کے لیے، یقینی بنائیں کہ آپ کے پاس فائل کے نام لفظی طور پر درست ہیں، یعنی "FCKeditor" "fckeditor" سے مماثل نہیں ہے۔

5 ڈیولپمنٹ گائیڈ کے لیے /xoopseditor/sampleform.inc.php چیک کریں
