@extends('layouts.main')

@section('main')
    <div class="u-content">
        <div class="u-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card mt-5">
                            <div class="card-header">
                                <h4>Select Time Range to Print Borrow Details</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="/laporan/print">
                                    @csrf
                                    <div class="form-group">
                                        <label for="start_date">Start Date:</label>
                                        <input type="date" class="form-control" id="start_date" name="start_date">
                                    </div>
                                    <div class="form-group">
                                        <label for="end_date">End Date:</label>
                                        <input type="date" class="form-control" id="end_date" name="end_date">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Print</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
