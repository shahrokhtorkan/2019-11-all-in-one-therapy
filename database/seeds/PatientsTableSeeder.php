<?php

use App\Patient;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PatientsTableSeeder extends Seeder
{
    const MAX_PATIENTS=50;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<self::MAX_PATIENTS;++$i) {
            $firstname = Arr::random(['Fritz', 'Franz', 'Karl', 'Josef', 'Agnes', 'Birgit', 'Sabine', 'Dorothea', 'Bianca', 'Alice', 'Sara', 'Fred', 'Otto', 'Sebastian', 'Michael', 'Alexander', 'Andreas', 'Silvia', 'Sibel', 'Amon', 'Birte', 'Ingrid', 'Klara', 'Larissa', 'Olivia']);
            $lastname = Arr::random(['Mueller', 'Maier', 'Brunner', 'Berger', 'Wolf', 'Putz', 'Schmied', 'Hofer', 'Wallner', 'Kurz', 'Lang', 'Zeit', 'Gans', 'Maus', 'Schatten', 'Gebauer', 'Konrad', 'Meyer', 'Meier', 'Mayer', 'Stein', 'Hafner', 'Herter', 'Bald', 'Sagmeister', 'Uhrmann', 'Becker', 'Toll', 'Loeffler', 'Lasser', 'Geber', 'Gerber', 'Hart', 'Blatt', 'Rosenberg', 'Baston', 'Pavlovsky', 'Ilicali', 'Wojcek', 'Baer', 'Denk', 'Haflinger', 'Sauber', 'Tann', 'Schaerdinger', 'Goestli', 'Zweig', 'Debbels', 'Horch', 'Mann', 'Huebsch', 'Dicke', 'Fern', 'Kalb', 'Wolf', 'Laut', 'Abzal']);
            $svnr = rand(1000, 9999) . sprintf("%02s%02s%02s", rand(1, 28), rand(1, 12), rand(1, 99));
            $plz = rand(100,999)."0";
            $email = strtolower($firstname).".".strtolower($lastname)."@example.com";
            $city = Arr::random(['Wien', 'St. Pölten', 'Eisenstadt', 'Graz', 'Innsbruck', 'Klagenfurt', 'Bregenz', 'Salzburg', 'Linz']);
            $address = strtoupper(Str::random(1)) . strtolower(Str::random(4)) . "gasse 1/1";

            $patient = new Patient();
            $patient->firstname = $firstname;
            $patient->lastname = $lastname;
            $patient->svnr = $svnr;
            $patient->plz = $plz;
            $patient->email = $email;
            $patient->city = $city;
            $patient->address = $address;
            $patient->save();
        }
    }
}
