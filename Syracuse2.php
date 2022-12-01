<?php

//$regle = (fn($n) => $n & 1 == 1 ? 3 * $x + 1 : $n >> 1);

class Syracuse2 {
    readonly int $n;
    private ?array $tableau;
    readonly int $limite;
    private ?Closure $regle;

    function __construct(int $n, int $limite, Closure $regle) {
        Noyau::echoln('debut constructeur');
        $this->n = $n;
        $this->limite = $limite;
        $this->fillTableau();
        $this->regle = $regle;
        Noyau::echoln('fin constructeur');
   }

    public function fillTableau():void {
        $this->tableau[0] = $this->n;
        $c = $this->regle;
        for ($i = 1; $i < $this->limite; $i++) {
            //$tableau[$i] = $this->regle($tableau[$i-1]);
            //$this->tableau[$i] = $i;
            //$tableau[$i] = $c($tableau[$i-1]);
        }
    }

    public function afficheTableau() {
        foreach($this->tableau as $elt) Noyau::echoln($elt);
    }
}

