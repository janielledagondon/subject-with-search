<?php
    class Model_Subject extends RedBean_SimpleModel{

        public function setSubject($sc, $desc, $units){
            $this->sc = $sc;
            $this->desc = $desc;
            $this->units = $units;
        }

        public function getSectionCode(){
            return $this->sc;
        }

        public function getDescription(){
            return $this->desc;
        }

        public function getUnits(){
            return $this->units;
        }

    }
?>
