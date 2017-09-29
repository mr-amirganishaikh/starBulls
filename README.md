# starBulls

Folders Details:
1. _partial
2. css
3. fonts
4. js
5. php
6. scss

1. _partial
- This folder consists of files which will be included in multiple pages.
- How to include this files in other pages 
Ex. As we have few code lines for <HEAD> tag which should be used in each page will create a file and name it as HEAD.PHP and include it in any page using following syntax
<?php include '_partial/head.php' ?>
- While editing any file in _partial folder will have to keep in mind that if any link for any internal page or file is to be made will add path as if we are adding directly to the page. 
Ex. This format should be used <img src="img/imageName.extension" /> instead of <img src="../img/imageName.extension" />
