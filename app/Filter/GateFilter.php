<?php
namespace App\Filter;

use Laratrust;
use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;

class GateFilter implements FilterInterface
{
    public function transform($item)
    {
        if (isset($item['can']) && !Laratrust::isAbleTo($item['can'])) {
            return false;
        }

        return $item;
    }
}
?>