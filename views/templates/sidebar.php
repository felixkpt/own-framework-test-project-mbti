<?php 
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
?>
<h3 class="text-uppercase shadow-title">The 16 Personalities</h3>
<div class="side-nav rounded">
    <ul class="list-unstyled shadow-list">
        <?php foreach($personalities as $key => $item): ?>
            <li><a href="<?= url('typologies/'.strtolower($key)) ?>"><?= $key ?> - <?= $item ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
