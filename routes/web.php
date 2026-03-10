<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VijestiController;
use App\Http\Controllers\ClanakController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/pozdrav/{ime}', function ($ime) {
    return "Pozdrav ". $ime . "! Dobrodošao u Laravel.";
});

Route::get('/api/automobili', function () {
    return response()->json([
    
]
    );
});

Route::get('/skola', function () {
    return view('skola', [
        'ime_skole' => 'Tehnička škola Ruđer Bošković',
        'predmeti'  => [
            'Baze podataka',
            'Web dizajn',
            'Programiranje',
            'Mrežne tehnologije',
        ],
    ]);
});

Route::get('/automobili', function () {
    return view('automobili', [
        'auti'  => 
        [   
            'Volkswagen Golf 2022',
            'Mazda RX-7 2016',
            'Honda Accord 2010'
        ],
    ]);
});

Route::get('/povrce', function () {
    return view('povrce', [
        'lista' =>
        [
            'salata',
            'kupus',
            'mrkva'

        ]
    ]);
});

Route::get('/o-meni', function () {
    return "Pozdrav, moje ime je Teo Znamenaček, učenik sam 4.RT razreda i omiljeni predmet mi je SJIWP";
}); 

Route::get('/clanak', function () {
    return view('clanak', [
        'naslov'     => 'Uvod u Laravel',
        'sadrzaj'    => 'Laravel je najpopularniji PHP framework...',
        'objavljen'  => true,
        'komentara'  => 0,
        'autor'      => 'Ana Horvat',
    ]);
});


Route::get('/o-nama', function () {
    return view('o-nama', [
        'tim' => [
            ['ime' => 'Ana Horvat',  'uloga' => 'Voditeljica projekta'],
            ['ime' => 'Marko Babić', 'uloga' => 'Backend developer'],
            ['ime' => 'Petra Kovač', 'uloga' => 'Frontend developer'],
        ]
    ]);
});

Route::get('/automobili1', function () {
    $automobili1 = [
        ['id'=>1,'marka'=>'VW','model'=>'Golf','godina'=>2022],
        ['id'=>2,'marka'=>'Toyota','model'=>'Corolla','godina'=>2021],
        ['id'=>3,'marka'=>'BMW','model'=>'3 Series','godina'=>2023],
    ];
    return view('automobili1', compact('automobili1'));
});

Route::get('/studenti', function () {
    $studenti = [
        ['ime'=>'Ana Horvat', 'smjer'=>'Informatika', 'polozio'=>true],
        ['ime'=>'Marko Babić','smjer'=>'Elektrotehnika','polozio'=>false],
        ['ime'=>'Petra Kovač','smjer'=>'Strojarstvo', 'polozio'=>true],
        ['ime'=>'Ivan Perić', 'smjer'=>'Informatika', 'polozio'=>true],
    ];
    return view('studenti', compact('studenti'));
});

Route::get('/knjige', function () {

    $knjige = [
        ["naslov" => "Na Drini ćuprija", "autor" => "Ivo Andrić", "godina" => 1945, "procitana" => true],
        ["naslov" => "Prokleta avlija", "autor" => "Ivo Andrić", "godina" => 1954, "procitana" => false],
        ["naslov" => "Derviš i smrt", "autor" => "Meša Selimović", "godina" => 1966, "procitana" => true],
        ["naslov" => "Tvrđava", "autor" => "Meša Selimović", "godina" => 1970, "procitana" => false],
        ["naslov" => "Bašta sljezove boje", "autor" => "Branko Ćopić", "godina" => 1970, "procitana" => true],
    ];

    $procitano = collect($knjige)->where('procitana', true)->count();
    $ukupno = count($knjige);

    return view('knjige', [
        "knjige" => $knjige,
        "procitano" => $procitano,
        "ukupno" => $ukupno,
        "aktivnaStrana" => "knjige"
    ]);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vijesti', [VijestiController::class, 'index'])->name('vijesti.index');
Route::get('/vijesti/{id}', [VijestiController::class, 'show'])->name('vijesti.show');


Route::resource('clanci', ClanakController::class);


Route::get('/blog',       [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}',  [BlogController::class, 'show'])->name('blog.show');


