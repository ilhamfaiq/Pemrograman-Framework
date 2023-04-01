<?php
class Monyet {
 public function berjalan() {
    echo "Monyet dapat berjalan";
 }
 
 public function makan() {
    echo "Monyet sedang makan";
 }
 
 public function bersuara() {
    echo "Monyet dapat mengeluarkan suara";
 }
}

class MonyetTerlatih extends Monyet {
 public function berkendara() {
  echo "Monyet ini sudah dilatih dapat mengendarai sepeda";
 }
}


?> 
