@extends('layouts/master')

@section('content')
<div class="container-fluid px-3">
    <div class="row">
        <div class="col-lg-10">
            <h2>Orders</h2>
        </div>
    </div>

    <div class="card mt-5">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Order Status</th>
                            <th style="width: 125px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <td class="font-weight-bold">{{$order->order_code}}</td>
                            <td>{{ \Carbon\Carbon::parse($order->created_at)->format('l jS \\of F Y')}}</td>
                            <td>@if ($order->order_status == 1)
                                    <span class="badge badge-primary">Order Placed</span>
                                @elseif($order->order_status == 2)
                                    <span class="badge badge-info">Processed</span>
                                @elseif($order->order_status == 0)
                                    <span class="badge badge-danger">Cancelled</span>
                                @endif
                            </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection