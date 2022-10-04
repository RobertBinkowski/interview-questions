
public class main {
    public static void main(String[] args) {

        String input = "Some Text here";

        System.out.print(displayInput(input));
    }

    public static String displayInput(String input) {
        if (input.length() <= 0) {
            return "Please Provide a longer String";
        }

        // Main Usecase of the Project
        String output = "";
        for (int i = 0; i < input.length(); i++) {
            for (int ii = 0; ii < i; ii++) {
                output += "\t";
            }
            output += input.charAt(i) + "\n";

        }
        return output;
    }
}