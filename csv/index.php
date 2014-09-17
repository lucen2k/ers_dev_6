<?php
#- default include
include(__DIR__.'/../inc/default.inc.php');

#- Html header
$title = 'CSV import';
html_header($title);


#- Controller =======================================================

# CSVファイルリスト取得
$set->csv_file = CSV::get_csv_list();
//debug($set->csv_file);　exit;

# 最初（1番目）ファイルの11行(offset)から5行(limit)取得
$set->csv_import = CSV::get_csv_import($csv_file['content'][1], 5, 11);
//debug($set->csv_import);　exit;




#- View =============================================================
view('csv/index', $set);



#- Function =========================================================