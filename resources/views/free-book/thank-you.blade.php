@extends('layouts.main')

@section('title', 'Bien Oropeza | Oropeza Business Process Outsourcing Services | Accounting | Tax | Payroll')

@section('content')

            <div id="about" class="about px-4 bg-white py-5">
                <div class="titie-row row mb-3">
                    <h2 class="fw-bolder">Thank you!</h2>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <p>You may now download your free copy of the book by clicking the button below.</p>
                        <div class="shadow-md p-4 rounded bg-white">
                            <form method="POST" action="/free-book/download">
                                @csrf
                                <button class="btn btn-outline-primary fw-bolder fs-7 px-4 py-2 mt-3 rounded-pill">Download</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="{{ asset('/assets/images/book.jpg') }}" alt="">
                    </div>
                </div>
            </div>

@endsection
