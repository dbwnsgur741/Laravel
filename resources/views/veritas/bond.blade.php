@extends('veritas.layout')


@section('contents');

@isset($values)
@foreach($values as $value)
    {{ $value }}
@endforeach
@endisset

<div class="content ml-5">

    <div class="module">
        <div class="module-head">
            <h3>투자관리(투자부)</h3>
        </div>
        <div class="module-body table">
            <div>
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
                    <thead>
                    <tr style="font-size:12px !important;">
                        <th class="col0">투자자</th>
                        <th class="col0">투자물건</th>
                        <th class="col0">투자금</th>
                        <th class="col0">목표수익률</th>
                        <th class="col0">투자기간</th>
                        <th class="col0">지급배당액</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($bonds as $bond)
                    <tr style="font-size:12px !important;">
                        <th class="col0">{{ $bond->investment_name }}</th>
                        <th class="col0">{{ $bond->i_id }}</th>
                        <th class="col0">{{ $bond->price }}원</th>
                        <th class="col0">{{ $bond->p_goal }}%</th>
                        <th class="col0">{{ $bond->agreement }}일</th>
                        <th class="col0">{{ $bond->goal_out }}원</th>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br>
    <button id="inv_btn"><a href="/bonds/create">+</a></button>
    <button id="mod_btn" onclick="setModify();">Modify</button>
    <button id="del_btn" onclick="setDelete();">Delete</button>

</div>
<!--/.content-->
@yield('iframe')

@endsection