<div>
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body row">
                <div class="col-md-5 text-center d-flex align-items-center justify-content-center">
                    <div class="">
                        <h2>Legendary<strong>Writers</strong></h2>
                        <p class="lead mb-5">145 Njuri Ncheke, Meru<br>
                            Phone: +254 752 314 563
                        </p>
                    </div>
                </div>
                <div class="col-md-7">
                    <form wire:submit.prevent="sendEmail()" id="emailForm">
                        <div class="form-group">
                            <label for="inputSubject">Subject</label>
                            <input type="text" id="inputSubject" class="form-control" wire:model="inputSubject" />
                        </div>
                        @error('inputSubject')
                        <div class="text-danger my-2">{{ $message }}</div>
                        @enderror
                        <div class="form-group my-2">
                            <label for="inputMessage">Message</label>
                            <textarea id="inputMessage" class="form-control" style="resize:none" rows="4"
                                wire:model="inputMessage"></textarea>
                        </div>
                        @error('inputMessage')
                        <div class="text-danger my-2">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Send message">
                        </div>
                    </form>
                </div>


            </div>



        </div>


    </section>

</div>