<?php
#- default include
include(__DIR__.'/../inc/default.inc.php');

#- Html header
$title = 'CSV import';
html_header($title);


#- Controller =======================================================

$csv_file_list = CSV::get_csv_list();
//debug($csv_file_list);

$csv_import = CSV::get_csv_import($csv_file_list['content'][1], 5, 11);
//debug($csv_import);
$set->csv_import = $csv_import;




#- View =============================================================
view('csv/index', $set);



#- Function =========================================================