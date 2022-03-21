@if ($conversations->isNotEmpty())
<div class="row" wire:poll>
    <div class="col-md-4">
        <div class="bg-primary p-3 text-center mb-2">Messages</div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Inbox</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">

                    @foreach ($conversations as $conversation)
                    <li class="nav-item active {{ $conversation->id===$selectedConversation->id? 'bg-warning':'' }}">
                        <a href="#" class="nav-link" wire:click.prevent="viewMessage({{$conversation->id}})">
                            <i class="fas fa-inbox"></i>
                            @if ($conversation->sender_id==auth()->id())
                            {{ $conversation->receiver->name }}

                            @else
                            {{ $conversation->sender->name }}

                            @endif
                            <span
                                class="badge text-muted float-right">{{ $conversation->messages->last()?->created_at->format('d/m/Y') }}</span>
                            <div class="text-secondary">
                                {{ Str::of( $conversation->messages->last()?->body)->limit(40) }}</div>
                        </a>
                    </li>

                    @endforeach



                </ul>
            </div>
            <!-- /.card-body -->
        </div>

    </div>
    <div class="col-md-8">
        <div>
            <div class="card card-primary card-outline direct-chat direct-chat-primary">
                <div class="card-header">
                    <h3 class="card-title">Chat with
                        @if ($conversation->sender_id==auth()->id())
                        {{ $selectedConversation->receiver->name }}
                        @else
                        {{ $selectedConversation->sender->name }}
                        @endif

                    </h3>

                    <div class="card-tools">
                        <span title="3 New Messages" class="badge bg-primary">3</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                            <i class="fas fa-comments"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages">
                        <!-- Message. Default to the left -->
                        @foreach ($selectedConversation->messages as $message)
                        <div class="direct-chat-msg {{ $message->user_id==auth()->id()?'right':'' }}">
                            <div class="direct-chat-infos clearfix">
                                <span
                                    class="direct-chat-name float-left">{{ $message->user->id===auth()->id()? 'You' : $message->user->name }}</span>
                                <span class="direct-chat-timestamp float-right">{{ date("d M h:i a") }}</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="/bower_components/admin-lte/dist/img/user1-128x128.jpg"
                                alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                {{ $message->body }}
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>

                        @endforeach

                    </div>
                    <!--/.direct-chat-messages-->

                    <!-- Contacts are loaded here -->
                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg"
                                        alt="User Avatar">

                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                            Count Dracula
                                            <small class="contacts-list-date float-right">2/28/2015</small>
                                        </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                        </ul>
                        <!-- /.contatcts-list -->
                    </div>
                    <!-- /.direct-chat-pane -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <form wire:submit.prevent="sendMessage">
                        <div class="input-group">
                            <input wire:model.defer="body" type="text" name="message" placeholder="Type Message ..."
                                class="form-control">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- /.card-footer-->
            </div>
        </div>
    </div>
</div>
@else
<div class="row justify-content-center align-items-center">
    <div class="col-md-8">
        <div class="text-center">
            <img src="{{ asset("images/send.png") }}" class="img-fluid" style="height:150px" alt="circle">
            <h3><strong>You don't have any messages Yet</strong></h3>
            <h4>Click the button below to select the users to chat with</h4>
            <a href="{{ route("admin.users") }}" class="btn btn-primary">Go to users</a>
        </div>
    </div>
</div>
@endif