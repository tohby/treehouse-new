<div class="col-lg-7 col-12">
    <div class="card rounded-lg">
        <div class="card-header rounded-lg border-0 py-4">
            <div class="row">
                <div class="col">
                    <h5 class="card-header-title font-weight-bold">New orders</h5>
                </div>
                <div class="col-auto"><a href="/orders" class="small font-weight-bold">View all</a></div>
            </div>
        </div>
        <div class="card-body border-top">
            <div class="table-responsive">
                <table class="table table-centered mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Order Status</th>
                            <th style="width: 125px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders->take(7) as $order)
                        <tr>
                            <td class="font-weight-bold">{{$order->order_code}}</td>
                            <td>{{ \Carbon\Carbon::parse($order->created_at)->format('l jS \\of F Y')}}</td>
                            <td>@if ($order->order_status == 1)
                                <span class="badge badge-primary">Order Placed</span>
                                @elseif($order->order_status == 2)
                                <span class="badge badge-info">Processed</span>
                                @elseif($order->order_status == 3)
                                <span class="badge badge-success">Completed</span>
                                @elseif($order->order_status == 0)
                                <span class="badge badge-danger">Cancelled</span>
                                @endif
                            </td>
                            <td><a href="/orders/{{$order->id}}/details" class="text-muted"><i class="fas fa-eye"></i> See
                                    details</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>