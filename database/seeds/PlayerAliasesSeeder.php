<?php

use Illuminate\Database\Seeder;

class PlayerAliasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('player_aliases')->insert(array(
        array('name' => 'Ijzige Ijsbeer', 'description' => 'Is hier nog uitleg over nodig? Op welke planeet leefde je de afgelopen jaren? PSO J318.5-22? Kepler-62?', 'image' => 'ijsbeer.jpg'),
        array('name' => 'Temperatuursgevoelige Oranjevlek Vijlvis', 'description' => 'Volledig afhankelijk van koraalrif, heeft deze vissoort het moeilijk om zich aan te passen aan hogere temperaturen. Een plotse temperatuursstijging in 1988 in het zeewater rondom Japan lag aan de basis voor het uitsterven van de soort in dat gebied.', 'image' => 'vijlvis.jpg'),
        array('name' => 'Trage Kokerboom', 'description' => 'Deze traag groeiende boom heeft een zeer lage voortplantingssnelheid, waardoor de boomsoort zich moeilijk kan aanpassen.', 'image' => 'koker.jpg'),
        array('name' => 'Migrerende Adeliepinguïn', 'description' => 'Krill dat leeft rondom ijsschotsen is de voedselbron van deze pinguïn. Helaas daalt de krill populatie desastreus door de opwarming van het water.', 'image' => 'adelie.jpg'),
        array('name' => 'Koudwaterige Atlantische Kabeljauw', 'description' => 'Overbevissing en veranderingen in de zeestromingen liggen aan de basis voor een hele hoop kopzorgen voor de Atlantische Kabeljauw. Vroeger herstelde de populatie zich snel van de bevissing, dat is nu niet meer het geval.', 'image' => 'kabeljauw.jpg'),
        array('name' => 'Temperatuursgevoelig Hertshoornkoraal', 'description' => 'Koraal is erg gevoelig voor temperatuursveranderingen. De stijging van de temperatuur is dan ook nefast.', 'image' => 'koraal.jpg'),
        array('name' => 'Uitgestorven Rode Pad', 'description' => 'Volledig uitgestorven door droogte in de natuurlijke habitat.', 'image' => 'pad.jpg'),
        array('name' => 'Vroeg broedende Bairds Strandloper', 'description' => 'Het broedseizoen valt steeds vroeger op het jaar, waardoor er te weinig voedselbronnen zijn om de jongen te laten opgroeien. Steeds minder jongen geraken aan de volwassen leeftijd.'),
        array('name' => 'Veeleisende Grote Berglobelia', 'description' => 'Door de hoge eisen van deze plant, kan het erg moeilijk aarden in zijn nieuwe habitat.'),
        array('name' => 'Verdronken Bramble Cay-mozaïekstaartrat', 'description' => 'Deze rat leeft aan de vloedlijn van Bramble Cay. Door de stijging van de zeespiegel en toenemende frequentie van stormen is dit eiland ten dode opgeschreven.'),
        array('name' => 'Verdroogde Nevadaturkooisblauwtje', 'description' => 'Door droogte en temperatuursverhoging zijn deze vlinders genoodzaakt om naar hogere oorden te trekken, maar deze habitat is niet op hun afgestemd.'),
        array('name' => 'Vervrouwelijkte Zeeschildpad', 'description' => 'Warmere strangtemperaturen zorgen voor meer vrouwelijke pups. Op termijn zijn er dus enkel nog vrouwtjes, waardoor de voortplanting in het gedrang komt.'),
        array('name' => 'Oververhitte Witte Queenslandkoeskoes', 'description' => 'De Witte Queenslandkoeskoes kan slechts enkele uren overleven in temperaturen boven de 30 graden Celcius. Ze leven enkel in grote hoogtes. De hittegolf van 2005 was catastrofaal voor de soort.'),
        array('name' => 'Fjordige Ringelrob', 'description' => 'De voortplanting van de Ringelrob gebeurt aan bevroren fjorden. De stijging van de temperaturen zorgt ervoor dat Ringelrobben steeds minder jongen ter wereld kunnen brengen.'),
        array('name' => 'Verdreven Sneeuwluipaard', 'description' => 'De veranderingen in het klimaat zorgen ervoor dat de mensen zich steeds meer in de habitat van het Sneeuwluipaard nestelen.'),
        array('name' => 'Uitgehongerde Reuzenpanda', 'description' => 'Door zijn strikte dieet van bamboe, is de Reuzenpanda erg afhankelijk van de lokale vegetatie.'),
        array('name' => 'Dorstige Afrikaanse Olifant', 'description' => 'Dagelijks drinkt een Afrikaanse Olifant 151 tot 303 liter. Door het drogere klimaat komt de waterbevoorrading in het gedrang'),
        array('name' => 'Omsingelde Berggorilla', 'description' => 'Volledig omsingeld door de mens, kan de berggorilla geen kant meer uit. De voedselbronnen raken uitgeput.'),
        array('name' => 'Genetisch Jachtluipaard', 'description' => 'Door weinig genetische variatie onder de jachtluipaarden, zijn ze extra kwetsbaar voor de klimaatsverandering'),
        array('name' => 'Koralige Driebandanemoonvis', 'description' => 'Door het verdwijnen van het koraal, wordt de habitat van de Driebandanemoonvis (ook wel clownsvis genoemd) aangetast.'),
        array('name' => 'Gletsjerige Zalm', 'description' => 'Deze lekkere vis zwemt jaarlijks stroomopwaarts om zijn eitjes te gaan leggen in kleine koude beekjes. Door het verdwijnen van de gletsjsers zijn er minder beekjes beschikbaar.'),
      ));
    }
}
