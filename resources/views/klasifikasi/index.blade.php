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
        <div class="col-12">
            <div class="x_panel">
				<div class="x_title">
                    <h2>Pendukung Keputusan Pemilihan Pengurus</h2>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <form action="/klasifikasi/show" method="get" class="form-horizontal form-label-left">
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Pilih Santri</label>
                            <div class="col-md-9 col-sm-9 ">
                                <select id="select2_single" class="select2_single form-control" tabindex="-1" name="santri">
                                    <option>Pilih Santri</option>
                                    @foreach($santri as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Pilih Nilai K</label>
                            <div class="col-md-9 col-sm-9 ">
                                <select class="select2_single form-control" tabindex="-1" name="nilai_k">
                                    <option>Pilih Nilai</option>
                                    <option value="1">1</option>
                                    <option value="3">3</option>
                                    <option value="5">5</option>
                                    <option value="7">7</option>
                                    <option value="9">9</option>
                                    <option value="15">15</option>
                                </select>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group row">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
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

    <script>
        $("#select2_single").select2({
            placeholder: "Select a state",
            allowClear: true
        });
    </script>
@endsection