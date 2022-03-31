<div>

    @foreach ($orders as $order)
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-body">

                <div class="text-center">
                    <div class="text-muted">Academic Level</div>
                    <div>{{ $order->academic_level }}</div>
                </div>
                <hr>
                <div class="text-muted">Paper Title</div>
                <div>{{ $order->paper_title }}</div>
                <div class="text-muted">Paper Details</div>
                <div>{{ $order->paper_details}}</div>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="text-muted">Paper Type</div>
                        <div>{{ $order->paper_type}}</div>
                    </div>
                    <div class="col">
                        <div class="text-muted">Paper File</div>
                        @if ($order->paper_file == "No file uploaded")
                        <div>No files Uploaded </div>
                        @else
                        <div><a href="{{ route('client.download',$order->paper_file) }}">
                                {{ $order->paper_file }}
                                <span> <i class="fa fa-download"></i></a>
                            </span>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
            <a class="btn btn-dark btn-lg" href="#" wire:click.prevent="startConversation({{ $user_id }})"
                class="text-secondary">Send a message</a>
        </div>
        <div class="col-md-4 offset-md-2">
            <div class="card card-body">
                <p>Number of Pages: {{ $order->number_pages }}</p>
                <p>Number of sources: {{ $order->number_sources }}</p>
                <p>Plagiarism Report: {{ $order->plagiarism_report?"Required":"Not Required" }}</p>
                <p>Copies Sources: {{ $order->copies_sources?"Required":"Not Required" }}</p>
                <p>One Page Summary: {{ $order->page_summary?"Required":"Not Required" }}</p>

                <a class="btn btn-lg btn-dark" href="{{ route("admin.process") }}">Go back to orders</a>
            </div>
        </div>

    </div>

    @endforeach
</div>