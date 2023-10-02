import java.io.*

class UserInput 
{
	public static void main(String a[])throws  IOException
	{
	  int no,limit;
	  DataInputStream din;
	  din=new DataInputStream(System.in);
	  System.out.println("Input Number:");
	  no = Integer.parseInt(din.readline());
	  System.out.println("Input limit:");
	  limit = Integer.parseInt(din.readline());
	  int i;
	   for(i=1;<=limit;i++)
		{
		 Sytem.out.println(no+"*"i+"="+no*i);
		}


		
	}		
	

}