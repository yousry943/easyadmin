<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Location</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('user.includes.css')
</head>

<body>

    @include('user.includes.header')


    <section class="site-data-container accountingForm locationForm">
        <div class="site-data-wrapper">
            <div class="data-title-search-container">
                <div class="data-title-wrapper breadcrumb-wrapper">
                    <div class="pageName">
                        <span><a href="{{url('/location')}}">Location</span></a><span>edit</span>
                    </div>
                </div>


                <div class="site-sections-wrapper flex">
                    <div class="leftPart">
                        <div class="box-data-container">
                            <form action="{{url('/updatelocation/'.$location->id)}}" method="post">
                                {{csrf_field()}}
                                <div class="bagntion flex">
                                    <div class="add-item-btn">
                                        <button type="submit" class="save">
                                            Send </button>
                                    </div>
                                    <div class="add-item-btn">
                                        <button class="discard">Discard</button>
                                    </div>
                                </div>
                                <div class="site-sections-wrapper flex">
                                    <div class="leftPart">
                                        <div class="box-data-container">
                                            <div class="billInputs flexBetween">

                                                <div class="billInputsLeft">

                                                    <div class="flexBetween billOpject"><label for="">CODE</label><input
                                                            name="code" type="text" value="{{$location->code}}"></div>
                                                    <div class="flexBetween billOpject"><label for="">NAME</label><input
                                                            name="name" type="text" value="{{$location->name}}"></div>
                                                </div>
                                                <div class="billInputsRight">
                                                    <div class="flexBetween billOpject">
                                                        <label for="">Wherehouse</label>
                                                        <select name="wharehous_id">
                                                           <option value="{{$location->wherehous->id}}">{{$location->wherehous->name}}</option>
                                                            @foreach($wherehouse as $where)
                                                              <option  value="{{$where->id}}">{{$where->name}}</option>
                                                         @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="flexBetween billOpject">
                                                        <label for="">DESCRIPTION</label>
                                                        <textarea name="desc" rows="4"> {{$location->desc}}
                                                        </textarea>
                                                    </div>


                                                </div>

                                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- LeftPart -->


                    <div class="rightPart"></div>

                </div>

    </section>
    <div class="hiddenAllItems"></div>


    @include('user.includes.js')
</body>

</html>