import java.util.Scanner;

class Programme {
        public static void main(String[] args) {
               Scanner clavier = new Scanner(System.in);
                System.out.println("donner le rayon");
                float r = clavier.nextFloat();
                System.out.println("donner la masse volumique");
                float mv = clavier.nextFloat();

                /*float r=Float.parseFloat(args[0]);
                float mv=Float.parseFloat(args[1]);*/
                Boule boul = new Boule(r, mv);    //boul 
                boul.caracteristiques();  // appelation de l'objet boul
                System.out.println("Affichage de la boule\n"+boul);
                clavier.close();

        }
}