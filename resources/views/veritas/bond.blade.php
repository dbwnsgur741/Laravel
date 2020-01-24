@extends('veritas.layout')


@section('contents');

<style>
    .col0{
        padding-right: 5px;
        text-align: left;
        font-size: 10px;
    }
</style>
<div class="content ml-5">

    <div class="module">
        <div class="module-head">
            <h3>투자관리(투자부)</h3>
        </div>
        <div class="module-body table">
            <div>
                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped display" width="100%">
                    <thead>
                    <tr style="font-size:10px !important;">
                        <th class="col0">투자자</th>
                        <th class="col0">투자물건</th>
                        <th class="col0">투자금</th>
                        <th class="col0">목표수익률</th>
                        <th class="col0">투자기간</th>
                        <th class="col0">지급배당액</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr style="font-size:10px !important;">
                        <th class="col0">고소득</th>
                        <th class="col0">신림동모텔</th>
                        <th class="col0">100,000,000원</th>
                        <th class="col0">13%</th>
                        <th class="col0">77일</th>
                        <th class="col0">2,742,324원</th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br>
    <button id="exc_btn" onclick="setExcel();">엑셀로추가</button>
    <button id="inv_btn" onclick="invest_input();">+</button>
    <button id="mod_btn" onclick="setModify();">Modify</button>
    <button id="del_btn" onclick="setDelete();">Delete</button>

</div>
<!--/.content-->

@endsection