<div>
    @foreach ($orders as $order)

    <div class="row">
        <div class="col-md-7">
            <div class="card card-body">
                @foreach ($users as $user)
                <div class="row">
                    <div class="col">
                        <p class="lead">Order By : <span class="font-weight-bold">{{ $user->name }}</span></p>
                    </div>
                    <div class="col">
                        <p class="lead">Order Cost : <span class="font-weight-bold">{{ $order->order_cost }}</span></p>
                    </div>
                    <div class="col">
                        <a href="#" wire:click.prevent="startConversation({{ $user->id }})" class="text-secondary"
                            style="font-size: 20px">Message <i class="fa fa-comments"></i></a>
                    </div>
                </div>

                @endforeach

                <div class="text-center">Title: {{ $order->paper_title }}</div>
                <div class="text-muted">Paper Details</div>
                <div>{{ $order->paper_details }}</div>
                <hr>
                <div class="row">
                    <div class="col">
                        <p>Subject: <span class="font-weight-bold">{{ $order->subject }}</span></p>
                    </div>
                    <div class="col">
                        <p>Number of Pages: <span class="font-weight-bold">{{ $order->number_pages }}</span></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <p>Plagiarism Report: <span
                                class="font-weight-bold">{{ $order->plagiarism_report?"Required":"None" }}</span></p>
                    </div>
                    <div class="col">
                        <p>Copies Sources: <span
                                class="font-weight-bold">{{ $order->copies_sources?"Required":"None" }}</span></p>
                    </div>
                    <div class="col">
                        <p>Page Summary: <span
                                class="font-weight-bold">{{ $order->page_summary?"Required":"None" }}</span></p>
                    </div>
                </div>
                <hr>

                <div class="row justify-content-center">
                    <div class="col">
                        <div class="text-muted">Uploaded File</div>
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
                <hr>



            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-body">


                <h5 class="text-center font-weight-bold">Upload Paper Progress</h5>
                <hr>
                <form wire:submit.prevent="uploadFile" id="form">
                    <input type="file" name="file_preview" class="form-control mb-3" wire:model="file_preview">
                    <div wire:loading wire:target="file_preview" class="my-2 text-success">Uploading...</div>
                    @error('file_preview')
                    <div class="mb-2 text-danger">{{ $message }}</div>

                    @enderror
                    <textarea name="preview_detail" class="form-control mb-2" style="height: 110px;resize:none;"
                        wire:model="preview_detail"></textarea>
                    @error('preview_detail')
                    <div class="mb-2 text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-check mb-2">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="completed" wire:model="completed">Mark
                            as completed
                        </label>
                    </div>
                    <button class="btn btn-dark" type="submit">Submit Paper</button>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <h5 class="text-center font-weight-bold">Client added uploads</h5>
                <hr>
                @forelse ($order->clientuploads as $upload)
                <div class="text-center mb-2">Added File: <a href="{{ route('client.upload',$upload->order_file) }}">
                        {{ $upload->order_file }}
                        <span> <i class="fa fa-download"></i></a>
                    </span>
                </div>
                <h5 class="text-center text-muted">Added file Details</h5>
                <div class="text-center">{{ $upload->order_detail }}</div>
                <hr>
                @empty
                <p>No added files</p>
                @endforelse
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body">
                <h5 class="font-weight-bold text-center">Admin added order Progress</h5>
                <hr>
                @forelse ($uploads as $upload)
                <div class="text-center mb-2">Added File: <a href="{{ route('admin.download',$upload->file_preview) }}">
                        {{ $upload->file_preview }}
                        <span> <i class="fa fa-download"></i></a>
                    </span>
                </div>
                <div class="text-center">
                    <div class="text-muted">
                        Upload Details
                    </div>
                    <div>{{ $upload->preview_detail }}</div>
                </div>
                <hr>
                @empty

                <p>No Uploaded order progess</p>

                @endforelse
                {{ $uploads->links() }}
            </div>
        </div>
    </div>

    @endforeach
</div>