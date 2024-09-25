public class Persona {
    //debe estar siempre en la misma carpeta para que pueda encontrarlo
    //todo estos son atributos cuando no especificas el
    //encapsulamiento del dato se sobreentiende que esta public.
    //privatre int peso;
    String saludo; //variables globales.
    int edadG;


    //metodos estos son los comportamientos que puede tomar un  objeto.
    public String darNameCompleto(String nombre, String Apellido){ //String nombre, String Apellido son parametros por que los parametros se declaran en la declaracion del metodo.
        saludo="hola "+ nombre + " "+Apellido +" como estas";
        return saludo;
    }
    public int darAge(int edad){
        return edadG=edad;
    }
    public void mostrar(){
        System.out.println(saludo+ ", tienes "+edadG+" años");
    }
}
