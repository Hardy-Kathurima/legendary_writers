<div>
    <div class="container">
        <h1 class="mt-2 mb-2 text-center"><span class="fw-light">Our</span> <span class="fw-bolder">Prices</span></h1>
        <div class="text-center">
            <p class="lead mb-2">
                Legendary Writers offers custom papers with the highest possible level of academic standards at a
                reasonable
                and affordable price.
                Price of each order is calculated based on various parameters like number of pages, level of complexity
                and
                urgency of the paper.
            </p>
            <p class="lead fw-bold">
                Below you will find the prices (per page) for each complexity level of writing and urgency.
                All Prices are calculated per page where 1 page=250 words
            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <caption class="fw-bold">All The Prices are in dollars.</caption>
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">Deadline</th>
                                <th scope="col">Highschool</th>
                                <th scope="col">College</th>
                                <th scope="col">University</th>
                                <th scope="col">Masters</th>
                                <th scope="col">Phd</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($prices as $price)
                            <tr>
                                @foreach ($price as $item)
                                <td>{{ $item}}</td>
                                @endforeach
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>