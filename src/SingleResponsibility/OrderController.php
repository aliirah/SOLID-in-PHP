<?php

namespace App\SingleResponsibility;

class OrderController
{
    public function index()
    {
        $order = new Order(['item1', 'item2'], new Json);

        $orderRepo = new OrderRepository();
        $orderRepo->save($order);

        $order->output();
    }
}