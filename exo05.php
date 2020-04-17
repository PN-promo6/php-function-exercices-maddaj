<?php

$codex = array(
    "A" => "A",
    "Z" => "B",
    "E" => "C",
    "R" => "D",
    "T" => "E",
    "Y" => "F",
    "U" => "G",
    "I" => "H",
    "O" => "I",
    "P" => "J",
    "Q" => "K",
    "S" => "L",
    "D" => "M",
    "F" => "N",
    "G" => "O",
    "H" => "P",
    "J" => "Q",
    "K" => "R",
    "L" => "S",
    "M" => "T",
    "W" => "U",
    "X" => "V",
    "C" => "W",
    "V" => "X",
    "B" => "Y",
    "N" => "Z",
    " " => " "
);

$messageCrypt = "DAOMKT EGKZTAW LWK WF AKZKT HTKEIT MTFAOM TF LGF ZTE WF YKGDAUT DAOMKT KTFAKR HAK S GRTWK ASSTEIT SWO MOFM A HTW HKTL ET SAFUAUT TI ZGFPGWK DGFLOTWK RW EGKZTAW JWT XGWL TMTL PGSO JWT XGWL DT LTDZSTN ZTAW LAFL DTFMOK LO XGMKT KADAUT LT KAHHGKMT A XGMKT TDHSWDAUT XGWL TMTL ST HITFOV RTL IGMTL RT ETL ZGOL A ETL DGML ST EGKZTAW FT LT LTFM HAL RT PGOT TM HGWK DGFMKTK LA ZTSST XGOV OS GWXKT WF SAKUT ZTE SAOLLT MGDZTK LA HKGOT ST KTFAKR L TF LAOLOM TM ROM DGF ZGF DGFLOTWK AHHKTFTN JWT MGWM YSAMMTWK XOM AWV RTHTFL RT ETSWO JWO S TEGWMT ETMMT STEGF XAWM ZOTF WF YKGDAUT LAFL RGWMT ST EGKZTAW IGFMTWV TM EGFYWL PWKA DAOL WF HTW MAKR JW GF FT S B HKTFRKAOM HSWL";

function decrypt($codex, $messageCrypt)
{
    for ($i = 0; $i < strlen($messageCrypt); $i++) {
        $currentLetter = $messageCrypt[$i];
        echo $codex[$currentLetter];
    }
}

decrypt($codex, $messageCrypt);
