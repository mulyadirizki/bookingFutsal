@extends('pemain.default')

@push('meta')
    <meta name="author" content="HPV">
    <meta name="keywords" content="">
    <meta name="description" content=""/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('title')
<title>Booking | Futsal</title>
@endpush

@push('css')
<link rel="stylesheet" href="{{ url('assets/front/css/bootstrap.css') }}">
@endpush
@push('script')
    <script src="{{ asset('assets/js/booking.js') }}"></script>
@endpush
@section('content')
	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="login_form_inner">
						<h3>Booking</h3>
						<form action="{{ route('bookingAdd') }}" method="POST" class="row login_form" id="contactForm" novalidate="novalidate">
                        @csrf
                            <div class="form-group row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Lapangan</label>
                                <div class="col-lg-8 form-group">
                                    <select name="id_lapangan" id="id_lapangan" class="form-control">
                                        <option disabled selected>Pilih Lapangan</option>
                                        @foreach($lapangan as $l)
                                            <option value="{{ $l->id_lapangan }}">{{ $l->dsc_lapangan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="staticEmail" class="col-sm-4 col-form-label">Tgl Booking</label>
                                <div class="col-md-8 form-group">
                                    <input type="date" class="form-control" id="tgl_booking" name="tgl_booking" placeholder="Tgl Booking" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tgl Booking'">
                                </div>
                                <label for="staticEmail" class="col-sm-4 col-form-label">Jam Mulai</label>
                                <div class="col-md-8 form-group">
                                    <select id="jam_mulai" name="jam_mulai" class="form-control">
                                       
                                    </select>
                                </div>
                                <label for="staticEmail" class="col-sm-4 col-form-label">Jam Berakhir</label>
                                <div class="col-md-8 form-group">
                                    <select id="jam_berakhir" name="jam_berakhir" class="form-control">
                                       
                                    </select>
                                </div>
                                <label for="staticEmail" class="col-sm-4 col-form-label">Harga Lapangan</label>
                                <div class="col-md-8 form-group">
                                    @foreach($lapangan as $l)
                                    <input type="text" class="form-control" disabled value="{{ $l->harga_lapangan }}" placeholder="Harga Lapangan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Harga Lapangan'">
                                    @endforeach
                                </div>
                            </div>
                            <input type="hidden" name="roles" id="roles" value="3">
							<div class="col-md-6 form-group">
								<button type="submit" value="submit" class="primary-btn">Booking</button>
							</div>
                            <div class="col-md-6 form-group">
                                <button type="submit" value="submit" class="primary-btn">Kembali</button>
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
@endsection

