<?php
// problem name: Root Equal Sum of Children


//Definition for a binary tree node.

 class TreeNode {
     public $val = null;
     public $left = null;
     public $right = null;
     function __construct($val = 0, $left = null, $right = null) {
         $this->val = $val;
         $this->left = $left;
         $this->right = $right;
     }
 }

class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function checkTree(TreeNode $root) {
        print_r( $root->val);
        if($root->val == ($root->left->val + $root->right->val)){
            return "true";
        }
        return "false";
    }
}

$root = new TreeNode(10, 4, 6);

$sol = new Solution();
echo $sol->checkTree($root);