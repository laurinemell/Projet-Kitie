package MaJ;

import java.io.BufferedInputStream;
import java.io.BufferedOutputStream;
import java.io.IOException;
import java.net.Socket;
import java.net.UnknownHostException;

public class Recuperer {

	public static void main(String[] args){
	      try {
	         //On se connecte � Wikipedia
	         Socket sock = new Socket("340201.refugilys.org", 80);
	         
	         //Nous allons faire une demande au serveur web
	         //ATTENTION : les \r\n sont OBLIGATOIRES ! Sinon �a ne fonctionnera pas ! ! 
	         String request = "GET /specif/340201/www/chiens.php?APPLI=340201 HTTP/1.1\r\n";
	         request += "Host: 340201.refugilys.org:443\r\n";
	         request += "\r\n";
	                 
	         //nous cr�ons donc un flux en �criture
	         BufferedOutputStream bos = new BufferedOutputStream(sock.getOutputStream());
	         
	         //nous �crivons notre requ�te
	         bos.write(request.getBytes());
	         //Vu que nous utilisons un buffer, nous devons utiliser la m�thode flush
	         //afin que les donn�es soient bien �crite et envoy�es au serveur
	         bos.flush();
	         
	         //On r�cup�re maintenant la r�ponse du serveur 
	         //dans un flux, comme pour les fichiers...
	         BufferedInputStream bis = new BufferedInputStream(sock.getInputStream());
	         
	         //Il ne nous reste plus qu'� le lire
	         String content = "";
	         int stream;
	         byte[] b = new byte[1024];
	         while((stream = bis.read(b)) != -1){
	            content += new String(b, 0, stream);
	         }
	        
	         System.out.println(content);
	         //On affiche la page ! 
	         //Browser browser = new Browser("fr.wikipedia.org", content);        
	         
	      } catch (UnknownHostException e) {
	         e.printStackTrace();
	      } catch (IOException e) {
	         e.printStackTrace();
	      }
	   }   
}