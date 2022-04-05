<?php include DIR.'/views/templates/header.php' ?>
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

$power = $personalities[$personality];
?>
<div class="container">
    <div class="row">
        <?php foreach($personalities as $key => $personality): ?>
            <div class="col">
                <h3><?= $key ?> The <?= $personality ?></h3>
                <p style="width: 400px;height: 200px;" class="bg-info shadow-1 p-1 text-center">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi hic, quibusdam molestias, at quisquam vitae eligendi inventore a fuga beatae quidem ex, autem expedita atque unde provident reiciendis facere tempore dolor qui voluptate odit est dolores. Aliquid, consectetur. Ullam, laborum!
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include DIR.'/views/templates/footer.php' ?>
