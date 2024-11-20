<?php
$lang="en";			// Language ("en" - english, "ru" - russian)
$host="localhost";		//Your MySql server host (usually localhost)
$user="root";			//Your MySql user
$password="root";		//Your MySql user password
$db="charactersr";			//Character database
$hostr="localhost";		//Login databse host (realmd)
$userr="root";			//MySql User
$passwordr="root";		//MySql login db user pass
$dbr="logon";			//Login db name (realmd)
$database_encoding = ''; 	// Set encoding
$img_base = "img/";		// Image dir
$server = "localhost";		//Realm ip addres
$port = "8085";			//Realm port
$realm = 'Burning Realm'; //Your relamname
$title="Spora for OregonCore";		//Webpage title
$realmlist = 'logon.burning-wow.eu';
$lock_acc=0;			// Lock created account to IP address (1 - on, 0 - off)
$lock_reg=0;			// Registration only one (or more) account from one IP address0 - not limit, 1 - one acc,  2 - two acc, etc...


Switch ($lang)
{
    case "en":
        $button="create_en.gif";
        $text = Array(
            'acc' => 'Creation of account',
            'create' => 'is completed !',
            'failed' => 'was not possible !',
            'not_all' => 'Fields are filled not all',
            'taken' => 'is already taken !',
            'playerson' => 'players online',
            'off' => 'is offline',
            'realm' => 'set realmlist ',
            'name' => 'Account Name',
            'password' => 'Password',
            'ip_limit' => Array('From your IP ',' accounts are already created'),
            'char' => Array('Name','Race','Class','LvL','Location'),
        );
        break;
    //add more lang if you want
}

//do not edit after this line


$def = Array(
    'character_race' => Array(
        1 => 'Human',
        2 => 'Orc',
        3 => 'Dwarf',
        4 => 'Night&nbsp;Elf',
        5 => 'Undead',
        6 => 'Tauren',
        7 => 'Gnome',
        8 => 'Troll',
        9 => 'Goblin',
        10 => 'Blood&nbsp;Elf',
        11 => 'Draenei',
    ),

    'character_class' => Array(
        1 => 'Warrior',
        2 => 'Paladin',
        3 => 'Hunter',
        4 => 'Rogue',
        5 => 'Priest',
        7 => 'Shaman',
        8 => 'Mage',
        9 => 'Warlock',
        11 => 'Druid',
    ),
);

$zone = array (
    1 => 'Dun Morogh',
    2 => 'Longshore',
    3 => 'Badlands',
    4 => 'Blasted Lands',
    7 => 'Blackwater Cove',
    8 => 'Swamp of Sorrows',
    9 => 'Northshire Valley',
    10 => 'Duskwood',
    11 => 'Wetlands',
    12 => 'Elwynn Forest ',
    13 => 'The World Tree ',
    14 => 'Durotar ',
    15 => 'Dustwallow Marsh ',
    16 => 'Azshara ',
    17 => 'The Barrens ',
    18 => 'Crystal Lake ',
    19 => 'Zul\'Gurub ',
    20 => 'Moonbrook ',
    21 => 'Kul Tiras ',
    22 => 'Programmer Isle ',
    23 => 'Northshire River ',
    24 => 'Northshire Abbey ',
    25 => 'Blackrock Mountain ',
    26 => 'Lighthouse ',
    28 => 'Western Plaguelands ',
    30 => 'Nine ',
    32 => 'The Cemetary ',
    33 => 'Stranglethorn Vale ',
    34 => 'Echo Ridge Mine ',
    35 => 'Booty Bay ',
    36 => 'Alterac Mountains ',
    37 => 'Lake Nazferiti ',
    38 => 'Loch Modan ',
    40 => 'Westfall ',
    41 => 'Deadwind Pass ',
    42 => 'Darkshire ',
    43 => 'Wild Shore ',
    44 => 'Redridge Mountains ',
    45 => 'Arathi Highlands ',
    46 => 'Burning Steppes ',
    47 => 'The Hinterlands ',
    49 => 'Dead Man\'s Hole ',
    51 => 'Searing Gorge ',
    53 => 'Thieves Camp ',
    54 => 'Jasperlode Mine ',
    55 => 'Valley of Heroes ',
    56 => 'Heroes\' Vigil ',
    57 => 'Fargodeep Mine ',
    59 => 'Northshire Vineyards ',
    60 => 'Forest\'s Edge ',
    61 => 'Thunder Falls ',
    62 => 'Brackwell Pumpkin Patch ',
    63 => 'The Stonefield Farm ',
    64 => 'The Maclure Vineyards ',
    68 => 'Lake Everstill ',
    69 => 'Lakeshire ',
    70 => 'Stonewatch ',
    71 => 'Stonewatch Falls ',
    72 => 'The Dark Portal ',
    73 => 'The Tainted Scar ',
    74 => 'Pool of Tears ',
    75 => 'Stonard ',
    76 => 'Fallow Sanctuary ',
    77 => 'Anvilmar ',
    80 => 'Stormwind Mountains ',
    85 => 'Tirisfal Glades ',
    86 => 'Stone Cairn Lake ',
    87 => 'Goldshire ',
    88 => 'Eastvale Logging Camp ',
    89 => 'Mirror Lake Orchard ',
    91 => 'Tower of Azora ',
    92 => 'Mirror Lake ',
    93 => 'Vul\'Gol Ogre Mound ',
    94 => 'Raven Hill ',
    95 => 'Redridge Canyons ',
    96 => 'Tower of Ilgalar ',
    97 => 'Alther\'s Mill ',
    98 => 'Rethban Caverns ',
    99 => 'Rebel Camp ',
    100 => 'Nesingwary\'s Expedition ',
    101 => 'Kurzen\'s Compound ',
    102 => 'Ruins of Zul\'Kunda ',
    103 => 'Ruins of Zul\'Mamwe ',
    104 => 'The Vile Reef ',
    105 => 'Mosh\'Ogg Ogre Mound ',
    106 => 'The Stockpile ',
    107 => 'Saldean\'s Farm ',
    108 => 'Sentinel Hill ',
    109 => 'Furlbrow\'s Pumpkin Farm ',
    111 => 'Jangolode Mine ',
    113 => 'Gold Coast Quarry ',
    115 => 'Westfall Lighthouse ',
    116 => 'Misty Valley ',
    117 => 'Grom\'gol Base Camp ',
    118 => 'Whelgar\'s Excavation Site ',
    120 => 'Westbrook Garrison ',
    121 => 'Tranquil Gardens Cemetery ',
    122 => 'Zuuldaia Ruins ',
    123 => 'Bal\'lal Ruins ',
    125 => 'Kal\'ai Ruins ',
    126 => 'Tkashi Ruins ',
    127 => 'Balia\'mah Ruins ',
    128 => 'Ziata\'jai Ruins ',
    129 => 'Mizjah Ruins ',
    130 => 'Silverpine Forest ',
    131 => 'Kharanos ',
    132 => 'Coldridge Valley ',
    133 => 'Gnomeregan ',
    134 => 'Gol\'Bolar Quarry ',
    135 => 'Frostmane Hold ',
    136 => 'The Grizzled Den ',
    137 => 'Brewnall Village ',
    138 => 'Misty Pine Refuge ',
    139 => 'Eastern Plaguelands ',
    141 => 'Teldrassil ',
    142 => 'Ironband\'s Excavation Site ',
    143 => 'Mo\'grosh Stronghold ',
    144 => 'Thelsamar ',
    145 => 'Algaz Gate ',
    146 => 'Stonewrought Dam ',
    147 => 'The Farstrider Lodge ',
    148 => 'Darkshore ',
    149 => 'Silver Stream Mine ',
    150 => 'Menethil Harbor ',
    151 => 'Designer Island ',
    152 => 'The Bulwark ',
    153 => 'Ruins of Lordaeron ',
    154 => 'Deathknell ',
    155 => 'Night Web\'s Hollow ',
    156 => 'Solliden Farmstead ',
    157 => 'Agamand Mills ',
    158 => 'Agamand Family Crypt ',
    159 => 'Brill ',
    160 => 'Whispering Gardens ',
    161 => 'Terrace of Repose ',
    162 => 'Brightwater Lake ',
    163 => 'Gunther\'s Retreat ',
    164 => 'Garren\'s Haunt ',
    165 => 'Balnir Farmstead ',
    166 => 'Cold Hearth Manor ',
    167 => 'Crusader Outpost ',
    168 => 'The North Coast ',
    169 => 'Whispering Shore ',
    170 => 'Lordamere Lake ',
    172 => 'Fenris Isle ',
    173 => 'Faol\'s Rest ',
    186 => 'Dolanaar ',
    188 => 'Shadowglen ',
    189 => 'Steelgrill\'s Depot ',
    190 => 'Hearthglen ',
    192 => 'Northridge Lumber Camp ',
    193 => 'Ruins of Andorhal ',
    195 => 'School of Necromancy ',
    196 => 'Uther\'s Tomb ',
    197 => 'Sorrow Hill ',
    198 => 'The Weeping Cave ',
    199 => 'Felstone Field ',
    200 => 'Dalson\'s Tears ',
    201 => 'Gahrron\'s Withering ',
    202 => 'The Writhing Haunt ',
    203 => 'Mardenholde Keep ',
    204 => 'Pyrewood Village ',
    205 => 'Dun Modr ',
    207 => 'The Great Sea ',
    208 => 'Unused Ironcladcove ',
    209 => 'Shadowfang Keep ',
    211 => 'Iceflow Lake ',
    212 => 'Helm\'s Bed Lake ',
    213 => 'Deep Elem Mine ',
    214 => 'The Great Sea ',
    215 => 'Mulgore ',
    219 => 'Alexston Farmstead ',
    220 => 'Red Cloud Mesa ',
    221 => 'Camp Narache ',
    222 => 'Bloodhoof Village ',
    223 => 'Stonebull Lake ',
    224 => 'Ravaged Caravan ',
    225 => 'Red Rocks ',
    226 => 'The Skittering Dark ',
    227 => 'Valgan\'s Field ',
    228 => 'The Sepulcher ',
    229 => 'Olsen\'s Farthing ',
    230 => 'The Greymane Wall ',
    231 => 'Beren\'s Peril ',
    232 => 'The Dawning Isles ',
    233 => 'Ambermill ',
    235 => 'Fenris Keep ',
    236 => 'Shadowfang Keep ',
    237 => 'The Decrepit Ferry ',
    238 => 'Malden\'s Orchard ',
    239 => 'The Ivar Patch ',
    240 => 'The Dead Field ',
    241 => 'The Rotting Orchard ',
    242 => 'Brightwood Grove ',
    243 => 'Forlorn Rowe ',
    244 => 'The Whipple Estate ',
    245 => 'The Yorgen Farmstead ',
    246 => 'The Cauldron ',
    247 => 'Grimesilt Dig Site ',
    249 => 'Dreadmaul Rock ',
    250 => 'Ruins of Thaurissan ',
    251 => 'Flame Crest ',
    252 => 'Blackrock Stronghold ',
    253 => 'The Pillar of Ash ',
    254 => 'Blackrock Mountain ',
    255 => 'Altar of Storms ',
    256 => 'Aldrassil ',
    257 => 'Shadowthread Cave ',
    258 => 'Fel Rock ',
    259 => 'Lake Al\'Ameth ',
    260 => 'Starbreeze Village ',
    261 => 'Gnarlpine Hold ',
    262 => 'Ban\'ethil Barrow Den ',
    263 => 'The Cleft ',
    264 => 'The Oracle Glade ',
    265 => 'Wellspring River ',
    266 => 'Wellspring Lake ',
    267 => 'Hillsbrad Foothills ',
    268 => 'Azshara Crater ',
    269 => 'Dun Algaz ',
    271 => 'Southshore ',
    272 => 'Tarren Mill ',
    275 => 'Durnholde Keep ',
    276 => 'Stonewrought Pass ',
    277 => 'The Foothill Caverns ',
    278 => 'Lordamere Internment Camp ',
    279 => 'Dalaran ',
    280 => 'Strahnbrad ',
    281 => 'Ruins of Alterac ',
    282 => 'Crushridge Hold ',
    283 => 'Slaughter Hollow ',
    284 => 'The Uplands ',
    285 => 'Southpoint Tower ',
    286 => 'Hillsbrad Fields ',
    287 => 'Hillsbrad ',
    288 => 'Azurelode Mine ',
    289 => 'Nethander Stead ',
    290 => 'Dun Garok ',
    293 => 'Thoradin\'s Wall ',
    294 => 'Eastern Strand ',
    295 => 'Western Strand ',
    297 => 'Jaguero Isle ',
    298 => 'Baradin Bay ',
    299 => 'Menethil Bay ',
    300 => 'Misty Reed Strand ',
    301 => 'The Savage Coast ',
    302 => 'The Crystal Shore ',
    303 => 'Shell Beach ',
    305 => 'North Tide\'s Run ',
    306 => 'South Tide\'s Run ',
    307 => 'The Overlook Cliffs ',
    308 => 'The Forbidding Sea ',
    309 => 'Ironbeard\'s Tomb ',
    310 => 'Crystalvein Mine ',
    311 => 'Ruins of Aboraz ',
    312 => 'Janeiro\'s Point ',
    313 => 'Northfold Manor ',
    314 => 'Go\'Shek Farm ',
    315 => 'Dabyrie\'s Farmstead ',
    316 => 'Boulderfist Hall ',
    317 => 'Witherbark Village ',
    318 => 'Drywhisker Gorge ',
    320 => 'Refuge Pointe ',
    321 => 'Hammerfall ',
    322 => 'Blackwater Shipwrecks ',
    323 => 'O\'Breen\'s Camp ',
    324 => 'Stromgarde Keep ',
    325 => 'The Tower of Arathor ',
    326 => 'The Sanctum ',
    327 => 'Faldir\'s Cove ',
    328 => 'The Drowned Reef ',
    330 => 'Thandol Span ',
    331 => 'Ashenvale ',
    332 => 'The Great Sea ',
    333 => 'Circle of East Binding ',
    334 => 'Circle of West Binding ',
    335 => 'Circle of Inner Binding ',
    336 => 'Circle of Outer Binding ',
    337 => 'Apocryphan\'s Rest ',
    338 => 'Angor Fortress ',
    339 => 'Lethlor Ravine ',
    340 => 'Kargath ',
    341 => 'Camp Kosh ',
    342 => 'Camp Boff ',
    343 => 'Camp Wurg ',
    344 => 'Camp Cagg ',
    345 => 'Agmond\'s End ',
    346 => 'Hammertoe\'s Digsite ',
    347 => 'Dustbelch Grotto ',
    348 => 'Aerie Peak ',
    349 => 'Wildhammer Keep ',
    350 => 'Quel\'Danil Lodge ',
    351 => 'Skulk Rock ',
    352 => 'Zun\'watha ',
    353 => 'Shadra\'Alor ',
    354 => 'Jintha\'Alor ',
    355 => 'The Altar of Zul ',
    356 => 'Seradane ',
    357 => 'Feralas ',
    358 => 'Brambleblade Ravine ',
    359 => 'Bael Modan ',
    360 => 'The Venture Co. Mine ',
    361 => 'Felwood ',
    362 => 'Razor Hill ',
    363 => 'Valley of Trials ',
    364 => 'The Den ',
    365 => 'Burning Blade Coven ',
    366 => 'Kolkar Crag ',
    367 => 'Sen\'jin Village ',
    368 => 'Echo Isles ',
    369 => 'Thunder Ridge ',
    370 => 'Drygulch Ravine ',
    371 => 'Dustwind Cave ',
    372 => 'Tiragarde Keep ',
    373 => 'Scuttle Coast ',
    374 => 'Bladefist Bay ',
    375 => 'Deadeye Shore ',
    377 => 'Southfury River ',
    378 => 'Camp Taurajo ',
    379 => 'Far Watch Post ',
    380 => 'The Crossroads ',
    381 => 'Boulder Lode Mine ',
    382 => 'The Sludge Fen ',
    383 => 'The Dry Hills ',
    384 => 'Dreadmist Peak ',
    385 => 'Northwatch Hold ',
    386 => 'The Forgotten Pools ',
    387 => 'Lushwater Oasis ',
    388 => 'The Stagnant Oasis ',
    390 => 'Field of Giants ',
    391 => 'The Merchant Coast ',
    392 => 'Ratchet ',
    393 => 'Darkspear Strand ',
    396 => 'Winterhoof Water Well ',
    397 => 'Thunderhorn Water Well ',
    398 => 'Wildmane Water Well ',
    399 => 'Skyline Ridge ',
    400 => 'Thousand Needles ',
    401 => 'The Tidus Stair ',
    403 => 'Shady Rest Inn ',
    404 => 'Bael\'dun Digsite ',
    405 => 'Desolace ',
    406 => 'Stonetalon Mountains ',
    408 => 'Gillijim\'s Isle ',
    409 => 'Island of Doctor Lapidis ',
    410 => 'Razorwind Canyon ',
    411 => 'Bathran\'s Haunt ',
    412 => 'The Ruins of Ordil\'Aran ',
    413 => 'Maestra\'s Post ',
    414 => 'The Zoram Strand ',
    415 => 'Astranaar ',
    416 => 'The Shrine of Aessina ',
    417 => 'Fire Scar Shrine ',
    418 => 'The Ruins of Stardust ',
    419 => 'The Howling Vale ',
    420 => 'Silverwind Refuge ',
    421 => 'Mystral Lake ',
    422 => 'Fallen Sky Lake ',
    424 => 'Iris Lake ',
    425 => 'Moonwell ',
    426 => 'Raynewood Retreat ',
    427 => 'The Shady Nook ',
    428 => 'Night Run ',
    429 => 'Xavian ',
    430 => 'Satyrnaar ',
    431 => 'Splintertree Post ',
    432 => 'The Dor\'Danil Barrow Den ',
    433 => 'Falfarren River ',
    434 => 'Felfire Hill ',
    435 => 'Demon Fall Canyon ',
    436 => 'Demon Fall Ridge ',
    437 => 'Warsong Lumber Camp ',
    438 => 'Bough Shadow ',
    439 => 'The Shimmering Flats ',
    440 => 'Tanaris ',
    441 => 'Lake Falathim ',
    442 => 'Auberdine ',
    443 => 'Ruins of Mathystra ',
    444 => 'Tower of Althalaxx ',
    445 => 'Cliffspring Falls ',
    446 => 'Bashal\'Aran ',
    447 => 'Ameth\'Aran ',
    448 => 'Grove of the Ancients ',
    449 => 'The Master\'s Glaive ',
    450 => 'Remtravel\'s Excavation ',
    452 => 'Mist\'s Edge ',
    453 => 'The Long Wash ',
    454 => 'Wildbend River ',
    455 => 'Blackwood Den ',
    456 => 'Cliffspring River ',
    457 => 'The Veiled Sea ',
    458 => 'Gold Road ',
    459 => 'Scarlet Watch Post ',
    460 => 'Sun Rock Retreat ',
    461 => 'Windshear Crag ',
    463 => 'Cragpool Lake ',
    464 => 'Mirkfallon Lake ',
    465 => 'The Charred Vale ',
    466 => 'Valley of the Bloodfuries ',
    467 => 'Stonetalon Peak ',
    468 => 'The Talon Den ',
    469 => 'Greatwood Vale ',
    471 => 'Brave Wind Mesa ',
    472 => 'Fire Stone Mesa ',
    473 => 'Mantle Rock ',
    477 => 'Ruins of Jubuwal ',
    478 => 'Pools of Arlithrien ',
    479 => 'The Rustmaul Dig Site ',
    480 => 'Camp E\'thok ',
    481 => 'Splithoof Crag ',
    482 => 'Highperch ',
    483 => 'The Screeching Canyon ',
    484 => 'Freewind Post ',
    485 => 'The Great Lift ',
    486 => 'Galak Hold ',
    487 => 'Roguefeather Den ',
    488 => 'The Weathered Nook ',
    489 => 'Thalanaar ',
    490 => 'Un\'Goro Crater ',
    491 => 'Razorfen Kraul ',
    492 => 'Raven Hill Cemetery ',
    493 => 'Moonglade ',
    496 => 'Brackenwall Village ',
    497 => 'Swamplight Manor ',
    498 => 'Bloodfen Burrow ',
    499 => 'Darkmist Cavern ',
    500 => 'Moggle Point ',
    501 => 'Beezil\'s Wreck ',
    502 => 'Witch Hill ',
    503 => 'Sentry Point ',
    504 => 'North Point Tower ',
    505 => 'West Point Tower ',
    506 => 'Lost Point ',
    507 => 'Bluefen ',
    508 => 'Stonemaul Ruins ',
    509 => 'The Den of Flame ',
    510 => 'The Dragonmurk ',
    511 => 'Wyrmbog ',
    512 => 'Onyxia\'s Lair ',
    513 => 'Theramore Isle ',
    514 => 'Foothold Citadel ',
    515 => 'Ironclad Prison ',
    516 => 'Dustwallow Bay ',
    517 => 'Tidefury Cove ',
    518 => 'Dreadmurk Shore ',
    536 => 'Addle\'s Stead ',
    537 => 'Fire Plume Ridge ',
    538 => 'Lakkari Tar Pits ',
    539 => 'Terror Run ',
    540 => 'The Slithering Scar ',
    541 => 'Marshal\'s Refuge ',
    542 => 'Fungal Rock ',
    543 => 'Golakka Hot Springs ',
    556 => 'The Loch ',
    576 => 'Beggar\'s Haunt ',
    596 => 'Kodo Graveyard ',
    597 => 'Ghost Walker Post ',
    598 => 'Sar\'theris Strand ',
    599 => 'Thunder Axe Fortress ',
    600 => 'Bolgan\'s Hole ',
    602 => 'Mannoroc Coven ',
    603 => 'Sargeron ',
    604 => 'Magram Village ',
    606 => 'Gelkis Village ',
    607 => 'Valley of Spears ',
    608 => 'Nijel\'s Point ',
    609 => 'Kolkar Village ',
    616 => 'Hyjal ',
    618 => 'Winterspring ',
    636 => 'Blackwolf River ',
    637 => 'Kodo Rock ',
    638 => 'Hidden Path ',
    639 => 'Spirit Rock ',
    640 => 'Shrine of the Dormant Flame ',
    656 => 'Lake Elune\'ara ',
    657 => 'The Harborage ',
    676 => 'Outland ',
    696 => 'Craftsmen\'s Terrace ',
    697 => 'Tradesmen\'s Terrace ',
    698 => 'The Temple Gardens ',
    699 => 'Temple of Elune ',
    700 => 'Cenarion Enclave ',
    701 => 'Warrior\'s Terrace ',
    702 => 'Rut\'theran Village ',
    716 => 'Ironband\'s Compound ',
    717 => 'The Stockade (Dungeon)',
    718 => 'Wailing Caverns ',
    719 => 'Blackfathom Deeps ',
    720 => 'Fray Island ',
    721 => 'Gnomeregan ',
    722 => 'Razorfen Downs ',
    736 => 'Ban\'ethil Hollow ',
    796 => 'Scarlet Monastery ',
    797 => 'Jerod\'s Landing ',
    798 => 'Ridgepoint Tower ',
    799 => 'The Darkened Bank ',
    800 => 'Coldridge Pass ',
    801 => 'Chill Breeze Valley ',
    802 => 'Shimmer Ridge ',
    803 => 'Amberstill Ranch ',
    804 => 'The Tundrid Hills ',
    805 => 'South Gate Pass ',
    806 => 'South Gate Outpost ',
    807 => 'North Gate Pass ',
    808 => 'North Gate Outpost ',
    809 => 'Gates of Ironforge ',
    810 => 'Stillwater Pond ',
    811 => 'Nightmare Vale ',
    812 => 'Venomweb Vale ',
    813 => 'The Bulwark ',
    814 => 'Southfury River ',
    815 => 'Southfury River ',
    816 => 'Razormane Grounds ',
    817 => 'Skull Rock ',
    818 => 'Palemane Rock ',
    819 => 'Windfury Ridge ',
    820 => 'The Golden Plains ',
    821 => 'The Rolling Plains ',
    836 => 'Dun Algaz ',
    837 => 'Dun Algaz ',
    838 => 'North Gate Pass ',
    839 => 'South Gate Pass ',
    856 => 'Twilight Grove ',
    876 => 'GM Island ',
    878 => 'Southfury River ',
    879 => 'Southfury River ',
    880 => 'Thandol Span ',
    881 => 'Thandol Span ',
    896 => 'Purgation Isle ',
    916 => 'The Jansen Stead ',
    917 => 'The Dead Acre ',
    918 => 'The Molsen Farm ',
    919 => 'Stendel\'s Pond ',
    920 => 'The Dagger Hills ',
    921 => 'Demont\'s Place ',
    922 => 'The Dust Plains ',
    923 => 'Stonesplinter Valley ',
    924 => 'Valley of Kings ',
    925 => 'Algaz Station ',
    926 => 'Bucklebree Farm ',
    927 => 'The Shining Strand ',
    928 => 'North Tide\'s Hollow ',
    936 => 'Grizzlepaw Ridge ',
    956 => 'The Verdant Fields ',
    976 => 'Gadgetzan ',
    977 => 'Steamwheedle Port ',
    978 => 'Zul\'Farrak ',
    979 => 'Sandsorrow Watch ',
    980 => 'Thistleshrub Valley ',
    981 => 'The Gaping Chasm ',
    982 => 'The Noxious Lair ',
    983 => 'Dunemaul Compound ',
    984 => 'Eastmoon Ruins ',
    985 => 'Waterspring Field ',
    986 => 'Zalashji\'s Den ',
    987 => 'Land\'s End Beach ',
    988 => 'Wavestrider Beach ',
    989 => 'Uldum ',
    990 => 'Valley of the Watchers ',
    991 => 'Gunstan\'s Post ',
    992 => 'Southmoon Ruins ',
    996 => 'Render\'s Camp ',
    997 => 'Render\'s Valley ',
    998 => 'Render\'s Rock ',
    999 => 'Stonewatch Tower ',
    1000 => 'Galardell Valley ',
    1001 => 'Lakeridge Highway ',
    1002 => 'Three Corners ',
    1016 => 'Direforge Hill ',
    1017 => 'Raptor Ridge ',
    1018 => 'Black Channel Marsh ',
    1019 => 'The Green Belt ',
    1020 => 'Mosshide Fen ',
    1021 => 'Thelgen Rock ',
    1022 => 'Bluegill Marsh ',
    1023 => 'Saltspray Glen ',
    1024 => 'Sundown Marsh ',
    1025 => 'The Green Belt ',
    1036 => 'Angerfang Encampment ',
    1037 => 'Grim Batol ',
    1038 => 'Dragonmaw Gates ',
    1039 => 'The Lost Fleet ',
    1056 => 'Darrow Hill ',
    1057 => 'Thoradin\'s Wall ',
    1076 => 'Webwinder Path ',
    1097 => 'The Hushed Bank ',
    1098 => 'Manor Mistmantle ',
    1099 => 'Camp Mojache ',
    1100 => 'Grimtotem Compound ',
    1101 => 'The Writhing Deep ',
    1102 => 'Wildwind Lake ',
    1103 => 'Gordunni Outpost ',
    1104 => 'Mok\'Gordun ',
    1105 => 'Feral Scar Vale ',
    1106 => 'Frayfeather Highlands ',
    1107 => 'Idlewind Lake ',
    1108 => 'The Forgotten Coast ',
    1109 => 'East Pillar ',
    1110 => 'West Pillar ',
    1111 => 'Dream Bough ',
    1112 => 'Jademir Lake ',
    1113 => 'Oneiros ',
    1114 => 'Ruins of Ravenwind ',
    1115 => 'Rage Scar Hold ',
    1116 => 'Feathermoon Stronghold ',
    1117 => 'Ruins of Solarsal ',
    1119 => 'The Twin Colossals ',
    1120 => 'Sardor Isle ',
    1121 => 'Isle of Dread ',
    1136 => 'High Wilderness ',
    1137 => 'Lower Wilds ',
    1156 => 'Southern Barrens ',
    1157 => 'Southern Gold Road ',
    1176 => 'Zul\'Farrak ',
    1216 => 'Timbermaw Hold ',
    1217 => 'Vanndir Encampment ',
    1219 => 'Legash Encampment ',
    1220 => 'Thalassian Base Camp ',
    1221 => 'Ruins of Eldarath ',
    1222 => 'Hetaera\'s Clutch ',
    1223 => 'Temple of Zin-Malor ',
    1224 => 'Bear\'s Head ',
    1225 => 'Ursolan ',
    1226 => 'Temple of Arkkoran ',
    1227 => 'Bay of Storms ',
    1228 => 'The Shattered Strand ',
    1229 => 'Tower of Eldara ',
    1230 => 'Jagged Reef ',
    1231 => 'Southridge Beach ',
    1232 => 'Ravencrest Monument ',
    1233 => 'Forlorn Ridge ',
    1234 => 'Lake Mennar ',
    1235 => 'Shadowsong Shrine ',
    1236 => 'Haldarr Encampment ',
    1237 => 'Valormok ',
    1256 => 'The Ruined Reaches ',
    1276 => 'The Talondeep Path ',
    1277 => 'The Talondeep Path ',
    1296 => 'Rocktusk Farm ',
    1297 => 'Jaggedswine Farm ',
    1316 => 'Razorfen Downs ',
    1336 => 'Lost Rigger Cove ',
    1337 => 'Uldaman ',
    1338 => 'Lordamere Lake ',
    1339 => 'Lordamere Lake ',
    1357 => 'Gallows\' Corner ',
    1377 => 'Silithus ',
    1397 => 'Emerald Forest ',
    1417 => 'Sunken Temple ',
    1437 => 'Dreadmaul Hold ',
    1438 => 'Nethergarde Keep ',
    1439 => 'Dreadmaul Post ',
    1440 => 'Serpent\'s Coil ',
    1441 => 'Altar of Storms ',
    1442 => 'Firewatch Ridge ',
    1443 => 'The Slag Pit ',
    1444 => 'The Sea of Cinders ',
    1445 => 'Blackrock Mountain ',
    1446 => 'Thorium Point ',
    1457 => 'Garrison Armory ',
    1477 => 'The Temple of Atal\'Hakkar ',
    1497 => 'Undercity  (Capital)',
    1517 => 'Uldaman ',
    1518 => 'Not Used Deadmines ',
    1519 => 'Stormwind City (Capital)',
    1537 => 'Ironforge (Capital)',
    1557 => 'Splithoof Hold ',
    1577 => 'The Cape of Stranglethorn ',
    1578 => 'Southern Savage Coast ',
    1579 => 'Unused The Deadmines 002 ',
    1580 => 'Unused Ironclad Cove 003 ',
    1581 => 'The Deadmines (Dungeon)',
    1582 => 'Ironclad Cove ',
    1583 => 'Blackrock Spire ',
    1584 => 'Blackrock Depths ',
    1597 => 'Raptor Grounds UNUSED ',
    1598 => 'Grol\'dom Farm UNUSED ',
    1599 => 'Mor\'shan Base Camp ',
    1600 => 'Honor\'s Stand UNUSED ',
    1601 => 'Blackthorn Ridge UNUSED ',
    1602 => 'Bramblescar UNUSED ',
    1603 => 'Agama\'gor UNUSED ',
    1617 => 'Valley of Heroes ',
    1637 => 'Orgrimmar (Capital)',
    1638 => 'Thunder Bluff (Capital)',
    1639 => 'Elder Rise ',
    1640 => 'Spirit Rise ',
    1641 => 'Hunter Rise ',
    1657 => 'Darnassus (Capital)',
    1658 => 'Cenarion Enclave ',
    1659 => 'Craftsmen\'s Terrace ',
    1660 => 'Warrior\'s Terrace ',
    1661 => 'The Temple Gardens ',
    1662 => 'Tradesmen\'s Terrace ',
    1677 => 'Gavin\'s Naze ',
    1678 => 'Sofera\'s Naze ',
    1679 => 'Corrahn\'s Dagger ',
    1680 => 'The Headland ',
    1681 => 'Misty Shore ',
    1682 => 'Dandred\'s Fold ',
    1683 => 'Growless Cave ',
    1684 => 'Chillwind Point ',
    1697 => 'Raptor Grounds ',
    1698 => 'Bramblescar ',
    1699 => 'Thorn Hill ',
    1700 => 'Agama\'gor ',
    1701 => 'Blackthorn Ridge ',
    1702 => 'Honor\'s Stand ',
    1703 => 'The Mor\'shan Rampart ',
    1704 => 'Grol\'dom Farm ',
    1717 => 'Razorfen Kraul ',
    1718 => 'The Great Lift ',
    1737 => 'Mistvale Valley ',
    1738 => 'Nek\'mani Wellspring ',
    1739 => 'Bloodsail Compound ',
    1740 => 'Venture Co. Base Camp ',
    1741 => 'Gurubashi Arena ',
    1742 => 'Spirit Den ',
    1757 => 'The Crimson Veil ',
    1758 => 'The Riptide ',
    1759 => 'The Damsel\'s Luck ',
    1760 => 'Venture Co. Operations Center ',
    1761 => 'Deadwood Village ',
    1762 => 'Felpaw Village ',
    1763 => 'Jaedenar ',
    1764 => 'Bloodvenom River ',
    1765 => 'Bloodvenom Falls ',
    1766 => 'Shatter Scar Vale ',
    1767 => 'Irontree Woods ',
    1768 => 'Irontree Cavern ',
    1769 => 'Timbermaw Hold ',
    1770 => 'Shadow Hold ',
    1771 => 'Shrine of the Deceiver ',
    1777 => 'Itharius\'s Cave ',
    1778 => 'Sorrowmurk ',
    1779 => 'Draenil\'dur Village ',
    1780 => 'Splinterspear Junction ',
    1797 => 'Stagalbog ',
    1798 => 'The Shifting Mire ',
    1817 => 'Stagalbog Cave ',
    1837 => 'Witherbark Caverns ',
    1857 => 'Thoradin\'s Wall ',
    1858 => 'Boulder\'gor ',
    1877 => 'Valley of Fangs ',
    1878 => 'The Dustbowl ',
    1879 => 'Mirage Flats ',
    1880 => 'Featherbeard\'s Hovel ',
    1881 => 'Shindigger\'s Camp ',
    1882 => 'Plaguemist Ravine ',
    1883 => 'Valorwind Lake ',
    1884 => 'Agol\'watha ',
    1885 => 'Hiri\'watha ',
    1886 => 'The Creeping Ruin ',
    1887 => 'Bogen\'s Ledge ',
    1897 => 'The Maker\'s Terrace ',
    1898 => 'Dustwind Gulch ',
    1917 => 'Shaol\'watha ',
    1937 => 'Noonshade Ruins ',
    1938 => 'Broken Pillar ',
    1939 => 'Abyssal Sands ',
    1940 => 'Southbreak Shore ',
    1941 => 'Caverns of Time ',
    1942 => 'The Marshlands ',
    1943 => 'Ironstone Plateau ',
    1957 => 'Blackchar Cave ',
    1958 => 'Tanner Camp ',
    1959 => 'Dustfire Valley ',
    1977 => 'Zul\'Gurub ',
    1978 => 'Misty Reed Post ',
    1997 => 'Bloodvenom Post ',
    1998 => 'Talonbranch Glade ',
    2017 => 'Stratholme ',
    2037 => 'Quel\'thalas ',
    2057 => 'Scholomance ',
    2077 => 'Twilight Vale ',
    2078 => 'Twilight Shore ',
    2079 => 'Alcaz Island ',
    2097 => 'Darkcloud Pinnacle ',
    2098 => 'Dawning Wood Catacombs ',
    2099 => 'Stonewatch Keep ',
    2100 => 'Maraudon ',
    2101 => 'Stoutlager Inn ',
    2102 => 'Thunderbrew Distillery ',
    2103 => 'Menethil Keep ',
    2104 => 'Deepwater Tavern ',
    2117 => 'Shadow Grave ',
    2118 => 'Brill Town Hall ',
    2119 => 'Gallows\' End Tavern ',
    2137 => 'The Pools of Vision ',
    2138 => 'Dreadmist Den ',
    2157 => 'Bael\'dun Keep ',
    2158 => 'Emberstrife\'s Den ',
    2159 => 'Onyxia\'s Lair ',
    2160 => 'Windshear Mine ',
    2161 => 'Roland\'s Doom ',
    2177 => 'Battle Ring ',
    2197 => 'The Pools of Vision ',
    2198 => 'Shadowbreak Ravine ',
    2217 => 'Broken Spear Village ',
    2237 => 'Whitereach Post ',
    2238 => 'Gornia ',
    2239 => 'Zane\'s Eye Crater ',
    2240 => 'Mirage Raceway ',
);