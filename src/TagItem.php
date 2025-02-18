<?php

namespace charlieuki\ReceiptPrinter;

class TagItem
{
    private $paper_size;
    private $content;
    private $qty;
    private $price;
    private $currency = 'Rp';

    function __construct($content) {
        $this->content = $content;
        $this->paper_size = '57mm';
    }

   

    public function setPaperSize($paper_size) {
        $this->paper_size = $paper_size;
    }


  

    public function __toString()
    {
        switch ($this->paper_size) {
            case '80mm':
                $right_cols = 15;
                $left_cols = 32;
                break;
            default:
                $right_cols = 10;
                $left_cols = 22;
                break;
        }

        $content = $this->content;
        
        return "$content\n";
    }
}