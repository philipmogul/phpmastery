<?php 
// git basics 

// configurations = setting username, email 
// git config --global user.name "PhilipValue"
// git config --global user.email "philipp1mogul@gmail.com"
echo "<br/>git config --global user.name = 'Philip Value'   : This command is used to set variables in git config <br/><br/>";


// initial commit = git init 
echo "git init : is used to initialize a commit <br/><br/>";

// make changes = make changes to file on file editor 
echo "Changes to a file are done on a normal text editor. <br/><br/>";



// add changes = git add .
echo "git add . : is used to add files <br/><br/>";



// commit changes = git commit -m "Message attached to this commit"
echo "git commit -m 'Messages attached to commit' => This is used to do the final commit. <br/><br/>";




// git diff is used to see what changes have been done to a file in working directory 
echo "git diff: see what changes have been done to a file: working directory. <br/><br/>";


// git diff --staged : used to see changes to files in the staged directory 
echo "git diff --staged <br /><br />";


// deleting files in git 
// make sure all files are added to repository 
echo "git rm filename <br /><br />";



// moving and rename files 
// do a git add first, the git rm , then add to status and git will compare the data and find them equal 
// and realize the files were renamed 
// or better way 
// use mv command = git mv file_deleted_1.txt file_renamed_1.txt 
echo "git mv file_deleted_1.txt file_renamed_1.txt <br /><br />";





