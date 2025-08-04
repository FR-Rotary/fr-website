<table>
<?php
define('PARTY_DATE', 0);
define('THEME', 1);
define('PICTURES', 2);
define('POSTER', 3);

define('IMAGE_PATH', 'images/husfester/');

$parties = [
    ['Höst 14', 'White Trashmas',                       '',                             'husfestaffisch-1412.png'   ],
    ['Vår 14',  'Inställd',                             '',                             ''                          ],
    ['Höst 13', '80/90-tal',                            '',                             'husfestaffisch-1311.png'   ],
    ['Vår 13',  'Inställd',                             '',                             ''                          ],
    ['Höst 12', 'Inställd',                             '',                             ''                          ],
    ['Vår 12',  'Italien',                              'husfest_120331/index.html',    'husfestaffisch-1203.png'   ],
    ['Höst 11', 'Sport',                                'husfest_111126/index.html',    'husfestaffisch-1111.png'   ],
    ['Vår 11',  'Tyskland',                             'husfest_110416/index.html',    'husfestaffisch-1104.png'   ],
    ['Höst 10', 'White trash',                          'husfest_101120/index.html',    'husfestaffisch-1011.png'   ],
    ['Vår 10',  'Sovjet/Ryssland',                      'husfest_100327/index.html',    'husfestaffisch-1003.png'   ],
    ['Höst 09', 'Pirates!',                             'husfest_091107/index.html',    'husfestaffisch-0911.jpg'   ],
    ['Vår 09',  'Japan',                                'husfest_090404/index.html',    'husfestaffisch-0904.png'   ],
    ['Höst 08', 'Religion',                             'husfest_081108/index.html',    'husfestaffisch-0811.png'   ],
    ['Vår 08',  'Charter + TV-spel',                    'husfest_080412/index.html',    'husfestaffisch-0804.png'   ],
    ['Höst 07', 'Pirates!',                             'husfest_071110/index.html',    'husfestaffisch-0711.jpg'   ],
    ['Vår 07',  'Superhjälte',                          'husfest_070505/index.htm',     'husfestaffisch-0705.pdf'   ],
    ['Höst 06', 'Rom',                                  'Husfest_061202/page_01.htm',   'husfestaffisch-0612.jpg'   ],
    ['Vår 06',  'White Trash!',                         'Husfest_060508/index.html',    'husfestaffisch-0604.jpg'   ],
    ['Höst 05', 'Pirat',                                '',                             ''                          ],
    ['Vår 05',  'Inget tema',                           '',                             ''                          ],
    ['Höst 04', 'Inget tema',                           '',                             ''                          ],
    ['Vår 04',  'Inget tema',                           '',                             ''                          ],
    ['Höst 03', 'Inget tema',                           'husfest_fall03/index.html',    ''                          ],
    ['Vår 03',  'Inställd',                             '',                             ''                          ],
    ['Höst 02', 'Toga-Party',                           'toga/index.html',              ''                          ],
    ['Vår 02',  '80-tal',                               '80/index.html',                ''                          ],
    ['Höst 01', 'Hollywood',                            'Hollywood/Index.html',         ''                          ],
    ['Vår 01',  'MASKerad',                             'MASKerad/index.html',          ''                          ],
    ['Höst 00', 'Studio54',                             'studio54/index.html',          ''                          ],
    ['Vår 00',  'Bibel 2000',                           '',                             ''                          ],
    ['Höst 99', 'Barnkalas',                            '',                             ''                          ],
    ['Vår 99',  'Havet',                                '',                             ''                          ],
    ['Höst 98', 'Flower Power',                         '',                             ''                          ],
    ['Vår 98',  'Sällskapsresan II',                    '',                             ''                          ],
    ['Höst 97', 'Djungel',                              '',                             ''                          ],
    ['Vår 97',  '(?)',                                  '',                             ''                          ],
    ['Höst 96', 'Rymden',                               '',                             ''                          ],
    ['Vår 96',  'Köttmarknad (?)',                      '',                             ''                          ],
    ['Höst 95', 'Tjuv och Polis',                       '',                             ''                          ],
    ['Vår 95',  'Tusen och en Natt',                    '',                             ''                          ],
    ['Höst 94', 'Sällskapsresan (?)',                   '',                             ''                          ],
    ['Vår 94',  'Bad Taste (?)',                        '',                             ''                          ],
    ['Höst 93', 'De sju haven (?)',                     '',                             ''                          ],
    ['Vår 93',  'Space (?)',                            '',                             ''                          ],
    ['Höst 92', 'Temalöst (?)',                         '',                             ''                          ],
    ['Vår 92',  'Vår 92',                               '',                             ''                          ],
    ['Höst 91', 'Oktoberfest',                          '',                             ''                          ],
    ['Vår 91',  '(?)',                                  '',                             ''                          ],
    ['Höst 90', 'Femmans spårvagn till Biskopsgården',  '',                             ''                          ],
    ['Vår 90',  '(?)',                                  '',                             ''                          ]
];

foreach ($parties as $party) {
    ?>
  <tr>
    <td><?=$party[PARTY_DATE]?>

    <td><?=$party[THEME]?>

    <td><?=$party[PICTURES] ? '<a href="' . IMAGE_PATH . $party[PICTURES] . '">Bilder</a>' : ''?>

    <td><?=$party[POSTER] ? '<a class="icon image" href="' . IMAGE_PATH . $party[POSTER] . '">Plansch</a>' : ''?>

<?php
}
?>
</table>
