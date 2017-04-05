<?PHP

class Block{
     
     private $originBlock;
     private $maxRow = 0;
     private $maxCol = 0;
     private $alreadySearched;

     function setOriginBlock($originBlock){
          $this->originBlock = $originBlock;
          
          $this->maxRow = sizeof($this->originBlock);
          $this->maxCol = sizeof($this->originBlock[$this->maxRow-1]);
          
          $this->alreadySearched = array();
     }

     function drawOriginBlock(){
          echo "<div class='originBlockBox'>";
          for($row = 0; $row < $this->maxRow; $row++){
               for($col = 0; $col < $this->maxCol; $col++){
                    if($this->originBlock[$row][$col] == 1 ){
                         echo "<div class='block block_black'>1</div>";
                    }else{
                         echo "<div class='block'>0</div>";
                    }
               }
          }
          echo "</div>";
     }
     
     function drawBlockByBlockBox($blockBox){
          echo "<div class='blockBox'>";
          for($row = 0; $row < $this->maxRow; $row++){
               for($col = 0; $col < $this->maxCol; $col++){
                    $currentBlock = $this->getBlock($row, $col);
                    if(in_array($currentBlock, $blockBox)){
                         echo "<div class='block block_black'>1</div>";
                    }else{
                         echo "<div class='block'>0</div>";
                    }
               }
          }
          echo "</div>";
     }
     
     function findAllMinBlock(){
          $blockArray = array();
          for($row = 0; $row < $this->maxRow; $row++){
               for($col = 0; $col < $this->maxCol; $col++){
                    if($this->originBlock[$row][$col] == 1){
                         $blockBox = array();
                         $blockBox[] = $this->getBlock($row, $col);
                         $blockArray[] = $blockBox;
                    }
               }
          }
          return $blockArray;
     }
     
     function findMaxBlock($newBlockArray){
          $score = 0;
          $maxBlockBox = array();
          foreach($newBlockArray as $blockBox){
               if(sizeof($blockBox) > $score){
                    $maxBlockBox = array();
                    $score = sizeof($blockBox);
                    $maxBlockBox[] = $blockBox;
               }else if(sizeof($blockBox) == $score){
                    $maxBlockBox[] = $blockBox;
               }
          }
          
          return $maxBlockBox;
     }
     
     function getBlock($row, $col){
          $block['row'] = $row;
          $block['col'] = $col;
          return $block;
     }
     
     function findAllBlock(){
          $blockArray = $this->findAllMinBlock();
          $allBlockArray = array();
          
          for($index = 0; $index < sizeof($blockArray); $index++){
               $blockBox = $blockArray[$index];
               $isNeedSave = false;
               for($i = 0; $i < sizeof($blockBox); $i++){
                    $block = $blockBox[$i];
                    if(in_array($block, $this->alreadySearched)){
                         break;
                    }else{
                         if(  $this->originBlock[$block['row']][$block['col']] == 1){
                              $isNeedSave = true;
                              $this->alreadySearched[] = $block;
                              $rightBlock = $this->getBlock($block['row'], $block['col']);
                              if(!in_array($rightBlock, $blockBox)){
                                   $blockBox[] = $rightBlock;
                              }
                         }
                         if(  $this->originBlock[$block['row']][$block['col']+1] == 1){
                              $isNeedSave = true;
                              $this->alreadySearched[] = $block;
                              $rightBlock = $this->getBlock($block['row'], $block['col']+1);
                              if(!in_array($rightBlock, $blockBox)){
                                   $blockBox[] = $rightBlock;
                              }
                         }
                         if(  $this->originBlock[$block['row']][$block['col']-1] == 1){
                              $isNeedSave = true;
                              $this->alreadySearched[] = $block;
                              $rightBlock = $this->getBlock($block['row'], $block['col']-1);
                              if(!in_array($rightBlock, $blockBox)){
                                   $blockBox[] = $rightBlock;
                              }
                         }
                         if(  $this->originBlock[$block['row']+1][$block['col']] == 1){
                              $isNeedSave = true;
                              $this->alreadySearched[] = $block;
                              $rightBlock = $this->getBlock($block['row']+1, $block['col']);
                              if(!in_array($rightBlock, $blockBox)){
                                   $blockBox[] = $rightBlock;
                              }
                         }
                         if(  $this->originBlock[$block['row']-1][$block['col']] == 1){
                              $isNeedSave = true;
                              $this->alreadySearched[] = $block;
                              $rightBlock = $this->getBlock($block['row']-1, $block['col']);
                              if(!in_array($rightBlock, $blockBox)){
                                   $blockBox[] = $rightBlock;
                              }
                         }
                         
                    }
               }
               
               if($isNeedSave = true){
                    $allBlockArray[] = $blockBox;
               }
          }
          
          return $allBlockArray;
     }
     
}

?>