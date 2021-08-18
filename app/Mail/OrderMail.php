<?php

namespace App\Mail;

use App\Models\Order;
use App\Models\ProductOrder;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $total_quantity = ProductOrder::where('order_id', $this->order->id)->sum('quantity');

        $total_price = $this->order->products->sum(function ($product) {
            return $product->price * $product->pivot->quantity;
        });

        return $this->view('Mail.order', compact('total_price'));
    }
}
