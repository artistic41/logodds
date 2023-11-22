<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = 1;
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

$totalRaces = count($allOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allOdds[$raceNumber])) continue;

    if(isset($oldData)){
        if(isset($oldData[$raceNumber])){
            $oldRaceData = $oldData[$raceNumber];
            if(isset($oldRaceData['places'])) $oldPlaces = $oldRaceData['places'];
        }
    }

    if(isset($oldPlaces)) $places = explode(", ", $oldPlaces);
    else $places = [];

    $racetext = "";
    $tmpArray = $allOdds[$raceNumber];
    asort($tmpArray);
    $runners = array_keys($tmpArray);
    
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";

    $racetext .= "\t\t'All Runners   '  =>  '" . implode(", ", $runners).  "',\n";

    $first = $runners[0];
    $size = count($runners);
    $last = end($runners);

    $pos = array_search($size, $runners);
    if($pos){
        $place = [$runners[$pos]];
        if(isset($runners[$pos - 1])) $place[] = $runners[$pos - 1];
        if(isset($runners[$pos + 1])) $place[] = $runners[$pos + 1];
        $places = array_values(array_unique(array_merge($places, $place)));
        $racetext .= "\t\t'Place'  => '" . implode(", ", $place).  "',\n";
        if($pos == count($runners) - 1){
            $racetext .= "\t\t'WP' => '" . $first .  "',\n";
        }
        if($pos < 6){
            $racetext .= "\t\t//In first 6 runners!\n";
        }
        if(isset($runners[$pos - 8])) {
            $minus8 = $runners[$pos - 8];
            $racetext .= "\t\t'Sure Place' => '" . $minus8 .  "',\n";

        }
    }

    if(in_array($last, [11, 12, 13, 14])){
        $racetext .= "\t\t'Also Place' => '" . $first .  "',\n";
    }
    //1. Sort  places by odds
    $qplsOdds = [];
    foreach($places as $iIndex){
        if(isset($allOdds[$raceNumber][$iIndex])) $qplsOdds[$iIndex] = $allOdds[$raceNumber][$iIndex];
    }
    asort($qplsOdds);
    $places = array_keys($qplsOdds);
    $after4 = array_slice($runners, 3, count($runners) - 4);
    $places = array_intersect($after4, $places);
    if(!empty($places)){
        $racetext .= "\t\t'places' => '" . implode(", ", $places).  "',\n";
    }
    
    $racetext .= "\t],\n";
    unset($oldPlaces);
    unset($places);
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
