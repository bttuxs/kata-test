<?php

namespace Kata\CategoryTree;

class Printer
{
  public function getNameChild(Category $item, int $spaces):string
  {
    $strNames = str_repeat("  ", $spaces).$item->name()."\n";
    if(count($item->children())> 0)
    {
      $data =$item->children();
      usort($data, fn($itemA, $itemB) => $itemA->name() <=> $itemB->name());
      foreach($data as $child){
        $strNames.= $this->getNameChild($child, $spaces+1);
      }
    }
    return $strNames;
  }

  public function build(Category $parent, int $spaces = 0): string
  {
      /**
       * @todo
       */
      return $this->getNameChild($parent, $spaces);
  }
}
