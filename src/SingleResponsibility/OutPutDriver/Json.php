<?php

namespace App\SingleResponsibility;


class Json implements OrderOutputInterface
{
    /**
     * @param Order $order
     * @return bool|string
     */
    public function output(Order $order): bool|string
    {
        $items = $order->getItems();
        return json_encode($items);
    }

}