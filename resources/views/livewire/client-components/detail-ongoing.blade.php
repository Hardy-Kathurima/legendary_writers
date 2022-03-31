<div>
    @foreach ($orders as $order)
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-body">
                <div class="row mb-2">
                    <div class="col">
                        <div>Order By</div>
                    </div>
                    <div class="col">
                        <div>{{ auth()->user()->name }}</div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <div>Order created on</div>
                    </div>
                    <div class="col">
                        <div class="font-weight-bolder">{{ $order->created_at }}</div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <div>Deadline</div>
                    </div>
                    <div class="col">
                        <div class="font-weight-bolder">
                            <span class="{{ $order->urgency?'text-success':'text-danger' }}"><i
                                    class="fa fa-calendar"></i></span>
                            {{ $order->urgency }}</div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <div>Estimated Days Left</div>
                    </div>
                    <div class="col">
                        <div><span class="{{ $order->urgency?'text-success':'text-danger' }}"><i
                                    class="fas fa-hourglass-half"></i></span>
                            +{{ \Carbon\Carbon::now()->diff( \Carbon\Carbon::parse($order->urgency) )->format(' %d days') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div><a class="btn btn-dark" href="#"
                                wire:click.prevent="startConversation({{ $admin_id }})">Ask A
                                Question</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body">
                <div class="row mb-3">
                    <div class="col">
                        <div>Order Status</div>
                    </div>
                    <div class="col">
                        <div class="text-success">{{ $order->payment_status?'Ongoing':'' }}</div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <div>Paper Type</div>
                    </div>
                    <div class="col">
                        <div>{{ $order->paper_type }}</div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <div>Order Number</div>
                    </div>
                    <div class="col">
                        <div class="font-weight-bolder">{{ $order->order_id}}</div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <div>Payment Status</div>
                    </div>
                    <div class="col">
                        <div class="font-weight-bolder text-success">{{ $order->payment_status?'Paid':'Pending'}}</div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col">
                        <div>Total</div>
                    </div>
                    <div class="col">
                        <div class="font-weight-bolder">${{ $order->order_cost}}.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card card-body">
                <div class="text-center">
                    <div class="text-muted">Paper Title</div>
                    <div>{{ $order->paper_title }}</div>
                </div>
                <hr>
                <div class="text-center">
                    <div class="text-muted">Paper Details</div>
                    <div>{{ $order->paper_details }}</div>
                </div>
                <hr>
                <div class="row mb-2">
                    <div class="col">
                        <div class="text-muted">Paper Subject</div>
                        <div>{{ $order->subject }}</div>
                    </div>
                    <div class="col">
                        <div class="text-muted">Language Style</div>
                        <div>{{ $order->language_style }}</div>
                    </div>
                    <div class="col">
                        <div class="text-muted">Paper Style</div>
                        <div>{{ $order->paper_style }}</div>
                    </div>
                </div>
                <hr>
                <div class="row mb-2">
                    <div class="col">
                        <div class="text-muted">Number of Sources</div>
                        <div>{{ $order->number_sources }}</div>
                    </div>
                    <div class="col">
                        <div class="text-muted">Number of Pages</div>
                        <div class="font-weight-bolder">{{ $order->number_pages }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="text-muted">Plagiarism Report</div>
                        <div>{{ $order->plagiarism_report?'required':'not required' }}</div>
                    </div>
                    <div class="col">
                        <div class="text-muted">Copies Sources</div>
                        <div>{{ $order->copies_sources?'required':'not required' }}</div>
                    </div>
                    <div class="col">
                        <div class="text-muted">One Page Summary</div>
                        <div>{{ $order->page_summary?'required':'not required' }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-body">
                <p><a class="btn btn-dark" href="#">Request Progress</a></p>
                <hr>
                <div class="my-2">
                    <h5>Add a File</h5>

                    <form wire:submit.prevent="uploadFile({{ $order->id }})" enctype="multipart/form-data" method="POST"
                        id="clientUpload">
                        @csrf
                        <div class="mb-2">
                            <label for="order_file">Paper file:</label>
                            <input type="file" name="order_file" wire:model="order_file">
                            @error('order_file')
                            <div> <span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="order_detail" class="form-label">Add short description</label>
                            <textarea name="order_detail" style="height: 100px; resize:none;" class="form-control"
                                placeholder="Added details about the paper" wire:model.lazy="order_detail"></textarea>
                            @error('order_detail')
                            <div> <span class="text-danger">{{ $message }}</span></div>

                            @enderror

                        </div>
                        <button type="submit" class="btn btn-success">Submit File</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <h5>Uploaded during order</h5>
                @if ($order->paper_file == "No file uploaded")
                <div>No files Uploaded </div>
                @else
                <div><a href="{{ route('client.download',$order->paper_file) }}">
                        {{ $order->paper_file }}
                        <span> <i class="fa fa-download"></i></a>
                    </span>
                </div>
                @endif
                <hr>
                <h5>Added Files</h5>
                <div>
                    @foreach ($files_uploaded as $file)

                    @if (!$file)
                    <div>No added files</div>
                    @endif
                    <div><a href="{{ route('client.download',$file->order_file) }}">
                            {{ $file->order_file }}
                            <span> <i class="fa fa-download"></i></a>
                        </span>
                    </div>

                    @endforeach
                </div>


            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body">
                <h5>Order Preview</h5>
                <p>Order Progress papers will appear here</p>
                @forelse ($uploads as $upload)

                <div><a href="{{ route('download.progress',$upload->file_preview) }}">
                        {{ $upload->file_preview }}
                        <span> <i class="fa fa-download"></i></a>
                    </span>
                </div>
                <div>
                    <div class="text-muted">Details</div>
                    <div>{{ $upload->preview_detail }}</div>
                </div>

                @empty
                <h5 class="font-weight-bolder">Currently No preview files</h5>
                @endforelse
            </div>
        </div>
    </div>



    @endforeach


</div>