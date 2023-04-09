<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="src/styles/style.css">
    <link rel="stylesheet" href="./src/styles/scroll.css">
    <title>Заполение справок</title>
</head>
<body class="bg-slate-200">
    <div class="container mx-auto h-screen flex flex-col items-center justify-center">
        <div class="mb-16">
            <img src="./src/image/logo100fix4.png" alt="" width="777px">
        </div>
        <div id="block" class="absolute flex-col right-44 w-[400px] top-[215px] border py-2 rounded-lg bg-slate-200">
            <div class="flex items-center justify-center">
                <div class="flex justify-center pl-4 h-[250px]">
                        <button id="btn" class="text-2xl text-slate-500 font-semibold rounded-lg w-[120px] px-2 py-1 bg-slate-300">очистить всё</button>
                </div>
                <div class="w-[400px]">
                    <div class="flex flex-col justify-center items-center">
                        <h1 class="text-right text-slate-500 font-semibold text-lg mb-4">Уже созданные справки</h1>
                    </div>
                    <div id="BlockSpravki" class="flex justify-start items-center flex-col gap-3 h-[224px] overflow-y-auto py-1 px-2">
                        <?php
                            $dir = './spravki';
                            $files = scandir($dir);
                            foreach($files as $key => $value){
                                $path_parts = pathinfo("./$dir/$value");
                                if(count($files)<=2){                                
                                    echo '<h1 class="text-center text-slate-500 font-semibold text-sm">Пока что нет уже созданных справок</h1>';
                                    break;
                                }
                                else if($path_parts['extension'] == "docx"){
                                    echo '<a href="./spravki/'.$value.'" download="'.$value.'" id="btn" target="_blank" class="text-sm text-slate-600 font-semibold rounded-[29px] bg-slate-300 w-[200px] py-0.5 px-0.5 text-center min-h-[44px] align-middle flex items-center justify-center">'.$value.'</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>          
        </div>
        <form action="check_form.php" method="POST" enctype="multipart/form-data" class="flex flex-col w-5/12">
            <div class="flex gap-2">
                <input type="text" name="FIO" placeholder="Введите ФИО" class="rounded-lg p-1 text-lg mb-4 w-1/2" required>
                <input type="text" name="Group" placeholder="Введите группу" class="rounded-lg p-1 text-lg mb-4 w-1/2" required>
            </div>
            <div class="flex items-center gap-2 mb-4">
                <p class="text-lg text-slate-500 font-semibold">Введите дату рождения</p>
                <input type="date" name="BirthDate" class="rounded-lg p-1 text-lg w-[429px]" required>
            </div>
            <div class="flex items-center gap-2 mb-4">
                <p class="text-lg text-slate-500 font-semibold">Выберите курс:</p> 
                <select class="rounded-lg outline-none text-lg p-1 w-[500px]" name="Course" required>
                    <option disabled selected></option>  
                    <option>1</option>                 
                    <option>2</option>    
                    <option>3</option>   
                    <option>4</option>                 
                </select>
            </div>
            <div class="flex items-center gap-2 mb-4">
                <p class="text-lg text-slate-500 font-semibold">Выберите Специальность:</p>
                <select class="rounded-lg outline-none text-lg w-[409px] p-1" name="Specialization" required>
                    <option disabled selected=""></option>  
                    <option>Информационные системы и программирование</option>                 
                    <option>Правоохранительная деятельность</option> 
                    <option>Изобразительное искусство и черчение</option>   
                    <option>Музыкальное образование</option>
                    <option>Адаптивная физическая культура</option>
                    <option>Физическая культура</option>   
                    <option>Коррекционная педагогика в начальном образовании</option>
                    <option>Преподавание в начальных классах</option>    
                    <option>Дошкольное образование</option>
                    <option>Специальное дошкольное образование</option>                   
                </select>
            </div>
            <div class="flex items-center gap-2 mb-4">
                <p class="text-lg text-slate-500 font-semibold">Выберите форму обучения:</p>
                <select class="rounded-lg outline-none text-lg w-[395px] p-1" name="FormOfTraining" required>
                    <option disabled selected=""></option>  
                    <option>Очная</option>                 
                    <option>Заочная</option>                  
                </select>
            </div>
            <div class="flex items-center gap-2 mb-4"> 
                <p class="text-lg text-slate-500 font-semibold">Выберите вид платы за обучение:</p> 
                <select class="rounded-lg outline-none text-lg w-[342px] p-1" name="TuitionFees" required>
                    <option disabled selected=""></option>  
                    <option>Бюджет</option>                 
                    <option>Платно по договору</option>                  
                </select>
            </div>
            <div id="block" class="mb-4 p-1 bg-slate-300 rounded-lg h-[100px] flex items-center justify-center flex-col ">
                <p class="text-lg text-slate-500 font-bold text-center mb-2">Введите срок обучения:</p>
                <div class="flex items-center gap-2 ">
                    <div class="flex items-center gap-2">
                        <p class="text-lg text-slate-500 font-semibold">Срок обучения с</p>
                        <input type="date" name="TrainingWith" placeholder="Введите начальный год обучения" class="rounded-lg p-1 text-lg w-[145px]" required>
                    </div>
                    <div class="flex items-center gap-2">
                        <p class="text-lg text-slate-500 font-semibold">Срок обучения по</p>
                        <input type="date" name="TrainingBy" placeholder="Введите конечный год обучения" class="rounded-lg p-1 text-lg w-[145px]" required>
                    </div>
                </div>
            </div>  
            <div id="block" class="mb-4 p-1 bg-slate-300 rounded-lg h-[150px] flex items-center justify-center flex-col ">
                <div class="mb-4">
                    <div class="flex items-center gap-2 ">
                        <p class="text-lg text-slate-500 font-semibold">зачислен(а)  приказом от </p>
                        <input type="date" name="Credited" placeholder="Введите конечный год обучения" class="rounded-lg p-1 text-lg w-[400px]" required>
                    </div>  
                </div>     
                <div class="flex items-center gap-2 mb-4">
                    <input type="text" name="OrderNumber" placeholder="Введите номер приказа" class="rounded-lg p-1 text-lg w-[446px]" required>
                    <p class="text-lg text-slate-500 font-semibold">Пример: (228, 443-Б)</p>
                </div>
            </div>
            <div class="flex justify-center gap-4">
                <button onClick="setTimeout(()=>{window.location.reload()},1000);" id="btn" type="submit" class="text-lg text-slate-600 font-semibold rounded-[29px] bg-slate-300 w-[230px]">Отправить</button>
                <!-- <a href="Students.xlsx" download="Students.xlsx" id="btn" target="_blank" class="text-lg text-slate-600 font-semibold rounded-[29px] bg-slate-300 w-[230px] text-center">Скачать Excel таблицу</a> -->
            </div>
        </form>
        <footer class="text-center mt-24">
            <p class="text-xl text-slate-500 font-semibold">© 2023. разработал <a href="https://vk.com/ilililililililililililililililqp" target="_blank" class="text-green-500 hover:underline">Бешкарев Александр</a> 403 группа</p>
        </footer>
    </div>
</body>
</html>