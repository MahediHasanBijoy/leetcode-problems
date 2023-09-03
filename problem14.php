<?php
// problem name: longest common prefix

/* Write a function to find the longest common prefix string amongst an array of strings.

If there is no common prefix, return an empty string "".

 

Example 1:

Input: strs = ["flower","flow","flight"]
Output: "fl"
Example 2:

Input: strs = ["dog","racecar","car"]
Output: ""
Explanation: There is no common prefix among the input strings.
 

Constraints:

1 <= strs.length <= 200
0 <= strs[i].length <= 200
strs[i] consists of only lowercase English letters. */

function longestCommonPrefix($strs){
    // check for empty array or array have any empty string
    if(count($strs)==0 || in_array("", $strs)){
        return "";
    }

    for($i=0; $i<strlen($strs[0]); $i++){
        // compare characters from $str[0] with all other strings in the array
        $character = $strs[0][$i];

        // vertically match characters in each iterations
        for($j=1; $j<count($strs); $j++){
            if($character == $strs[$j][$i]){
                continue;
            }else{
                $strs[0] = substr($strs[0], 0, $i);
                return $strs[0];
            }
        }
    }

    return $strs[0];

}


echo longestCommonPrefix(["a"]);