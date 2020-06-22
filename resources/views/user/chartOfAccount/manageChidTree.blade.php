<ul>

    @foreach($childs as $child)



        <li>




 <a>{{ $child->title }}</a>


            <!-- @if(count($child->childs))

                @include('user.chartOfAccount.manageChild',['childs' => $child->childs])

            @endif -->

        </li>

    @endforeach

</ul>
