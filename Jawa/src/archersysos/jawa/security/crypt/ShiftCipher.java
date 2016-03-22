package archersysos.jawa.security.crypt;

import java.util.stream.IntStream;

public class ShiftCipher implements Cryptable {

	@Override
	public String encrypt(String code) {
		char[] letters = code.toCharArray();
		
		return code;
		
	}

	@Override
	public String decrypt(String code) {
		// TODO Auto-generated method stub
		return null;
	}

}
