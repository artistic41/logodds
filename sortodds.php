<?php

function numericalValue($n){
    $tens = intdiv($n, 10);
    $units = $n - 10 * $tens;
    return $tens + $units;
}
/**
 * Returns true if array $needle is contained in array of arrays $haystack 
 */
function in_my_array($needle, $haystack){
    foreach($haystack as $comparedTo){
        $shit1 = array_values($needle);
        $shit2 = array_values($comparedTo);
        sort($shit1); 
        sort($shit2);
        $count1 = count($shit1);
        $count2 = count($shit2);
        if($count1 == $count2){
            $coincidences = 0;
            for($compt = 0; $compt < $count1; $compt++) {
                if($shit1[$compt] == $shit2[$compt]) $coincidences++;
            }
            if($coincidences == $count1) return true;
        }
    }
    return false;
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = 1;
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");

$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";
if(file_exists($outFile)){
    $oldData = include($outFile);
}
$probas = [];

$reds = [1, 3, 5, 7, 9, 12, 14, 16, 18, 
         19, 21, 23, 25, 27, 30, 32, 34, 36];

$blacks = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20,
          22, 24, 26, 28, 29, 31, 33, 35];

$primes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];

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


$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($probas[$raceNumber])) continue;

    if(isset($oldData)){
        if(isset($oldData[$raceNumber])){
            $oldRaceData = $oldData[$raceNumber];
            if(isset($oldRaceData['wins'])) $oldWINS = $oldRaceData['wins'];
            if(isset($oldRaceData['qpl/trio'])) $oldQPLTrio = $oldRaceData['qpl/trio'];
            if(isset($oldRaceData['Remaining'])) $oldRemaining = explode(", ", $oldRaceData['Remaining']);
            if(isset($oldRaceData['diff'])) $oldDiff = explode(", ", $oldRaceData['diff']);
        }
    }
    $racetext = "";

    $tmpArray = $probas[$raceNumber];
    $runners = array_keys($tmpArray);

    if(count($runners) < 10) continue;
    
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
    $difference = array_values(array_unique(array_diff($trio, $toWin)));
    $intersection = array_Values(array_unique(array_intersect($toWin, $trio)));

    if(isset($oldWINS)) $wins = $oldWINS;
    else $wins = [];

    if(isset($oldQPLTrio)) $qplTrios = $oldQPLTrio;
    else $qplTrios = [];
    
    if(!empty($difference)) {
        if(!in_my_array($difference, $wins)) $wins[] = $difference;
    } 

    $qplTrio = array_values(array_unique(array_merge($intersection, $difference)));
    if(!in_my_array($qplTrio, $qplTrios)) $qplTrios[] = $qplTrio;
        
    $WINSText = "[";
    $allWinsValues = [];
    $someCounter = 0;
    $someLength = count($wins);
    foreach($wins as $winsItem){
        $allWinsValues = array_values(array_unique(array_merge($allWinsValues, $winsItem)));
        $WINSText .= "[" . implode(", ", $winsItem) . "]";
        $someCounter ++;
        if($someCounter < $someLength) $WINSText .= ", ";
    }
    $WINSText .= "]";

    $allQplValues = [];
    $QPLText = "[";
    $someCounter = 0;
    $someLength = count($qplTrios);
    foreach($qplTrios as $qplItem){
        $allQplValues = array_values(array_unique(array_merge($allQplValues, $qplItem)));
        $QPLText .= "[" . implode(", ", $qplItem) . "]";
        $someCounter ++;
        if($someCounter < $someLength) $QPLText .= ", ";
    }
    $QPLText .= "]";

    //1. Sort  qplValues by odds
    $qplsOdds = [];
    foreach($allQplValues as $iIndex){
        if(isset($allOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allOdds[$raceNumber][$iIndex];
    }
    asort($qplsOdds);
    $allQplValues = array_keys($qplsOdds);
    $tce = array_slice($allQplValues, 0, 6);
    sort($tce);
    sort($allWinsValues);

    //keep only the trios that contain wins containing exactly two elements
    $new2Trios = [];
    $new3Trios = [];
    foreach($wins as $winsItem){
        if(count($winsItem) == 2){
            $itemValues = array_values($winsItem);
            foreach($qplTrios as $qplItem){
                if(in_array($itemValues[0], $qplItem) && in_array($itemValues[1], $qplItem)){
                    if(!in_my_array($qplItem, $new2Trios)){
                        $new2Trios[] = $qplItem;
                    }
                }
            }
        }
        if(count($winsItem) == 3){
            $itemValues = array_values($winsItem);
            foreach($qplTrios as $qplItem){
                if(in_array($itemValues[0], $qplItem) && in_array($itemValues[1], $qplItem) && in_array($itemValues[2], $qplItem)){
                    if(!in_my_array($qplItem, $new3Trios)){
                        $new3Trios[] = $qplItem;
                    }
                }
            }
        }
    }

    $new2QplValues = [];
    $new2QPLText = "[";
    $someCounter = 0;
    $someLength = count($new2Trios);
    foreach($new2Trios as $qplItem){
        $new2QplValues = array_values(array_unique(array_merge($new2QplValues, $qplItem)));
        $new2QPLText .= "[" . implode(", ", $qplItem) . "]";
        $someCounter ++;
        if($someCounter < $someLength) $new2QPLText .= ", ";
    }
    $new2QPLText .= "]";

    $new3QplValues = [];
    $new3QPLText = "[";
    $someCounter = 0;
    $someLength = count($new3Trios);
    foreach($new3Trios as $qplItem){
        $new3QplValues = array_values(array_unique(array_merge($new3QplValues, $qplItem)));
        $new3QPLText .= "[" . implode(", ", $qplItem) . "]";
        $someCounter ++;
        if($someCounter < $someLength) $new3QPLText .= ", ";
    }
    $new3QPLText .= "]";

    //Sort  new2QplValues by odds
    $qplsOdds = [];
    foreach($new2QplValues as $iIndex){
        if(isset($allOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allOdds[$raceNumber][$iIndex];
    }
    asort($qplsOdds);
    $new2QplValues = array_keys($qplsOdds);

     //Sort  new3QplValues by odds
     $qplsOdds = [];
     foreach($new3QplValues as $iIndex){
         if(isset($allOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allOdds[$raceNumber][$iIndex];
     }
     asort($qplsOdds);
     $new3QplValues = array_keys($qplsOdds);

    $diff = array_diff($new2QplValues, $allWinsValues);
    $set1 = array_slice($allQplValues, 0, 5);
    $inter = array_intersect($set1, $diff);
    $set2 = array_slice($tce, 0, 5);
    $win = array_diff($set2, $inter);
    $winSet = array_slice($new2QplValues, 0, 5);
    $qqpl = array_diff($winSet, $inter);
    $X1 = array_diff($set1, $win);
    $X2 = array_diff($set1, $qqpl);
    $Y1 = array_diff($winSet, $win);
    $Y2 = array_diff($winSet, $qqpl);
    $Y = array_values(array_unique(array_merge($Y1, $Y2, $X2)));

    $shit = array_values(array_unique(array_merge($win, $qqpl)));
    $whatever = array_slice($allQplValues, 0, 2);
    $place = array_intersect($shit, $whatever);

    $WON = array_diff($tce, $place);
    $WON = array_diff($tce, $allWinsValues);

     //Sort  WON by odds
     $qplsOdds = [];
     foreach($WON as $iIndex){
         if(isset($allOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allOdds[$raceNumber][$iIndex];
     }
     asort($qplsOdds);
     $WON = array_keys($qplsOdds);

    $redQplValues = array_intersect($allQplValues, $reds);
    $blackQplValues = array_intersect($allQplValues, $blacks);
    $remains = array_diff($runners, $allQplValues);
    $redOthers = array_intersect($remains, $reds);
    $blackOthers = array_intersect($remains, $blacks);

    $sPrimes = array_intersect($allQplValues, $primes);
    $primesMajority = count($allQplValues) < 2 * count($sPrimes);

    $racetext .= "\t\t'wins' =>  $WINSText ,\n";
    $racetext .= "\t\t'qpl/trio'       =>  $QPLText ,\n";
    $racetext .= "\t\t'new 2 qpl/trio' =>  $new2QPLText ,\n";
    $racetext .= "\t\t'new 3 qpl/trio' =>  $new3QPLText ,\n";
    $racetext .= "\t\t'All QPL values'    =>  '" . implode(", ", $allQplValues). "',\n";
    $racetext .= "\t\t'New 2 QPL values'  =>  '" . implode(", ", $new2QplValues). "',\n";
    $racetext .= "\t\t'New 3 QPL values'  =>  '" . implode(", ", $new3QplValues). "',\n";
    
    if($primesMajority){
        $racetext .= "\t\t//Primes majority,\n";
        $racetext .= "\t\t'primes' =>  '" . implode(", ", $sPrimes). "',\n";
    }

    $forReference = array_diff($allQplValues, $allWinsValues);
    $forRefPrimes = array_intersect($forReference, $primes);
    $countPrimes1 = count($forRefPrimes);
    $racetext .= "\t\t'For reference  ' =>  '" . implode(", ", $forReference). "',//number of primes: $countPrimes1\n";
    $allWinsPrimes = array_intersect($allWinsValues, $primes);
    $countPrimes2 = count($allWinsPrimes);
    $racetext .= "\t\t'All wins values' =>  '" . implode(", ", $allWinsValues). "',//number of primes: $countPrimes2\n";
    $weird = array_diff($runners, $allQplValues);
    $weirdPrimes = array_intersect($weird, $primes);
    $countPrimes3 = count($weirdPrimes);
    $racetext .= "\t\t'Remaining' =>  '" . implode(", ", $weird). "',//number of primes: $countPrimes3,\n";
    if(isset($oldRemaining)){
        $diffRemaining = array_diff($oldRemaining, $weird);
        if(isset($oldDiff)) {
            $diffRemaining = array_values(array_unique(array_merge($diffRemaining, $oldDiff)));
        }
        $racetext .= "\t\t'diff' =>  '" . implode(", ", $diffRemaining). "',\n";
    }
    $first6 = array_slice($allQplValues, 0, 6);
    $iiiinter = array_intersect($first6, $allWinsValues);
    if(count( $iiiinter) >= 3){
        sort($first6);
        $racetext .= "\t\t'WIN' =>  '" . implode(", ", $forReference). "',\n";
        $racetext .= "\t\t'tce??' =>  '" . implode(", ", $first6). "',\n";
    }
   
    $racetext .= "\t],\n";
    unset($oldWINS);
    unset($oldQPLTrio);
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);