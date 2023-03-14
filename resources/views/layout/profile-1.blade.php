<div class="columns is-justify-content-center">
    <div class="column is-7 ml-6">
        <h5 data-aos="fade-out" class="title has-text-left" style="margin-top:40px;"> {{ $d["nama"] }} </h5>
        <div class="is-size-6  has-text-left has-text-weight-semibold">
            <span>{{ $d["nim"] }} &nbsp|</span>
            <span> &nbsp {{ $d["email"] }} </span>
        </div>
        <p class="has-text-justified" data-aos="fade-up" style="margin-top:10px;">
              {{ $d["description"] }}
        </p>
    </div>

    <figure class="ml-6 mt-6" style="margin-top:10px;">
        <img src= "{{ URL::asset( $d["imgsrc"] ) }}" alt="{{ $d["alt"] }}" style="width:200px; height: 200px; border-radius: 50%;">
    </figure>
</div>