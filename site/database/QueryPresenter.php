<?php
/**
    MILL SHOP COMPANY, 2016
    CREATED BY NIKITA GRECHUKHIN, NIKOLAY KOMAROV AND VAGIK SIMONYAN
 */

interface QueryPresenter{

    public function getItemById($id);

    public function getItemsBySizes($sizes);

    public function getItemsByColor($color);

    public function getItemsByCriteria($criteria);

    public function getMaxPrice();

    public function getMinPrice();

    public function drawItemHolders();

    public function drawColors();

    public function drawSizes();

    public function printItemInformation();
}
?>