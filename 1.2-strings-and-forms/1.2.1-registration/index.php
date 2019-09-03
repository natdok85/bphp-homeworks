<?php
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];
$code = $_POST['code'];
$codeWord = 'word123';



// if(preg_match('/[^a-zA-Z0-9]/', $login)) {
//     echo 'логин не должен содержать символы @/*?,;:.';       
// } elseif(strlen($password) < 8) {
//     echo 'пароль должен быть не меньше 8 символов';       
// } elseif(!preg_match('/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/', $email)) {
//     echo 'email введен неправильно';
// } elseif($firstName = ' ') {
//     echo 'введите имя';    
// } elseif($lastName = ' ') {
//     echo 'введите фамилию';
// } elseif($middleName = ' ') {
//     echo 'введите отчество';
// } elseif(strcmp($code, $codeWord) !== 0) {
//     echo 'введено неверное кодовое слово';
// }

if(preg_match('/[^a-zA-Z0-9]/', $login)) {
    echo 'логин не должен содержать символы @/*?,;:. <br>'; 
    goto a;
};
a:    
if(strlen($password) < 8) {
    echo 'пароль должен быть не меньше 8 символов <br>';
    goto b;
};
b:   
if(!preg_match('/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/', $email)) {
    echo 'email введен неправильно <br>';
    goto c;
};
c:   
if($firstName = ' ') {
    echo 'введите имя <br>';
    goto d;
};
if($lastName = ' ') {
    echo 'введите фамилию <br>';
    goto d;
};
d:   
if($middleName = ' ') {
    echo 'введите отчество <br>';
    goto e;
};
e:  
if(strcmp($code, $codeWord) !== 0) {
    echo 'введено неверное кодовое слово';
}



