<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>chartOfAccounts Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 @include('user.includes.css')
</head>

<body>
 @include('user.includes.header')

    <section class="site-data-container chartOfAccounts chartOfAccountsForm editchart">

        <div class="site-data-wrapper">
            <div class="data-title-search-container">
                <div class="data-title-wrapper breadcrumb-wrapper">
                    <div class="pageName">
                        <span><a href="chartOfAccounts.html">Chart Of Accounts /</a></span><span>NEW</span>
                    </div>
                </div>




            </div>
        </div>
        <div class="content">
            <div class="ACC-T-F">

<form action="{{url('/chartOfAccounts/update/'.$id)}}" method="post" class="flexCenter">

{{csrf_field()}}
<div class="bagntion">
<!--
    <div class="add-item-btn">

        <span class="save">
          <button type="submit" class="save">
                Send      </button>
        </span>
    </div>
-->

    <div class="add-item-btn">
          <button type="submit" class="save">save</button>
          <button class="discard" type="reset">Discard</button>

    </div>
</div>
                    <div class="requ">
                        <label for="">Main Account</label>
                    
                        <select name="parent_id" id="" style="width:100%">

                          <option value="{{ $chartOfAccounts->parent_id }}">{{ $chartOfAccounts->title }}</option>
                          <option value="0">Main Account</option>
                          @foreach($allchartOfAccounts as $rows)
                                <option value="{{ $rows->id }}">{{ $rows->title }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="requ">
                        <label for="">Code</label>
                        <input type="text" name="code" placeholder="code" value="{{$chartOfAccounts->code}}">
                    </div>
                    <div class="requ">
                        <label for="">Name</label>
                       <input type="text" name="title" placeholder="name" value="{{$chartOfAccounts->title}}">
                    </div>
                    <div class="requ">
                        <label for="">Openning Balance</label>
                       <input type="text" name="amount" placeholder="Openning Balance" value="{{$chartOfAccounts->amount}}">
                    </div>
                    <!-- <div class="requ">
                        <label for="">Main Account</label>
                        <select name="" id="" >
                            <option value="">Please Select</option>
                            <option value="">Sub Account</option>
                        </select>
                    </div> -->
                    <div class="requ">
                        <label for="">type</label>
                        <div>
                            <input type="radio" id="credit" name="type" value="credit" @if($chartOfAccounts->type == 0) checked @endif>
                            <label for="credit">credit</label>
                            <input type="radio" id="depit" name="type" value="depit"  @if($chartOfAccounts->type == 1) checked @endif>
                            <label for="depit">depit</label>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </section>
 @include('user.includes.js')
</body>

</html>
