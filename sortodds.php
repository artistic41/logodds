<?php

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

$timestamp = time();
$outFile = $currentDir . DIRECTORY_SEPARATOR . "probas$timestamp.php";
$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($probas[$raceNumber])) continue;

    $tmpArray = $probas[$raceNumber];
    $runners = array_keys($tmpArray);

    if(count($runners) <= 10) continue;
    
    $outtext .= "\t'$raceNumber' => [\n";
    $outtext .= "\t\t/**\n";
    $outtext .= "\t\tRace $raceNumber\n";
    $outtext .= "\t\t*/\n";

    $indicators = ['R (O) position' => 0, 'B (E) position' => 0];

    $values = array_values($tmpArray);
    for($j = 0; $j < count($values); $j ++)
    {
        if(($j + 1) % 2 === 1) $indicators['R (O) position'] += $values[$j];
        else $indicators['B (E) position'] += $values[$j];
    }

    if(abs($indicators['R (O) position'] - $indicators['B (E) position']) < 0.9) {
        $outtext .= "\t\t'Equal positions.' \n";
    }

    $outtext .= "\t\t'" . implode(", ", $runners) . "',\n";
    $first4 = array_slice($runners, 0, 4);
    $sBlacks = array_values(array_intersect($runners, $blacks));
    $sReds = array_values(array_intersect($runners, $reds));
   
    $first1 = $runners[0];

    if(in_array($first1, $blacks)){
        $firstThreeReds = array_slice($sReds, 0, 3);
        $lastThreeReds = array_slice($sReds, -3);
        $lastThreeBlacks = array_slice($sBlacks, -3);
        $firstFourBlacks = array_slice($sBlacks, 0, 4);
        $toWin = array_unique(array_values(array_merge($first4, $firstFourBlacks)));
        asort($toWin);
        $qpl30 = $first1 . " X "  . implode(", ", $firstThreeReds);
        $setBmore = $firstThreeReds;
        $qpl10 = $first1 . " X "  . implode(", ", $lastThreeReds) . ", "  . implode(", ", $lastThreeBlacks);
    }
    else{
        $firstThreeBlacks = array_slice($sBlacks, 0, 3);
        $lastThreeBlacks = array_slice($sBlacks, -3);
        $lastThreeReds = array_slice($sReds, -3);
        $firstFourReds = array_slice($sReds, 0, 4);
        $toWin = array_unique(array_values(array_merge($first4, $firstFourReds)));
        asort($toWin);
        $qpl30 = $first1 . " X "  . implode(", ", $firstThreeBlacks);
        $setBmore = $firstThreeBlacks;
        $qpl10 = $first1 . " X "  . implode(", ", $lastThreeBlacks) . ", "  . implode(", ", $lastThreeReds);
    }

    $outtext .= "\t\t'Qpl($10)' ,\n" . "\t\t\t'" . $qpl10 . "'" . ",\n";
    $outtext .= "\t\t'Qin($20)' ,\n" . "\t\t\t'" . $qpl30 . "'" . ",\n";
    $outtext .= "\t\t'Qin($10)' ,\n" . "\t\t\t'" . implode(", ", $toWin) . "'" . ",\n";
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
