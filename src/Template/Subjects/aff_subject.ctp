<?php

    echo "Titre : ".$subjects->title . "<br>";
    echo "Description : ".$subjects->description . "<br>";
    echo "Enseignant : ".$subjects->Enseignant."<br>";






    echo $this->Form->create($subjects,['controller' => 'Users', 'url' => '/Users/affichageEtu']);
    echo $this->Form->button('Retour');
    echo $this->Form->end();



