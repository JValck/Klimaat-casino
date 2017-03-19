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
      return str_ireplace(" ", "_", str_ireplace("?", "", $name));
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
      $valid = (strcasecmp($answer->answer_text, $request->input('answer')) == 0);
      $this->handleDatabase($question, $player, $valid, $request->session()->get('bet'));
      $request->session()->forget('bet');
      return view('partials.game.question_result', [
        'valid' => $valid,
        'pinball' => Pinball::find($request->id),
        'uitsoot' => $player->getEmmission(),
        'id' => $player->getNextPinballId(),
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
      $playerAnswer->right = $valid;
      $playerAnswer->save();
    }
}
