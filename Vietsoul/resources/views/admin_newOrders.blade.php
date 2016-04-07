<!DOCTYPE html>
<html>
    <body>
    <h3>New Orders</h3>
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
    Created at: {{ $order->created_at }}
    <br>
    <a href="./admin_addprocOrders/{{ $order->order_id }}"><button>Process</button></a>
      <a href="./admin_addtrashOrders/{{ $order->order_id }}"><button>Delete</button></a>

      <br>
      <br>
      @endforeach
    </body>
    </html>