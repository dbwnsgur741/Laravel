@extends('veritas.bond')

@section('iframe')

    <div class="wrapper">
        <div class="container">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3>투자관리</h3>
                            </div>
                            <div class="module-body">
                                <form class="form-horizontal row-fluid" name="user_input_form" action="/bonds" method="POST">
                                    @csrf
                                    <p><strong>등록하기</strong></p>
                                    <div class="control-group">
                                        <label class="control-label">투자유치</label>
                                        <div class="controls">
                                            <div class="input-append">
                                                <input type="text" name="investment" id="investment" placeholder="" class="w-full span12">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">투자자</label>
                                        <div class="controls">
                                            <div class="input-append">
                                                <input type="text" name="investment_name" id="investment_name" placeholder="" class="span12">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">투자물건</label>
                                        <div class="controls">
                                            <div class="input-append">
                                                <input type="text" name="i_id" id="i_id" placeholder="" class="span12">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">투자금</label>
                                        <div class="controls">
                                            <div class="input-append">
                                                <input type="text" value="" name="price" id="price" placeholder="" class="span12" onchange="getagreement();"><span class="add-on">원</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">목표수익률</label>
                                        <div class="controls">
                                            <div class="input-append">
                                                <input type="text" value="" name="p_goal" id="p_goal" placeholder="" class="span12" onchange="getagreement();"><span class="add-on">%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="contract_date">계약일자</label>
                                        <div class="controls">
                                            <input type="date" value='' id="c_date" name="c_date" class="span12" onchange="cdate(this)">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">입금일자</label>
                                        <div class=" controls">
                                            <input type="date" value='' id="c_date2" name="c_date2" class="span12" onchange="cdate2(this)">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label">약정기일</label>
                                        <div class="controls">
                                            <input onchange="cdate3(this)" value='' type="date" id="c_date3" name="c_date3" class="span12">
                                            <!--	<span class="help-inline">Minimum 5 Characters</span>-->
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">약정기간</label>
                                        <div class="controls">
                                            <div class="input-append">
                                                <input type="text" name="agreement" id="agreement" placeholder="" class="span12" readonly>
                                                <span class="add-on">일</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">목표배당액</label>
                                        <div class="controls">
                                            <div class="input-append">
                                                <span class="add-on">₩</span><input type="text" name="goal_in" id="goal_in" placeholder="" class="span12" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">목표상환액</label>
                                        <div class="controls">
                                            <div class="input-append">
                                                <span class="add-on">₩</span><input type="text" name="goal_out" id="goal_out" placeholder="" class="span12" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">기준일(지급일자)</label>
                                        <div class="controls">
                                            <input type="date" onchange="getInvenstDate();" value="" id="c_date4" name="c_date4" class="span12">
                                            <!--	<span class="help-inline">Minimum 5 Characters</span>-->
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">투자기간</label>
                                        <div class="controls">
                                            <div class="input-append">
                                                <input type="text" name="invest_date" id="invest_date" placeholder="" class="span12" readonly>
                                                <span class="add-on">일</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">지급배당액</label>
                                        <div class="controls">
                                            <div class="input-append">
                                                <span class="add-on">₩</span><input type="text" name="_price" id="_price" placeholder="" class="span12" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="withholding">원천징수율</label>
                                        <div class="controls">
                                            <div class="input-append">
                                                <input type="text" onchange="getagreement();" name="p_price" id="p_price" placeholder="" class="span12" value="27.5"><span class="add-on">%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">원천징수액</label>
                                        <div class="controls">
                                            <div class="input-append">
                                                <span class="add-on">₩</span><input type="text" name="_price2" id="_price2" placeholder="" class="span12" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">총지급액</label>
                                        <div class="controls">
                                            <div class="input-append">
                                                <span class="add-on">₩</span><input type="text" name="t_price" id="t_price" placeholder="" class="span12" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="payment">계약서확인</label>
                                        <div class=" controls">
                                            <select id="contract" name="contract" tabindex="1" data-placeholder="Select here.." class="span12">
                                                <option value='1'>○</option>
                                                <option value='0'>x</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="pledge_date">질권설정일</label>
                                        <div class="controls">
                                            <input type="date" id="c_date5" name="c_date5" class="span12">
                                            <!--	<span class="help-inline">Minimum 5 Characters</span>-->
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="fees">설정비용</label>
                                        <div class="controls">
                                            <div class="input-append">
                                                <input type="text" name="_price3" id="_price3" placeholder="" class="span12"><span class="add-on">원</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="check_2">등기부등본 질권자 설정 확인</label>
                                        <div class="controls">
                                            <select id="confirm1" name="confirm1" tabindex="1" data-placeholder="Select here.." class="span12">
                                                <option value='1'>○</option>
                                                <option value='0'>x</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="check_3">법원 질권자 설정 확인</label>
                                        <div class="controls">
                                            <select id="confirm2" name="confirm2" tabindex="1" data-placeholder="Select here.." class="span12">
                                                <option value='1'>○</option>
                                                <option value='0'>x</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="check_4">등기完통지서</label>
                                        <div class="controls">
                                            <select id="confirm3" name="confirm3" tabindex="1" data-placeholder="Select here.." class="span12">
                                                <option value='1'>○</option>
                                                <option value='0'>x</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="check_5">등기필증</label>
                                        <div class="controls">
                                            <select id="confirm4" name="confirm4" tabindex="1" data-placeholder="Select here.." class="span12">
                                                <option value='1'>○</option>
                                                <option value='0'>x</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="check_6">고객확인</label>
                                        <div class="controls">
                                            <select id="confirm5" name="confirm5" tabindex="1" data-placeholder="Select here.." class="span12">
                                                <option value='1'>○</option>
                                                <option value='0'>x</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">담당법무사</label>
                                        <div class="controls">
                                            <input type="text" id="law_office" name="law_office" class="span12">
                                            <!--	<span class="help-inline">Minimum 5 Characters</span>-->
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">비고</label>
                                        <div class="controls">
                                            <input type="text" name="etc" id="etc" placeholder="" class="span12">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">주소</label>
                                        <div class="controls">
                                            <input type="text" name="address" id="address" placeholder="" class="span12">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">연락처</label>
                                        <div class="controls">
                                            <input type="text" name="phone" id="phone" placeholder="" class="span12">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">생년월일</label>
                                        <div class="controls">
                                            <input type="date" name="birth" id="birth" placeholder="" class="span12">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">이메일</label>
                                        <div class="controls">
                                            <input type="text" name="email" id="email" placeholder="" class="span12">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit">등록하기</button>
                                        </div>
                                    </div>
                                </form>

                                <br/>

                            </div>
                            <!--/.content-->
                        </div>
                        <!--/.span9-->
                    </div>
                <!--/.container-->
            </div>
    </div>
            <!--/.wrapper-->


@endsection