import java.util.Scanner;

public class Area {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Triangle Area Calculator");
        System.out.print("Enter the base length: ");
        double base = scanner.nextDouble();

        System.out.print("Enter the height: ");
        double height = scanner.nextDouble();

        // Calculate the area of the triangle
        double area = 0.5 * base * height;

        System.out.println("The area of the triangle is: " + area);

        // Close the scanner
        scanner.close();
    }
}
