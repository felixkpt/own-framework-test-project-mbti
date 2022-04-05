<?php 
namespace App\Controllers;

class TypologyController extends Controller{
    
    public function index() {
        return $this->view('typologies/index');
    }

    public function details($request) {
        $personality = strtoupper($request['slug']);

        $personalities = ['ISTJ' => 'Inspector', 
        'ISTP' => 'Crafter', 
        'ISFJ' => 'Protector', 
        'ISFP' => 'Artist', 
        'INFJ' => 'Advocate', 
        'INFP' => 'Mediator', 
        'INTJ' => 'Architect', 
        'INTP' => 'Thinker',
        'ESTP' => 'Persuader', 
        'ESTJ' => 'Director', 
        'ESFP' => 'Performer', 
        'ESFJ' => 'Caregiver', 
        'ENFP' => 'Champion', 
        'ENFJ' => 'Giver', 
        'ENTP' => 'Debater', 
        'ENTJ' => 'Commander'];

        if (!key_exists($personality, $personalities)) {
            return $this->notFound();
        }

        $strength = $personalities[$personality];
        return $this->view('typologies/details', ['personality' => $personality, 'strength' => $strength]);
    }
}