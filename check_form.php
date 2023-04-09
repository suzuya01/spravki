<?php

//------------Добавляем autoload.php------------\\  
require_once 'vendor/autoload.php';


//------------Создаем обращение к файлу(шаблону) review.docx------------\\  
$document = new \PhpOffice\PhpWord\TemplateProcessor('./spravka.docx');


//------------Передача данных в переменную методом POST------------\\   
$FIO = $_POST['FIO'];
$Specialization = $_POST['Specialization'];
$Course = $_POST['Course'];
$Group = $_POST['Group'];
$FormOfTraining = $_POST['FormOfTraining'];
$TuitionFees = $_POST['TuitionFees'];
$OrderNumber = $_POST['OrderNumber'];
$OldBirthDate = $_POST['BirthDate'];
$OldTrainingWith = $_POST['TrainingWith'];
$OldTrainingBy = $_POST['TrainingBy'];
$OldCredited = $_POST['Credited'];


//------------Работа с датой и Конвертация даты в нормальный вид------------\\
$THISDATE = date('« d » F o');                   
$NewBirthDate = date('« d » F o', strtotime($OldBirthDate));
$NewTrainingWith = date('« d » F o', strtotime($OldTrainingWith));
$NewTrainingBy = date('« d » F o', strtotime($OldTrainingBy));                  
$NewCredited = date('« d » F o', strtotime($OldCredited));


//------------Заполнения документа данными из формы------------\\
$document->setValue('THISDATE', $THISDATE);
$document->setValue('FIO', $FIO);
$document->setValue('Specialization', $Specialization);
$document->setValue('Course', $Course);
$document->setValue('Group', $Group);
$document->setValue('FormOfTraining', $FormOfTraining);
$document->setValue('BirthDate', $NewBirthDate);
$document->setValue('TuitionFees', $TuitionFees);
$document->setValue('OrderNumber', $OrderNumber);
$document->setValue('TrainingWith', $NewTrainingWith);
$document->setValue('TrainingBy', $NewTrainingBy);
$document->setValue('Credited', $NewCredited);


//-----------------------------------------Обычная загрузка файла-----------------------------------------\\
//------------Здесь мы задаем название файла который загружается к нам в директорию------------\\
$outputFile = "$FIO $Group.docx";
$document->saveAs("./spravki/$outputFile");
// //------------Имя скачиваемого файла------------\\
$downloadFile = "./spravki/$outputFile";
// //------------Контент-тип означающий скачивание------------\\
header("Content-Type: application/octet-stream");
// //------------Размер в байтах------------\\
header("Accept-Ranges: bytes");
// //------------Размер файла------------\\
header("Content-Length: ".filesize($downloadFile));
// //------------Расположение скачиваемого файла------------\\
header("Content-Disposition: attachment; filename=".$outputFile);
// //------------Прочитать файл------------\\
readfile($downloadFile);

header("Refresh: 1");

// use PhpOffice\PhpSpreadsheet\Spreadsheet;
// use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// $spreadsheet = new Spreadsheet();
// $activeWorksheet = $spreadsheet->getActiveSheet();
// $activeWorksheet->setCellValue('A1', 'ФИО');
// $activeWorksheet->setCellValue('B1', 'Дата рождения');
// $activeWorksheet->setCellValue('C1', 'Курс');
// $activeWorksheet->setCellValue('D1', 'Группа');
// $activeWorksheet->setCellValue('E1', 'Специальность');
// $activeWorksheet->setCellValue('F1', 'Форма обучения');
// $activeWorksheet->setCellValue('G1', 'Вид платы за обучение');
// $activeWorksheet->setCellValue('H1', 'Срок обучение с');
// $activeWorksheet->setCellValue('I1', 'Срок обучения по');
// $activeWorksheet->setCellValue('J1', 'Зачислени приказом от');
// $activeWorksheet->setCellValue('K1', 'Номер приказа');


// $writer = new Xlsx($spreadsheet);
// $writer->save('Students.xlsx');
?>