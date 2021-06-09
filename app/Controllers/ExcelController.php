<?php
# composer require phpoffice/phpspreadsheet

namespace App\Controllers;

use \PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\writer\Xlsx;


class ExcelController extends BaseController
{
	function read()
	{
		if( ! empty($_GET['file_name']))
		{
			$file_path = '/var/www/html/front/file/excel/'.$_GET['file_name'];

			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		
			$spread = $reader->load($file_path);

			$sheet = $spread->getActiveSheet();
			// $sheet = $spread->getSheet(0);

			$cntRow = $sheet->getHighestDataRow();
			$lastCol = $sheet->getHighestColumn();

			for($row=1; $row<=$cntRow; $row++)
			{
				foreach(range('A', $lastCol) as $col)
				{
					$value = $sheet->getCell($col.$row)->getValue();

					if( ! empty($value))
					{
						if($row !== 1)
						{
							$data[$row][$col_name[$col]] = $value;
						}
						else
						{
							$col_name[$col] = $value;
						}
					}
				}
			}

			if(isset($data))
			{
				echo '<pre>'.print_r($data, true).'</pre>';
			}
		}
	}

	function download($data, $title)
	{
		/*
		$folder_path = '/var/www/html/front/file/';
		$file_name = $title.'_'.date('Ymd').'.xlsx';

		$file_path = $folder_path.$file_name;

		$spread = new Spreadsheet();

		$sheet = $spread->getActiveSheet();
		$cntRow = count($data);
		for($row='A'; $row<=$cntRow; $row++)
		{
			$cntCol = count($data[$row]);
			for($col=1; $col<=$cntCol; $col++)
			{
				$sheet->setCellValue($col.$row, $data[$row][$col]);
			}
		}

		$writer = new Xlsx($spread);
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$file_name.'"');
		header('Cache-Control: max-age=0');
		$writer->save('php://output');
		*/
	}

	function wordRead()
	{
		exit;
		
		$file_name = '/var/www/html/front/file/excel/word.xlsx';
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		
		$spread = $reader->load($file_name);

		$sheet = $spread->getActiveSheet();
		// $sheet = $spread->getSheet(0);

		$cntRow = $sheet->getHighestDataRow();
		$lastCol = $sheet->getHighestColumn();

		$db = db_connect();
		$wordModel = model('App\Models\WordModel');
		$wordContentModel = model('App\Models\WordContentModel');
		for($row=1; $row<=$cntRow; $row++)
		{
			foreach(range('A', $lastCol) as $col)
			{
				$value = $sheet->getCell($col.$row)->getValue();

				if(!empty($value))
				{
					if($row !== 1)
					{
						$data[$col_name[$col]] = $value;
					}
					else
					{
						$col_name[$col] = $value;
					}
				}
			}

			if(isset($data))
			{
				$data['status'] = 'Y';
                $data['stime'] = date('Y-m-d H:i:s');

				$sql = "SELECT idx FROM word WHERE status='Y' ";
				if(!empty($data['hangul'])) { $sql.= " AND hangul='".$data['hangul']."' "; }
				if(!empty($data['english'])) { $sql.= " AND english='".$data['english']."' "; }
				if(!empty($data['abbreviation'])) { $sql.= " AND abbreviation='".$data['abbreviation']."' "; }
				$query = $db->query($sql);
				$word = $query->getResult();

				echo $db->getLastQuery();
				if(empty($word[0]))
				{
                    $data['summary'] = $data['content'];

					$wordModel->insert($data);
					echo 'word<br>';
				}
				else
				{
					$data['word_idx'] = $word[0]->idx;
					$wordContentModel->insert($data);
					echo 'word_content<br>';
				}
				unset($data);
			}
		}

		if(isset($data))
		{
			echo '<pre>'.print_r($data, true).'</pre>';
		}
	}
}
?>