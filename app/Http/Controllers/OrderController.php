<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use PDF;
use Session;

class OrderController extends Controller
{
    public function OrderForm() {
        return view('admin.order.add-order');
    }
    public function OrderSave(Request $request){
        $order = new Order();
        $order->date = $request->date;
        $order->month = $request->month;
        $order->year = $request->year;
        $order->guest_id = $request->guest_id;
        $order->order_no = $request->order_no;
        $order->order_amount = $request->order_amount;
        $order->order_due = $request->order_due;
        $order->reffered = $request->reffered;
        $order->save();

        $orderId = $order->id;
        Session::put('orderId',$orderId);


        return redirect('download/Order-Pdf')->with('message', 'Order Info Save Succesfully');

    }

    public function OrderManage(){
        $orders = Order::all();
        return view('admin.order.manage-order',[
            'orders' => $orders
        ]);
    }
      public function OrderEdit($id){
          $order = Order::find($id);
        return view('admin.order.edit-order',[
            'order' => $order
        ]);
    }

    public function OrderUpdate(Request $request){
        $order = Order::find($request->order_id);

        $order->date = $request->date;
        $order->month = $request->month;
        $order->year = $request->year;
        $order->guest_id = $request->guest_id;
        $order->order_no = $request->order_no;
        $order->order_amount = $request->order_amount;
        $order->order_due = $request->order_due;
        $order->reffered = $request->reffered;
        $order->save();

        return redirect('order/manage')->with('message','Order Info Updated Succesfully');

    }
    public function OrderDelete($id){
        $order = Order::find($id);
        $order->delete();

        return redirect('order/manage')->with('message', 'Order Info deleted Succesfully');
    }

    public function OrderDownload(){
        $orderId = Order::find(Session::get('orderId'));
        $pdf = PDF::loadView('admin.order.download-order',[
            'orderId' => $orderId
        ]);

        return $pdf->stream('order.pdf');


    }

}
