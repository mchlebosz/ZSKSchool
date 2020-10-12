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


?>