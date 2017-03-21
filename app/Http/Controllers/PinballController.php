<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Pinball;
use App\Question;
use App\PlayerAnswer;

class PinballController extends Controller
{
    public function index(Request $request)
    {
      $pinball = Pinball::find($request->id);
      $question = ($this->getPlayer($request))->getNextQuestion($request->id);
      return view('partials.game.question', [
        'pinball' => $pinball,
        'question' => $question,
        'backgroundImage' => $this->_toImageName($pinball->name),
      ]);
    }

    private function _toImageName($name)
    {
      $replaced = str_ireplace(".", "", str_ireplace(",", "", str_ireplace(" ", "_", str_ireplace("?", "", $name))));
      return $replaced.'.jpg';
    }

    public function validateAnswer(Request $request)
    {
      $this->validate($request, [
        'question' => 'required|numeric',
        'answer' => 'required',
      ]);
      $player = $this->getPlayer($request);
      $question = Question::find(intval($request->input('question')));
      $answer = $question->answers()->first();
      $valid = (strcasecmp($answer->answer_text, trim($request->input('answer'))) == 0);
      $this->handleDatabase($question, $player, $valid, $request->session()->get('bet'));
      $request->session()->forget('bet');
      return $this->_nextView($valid, $player, $request->id);
    }

    private function _nextView($valid, $player, $pinballId)
    {
      $game = $player->getIncompleteGame();
      if($game->hasAnsweredAllPinballs()){
          return redirect('end');
      }else{
          return $this->_createResultViewWithNextPinball($valid, $player, $pinballId);
      }
    }

    private function _createResultViewWithNextPinball($valid, $player, $pinballId)
    {
      $pinball = Pinball::find($pinballId);
      return view('partials.game.question_result', [
        'valid' => $valid,
        'pinball' => $pinball,
        'uitstoot' => $player->getEmmission(),
        'id' => $player->getNextPinballId(),
        'backgroundImage' => $this->_toImageName($pinball->name),
      ]);
    }

    private function handleDatabase($question, $player, $valid, $bet)
    {
      $playerAnswer = new playerAnswer();
      $playerAnswer->question_id = $question->id;
      $playerAnswer->player_id = $player->id;
      $playerAnswer->game_id = $player->getIncompleteGame()->id;
      $playerAnswer->bet = $bet;
      $playerAnswer->joker_used = false;
      $playerAnswer->correct = $valid;
      $playerAnswer->save();
    }
}
