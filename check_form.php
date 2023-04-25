<?php

//------------Добавляем autoload.php------------\\  
require_once 'vendor/autoload.php';


//------------Создаем обращение к файлу(шаблону) spravka.docx------------\\  
$document = new \PhpOffice\PhpWord\TemplateProcessor('./spravka.docx');

//------------Передача данных в переменную методом POST------------\\   
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

//------------Массив для написания месяца по русски, работает только с датой создания справки------------\\  
$arr = [
    'января',
    'февраля',
    'марта',
    'апреля',
    'мая',
    'июня',
    'июля',
    'августа',
    'сентября',
    'октября',
    'ноября',
    'декабря'
]; 
$month = date('n')-1;

//------------Работа с датой и Конвертация даты в нормальный вид------------\\
$THISDATE = date('« d » '.$arr[$month].' o');                   
$BirthDate = date('d.m.o', strtotime($BirthDate));
$TrainingWith = date('d.m.o', strtotime($TrainingWith));
$TrainingBy = date('d.m.o', strtotime($TrainingBy));                  
$Credited = date('d.m.o', strtotime($Credited));


//------------Заполнения документа данными из формы------------\\
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
