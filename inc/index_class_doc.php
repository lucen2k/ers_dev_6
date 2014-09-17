<?php
include("class.db.php");
$version = "0.0.1";
$released = "September 12, 2014";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>ERS_Dev Class Doccument</title>
		<link href="../css/style.css" rel="stylesheet" type="text/css"/>
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/> 
	</head>
	<body>
		<div id="header">
			<h2><a href="/">ERS_Dev Class Doccument</a></h2>
			<ul>
				<li>Version: <?php echo $version;?></li>
				<li>Released: <?php echo $released;?></li>
			</ul>	
			<div class="clear"></div>
		</div>
		<div id="left">
			<h2 class="first">Table of Contents</h2>
			<ul>
				<li><a href="#table-class">Table Class</a></li>
				<li><a href="#pager-class">Pager Class</a></li>
				<li><a href="#csv-class">CSV Class</a></li>
			</ul>
		</div>
		<div id="right">

			<h2><a name="table-class">Table Class sample</a></h2>
			<p>Controller</p>
			<?php

echo '<pre>', highlight_string('<?php
# list 取得
$set->result = $db->select("list");

', true), '</pre>';
			?>
			<p>View</p>
			<?php

echo '<pre>', highlight_string('
<!-- Table自動表示 -->
<?php echo $tbl->view($set->list); ?>

', true), '</pre>';
			?>

			<h2><a name="pager-class">Pager Class</a></h2>
			<p>Controller</p>
			<?php

echo '<pre>', highlight_string('<?php
# Example of use: 
$sql = "SELECT * FROM list where 1"; 
$pager = new Pager($sql, PAGER_LIMIT);

# list 取得
$set->list = $db->pager($pager);

# paging
$set->pager = $pager->show();

', true), '</pre>';
			?>

			<h2><a name="csv-class">CSV Class</a></h2>
			<p>Controller</p>
			<?php
echo '<pre>', highlight_string('<?php
# CSVファイルリスト取得
$set->csv_file = CSV::get_csv_list();

debug::
Array
(
    [content] => Array
        (
            [1] => sample.csv
        )
    [count] => 1
)
', true), '</pre>';
			?>

			<?php
echo '<pre>', highlight_string('<?php
# CSV内容取得：全部取得の場合
$set->csv_import = CSV::get_csv_import($csv_file[\'content\'][1]);

debug::
Array
(
    [content] => Array
        (
            [11] => Array
                (
                    [0] => 10
                    [1] => 斉藤
                    [2] => 090-1111-2222
                    [3] => 東京都千代田区
                    [4] => 2014/5/23
                )
            [12] => Array　[...]
        )
    [count] => 16
)

# CSV内容取得：最初から5行取得の場合
$set->csv_import = CSV::get_csv_import($csv_file[\'content\'][1], 5);

# CSV内容取得：10行目から5行取得の場合
$set->csv_import = CSV::get_csv_import($csv_file[\'content\'][1], 5, 10);

', true), '</pre>';
			?>

			<p>View</p>
			<?php
echo '<pre>', highlight_string('<?php
# CSVファイルのリスト表示
<h3>CSV File list</h3>

ファイル数：<?php echo $set->csv_file[\'count\']; ?>
<table class="lucen">
<?php foreach ($set->csv_file[\'content\'] as $no => $filename): ?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $filename; ?></td>
	</tr>
<?php endforeach; ?>
</table>
', true), '</pre>';
			?>

			<?php
echo '<pre>', highlight_string('<?php
# CSVファイルの内容表示
<h3><?php echo $set->csv_file[\'content\'][1]; ?></h3>

行数：<?php echo $set->csv_import[\'count\']; ?>
<?php echo $tbl->view($set->csv_import[\'content\']); ?>

', true), '</pre>';
			?>

		</div>	
		<div class="clear"></div>	
	</body>
</html>	
