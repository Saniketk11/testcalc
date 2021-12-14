<?php

namespace App\Http\Controllers;
use App\Models\salary;
use App\Models\merit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class calculation extends Controller
{
    function cc()
    {

        $d=salary::all();
        $d2=merit::all();
        $users = DB::table('salaries')
          ->leftJoin('merits', 'salaries.crgrouping', '=', 'merits.CR_Grouping')
            //   ->leftJoin('merits', 'salaries.performance', '=', 'merits.Performance_Rating')
            ->paginate(7)
            ;

           
       
            $BV=987654;
            $PR=5 ;
            $k=0.8; 

       
         
      
         return view("/calc",["data"=>$d,"data2"=>$d2,'users'=>$users]);
            
    }
 
    function optim_function($x)
{
data_joined<-data_joined %>% mutate(Increment_Value=`Current Salary`*`Inc Percentage`*x) %>% mutate(Revised_salary=`Current Salary`+Increment_Value)%>%mutate(Pay_Gap=k*SalaryMid-Revised_salary);
budget<-sum(data_joined$Increment_Value);
data_joined_filtered<-data_joined %>% filter(Pay_Gap>0,`Performance Rating`>=PR);
pay_gap<-sum(data_joined_filtered$Pay_Gap);
value<-budget+pay_gap-BV;
return(value);
}
    
}
