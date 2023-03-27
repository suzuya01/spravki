<?php

require_once 'vendor/autoload.php';

$document = new \PhpOffice\PhpWord\TemplateProcessor('./review.docx');

$uploadDir =  __DIR__;
$outputFile = 'review_full.docx';

$uploadFile = $uploadDir . '\\' . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);

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


unlink($uploadFile);
unlink($outputFile);