<?php
namespace Penh\SimpleCurrency\Concerns;

trait HasFormate
{
    public function formate($number)
    {
        return number_format($number, 2, '.', ',');
    }
}