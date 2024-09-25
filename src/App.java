import java.util.Scanner;

public class App { 
    public static void main(String[] args) throws Exception {
        Scanner  leer = new Scanner(System.in);
        System.out.println("name: ");
        String name = leer.nextLine();
        System.out.println("lastName: ");
        String lastName = leer.nextLine();
        System.out.println("age: ");
        int age = leer.nextInt();
        Persona p1 = new Persona();
        p1.darNameCompleto(name, lastName);
        p1.darAge(age);
        p1.mostrar();
        leer.close();

    }
}
