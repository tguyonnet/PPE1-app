<?php

namespace App\V\_helper;

use App\M\LigueModel;
use App\M\SalleModel;

class ReservationHelper{
    static function lienAjout($texte='Ajouter une réservation'){
        $html = '  <a href="?c=Reservation&a=form"><i class="fa fa-plus" aria-hidden="true"></i> '.$texte.' </a>';
        return $html;
    }    
    static function lienModification(\App\M\ReservationModel $reservation,$texte='Modifier'){
        return '<a href="?c=Reservation&a=form&reservation_id='.$reservation->getId().'"><i class="fa fa-pencil" aria-hidden="true"></i> '.$texte.'</a>';
    }
    static function lienSuppression(\App\M\ReservationModel $reservation,$texte='Supprimer'){
        return '<a href="?c=Reservation&a=suppression&reservation_id='.$reservation->getId().'"><i class="fa fa-trash" aria-hidden="true"></i> '.$texte.'</a>';
    }

    static public function form(\App\M\ReservationModel $reservation){
        $form=new \Core\Form();
        $form->c='Reservation';
        $form->a='update';
        $form->reservation_id=$reservation->getId();
        $form->addDate('date', array('value'=>$reservation->getDate()), 'Date');
        $form->addTime('heureDebut', array('value'=>$reservation->getHeureDebut()), 'Heure de début');
        $form->addTime('heureFin', array('value'=>$reservation->getHeureFin()), 'Heure de fin');

        $listeSalles=SalleModel::getAll(['libelle']);
        $listeSallesPourSelect=[];
        foreach ($listeSalles as $ls) {
            $listeSallesPourSelect[$ls->getId()]=$ls->getLIbelle();
        }
        $form->addSelect('salle_id',$listeSallesPourSelect, array('value'=>$reservation->getSalle()->getId()), 'Salle');

        $listeLigues=LigueModel::getAll(['libelle']);
        $listeLiguesPourSelect=[];
        foreach ($listeLigues as $ll) {
            $listeLiguesPourSelect[$ll->getId()]=$ll->getLIbelle();
        }
        $form->addSelect('ligue_id',$listeLiguesPourSelect,array('value'=>$reservation->getLigue()->getId()),'Ligue');
        
        return $form;
    }
}