<?php
class Syracuse0 {
    readonly int $n;
    private ?array $tableau = null;
    readonly int $limite;

   function __construct(int $n, int $limite) {
        $this->n = $n;
        $this->limite = $limite;
        $this->fillTableau();
        Noyau::echoln('fin constructeur');
   }

   public function fillTableau():void {
    $this->tableau[0] = $this->n;
    Noyau::echoln($this->tableau[0]);
    for ($i = 1; $i < $this->limite; $i++)
        $this->tableau[$i] =  $this->tableau[$i-1] & 1 == 1 ? 3 * $this->tableau[$i-1] + 1 : $this->tableau[$i-1] >> 1;
   }

   public function afficheTableau() {
    foreach($this->tableau as $elt) Noyau::echoln($elt);
    //Noyau::echoln($this->tableau[0]);
   }
}
