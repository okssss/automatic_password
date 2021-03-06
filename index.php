// Устанавливаем параметры и генерируем пароль
// $length - длина пароля, $strength - сила пароля
function generatePassword($length=9, $strength=8) {
 $vowels = 'aeuy';
 $consonants = 'bdghjmnpqrstvz';
 if ($strength >= 1) {
 $consonants .= 'BDGHJLMNPQRSTVWXZ';
 }
 if ($strength >= 2) {
 $vowels .= "AEUY";
 }
 if ($strength >= 4) {
 $consonants .= '23456789';
 }
 if ($strength >= 8 ) {
 $vowels .= '@#$%';
 }
 // Генерируем пароль
 $password = '';
 $alt = time() % 2;
 for ($i = 0; $i < $length; $i++) {
 if ($alt == 1) {
 $password .= $consonants[(rand() % strlen($consonants))];
 $alt = 0;
 } else {
 $password .= $vowels[(rand() % strlen($vowels))];
 $alt = 1;
 }
 }
 return $password;
}
echo generatePassword();