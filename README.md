## Challenge


#2016-07-28 Find max block

------------------------

## Find max block
### 題目說明

找出 10x10 陣列中的相鄰最大區塊

相鄰定義：1 的上下左右中有 1 的為相鄰區塊

預設陣列定義

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

練習重點：

 * 邏輯判斷

### 輸出結果

	0 0 0 0 0 0 0 0 0 0
	0 0 0 0 0 0 0 0 0 0
	0 0 0 0 0 0 0 0 0 0
	0 0 0 0 0 0 0 0 0 0
	0 0 0 0 0 0 0 0 0 0
	0 0 0 0 0 0 0 0 0 0
	0 0 0 0 0 0 1 1 1 1
	0 0 0 0 0 0 1 1 1 1
	0 0 0 0 0 0 1 1 1 1
	0 0 0 0 0 0 0 0 0 1

------------------------
挑戰題：
https://github.com/ChungYoProbies/find_max_block/

問題與討論：
https://github.com/ChungYoProbies/question
