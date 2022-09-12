@extends('layouts.app')

@section('style')
	<!-- Select2 -->
	<link href="{{ asset('dist/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
	<!-- Switchery -->
	<link href="{{ asset('dist/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
	<!-- starrr -->
	<link href="{{ asset('dist/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="{{ asset('dist/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_content">
                <form class="form-label-left input_mask" action="/data-testing/store" method="POST">
                    @csrf

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Jujur</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" placeholder="Jujur" name="jujur">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Wibawa</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" placeholder="Wibawa" name="wibawa">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Hafalan Imriti</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" placeholder="Hafalan Imriti" name="hafalan_imriti">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Tangkas</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" placeholder="Tangkas" name="tangkas">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Ulet</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" placeholder="Ulet" name="ulet">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Disiplin</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input type="text" class="form-control" placeholder="Disiplin" name="disiplin">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Pengurus</label>
                        <div class="col-md-9 col-sm-9 ">
                            <select id="heard" class="form-control" required name="keterangan">
								<option value="">Pilih</option>
								<option value="1">Ya</option>
								<option value="2">Tidak</option>
							</select>
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group row">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                            <a href="/data-testing" type="button" class="btn btn-primary">Cancel</a>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- bootstrap-daterangepicker -->
<script src="{[ asset('dist/vendors/moment/min/moment.min.js') }}"></script>
	<script src="{[ asset('dist/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="{[ asset('dist/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
	<script src="{[ asset('dist/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
	<script src="{[ asset('dist/vendors/google-code-prettify/src/prettify.js') }}"></script>
	<!-- jQuery Tags Input -->
	<script src="{[ asset('dist/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
	<!-- Switchery -->
	<script src="{[ asset('dist/vendors/switchery/dist/switchery.min.js') }}"></script>
	<!-- Select2 -->
	<script src="{[ asset('dist/vendors/select2/dist/js/select2.full.min.js') }}"></script>
	<!-- Parsley -->
	<script src="{[ asset('dist/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
	<!-- Autosize -->
	<script src="{[ asset('dist/vendors/autosize/dist/autosize.min.js') }}"></script>
	<!-- jQuery autocomplete -->
	<script src="{[ asset('dist/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
	<!-- starrr -->
	<script src="{[ asset('dist/vendors/starrr/dist/starrr.js') }}"></script>
@endsection