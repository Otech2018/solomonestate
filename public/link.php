
<?php


public class Solution {
    public boolean canPermutePalindrome(String s) {
        HashSet<Character> app = new HashSet<Character>();
        for (int i = 0; i < s.length(); i ++) {
            char c = s.charAt(i);
            if (app.contains(c)) {
                app.remove(c);
            }    
            else {
                app.add(c);
            }
        }
        return app.size() <=1;
    }
}




?>