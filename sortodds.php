<?php

function numericalValue($n){
    $tens = intdiv($n, 10);
    $units = $n - 10 * $tens;
    return $tens + $units;
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$probas = [];

$reds = [1, 3, 5, 7, 9, 12, 14, 16, 18, 
         19, 21, 23, 25, 27, 30, 32, 34, 36];

$blacks = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20,
          22, 24, 26, 28, 29, 31, 33, 35];

$totalRaces = count($allOdds);

for($r=1; $r <= $totalRaces; $r++){
    if(!isset($allOdds[$r])) continue;
    $odds = $allOdds[$r];
    $proba = [];
    $sum = 0;
    foreach($odds as $i => $oddsI){
            $proba[$i] = 100 * (log($oddsI) / $oddsI) / exp(1);
            $sum += $proba[$i];
            }
    foreach($odds as  $i => $oddsI){
        //adjust to 100 percentage
        $proba[$i] = round( $proba[$i] * 100 / $sum, 2);
    }
    arsort($proba);
    $probas[$r] = $proba;
}

$outFile = $currentDir . DIRECTORY_SEPARATOR . "probas.php";


$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($probas[$raceNumber])) continue;

    $racetext = "";
    $showRace = false;

    $tmpArray = $probas[$raceNumber];
    $runners = array_keys($tmpArray);

    if(count($runners) < 8) continue;
    
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";

    $values = array_values($tmpArray);

    $sBlacks = array_values(array_intersect($runners, $blacks));
    $sReds = array_values(array_intersect($runners, $reds));
       
    $first1 = $runners[0];

    if(in_array($first1, $blacks)){
       $favorites = $sBlacks;
       $others = $sReds;
    }
    else{
       $favorites = $sReds;
       $others =$sBlacks;
    }

    $trio = array_merge(array_slice($favorites, 0, 3), array_slice($others, 0, 2));

    $qplLeftSide = [$favorites[0], $favorites[1], $favorites[2], $others[0], $others[1]];
    $qplRightSide = [ $others[3], $favorites[count($favorites) - 3], $others[count($others) - 3], end($favorites), end($others) ];
    $toWin = [];
    for($indexL = 0; $indexL < count($qplLeftSide); $indexL++) {
        for($indexR = 0; $indexR < count($qplRightSide); $indexR++) {
            $left = $qplLeftSide[$indexL];
            $right = $qplRightSide[$indexR];
            if( 
                (abs(numericalValue($left) - numericalValue($right)) <= 2)
                &&
                (
                    (in_array($left, $sReds) && in_array($right, $sBlacks))
                    || (in_array($left, $sBlacks) && in_array($right, $sReds))
                )
            ){
                if(!in_array($left, $toWin)) $toWin[] = $left;
                if(!in_array($right, $toWin)) $toWin[] = $right;
            }
        }
    }
    $difference1 = array_diff($toWin, $trio);
    $difference2 = array_diff($trio, $toWin);
    $intersection = array_intersect($toWin, $trio);

    $racetext .= "\t\t'F: " . implode(", ", $favorites) . "',\n";
    $racetext .= "\t\t'O: " . implode(", ", $others) . "',\n";
    $racetext .= "\t\t'------------------------',\n";

    if(count($difference1) == 2) {
        $showRace = true;
        $racetext .= "\t\t'Win/Pla/Qpl' =>  '" . implode(", ", $difference1) . "',\n";
    }
    if(count($difference2) == 2) {
        $showRace = true;
        $racetext .= "\t\t'Win/Pla/Qpl' =>  '" . implode(", ", $difference2) . "',\n";
    }
    if(count($intersection) == 2) {
        $showRace = true;
        $racetext .= "\t\t'Win/Pla/Qpl' =>  '" . implode(", ", $intersection) . "',\n";
    }

    $toStudy = implode(", ", $intersection) . ' X ' . implode(", ", $difference1);
    if(!empty($difference2)) 
    {
        $toStudy .= ' X ' . implode(", ", $difference2);
        $qin1 = implode(", ", $intersection) . ' X ' . implode(", ", $difference1) . ', ' . implode(", ", $difference2);
        $qin2 = implode(", ", $difference1) . ' X ' . implode(", ", $difference2);
    }
    else{
        $toStudy = implode(", ", $intersection);
        $qin1 = implode(", ", $intersection);
        $qin2 = implode(", ", $intersection) . ' X ' . implode(", ", $difference1);
    }   
    
    $racetext .= "\t\t'Qin1' =>  '" . $qin1 . "',\n";
    $racetext .= "\t\t'Qin2' =>  '" . $qin2 . "',\n";
    $racetext .= "\t\t'Trio' =>  '" .  $toStudy . "',\n";
    $racetext .= "\t],\n";

    if($showRace) $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
