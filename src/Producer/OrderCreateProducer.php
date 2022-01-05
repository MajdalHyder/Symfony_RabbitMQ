<?php 
namespace App\Producer;

use App\Entity\Order;
use OldSound\RabbitMqBundle\RabbitMq\ProducerInterface;

class OrderCreateProducer extends \OldSound\RabbitMqBundle\RabbitMq\Producer
{
    private $producer;

    public function __construct(ProducerInterface $producer)
    {
        $this->producer = $producer;
    }

    public function add(Order $order)
    {
        $message = [
            'order_id' => $order->getId(),
            'customer_name' => $order->getCustomerName(),
            'car_make' => $order->getCarMake(),
            'car_model' => $order->getCarModel(),
            'timestamp' => date('Y-m-d H:i:s')
            ];
        
        $this->producer->publish(json_encode($message), $message['car_make']);
    }
}