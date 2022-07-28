 public class practical{
   public static void main(String args[]){
    int i=2,sum=1;
      recursion(i,sum);
     }

     static void recursion(int i,int sum){
       
     if(i<=100){
       System.out.print(sum+" ");
       recursion(i+1,sum+i);
     }
   }
 }