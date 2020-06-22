@php
$amountall = 0;
$totalall =  \DB::table('chart_of_accounts')->select(DB::raw(' parent_id, SUM(amount) as total'))
->where('parent_id','=',$allCategorie->id)->groupBy('parent_id')->get();
for($i = 0; $i < count($totalall) ; $i++){
                               $amountall += $totalall[$i]->total;
                            }
@endphp