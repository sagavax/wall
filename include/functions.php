<?php include("dbconnect.php");


  define('APPPATH', dirname(__FILE__) .'/');
  define('APPNAME', 'Wall');
  define('APPTITLE', 'E.I.S');
  define('APPVERSION', '1.0');
  


function convertHashtags_old($str){
    $regex = "/(#)+[a-zA-Z0-9]+/";
    $str = preg_replace($regex, '<a href="wall.php?tag=$2">#$2</a>', $str);
    return($str);
}

function convertHashtags($str){
  {
  $parsedMessage = preg_replace(array('/(?i)\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:\'".,<>?«»“”‘’]))/', '/(^|[^a-z0-9_])@([a-z0-9_]+)/i', '/(^|[^a-z0-9_])#([a-z0-9_]+)/i'), array('<a href="$1" target="_blank">$1</a>', '$1<a href="">@$2</a>', '$1<a class="hashtag" href="index.php?hashtag=$2">#$2</a>'), $str);
  return $parsedMessage;
}
}


function Meniny(){ 
  $mena=array('Nový rok', 'Alexandra', 'Daniela', 'Drahoslav', 'Andera', 'Antónia', 'Bohuslav(a)', 'Severín', 'Alexej', 'Dáša', 'Malvína', 'Ernest', 'Rastislav', 'Radovan', 'Dobroslav', 'Kristína', 'Nataša', 'Bohdana', 'Drahomíra', 'Dalibor', 'Vincent', 'Zora', 'Miloš', 'Timotej', 'Gejza', 'Tamara', 'Bohuš', 'Alfonz', 'Gašpar', 'Ema', 'Emil', 'Tatiana', 'Erik(a)', 'Blažej', 'Veronika', 'Agáta', 'Dorota', 'Vanda', 'Zoja', 'Zdenko', 'Gabriela', 'Dezider', 'Perla', 'Arpád', 'Valentín', 'Pravoslav', 'Ida', 'Miloslava', 'Jaromír', 'Vlasta', 'Lívia', 'Eleonóra', 'Etela', 'Roman(a)', 'Matej', 'Frederik(a)', 'Viktor', 'Alexander', 'Zlatica', 'Radomír', 'Albín', 'Anežka', 'Bohumil(a)', 'Kazimír', 'Fridrich', 'Radoslav', 'Tomáš', 'Alan(a)', 'Frantiska', 'Branislav, Bruno', 'Angela, Angelika', 'Gregor', 'Vlastimil', 'Matilda', 'Svetlana', 'Boleslav', 'Lubica', 'Eduard', 'Jozef', 'Vítazoslav', 'Blahoslav', 'Benadik', 'Adrián', 'Gabriel', 'Marián', 'Emanuel', 'Alena', 'Sona', 'Miroslav', 'Vieroslava', 'Benjamín', 'Hugo', 'Zita', 'Richard', 'Izidor', 'Miroslava', 'Irena', 'Zoltán', 'Albert', 'Milena', 'Igor', 'Július', 'Estera', 'Aleš', 'Justína', 'Fedor', 'Dana, Danica', 'Rudolf', 'Valér', 'Jela', 'Marcel', 'Ervín', 'Slavomír', 'Vojtech', 'Juraj', 'Marek', 'Jaroslava', 'Jaroslav', 'Jarmila', 'Lea', 'Anastázia', 'Sviatok práce', 'Žigmunt', 'Galina', 'Florián', 'Lesana, Lesia', 'Hermína', 'Monika', 'Ingrida', 'Roland', 'Viktória', 'Blažena', 'Pankrác', 'Servác', 'Bonifác', 'Žofia', 'Svetozár', 'Gizela', 'Viola', 'Gertrúda', 'Bernard', 'Zina', 'Júlia, Juliana', 'Želmíra', 'Ela', 'Urban', 'Dušan', 'Iveta', 'Viliam', 'Vilma', 'Ferdinand', 'Petronela, Petrana', 'Žaneta', 'Xénia', 'Karolína', 'Lenka', 'Laura', 'Norbert', 'Róbert', 'Medard', 'Stanislava', 'Margaréta', 'Dobroslava', 'Zlatko', 'Anton', 'Vasil', 'Vít', 'Blanka', 'Adolf', 'Vratislav(a)', 'Alfréd', 'Valéria', 'Alojz', 'Paulína', 'Sidónia', 'Ján', 'Tadeáš', 'Adriána', 'Ladislav(a)', 'Beáta', 'Peter a Pavol, Petra', 'Melánia', 'Diana', 'Berta', 'Miloslav', 'Prokop', 'Sviatok sv. Cyrila a Metoda', 'Patrícia, Patrik', 'Oliver', 'Ivan', 'Lujza', 'Amália', 'Milota', 'Nina', 'Margita', 'Kamil', 'Henrich', 'Drahomír', 'Bohuslav', 'Kamila', 'Dušana', 'Ilja, Eliáš', 'Daniel', 'Magdaléna', 'Olga', 'Vladimír', 'Jakub', 'Anna, Hana', 'Božena', 'Krištof', 'Marta', 'Libuša', 'Ignác', 'Božidara', 'Gustáv', 'Jerguš', 'Dominik(a)', 'Hortenzia', 'Jozefína', 'Štefánia', 'Oskár', 'Lubomíra', 'Vavrinec', 'Zuzana', 'Darina', 'Lubomír', 'Mojmír', 'Marcela', 'Leonard', 'Milica', 'Elena, Helena', 'Lýdia', 'Anabela', 'Jana', 'Tichomír', 'Filip', 'Bartolomej', 'Ludovít', 'Samuel', 'Silvia', 'Augustín', 'Nikola', 'Ružena', 'Nora', 'Drahoslava', 'Linda', 'Belo', 'Rozália', 'Regína', 'Alica', 'Marianna', 'Miriama', 'Martina', 'Oleg', 'Bystrík', 'Mária', 'Ctibor', 'Lubomil, Ludomil', 'Jolana', 'Ludmila', 'Olympia', 'Eugénia', 'Konštantín', 'Luboslav(a)', 'Matúš', 'Móric', 'Zdenka', 'Luboš, Lubor', 'Vladislav', 'Edita', 'Cyprián', 'Václav', 'Michal, Michaela', 'Jarolím', 'Arnold', 'Levoslav', 'Stela', 'František', 'Viera', 'Natália', 'Eliška', 'Brigita', 'Dionýz', 'Slavomíra', 'Valentína', 'Maximilián', 'Koloman', 'Boris', 'Terézia', 'Vladimíra', 'Hedviga', 'Lukáš', 'Kristián', 'Vendelín', 'Uršula', 'Sergej', 'Alojzia', 'Kvetoslava', 'Aurel', 'Demeter', 'Sabína', 'Dobromila, Kevin', 'Klára', 'Šimon(a)', 'Aurélia', 'Denis(a)', 'Pamiatka zosnulých', 'Hubert', 'Karol', 'Imrich', 'Renáta', 'René', 'Bohumír', 'Teodor', 'Tibor', 'Martin, Maroš', 'Svätopluk', 'Stanislav', 'Irma', 'Leopold', 'Agnesa', 'Klaudia', 'Eugen', 'Alžbeta', 'Félix', 'Elvíra', 'Cecília', 'Klement', 'Emília', 'Katarína', 'Kornel', 'Milan', 'Henrieta', 'Vratko', 'Ondrej, Andrej', 'Edmund', 'Bibiána', 'Oldrich', 'Barbora', 'Oto', 'Mikuláš', 'Ambróz', 'Marína', 'Izabela', 'Radúz', 'Hilda', 'Otília', 'Lucia', 'Branislava, Bronislava', 'Ivica', 'Albína', 'Kornélia', 'Sláva, Slávka', 'Judita', 'Dagmara', 'Bohdan', 'Adela', 'Nadežda', 'Adam a Eva', '1. Sviatok vianocný', 'Štefan', 'Filoména', 'Ivana, Ivona', 'Milada', 'Dávid', 'Silvester'); 
  
  $den=date("z", time()); 
  if ((date("Y", time())%4>0)&&($den>59)) { 
     $den++; 
  } 
  
  if ($den==1||$den==121||$den==186||$den==306||$den==359) { 
     $out="<b><font color=\"black\">Dnes je : </font></b> ".$mena[$den]; 
  }else{ 
     $out="<b><font color=\"black\">Meniny má : </font></b> ".$mena[$den]; 
  } 
  
     return $out; 
  } 