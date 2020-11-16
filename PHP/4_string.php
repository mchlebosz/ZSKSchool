<?
$text = <<<T
zsk - Zespół
Szkół Komunikacji
T;

echo $text."<br>";

echo nl2br($text)."<hr>";

$name = "jAnUSz";
// zamiana na małe litery;

echo strtolower($name);
// zamiana na duże litery;

echo strtoupper($name)."<hr>";

//zamiana pierwszej litery na dużą
$name = "jAnUSz KoWalsKI";
$name = strtolower($name);


echo ucfirst($name);

// zamiana wszystkich pierwszych na dużą

echo ucwords($name)."<hr>";

    $text2 = <<<T
    janusz grażyna jurek
    mirek
    T;


echo ucfirst($text2)."<br>";
echo ucwords($text2)."<hr>";

// Lorem

$lorem = <<< LOREM
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Iste quasi enim quae deserunt soluta. Cumque veniam molestiae
    incidunt rem quaerat, officia amet debitis nulla dolores alias
    modi provident aut explicabo.
    LOREM;

echo $lorem."<br>";
$col = wordwrap($lorem, 40, '<br>');
echo $col."<br>";

// Lekcja któraś tam pewnie 5

ob_clean(); // czyszczenie bufora

    $name = "Łukasz";
    $name1 = "   Łukasz         ";

    echo strlen($name),'<br>';
    echo mb_strlen($name),'<br>';
    echo mb_strlen($name1),'<br>';

    echo strlen(ltrim($name)),'<br>';
    echo strlen(rtrim($name)),'<br>',"<hr>";

    //przeszukiwanie ciągów znaków
    $address = "Poznań, ul. Początek 21, tel. 123-456-123";
    $search = strstr($address,"tel.");
    echo $search,'<br>';
    $address = "Poznań, ul. Początek 21, tel. 123-456-123";
    $search = strstr($address,"tel.", true);
    echo $search,'<br>';
    $address = "Poznań, ul. Początek 21, tel. 123-456-123";
    $search = stristr($address,"Tel.");
    echo $search,'<br>',"<hr>";

    //przetwarzanie ciągów znaków

    echo strstr('zsk@gmail.com','@');
    echo strstr('zsk@gmail.com',64);
    echo substr(strstr('zsk@gmail.com',64),1);

    //replace
    echo str_replace("@", "", strstr('zsk@gmail.com',64));
    $login = "Bączyk";
    $censure = array('ą',"ę",'ś','ź','ż','ć','ó,',"ń",'ł');
    $replace❤ = array('a','e','s','z','z','c','o','n','l');
    $correct = str_replace($censure, $replace❤, $login);
    echo <<<LOGIN
        Login: $login<br>
        Poprawny login: $correct
    LOGIN;




?>


