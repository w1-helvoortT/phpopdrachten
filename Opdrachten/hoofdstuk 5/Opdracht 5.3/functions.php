<?php
function echoKans() {
    echo ($_POST['infected'] * ($_POST['citizens']/100000) / $_POST['citizens']) * 100 ."%";
}

function getKans1Op() {
    return 100000 / $_POST['infected'];
}
function vergelijkOorzaken ($covidkans) {

    $kansen =[119998,81701,62950,51199,6174,5981,5862,4147,1235,1073,802,623,300,272,184,139,115,85,28,7,6];
    $oorzaken = ["Aangevallen worden door een of meerdere honden"," Door de bliksem worden getroffen"," Gestoken worden door een wesp of een bij"," Omkomen in een storm"," Sterven van de hitte"," Slachtoffer worden van een verdwaalde kogel"," Omkomen in een"," Omkomen in een fietsongeluk"," Omkomen in een brand"," Verdrinken"," Omkomen in een motorongeluk"," Overreden worden"," Neergeschoten worden"," Slachtoffer worden van een auto-ongeluk als passagier"," Omkomen door een valpartij"," Per ongeluk vergiftigd worden"," Overlijden ten gevolge van een wonde die je jezelf hebt toegebracht"," Slachtoffer worden van een auto-ongeluk, maar dan als chauffeur"," Overlijden aan de gevolgen van een hartaanval"," Kanker"," Hart- en vaatziekten"];

    $i = 0;
    while ($covidkans < $kansen[$i]) {
        $i++;
        if ($i >= count($kansen))
            break;
    }

    if ($i == 0 ){
        return "Kans op '".strtolower($oorzaken[0])."(1 op {$kansen[0]})' is groter dan je wordt besmet op Corona";
    }
    elseif ($i >= count($kansen)) {
        return "Kans dat je wordt besmet door corona is groter dan de kans op '".$oorzaken[count($kansen) - 1]." (1 op {$kansen[$i -1]})'";
    }
    else {
        return "Kans dat je wordt besmet is groter dan op de kans op '".$oorzaken[ $i -1 ].
            "(1 op {$kansen[$i -1]})'<br> maar kleiner dan de kans op '".$oorzaken[$i]."(1 op {$kansen[$i]})'";
    }
}

?>