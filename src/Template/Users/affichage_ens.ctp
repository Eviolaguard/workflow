<?php

echo $this->Form->create($subjects,['url'=>['controller'=>'Users','action'=>'soumissionEns']]);
echo $this->Form->control("Rechercher");
echo $this->Form->create($subjects, ['url' => ['controller' => 'Users', 'action' => 'soumissionEns']]);
echo $this->Form->button('Soumettre un sujet');
echo $this->Form->end();

foreach ($subjects as $subject){
    echo $subject->title."<br>";
    //echo $sessions->date."<br>";
    echo $this->Form->create($subject, ['url' => ['controller' => 'Subjects', 'action' => 'descriptionPtut']]);
    echo $this->Form->hidden('id', [$subject->id]);
    echo $this->Form->button('Lire');
    echo $this->Form->end();

    echo $this->Form->create($subject, ['url' => ['controller' => 'Subjects', 'action' => 'setVisible']]);
    echo $this->Form->hidden('id', [$subject->id]);
    echo $this->Form->button('Rendre Visible');
    echo $this->Form->end();

    if($this->getRequest()->getSession()->read('Grouped')==0){
        echo $this->Form->create($subject, ['url' => ['controller' => 'Groups', 'action' => 'add']]);
        echo $this->Form->button('Ajouter Groupe');
        echo $this->Form->end();
        echo"<br>";
    }else{
        echo $this->Form->create($subject, ['url' => ['controller' => 'Groups', 'action' => 'add']]);
        echo $this->Form->button('Modifier Groupe');
        echo $this->Form->end();
        echo"<br>";
    }
}
echo $this->Form->end();