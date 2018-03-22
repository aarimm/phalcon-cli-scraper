<?php

class Models extends \Phalcon\Mvc\Model {

    public $property;

    public function getSource() {

        return 'models';


    }

    public function initialize() {

        // $this->belongsTo('localProperty', 'referencedModel', 'referencedProperty');


    }

}
