<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ITEM CATEGORY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('user.includes.css')
</head>

<body>

  @include('user.includes.header')
    
    
    <section class="site-data-container accountingForm ItemForm ItemCategoryForm">
        <form action="{{url('/addItemCategory')}}" method="post">
            {{csrf_field()}}
        <div class="site-data-wrapper">
            <div class="data-title-search-container">
                <div class="data-title-wrapper breadcrumb-wrapper">
                    <div class="pageName">
                        <span><a href="INV_IC_TOC.html">ITEM CATEGORY/</a></span><span>NEW</span>
                    </div>
                </div>


                <div class="bagntion flex">
                    <div class="add-item-btn">
                        <button  class="save" type="submit">Save</button>
                        <button class="discard" type="reset">Discard</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-sections-wrapper flex">
            <div class="leftPart">

                <div class="box-data-container">

                    <div class="billInputs flexBetween">
                        <div class="billInputsLeft">
                                <div class="flexBetween billOpject"><label for="">Category Name</label><input
                                        type="text" name="category_name"></div>
                            @if ($errors->has('category_name'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('category_name') }}</strong>
                                    </span>
                                @endif
                 
                   
                
                </div>
                <div class="billInputsRight">
                       <div class="flexBetween billOpject"><label for="">Category descreption</label><input type="text" name="category_description"></div>
                                 @if ($errors->has('category_description'))
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $errors->first('category_description') }}</strong>
                                    </span>
                                 @endif
                       
                        
                    
                       
                       
                </div>
            </div>
        </div>

        </div>
        <!-- LeftPart -->


        <div class="rightPart"></div>

        </div>
    </form>
    </section>
    <div class="hiddenAllItems"></div>  
    
    
    
    @include('user.includes.js')
</body>

</html>
