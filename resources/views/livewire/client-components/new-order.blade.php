<div>
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form wire:submit.prevent="addOrder" enctype="multipart/form-data">
                @csrf
                {{-- step 1 --}}
                @if ($currentStep==1)
                <div class="step-one">
                    <div class="card">
                        {{-- <div class="card-header bg-secondary">Step 1</div> --}}
                        <div class="card-body">
                            <div class="row mb-2 p-3">
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="academic_level" class="form-label">Academic Level <span
                                                class="text-danger">*</span></label>
                                        <select name="academic_level" id="academic_level" class="form-control"
                                            wire:model.lazy="academic_level">
                                            <option value="">Select</option>
                                            <option value="High School">High School</option>
                                            <option value="College">
                                                College</option>
                                            <option value="Undergraduate">Undergraduate
                                            </option>
                                            <option value="Master">Master
                                            </option>
                                            <option value="Phd">Phd</option>
                                        </select>
                                        @error('academic_level')
                                        <div class="error text-danger text-center">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="urgency" class="form-label">Urgency <span
                                                class="text-danger">*</span></label>
                                        <select name="urgency" id="urgency" class="form-control" wire:model="urgency">
                                            <option value="">Select</option>
                                            <option value="1">1 Day</option>
                                            @foreach ($daysArray as $day)
                                            @if ($day>1)
                                            <option value="{{ $day }}">{{ $day }} Days</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        @error('urgency')
                                        <div class="error text-danger text-center">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="subject" class="form-label">Subject/Domain <span
                                                class="text-danger">*</span></label>
                                        <select name="subject" id="subject" class="form-control" wire:model="subject">
                                            <option value="">Select</option>
                                            <option value="Business Plan">
                                                Business Plan</option>
                                            <option value="Human Resource">Human Resource</option>
                                            <option value="Industry Analysis">Industry Analysis
                                            </option>
                                            <option value="Health Care">
                                                Health Care</option>
                                            <option value="Nursing">Nursing
                                            </option>
                                            <option value="Education">Education
                                            </option>
                                        </select>
                                        @error('subject')
                                        <div class="error text-danger text-center">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2 p-3">
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="paper_type" class="form-label">Paper Type <span
                                                class="text-danger">*</span></label>
                                        <select name="paper_type" id="paper_type" class="form-control"
                                            wire:model="paper_type">
                                            <option value="">Select</option>
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
                                        @error('paper_type')
                                        <div class="error text-danger text-center">{{ $message }}</div>
                                        @enderror

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="number_pages" class="form-label">Number of Pages<span
                                                class="text-danger">*</span></label>
                                        <select name="number_pages" id="number_pages" class="form-control"
                                            wire:model="number_pages">
                                            <option value="">Select</option>
                                            <option value="1">1 Page
                                                (250 words)</option>
                                            <option value="2">2 Pages (500 words)
                                            </option>
                                            <option value="3">3 Pages (750 words)
                                            </option>
                                            <option value="4">4 Pages (1000 words)
                                            </option>
                                            <option value="5">5 Pages (1250 words)
                                            </option>
                                            <option value="6">6 Pages (1500 words)
                                            </option>
                                            <option value="7">7 Pages (1750 words)
                                            </option>
                                            <option value="8">8 Pages (2000 words)
                                            </option>
                                            <option value="9">9 Pages (2250 words)
                                            </option>
                                            <option value="10">10 Pages (2500
                                                words)</option>

                                        </select>
                                        @error('number_pages')
                                        <div class="error text-danger text-center">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>

                            </div>
                            @if ($showAdded)
                            <div class="row mb-2 p-3">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="plagiarism_report"
                                            value="plagiarism report" id="plagiarism_report"
                                            wire:model="plagiarism_report">
                                        <label class="form-check-label" for="plagiarism_report">
                                            Plagiarism Report
                                        </label>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="copies_sources"
                                            value="copies of sources required" id="copies_sources"
                                            wire:model="copies_sources">
                                        <label class="form-check-label" for="copies_sources">
                                            Copies of Sources
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="page_summary"
                                            value="one page summary" id="page_summary" wire:model="page_summary">
                                        <label class="form-check-label" for="page_summary">
                                            1 page Summary
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                @endif

                {{-- step two --}}
                @if ($currentStep==2)
                <div class="step-two">
                    <div class="card">
                        {{-- <div class="card-header bg-secondary">Step 2</div> --}}
                        <div class="card-body">
                            <div class="row mb-2 p-3 justify-content-center">
                                <div class="col-md-8">
                                    <div class="mb-2">
                                        <label for="paper_title" class="form-label">Paper Title <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="paper_title" id="paper_title" class="form-control"
                                            wire:model="paper_title">
                                        @error('paper_title')
                                        <div class="error text-danger text-center">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2 p-3">
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="language_style" class="form-label">Language Style <span
                                                class="text-danger">*</span></label>
                                        <select name="language_style" id="language_style" class="form-control"
                                            wire:model="language_style">
                                            <option value="">Select</option>
                                            <option value="english (us)">English (US)</option>
                                            <option value="english (uk)">English (UK)</option>
                                            <option value="not a native speaker">Not a Native
                                                Speaker</option>
                                        </select>
                                        @error('language_style')
                                        <div class="error text-danger text-center">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="paper_style" class="form-label">Style <span
                                                class="text-danger">*</span></label>
                                        <select name="paper_style" id="paper_style" class="form-control"
                                            wire:model="paper_style">
                                            <option value="">Select</option>
                                            <option value="MLA">MLA</option>
                                            <option value="APA">APA</option>
                                            <option value="Havard">Havard
                                            </option>
                                            <option value="Oxford">Oxford
                                            </option>
                                            <option value="AOM">AOM</option>
                                            <option value="Chicago">Chicago
                                            </option>
                                        </select>
                                        @error('paper_style')
                                        <div class="error text-danger text-center">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-2">
                                        <label for="number_sources" class="form-label">Number of
                                            Sources<span></span></label>
                                        <select name="number_sources" id="number_sources" class="form-control"
                                            wire:model="number_sources">
                                            <option value="">Select</option>
                                            <option value="writers choice">Writers Choice
                                            </option>
                                            <option value="not required">Not Required</option>
                                            <option value="1">1 Source</option>
                                            <option value="2">2 Sources</option>
                                            <option value="3">3 Sources</option>
                                            <option value="4">4 Sources</option>
                                            <option value="5">5 Sources</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endif

                {{-- step three --}}
                @if ($currentStep==3)
                <div class="step-three">
                    <div class="card">

                        {{-- <div class="card-header bg-secondary">Step three</div> --}}
                        <div class="card-body">
                            <div class="row mb-2 p-3 justify-content-center">
                                <div class="col-md-8">
                                    <div class="mb-2">
                                        <label for="paper_details" class="form-label">Specific Instructions <span
                                                class="text-danger">*</span></label>
                                        <textarea name="paper_details" style="height: 140px; resize:none;"
                                            class="form-control" id="paper_details"
                                            placeholder="Please mention any specific requirements of the paper"
                                            wire:model="paper_details"></textarea>
                                        @error('paper_details')
                                        <div class="error text-danger text-center">{{ $message }}</div>
                                        @enderror

                                    </div>

                                </div>
                            </div>
                            <div class="row mb-2 p-3 justify-content-center p-3">
                                <div class="col-md-10">
                                    <div class="mb-2">
                                        <label for="paper_file" class="form-label">File Upload</label>
                                        <input type="file" name="paper_file" id="paper_file" class="form-control"
                                            wire:model="paper_file">
                                        @error('paper_file')
                                        <div class="error text-danger text-center">{{ $message }}</div>
                                        @enderror
                                        <div wire:loading wire:target="paper_file" class="text-success my-2">
                                            Uploading...
                                        </div>
                                        <p class="text-secondary my-3">
                                            <span><i class="bi bi-check2-square me-2"></i></span>
                                            Please upload any material pertaining to the order. Files may be
                                            uploaded up to
                                            a total size of 6MB.You can also upload files after placing the order by
                                            logging
                                            into
                                            your
                                            account.</p>
                                    </div>

                                </div>
                            </div>
                            <div class="row mb-2 justify-content-center p-3">
                                <div class="col-md-6">
                                    <div class="form-check my-3">
                                        <input class="form-check-input" type="checkbox" name="terms" value="1"
                                            id="terms" wire:model="terms">
                                        <label class="form-check-label" for="terms">
                                            Agree to <a href="{{ route('terms') }}">Terms and conditions</a>
                                        </label>
                                        @error('terms')
                                        <div class="error text-danger text-center">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endif
                <div class="d-flex justify-content-between my-3">
                    @if ($totalCost)
                    <div class="align-self-center"><span class="text-muted">Estimated Price: </span><span
                            class="font-weight-bold">${{ $totalCost }}.00</span></div>
                    <div>
                        @else
                        @if ($showCost)
                        <div class="align-self-center"><span class="text-muted">Estimated Price: </span><span
                                class="font-weight-bold">:</span>
                        </div>
                        @endif
                        <div>
                            @endif

                            <div class="action-buttons">
                                @if ($currentStep==1)
                                <div></div>
                                @endif

                                @if($currentStep == 2 || $currentStep ==3)
                                <button type="button" class="btn btn-secondary" wire:click="decreaseStep()"> <span
                                        class="mr-3"><i class="fa fa-arrow-left"></i> </span> Previous</button>
                                @endif

                                @if ($currentStep==1 || $currentStep==2)
                                <button type="button" class="btn btn-dark ml-4" wire:click="increaseStep()">Next
                                    <span class="ml-3"><i class="fa fa-arrow-right"></i> </span></button>
                                @endif
                                @if ($currentStep==3)
                                <button type="submit" class="btn btn-dark">Proceed <span class="ml-3"><i
                                            class="fa fa-arrow-right"></i> </span></button>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>