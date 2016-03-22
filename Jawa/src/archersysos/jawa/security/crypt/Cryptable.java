package archersysos.jawa.security.crypt;

public interface Cryptable {

	String encrypt(String code);
	String decrypt(String code);
}
