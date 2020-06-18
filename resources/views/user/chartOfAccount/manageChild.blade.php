<ul>

    @foreach($childs as $child)



        <li data-id="{{$child->id}}">




 <a class="yousry_link" >{{ $child->title }}</a>


            @if(count($child->childs))

                @include('user.chartOfAccount.manageChild',['childs' => $child->childs])

            @endif

        </li>

    @endforeach

</ul>
