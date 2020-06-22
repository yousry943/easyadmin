<div class="overviewContainer">
<div id="loadingDiv">



</div>
 @foreach($allCategories as $allCategorie)

 <a  class="blueLink"  href="{{url('chartOfAccounts/tree')}}/{{ $allCategorie->id }}">
                    <div class="item flexBetweenNormal justFlex">
                        <div class="flex chart-flex">
                        <div data-id="{{ $allCategorie->id }}" class="chart-title branch">
                                <i class="fas fa-folder fa-3x"></i>
                                <span>{{ $allCategorie->title }}</span>
                            </div>
                            <div class="chart-entries">
                                <h5>entries</h5>
<span>{!! $allCategorie->get_jornal->sum('Debit') !!}</span>

                            </div>
                            

                    </div><!-- Item --></a>
                    <div class="flex d-counter-container">
                            <div class="debit">
                            {{$allCategorie->amount}}  
                        <a href="#">

                        
                        </a>
                        <h5>
                     
                    
                         </h5>
                            </div>
                            <div class="debitTool">
                                <i class="fas fa-caret-down"></i>
                            </div>
                                <ul class="item-action">
                                    <li>
                                        <a href="{{url('/chartOfAccounts/edit') . '/' .$allCategorie->id }}"><span><i class="fas fa-edit"></i> edit</span></a>
                                    </li>
                                    <li>
                                        <a href="{{url('/chartOfAccounts/destroy') . '/' .$allCategorie->id }}"><span class="itemActionRed"><i class="far fa-trash-alt"></i> delete</span></a>
                                    </li>



                                </ul>
                        </div>
                        </div>
                @endforeach

                    </div>

</a>

</div>