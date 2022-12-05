<?php
class Syracuse1 {
    readonly int $n;
    private ?array $tableau;
    readonly int $limite;
    private ?Closure $regle;
    public function getRegle():?Closure { return $this->regle;}
    public function setRegle(?Closure $c):void { 
        $this->regle = $c;
        $this->fillTableau();
    }

    function __construct(int $n, int $limite = 1_000_000, ?Closure $regle = null) {
        $this->n = $n;
        $this->limite = $limite;
        $this->regle = $regle ??  (fn($n) => $n & 1 == 1 ? (3 * $n + 1) >> 1 : $n >> 1);
        $this->fillTableau();
   }

    private function fillTableau():void {
        $this->tableau[0] = $this->n;
        for ($i = 1; $i < $this->limite; $i++) {
            $this->tableau[$i] = ($this->regle)($this->tableau[$i-1]);
            if ($this->tableau[$i] == 1) break;
        }
    }

    public function afficheTableau() {
        //foreach($this->tableau as $elt) Noyau::echoln($elt);
        Noyau::echoArrayLn($this->tableau);
    }
}

