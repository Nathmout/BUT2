package systemebancaire.utilisation;

import systemebancaire.entites.CompteBancaire;

public class ProgrammePrincipale {

    public static void main(String[] args) {
        CompteBancaire premierCompte;
        premierCompte = new CompteBancaire();
        System.out.println(premierCompte.getSolde());
    }
}
