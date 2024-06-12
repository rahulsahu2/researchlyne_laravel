<!-- ===============>> Service section start here <<================= -->
<section class="service padding-top padding-bottom">
    <div class="section-header section-header--max50">
        <h2 class="mb-10 mt-minus-5">{{$data->title}}</h2>
        <p>DATA OF THE MONTH ENDING MAY,2024</p>
    </div>
    <div class="container">
        <div class="service__wrapper">
        <div class="row g-4 investor-table align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="service__item service__item--style1 " data-aos="fade-up" data-aos-duration="800">
                <div class="text-center table-responsive invest-table">
                    <table class="table table-striped">
                        <thead class="table-danger">
                          <tr class="danger">
                            @foreach ($data->columns as $item)
                                <th>{{$item}}</th>
                            @endforeach
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data->rows as $item)
                            <tr>
                                @foreach ($item as $key => $value)
                                    <td>{{$value}}</td>
                                @endforeach
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
            <p>{{$data->description}}</p>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- ===============>> Service section start here <<================= -->