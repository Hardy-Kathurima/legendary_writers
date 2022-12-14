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
                            <form wire:submit.prevent="sendEmail" id="guestForm">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" id="inputName" class="form-control" wire:model="inputName" />
                                    <div class="my-2 text-danger">
                                        @error("inputName")
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">E-Mail</label>
                                    <input type="email" id="inputEmail" class="form-control" wire:model="inputEmail" />
                                    <div class="my-2 text-danger">
                                        @error("inputMail")
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSubject">Subject</label>
                                    <input type="text" id="inputSubject" class="form-control"
                                        wire:model="inputSubject" />
                                    <div class="my-2 text-danger">
                                        @error("inputSubject")
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="inputMessage">Message</label>
                                    <textarea id="inputMessage" class="form-control" rows="4" style="resize:none;"
                                        wire:model="inputMessage"></textarea>
                                    <div class="my-2 text-danger">
                                        @error("inputMessage")
                                        {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn  btn-secondary py-2 d-flex text-white  px-5">
                                        <span wire:loading.block target="sendEmail">Sending...</span>
                                        <span wire:loading.remove>Send Message</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>