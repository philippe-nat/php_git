<?php
class Syracuse {
    readonly int $n;
    private array $tableau;
    readonly private int $limite;
    readonly private Closure $regle;
    public function getRegle():?Closure { return $this->regle;}

    function __construct(int $n, int $limite = 1_000_000, ?Closure $regle = null) {
        $this->n = $n;
        $this->limite = $limite;
        // si pas de lambda passée au constructeur, on passe la règle classique de Syracuse : 
        // si n est impair on le triple, on ajoute 1 et on divise par 2
        // sinon on divise par 2
        $this->regle = $regle ??  (fn($n) => $n & 1 == 1 ? (3 * $n + 1) >> 1 : $n >> 1);
        $this->fillTableau();
   }

    private function fillTableau():void {
        $this->tableau[0] = $this->n;
        for ($i = 1; $i < $this->limite; $i++) {
            $suivant = ($this->regle)($this->tableau[$i-1]); // on applique la règle pour passer au terme suivant
            if (in_array($suivant, $this->tableau)) break;   // si ce terme est déjà dans la liste on arrête
            $this->tableau[$i] = $suivant;
        }
    }

    public function afficheTableau() {
        Noyau::echoArray($this->tableau);
        echo ' (' . count($this->tableau) . ') <br/>';
    }

    /**
     * @param $n un entier naturel non nul
     * @return le plus petit entier dont la longueur de vol est au moins celle indiquée en paramètre. Si non trouvé, retourne null
     * @throws Exception le paramètre doit être en entier naturel non nul
     * @example $n=getNFromLongueurVol(5) => 8 4 2 1 : longueur = 5, retourne 5
     */
    public static function getNFromLongueurVol(int $n):?int {
        if ($n < 1) throw new Exception('Il faut spécifier un entier naturel non nul');
        for ($i = 2; $i < 1_000_000; $i++) {
            $s = new Syracuse($i);
            if (count($s->tableau) >= $n) return $i;
        }
        return null;
    }
}

