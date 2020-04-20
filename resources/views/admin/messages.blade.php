<div class="col-lg-5 col-12">
    <div class="card rounded-lg">
        <div class="card-header rounded-lg border-0 py-4">
            <div class="row">
                <div class="col">
                    <h5 class="card-header-title font-weight-bold">Recent Messages</h5>
                </div>
                <div class="col-auto"><a href="#!" class="small font-weight-bold">View all</a></div>
            </div>
        </div>
        <div class="card-body border-top">
            <div class="list-group list-group-flush my-n3">

                @foreach ($messages->take(5) as $message)
                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col ml-n2">

                            <!-- Title -->
                            <h5 class="mb-1">
                                {{$message->name}}
                            </h5>
                            <p class="small text-gray-700 mb-0">
                                {{ Str::words($message->message, 15, ' ...') }}.
                            </p>
                            <!-- Time -->
                            <small class="text-muted">
                                {{$message->created_at->diffForHumans()}}
                            </small>

                        </div>
                        <div class="col-auto">

                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#!" class="dropdown-item">
                                        Action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Another action
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        Something else here
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div> <!-- / .row -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>