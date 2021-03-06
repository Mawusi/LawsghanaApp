@extends('extenders.main')

@section('title', 'Foreign Case Laws')

@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <style type="text/css">
        .navbar {
          min-height: 1px;
        }
        .nav>li>a {
            position: relative;
            display: block;
            padding: 10px 14px;
            color: white;
            }
        .nav>li>a:hover {
            color: #004353;
        }
        .navbar-brand {
          padding-top: 17px;
          padding-top: 17px;
          line-height: 15px;
        }
        .navbar-toggle {
          /* (80px - button height 34px) / 2 = 23px */
          margin-top: 23px;
          padding: 9px 10px !important;
        }
        @media (min-width: 768px) {
          .navbar-nav > li > a {
            /* (80px - line-height of 27px) / 2 = 26.5px */
            padding-top: 10px;
            padding-bottom: 10px;
            line-height: 10px;
          }
        }
        .content {
            padding: 0.1px;
        }
        .bg-header-color{
            background-color: #004353;
        }
        .form-group-customised{
            margin-bottom: .1px;
        }
    </style>
@endsection

@section('content')

{{--
@section('second_nav')
    @include('law_judgment_foreign.foreign_judgement_menu')
@endsection
--}}

    <div class="container-fluid content">
        <div class="row">
            <div class="col-md-9">
            @include('law_judgment_foreign.foreign_judgement_menu')
                <div class="row">
                        <div class="col-md-9">
                            <div class="list-group">
                                <table class="table table-striped table-condensed" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>Country</th>
                                            <th>Case Laws Title</th>
                                            <th>Year</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                    @foreach($allCountriesJudgementLaws as $allCountriesJudgementLaw)
                                        <tr>
                                            <td>{{ $allCountriesJudgementLaw->country_name }}</td>
                                            <td>
                                                <a href="/judgement/{{ $allCountriesJudgementLaw->country_name }}/{{ $allCountriesJudgementLaw->id}}"><li style="list-style: none;">{{ $allCountriesJudgementLaw->case_title }}</li></a>
                                            </td> 
                                            <td>{{ $allCountriesJudgementLaw->year }}</td>  
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- for the filter -->
                        @include('law_judgment_foreign.foreign_all_judgment_container_main')
                </div>
            </div>
                        <!-- for the ads -->
                        @include('extenders.ads')
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function(){
            $('#datatable').DataTable();
        });
    </script>
@endsection