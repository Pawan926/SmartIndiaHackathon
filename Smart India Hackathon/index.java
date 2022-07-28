import java.util.Scanner;

class index{
  static int power(int x, int y){
    if(y == 0 )
      return 1;
    
    else if ( y % 2 == 0)
     return power( x, y/2)*power( x, y/2);
    
    else 
     return x*power( x, y/2)*power( x, y/2);
  }

  public static void main(String[] args){
    System.out.print("Enter the value : ");

    Scanner sc = new Scanner(System.in);
    int x = sc.nextInt();

    System.out.print("Enter the power : ");
    int y =sc.nextInt();

    
    sc.close();
    
    System.out.println("The result is: "+ power(x, y));

  }
}