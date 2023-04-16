<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="src/styles/style.css">
    <link rel="shortcut icon" href="./src/image/favicon.ico" type="image/x-icon">
    <title>Заполение справок</title>
</head>
<body class="bg-slate-200">
    <div class="flex justify-center mb-14 max-[768px]:mb-none">
        <img src="./src/image/logo100fix4.png" alt="" width="777px">
    </div>
    <div class="container mx-auto h-4/5 flex items-center justify-center gap-4 max-[768px]:flex-col py-4 text-lg">
        <div id="left_side" class="w-1/2  max-[592px]:w-full px-3">
            <form action="check_form.php" method="POST" enctype="multipart/form-data" class="flex flex-col">
                <div class="flex gap-2 max-[592px]:flex-col">
                    <input type="text" name="FIO" placeholder="Введите ФИО" class="rounded-lg p-1 mb-4 w-1/2 max-[592px]:w-full" required>
                    <input type="text" name="Group" placeholder="Введите группу" class="rounded-lg p-1 mb-4 w-1/2 max-[592px]:w-full" required>
                </div>
                <div class="flex items-center gap-2 mb-4 max-[592px]:flex-col">
                    <p class="text-slate-500 font-semibold w-1/3 max-[592px]:w-full">Введите дату рождения</p>
                    <input type="date" name="BirthDate" class="rounded-lg p-1 w-2/3 max-[592px]:w-full" required>
                </div>
                <div class="flex items-center gap-2 mb-4 max-[592px]:flex-col">
                    <p class="text-slate-500 font-semibold w-1/3 max-[592px]:w-full">Выберите курс:</p> 
                    <select class="rounded-lg outline-none p-1 w-2/3 max-[592px]:w-full" name="Course" required>
                        <option disabled selected></option>  
                        <option>1</option>                 
                        <option>2</option>    
                        <option>3</option>   
                        <option>4</option>                 
                    </select>
                </div>
                <div class="flex items-center gap-2 mb-4 max-[592px]:flex-col">
                    <p class="text-slate-500 font-semibold w-1/3 max-[592px]:w-full">Выберите Специальность:</p>
                    <select class="rounded-lg outline-none w-2/3 p-1 max-[592px]:w-full" name="Specialization" required>
                        <option disabled selected=""></option>  
                        <option>09.02.07 Информационные системы и программирование</option>                 
                        <option>40.02.02 Правоохранительная деятельность</option> 
                        <option>44.02.01 Дошкольное образование</option>
                        <option>44.02.02 Преподавание в начальных классах</option>    
                        <option>44.02.04 Специальное дошкольное образование</option>                   
                        <option>44.02.05 Коррекционная педагогика в начальном образовании</option>
                        <option>49.02.01 Физическая культура</option>   
                        <option>49.02.02 Адаптивная физическая культура</option>
                        <option>53.02.01 Музыкальное образование</option>
                        <option>54.02.06 Изобразительное искусство и черчение</option>   
                    </select>
                </div>
                <div class="flex items-center gap-2 mb-4 max-[592px]:flex-col">
                    <p class="text-slate-500 font-semibold w-1/3 max-[592px]:w-full">Выберите форму обучения:</p>
                    <select class="rounded-lg outline-none w-2/3 p-1 max-[592px]:w-full" name="FormOfTraining" required>
                        <option disabled selected=""></option>  
                        <option>Очная</option>                 
                        <option>Заочная</option>                  
                    </select>
                </div>
                <div class="flex items-center gap-2 mb-4 max-[592px]:flex-col"> 
                    <p class="text-slate-500 font-semibold w-2/5 max-[592px]:w-full">Выберите вид платы за обучение:</p> 
                    <select class="rounded-lg outline-none w-3/5 p-1 max-[592px]:w-full" name="TuitionFees" required>
                        <option disabled selected=""></option>  
                        <option>Бюджет</option>                 
                        <option>Платно по договору</option>                  
                    </select>
                </div>
                <div id="block" class="mb-4 p-2 bg-slate-300 rounded-lg flex items-center justify-center flex-col">
                    <p class="text-slate-500 font-bold text-center mb-2">Введите срок обучения:</p>
                    <div class="flex items-center gap-2 max-[768px]:gap-8 w-full max-[592px]:flex-col p-2">
                        <div class="flex items-center gap-2 max-[768px]:flex-col w-1/2 max-[768px]:w-full">
                            <p class="text-slate-500 font-semibold w-2/5 max-[768px]:w-full">Срок обучения с</p>
                            <input type="date" name="TrainingWith" placeholder="Введите начальный год обучения" class="rounded-lg p-1 w-3/5 max-[768px]:w-full" required>
                        </div>
                        <div class="flex items-center gap-2 max-[768px]:flex-col w-1/2 max-[768px]:w-full">
                            <p class="text-slate-500 font-semibold w-2/5 max-[768px]:w-full">Срок обучения по</p>
                            <input type="date" name="TrainingBy" placeholder="Введите конечный год обучения" class="rounded-lg p-1 w-3/5 max-[768px]:w-full" required>
                        </div>
                    </div>
                </div>  
                <div id="block" class="mb-4 p-2 bg-slate-300 rounded-lg flex items-center justify-center flex-col">
                    <div class="flex items-center gap-2 max-[768px]:flex-col w-full mb-2">
                        <p class="text-slate-500 font-semibold w-2/5 max-[768px]:w-full">зачислен(а)  приказом от </p>
                        <input type="date" name="Credited" placeholder="Введите конечный год обучения" class="rounded-lg p-1 w-3/5 max-[768px]:w-full" required>
                    </div>       
                    <div class="flex items-center gap-2 max-[768px]:flex-col w-full max-[768px]:w-full">
                        <input type="text" name="OrderNumber" placeholder="Введите номер приказа" class="rounded-lg p-1 w-full" required>
                        <p class="text-slate-500 font-semibold">Пример: (228, 443-Б)</p>
                    </div>
                </div>
                <div class="flex justify-center gap-4">
                    <button onClick="setTimeout(()=>{window.location.reload()},1000);" id="btn" type="submit" class="text-slate-600 font-semibold rounded-[29px] bg-slate-300 w-[230px]">Отправить</button>
                </div>
            </form>
        </div>
        <div id="right_side">
            <div id="block" class="flex-col w-5/6 border py-2 rounded-lg bg-slate-200 max-[592px]:w-full">
                <div class="flex items-center justify-center w-full gap-3">
                    <form action="delet.php" method="post" class="flex justify-center pl-4 h-[200px]" >
                        <button id="btn" class="text-2xl text-slate-500 font-semibold rounded-lg w-[120px] px-2 py-1 bg-slate-300" name="delet">очистить всё</button>
                    </form>
                    <div>
                        <div class="flex flex-col justify-center items-center">
                            <h1 class="text-center text-slate-500 font-semibold mb-4">Cозданные справки</h1>
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
                                        echo '<a href="./spravki/'.$value.'" download="'.$value.'" id="btn" target="_blank" class="text-sm text-slate-600 font-semibold rounded-[29px] bg-slate-300 w-full py-0.5 px-0.5 text-center min-h-[44px] align-middle flex items-center justify-center">'.$value.'</a>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <footer class="text-center mt-24">
            <p class="text-xl text-slate-500 font-semibold">© 2023. разработал <a href="https://vk.com/ilililililililililililililililqp" target="_blank" class="text-green-500 hover:underline">Бешкарев Александр</a> 403 группа</p>
        </footer>
</body>
</html>