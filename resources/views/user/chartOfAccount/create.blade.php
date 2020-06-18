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

    <section class="site-data-container chartOfAccounts chartOfAccountsForm">

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
                <form action="{{url('/chartOfAccounts/store')}}" method="post" class="flexCenter">
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
    <div class="billinputcontainer">

   
    </div>
                    <div class="requ">
                        @php
                           $sign = "- ";
                           $count = 1;
                        @endphp
                        <select name="parent_id" id="" style="width:100%">
                          <option value="0">Main Account</option>
  
                          @foreach($allchartOfAccounts as $rows)
                                <option value="{{ $rows->id }}">
                                  
                               

                               @if(count($rows->childs))
                                 
                                   {{str_repeat($sign,$count) . '┘'}} 
                                   @php $count++;
                                 
                                 @endphp
                             

                               @else
                                     
                                       
                                @php 
                                echo str_repeat($sign,$count) . '┘';
                                    $count  = 1;
                                     
                                @endphp
                            

                               @endif
                               {{ $rows->title }}

                               
                            </option>
                          @endforeach
                        </select>
                    </div>
                    <div class="requ">
                       
                        <input type="text" name="code" placeholder="code">
                    </div>
                    <div class="requ">
                        
                       <input type="text" name="title" placeholder="name">
                    </div>
                    <div class="requ">
                       
                       <input type="text" name="amount" placeholder="Openning Balance">
                    </div>
                     
                    <div class="requ">
                      
                        <div>
                       
                            <input type="radio" id="credit" name="type" value="credit">
                            <label for="credit">credit</label>
                            <input type="radio" id="depit" name="type" value="depit">
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
