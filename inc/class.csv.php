<?php

class CSV
{
	#- CSVファイルリスト取得
	static function get_csv_list()
	{
		if ($handle = opendir(CSV_PATH)) {
			$file_count = 0;
            while (false !== ($file = readdir($handle))) {
            	if (substr_count($file, '.csv')) {
            		$file_count++;
                	$filelist['content'][$file_count] = $file;
                }
            }
            $filelist['count'] = $file_count;
            closedir($handle);
        }
        //print_r($filelist);

    	return $filelist;
	}

	#- CSV内容取得
	static function get_csv_import($filename, $limit=null, $offset=null)
	{
		if (empty($filename)) {
			return false;
		}

		// CSVファイル処理
		$result = array();
		$fp = fopen(CSV_PATH.$filename, "r") or die("ERROR： ".CSV_PATH.$filename);
 		$line_count = 0;
		while ($row = fgetcsv($fp, 1024)) {
			$line_count++;

			if (!empty($limit) && !empty($offset)) {
				$last_line = $offset + $limit;
				if ($line_count >= $offset && $line_count < $last_line) {
					$result['content'][$line_count] = $row;
				}
			} elseif (!empty($limit)) {
				if ($line_count <= $limit) {
					$result['content'][$line_count] = $row;	
				}
			} else {
				$result['content'][$line_count] = $row;	
			}

			// encoding
			if (isset($result['content'][$line_count]) && is_array($result['content'][$line_count])) {
				foreach ($result['content'][$line_count] as $k => $value) {
					$result['content'][$line_count][$k] = mb_convert_encoding($value, "UTF-8", "SJIS");
				}
			}
		}
		$result['count'] = $line_count;
		fclose($fp);

		return $result;
	}

	#- CSVダウンロード
	static function csv_download()
	{
		//
	}

}