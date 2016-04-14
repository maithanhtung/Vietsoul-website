<!DOCTYPE html>
<html>
    <body>
    <h3>Processing Orders</h3>
    <a href="./admin_newOrders"><button>admin_newOrders</button></a>
    <a href="./admin_procOrders"><button>admin_processOrders</button></a>
    <a href="./admin_trashOrders"><button>admin_trashOrders</button></a>
    <br>
    <br>
    @foreach ($orders as $order) 
    Product code: {{ $order->product_code }}
    <br>
    User id: {{ $order->user_id }}
    <br>
    Updated at: {{ $order->updated_at }}
    <br>
      <a href="./admin_addtrashProcOrders/{{ $order->order_id }}"><button>Delete</button></a>

      <br>
      <br>
      @endforeach
    </body>
    </html>