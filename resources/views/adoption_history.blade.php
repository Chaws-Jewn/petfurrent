@extends('layouts.app_nav')

@section('content')



<style>
    .table-contents {
        text-align: center;
        padding-top: 10px;
        font-size: 20px;
        font-weight: 300;
        color: black;
    }

    h2 {
        margin-top: -40px;
    }

    table {
        width: 100%;
        padding: 10px;
        background-color: #DEDEDE;
        border-radius: 30px;
    }

    th, td {
        font-weight: 300;
        padding-top: 10px;
        padding-bottom: 10px;

    }

    .t-head {
        background-color: #ECE7E6;
        border-radius: 30px;
    }

    span {
        font-weight: 300;
    }

</style>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 class="display-4 font-weight-bold text-primary">Adoption History</h2>
    </div>
        <p>Table where you can see the status of your adoption form:</p>
    <!-- Table for Adoption History -->
    <table>
        <thead class="t-head">
            <tr class="table-contents">
                <th >Adopt ID</th>
                <th >Dog Name</th>
                <th >Date of Adoption</th>
                <th >Adopt Status</th>
                <th >Remarks<th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adoptions as $adoption)
            <tr class="table-contents">
                <td >{{ $adoption->id }}</td>
                <td>{{ optional($adoption->dog)->name }}</td>
                <td>Sample date</td>
                <td >
                    <span class="badge bg-primary {{ $adoption->adopt_status }}">
                        {{ $adoption->adopt_status }}
                    </span>
                </td>
                <td>remarks sample here</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
