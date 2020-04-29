@extends('layouts/master')

@section('content')
<div class="container-fluid px-3">
    <div class="row">
        <div class="col-sm-9">
            <h2>Order Details</h2>
        </div>
        <div class="col-sm-3">
            @if ($order->order_status != 0 && $order->order_status != 3)
                <a href="/orders/{{$order->id}}/change-status" class="btn btn-info">
                @if ($order->order_status == 1)
                    Mark as Processed
                @elseif($order->order_status == 2)
                    Mark as Completed
                @endif
                </a>
                <a href="/orders/{{$order->id}}/cancel" class="btn btn-danger">Cancel Order</a>
            @endif
        </div>
    </div>
    {{-- {{$order->product->images}} --}}

    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-10 col-sm-11">

            <div class="horizontal-steps mt-4 mb-4 pb-5">
                <div class="horizontal-steps-content">
                    <div class="step-item {{$order->order_status == 1 ? 'current' : ''}}">
                        <span data-toggle="tooltip" data-placement="bottom" title=""
                            data-original-title="20/08/2018 07:24 PM">Order Placed</span>
                    </div>
                    <div class="step-item {{$order->order_status == 2 ? 'current' : ''}}">
                        <span data-toggle="tooltip" data-placement="bottom" title=""
                            data-original-title="21/08/2018 11:32 AM">Processed</span>
                    </div>
                    @if ($order->order_status == 0)
                    <div class="step-item cancelled {{$order->order_status == 0 ? 'current' : ''}}">
                        <span>Cancelled</span>
                    </div>
                    @else
                    <div class="step-item {{$order->order_status == 3 ? 'current' : ''}}">
                        <span>Completed</span>
                    </div>
                    @endif
                </div>
                @if ($order->order_status == 1)
                <div class="process-line" style="width: 1%;"></div>
                @elseif($order->order_status == 2)
                <div class="process-line" style="width: 50%;"></div>
                @elseif($order->order_status == 3)
                <div class="process-line" style="width: 99%;"></div>
                @elseif($order->order_status == 0)
                <div class="process-line cancelled" style="width: 99%;"></div>
                @endif

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Order <strong>{{$order->order_code}}</strong></h4>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$order->product->title}}</td>
                                    <td>{{$order->number_of_products}}</td>
                                    <td>{{ \Carbon\Carbon::parse($order->created_at)->format('l jS \\of F Y')}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->

                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Customer Information</h4>

                    <p>Name: <strong>{{$order->name}}</strong></p>
                    <p>Address: <strong>{{$order->address}}</strong></p>
                    <p>Email: <strong>{{$order->email}}</strong></p>
                </div>
            </div>
        </div> <!-- end col -->
    </div>

    <div class="row mt-5">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3">Notes</h4>
                    <p>{{$order->notes}}</p>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
</div>
@endsection