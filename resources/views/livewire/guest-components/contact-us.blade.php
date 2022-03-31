<div>
    <div class="row justify-content-center my-4">
        <div class="col-md-8">
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
                        <div class="col-md-7 my-5">
                            <div class=" fw-bolder text-success" wire:loading wire:target="sendEmail">Sending Email...
                            </div>
                            <form wire:submit.prevent="sendEmail()" id="guestForm" wire:loading.class="d-none">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" id="inputName" class="form-control" wire:model="inputName" />
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">E-Mail</label>
                                    <input type="email" id="inputEmail" class="form-control" wire:model="inputEmail" />
                                </div>
                                <div class="form-group">
                                    <label for="inputSubject">Subject</label>
                                    <input type="text" id="inputSubject" class="form-control"
                                        wire:model="inputSubject" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="inputMessage">Message</label>
                                    <textarea id="inputMessage" class="form-control" rows="4" style="resize:none;"
                                        wire:model="inputMessage"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Send message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>