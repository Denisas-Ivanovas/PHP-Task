
<!-- 1. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Atspausdinti juos į ekraną. -->

<?php
echo '<hr>';

for($i=0;$i<4;$i++){ 
    $num = rand(0,100);
    print $num.',';
}

// <!-- 2. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Išvesti juos į ekraną. Visus
// nelyginius skaičius padidinti dvigubai. Išvesti visus skaičius į ekraną. -->

echo '<hr>';
$sum = 0;
for($i=0;$i<4;$i++){ 
    $num = rand(0,100);
    print $num.',';

    if ($num%2 !==0){
       $sum = $num * 2;
    }
    echo $sum. ',';
}

// 3. Sugeneruoti atsitiktinį skaičių nuo 1 iki 7. Atitinkamai pagal skaičių parašyti kokia tai
// savaitės diena.

echo '<hr>';
$random = rand(1,7);
echo $random;
echo '<hr>';
if ($random ==1){
 echo 'pirmadinis'; 
    } elseif($random == 2){
 echo 'antradienis';
    } elseif($random == 3){
 echo 'treciadienis';
    } elseif($random == 4){
 echo 'ketvirtadienis';
    } elseif($random==5){
echo 'penktadienis';
    } elseif($random==6){
echo 'sestadienis';
    } else{
echo 'sekmadienis';
    }

//     4. Trečią uždavinį perdaryti taip, kad rodytų, kokia tai savaitės diena (1-5 – darbo diena, 6-7
// – savaitgalis).

echo '<hr>';
$random = rand(1,7);
echo $random;
echo '<hr>';
if ($random <=5){
 echo 'darbo diena'; 
    } else{
echo 'savaitgalis';
    }

//     5. Sugeneruoti keturis atsitiktinius skaičius nuo 0 iki 100. Skaičiai dalūs iš 3 turi būti
// atvaizduoti žaliai, turintys dalybos iš trijų liekaną vienetą – geltonai, turintys dalybos iš
// trijų liekaną dvejetą – raudonai.

echo '<hr>';

for($i=0;$i<4;$i++){ 
    $num = rand(0,100);
    
    if ($num%3 == 0){
        echo "<span style=\"color: green;\">$num</span>";
    } elseif($num%3 == 1){
        echo "<span style=\"color: yellow;\">$num</span>";
    } elseif ($num%3 == 2){
        echo "<span style=\"color: red;\">$num</span>";
    }
}
   
// 6. Išvesti į ekraną skaičius nuo 0 iki 100.
echo '<hr>';

for($i=0;$i<=100;$i++){ 
    print $i.',';
}

// 7. Išvesti į ekraną visus lyginius skaičius nuo 0 iki 200.
echo '<hr>';
for($j=2;$j<=200; $j = $j+2){ 
    
    print $j.',';
}

// 8. Septinto uždavinio sąlygoje atspausdintus skaičius „pataisyti“, kad dalūs iš 6 būtų
// atvaizduoti mėlynai.

echo '<hr>';
for($j=2;$j<=200; $j = $j+2){

    if($j%6 ==0){
   echo "<span style=\"color: blue;\">$j</span>";
    
    } elseif ($j){
        echo $j;
    }
    
}

// 9. Generuoti atsitiktinius skaičius nuo 1 iki 50 tol, kol sugeneruotas skaičius bus dalus iš 5.+

echo '<hr>';

while ($i%5 !== 0){
$i = rand(1,50);

echo $i.',';
}
 
//  10. Generuoti atsitiktinius skaičius nuo 1 iki 100 tol, kol sugeneruotas skaičius bus dalus iš 5
// arba iš 11

echo '<hr>';

while ($i%5 !== 0 || $i%11 !== 0){
$i = rand(1,100);

echo $i.',';
}

// 11. Generuoti atsitiktinius skaičius nuo 1 iki 10 tol, kol jų suma bus lygi arba didesnė 150.

echo '<hr>';
$sum = 0;
$count = 0; 

do
{
echo $i. ',';
$i = rand(1,10);
$sum = $sum + $i;
// $i++;
$count++;
}
while($sum <150); 

echo "skaiciu suma yra $sum";
echo '<hr>';
echo $count;

// <!-- 12. Generuoti atsitiktinius skaičius nuo 1 iki 10 tol, kol jų suma bus lygi arba didesnė 120.
// Suskaičiuoti kiek skaičių buvo sugeneruota. -->

$summ = 0;
$temp = 0;

while($summ<120){
    $i = rand(1, 10);
    $summ = $summ+$i;
    $temp ++;
}

echo $temp;
echo '<hr>';

// <!-- 13. Generuoti atsitiktinius skaičius nuo 1 iki 15 tol, kol jų suma bus lygi arba didesnė 175.
// Surasti didžiausią ir mažiausią skaičių. -->

$summ1 = 0;
$max1 = 1;
$min1 = 15;

while($summ1<175){
    $j = rand(1, 15);
    $summ1 += $j;
    // echo $j, '<br>';

    if ($j>$max1){
        $max1 = $j;
        
    } elseif ($j<$min1){
        $min1 = $j;  
    }
}
echo $summ1, '<br>' ;
echo $max1, '<br>';
echo $min1, '<br>';

// <!-- 14. Generuoti atsitiktinius skaičius nuo 1 iki 15 tol, kol jų suma bus lygi arba didesnė 200.
// Surasti skaičių vidurkį. -->

echo '<hr>';
$sum = 0;
$count = 0; 

do
{
echo $i. ',';
$i = rand(1,15);
$sum = $sum + $i;
// $i++;
$count++;
$quantity = $sum/$count;
}
while($sum <200); 

echo "skaiciu suma yra $sum";
echo '<hr>';
echo $count;
echo '<hr>';
echo $quantity;


// 15. Sukurti masyvą, kurio ilgis būtų 100, o reikšmės – skaičiai nuo 1 iki 100.
echo '<hr>';
$array1 = [];
for($i = 0; $i<=100; $i++){
$i = array_push($array1, $i);    
}
// print_r($array1);
echo '<hr>';

$arr2 = range(1, 100);
var_dump($arr2);


// 16. Sukurti masyvą, kurio ilgis būtų 100, o reikšmės – atsitiktiniai skaičiai nuo 10 iki 25

echo '<hr>';

for($i = 0; $i<=100; $i++){
$array2[$i] = rand(10,25);    
}
print_r($array2);

// 17. Sukurti atsitiktinio ilgio masyvą, nuo 40 iki 60, kurio reikšmės būtų skaičiai nuo 1 iki
// masyvo ilgio.

echo '<hr>';
$array3 = []; 
$n = rand(40,60);
for($i = 1; $i<=$n; $i++){
$i = array_push($array3, $i-1);   
}
print_r($array3);

// 18. Sukurti atsitiktinio ilgio masyva, kurio ilgis nuo 80 iki 120, o reikšmės – atsitiktiniai skaičiai
// nuo 5 iki 47.

echo '<hr>';
$array4 = []; 
$n = rand(80,120);
for($i = 1; $i<=$n; $i++){
$i = array_push($array4, rand(5, 47));   
}
print_r($array4);


// 19. Sukurti masyvą, kurio ilgis 100, o reikšmės – raidės D, E, F, G, H

echo '<hr>';
$letters = ['D','E','F','G', 'H',];
$array5= [];

for($i = 0; $i <=100; $i++){

    $randomLetters = $letters[rand(0,count($letters)-1)];
    array_push($array5, $randomLetters);
}

print_r($array5);

// 20. Sukurti masyvą, kurio ilgis 100, o reikšmės – raidės M,N,O,P. Suskaičiuoti, kurios raidės
// buvo daugiausia.

echo '<hr>';
$letters1 = ['M','N','O','P',];
$array6= [];

for($i = 0; $i <=100; $i++){

    $randomLetters1 = $letters1[rand(0,count($letters1)-1)];
    array_push($array6, $randomLetters1);
}

print_r($array6);
echo '<hr>';

print_r(array_count_values($array6));
echo '<hr>';

$m = $n = $o = $p = 0;

foreach ($array6 as $value ){
if ($value == 'M'){
     $m++;
} elseif($value == 'N'){
    $n++;
} elseif ($value == 'O'){
    $o++;
} else{
    $p++;
}

}

echo max($m, $n, $o, $p);
echo '<hr>';

// 21. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės
// skaičiai nuo 1 iki 10 ([1,2,3,4,5,6,7,8,9,10]).
echo '<pre>';
for($i = 0; $i<=100; $i++){
    $array[$i] = range(1,10);
} 

print_r($array);
echo '<hr>';

// 22. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės
// atsitiktiniai skaičiai nuo 1 iki 17.

$arr2 = [];
for ($i = 0; $i<=100; $i++){
    for ($j =0; $j<=10; $j++){
    $arr2[$i][$j] = rand(1,17); 
    }
} 

print_r($arr2);
echo '<hr>';


// 23. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki
// 18, o reikšmės – skaičiai nuo 1 iki masyvo ilgio.

$array23 = [];
for ($i = 0; $i<=100; $i++){
    $arr = [];
    for ($j =0; $j<rand(5,18); $j++){
    array_push($arr, $j);
    }
    array_push($array23, $arr);
} 
print_r($array23);
echo '<hr>';

// 24. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki
// 18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 30.
echo '<hr>';

for ($i = 0; $i<=100; $i++){
    for ($j =0; $j<=$rand; $j++){
    $rand = rand(5,18);
    $arr3[$i][$j] = rand(5,30); 
    }
} 
print_r($arr3);

// 25. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki
// 18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 75. Surasti didžiausią skaičių visame didžiajame
// masyve.
echo '<hr>';

// Ieskome didziausios reiksmes is ilgiausio submasyvo
$max = 0;
for ($i = 0; $i<=100; $i++){
    for ($j =0; $j<=rand(5,18); $j++){
    $arr4[$i][$j] = rand(5,75); 
    }
} 

foreach ($arr4 as $key => $value){
    if ($value>$max){
        $max = $value;
    }
}
print_r($arr4);
echo '<br>';
print_r($max);
echo '<hr>';
print_r(max($max));


// 26. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis atsitiktinis nuo 5 iki
// 18, o reikšmės – atsitiktiniai skaičiai nuo 5 iki 75. Surasti mažiausią skaičių visame didžiajame
// masyve ir kiek kartų jis pasikartojo.
echo '<hr>';

$min = 75;
$summ = 0;

for ($i = 0; $i<100; $i++){
    for ($j =0; $j<=rand(5,18); $j++){
    $arr6[$i][$j] = rand(5,75); 
    }
} 

foreach ($arr6 as $item){

    foreach($item as $value){
        
        if ($value<$min){
           $min = $value;
           $summ = 0; 
        }
        if ($value==$min){
            $summ++;      
        }           
    }
}

print_r($arr6);
echo '<hr>';
echo $min;
echo '<br>';
echo  $summ; 
echo '<br>';


// 27. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės
// atsitiktiniai skaičiai nuo 1 iki 17. Išrykiuoti vidinių masyvų reikšmes didėjančia tvarka.

echo '<hr>';
$arr7 = [];
for ($i = 0; $i<=100; $i++){
    for ($j =0; $j<=10; $j++){
    $arr7[$i][$j] = rand(1,17); 
    }
}  

foreach ($arr7 as $item => $value){
sort($arr7[$item], SORT_NUMERIC);
}        
print_r($arr7);

// 28. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės
// atsitiktiniai skaičiai nuo 1 iki 17. Perrikiuoti vidinius masyvus pagal vidinių masyvų reikšmių
// sumas didėjančia tvarka.
echo '<hr>';
$arr8 = [];

for ($i = 0; $i<=100; $i++){
    for ($j =0; $j<=10; $j++){
    $arr8[$i][$j] = rand(1,17);
    }
}  

foreach ($arr8 as $item => $value){
   $sum = array_sum($arr8[$item]);
//    var_dump($sum);

}

uasort($arr8, function($a,$b){ return array_sum($a) - array_sum($b);});

print_r(array_keys($arr8));
echo '<hr>';  
print_r($arr8);


// 29. Sugeneruoti masyvą, kurio ilgis 100, o reikšmės – masyvai, kurių ilgis 10, o reikšmės
// atsitiktiniai skaičiai nuo 1 iki 17. Iš dvimačio masyvo sukurti vieną vienmatį masyvą – visas
// dvimačio masyvo masyvų reikšmes perkelti į naują masyvą.
echo '<hr>';

$mergeArray = [];

for ($i = 0; $i<10; $i++){
    for ($j =0; $j<10; $j++){
    $arr9[$i][$j] = rand(1,17);
    
    }
    $mergeArray = array_merge($mergeArray, $arr9[$i]);
}  

print_r($mergeArray);
echo '<hr>';

// 30. Papildyti 29 uždavinį taip, kad surastų skaičių vidurkį ir palygintų jį su vidurinia reikšme,
// kuris didesnis. Jei elementų yra nelyginis skaičius, pvz 9, tai vidurinė reikšmė bus 5-as
// elementas, jei elementų yra lyginis skaičius, pvz 8, tai vidurinė reikšmė bus 4-os ir 5-os reikšmės
// aritmetinis vidurkis

$arr03 = [];
$arrNew = [];
$addArr = [];

for ($i = 0; $i <5; $i++){
    $arr03 = [];
    for ($j =0; $j<11; $j++){
        array_push($arr03, rand(1,17));
    } array_push($arrNew, $arr03);
}
    foreach ($arrNew as $key){
        foreach ($key as $value){
            array_push($addArr, $value);
        }
    }

    $sumArr = count($addArr);
    $summ2 = array_sum($addArr);
    $aver = $summ2/$sumArr;

    if ($sumArr%2 !=0){
        $med = $addArr[floor($sumArr/2)];
    } elseif ($sumArr%2 == 0){
        $med = ($addArr[$sumArr/2]+ $addArr[($sumArr/2)-1])/2;

    }

    echo count($addArr);
    echo '<br>';
    echo array_sum($addArr);
    echo '<br>';
    echo $aver;

 
// 31. Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą.

function text($x)
{
    return $x;
}
echo text('<h1>Hello World!</h1');

// 32. Parašyti funkciją, kuri priima du kintamuosius. Patikrina ar jie yra skaičiai. Grąžina tų
// skaičių sumą.

echo '<hr>';
   
function interger($x, $y)
{ if (is_int($x) && is_int($y)){ 
        return $x+$y;
} else {
    return false;
}
}
echo '<hr>';
echo interger(2,4);

// 33. Parašyti funkciją, kuri priima du kintamuosius. Patikrina ar jie yra skaičiai. Palygina tuos du
// skaičius ir grąžina rezultatą ar pirmas skaičius yra didesnis, ar antras, ar jie yra lygūs.
   
function interger1($x, $y)
{ if (is_int($x) && is_int($y) && $x>$y){ return $x;
} elseif ($y>$x) { return $y;  
} else {
    return 'skaiciai yra lygus';
}
}
echo '<hr>';
echo interger1(4,4);

// 34. Parašyti funkciją, kuri priimtų vieną kintamajį. Turi patikrinti ar tai yra skaičiu ir ar tai yra
// keturženklis skaičius. Turi būti grąžinamas rezultatas ar tie metai yra keliamieji.

function integer2($n) {
 
    for ($i = 1; $i <= 9999; $i++) 
        
    if (!is_int($n)){
        echo 'iveskite skaiciu';
        return;
        }
        if (($n%4 == 0) && ($n%400 == 0)) {
            echo "metai keliamieji";
        } else { 
            echo "metai nera keliamieji";
            } 
    }
    echo '<hr>';
    echo integer2(8532);

//     35. Parašyti funkciją, kuri priimtų vieną kintamajį. Turi būti patikrinimas ar tas kintamasis yra
// skaičius. Funkcija turi grąžinti skaičių, kur įvesto skaičiaus skaitmenys būtų išrikiuoti didėjimo
// tvarka.
echo '<hr>';

function numbers($n) { 
    if (!is_int($n)){ 
        echo 'iveskite skaiciu';
        return;
    } 
    for ($i = 0; $i <=$n; $i ++){
        $arrayN = str_split($n);
        sort($arrayN); 
    }
    foreach ($arrayN as $key){
        echo $key+0;
    }
}
echo numbers(7884);
echo '<hr>';

// 36. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos
// (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką
// skaičių

function number($n) {
    if (filter_var($n, FILTER_VALIDATE_INT) === false){ 
        echo 'iveskite sveika skaiciu';
        return;
    }
    $sum = 0;
    for ($i = 2; $i < $n; $i++){
        if ($n%$i == 0){ 
            $sum++;}
        }   
    return $sum; 
}
echo number(140);
echo '<hr>';


// 37. Parašyti funkciją telefonoNumeris, kuri priima vieną kintamąjį. Turi būti patikrinimas, kad
// kintamasis yra masyvas, kad jo visi elementai yra skaičiai ir, kad jo ilgis yra 10. Funkcija turi
// grąžinti telefono numerį tokiu formatu - "(XXX) XXX-XXXX".

function phone($tel){
    
    $arrayPhone = [];

    for ($i = 0; $i<=$tel; $i++){ 
        $i = array_push($arrayPhone, $tel); 
        
            if (is_array($arrayPhone) && is_int($tel) && preg_match("/^\d{10}$/", $tel)){

                foreach ($arrayPhone as $key)
                return preg_replace ("#(\d{3})(\d{0})(\d{3})#", "(+\\1) \\3-\\4", $key); 

            }else{  
            return false;
            }   
    }    
}

print_r (phone(3701214721));
echo '<hr>';

// 38. Parašyti funkciją pirminisSkaicius. Funkcija turi vieną kintamąjį. Turi būti patikrinimas, kad
// kintamasis yra skaičius. Funkcija turi grąžinti ar pateiktas skaičius yra pirminis( pirminis
// skaičius yra tas, kuris dalinasi tik iš savęs ir tik iš vieneto be liekanos.)


function prime($n){
	
    if($n==1) 
	return 'skaicius nera pirminis';
	
	    for($i=2; $i*$i<=$n; $i++){ 
		
		    if($n%$i==0) 
			return 'skaicius nera pirminis';
		}
	return 'skaicius yra pirminis';
}
    echo prime(27);
    echo '<hr>';

// 39. Parašyti funkciją - lygineSuma. Funkcijos parametrai - du kintamieji. Testų reikalavimai -
// abu kitamieji turi būti arba skaičiai arba masyvai(negali būti vienas skaičius, kitas masyvas).
// Jei kintamieji skaičiai, grąžinti skaičių sumą, jei kintamieji masyvai - grąžinti masyvų ilgių
// sumą. Jei suma nelyginė - grąžinti tekstą, kad suma nelyginė.

$sum = 0;  
function int1($x, $y){
   
    if (is_int($x) && is_int($y)){ 
        $sum = $x+$y;
    }
        if ($sum%2 == 0){ 
            return $sum;    
        }else {
            return 'suma nelygine';
    }
}
echo int1(15,8);
echo '<hr>';

// 40. Funkcija turi priimti du kintamuosius. Vienas turi būti skaičius, kitas masyvas su skaičiais ir
// minimum 7 elementais. Funkcija turi grąžinti true, jei skaičius yra masyve, ir false, jei nėra tokio
// skaičiaus masyve.

for($i = 0; $i<8; $i++){
    $arr40[$i] = rand(1,100);    
    }
    print_r($arr40);

function arr($x, $arr40){
   
    if (!is_int($x) || !is_array($arr40)){
        echo "patikrinkite duomenis";
        die;

    }   elseif (array_search($x, $arr40)){
        return true;

    }    else {
        return false;
    }             
}
var_dump (arr(78, $arr40));
echo '<hr>';

// 41. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas. Išvestų
// tekstą į ekraną „<p>“ tag‘e.

function str($str){
   
    if (is_string($str)){
        echo '<p>'.$str.'</p';
    } 
    else
    return "iveskite teksta";
}
echo str('Hello World');
echo '<hr>';

// 42. Parašyti funkciją, kuri priimtų vieną kintamąjį. Atliktų testą ar kintamasis yra tekstas.
// Funkcija turi išvesti tekstą į ekraną ir dar papildomai parodyti jo ilgį.
$stringLength;
function str1($text){
   
    if (is_string($text)){
        
        for ($i = 0; $i < strlen($text); $i++) { 
            $count1[] = $text[$i];
            $text1 = count($count1);
        }
        echo '<p>'.$text.' <br></p';
        echo '<br>';
        echo 'teksto ilgis yra '. $text1;
    } 
        else { 
        return "iveskite teksta";
        }  
}
echo '<hr>';
echo str1('Hello World'). '<br>';
echo '<hr>';



