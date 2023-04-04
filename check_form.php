<?php
require_once 'vendor/autoload.php';

$document = new \PhpOffice\PhpWord\TemplateProcessor('./review.docx');

$THISDATE = date('« j » m l o');
$FIO = $_POST['FIO'];
$Specialization = $_POST['Specialization'];
$Course = $_POST['Course'];
$Group = $_POST['Group'];
$FormOfTraining = $_POST['FormOfTraining'];
$TuitionFees = $_POST['TuitionFees'];
$OrderNumber = $_POST['OrderNumber'];
$BirthDate = $_POST['BirthDate'];
$TrainingWith = $_POST['TrainingWith'];
$TrainingBy = $_POST['TrainingBy'];
$Credited = $_POST['Credited'];

$document->setValue('THISDATE', $THISDATE);
$document->setValue('FIO', $FIO);
$document->setValue('Specialization', $Specialization);
$document->setValue('Course', $Course);
$document->setValue('Group', $Group);
$document->setValue('FormOfTraining', $FormOfTraining);
$document->setValue('BirthDate', $BirthDate);
$document->setValue('TuitionFees', $TuitionFees);
$document->setValue('OrderNumber', $OrderNumber);
$document->setValue('TrainingWith', $TrainingWith);
$document->setValue('TrainingBy', $TrainingBy);
$document->setValue('Credited', $Credited);


$outputFile = trim("$FIO$Group.docx");
// $document->saveAs("./spravki/$outputFile");
$document->saveAs($outputFile);


// Имя скачиваемого файла
$downloadFile = $outputFile;

// Контент-тип означающий скачивание
header("Content-Type: application/octet-stream");

// Размер в байтах
header("Accept-Ranges: bytes");

// Размер файла
header("Content-Length: ".filesize($downloadFile));

// Расположение скачиваемого файла
header("Content-Disposition: attachment; filename=".$downloadFile);

// Прочитать файл
readfile($downloadFile);


// unlink($outputFile); // Удаление файла


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$activeWorksheet = $spreadsheet->getActiveSheet();
$activeWorksheet->setCellValue('A1', 'ФИО');
$activeWorksheet->setCellValue('B1', 'Дата рождения');
$activeWorksheet->setCellValue('C1', 'Курс');
$activeWorksheet->setCellValue('D1', 'Группа');
$activeWorksheet->setCellValue('E1', 'Специальность');
$activeWorksheet->setCellValue('F1', 'Форма обучения');
$activeWorksheet->setCellValue('G1', 'Вид платы за обучение');
$activeWorksheet->setCellValue('H1', 'Срок обучение с');
$activeWorksheet->setCellValue('I1', 'Срок обучения по');
$activeWorksheet->setCellValue('J1', 'Зачислени приказом от');
$activeWorksheet->setCellValue('K1', 'Номер приказа');


$writer = new Xlsx($spreadsheet);
$writer->save('Students.xlsx');
?>