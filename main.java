import java.util.*;

class place 
{
    String locality;
    String state;
    String District;
    String adress;
    place(String locality,String state,String District)
    {
        this.locality=locality;
        this.state=state;
        this.District=District;
   
    }
}
public class Main
{
	public static void main(String[] args) {
	    Scanner s=new Scanner(System.in);
	    String a,b,c;
	    a=s.nextLine();
	    b=s.nextLine();
	    c=s.nextLine();
	place obj=new place(a,b,c);
	obj.adress=obj.locality;
	if(obj.adress.indexOf(obj.state)==-1)
	{
	    obj.adress+=obj.state;
	}
	if(obj.adress.indexOf(obj.District)==-1)
	{
	    obj.adress+=obj.District;
	}
	
	System.out.println(obj.adress);
	}
}