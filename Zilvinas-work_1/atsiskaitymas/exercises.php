<?php

declare(strict_types=1);

// exercise 1: Sekančioje eilutėje aprašykite konstantą,
// kurios pavadinmas būtų ASSIGNMENT_DURATION_MINUTES, o reikšmė 240 (int)

define('ASSIGNMENT_DURATION_MINUTES', 240);
//const ASSIGNMENT_DURATION_MINUTES = 240;


function exercise2(string $word, int $numberOfLines): void
{
    /*
    Terminale išspausdinkite žodį, esantį argumente $word tiek kartų, kiek nurodyta argumente $numberOfLines.
    Jeigu paduotas skaičius ($numberOfLines) yra neigiamas, žodis neturi būti spausdinamas.
    Funkcijos iškvietimas: exercise2('hello', 3);
    Rezultatas matomas terminale:
    hello
    hello
    hello
    */

    for ($i = 0; $i < $numberOfLines; $i++) {


        echo $word . PHP_EOL;


    }
}

//exercise2('hello', 3);



function exercise3(): void
{
    $words = [
        'Mano',
        'batai',
        '_batai',
        'buvo',
        'du',
        '=du',
        ',',
        'vienas',
        'dingo',
        '*dingo',
        '-',
        'nerandu',
    ];

    /*
    Pasinaudodami ciklu išspausdinkite kintamajame $words esančius žodžius į terminalą.
    Nespausdinkite tų žodžių, kurie prasideda simboliais '_', '=', '*'.
    Rezultatas matomas terminale iškvietus funkciją:
    Mano batai buvo du , vienas dingo - nerandu
    */
    foreach ($words as $word) {

        echo ' ' . $word;

    }
}
//exercise3();


function exercise4(): int
{
    $numbers = [
        1,
        15,
        138,
        120,
        45,
        12,
        -1,
        -88,
    ];

    /*
    Iškviesta funkcija 'exercise4' turetų grąžinti sumą skaičių, kurie atitiktų visas žemiau išvardintas sąlygas:
    - skaičius yra teigiamas
    - skaičius dalijasi is 2 arba 3
    - skaičius yra mažesnis nei 100
    Atkreipkite dėmesį, kad funkcija turi grąžinti sumą, o ne ją spausdinti.
    */
    $sum = 0;
    foreach ($numbers as $number) {

        if ($number % 2 === 0 || $number % 3 === 0)
            if ($number < 100 && $number > 0) {

                $sum += $number;
            }
    }
    return $sum;
}
//var_dump(exercise4());

function exercise5(): int
{
    $companies = [
        [
            'name' => 'Coca Cola',
            'number_of_employees' => 150000,
        ],
        [
            'name' => 'Google',
            'number_of_employees' => 160000,
        ],
        [
            'name' => 'Facebook',
            'number_of_employees' => 95000,
        ],
        [
            'name' => 'Maxima',
            'number_of_employees' => 10000,
        ],
    ];

    /*
     Apskaičiuokite, kiek darbuotojų dirba visose įmonėse ($companies)
     kartu sudėjus. Šią reikšmę grąžinkite iš funkcijos.
    */
    $sum = 0;
    foreach ($companies as $company) {
    $sum += $company['number_of_employees'];
    }
    return $sum;
}
//var_dump(exercise5());



function exercise6(string $sector): int
{
    $companies = [
        [
            'name' => 'Coca Cola',
            'sector' => 'bewerage',
            'number_of_employees' => 150000,
        ],
        [
            'name' => 'Google',
            'sector' => 'IT',
            'number_of_employees' => 160000,
        ],
        [
            'name' => 'Facebook',
            'sector' => 'IT',
            'number_of_employees' => 95000,
        ],
        [
            'name' => 'Maxima',
            'sector' => 'retail',
            'number_of_employees' => 10000,
        ],
        [
            'name' => 'Netflix',
            'sector' => 'IT',
            'number_of_employees' => 35000,
        ],
    ];

    /*
    Apskaišiuokite, kiek darbuotojų dirba įmonėse ($companies),
    kurių sektorius (raktas 'sector') yra $sector.
    Funkcijos kvietimo pavyzdys: echo exercise6('IT');
    Rezultatas spausdinamas terminale: 290000,
    ir taip pat grąžinamas iš funkcijos.
    */
    $sum = 0;
    foreach ($companies as $company) {
        if ($company['sector'] === $sector) {
            $sum += $company['number_of_employees'];
        }
    }
    return $sum;
}
//echo(exercise6('IT'));



function exercise7(): void
{
    $companies = [
        [
            'name' => 'Coca Cola',
            'sector' => 'bewerage',
            'offices' => [
                'Boston',
                'New York',
                'London',
            ],
        ],
        [
            'name' => 'Google',
            'sector' => 'IT',
            'offices' => [
                'Palo Alto',
                'New York',
                'London',
                'Paris'
            ],
        ],
        [
            'name' => 'Facebook',
            'sector' => 'IT',
            'offices' => [
                'Palo Alto',
                'New York',
                'London',
            ],
        ],
        [
            'name' => 'Maxima',
            'sector' => 'retail',
            'offices' => [
                'Vilnius',
            ],
        ],
    ];

    /*
    Išspausdinkite, informaciją apie kompaniją - jos pavadinimą ir ofisų skaičių.
    Funkcijos kvietimo rezultatas, matomas terminale:
    Coca Cola - 3
    Google - 4
    Facebook - 3
    Maxima - 1
    */
}

function exercise8(): void
{
    $dateString = '2012-12-03 15:00:24';

    $dateString = new DateTime('2012-12-03 15:00:24');

    echo $dateString->format('jS M Y h:i A');

    /*
    Pasinaudodami DateTime objektu išspausdinkite terminale datą ($dateString) šiuo formatu:
    3rd Dec 2012 03:00 PM
    */
}
//exercise8();

function exercise9(): int
{
    $numbers = '1*2*3*4*5*6*7*8*9';
    /*
    Išskaidykite $numbers kintamąjį į atskirus skaitmenis ir apskaičiuokite lyginių skaitmenų sumą
    Skaidykite per žvaigždutę (*).
    Gautą skaičių grąžinkite iš funkcijos.
    */
    $sum = 0;
    foreach (str_split('*', $numbers) as $number) {
        if ($number % 2 === 0) {
            $sum += $number;
        }

    }
    return $sum;
}
//var_dump(exercise9());


function exercise10(): void
{
    /*
    1. Susikurkite naują tuščią failą song.txt toje pačioje direktorijoje.
    Į šį failą nukopijuokite šį tekstą:

    Never gonna give you up
    Never gonna let you down
    ---
    Never gonna run around and desert you
    Never gonna make you cry
    Never gonna say goodbye
    ***
    Never gonna tell a lie and hurt you

    2. Nuskaitykite faila song.txt ir išspausdinkite ten esantį tekstą.
    Kiekviena eilutė turi būti apsupta simboliais '*'.
    Ignoruokite tas failo eilutes, kurių turinys yra '***' arba '---'.
    Rezultatas matomas terminale iskvietus funkcija:
    *Never gonna give you up*
    *Never gonna let you down*
    *Never gonna run around and desert you*
    *Never gonna make you cry*
    *Never gonna say goodbye*
    *Never gonna tell a lie and hurt you*

    */
}

function exercise11(): void
{
    /*
    Iškvietus šią funkciją toje pačioje direktorijoje turi susikurti failas numbers.txt
    ir jame turi išsisaugoti skaičiai nuo 1 iki 1000.
    Kiekvienas skaičius turi būti naujoje eilutėje.
    Jeigu failas jau egzistuoja, jo turinys turi būti perrašomas.
    */
}

/*
Exercise 12: sukurkite formą, kuri būtų pasiekiama naršyklėje pasileidus PHP inbuilt serverį adresu localhost:8080.
Forma turi turėti 2 tekstinius laukelius:
- fullname
- greeting

Kiekvieną kartą pasubmitinus formą, į ją suvestos reikšmės turi nugulti i failą greetings.json formatu (json),
neištrinant jau iš anksčiau esančių sveikinimų:
[
    {
        "fullname": "Michael Jordan",
        "greeting": "Hello"
    },
    {
        "fullname": "Gitanas Nauseda",
        "greeting": "Sveiki"
    }
]
*/
