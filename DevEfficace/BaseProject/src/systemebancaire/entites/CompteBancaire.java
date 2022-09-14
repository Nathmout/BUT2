package systemebancaire.entites;

public class CompteBancaire {
    private String nom;
    private String prenom;
    double solde;

    int numero;

    public String getNom() {
        return nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public double getSolde() {
        return solde;
    }

    public int getNumero() {
        return numero;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public void setSolde(double solde) {
        this.solde = solde;
    }

    public void setNumero(int numero) {
        this.numero = numero;
    }
}
