<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

namespace controllers;


class TestController extends AppController
{

  public function test()
  {


    $user = $this->container->sentinel::getUser();



    echo (extension_loaded('openssl') ? 'SSL loaded' : 'SSL not loaded') . "\n";

    // $userObj =  $this->container->sentinel::findByCredentials($credentials);

    // //объект связанный с таблицей persistences.
    // $persistencesObj  = $userObj->persistences();
    // //возвращает совпадения usera у которого кука связанна с сессией, и id сессии записан в базу
    // $result = $persistencesObj->getResults();

    // //проверяет есть ли совпадения или нет
    // if($result->isEmpty()){
    // 	//если нет совпадений - то делаем аутентификацию и создается новая сессия
    // 	echo'Пуста';

    // }else{
    // 	//если есть совпадения - то
    // 	//удаляем все сессии этого пользователя в базе
    // 	//$result = \Cartalyst\Sentinel\Persistences\EloquentPersistence::where('user_id', $userObj->id);
    // 	$result = \Cartalyst\Sentinel\Persistences\EloquentPersistence::where('user_id', $userObj->id)->delete();
    // 	debug($result);
    // 	//создаем новую сессию
    // 	echo 'Не пуста';
    // }


    //$result = \Cartalyst\Sentinel\Persistences\EloquentPersistence::all();

    //$result = \Cartalyst\Sentinel\Persistences\EloquentPersistence::where('user_id', 1);

    // foreach ($persistencesObj as $tableRow) {

    // 	echo '<br>' . $tableRow['user_id'] . '</br>' ;

    // }

    //\debug($result);

    return $this->container->view->render($this->response, 'test.php', []);
    //return $response->withRedirect('/registration', 301);
  }


  public function mail()
  {

    $objMail = $this->container->mail;

    //debug($objMail->getMail());;

    $objMail->sendPost();

    return $this->container->view->render($this->response, 'test.php', []);
  }


  //загрузка данных из кладр с помощью JS через форму
  public function tocladrform()
  {

    $postData = file_get_contents('php://input');
    //раскодирую json в массив

    $data = json_decode($postData, true);

    //запрос к кладру
    $result = $this->TestReqToKladr($data);

    header("Content-Type: application/json; charset=UTF-8");

    //$result = json_encode($result);

    echo $result;

    exit;


    //это по идее не нужно
    //return $this->container->view->render($this->response, 'cladrform.php', []);

  }

  //запросы к АПИ кладр вынести в отдельный класс
  //тут тестовый метод

  public function TestReqToKladr($content)
  {

    $get_query = [
      'token' => 'htEEFRNHAFZA5seH3N7ZHdReQSthZasG',
      'withParent' => 1
    ];

    //смерджить массив
    $result_query = array_merge($get_query, $content);

    $query_string = http_build_query($result_query);
    //возвращает JSON
    $info = file_get_contents('https://kladr-api.ru/api.php?' . $query_string);

    return $info;
  }


  /**
   * Получает входящие JSON данные и пишет их в файл
   * дополнительно неисправный скрипт  - считывание диапазонов строк из входящих данных - доработать
   * @param string $msg string to output
   * @return string unchanged
   */

  public function writeToFile()
  {

    //доработать скрипт по выборке диапазонов из строки

    //$postData = file_get_contents('php://input');

    $test = "Lorem ipsumdolorsitamconse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum!";

    $fileCursor = \fopen($_SERVER['DOCUMENT_ROOT'] . '/files/test.txt', 'w');

    $strLength = strlen($test);

    $str = '';

    $diapaz = 50;

    for ($j = 0; $j < $strLength; $j++) {

      $new_diapaz = $strLength - $j;
      //тут проблема - послдение диапазоны становятся все меньше.
      if ($new_diapaz < $diapaz) {
        $diapaz = $new_diapaz;
      }

      //тут в один пакет собираю строку длинной 50
      if (strlen($str) < $diapaz) {
        $str .= $test[$j];
      } else {
        echo $str . ' ---длина строки--- ' . strlen($str) . "<br>";
        fwrite($fileCursor, $str);
        $str = '';
      }
    }

    fclose($fileCursor);
    exit;
  }


  /**
   * Метод обрабатывающий? запрос на поиск в массиве option по двум символам 
   * просто возвращает шаблон
   * @param string $msg string to output
   * @return string unchanged
   */
  public function searchByLetters()
  {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      //$postData = file_get_contents('php://input');

      $result = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/files/JSONtest.txt');

      \header('Content-Type: application/json; charset=UTF-8');

      echo $result;

      exit;
    }

    //прочиать страницу с JSON
    return $this->container->view->render($this->response, '/test/searchByLetters.html', []);
  }

  //метод обрабатывающий загрузку файлов от пользователя
  public function testsendfile()
  {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      //$result = file_get_contents('php://input');

      $dir = $_SERVER['DOCUMENT_ROOT'] . '/uploads';

      //цикл который сохранит каждый файл в директорию
      //имя директории
      $UserDir = $_SESSION['cartalyst_sentinel'];

      foreach ($_FILES as $value) {

        if (!empty($value['error'])) {
          print_r($value['error']);
          continue;
        }

        if ($value['size'] > 200000) {
          die('error');
        }

        $fileName =  hash('crc32', time()) . '.txt';

        $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/upload/' . $fileName . '/' . $value['file']['name'];

        move_uploaded_file(
          $value['tmp_name'],
          $uploadDir
        );
      }

      exit;
    }

    return $this->container->view->render($this->response, '/test/sendfile.html', []);
  }


  //поиск по  КЛАДР улиц по их id
  public function searchAdress()
  {

    //получить данные из файла
    $result = $this->readFileWithKladrId();

    foreach ($result as $value) {

      $get_query = [
        'token' => 'htEEFRNHAFZA5seH3N7ZHdReQSthZasG',
        //'withParent' => 1
        'streetId' => $value, 
        'contentType' => 'street',
      ];

      $query_string = http_build_query($get_query);
      //возвращает JSON
      $info = file_get_contents('https://kladr-api.ru/api.php?' . $query_string);

      $result = json_decode($info);

      if (empty($result->result)) {
        $result_str = $result->searchContext->streetId . ';;;;;;' . PHP_EOL;
        file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/uploads/data_from_kladr.txt', $result_str, FILE_APPEND);
        continue;
      }

      $result = $result->result[0];

      //$result_str = ' Идентификатор улицы:' . $result->id . ' Тип улицы:' . $result->type . ' Название улицы:' . $result->name . ' Почтовый индекс:' . $result->zip . PHP_EOL ;

      $result_str =  $result->id . ';' . $result->typeShort . ';' . $result->name . ';' . $result->zip . ';' . $result->okato . ';' . $result->ifnsfl . ';' .  PHP_EOL;

      file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/uploads/data_from_kladr.txt', $result_str, FILE_APPEND);
    }

    return $this->container->view->render($this->response, '/test/searchAdress.html', []);
  }


  
  public function readFileWithKladrId()
  {


    //$file = fopen('/loadfile/поиск по кладр.txt', 'r' );

    $result = file($_SERVER['DOCUMENT_ROOT'] . '/loadfile/поиск по кладр.txt', FILE_IGNORE_NEW_LINES);

    return $result;
  }
}
