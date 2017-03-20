<?php

use Illuminate\Database\Seeder;

use App\Question;
use App\Answer;
use App\Pinball;

class QuestionPinballAnswers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->_createPinballWeer();
        $this->_createPinballKlimaat();
        $this->_createPinballBroeikas();
        $this->_createPinballBeestjes();
        $this->_createPinballKyoto();
        $this->_createPinballGSM();
        $this->_createPinballWind();
        $this->_createPinballGroei();
        $this->_createPinballZakgeld();
    }

    // weer

    private function _createPinballWeer()
    {
      $pinball = Pinball::create(['name' => 'Weer of geen weer?', 'quote' => 'Koude handen of zweetoksels']);
      $questions = $this->_createPinballWeerQuestions($pinball->id);
      $pinball->questions()->saveMany($questions);
    }

    private function _createPinballWeerQuestions($pinball_id)
    {
      $returnArray = array();
      $question = Question::create(['question_text' => 'Waar valt in België de minste regen?', 'pinball_id' => $pinball_id]);
      $question->answers()->create(['answer_text' => 'Kust']);

      $question2 = Question::create(['question_text' => 'Gemiddelde temperatuur, vochtigheidsgraad, luchtdruk, wind, bewolking ...  over tientallen jaren heen. Welke factor ontbreekt om het klimaat te kunnen bepalen?' , 'pinball_id' => $pinball_id]);
      $question2->answers()->create(['answer_text' => 'Neerslag']);

      $question3 = Question::create(['question_text' => 'Welk klimaat heeft Noorwegen?', 'pinball_id' => $pinball_id]);
      $question3->answers()->create(['answer_text' => 'Subpolair']);

      $question4 = Question::create(['question_text' => 'Welke invloed heeft de zee op de temperatuur?', 'pinball_id' => $pinball_id]);
      $question4->answers()->create(['answer_text' => 'Matigend']);

      $question5 = Question::create(['question_text' => 'Welk land (vermeld op de flipperkast) heeft een subtropisch klimaat?', 'pinball_id' => $pinball_id]);
      $question5->answers()->create(['answer_text' => 'Australie']);

      array_push($returnArray, $question, $question2, $question3, $question4, $question5);
      return $returnArray;
    }

    // klimaat

    private function _createPinballKlimaat()
    {
      $pinball = Pinball::create(['name' => 'Klimaat op drift', 'quote' => 'Hou het hoofd boven water!']);
      $questions = $this->_createPinballKlimaatQuestions($pinball->id);
      $pinball->questions()->saveMany($questions);
    }

    private function _createPinballKlimaatQuestions($pinball_id)
    {
      $returnArray = array();
      $question = Question::create(['question_text' => 'Wat gebeurt er met de kustlijnen als de temperatuur op aarde stijgt?', 'pinball_id' => $pinball_id]);
      $question->answers()->create(['answer_text' => 'Kalven af']);

      $question2 = Question::create(['question_text' => 'Welk wouden drogen uit?' , 'pinball_id' => $pinball_id]);
      $question2->answers()->create(['answer_text' => 'Nevelwouden']);

      $question3 = Question::create(['question_text' => 'Wie wordt het eerste slachtoffer van het smeltend pakijs?', 'pinball_id' => $pinball_id]);
      $question3->answers()->create(['answer_text' => 'Ijsbeer']);

      $question4 = Question::create(['question_text' => 'Behalve de temperatuur stijgt ook nog iets anders door het broeikaseffect. Wat?', 'pinball_id' => $pinball_id]);
      $question4->answers()->create(['answer_text' => 'Zeespiegel']);

      $question5 = Question::create(['question_text' => 'Wat is er ten gevolge van de opwarming aan het smelten?', 'pinball_id' => $pinball_id]);
      $question5->answers()->create(['answer_text' => 'Gletsjers']);

      array_push($returnArray, $question, $question2, $question3, $question4, $question5);
      return $returnArray;
    }

    // broeikas

    private function _createPinballBroeikas()
    {
      $pinball = Pinball::create(['name' => 'Broeikaseffect', 'quote' => 'Lekker warm, samen in de serre.']);
      $questions = $this->_createPinballBroeikasQuestions($pinball->id);
      $pinball->questions()->saveMany($questions);
    }

    private function _createPinballBroeikasQuestions($pinball_id)
    {
      $returnArray = array();
      $question = Question::create(['question_text' => 'Welk gas versterkt het natuurlijk broeikaseffect? (voluit schrijven)', 'pinball_id' => $pinball_id]);
      $question->answers()->create(['answer_text' => 'Koolstofdioxide']);

      $question2 = Question::create(['question_text' => 'Waarin wordt zonne-energie door het aardoppervlak omgezet?' , 'pinball_id' => $pinball_id]);
      $question2->answers()->create(['answer_text' => 'Warmte']);

      $question3 = Question::create(['question_text' => 'Waarmee kan je de werking van het broeikaseffect ook vergelijken?', 'pinball_id' => $pinball_id]);
      $question3->answers()->create(['answer_text' => 'Serre']);

      $question4 = Question::create(['question_text' => 'Op hoeveel jaar tijd is de CO<sub>2</sub>-uitstoot met 25 tot 30% toegenomen? (voluit)', 'pinball_id' => $pinball_id]);
      $question4->answers()->create(['answer_text' => 'Honderdvijftig']);

      $question5 = Question::create(['question_text' => 'Welke revolutie heeft sterk bijgedragen tot het versterken van het natuurlijk broeikaseffect?', 'pinball_id' => $pinball_id]);
      $question5->answers()->create(['answer_text' => 'Industriële revolutie']);

      array_push($returnArray, $question, $question2, $question3, $question4, $question5);
      return $returnArray;
    }

    //  beestjes

    private function _createPinballBeestjes()
    {
      $pinball = Pinball::create(['name' => 'Allemaal beestjes (in de war)', 'quote' => 'Komen, gaan of blijven?']);
      $questions = $this->_createPinballBeestjesQuestions($pinball->id);
      $pinball->questions()->saveMany($questions);
    }

    private function _createPinballBeestjesQuestions($pinball_id)
    {
      $returnArray = array();
      $question = Question::create(['question_text' => 'Welke vogel dreigt te verdwijnen doordat de rupsen die hij eet vroeger uitkomen?', 'pinball_id' => $pinball_id]);
      $question->answers()->create(['answer_text' => 'Bonte vliegenvanger']);

      $question2 = Question::create(['question_text' => 'Welke reus breidt zich naar het noorden toe uit?' , 'pinball_id' => $pinball_id]);
      $question2->answers()->create(['answer_text' => 'Stadsreus']);

      $question3 = Question::create(['question_text' => 'Wat doen de soorten als reactie op de klimaatopwarming? Gaan, blijven en..', 'pinball_id' => $pinball_id]);
      $question3->answers()->create(['answer_text' => 'Komen']);

      $question4 = Question::create(['question_text' => 'Welk insect berekent er met een temperatuursom het tijdstip wanneer het uit het ei kan komen?', 'pinball_id' => $pinball_id]);
      $question4->answers()->create(['answer_text' => 'Wintervlinder']);

      $question5 = Question::create(['question_text' => 'Wat vermindert door de klimaatopwarming? (Die vermindering heeft ook gevolgen voor de mens.)', 'pinball_id' => $pinball_id]);
      $question5->answers()->create(['answer_text' => 'Biodiversiteit']);

      array_push($returnArray, $question, $question2, $question3, $question4, $question5);
      return $returnArray;
    }

    // Kyoto

    private function _createPinballKyoto()
    {
      $pinball = Pinball::create(['name' => 'Kyoto...hé, wat zeg je?', 'quote' => 'Deal? Deal!']);
      $questions = $this->_createPinballKyotoQuestions($pinball->id);
      $pinball->questions()->saveMany($questions);
    }

    private function _createPinballKyotoQuestions($pinball_id)
    {
      $returnArray = array();
      $question = Question::create(['question_text' => 'Wat is donderdag?', 'pinball_id' => $pinball_id]);
      $question->answers()->create(['answer_text' => 'Veggiedag']);

      $question2 = Question::create(['question_text' => 'Welke lampen gebruik je om energie te besparen?' , 'pinball_id' => $pinball_id]);
      $question2->answers()->create(['answer_text' => 'Spaarlamp']);

      $question3 = Question::create(['question_text' => 'In welke Japanse stad werd het eerste klimaatverdrag ondertekend?', 'pinball_id' => $pinball_id]);
      $question3->answers()->create(['answer_text' => 'Kyoto']);

      $question4 = Question::create(['question_text' => 'In welke stad werd nog een belangrijke klimaatconferentie gehouden, mét de VS, China en India er bij?', 'pinball_id' => $pinball_id]);
      $question4->answers()->create(['answer_text' => 'Kopenhagen']);

      $question5 = Question::create(['question_text' => 'Wat kan je in je douche hangen om te zien hoe lang je onder de douche staat?', 'pinball_id' => $pinball_id]);
      $question5->answers()->create(['answer_text' => 'Douchetimer']);

      array_push($returnArray, $question, $question2, $question3, $question4, $question5);
      return $returnArray;
    }

    // GSM

    private function _createPinballGSM()
    {
      $pinball = Pinball::create(['name' => 'Ontleed eens een gsm', 'quote' => 'Wat verberg je daar?']);
      $questions = $this->_createPinballGSMQuestions($pinball->id);
      $pinball->questions()->saveMany($questions);
    }

    private function _createPinballGSMQuestions($pinball_id)
    {
      $returnArray = array();
      $question = Question::create(['question_text' => 'Welk erts uit Congo wordt gebruikt als één van de basismaterialen voor de productie van een gsm?', 'pinball_id' => $pinball_id]);
      $question->answers()->create(['answer_text' => 'Coltan']);

      $question2 = Question::create(['question_text' => 'Wat is de tegenhanger van direct energiegebruik?' , 'pinball_id' => $pinball_id]);
      $question2->answers()->create(['answer_text' => 'Indirect energiegebruik']);

      $question3 = Question::create(['question_text' => 'Uit welk land komt het koper voor de productie van de gsm?', 'pinball_id' => $pinball_id]);
      $question3->answers()->create(['answer_text' => 'Chili']);

      $question4 = Question::create(['question_text' => 'Uit hoeveel verschillende landen komen de onderdelen en grondstoffen van een gsm? (voluit)', 'pinball_id' => $pinball_id]);
      $question4->answers()->create(['answer_text' => 'Veertien']);

      $question5 = Question::create(['question_text' => 'Waar werd de gsm op de flipperkast gemaakt?', 'pinball_id' => $pinball_id]);
      $question5->answers()->create(['answer_text' => 'Singapore']);

      array_push($returnArray, $question, $question2, $question3, $question4, $question5);
      return $returnArray;
    }

    // wind

    private function _createPinballWind()
    {
      $pinball = Pinball::create(['name' => 'Een nieuwe wind?', 'quote' => 'Anyway the wind blows']);
      $questions = $this->_createPinballWindQuestions($pinball->id);
      $pinball->questions()->saveMany($questions);
    }

    private function _createPinballWindQuestions($pinball_id)
    {
      $returnArray = array();
      $question = Question::create(['question_text' => 'Hoe noemen we plantenresten, hout en dierenmest waarmee energie wordt opgewekt?', 'pinball_id' => $pinball_id]);
      $question->answers()->create(['answer_text' => 'Biomassa']);

      $question2 = Question::create(['question_text' => 'Met welk soort alternatieve energie vangen we drie vliegen in één klap?' , 'pinball_id' => $pinball_id]);
      $question2->answers()->create(['answer_text' => 'Wind']);

      $question3 = Question::create(['question_text' => 'Welk land is koploper op vlak van windenergie?', 'pinball_id' => $pinball_id]);
      $question3->answers()->create(['answer_text' => 'Duitsland']);

      $question4 = Question::create(['question_text' => 'Wat geeft je door 30 seconden op te winden 35 minuten muziek?', 'pinball_id' => $pinball_id]);
      $question4->answers()->create(['answer_text' => 'Windup-radio']);

      $question5 = Question::create(['question_text' => 'Wat kan ook werken door de beweging van arm en pols en heeft hierdoor geen batterij nodig?', 'pinball_id' => $pinball_id]);
      $question5->answers()->create(['answer_text' => 'Horloge']);

      array_push($returnArray, $question, $question2, $question3, $question4, $question5);
      return $returnArray;
    }

    // groei

    private function _createPinballGroei()
    {
      $pinball = Pinball::create(['name' => 'Groeipijnen', 'quote' => 'De boel barst']);
      $questions = $this->_createPinballGroeiQuestions($pinball->id);
      $pinball->questions()->saveMany($questions);
    }

    private function _createPinballGroeiQuestions($pinball_id)
    {
      $returnArray = array();
      $question = Question::create(['question_text' => 'Hoe groot is het gedeelte van de wereldbevolking dat verantwoordelijk is voor bijna 80% van de CO<sub>2</sub>-uitstoot? ', 'pinball_id' => $pinball_id]);
      $question->answers()->create(['answer_text' => 'Kwart']);

      $question2 = Question::create(['question_text' => 'Wat is de wiskundige term voor een groei waarbij je met een bepaald getal start dat telkens per tijdseenheid met hetzelfde getal vermenigvuldigd wordt?' , 'pinball_id' => $pinball_id]);
      $question2->answers()->create(['answer_text' => 'Exponentieel']);

      $question3 = Question::create(['question_text' => 'Hoe wordt het vermogen om energie uit te sparen ook uitgedrukt?', 'pinball_id' => $pinball_id]);
      $question3->answers()->create(['answer_text' => 'Negawatt']);

      $question4 = Question::create(['question_text' => 'Hoe noemen we de brandstoffen die ontstaan zijn uit resten van planten en dieren uit het geologisch verleden van de aarde?', 'pinball_id' => $pinball_id]);
      $question4->answers()->create(['answer_text' => 'Fossiele brandstoffen']);

      $question5 = Question::create(['question_text' => 'Aardolie, steenkool en aardgas zijn de belangrijkste fossiele brandstoffen. Welke fossiele brandstof is er nog?', 'pinball_id' => $pinball_id]);
      $question5->answers()->create(['answer_text' => 'Turf']);

      array_push($returnArray, $question, $question2, $question3, $question4, $question5);
      return $returnArray;
    }

    // zakgeld

    private function _createPinballZakgeld()
    {
      $pinball = Pinball::create(['name' => 'Doe meer met je zakgeld', 'quote' => 'Minder is meer']);
      $questions = $this->_createPinballZakgeldQuestions($pinball->id);
      $pinball->questions()->saveMany($questions);
    }

    private function _createPinballZakgeldQuestions($pinball_id)
    {
      $returnArray = array();
      $question = Question::create(['question_text' => 'Hoe noemen we het verbruik van energie als je toestellen in stand-by zet?', 'pinball_id' => $pinball_id]);
      $question->answers()->create(['answer_text' => 'Sluipverbruik']);

      $question2 = Question::create(['question_text' => 'Hoe noemen we het verschijnsel waarbij er elk jaar per gezin 110 tot 165 kg voedsel weggegooid wordt?' , 'pinball_id' => $pinball_id]);
      $question2->answers()->create(['answer_text' => 'Verspilling']);

      $question3 = Question::create(['question_text' => 'Waarmee kan je de muziekinstallatie op een fuif van stroom voorzien?', 'pinball_id' => $pinball_id]);
      $question3->answers()->create(['answer_text' => 'Fietsdynamo']);

      $question4 = Question::create(['question_text' => 'Als je tv-toestel 10 uur in stand-by staat, hoe lang kun je dan met diezelfde energie televisie kijken?', 'pinball_id' => $pinball_id]);
      $question4->answers()->create(['answer_text' => 'Een uur']);

      $question5 = Question::create(['question_text' => 'Waarmee kan je veel aluminiumfolie uitsparen?', 'pinball_id' => $pinball_id]);
      $question5->answers()->create(['answer_text' => 'Brooddoos']);

      array_push($returnArray, $question, $question2, $question3, $question4, $question5);
      return $returnArray;
    }
}
