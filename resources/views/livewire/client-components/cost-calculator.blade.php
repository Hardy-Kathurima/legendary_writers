<div>
    <div class="card">
        <div class="card-body">
            <h5>Calculate Paper Cost</h5>
            <form>
                <div class="row justify-content-center ">
                    <div class="col-md-12">
                        <div class="mb-3 mt-2">
                            <select name="academic_level" id="academic_level" class="form-control py-2"
                                wire:model.lazy="academic_level">
                                <option value="" selected>Academic Level</option>
                                <option value="High School">High School</option>
                                <option value="College">
                                    College</option>
                                <option value="Undergraduate">Undergraduate
                                </option>
                                <option value="Master">Master
                                </option>
                                <option value="Phd">Phd</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="mb-3">

                            <select name="paper_type" id="paper_type" class="form-control py-2" wire:model="paper_type">
                                <option value="" selected>Paper Type</option>
                                <option value="Dissertation">
                                    Dissertation</option>
                                <option value="Article Writing">Article Writing
                                </option>
                                <option value="Essay">Essay</option>
                                <option value="Assignment">
                                    Assignment</option>
                                <option value="Term Paper">Term
                                    Paper</option>
                                <option value="Case Study">Case
                                    Study</option>
                            </select>


                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="mb-3">

                                    <select name="urgency" id="urgency" class="form-control py-2" wire:model="urgency">
                                        <option value="">Deadline</option>
                                        <option value="1">1 Day</option>
                                        @foreach ($daysArray as $day)
                                        @if ($day>1)
                                        <option value="{{ $day }}">{{ $day }} Days</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12 mb-3">
                                <select class="form-control py-2" name="number_pages" wire:model="number_pages">
                                    <option value="" selected>Number of pages</option>
                                    <option value="1">1 page / 275 words</option>
                                    <option value="2">2 pages / 550 words</option>
                                    <option value="3">3 pages / 825 words</option>
                                    <option value="4">4 pages / 1100 words</option>
                                    <option value="5">5 pages / 1375 words</option>
                                    <option value="6">6 pages / 1650 words</option>
                                    <option value="7">7 pages / 1925 words</option>
                                    <option value="8">8 pages / 2200 words</option>
                                    <option value="9">9 pages / 2475 words</option>
                                    <option value="10">10 pages / 2750 words</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 my-3">
                                <div class="fs-3">Your Price is <span
                                        class="fw-bolder text-success">${{ $totalCost }}.00</span></div>

                                <div class="my-3"><a class="btn btn-md btn-primary"
                                        href="{{ route('create.order') }}">Write my paper</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
        </div>
    </div>
    </form>
</div>
</div>
</div>