<?PHP require_once 'BlockClass.php'; ?>
<html>
     <head>
          <meta charset="UTF-8">
          <meta name="description" content="Logic Test - Find Max Block">
          <meta name="keywords" content="PHP Logic Test">
          <meta name="author" content="Max Sherlock">
          <link rel="stylesheet" type="text/css" href="style.css">
     </head>
     <body>
          <?php
               $origin = array(
                   array(1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
                   array(1, 1, 0, 1, 1, 0, 0, 0, 0, 0),
                   array(0, 0, 0, 1, 1, 0, 0, 0, 0, 0),
                   array(0, 0, 0, 0, 0, 1, 1, 1, 0, 0),
                   array(1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
                   array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
                   array(1, 1, 1, 0, 1, 0, 1, 1, 1, 1),
                   array(1, 0, 0, 0, 1, 0, 1, 1, 1, 1),
                   array(1, 0, 0, 0, 1, 0, 1, 1, 1, 1),
                   array(1, 1, 0, 1, 1, 0, 0, 0, 0, 1)
               );
               
               $blockClass = new Block(); 
               $blockClass->setOriginBlock($origin);
          ?>
          
          <div class="title">Origin</div>
          
          <?php $blockClass->drawOriginBlock(); ?>
          
          <div class="title">Find Max Block</div>
          
          <?php 

          $allBlock      = $blockClass->findAllBlock();
          $maxBlockBox   = $blockClass->findMaxBlock($allBlock);

          echo "Max block amount：" . sizeof($maxBlockBox) . "<br>";
          echo "Max block's block amount：" . sizeof($maxBlockBox[0]) . "<br>";

          echo "<div class='blockBox_div'>";
          foreach($maxBlockBox as $blocks){
               $blockClass->drawBlockByBlockBox($blocks);
          }
          echo "</div>";
          ?>
     </body>
</html>